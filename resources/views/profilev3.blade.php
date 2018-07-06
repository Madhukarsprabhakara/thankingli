
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>thankingli - profile</title>

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
  <!-- CSS Global Icons -->
  <link rel="stylesheet" href="/unify/html/assets/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/unify/html/assets/vendor/icon-line/css/simple-line-icons.css">
  <link rel="stylesheet" href="/unify/html/assets/vendor/icon-etlinefont/style.css">
  <link rel="stylesheet" href="/unify/html/assets/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="/unify/html/assets/vendor/icon-hs/style.css">
  <link rel="stylesheet" href="/unify/html/assets/vendor/animate.css">
  <link rel="stylesheet" href="/unify/html/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="/unify/html/assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="/unify/html/assets/vendor/hamburgers/hamburgers.min.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="/unify/html/assets/css/unify-core.css">
  <link rel="stylesheet" href="/unify/html/assets/css/unify-components.css">
  <link rel="stylesheet" href="/unify/html/assets/css/unify-globals.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="/unify/html/assets/css/custom.css">
</head>

<body>
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
              <!-- <img src="unify/html/assets/img/logo/logo-1.png" alt="Unify Logo"> -->
              <h3>thankingli</h3>
            </a>
            <!-- End Logo -->

         

            <div class="d-inline-block g-hidden-xs-down g-pos-rel g-valign-middle g-pl-30 g-pl-0--lg">


            </div>

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

   

    <section class="g-mb-100 g-bg-graylight-radialgradient-ellipse ">
      <div class="container">
        <div class="row g-pt-140">
          <!-- Profile Sidebar -->
          <div class="col-lg-3 g-mb-50 g-mb-0--lg">
            <!-- User Image -->
            <div class="u-block-hover g-pos-rel">

              @if ($image)
              <figure>
                <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="{{URL::asset('')}}/{{$image}}" alt="{{$image}}">
              </figure>
              @else
              <figure>
                <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="{{URL::asset('')}}/unify/html/assets/img-temp/150x150/img1.jpg" alt="test">
              </figure>
              @endif
              <!-- Figure Caption -->
             
              <!-- End Figure Caption -->

              <!-- User Info -->
              <span class="g-pos-abs g-top-20 g-left-0">
                  <!-- <a class="btn btn-sm u-btn-primary rounded-0" href="#!">Thank, Johne Doe</a> -->
                  <!-- <small class="d-block g-bg-black g-color-white g-pa-5">Project Manager</small> -->
                </span>
              <!-- End User Info -->
            </div>

            <div class="g-mb-10 g-mt-10 text-center">
                <a class="btn btn-md u-btn-outline-primary g-mr-10 g-mb-15 rounded-0" href="{{URL::asset('')}}thank/{{$userOnId->id}}">Thank {{$userOnId->name}}</a>
            </div>
            @if ($company)
            <div class="g-mb-10 g-mt-10 text-center">
                <p><span style="font-size:20px;">Works at:</span> {{$company}} </p>
            </div>
            @else
            <div class="g-mb-10 g-mt-10 text-center">
                <p><span style="font-size:20px;">Works at:</span> NA </p>
            </div>
            @endif
            <!-- User Image -->

            <!-- Sidebar Navigation -->
            <div class="list-group list-group-border-0 g-mb-40">
              <!-- Overall -->
              <!-- <a href="page-profile-main-1.html" class="list-group-item justify-content-between active">
                <span><i class="icon-home g-pos-rel g-top-1 g-mr-8"></i> Overall</span>
                <span class="u-label g-font-size-11 g-bg-white g-color-main g-rounded-20 g-px-10">2</span>
              </a> -->
              <!-- End Overall -->

              <!-- Profile -->
              <!-- <a href="page-profile-profile-1.html" class="list-group-item list-group-item-action justify-content-between active">
                <span><i class="icon-cursor g-pos-rel g-top-1 g-mr-8"></i> Profile</span>
              </a> -->
              <!-- End Profile -->

              <!-- Users Contacts -->
              <!-- <a href="page-profile-users-1.html" class="list-group-item list-group-item-action justify-content-between">
                <span><i class="icon-notebook g-pos-rel g-top-1 g-mr-8"></i> Users Contacts</span>
              </a> -->
              <!-- End Users Contacts -->

              <!-- My Projects -->
              <!-- <a href="page-profile-projects-1.html" class="list-group-item list-group-item-action justify-content-between">
                <span><i class="icon-layers g-pos-rel g-top-1 g-mr-8"></i> My Projects</span>
                <span class="u-label g-font-size-11 g-bg-primary g-rounded-20 g-px-10">9</span>
              </a> -->
              <!-- End My Projects -->

              <!-- Comments -->
              <!-- <a href="page-profile-comments-1.html" class="list-group-item list-group-item-action justify-content-between">
                <span><i class="icon-bubbles g-pos-rel g-top-1 g-mr-8"></i> Comments</span>
                <span class="u-label g-font-size-11 g-bg-pink g-rounded-20 g-px-8">24</span>
              </a> -->
              <!-- End Comments -->

              <!-- Reviews -->
             <!--  <a href="page-profile-reviews-1.html" class="list-group-item list-group-item-action justify-content-between">
                <span><i class="icon-heart g-pos-rel g-top-1 g-mr-8"></i> Reviews</span>
              </a> -->
              <!-- End Reviews -->

              <!-- History -->
             <!--  <a href="page-profile-history-1.html" class="list-group-item list-group-item-action justify-content-between">
                <span><i class="icon-fire g-pos-rel g-top-1 g-mr-8"></i> History</span>
              </a> -->
              <!-- End History -->

              <!-- Settings -->
             <!--  <a href="page-profile-settings-1.html" class="list-group-item list-group-item-action justify-content-between">
                <span><i class="icon-settings g-pos-rel g-top-1 g-mr-8"></i> Settings</span>
                <span class="u-label g-font-size-11 g-bg-cyan g-rounded-20 g-px-8">3</span>
              </a> -->
              <!-- End Settings -->
            </div>
            <!-- End Sidebar Navigation -->

          </div>
          <!-- End Profile Sidebar -->

          <!-- Profile Content -->
          <div class="col-lg-9">
            <!-- Overall Statistics -->
            <div class="row g-mb-40">
              <div class="col-md-6 g-mb-30 g-mb-0--md">
                <div class="g-bg-cyan g-color-white g-pa-25">
                  <header class="d-flex text-uppercase g-mb-40">
                    <i class="icon-people align-self-center display-4 g-mr-20"></i>

                    <div class="g-line-height-1">
                      <h4 class="h5">People who thanked {{$userOnId->name}}</h4>
                      <div class="js-counter g-font-size-30" data-comma-separated="true">{{count($ThankedBy)}}</div>
                    </div>
                  </header>

                  <!-- <div class="d-flex justify-content-between text-uppercase g-mb-25">
                    <div class="g-line-height-1">
                      <h5 class="h6 g-font-weight-600">Last Week</h5>
                      <div class="js-counter g-font-size-16" data-comma-separated="true">1385</div>
                    </div>

                    <div class="text-right g-line-height-1">
                      <h5 class="h6 g-font-weight-600">Last Month</h5>
                      <div class="js-counter g-font-size-16" data-comma-separated="true">6048</div>
                    </div>
                  </div> -->

                  <!-- <h6 class="g-mb-10">Project Completeness <span class="float-right g-ml-10">72%</span></h6>
                  <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-10">
                    <div class="js-hr-progress-bar-indicator progress-bar g-bg-white u-progress-bar--xs" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small class="g-font-size-12">11% less than last month</small> -->
                </div>
              </div>

              <div class="col-md-6">
                <div class="g-bg-purple g-color-white g-pa-25">
                  <header class="d-flex text-uppercase g-mb-40">
                    <i class="icon-user align-self-center display-4 g-mr-20"></i>

                    <div class="g-line-height-1">
                      <h4 class="h5">People {{$userOnId->name}} thanked</h4>
                      <div class="js-counter g-font-size-30" data-comma-separated="true">{{count($Thanked)}}</div>
                    </div>
                  </header>

                 <!--  <div class="d-flex justify-content-between text-uppercase g-mb-25">
                    <div class="g-line-height-1">
                      <h5 class="h6 g-font-weight-600">Last Week</h5>
                      <div class="js-counter g-font-size-16" data-comma-separated="true">26904</div>
                    </div>

                    <div class="text-right g-line-height-1">
                      <h5 class="h6 g-font-weight-600">Last Month</h5>
                      <div class="js-counter g-font-size-16" data-comma-separated="true">124766</div>
                    </div>
                  </div> -->

                  <!-- <h6 class="g-mb-10">Project Completeness <span class="float-right g-ml-10">89%</span></h6>
                  <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-10">
                    <div class="js-hr-progress-bar-indicator progress-bar g-bg-white u-progress-bar--xs" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small class="g-font-size-12">16% higher than last month</small> -->
                </div>
              </div>
            </div>
            <!-- End Overall Statistics -->

            <!-- Projects & Activities Panels -->
            <div class="row g-mb-40">
              <div class="col-lg-6 g-mb-40 g-mb-0--lg">
                <!-- Latest Projects Panel -->
                <div class="card border-0">
                  <!-- Panel Header -->
                 
                  <!-- End Panel Header -->

                  <!-- Panel Body -->
                  <div class="js-scrollbar card-block u-info-v1-1 g-bg-white-gradient-v1--after g-height-400 g-pa-0">
                    <ul class="list-unstyled">
                     @foreach ($ThankedBy as $ThankedByUser)
                      <li class="media g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-cyan-left rounded g-pa-20 g-mb-10">
                        <!-- <div class="d-flex g-mt-2 g-mr-15">
                          <img class="g-width-40 g-height-40 rounded-circle" src="/unify/html/assets/img-temp/100x100/img1.jpg" alt="Image Description">
                        </div> -->
                        <div class="media-body">
                          <span class="small text-nowrap g-color-blue">{{$ThankedByUser->from_name}} <i class="align-middle mr-1 icon-medical-022 u-line-icon-pro"></i>{{$ThankedByUser->to_name}}</span>
                          <div class="d-flex justify-content-between">
                            <a href="{{URL::asset('')}}/showpostsv3/postid/{{$ThankedByUser->post_thank_id}}"><h5 class="h6 g-font-weight-600 g-color-black">{{$ThankedByUser->thank_title}}</h5></a>
                            
                          </div>
                          <p></p>
                          <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10"><i class="align-middle mr-1 icon-medical-022 u-line-icon-pro"></i>
                      {{$ThankedByUser->likeCount}}
                    </span>
                          <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10"><i class="align-middle mr-1 icon-finance-206 u-line-icon-pro"></i> {{$ThankedByUser->commentCount}}</span>
                         
                        </div>
                      </li>

                      
                      @endforeach
                    </ul>
                  </div>
                  <!-- End Panel Body -->
                </div>
                <!-- End Latest Projects Panel -->
              </div>

              <div class="col-lg-6">
                <!-- Activities Panel -->
                <div class="card border-0">
                  

                  <div class="js-scrollbar card-block  u-info-v1-1 g-bg-white-gradient-v1--after g-height-400 g-pa-0">
                    <ul class="list-unstyled">

                      @foreach ($Thanked as $ThankedS)
                      <li class="media g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-purple-left rounded g-pa-20 g-mb-10">
                        <!-- <div class="d-flex g-mt-2 g-mr-15">
                          <img class="g-width-40 g-height-40 rounded-circle" src="/unify/html/assets/img-temp/100x100/img1.jpg" alt="Image Description">
                        </div> -->
                        <div class="media-body">
                          <span class="small text-nowrap g-color-blue">{{$ThankedS->from_name}} <i class="align-middle mr-1 icon-medical-022 u-line-icon-pro"></i>{{$ThankedS->to_name}}</span>
                          <div class="d-flex justify-content-between">
                            <a href="{{URL::asset('')}}/showpostsv3/postid/{{$ThankedS->post_thank_id}}"><h5 class="h6 g-font-weight-600 g-color-black">{{$ThankedS->thank_title}}</h5></a>
                            
                          </div>
                          <p></p>
                          <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10"><i class="align-middle mr-1 icon-medical-022 u-line-icon-pro"></i>
                      {{$ThankedS->likeCount}}
                    </span>
                          <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10"><i class="align-middle mr-1 icon-finance-206 u-line-icon-pro"></i>{{$ThankedS->commentCount}}</span>
                         
                        </div>
                      </li>

                      
                      @endforeach

                      
                    </ul>
                  </div>
                </div>
                <!-- End Activities Panel -->
              </div>
            </div>
            <!-- End Projects & Activities Panels -->

           

          

           
          </div>
          <!-- End Profile Content -->
        </div>
      </div>
    </section>

 

     

   
      <!-- Footer -->
