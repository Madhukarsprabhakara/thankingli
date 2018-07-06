<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>Thankingli</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="/unify/html/assets/vendor/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="/unify/html/assets/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/unify/html/assets/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="/unify/html/assets/vendor/icon-hs/style.css">
  <link rel="stylesheet" href="/unify/html/assets/vendor/animate.css">
  <link rel="stylesheet" href="/unify/html/assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="/unify/html/assets/vendor/hamburgers/hamburgers.min.css">

  <!--For modal -->
  <link  rel="stylesheet" href="/unify/html/assets/vendor/custombox/custombox.min.css">
  <!-- CSS Implementing Plugins -->
<link  rel="stylesheet" href="/unify/html/assets/vendor/animate.css">
<link  rel="stylesheet" href="/unify/html/assets/vendor/custombox/custombox.min.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="/unify/html/assets/css/unify-core.css">
  <link rel="stylesheet" href="/unify/html/assets/css/unify-components.css">
  <link rel="stylesheet" href="/unify/html/assets/css/unify-globals.css">
  <link rel="stylesheet" href="/unify/html/assets/css/styles.bm-classic.css">
  <link rel="stylesheet" href="/unify/html/assets/css/instantsearch_algolia.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="/unify/html/assets/css/custom.css">
</head>

<body>
   @include('analyticstracking')
  <main>



     <!-- Header g-bg-white-->
    <header id="js-header" class="u-header u-header--sticky-top">
      <div class="u-header__section u-header__section--light g-bg-white  g-transition-0_3 g-py-10">
        <nav class="js-mega-menu navbar navbar-expand-lg hs-menu-initialized hs-menu-horizontal">
          <div class="container">
            <!-- Responsive Toggle Button -->
            <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
            </button>
            <!-- End Responsive Toggle Button -->

            <!-- Logo -->
            <a href="/" class="navbar-brand">
              <!-- <img src="/unify/html/assets/img/logo/logo-1.png" alt="Unify Logo"> -->
              <h3>thankingli</h3>
            </a>
            <!-- End Logo -->

         

            <div class="d-inline-block g-hidden-xs-down g-pos-rel g-valign-middle g-pl-30 g-pl-0--lg">
              <ul id="topMain" class="nav nav-pills nav-main">
                
                @if (Route::has('login'))
                  @if (Auth::check())
                  <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                
                                  <li>
                                      <a href="{{URL::asset('profile-edit')}}">
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    
                                </ul>
                            </li> 
                            @else
                              <li><!-- HOME -->
                    <a  href="{{ url('/register') }}">
                      Sign up
                    </a>
                    
                  </li>
                  <li ><!-- PAGES -->
                    <a  href="{{ url('/login') }}">
                      Sign In
                    </a>
                    
                  </li>
        
                            @endif
                  
                @endif  
                </ul>
            </div>
          </div>

        </nav>

      </div>

    </header>

    
    
    <!-- End Header -->

    <!-- Breadcrumbs -->
   <!--  <section class="g-bg-gray-light-v5 g-py-10">
      
    </section> -->
    <!-- End Breadcrumbs -->
<!--Vue begins-->
<section class="g-bg-graylight-radialgradient-ellipse ">
    <!-- End Text Input -->

    
 
