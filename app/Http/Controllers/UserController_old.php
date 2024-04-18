<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Fabric;
use App\Models\FabricImages;
use App\Models\User;
use App\Models\Cart;
use App\Models\State;
use App\Models\BillingAddress;
use App\Models\ShippingAddress;
use Validator;
use Socialite;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // public function set_session() {
    //     $cart_items = collect([]);
    //     session()->put('cart_items', $cart_items);
    //     return redirect()->route('homepage');
    // }

    public function homepage()
    {
        $products = Product::select('id', 'name', 'img_name')
                ->take(8)
                ->get()
                ->toArray();

        return view('user.homepage', ['products' => $products]);
    }

    public function shop()
    {
        return view('user.shop.index');
    }

    public function add_to_cart(Request $request) {
        $request->validate([
            'color' => 'required',
            'sideWinder' => 'required',
            'bottomRail' => 'required',
            'roll' => 'required',
            'chainMotor' => 'required',
            'controlSide' => 'required',
            'price' => 'required'
        ]);

        if ($request->filled('sunscreen')) {
            $sunscreen = $request->sunscreen;
        }
        else {
            $sunscreen = null;
        }
        if ($request->filled('comment')) {
            $comment = $request->comment;
        }
        else {
            $comment = null;
        }

        // For loggedin users
        if (session()->has('id')) {
            $flag = 'inc';
            $cart_items = Cart::where('user_id', session()->get('id'))->get()->toArray();
            foreach ($cart_items as $cart_items_key => $values) {
                foreach ($request->all() as $key => $property) {
                    if ($key != 'price' && $key != '_token' && $key != 'hiddenFabName') {
                        if (array_search($property, $values) == false) {
                            $flag = 'not_inc';
                        }
                    }
                }
                if ($flag == 'inc') {
                    # increase the quantity
                    echo "ITAM FOUND AT ".$values['id'];
                    $cart_id = $values['id'];
                    Cart::where('id', $cart_id)->update([
                        'quantity' => \DB::raw('quantity+1'),
                        'price' => \DB::raw('price+'.$request->price)
                    ]);

                    $cart_value = session()->get('cart_value') + 1;
                    session()->put('cart_value', $cart_value);
                    session()->flash('added', true);
                    return redirect()->back();
                }
                $flag = 'inc';
            }
            
            $price = str_replace(',', '', $request->price,);
            $data = [
                'width' => $request->hiddenWidth,
                'drop' => $request->hiddenDrop,
                'fabric_id' => $request->hiddenFabId,
                'color_id' => $request->color,
                'side_winder' => $request->sideWinder,
                'bottom_rail' => $request->bottomRail,
                'roll' => $request->roll,
                'chain_motor' => $request->chainMotor,
                'control_side' => $request->controlSide,
                'price' => $price,
                'sunscreen' => $sunscreen,
                'comment' => $comment,
                'user_id' => session()->get('id'),
                'quantity' => 1,
            ];
            Cart::insert($data);
            $cart_value = session()->get('cart_value') + 1;
            session()->put('cart_value', $cart_value);
            session()->flash('added', true);
            return redirect()->back();
        }
        // For Guest User
        else
        {
            if (!session()->has('cart_items')) {
                $cart_items = collect([]);
                session()->put('cart_items', $cart_items);
            }
            $flag = 'inc';
            $cart_items = session()->get('cart_items');
            foreach ($cart_items as $cart_items_key => $values) {
                foreach ($request->all() as $key => $property) {
                    // if ($key != 'price' && $key != '_token') {
                    //     echo var_dump(array_search($property, $values));
                    //     echo "<br>";
                    // }
                    if ($key != 'price' && $key != '_token') {
                        if (array_search($property, $values) == false) {
                            $flag = 'not_inc';
                        }
                    }
                }
                if ($flag == 'inc') {
                    # increase the quantity
                    if (!is_array(session()->get('cart_items'))) {
                        $cart_items = session()->get('cart_items')->toArray();
                    }
                    $cart_items[$cart_items_key]['price'] += $request->price;
                    $cart_items[$cart_items_key]['quantity'] += 1;

                    session()->put('cart_items', $cart_items);
                    session()->flash('added', true);

                    return redirect()->back();
                }
                $flag = 'inc';
            }

            $id = rand();      
            $cart_items = [
                'productId' => $id, 
                'width' => $request->hiddenWidth,
                'drop' => $request->hiddenDrop,
                'fabric' => $request->hiddenFabName,
                'fabric_id' => $request->hiddenFabId,
                'color_id' => $request->color,
                'sideWinder' => $request->sideWinder,
                'bottomRail' => $request->bottomRail,
                'roll' => $request->roll,
                'chainMotor' => $request->chainMotor,
                'controlSide' => $request->controlSide,
                'price' => $request->price,
                'sunscreen' => $sunscreen,
                'comment' => $comment,
                'quantity' => 1
            ];

            session()->push('cart_items', $cart_items);
            session()->flash('added', true);

            return redirect()->back();
        }
    }

    public function remove_from_cart($id) {
        // For LoggedIn User
        if (session()->has('id')) {
            Cart::where('id', $id)
                ->delete();
            $cart = Cart::where('user_id', session()->get('id'))
                        ->select('quantity')
                        ->get()
                        ->toArray();

            $quantity = 0;                   
            foreach ($cart as $value) {
                $quantity += $value['quantity'];
            }
            session()->put('cart_value', $quantity);
        } 
        // For Guest User
        else {
            $cart_items = session()->get('cart_items');
            foreach ($cart_items as $key => $items) {
                if (array_search($id, $items) != false) {
                    unset($cart_items[$key]);
                };
            }
            session()->put('cart_items', $cart_items);
        }
        

        return redirect()->route('show-cart');
    }

    public function contact_us() {
        return view('user.contactus');
    }

    public function about_us() {
        return view('user.aboutus');
    }

    public function account() {
        if (session()->has('id')) {
            return redirect()->route('account-personal-details');
        }
        else {
            return view('user.auth.account');
        }
    }

    public function account_personal_details() {
        return view('user.myaccount.personaldetails');
    }

    public function account_address() {
        $states = State::select('id', 'name')
                        ->get()
                        ->toArray();
        $billingAddress = BillingAddress::where('billing_addresses.user_id', session()->get('id'))
                                        ->get()
                                        ->makeHidden(['id', 'created_at', 'updated_at'])
                                        ->toArray();
        $shippingAddress = shippingAddress::where('shipping_addresses.user_id', session()->get('id'))
                                        ->get()
                                        ->makeHidden(['id', 'created_at', 'updated_at'])
                                        ->toArray();
        
        $addresses = [];
        if (isset($billingAddress[0])) {
            $addresses['billingAddress'] = $billingAddress[0];
        }    
        if (isset($shippingAddress[0])) {
            $addresses['shippingAddress'] = $shippingAddress[0];
        }

        return view('user.myaccount.address', ['states' => $states, 'addresses' => $addresses]);
    }

    public function save_billing_address(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'streetAddress' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'required | digits:4'
        ]);

        if($validator->fails()) {
            $response = [
                'status' => 0,
                'error' => $validator->messages()->all()
            ];
        }
        else {
            $billingAddress = new BillingAddress;
            $billingAddress->name = $request->name;
            $billingAddress->company_name = $request->companyName;
            $billingAddress->country = $request->country;
            $billingAddress->street_address = $request->streetAddress;
            $billingAddress->city = $request->city;
            $billingAddress->state = $request->state;
            $billingAddress->postcode = $request->postcode;
            $billingAddress->user_id = session()->get('id');
            $billingAddress->save();

            $response = [
                'status' => 1,
                'title' => 'Successfully Saved',
                'text' => 'Your Billing Address is Successfully Saved'
            ];
        }

        return response()->json($response);
    }

    public function save_shipping_address(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'streetAddress' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'required | digits:4'
        ]);

        if($validator->fails()) {
            $response = [
                'status' => 0,
                'error' => $validator->messages()->all()
            ];
        }
        else {
            $shippingAddress = new ShippingAddress;
            $shippingAddress->name = $request->name;
            $shippingAddress->company_name = $request->companyName;
            $shippingAddress->country = $request->country;
            $shippingAddress->street_address = $request->streetAddress;
            $shippingAddress->city = $request->city;
            $shippingAddress->state = $request->state;
            $shippingAddress->postcode = $request->postcode;
            $shippingAddress->user_id = session()->get('id');
            $shippingAddress->save();

            $response = [
                'status' => 1,
                'title' => 'Successfully Saved',
                'text' => 'Your Shipping Address is Successfully Saved'
            ];
        }

        return response()->json($response);
    }

    public function edit_billing_address(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'streetAddress' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'required | digits:4'
        ]);

        if($validator->fails()) {
            $response = [
                'status' => 0,
                'error' => $validator->messages()->all()
            ];
        }
        else {
            BillingAddress::where('user_id', session()->get('id'))
                            ->update([
                                'name' => $request->name,
                                'company_name' => $request->companyName,
                                'country' => $request->country,
                                'street_address' => $request->streetAddress,
                                'city' => $request->city,
                                'state' => $request->state,
                                'postcode' => $request->postcode,
                                'updated_at' => \Carbon\Carbon::now(),
                            ]);

            $response = [
                'status' => 1,
                'title' => 'Successfully Updated',
                'text' => 'Your Billing Address is Successfully Updated'
            ];
        }

        return response()->json($response);
    }

    public function edit_shipping_address(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'streetAddress' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'required | digits:4'
        ]);

        if($validator->fails()) {
            $response = [
                'status' => 0,
                'error' => $validator->messages()->all()
            ];
        }
        else {
            ShippingAddress::where('user_id', session()->get('id'))
                            ->update([
                                'name' => $request->name,
                                'company_name' => $request->companyName,
                                'country' => $request->country,
                                'street_address' => $request->streetAddress,
                                'city' => $request->city,
                                'state' => $request->state,
                                'postcode' => $request->postcode,
                                'updated_at' => \Carbon\Carbon::now(),
                            ]);

            $response = [
                'status' => 1,
                'title' => 'Successfully Updated',
                'text' => 'Your Shipping Address is Successfully Updated'
            ];
        }

        return response()->json($response);
    }

    public function account_payment_method() {
        return view('user.myaccount.paymentmethods');
    }

    public function show_cart()
    {
        // For LoggedIn Users
        if (session()->has('id')) {
            $cart_items = Cart::join('fabrics', 'fabrics.id', '=', 'carts.fabric_id')
                                ->select('carts.id', 'carts.width', 'carts.drop', 'fabrics.name as fabric', 'carts.side_winder as side winder', 'carts.bottom_rail as bottom rail', 'carts.roll', 'carts.chain_motor as chain motor', 'carts.control_side as control side', 'carts.price', 'carts.sunscreen', 'carts.comment', 'carts.quantity')
                                ->where('user_id', session()->get('id'))
                                ->get()
                                ->toArray();
            $subtotal_price = 0;
            foreach ($cart_items as $items) {
                $subtotal_price += (float) $items['price'];
            }
            $total_price =  $subtotal_price + 20;
        }
        //For Guest User
        else {
            $cart_items = session()->get('cart_items');
            $subtotal_price = 0;
            foreach ($cart_items as $items) {
                $price = str_replace(',', '', $items['price']);
                $subtotal_price += (float) $price;
            }
            $total_price =  $subtotal_price + 20;
            session()->put('total_price', $total_price);
        }

        return view('user.cart.index', ['cart_items' => $cart_items, 'subtotal_price' => $subtotal_price, 'total_price' => $total_price]);
    }

    public function show_product($id) 
    {
        // Setting mySql strict mode to false to use group by
        \DB::statement("SET SQL_MODE=''");
        $product = Product::where('products.id', $id)
                            ->get()
                            ->makeHidden('created_at', 'updated_at')
                            ->toArray();
                            
        $fabrics = Fabric::where('product_id', $id)
                            ->get()
                            ->makeHidden('created_at', 'updated_at')
                            ->toArray();

        return view('user.product.index', ['product' => $product, 'fabrics' => $fabrics]);
    }

    public function get_fabric_details(Request $request) {
        $fabric = Fabric::join('fabric_images', 'fabric_images.fabric_id', '=', 'fabrics.id')
                        ->where('fabrics.id', $request->fabricId)
                        ->get()
                        ->toArray();
        
        if ($request->width == '') {
            $width = 0;
        }
        if ($request->drop == '') {
            $drop = 0;
        }

        $product_area = $request->width * $request->drop;
        $price = $product_area * $fabric[0]['price']/1000;
        $price = number_format($price, 2);

        $response = [
            'fabric' => $fabric,
            'price' => $price
        ];
        
        return response()->json($response);
    }

    public function checkout()
    {
        $states = State::all()->toArray();
        if (session()->has('id')) {
            $billingAddress = BillingAddress::where('user_id', session()->get('id'))
                                            ->get()
                                            ->makeHidden(['id', 'created_at', 'updated_at'])
                                            ->toArray();
        }
        $billingAddress = null;

        return view('user.checkout.index', ['states' => $states, 'billingAddress' => $billingAddress]);
    }

    public function place_order(Request $request) {
        // For LoggedIn Users
        if (session()->has('id')) {
            return redirect()->route('payment');
        }
        // For Guest User
        else {
            $billingAddress = new BillingAddress;
            $billingAddress->name = $request->name;
            $billingAddress->company_name = $request->companyName;
            $billingAddress->country = $request->country;
            $billingAddress->street_address = $request->streetAddress;
            $billingAddress->city = $request->city;
            $billingAddress->state = $request->state;
            $billingAddress->postcode = $request->postcode;
            $billingAddress->save();

            return redirect()->route('payment');
        }
    }

    public function change_personals(Request $request) {
        if (!$request->filled('current_password')) {
            // Updating user name and email
            User::where('id', session()->get('id'))
                ->update(['name' => $request->name, 'email' => $request->email]);

            session([
                'name' => $request->name,
                'email' => $request->email
            ]);

            $response = [
                'status' => 1,
                'title' => "Updated Succesfully",
                'text' => "Your Personal Details Successfully Changed"
            ];
            return response()->json($response);
        }
        else {
            $password = User::select('password')
                            ->where('id', session()->get('id'))
                            ->get()
                            ->toArray();
            $password = $password[0];

            if (password_verify($request->current_password, $password['password'])) {
                $validator = Validator::make($request->only('password', 'password_confirmation'), [
                    'password' => 'required | confirmed',
                    'password_confirmation' => 'required'
                ]);

                if ($validator->fails()) {
                    $response = [
                        'status' => 0,
                        'error' => "* Password and Confirm Password Doesn't Match"
                    ];

                    return response()->json($response); // Password doesn't matched
                } else {
                    // Updating user name, email, and password
                    $password = password_hash($request->password, PASSWORD_DEFAULT);
                    User::where('id', session()->get('id'))
                        ->update(['name' => $request->name, 'email' => $request->email, 'password' => $password]);
                    
                    $response = [
                        'status' => 1,
                        'title' => "Updated Succesfully",
                        'text' => "Your Personal Details Successfully Changed"
                    ];
                    return response()->json($response);
                }
                
            }
            else {
                $response = [
                    'status' => 0,
                    'error' => '* Current Password is not Correct. Please Enter Again'
                ];
                return response()->json($response);
            }
        }

        // echo "<pre>";
        // echo print_r($request->filled('current_password'));
        // die;
    }

    public function redirect_to_google() {
        return Socialite::driver('google')->redirect();
    }

    public function handle_google_callback() {
        $user = Socialite::driver('google')->user();
        echo "<pre>";
        echo print_r($user);
    }

    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required | confirmed',
            'password_confirmation' => 'required'
        ]);

        if ($validator->fails()) {
            $response = [
                'status' => 0, 
                'error' => $validator->messages()->all()
            ];
            return response()->json($response);
        } 
        else {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = password_hash($request->password, PASSWORD_DEFAULT);
            $user->save();

            $response = [
                'title' => 'Account Created!',
                'text' => 'Your Account has been successfully created<br><strong>Please Login with your Credentials</strong>'
            ];
            return response()->json($response);
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            $user = User::select('id', 'name')
                            ->where('email', $request->email)
                            ->get()
                            ->toArray();
            $cart = Cart::where('user_id', $user[0]['id'])
                        ->select('quantity')
                        ->get()
                        ->toArray();

            $quantity = 0;
            if (isset($cart)) {
                foreach ($cart as $value) {
                    $quantity += $value['quantity'];
                }
            }
            
            session([
                'id' => $user[0]['id'],
                'name' => $user[0]['name'],
                'email' => $request->email,
                'cart_value' => $quantity,
            ]);

            if (count(session()->get('cart_items')) == 0) {
                return redirect()->route('homepage');
            }
            else {
                $cart_items = session()->get('cart_items');
                foreach ($cart_items as $items) {
                    $price = str_replace(',', '', $items['price']);
                    $data = [
                        'width' => $items['width'],
                        'drop' => $items['drop'],
                        'fabric_id' => $items['fabric_id'],
                        'color_id' => $items['color_id'],
                        'side_winder' => $items['sideWinder'],
                        'bottom_rail' => $items['bottomRail'],
                        'roll' => $items['roll'],
                        'chain_motor' => $items['chainMotor'],
                        'control_side' => $items['controlSide'],
                        'price' => (float) $price,
                        'sunscreen' => $items['sunscreen'],
                        'comment' => $items['comment'],
                        'user_id' => session()->get('id'),
                        'quantity' => $items['quantity'],
                    ];
                    Cart::insert($data);
                }
                $cart = Cart::where('user_id', session()->get('id'))
                                    ->select('quantity')
                                    ->get()
                                    ->toArray();

                $quantity = 0;                   
                foreach ($cart as $value) {
                    $quantity += $value['quantity'];
                }

                session()->put('cart_value', $quantity);

                return redirect()->route('checkout');
            }
        }
        else {
            $error = '* Invalid Credentials. Please Try Again';
            session()->flash('error', $error);

            return redirect()->back();
        }
    }

    public function logout(Request $request) {
        $request->session()->flush();
        return redirect()->route('set-session');
    }

    public function product_detail()
    {
        return view('user.product.index');
    }

    public function payment() {
        $stripe = new \Stripe\StripeClient('sk_test_51Lc5rqSBfFmsnB5R86HLGJo9gdy5k3djav8dQ1upgfWtnLo1oZez48c23l07Ao0EUPqHv91wQhzz89324eTSAYbI00sOxfdjvl');
    
        if (session()->has('id')) {
            $cart_items = Cart::where('user_id', session()->get('id'))
                                ->get()
                                ->toArray();

            foreach ($cart_items as $items) {
                $total = $items['price'];
            }
            $total += 20;
        }
        else {
            $total = session()->get('total_price');
        }
        $intent = $stripe->paymentIntents->create(
            [
                'amount' => $total * 100,
                'currency' => 'inr',
                'payment_method_types' => ['card'],
            ]
        );
    
        return view('user.payment.cardpay', ['client_secret' => $intent->client_secret, 'total' => $total]);
    }
    
    public function imdt(Request $request) {
        if (session()->has('id')) {
            Cart::where('user_id', session()->get('id'))->delete();
            session()->put('cart_value', 0);
        }
        else {
            $cart_items = collect([]);
            session()->put('cart_items', $cart_items);
        }

        session()->flash('order_placed');
        return redirect()->route('homepage');
    }
}
