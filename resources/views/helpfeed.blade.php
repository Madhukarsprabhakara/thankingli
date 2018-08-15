
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
    <title>Thankingli - helpposts</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../favicon.ico">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C500%2C700%7CPlayfair+Display%7CRaleway%7CSpectral%7CRubik">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="unify/html/assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="unify/html/assets/vendor/icon-line/css/simple-line-icons.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="unify/html/assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="unify/html/assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="unify/html/assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="unify/html/assets/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="unify/html/assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
    <link rel="stylesheet" href="unify/html/assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
    <link rel="stylesheet" href="unify/html/assets/vendor/animate.css">
    <link rel="stylesheet" href="unify/html/assets/vendor/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="unify/html/assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="unify/html/assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="unify/html/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="unify/html/assets/css/instantsearch_algolia.css">
    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="assets/css/styles.e-commerce.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="unify/html/assets/css/unify-core.css">
  <link rel="stylesheet" href="unify/html/assets/css/unify-components.css">
  <link rel="stylesheet" href="unify/html/assets/css/unify-globals.css">
    <link rel="stylesheet" href="unify/html/assets/css/custom.css">

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

              <!-- <label class="g-font-weight-500 g-font-size-12 g-pl-30">Search for people to thank</label> -->
              <div class="container text-right">
              <input type="search" id="aa-search-input" class="aa-input-search form-control  g-brd-gray g-bg-white g-font-size-15  g-px-10 g-py-10 g-mb-10" placeholder="Search for people" name="search" autocomplete="off" />
            </div>
         

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
                                      <a href="{{URL::asset('profile-editv3')}}">
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

     
<section class="g-bg-gray-light-v4">
  <div id="app">
      <!-- Products -->
      <div class="container g-mt-80 ">
        <div class="row">
          <!-- Content -->
          <div class="col-md-9 order-md-2">
            <div class="g-pl-15--lg">
              <!-- Filters -->
              <div class="d-flex justify-content-end align-items-center g-brd-bottom g-brd-gray-light-v4 g-pt-40 g-pb-20">
               
                <!-- End Show -->

                

              </div>
              <!-- End Filters -->

              <!-- Products -->
        <div class="row g-mb-60 g-mt-40">
          <div class="col-md-8  g-mb-30">
              
              <!-- <div v-for="helppost in helpfeed">
                  <p>@{{helppost['help_post_title']}}</p>
              </div> -->
              <!-- <thankdata v-for="helppost in helpfeed" v-bind:key="helppost['help_post_id']" v-bind:post="helppost[cat_id]"  v-bind:helpfeed="helpfeed"></thankdata> -->
              <!--help request form-->
              <div v-if="createHelpClicked" class="col-md-12">
                <div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-30--md">
                  <header>
                    <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Submit a Help request</h2>
                  </header>

                  <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-25--md">

                  <form>

                    
                      <div class="g-mb-20">
                        <!-- <label class="g-mb-10" for="#dateFrom">Help request title</label> -->

                        
                          <div class="form-group mb-0">
                            
                              <input id="dateFrom" class="form-control form-control-md g-bg-white g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-4 g-px-20 g-py-12" v-model="helptitle" placeholder="Title of your help request. Be as specific as possible." type="text" data-rp-wrapper="#dateFromWrapper" data-rp-date-format="d M Y" required>
                              <span class="g-pos-abs g-top-0 g-right-0 g-z-index-2 g-width-40 h-100 g-font-size-18 g-color-gray-light-v6 rounded-0">
                              
                            </span>
                            
                          </div>
                        
                      </div>

                    
              
                    <div class="g-mb-20">
                      <!-- <label class="g-mb-10" for="#bio">Help request description</label> -->

                      <div class="form-group mb-0">
                        <textarea v-model="helpdescr" id="bio" class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-4 g-px-20 g-py-12" placeholder="Detailed description. Again, it helps people if you are specific." rows="5" required></textarea>
                      </div>
                    </div>

                    <div class="g-mb-20">
                        <!-- <label class="g-mb-10" for="#dateFrom">Help request title</label> -->

                        
                          <div class="form-group mb-0">
                            
                              <input id="dateFrom" v-model="tags" class="form-control form-control-md g-bg-white g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-4 g-px-20 g-py-12" placeholder="Tags for your request. Each tag should be seperated by a space." type="text" data-rp-wrapper="#dateFromWrapper" data-rp-date-format="d M Y" required>
                              <span class="g-pos-abs g-top-0 g-right-0 g-z-index-2 g-width-40 h-100 g-font-size-18 g-color-gray-light-v6 rounded-0">
                              
                            </span>
                            
                          </div>
                        
                      </div>

                    

                    

                    <div class="row">
                      <div class="col-md-6 g-mb-20">
                       

                        <div  class="form-group mb-0">
                          <select  v-model="catSelection"  class="form-control form-control-md rounded-0 g-mb-25" required>
                            <option value="">--Select Category--</option>
                            <option v-for="category in categories['data']"  :value="category['cat_id']">@{{category['cat_name']}}</option>
                            <!-- <option value="3">Value Two</option>
                            <option value="3">Value Three</option> -->
                          </select>
                        </div>
                      </div>

                      <div class="col-md-6 g-mb-20">
                       

                        <div  v-for="sub_category in subcategories['data']" class="form-group mb-0">
                          <select :disabled="catSelection.length == 0" v-model="subcatid" class="form-control form-control-md rounded-0 g-mb-25" required>
                            <option value="">--Select Subcategory--</option>
                            <option v-for="subcategory in sub_category"  :value="subcategory['sub_cat_id']">@{{subcategory['sub_cat_name']}}</option>
                            
                          </select>
                        </div>
                      </div>
                    </div>

                   

                    

                    

                    

                    <div>
                      <input :disabled="subcatid.length == 0 || tags.length == 0 || helpdescr.length == 0 || helptitle.length == 0" class="btn btn-md btn-xl--md u-btn-lightblue-v3 g-width-160--md g-font-size-12 g-font-size-default--md g-mr-10 g-mb-10" v-on:click.stop.prevent="createHelpRequest" type="submit"></input>
                      <button v-if="!helppoststatus" class="btn btn-md btn-xl--md u-btn-outline-gray-dark-v6 g-font-size-12 g-font-size-default--md g-mb-10" v-on:click.stop.prevent="createHelpClicked=false" type="reset">Cancel</button>
                      <button v-else class="btn btn-md btn-xl--md u-btn-outline-gray-dark-v6 g-font-size-12 g-font-size-default--md g-mb-10" v-on:click.stop.prevent="createHelpClicked=false" type="reset">Go Back</button>
                    </div>
                  </form>
                  <div v-if="helppoststatus" class="media">
                  <span class="d-flex g-mr-10 g-mt-5">
                    <i class="icon-check g-font-size-25"></i>
                  </span>
                  <span class="media-body align-self-center">
                    <strong>Awesome!</strong> You successfully submitted your help request. Please try and help someone you can help, because thats what makes this world great!
                  </span>
                </div>
                </div>
              </div>
              <!--help request form ends-->


              <thankdata v-if="!createHelpClicked" v-for="(post,index) in helpfeed['hits']" v-bind:key="post['post_thank_id']" v-bind:post="post" v-bind:index="index" v-bind:feed="helpfeed"></thankdata>

          </div>
          <div class="col-md-4  g-mb-30">
             <!-- Article -->
           
          </div>
        </div>
        <div class="row g-mb-60 g-mt-40">

        </div>
              <!-- End Products -->

              <hr class="g-mb-60">

              <!-- Pagination -->
              <nav class="g-mb-100" aria-label="Page Navigation">
                <ul class="list-inline mb-0">
                  <li class="list-inline-item hidden-down">
                    <a class="active u-pagination-v1__item g-width-30 g-height-30 g-brd-gray-light-v3 g-brd-primary--active g-color-white g-bg-primary--active g-font-size-12 rounded-circle g-pa-5" href="#!">1</a>
                  </li>
                  <li class="list-inline-item hidden-down">
                    <a class="u-pagination-v1__item g-width-30 g-height-30 g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle g-pa-5" href="#!">2</a>
                  </li>
                  <li class="list-inline-item g-hidden-xs-down">
                    <a class="u-pagination-v1__item g-width-30 g-height-30 g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle g-pa-5" href="#!">3</a>
                  </li>
                  <li class="list-inline-item hidden-down">
                    <span class="g-width-30 g-height-30 g-color-gray-dark-v5 g-font-size-12 rounded-circle g-pa-5">...</span>
                  </li>
                  <li class="list-inline-item g-hidden-xs-down">
                    <a class="u-pagination-v1__item g-width-30 g-height-30 g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle g-pa-5" href="#!">15</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="u-pagination-v1__item g-width-30 g-height-30 g-brd-gray-light-v3 g-brd-primary--hover g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle g-pa-5 g-ml-15" href="#!" aria-label="Next">
                      <span aria-hidden="true">
                        <i class="fa fa-angle-right"></i>
                      </span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                  <li class="list-inline-item float-right">
                    <span class="u-pagination-v1__item-info g-color-gray-dark-v4 g-font-size-12 g-pa-5">Page 1 of 15</span>
                  </li>
                </ul>
              </nav>
              <!-- End Pagination -->
            </div>
          </div>
          <!-- End Content -->

          <!-- Filters -->
          <div class="col-md-3 order-md-1 g-brd-right--lg g-brd-gray-light-v4 g-pt-40">
            <div class="g-pr-15--lg g-pt-60">
             

            

             

             

              <!-- Brand -->
              <div class="form-group ">
    <!-- <label class="g-mb-10" for="inputGroup1_1">Text input</label> -->
    <input id="inputGroup1_1" class="form-control form-control-md rounded-0" type="text" v-model="searchtext" v-on:change="populateHelpPosts" placeholder="Search Help Requests">
    <!-- <small class="form-text text-muted g-font-size-default g-mt-10">We'll never share your email with anyone else.</small> -->
  </div>
              <div class="g-mb-30">
                <h3 class="h5 mb-3">Categories</h3>
                <div id="accordion-12" class="u-accordion u-accordion-color-primary " role="tablist" aria-multiselectable="true">

                  <div v-for="category in categories['data']" class="card g-brd-none rounded-50 g-mb-5">
    <div  id="accordion-12-heading-01" class="u-accordion__header g-pa-0 g-bg-gray-light-v4" role="tab">
      <h5 class="mb-0">
        <a class="d-flex g-font-size-15 g-color-main g-text-underline--none--hover  g-brd-gray-light-v4 g-rounded-5 g-pa-0-10" :href="'#accordion-12-body-'+category['cat_id']" data-toggle="collapse" data-parent="#accordion-12" aria-expanded="true" aria-controls="accordion-12-body-01">
          <span class="u-accordion__control-icon g-mr-10">
            <i class="fa fa-angle-down"></i>
            <i class="fa fa-angle-up"></i>
          </span>
          @{{category['cat_name']}}
        </a>
      </h5>
    </div>
      <div v-bind:id="'accordion-12-body-'+category['cat_id']" class="collapse g-bg-gray-light-v4" role="tabpanel" aria-labelledby="accordion-12-heading-01" data-parent="#accordion-12">
      <div v-for="sub_category in category['sub_categories']"  class="u-accordion__body g-color-gray-dark-v5">
            <ul class="list-unstyled">
                  <li class="my-2">
                    <label class="form-check-inline u-check d-block u-link-v5  g-color-primary--hover g-pl-30">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" v-on:change="populateHelpPosts" v-model="catSelect" v-bind:value="sub_category['sub_cat_id']" type="checkbox">
                      <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                        <i class="fa" data-check-icon="&#xf00c"></i>
                      </span>
                      @{{sub_category['sub_cat_name']}} <!-- <span class="float-right g-font-size-13">24</span> -->
                    </label>
                  </li>
                 
                </ul>
      </div>
    </div>
  </div>

            
              </div> <!--End Accordian -->
              </div>
              <!-- End Brand -->

              <hr>

              
            

              <a v-if="!createHelpClicked" href="#!" v-on:click.stop.prevent="showHelpRequestForm" class="btn btn-md u-btn-outline-primary g-mr-10 g-mb-15">Create help request</a>
              <!-- <a v-else href="#!" v-on:click.stop.prevent="showHelpRequestForm" class="btn btn-md u-btn-outline-primary g-mr-10 g-mb-15">Create help request</a> -->
            

            

            </div>
          </div>
          <!-- End Filters -->
        </div>
      </div>
    </div> <!--Vue ends-->
      <!-- End Products -->
      <template  id="thankdata"> 
        <div class="g-mb-15">
            <!-- Article -->
            <article>
              <!-- <img class="img-fluid w-100" src="assets/img-temp/400x270/img17.jpg" alt="Image Description"> -->

              <div class="g-brd-around g-brd-secondary-light-v2 g-bg-white g-pa-20">
                <h3 class="g-font-size-12 ">Category: <span class="g-color-primary">@{{post['sub_cat_name']}}</span></h3>
                <h3 class="g-font-size-16"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">@{{post['help_post_title']}}</a></h3>
                <!-- <p class="g-font-size-13">@{{post['help_post_descr']}}</p> -->
                <p><span v-html="$options.filters.nl2br(post['help_post_descr'])" class="g-font-size-13"></span></p>

                <hr class="g-brd-secondary-light-v2 my-3">

                <!-- Info -->
                <!-- <ul class="d-flex list-inline mb-0">
                  <li class="list-inline-item mx-0">
                    <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-font-size-12 g-text-underline--none--hover g-pr-5 g-py-4" href="#!" >
                      <i class="align-middle mr-1 icon-medical-022 u-line-icon-pro"></i>
                      5
                    </a>
                  </li> -->
                  <li class="list-inline-item mr-0">
                    <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-font-size-12 g-text-underline--none--hover g-px-5 g-py-4" href="#!" v-on:click.stop.prevent="messageBoxShow">
                      <i class="align-middle mr-1 icon-education-166 u-line-icon-pro "></i>
                      1
                    </a>
                  </li>
                  <!-- <li class="list-inline-item ml-auto mr-0">
                    <span class="d-inline-block g-color-secondary-dark-v1 g-font-size-12 g-px-5 g-py-4">
                      <i class="align-middle mr-1 icon-education-097 u-line-icon-pro"></i>
                      15 min ago
                    </span>
                  </li> -->
                </ul>

                <!--Respond to Help Post-->

                <div v-if="commentShow" class="g-brd-around g-brd-secondary-light-v2 g-bg-lightblue g-pa-20">
                  <div class="form-group g-mb-5">
                  <textarea id="inputGroup2_2" class="form-control form-control-md  rounded-2" v-model="helptext" rows="2" placeholder="Respond privately to help post."></textarea>
                </div>
                  <div class="form-group g-mb-5">
                  <a href="#!" v-on:click.stop.prevent="postMessage(post['help_post_id'])" v-if="helptext.length > 0" class="btn btn-xs u-btn-primary g-mr-5 g-mb-5">Send Message</a>
                </div>
                  <p v-if="msgSentStatus">Message Sent Successfully</p>
                </div>

                <!-- done here-->
                <!-- End Info -->
              </div>
            </article>
            <!-- End Article -->
        </div>
      </template>
    </section>
      

       <!-- Footer -->