<div class="container g-mt-80 g-pt-40 g-pb-20 " >
  <div class="row ">
    
    <div class="col-lg-3 order-lg-2 g-mb-80 ">
    </div>

    <div class="col-lg-6 g-bg-white order-lg-2 g-mb-80">
      <!-- General Forms -->

      <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" id="loginsubmit" action="/postthank" method="post" enctype="multipart/form-data">
        <!-- Text Input -->
        {{csrf_field()}}
       

        
       <!--  <hr class="g-brd-gray-light-v4 g-mx-minus-30"> -->

        <h2 class="h4 g-font-weight-700 g-mb-20 text-center">Thank {{$userOnId->name}}</h2>

        <!-- Text Input with Right Appended Icon -->
        <div class="form-group g-mb-20">
          <!-- <label class="g-mb-10">Name of the person you wish to thank</label> -->
          <div class="input-group g-brd-primary--focus">
            <input class="form-control form-control-md  rounded-0 pr-0"  type="text" value ="{{$userOnId->name}}" readonly="readonly" name="name"  >
            

          </div>
        </div>

        
        <!-- End Text Input with Right Appended Icon -->

        <!-- Text Input with Left Appended Icon -->
        <div class="form-group g-mb-20">
          <!-- <label class="g-mb-10">Text Input with left appended icon</label> -->
          <div class="input-group g-brd-primary--focus">
            <input class="form-control form-control-md  rounded-0 pr-0" value="{{$userOnId->id}}" type="hidden" name="id"  required>
            
          </div>
        </div>
        <!-- End Text Input with Left Appended Icon -->

       <!--  <div class="form-group  g-mb-20">
      
        <label>Make your "Thanks" Private</label>
        <select class="js-custom-select w-100 u-select-v2   g-color-black g-color-primary--hover g-bg-white text-left g-rounded-30 g-pl-25 g-py-12" data-placeholder="Private Flag" name="privacy" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
          
          <option class="g-brd-secondary-light-v2 g-color-black g-color-white--active g-bg-primary--active" value="0">Public</option>
          <option class="g-brd-secondary-light-v2 g-color-black g-color-white--active g-bg-primary--active" value="1">Private</option>
          
        </select>
        
      </div> -->
       <input name="privacy" id="surprise" value="0" type="hidden">

      <div class="form-group g-mb-20">
          <!-- <label class="g-mb-10">Text Input with left appended icon</label> -->
          <div class="input-group g-brd-primary--focus">
            <input class="form-control form-control-md  rounded-0 pr-0" value="{{old('thank-title')}}" type="text" name="thank-title" size="100" value="{{old('thank-title')}}" placeholder="Set a great Title for your Thank You story" required>
            <!-- <div class="input-group-append">
              <span class="input-group-text rounded-0 g-bg-white g-color-gray-light-v1"><i class="icon-equalizer"></i></span>
            </div> -->
          </div>
        </div>

        <div class="form-group g-mb-20">
    <!-- <label class="col-sm-3 g-mb-10" for="inputGroup2_2">Write your story - Inspire the world!</label> -->
    <!-- <div class="col-sm-9"> -->
      <textarea  name="thank-descr"  value="{{old('thank-descr')}}" rows="5" id="inputGroup2_2" class="form-control form-control-md rounded-0" rows="3" placeholder="Write your story - Inspire the world!"></textarea>
    <!-- </div> -->
  </div>

  <!-- Advanced File Input -->
  <div class="form-group g-mb-20">
    <label class="g-mb-10">Upload a photo (optional)</label>
    <input class="js-file-attachment" name="image"  type="file" >

  </div>
  <small class="text-muted block">Max file size: 8Mb (jpg/png)</small>
  <!-- End Advanced File Input -->
        <!-- Text Input with Both Appended Icon -->
     <input name="emailpresent" id="surprise" value="1" type="hidden">
     <input name="surprise" id="surprise" value="1" type="hidden">  
       

        <!-- Text Input with Right Appended Icon -->
       
<div class="row">
                  <div class="col-md-12">
                    <button type="submit" class="">
                      Thank now
<!--                      <span class="block font-lato">We'll get back to you within 48 hours</span> -->
<!-- <a href="#!" class="btn btn-md u-btn-teal g-mr-10 g-mb-15">Teal</a> -->
                    </button>
                  </div>
                </div>
       
        <!-- End Text Input with Left Appended Icon -->

      
      </form>
      <!-- End General Forms -->
    </div>
  </div>

    <!--Vue ends-->
  </div>

</section>
    <!--Tabs template here-->
    

    <!-- Tabs template ends-->
    <!-- End Blog Minimal Blocks -->

   

      <!-- Footer -->
<footer class="g-bg-secondary g-pt-30 g-pb-10">
  <div class="container">
    

    <!-- Footer Copyright -->
    <div class="row justify-content-lg-center align-items-center text-center">
      <div class="col-sm-6 col-md-4 col-lg-3 order-md-3 g-mb-30">
        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">
          <i class="align-middle mr-2 icon-real-estate-027 u-line-icon-pro"></i>
          Santa Clara, CA, United States
        </a>
      </div>

      

      <div class="col-md-4 col-lg-3 order-md-1 g-mb-30">
        <p class="g-color-gray-dark-v4 mb-0">© 2018 Thankingli. All Rights Reserved.</p>
      </div>
    </div>
    <!-- End Footer Copyright -->
  </div>
</footer>
<!-- End Footer -->
    <a class="js-go-to u-go-to-v1" href="#!" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
      <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
  </main>

  <div class="u-outer-spaces-helper"></div>


  <!-- JS Global Compulsory -->
  
<!-- <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script> -->
  <script src="/unify/html/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/unify/html/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
  <script src="/unify/html/assets/vendor/popper.min.js"></script>
  <script src="/unify/html/assets/vendor/bootstrap/bootstrap.min.js"></script>


  
 
  

   <!--Algolia Instant Search Library -->
  

  <!-- Ends here-->
  <!-- JS Customization -->
  <!-- <script src="/unify/html/assets/js/custom.js"></script> -->

 

<!--Vue libraries-->
<!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.0/vue.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.3.5"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script src="https://unpkg.com/vue-chartjs/dist/vue-chartjs.min.js"></script>
<!-- Add this after vue.js -->
<script src="https://unpkg.com/babel-polyfill@6.26.0/dist/polyfill.min.js"></script>
<script src="https://unpkg.com/bootstrap-vue@2.0.0-rc.2/dist/bootstrap-vue.js"></script>
<!-- <script src="assets/js/vue-filter.min.js"></script> -->
<script src="https://unpkg.com/lodash@4.16.0"></script>
<!-- JS Implementing Plugins -->
<!-- <script  src="/unify/html/assets/vendor/custombox/custombox.min.js"></script> -->

<!-- JS Unify -->
<!-- <script  src="/unify/html/assets/js/components/hs.modal-window.js"></script> -->







</body>

</html>