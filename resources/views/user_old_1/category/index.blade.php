@extends('user.layout.layout')

@section('title','Category')
    
@section('content')

<main id="content">
   
    <section class="pb-11 pb-lg-15 pt-10" style="margin-top: 6%;">
      <div class="container">
        <h2 class="fs-sm-40 mb-9 text-center">{{ strtoupper($category['category_name']) }}</h2>
        <p>
            {{ $category['description'] }}
        </p>
      </div>
     
      <!-- Accordian Style -->

  <style>
      
.acc_heading{
  text-align: center;
  padding: 40px 0;
}
.head{
    font-size: 32px;
    color: #222;
    font-weight: 500;
}
.accordion {
    background-color: #eee;
    margin:auto;
    
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
  
  }
  
  .active, .accordion:hover {
    background-color: #ccc; 
  }
  .accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
  
}
  .active:after {
    content: "\2212";
  
  }
  .panel {
     
     
    display:flex;justify-content:center;
    display: none;
    background-color: white;
    overflow: hidden;
    max-height: 0;
    transition: max-height 0.4s ease-out;
    -webkit-transition: max-height 0.4s ease-out;
    -moz-transition: max-height 0.4s ease-out;
    -ms-transition: max-height 0.4s ease-out;
    -o-transition: max-height 0.4s ease-out;
}
      </style>


<!-- accordion -->
     <section  class="container" >
      <div >
     <button class="accordion">1.Know about this accordian</button>
      
     <div style="display:flex;justify-content:center;" class="panel">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
     
     </section>

<!-- accordion js -->
     <script>
let section = document.querySelectorAll(".accordion");
let aRRay = Array.from(section);

aRRay.map((items) => {
  items.addEventListener("click", function(){
      
    items.classList.toggle("active");
    let nextdiv = items.nextElementSibling;

    if(nextdiv.style.display == "block"){
      nextdiv.style.display = "none"
    }else{
      nextdiv.style.display = "block"
    }

    if ( nextdiv.style.maxHeight) {
      nextdiv.style.maxHeight = null;
    } else {
      nextdiv.style.maxHeight = nextdiv.scrollHeight + "px";
    } 

  })
})


</script>

      <div class="container mt-5 d-flex flex-wrap p-0">
        @foreach ($category['products'] as $product)
        <div class="w-25 ml-2">
          <a href="{{ route('show-product', $product['id']) }}">
            <img src="{{ url('assets/user/images/'.$product['img_name']) }}" alt="{{ $product['img_name'] }}" style="height: 100%;">
            <p class="mt-1">{{ ucwords($product['name']) }}</p>
          </a>
        </div>
        @endforeach
      </div>
    </section>
  </main>

@endsection