<footer id="stickyblock-end" class="g-bg-secondary g-pt-30 g-pb-10">
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

      <a class="js-go-to u-go-to-v2" href="#!"
         data-type="fixed"
         data-position='{
           "bottom": 15,
           "right": 15
         }'
         data-offset-top="400"
         data-compensation="#js-header"
         data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
      </a>
    </main>

    <div class="u-outer-spaces-helper"></div>


   
    <!-- JS Global Compulsory -->
    <script src="unify/html/assets/vendor/jquery/jquery.min.js"></script>
    <script src="unify/html/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="unify/html/assets/vendor/popper.min.js"></script>
    <script src="unify/html/assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="unify/html/assets/vendor/jquery-ui/ui/widget.js"></script>
    <script src="unify/html/assets/vendor/jquery-ui/ui/widgets/menu.js"></script>
    <script src="unify/html/assets/vendor/jquery-ui/ui/widgets/mouse.js"></script>
    <script src="unify/html/assets/vendor/jquery-ui/ui/widgets/slider.js"></script>
    <script src="unify/html/assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
    <script src="unify/html/assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
    <script src="unify/html/assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
    <script src="unify/html/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="unify/html/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- JS Unify -->
    <script src="unify/html/assets/js/hs.core.js"></script>
    <script src="unify/html/assets/js/components/hs.header.js"></script>
    <script src="unify/html/assets/js/helpers/hs.hamburgers.js"></script>
    <script src="unify/html/assets/js/components/hs.dropdown.js"></script>
    <script src="unify/html/assets/js/components/hs.scrollbar.js"></script>
    <script src="unify/html/assets/js/helpers/hs.rating.js"></script>
    <script src="unify/html/assets/js/components/hs.slider.js"></script>
    <script src="unify/html/assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="unify/html/assets/js/custom.js"></script>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-filter/0.2.5/vue-filter.min.js"></script>
