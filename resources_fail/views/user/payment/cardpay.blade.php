<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Checkout</title>
  {{-- Bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  {{-- Stipe js --}}
  <style>
    .invisible {
      display: none;
    }
  </style>
  <script src="https://js.stripe.com/v3/"></script>
</head>

<body>
  <div class="container d-flex justify-content-center align-items-center" style="width: 50%; height: 95vh;">
    <form id="payment-form">
      <div id="payment-element">
        <!-- Elements will create form elements here -->
      </div>
      <button class="btn btn-primary mt-2" id="submit" style="width: 100%;">
        <span>Pay NZ$</span><span>{{ number_format(strval($total), 2) }}</span>
        <span class="invisible spinner-border text-light" role="status"></span>
      </button>
      <div id="error-message">
        <!-- Display error message to your customers here -->
      </div>
    </form>
  </div>

  <script>
    var payBtn = document.getElementById('submit')
    var spanPay = Array.from(document.getElementById('submit').children)[0]
    var spanSpin = Array.from(document.getElementById('submit').children)[1]
    payBtn.addEventListener('click', (e)=> {
      spanPay.classList.add('invisible')
      spanSpin.classList.remove('invisible')
    })
  </script>
  <script>
    // Set your publishable key: remember to change this to your live publishable key in production
  // See your keys here: https://dashboard.stripe.com/apikeys
  const stripe = Stripe('pk_test_51Lc5rqSBfFmsnB5R6gomj9pHoieC83no0e27LDZxDI5jq7CyOCP6cp8elOauHowMBTtPiqbOd3IZVKV1AZZ0TFLp00hN7DTgqi');

  const options = {
  clientSecret: '{{$client_secret}}',
  // Fully customizable with appearance API.
  appearance: {/*...*/},
  };

  // Set up Stripe.js and Elements to use in checkout form, passing the client secret obtained in step 2
  const elements = stripe.elements(options);

  // Create and mount the Payment Element
  const paymentElement = elements.create('payment');
  paymentElement.mount('#payment-element');

  const form = document.getElementById('payment-form');

form.addEventListener('submit', async (event) => {
  event.preventDefault();
  url = "{{route('imdt')}}"
  const {error} = await stripe.confirmPayment({
    //`Elements` instance that was used to create the Payment Element
    elements,
    confirmParams: {
      return_url: url,
    },
  });

  if (error) {
    // This point will only be reached if there is an immediate error when
    // confirming the payment. Show error to your customer (for example, payment
    // details incomplete)
    const messageContainer = document.querySelector('#error-message');
    messageContainer.textContent = error.message;
  } else {
    // Your customer will be redirected to your `return_url`. For some payment
    // methods like iDEAL, your customer will be redirected to an intermediate
    // site first to authorize the payment, then redirected to the `return_url`.
  }
});
  </script>
  <script>
    // Initialize Stripe.js using your publishable key
const stripe = Stripe('pk_test_51Lc5rqSBfFmsnB5R6gomj9pHoieC83no0e27LDZxDI5jq7CyOCP6cp8elOauHowMBTtPiqbOd3IZVKV1AZZ0TFLp00hN7DTgqi');

// Retrieve the "payment_intent_client_secret" query parameter appended to
// your return_url by Stripe.js
const clientSecret = new URLSearchParams(window.location.search).get(
  '{{$client_secret}}'
);

// Retrieve the PaymentIntent
stripe.retrievePaymentIntent("{{$client_secret}}").then(({paymentIntent}) => {
  const message = document.querySelector('#message')

  // Inspect the PaymentIntent `status` to indicate the status of the payment
  // to your customer.
  //
  // Some payment methods will [immediately succeed or fail][0] upon
  // confirmation, while others will first enter a `processing` state.
  //
  // [0]: https://stripe.com/docs/payments/payment-methods#payment-notification
  switch (paymentIntent.status) {
    case 'succeeded':
      message.innerText = 'Success! Payment received.';
      break;

    case 'processing':
      message.innerText = "Payment processing. We'll update you when payment is received.";
      break;

    case 'requires_payment_method':
      message.innerText = 'Payment failed. Please try another payment method.';
      // Redirect your user back to your payment page to attempt collecting
      // payment again
      break;

    default:
      message.innerText = 'Something went wrong.';
      break;
  }
});
  </script>
</body>

</html>