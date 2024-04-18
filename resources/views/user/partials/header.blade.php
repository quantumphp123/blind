<header style="background:#f6f6f6" class="main-header navbar-dark header-sticky header-sticky-smart position-absolute fixed-top header-04">
    {{-- <div class="topbar topbar-border d-none d-xl-block"> --}}
      {{-- <div id="headerOffer" class="container container-xxl">
        <p class="mb-0 py-2 text-white font-weight-600 text-center">Free Express Shipping on all New Zealand order over
          $200</p>
      </div> --}}
    {{-- </div> --}}
    <div class="sticky-area">
      <div class="container container-xxl">
        <div class="d-none d-xl-block">
          <nav class="navbar navbar-expand-xl px-0 py-2 py-xl-0 row align-items-center no-gutters">
            <div class="col-5 position-static">
              <ul  class="navbar-nav hover-menu main-menu px-0 mx-xl-n4">
                <li  class="nav-item dropdown-item-home dropdown py-2 py-xl-5 px-0 px-xl-4">
                  <a style="color:black"  
         href="{{ route('homepage') }}">
                    Home
                    <span class="caret"></span>
                  </a>
                </li>
                
                <li
      class="nav-item dropdown-item-docs dropdown py-2 py-xl-5 px-0 px-xl-4">
                  <a style="color:black"  
         href="{{ route('about-us') }}">
                    About
                  </a>
                </li>
                <li aria-haspopup="true" aria-expanded="false"
      class="nav-item dropdown-item-shop dropdown py-2 py-xl-5 px-0 px-xl-4">
                  <a style="color:black"  
         href="store.html" data-toggle="dropdown" >
                    Shop 
                    <span class="caret"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-xl px-0 pb-10 pt-5 dropdown-menu-listing overflow-hidden x-animated x-fadeInUp">
                    <div class="container container-xxl">
                      <div class="row no-gutters w-100">
                        <div class="col-2">
                          <!-- Heading -->
                          <h4 class="dropdown-header text-dark fs-16 mb-2 lh-1">
                            Blinds
                          </h4>
                          <!-- List -->
                          @php
                              $products = ['roller blinds', 'vertical blinds', 'venetian blinds', 'dual blinds', 'motorized blinds']
                          @endphp
                          @foreach ($products as $product)
                          {{-- <div class="dropdown-item">
                            <a class="dropdown-link" href="{{ route('show-category', str_replace(" ", "-", $product['name'])) }}">
                              {{ strtoupper($product['name']) }}
                            </a>
                          </div> --}}
                          <div class="dropdown-item">
                            <a class="dropdown-link" href="{{ route('show-product', str_replace(" ", "-", $product)) }}">
                              {{ strtoupper($product) }}
                            </a>
                          </div>
                          @endforeach
                        </div>
                        @php
                            $product_imgs = ['roller-blind.jpeg', 'vertical-blind.jpg', 'venetian-blind.png', 'dual-blind.jpg', 'motorized-blind.png'];
                        @endphp
                        @foreach ($product_imgs as $img)
                        <div class="col-2 ">
                          <div class="card border-0 mt-4 ml-2">
                            <img src="{{ url('assets/user/images/'.$img) }}" style="height: 150px;width:200px;" alt="Image Menu" class="card-img">  
                            <!-- <img src="" alt="Image Menu" class="card-img" style="height: 300px;"> -->
                            <div class="card-img-overlay d-flex flex-column pt-2 pb-2">
                              <!-- <p class="text-white font-weight-600 text-center mb-0">
                                Blinds
                              </p> -->
                              <!-- <h3 class="text-white fs-40 text-center">BLIND</h3> -->
                              <div class="mt-auto text-center">
                                {{-- <a href="{{ route('show-category', str_replace(" ", "-", (session()->get('products'))[$i]['name'])) }}" class="btn btn-primary">shop
                                  now</a> --}}
                              </div>
                            </div>
                          </div>
                        </div>
                        @endforeach

                      </div>
                    </div>
                  </div>
                </li>
                <li aria-haspopup="true" aria-expanded="false"
      class="nav-item dropdown-item-blog dropdown py-2 py-xl-5 px-0 px-xl-4">
                  <a style="color:black"  
         href="{{ route('contact-us') }}">
                    Contact
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-2 d-flex justify-content-center align-items-center">
              <a class="navbar-brand mx-0 d-block"
                         href="{{ route('homepage') }}">
                {{-- <img id="normalLogo" src="{{ url('assets/user/images/logo-blind-official-1.png') }}" alt="Blind Designers"
                               class="normal-logo">
                <img id="stickyLogo" src="{{ url('assets/user/images/logo-blind-official-1.png') }}" alt="Blind Designers"
                               class="sticky-logo"> --}}
                <img id="normalLogo" src="{{ url('assets/user/images/logo-blind-official-1.png') }}" alt="Blind Designers"
                               class="normal-logo">
                <img id="stickyLogo" src="{{ url('assets/user/images/logo-blind-official-1.png') }}" alt="Blind Designers"
                               class="sticky-logo">
              </a>
            </div>
            <div class="d-xl-flex align-items-center col-5 justify-content-end">
              <div class="navbar-right position-relative">
                <ul class="navbar-nav flex-row justify-content-xl-end d-flex flex-wrap text-body">
                  <li style="margin:1rem" class="nav-item">
                    <a style="color:black"   href="{{ route('account') }}">
                        Account
                    </a>
                  </li>
                  @if (session()->has('id'))
                    <li class="nav-item" style="margin:1rem">
                      <a class="pr-3" href="{{ route('logout') }}">
                          Logout
                      </a>
                    </li>
                  @endif
                  {{-- <li style="margin:1rem" class="nav-item">
                    <a style="color:black, " href="#search-popup" data-gtf-mfp="true"
                                     data-mfp-options='{"type":"inline","focus": "#keyword","mainClass": "mfp-search-form mfp-move-from-top mfp-align-top"}'
                                      title="Search">Search</a>
                  </li> --}}
                  {{-- <li class="nav-item">
                    <a  class="nav-link position-relative px-3" href="#"><i class="far fa-heart"></i>
                      <span class="position-absolute number">0</span></a>
                  </li> --}}
                  <li class="nav-item">
                    <a style="margin:0.5rem" class="nav-link position-relative px-3 menu-cart" href="{{ route('show-cart') }}">
                      <i style="color:black" class="far fa-shopping-basket"></i>
                      @php
                          if (session()->has('id')) {
                            echo '<span style="color:black" class="position-absolute number">'.session()->get('cart_value').'</span>';
                          } 
                          elseif (session()->has('cart_items')) {
                            $cart_value = 0;
                            $cart_items = session()->get('cart_items');
                            foreach ($cart_items as $values) {
                              $cart_value += $values['quantity'];
                            } 
                            echo '<span style="color:black" class="position-absolute number">'.$cart_value.'</span>';
                          }
                          else {
                            echo '<span style="color:black" class="position-absolute number">0</span>';
                          }
                      @endphp
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>

        <!-- MOBILE NAVBAR CODE -->
        
        <!-- <div class="d-block d-xl-none">
          <nav class="navbar navbar-expand-xl px-0 py-2 py-xl-0 align-items-center w-100">
            <button class="navbar-toggler border-0 px-0 canvas-toggle" type="button"
                          data-canvas="true"
                          data-canvas-options='{"width":"250px","container":".sidenav"}'>
              <span class="fs-24 toggle-icon"></span>
            </button>
            <a class="navbar-brand d-inline-block mx-auto" href="{{ route('homepage') }}">
              <img src="{{ url('assets/user/images/logo-blind-official-1.png') }}" style="width: 80%" alt="Blind Designers"
                           class="normal-logo">
              <img src="{{ url('assets/user/images/logo-blind-official-1.png') }}" style="width: 80%" alt="Blind Designers"
                           class="sticky-logo">
            </a>
            <a href="#search-popup" data-gtf-mfp="true"
                     data-mfp-options='{"type":"inline","focus": "#keyword","mainClass": "mfp-search-form mfp-move-from-top mfp-align-top"}'
                     class="nav-search d-block py-0" title="Search"><i
                          class="far fa-search"></i></a>
          </nav>
        </div> -->
        <div class="d-block d-xl-none">
          <nav class="navbar navbar-expand-xl px-0 py-2 py-xl-0 align-items-center w-100">
            <button class="navbar-toggler border-0 px-0 canvas-toggle" type="button"
                          data-canvas="true"
                          data-canvas-options='{"width":"250px","container":".sidenav"}' style="color: black;">
              <span class="fs-24 toggle-icon"></span>
            </button>
            <a class="navbar-brand d-inline-block mx-auto" href="{{ route('homepage') }}">
              <img src="{{ url('assets/user/images/logo-blind-official-1.png') }}" style="width: 80%" alt="Blind Designers"
                           class="normal-logo">
              <img src="{{ url('assets/user/images/logo-blind-official-1.png') }}" style="width: 80%" alt="Blind Designers"
                           class="sticky-logo">
            </a>
            {{-- <a href="#search-popup" data-gtf-mfp="true"
                     data-mfp-options='{"type":"inline","focus": "#keyword","mainClass": "mfp-search-form mfp-move-from-top mfp-align-top"}'
                     class="nav-search d-block py-0" title="Search"><i
                          class="far fa-search" style="color:black;"></i></a> --}}
          </nav>
        </div>
      </div>
    </div>
  </header>