<script src="https://unpkg.com/lodash@4.16.0"></script>
<script src="https://unpkg.com/vue-infinite-scroll@2.0.2/vue-infinite-scroll.js"></script>
<!-- JS Implementing Plugins -->
<script  src="unify/html/assets/vendor/custombox/custombox.min.js"></script>

<!--Algolia Instant Search Library -->
  
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.jquery.min.js"></script>
<script>
  var client = algoliasearch('PVRYX70O4F', '6715b70338912e39274f257304d25c38');
  var index = client.initIndex('users');
  //initialize autocomplete on search input (ID selector must match)
  $('#aa-search-input').autocomplete(
    {hint: false}, [
    {
      source: $.fn.autocomplete.sources.hits(index, { hitsPerPage: 5}),
      //value to be displayed in input control after user's suggestion selection
      displayKey: 'name',
      //hash of templates used when rendering dataset
      templates: {
        //'suggestion' templating function used to render a single suggestion
        suggestion: function(suggestion) {
          return '<span>' +'<a href="http://localhost/profilev3/'+suggestion.id+'">'+
            suggestion._highlightResult.name.value + '</a></span>' ;
            // suggestion._highlightResult.team.value + '</span>';
            // return '<span>' +
            // suggestion._highlightResult.name.value + '</span><span>' +
            // suggestion.id + '</span>';

        }
      }
    }
  ]);
