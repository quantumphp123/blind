@extends('user.layout.layout')

@section('title','Product Detail')

@section('content')

<main id="content">
  <section class="pt-10 mt-10" style="padding:0px">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-7 mb-6 mb-md-0 pr-md-6 pr-lg-9">
          <div class="galleries position-relative">
            <div class="slick-slider slider-for"
              data-slick-options='{"slidesToShow": 1, "autoplay":false,"dots":false,"arrows":false,"asNavFor": ".slider-nav"}'>
              @for ($i = 0; $i < 4; $i++) <div class="box">
                <div class="card p-0 hover-change-image rounded-0 border-0">
                  <a href="{{ url('assets/user/images/'. $product[0]['img_name']) }}"
                    class="card-img ratio ratio-1-1 bg-img-cover-center" data-gtf-mfp="true" data-gallery-id="02"
                    style="background-image:url({{ '/blind/assets/user/images/'. $product[0]['img_name'] }})">
                  </a>
                </div>
            </div>
            @endfor
          </div>
          <div class="slick-slider slider-nav mt-1 mx-n1"
            data-slick-options='{"slidesToShow": 4, "autoplay":false,"dots":false,"arrows":false,"asNavFor": ".slider-for","focusOnSelect": true,"responsive":[{"breakpoint": 768,"settings": {"slidesToShow": 3,"arrows":false}},{"breakpoint": 576,"settings": {"slidesToShow": 2,"arrows":false}}]}'>
            @for ($i = 0; $i < 4; $i++) <div class="box px-0">
              <div class="bg-white p-1 h-100 rounded-0">
                <img src="{{ url('assets/user/images/'. $product[0]['img_name']) }}" alt="Image 1" class="h-100 w-100">
              </div>
          </div>
          @endfor
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <h2 class="fs-30 fs-lg-40 mb-2">{{ ucwords($product[0]['name']) }}</h2>
      @if (isset($product[0]['product_description']))
      <p>
        {{ $product[0]['product_description'] }}
      </p>
      @endif
      <form>
        <div class="row">
          {{-- @foreach ($product as $item)
          @if ($item['type'] == 'input')
          <div class="col-sm-6 mb-4 form-group input-dimension">
            <label class="text-primary fs-16 font-weight-bold mb-3" for="{{ $item['heading'] }}">
              {{ $item['heading'] }}<sup class="text-danger">*</sup> </label>
            <input id="{{ $item['heading'] }}" type="text" />
            <div style="font-size:80% ;">{{ $item['description'] }}</div>
          </div>
          @endif --}}
          {{-- @if ($item['type'] == 'select')
          @php
          $selectItems = explode(",", $item['content'])
          @endphp --}}
          {{-- <div id="selectMaterial" class="col-sm-12 mb-4 form-group">
            <label class="text-primary fs-16 font-weight-bold mb-3" for="material">{{ ucwords($item['heading']) }} <sup
                class="text-danger">*</sup> </label>
            <select id="sel" class="form-control  w-100">
              <option selected value="0">Choose an option</option>
              @foreach ($selectItems as $selectItem)
              <option value="{{ $selectItem }}">{{ ucwords($selectItem) }}</option>
              @endforeach
            </select>
          </div> --}}
          {{-- <div id="selectMaterial" class="col-sm-12 mb-4 form-group">
            <label class="text-primary fs-16 font-weight-bold mb-3" for="material">Fabric <sup
                class="text-danger">*</sup> </label>
            <select id="sel" class="form-control  w-100">
              <option selected value="0">Choose an option</option>
              @foreach ($fabrics as $fabric)
              <option value="{{ $fabric['id'] }}">{{ $fabric['name'] }}</option>
              @endforeach
            </select>
          </div>
          @endif
          @if ($item['type'] == 'checkbox')
          @php
          $selectItems = explode(",", $item['content'])
          @endphp
          <div id="selectMaterial" class="col-sm-12 mb-4 form-group">
            <label class="text-primary fs-16 font-weight-bold mb-3" for="material">{{ $item['heading'] }} <sup
                class="text-danger">*</sup> </label>
            @if (strpos($selectItems[0], '.jpg') || strpos($selectItems[0], '.jpeg') || strpos($selectItems[0], '.png'))
            <div class="d-flex flex-wrap">
              @foreach ($selectItems as $selectItem)
              <div style="width: 200px;">
                <label>
                  <input type="checkbox" id="{{ $selectItem }}">
                  <img src="{{ url('assets/user/images/'.$selectItem) }}" alt="{{ $selectItem }}" class="ml-2 mt-2">
                  <label for="{{ $selectItem }}" class="ml-5 mt-1">{{ ucfirst(substr($selectItem, 0, strpos($selectItem,
                    "."))) }}</label>
                </label>
              </div>
              @endforeach
            </div>
            @else
            @foreach ($selectItems as $selectItem)
            <div>
              <input type="checkbox" id="{{ $selectItem }}">
              <label for="{{ $selectItem }}">{{ $selectItem }}</label>
            </div>
            @endforeach
            @endif
          </div>
        </div> --}}
        {{-- @endif --}}
        {{-- @endforeach --}}
    </div>
    {{-- <button type="submit" class="btn btn-primary btn-block mb-4">add to cart
    </button> --}}
    </form>
    <p class="d-flex text-primary justify-content-center">
      <span class="d-inline-block mr-2 fs-14"><i class="far fa-lock"></i></span>
      <span class="fs-15">Guarantee Safe and Secure Checkout</span>
    </p>
    {{-- <p>
      Pricing for each product will show below once you enter in a width and a drop in the specified ranges.
      Then select "Show all pricing" under the Fabric drop down box. Give it a short time to calculate pricing.
      To start your order, please select a particular fabric on the drop down list.
    </p>
    <p>
      If you want a day and night blind, please select your fabric and then an option will appear to add another
      fabric. Same process if you want to split your blind into two - Just put in your overall measurements and then
      follow the prompts. --}}
    </p>
    </div>
    </div>
    </div>
  </section>

  <section>
    <form action="{{ route('add-to-cart') }}" method="post">
      @csrf
      <input id="hiddenWidth" type="hidden" name="hiddenWidth" />
      <input id="hiddenDrop" type="hidden" name="hiddenDrop" />
      <input id="hiddenFabName" type="hidden" name="hiddenFabName" />
      <input id="hiddenFabId" type="hidden" name="hiddenFabId" />
      <div id="chooseFrom" class="grey-box mb-10">
        <div style="width:80%; margin:auto">
          <div style="margin:auto; width:100%">
            @php
            $i = 0;
            @endphp
            @foreach ($errors->all() as $message)
            @php
            if ($i == 0) {
            echo '<h6 class="text-danger">There are some problems with the submission. They are listed below</h6>';
            $i = 1;
            }
            @endphp
            <div class="text-danger">
              <sup>* </sup>{{ $message }}
            </div>
            @endforeach
            <h6 class="mb-2 mt-5">Would you like to add a sunscreen behind this blockout blind?</h6>
            <div class="row">
              <div class="col-sm-6"><input id="addUniviewBtn" type='radio' name="sunscreen" value="uniview 10%" />
                <label for="addUniviewBtn"> Add a uniview 10%</label>
              </div>
              <div class="col-sm-6"><input id="addPalermoBtn" type="radio" name="sunscreen" value="palermo" /> <label
                  for="addPalermoBtn"> Add a Palermo &#40;Sheer&#41;</label></div>
            </div>
            <p>
              Sunscreens are amazing for giving privacy during the day, blocking 90% of the UV rays and you can see out
              of
              them clearly.
            </p>
          </div>
          <div id="renderDataHere mt-5">
            <h5 id="renderFabHeading">{{-- Render Fabric Name Here --}}</h5>
            <!-- NEW ELEMENT -->
            <div id="cont" class="mt-5 mb-5"></div>
            <b>
              <div style="color: black;" id="cont-name" class="mb-2"></div>
            </b>
            <div class="mb-10" id="" name="dawn">
              <div id="renderFabImgs">
                <div class="row">
                  {{-- Render Fabric Images Here --}}
                </div>
              </div>
            </div>
          </div>
          <!-- Radio options -->
          <Container>
            <div id="radio-btns" style="display:none ;" class="row mb-5">
              <div style="display:flex;">
                <div style="width:33.3%;">
                  <h6>Side Winder/Brackets<sup class="text-danger">*</sup></h6>
                  <div>
                    <input name="sideWinder" type="radio" value="white" checked /><label>&nbsp; White</label><br>
                    <input name="sideWinder" type="radio" value="off white" /><label>&nbsp; Off White</label><br>
                    <input name="sideWinder" type="radio" value="black" /><label>&nbsp; Black</label><br>
                    <input name="sideWinder" type="radio" value="grey" /><label>&nbsp; Grey</label><br>
                  </div>
                </div>
                <div style="width:33.3%;">
                  <h6>Bottom Rail<sup class="text-danger">*</sup></h6>
                  <div>
                    <input name="bottomRail" type="radio" value="silver" checked /><label>&nbsp; Silver</label><br>
                    <input name="bottomRail" type="radio" value="white" /><label>&nbsp; White</label><br>
                    <input name="bottomRail" type="radio" value="off white" /><label>&nbsp; Off White</label><br>
                    <input name="bottomRail" type="radio" value="black" /><label>&nbsp; Black</label><br>
                    <input name="bottomRail" type="radio" value="sterling (grey)" /><label>&nbsp;
                      Sterling&#40;Grey&#41;</label><br>
                  </div>
                </div>
                <div style="width:33.3%;">
                  <h6>Roll<sup class="text-danger">*</sup></h6>
                  <div>
                    <input name="roll" type="radio" id="roll1" value="front" checked /><label for="roll1">&nbsp;
                      Front</label><br>
                    <input name="roll" type="radio" id="roll2" value="back" /><label for="roll2">&nbsp; Back</label><br>
                    <label class="mt-3">Front - rolls into the room, missing handles/latches</label>
                  </div>
                </div>
              </div>
              <div class="mt-3" style="display:flex;">
                <div style="width: 33.33%;">
                  <h6>Chain/Motor<sup class="text-danger">*</sup></h6>
                  <div>
                    <input name="chainMotor" type="radio" id="chainMotor1" value="rechargeable battery" /><label
                      for="chainMotor1">&nbsp; Rechargeable Motor</label><br>
                    <input name="chainMotor" type="radio" id="chainMotor2" value="white plastic" checked /><label
                      for="chainMotor2">&nbsp; White &#40;Plastic&#41;</label><br>
                    <input name="chainMotor" type="radio" id="chainMotor3" value="off white (Plastic)" /><label
                      for="chainMotor3">&nbsp; Off White &#40;Plastic&#41;</label><br>
                    <input name="chainMotor" type="radio" id="chainMotor4" value="grey Plastic" /><label
                      for="chainMotor4">&nbsp; Grey &#40;Plastic&#41;</label><br>
                    <input name="chainMotor" type="radio" id="chainMotor5" value="black plastic" /><label
                      for="chainMotor5">&nbsp; Black &#40;Plastic&#41;</label><br>
                    <input name="chainMotor" type="radio" id="chainMotor6" value="silver metal" /><label
                      for="chainMotor6">&nbsp; Silver &#40;Metal&#41;</label><br>
                  </div>
                </div>
                <div style="width: 33.33%;">
                  <h6>Control Side<sup class="text-danger">*</sup></h6>
                  <div>
                    <input name="controlSide" type="radio" id="controlSide1" value="left" /><label
                      for="controlSide1">&nbsp; Left Side</label><br>
                    <input name="controlSide" type="radio" id="controlSide2" value="right" /><label
                      for="controlSide2">&nbsp; Right Side</label><br>
                  </div>
                </div>
              </div>
            </div>
          </Container>
        </div>
        <!-- <div style="width: 80%; margin:auto; margin-block: 5%;">
                          <h6>Blind Comments</h6>
                          <textarea name="input_26" id="input_81_26" class="textarea small" tabindex="143" placeholder="For example: Staceys bedroom blind, or control to be 2m long(Standard is 2/3rds of the height). This comment will also be printed on your packaging slip to make it easier to know what blind is for what room." aria-invalid="false" rows="5" cols="100"></textarea>
                          </div> -->
        <div id="main" class="mt-5" style="width: 80%; margin: auto;">
          {{-- Render All Hidden Attributes Here --}}
        </div>                  
        <div class="form-floating mt-5" style="width: 80%; margin: auto;">
          <label style="color:#000000"><b>Blind Comments</b></label>
          <textarea class="form-control"
            placeholder="For example: Staceys bedroom blind, or control to be 2m long(Standard is 2/3rds of the height). This comment will also be printed on your packaging slip to make it easier to know what blind is for what room."
            id="floatingTextarea2" name="comment" style="height: 100px"></textarea>
        </div>
        <div style="width: 80%; margin: auto;">
          <input id="hiddenPrice" type="hidden" name="price">
          <output class="text-dark">
            <p class="font-weight-bold mb-0 mt-3">Total</p>
            <div id="totalPrice" class="text-success">
              $ 0.00
              {{-- Render Total Price Here --}}
            </div>
          </output>
        </div>
        <div class="add-to-cart" style="width: 80%; margin: auto;">
          <button type="submit" class="btn btn-primary btn-block mb-4 mt-3">add to cart
          </button>
        </div>
      </div>
    </form>
  </section>
  </div>