<footer  class="g-bg-secondary g-pt-30 g-pb-10">
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
  <script src="/unify/html/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/unify/html/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
  <script src="/unify/html/assets/vendor/popper.min.js"></script>
  <script src="/unify/html/assets/vendor/bootstrap/bootstrap.min.js"></script>


  <!-- JS Implementing Plugins -->
  <script src="/unify/html/assets/vendor/appear.js"></script>
  <script src="/unify/html/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="/unify/html/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

  <!-- JS Unify -->
  <script src="/unify/html/assets/js/hs.core.js"></script>
  <script src="/unify/html/assets/js/helpers/hs.hamburgers.js"></script>
  <script src="/unify/html/assets/js/components/hs.header.js"></script>
  <script src="/unify/html/assets/js/components/hs.tabs.js"></script>
  <script src="/unify/html/assets/js/components/hs.counter.js"></script>
  <script src="/unify/html/assets/js/components/hs.progress-bar.js"></script>
  <script src="/unify/html/assets/js/components/hs.rating.js"></script>
  <script src="/unify/html/assets/js/components/hs.scrollbar.js"></script>
  <script src="/unify/html/assets/js/components/hs.go-to.js"></script>

  <!-- JS Customization -->
  <script src="/unify/html/assets/js/custom.js"></script>

  <script  src="unify/html/assets/js/components/hs.tabs.js"></script>
  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of counters
        var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');

        // initialization of rating
        $.HSCore.components.HSRating.init($('.js-rating'), {
          spacing: 2
        });

        // initialization of HSScrollBar component
        $.HSCore.components.HSScrollBar.init( $('.js-scrollbar') );
      });

      $(window).on('load', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: $('.container'),
          breakpoint: 991
        });

        // initialization of horizontal progress bars
        setTimeout(function () { // important in this case
          var horizontalProgressBars = $.HSCore.components.HSProgressBar.init('.js-hr-progress-bar', {
            direction: 'horizontal',
            indicatorSelector: '.js-hr-progress-bar-indicator'
          });
        }, 1);
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
  </script>







</body>

</html>