</script>
    <script>
      Vue.component('thankdata', {
  
    template:'#thankdata',
    
    props: ['post','index','feed'],
    data: function() {

      return {
        //feed:'',
        commentShow:false,
        helptext:'',
        msgSentStatus:false

        //token   : csrf_token
        //post:this.$root.feed['ThankedBy']['data'],

      }
    },
    methods: {
    
    messageBoxShow:function() {
      if (this.commentShow==true)
      {
        this.commentShow=false;
      }
      else
      {
        this.commentShow=true;
      }
    },
    postMessage:function(postid) {

        //alert(path);

        this.$http.post('http://localhost/storehelpresponse',{

            help_post_id: postid,
            help_text: this.helptext
            

          }).then(function(response){

            if(response.status == "200")
            {
                console.log(response.body);
                this.helptext="";
                this.msgSentStatus=true;
                //this.nextPage(path+'/?page='+index);
                
            } 
            else
            {
                  console.log(response);
            } 

          });

    }


    }
            
    
  
  }); 




      var vm = new Vue({
        el:'#app',

        mounted(){
          
          this.populateHelpPosts();
          this.populateCategories();

        },
        watch: {

            catSelection:function(catSelection)
            {
                this.$http.post('http://localhost/getsubcat',{

              cat_id:this.catSelection





          }).then(function(response){
          if(response.status == "200")
          {
            this.subcategories=response.body;
            //console.log(this.dynamicFilterList);    
    
    
        } 
        else
        {
          console.log("Bad");
        } 
      // console.log("Yes its here " +this.checkBox);
//      console.log("Yes its here " +this.key);
      
    
    
    });
            },
            searchtext:function(searchtext){
                this.searchtext=searchtext;
                this.populateHelpPosts();
            }


        },
        methods: {
          populateCategories:function() {
            //this.loading = true;
            this.$http.get('http://localhost/populatecategorymenu').then(function(response){
              if(response.status == "200")
              {

                this.categories=response.body;
                
               // console.log(this.categories);   


              } 
              else
              {
                console.log(response);
              } 
      // console.log("Yes its here " +this.checkBox);
//      console.log("Yes its here " +this.key);



}.bind(this), function(response) {
  alert("Something went wrong");
});
          },
          populateHelpPosts:function() {
                this.$http.post('http://localhost/searchposts',{

            searchstring: this.searchtext,
            filter: this.catSelect
            

          }).then(function(response){

            if(response.status == "200")
            {
                //console.log(this.feed['ThankedBy']['path']);
                vm.helpfeed=response.body;
                
                
            } 
            else
            {
                  alert("Something went wrong");
            } 

          });
          },
          showHelpRequestForm:function()
          {
              //alert("cool");
              if (this.createHelpClicked==true)
              {
                this.createHelpClicked=false;
              }
              else
              {
                this.createHelpClicked=true; 
              }
          },
          createHelpRequest:function()
          {
              this.$http.post('http://localhost/storehelppost',{

                help_post_title:this.helptitle,
                help_post_descr:this.helpdescr,
                tags:this.tags,
                cat_id:this.catSelection,
                sub_cat_id:this.subcatid





          }).then(function(response){
          if(response.status == "200")
          {
            this.subcategories=response.body;
            this.helppoststatus=true;
            //console.log(this.dynamicFilterList);    
    
    
        } 
        else
        {
          console.log("Bad");
        } 
      // console.log("Yes its here " +this.checkBox);
//      console.log("Yes its here " +this.key);
      
    
    
    });
          }

        },
        data: {
            categories:'',
            subcategories:'',
            catSelect:[],
            searchtext:'',
            helpfeed:'',
            catSelection:'',
            createHelpClicked:false,
            helptitle:'',
            helpdescr:'',
            tags:'',
            //catid:'',
            subcatid:'',
            helppoststatus:false
        }




      });
    </script>

  </body>
</html>