</main>

@endsection

@section('scripts')
{{-- Jquery CDN --}}
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
{{-- sweetalert2 --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- custom js and jquery --}}
<script>
  document.getElementById('sel').addEventListener('change', (e)=> {
    let fabricId = e.target.value
    // let width = document.querySelector('#productWidth').value
    // let drop = document.querySelector('#productDrop').value
    let dimensions = document.querySelectorAll('.input-dimension > input')
    let width = dimensions[0].value
    let drop = dimensions[1].value
    if (width == '') {
      width = 0
    }
    if (drop == '') {
      drop = 0
    }
    console.log(width + drop)
    if (fabricId != "0") {
        $.ajax({
        url: "{{ route('get-fabric-details') }}",
        type: "GET",
        dataType: 'json',
        data: { fabricId, width, drop },
        success: function(response) {
              console.log(response)
          let renderFabImgs = document.querySelector('#renderFabImgs > div')
          let selectedOption = e.target[e.target.selectedIndex]
          document.querySelector('#renderFabHeading').textContent = selectedOption.text
          document.querySelector('#hiddenFabName').setAttribute('value', selectedOption.text)
          document.querySelector('#hiddenFabId').setAttribute('value', selectedOption.value)
          renderFabImgs.textContent = ''
          let baseURL = "{{ url('assets/user/images') }}"
          Array.from(response['fabric']).forEach(element => {
            let imgURL = baseURL + '/' + element.name 
            renderFabImgs.innerHTML += `<div class="col-lg-3">
                        <div style="display: flex;">
                          <div class="d-flex align-items-center mr-1">
                            <input id="${element.id}" value="${element.id}" name="color" type="radio" />
                          </div>
                          <label for="${element.id}">
                            <div style="padding: 5px;">
                              <span>
                                <img src="${imgURL}" style="height: 100%; width: 100%;" />
                              </span>
                            </div>
                          </label>
                        </div>
                      </div>`
          })
          document.querySelector('#radio-btns').style.display = 'block'
          let totalPrice = document.querySelector('#totalPrice')
          totalPrice.textContent = ''
          totalPrice.textContent = '$ ' + response['price']
          document.querySelector('#hiddenPrice').setAttribute('value', response['price'])
          document.querySelector('#hiddenWidth').setAttribute('value', width)
          document.querySelector('#hiddenDrop').setAttribute('value', drop)
          document.querySelector('#chooseFrom').scrollIntoView({
            behavior: "smooth"
          })
        },
        error: function(error) {
          // alert(JSON.stringify(error))
          console.log(error)
        }
      })
    }
    else {
      renderFabImgs.textContent = ''
    }
  })


  if ("{{ session()->has('added') }}") {
    Swal.fire({
      icon: 'success',
      title: 'Added Successfully',
      text: 'Item is Successfully Added to the Cart',
      confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
      confirmButtonColor: '#141414'
    })
  }

  function toggle() {
    // var option = document.getElementById('sel').value;
    // console.log(option)
    // var cont = document.getElementById('cont');
    // var contSm = document.getElementById('cont-sm');
    // var contMd = document.getElementById('cont-md');
    // var contLg = document.getElementById('cont-lg');
    // var contXl = document.getElementById('cont-xl');
    // var contName = document.getElementById('cont-name');
    // to display small
    // if (option == 'sm') {

    //   if (contSm.style.display == 'none') {

    //     contName.innerHTML = 'Dawn<sup class="text-danger">*</sup>'

    //     contSm.style.display = 'block';

    //     contMd.style.display = 'none';
    //     contLg.style.display = 'none';
    //     contXl.style.display = 'none';
    //   }

    // }

    // // to display medium

    // if (option == 'md') {

    //   contName.innerHTML = 'Belice Blockout<sup class="text-danger">*</sup>'

    //   if (contMd.style.display == 'none') {

    //     contMd.style.display = 'block';

    //     contSm.style.display = 'none';
    //     contLg.style.display = 'none';
    //     contXl.style.display = 'none';
    //   }

    // }

    // // to display large

    // if (option == 'lg') {

    //   contName.innerHTML = 'Uniview 10%<sup class="text-danger">*</sup>'

    //   if (contLg.style.display == 'none') {

    //     contLg.style.display = 'block';

    //     contSm.style.display = 'none';
    //     contMd.style.display = 'none';
    //     contXl.style.display = 'none';
    //   }

    // }

    // // to display xl

    // if (option == 'xl') {

    //   contName.innerHTML = 'Palermo<sup class="text-danger">*</sup>'

    //   if (contXl.style.display == 'none') {

    //     contXl.style.display = 'block';

    //     contSm.style.display = 'none';
    //     contMd.style.display = 'none';
    //     contLg.style.display = 'none';
    //   }

    // }
  }
</script>
@endsection