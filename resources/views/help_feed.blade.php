<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>Thankingli</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="unify/html/assets/vendor/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="unify/html/assets/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="unify/html/assets/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="unify/html/assets/vendor/icon-hs/style.css">
  <link rel="stylesheet" href="unify/html/assets/vendor/animate.css">
  <link rel="stylesheet" href="unify/html/assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="unify/html/assets/vendor/hamburgers/hamburgers.min.css">
  <link rel="stylesheet" href="unify/html/assets/css/instantsearch_algolia.css">
  <!--For modal -->
  <link  rel="stylesheet" href="unify/html/assets/vendor/custombox/custombox.min.css">
  <!-- CSS Implementing Plugins -->
<link  rel="stylesheet" href="unify/html/assets/vendor/animate.css">
<link  rel="stylesheet" href="unify/html/assets/vendor/custombox/custombox.min.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="unify/html/assets/css/unify-core.css">
  <link rel="stylesheet" href="unify/html/assets/css/unify-components.css">
  <link rel="stylesheet" href="unify/html/assets/css/unify-globals.css">
  <link rel="stylesheet" href="unify/html/assets/css/styles.bm-classic.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="unify/html/assets/css/custom.css">
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
   <!--  <section g-brd-around g-bg-graylight-radialgradient-ellipse g-brd-gray-light-v4 class="g-bg-gray-light-v5 g-py-10">
      
    </section> -->
    <!-- End Breadcrumbs -->
<!--Vue begins-->
<section class="g-bg-gray-light-v4">
<div id="app">
    <!-- Blog Minimal Blocks -->
    <div class="container  g-pt-140 g-pb-20 " >
      <div class="row">
        <div class="col-lg-6 order-lg-2 g-mb-80 ">
          <!-- <div class="container g-height-100  text-center">
              <a href="#!" class="g-bg-blue-lineargradient-v3" class="btn btn-md u-btn-primary g-mr-10 g-mb-15">Thank someone!</a>
          </div> -->
          <br>

          <!-- <template id="thankdata"> -->
          <div class="g-pl-20--lg g-ml-100">
            <!-- Blog Minimal Blocks -->
            <!-- <div class="col-sm-6 col-lg-4 g-mb-300"> -->
            <!-- Article -->
            <article>
              <!-- <img class="img-fluid w-100" src="unify/html/assets/img-temp/400x270/img11.jpg" alt="Image Description"> -->

              <div class="g-brd-around g-brd-secondary-light-v2  g-bg-white g-pa-20">
               
               

             <div class="container text-center">
              <h4>Please click on <i class="g-font-size-20 fa fa-envelope-o" ></i> to get in touch privately with the person you want to help</h4>
               <!--  <a class="btn u-btn-primary" href="https://www.thankingli.com/thanksomeonev3" >Thank someone!
</a> -->
              </div>
              
          
              
                <!-- <hr class="g-brd-secondary-light-v2 my-3"> -->

              
              </div>
            </article>
            <br>
           <i  v-show="loading" class="fa fa-spinner" style="font-size:90px"></i>

            
           
              <thankdata v-for="(post,index) in feed['ThankedBy']['data']" v-bind:key="post['post_thank_id']" v-bind:post="post" v-bind:index="index" v-bind:feed="feed"></thankdata>
            
         
         
            <!-- <hr class="g-mt-15 g-mb-10"> -->
            
            
          
            <!-- End Article -->
          <!-- </div> -->
            <!-- End Blog Minimal Blocks -->

           
            <!-- End Blog Minimal Blocks -->
            
            <!-- Pagination -->
            <nav  class="text-center" aria-label="Page Navigation">
               <!-- <div v-infinite-scroll="loadMoreFeed(feed['ThankedBy']['next_page_url'])" infinite-scroll-disabled="busy" infinite-scroll-distance="10">
          </div> -->
              <ul class="list-inline">
                <li class="list-inline-item float-left g-hidden-xs-down">
                  <a v-show="feed['ThankedBy']['prev_page_url']" class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16" href="#" @click.stop.prevent="nextPage(feed['ThankedBy']['prev_page_url'])"  aria-label="Previous">
                    <span aria-hidden="true">
                      <i class="fa fa-angle-left g-mr-5"></i> Previous
                    </span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="u-pagination-v1__item u-pagination-v1-4 u-pagination-v1-4--active g-rounded-50 g-pa-7-14" >@{{feed['ThankedBy']['current_page']}}</a>
                </li>
                
                <li class="list-inline-item float-right g-hidden-xs-down">
                  <a v-show="feed['ThankedBy']['next_page_url']" class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16" @click.stop.prevent="nextPage(feed['ThankedBy']['next_page_url'])"  href="#" aria-label="Next">
                    <span aria-hidden="true">
                      Next <i class="fa fa-angle-right g-ml-5"></i>
                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- End Pagination -->
            
          </div>
        <!-- </template> -->
        </div>



        <div class="col-lg-3 order-lg-1 g-brd-right--lg g-brd-gray-light-v4 g-mb-80">
          <div class="g-pr-20--lg">
            <!-- Links -->

            <div id="stickyblock-start" class=" js-sticky-block g-sticky-block--lg g-pt-30" data-start-point="#stickyblock-start" data-end-point="#stickyblock-end">

              <!-- <div class="g-mb-20">
         
          <input class="form-control u-shadow-v19 g-brd-none g-bg-white g-font-size-16 g-rounded-30 g-px-30 g-py-13 g-mb-10" type="text" placeholder="Search Help Requests">
        </div> -->
        <div class="form-group ">
    <!-- <label class="g-mb-10" for="inputGroup1_1">Text input</label> -->
    <input id="inputGroup1_1" class="form-control form-control-md rounded-0" type="email" placeholder="Search Help Requests">
    <!-- <small class="form-text text-muted g-font-size-default g-mt-10">We'll never share your email with anyone else.</small> -->
  </div>
              <div class="g-mb-50">
                
              <h3 class="h5 g-color-black g-font-weight-600 mb-4">Categories</h3>
               <tabs>  
                  <tab name="Feed" :selected="true">
                      <!-- <thankdata></thankdata> -->
                  </tab>
                  <tab name="People You Thanked" >
                    <!-- <thankdata></thankdata> -->
                  </tab>
                  <tab name="People Who Thanked You" >
                   <!-- <thankdata></thankdata> -->
                  </tab>
               </tabs>
            </div>



            <a href="#!" class="btn btn-md u-btn-outline-primary g-mr-10 g-mb-15">Create Help Request</a>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
    <!--Vue ends-->
</section>
    <!--Tabs template here -->
    <template id="tabscd">
      <div>
        <div>
          <ul class="list-unstyled g-font-size-13 mb-0">

               

                <li v-for="tab in tabs" v-bind:class="{ 'active':tab.isActive}">
                  <a v-if="tab.isActive" class="d-block u-link-v5 g-color-blue-dark-v4 rounded g-px-20 g-py-8"  href="#!" @click="selectTab(tab)"><i class="mr-2 fa fa-angle-right  "></i> @{{tab.name}}</a>
                  <a v-else class="d-block u-link-v5 g-color-gray-dark-v4 rounded g-px-20 g-py-8"  href="#!" @click="selectTab(tab)"><i class="mr-2 fa fa-angle-right  "></i> @{{tab.name}}</a>
                  
                </li>
                <!-- <li>
                  <a class="d-block u-link-v5 g-color-gray-dark-v4 rounded g-px-20 g-py-8" href="#!"><i class="mr-2 fa fa-angle-right"></i> People you thanked </a>
                </li>
                <li>
                  <a class="d-block u-link-v5 g-color-gray-dark-v4 rounded g-px-20 g-py-8" href="#!"><i class="mr-2 fa fa-angle-right"></i> People who thanked you</a>
                </li> -->
             
                <!-- <li>
                  <a class="d-block u-link-v5 g-color-gray-dark-v4 rounded g-px-20 g-py-8" href="#!"><i class="mr-2 fa fa-angle-right"></i> Business Strategy</a>
                </li>
                <li>
                  <a class="d-block active u-link-v5 g-color-black g-bg-gray-light-v5 g-font-weight-600 g-rounded-50 g-px-20 g-py-8" href="#!"><i class="mr-2 fa fa-angle-right"></i> Untold Stories</a>
                </li> -->
              </ul>
        </div>
        <div class="tab-content">
          <slot></slot>

        </div>
      </div>
    </template>
    <template id="tabcontent">
      <div v-show="isActive" class="tab-content">
        <div><slot></slot></div>

      </div>
  </template>

    <!-- Tabs template ends @{{post['thank_description']|split('\n')}}-->
    <!-- End Blog Minimal Blocks -->
               <template  id="thankdata"> 
                <div> 
                  <article >
              <img v-if="post['image']" class="img-fluid w-100" :src="post['image']" alt="Image Description">

              <div   class="g-brd-around g-brd-secondary-light-v2 g-bg-white g-pa-20">
                <p class="g-font-size-10">@{{post['from_name']}} <i class="align-middle mr-1 icon-medical-022 u-line-icon-pro"></i>@{{post['to_name']}}</p>
                <h3 class="g-font-size-16"><a class="u-link-v5 g-color-main g-color-primary--hover" :href="'http://localhost/showpostsv3/postid/'+post['post_thank_id']"  >@{{post['thank_title']}}</a></h3>
                <p  ><span v-html="$options.filters.nl2br(post['thank_description'])" class="g-font-size-13"></span></p>

                <hr class="g-brd-secondary-light-v2 my-3">
                <!-- Info -->
                <ul class="d-flex list-inline mb-0">
                  <li v-if="post['likedOrNot']==0" class="list-inline-item mx-0">
                    <a  v-bind:id="post['post_thank_id']" class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-font-size-12 g-text-underline--none--hover g-pr-5 g-py-4" href="#" v-on:click.stop.prevent="heart(post['post_thank_id'],feed['ThankedBy']['current_page'],index)">
                      <i  class="align-middle mr-1 icon-medical-022 u-line-icon-pro" ></i>
                      @{{post['likeCount']}}
                    </a>
                   
                    <!-- <i v-else class="align-middle mr-1 icon-medical-022 u-line-icon-pro" ></i>@{{post['likeCount']}} -->
                  </li>
                  <li v-else  class="list-inline-item mx-0">
                    
                    <a   class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-font-size-12 g-text-underline--none--hover g-pr-5 g-py-4" href="#" v-on:click.stop.prevent="heart(post['post_thank_id'],feed['ThankedBy']['current_page'],index)">
                      <i v-bind:id="post['post_thank_id']" class="g-font-size-12 fa fa-heart" ></i>
                     @{{post['likeCount']}}
                    </a>
                    <!-- <i v-else class="align-middle mr-1 icon-medical-022 u-line-icon-pro" ></i>@{{post['likeCount']}} -->
                  </li>
                  <li class="list-inline-item mr-0">
                    <a id="post['post_thank_id']" class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-font-size-12 g-text-underline--none--hover g-px-5 g-py-4" href="#!" v-on:click.stop.prevent="commentBox">
                      <i class="align-middle mr-1 icon-finance-206 u-line-icon-pro"></i>
                      @{{post['commentCount']}}
                    </a>
                  </li>
                  <li class="list-inline-item ml-auto mr-0">
                    <span class="d-inline-block g-color-secondary-dark-v1 g-font-size-12 g-px-5 g-py-4">
                      <i class="align-middle mr-1 icon-education-097 u-line-icon-pro"></i>
                      15 min ago
                    </span>
                  </li>
                </ul>
                <div v-if="commentShow" class="g-brd-around g-brd-secondary-light-v2 g-bg-lightblue g-pa-20">
                  <div class="form-group g-mb-5">
                  <textarea id="inputGroup2_2" class="form-control form-control-md  rounded-2" v-model="commenttext" rows="2" placeholder="Add a comment or Respond to the Thank You message"></textarea>
                </div>
                  <div class="form-group g-mb-5">
                  <a href="#!" v-on:click.stop.prevent="postComment(post['post_thank_id'],feed['ThankedBy']['current_page'],feed['ThankedBy']['path'])" v-if="commenttext.length > 0" class="btn btn-xs u-btn-primary g-mr-5 g-mb-5">Post</a>
                </div>
                  <hr class="g-brd-secondary-light-v2 my-1">
                  <div v-for="comment in feed['CommentsOnPosts2']" class="media g-mb-5">
                    <!-- <img class="d-flex g-width-60 g-height-60 rounded-circle g-mt-3 g-mr-20" src="../../assets/img-temp/100x100/img7.jpg" alt="Image Description"> -->
                    <div v-if="comment['post_id']==post['post_thank_id']" class="media-body" >
                      <div class="d-flex align-items-start g-mb-5 g-mb-5--sm">
                        <div class="d-block">
                          <h5 class="h6">@{{comment['comment_name']}}</h5>
                          <span class="d-block g-color-gray-dark-v5 g-font-size-11">@{{comment['created_at']|date('%-d %b')}}</span>
                        </div>

                      </div>
                      
                     <p style="word-wrap: break-word;" v-html="$options.filters.nl2br(comment['comment_text'])"> </p>
                   
                     
                    </div>
                  </div>
                </div>
                </div>

               <br>
            </article>
              </div>
            

              </template>
                <!-- End Info -->
            

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
    <a class="js-go-to u-go-to-v1" href="#!" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
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
  <script src="unify/html/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>

  <!-- JS Unify -->
  <script src="unify/html/assets/js/hs.core.js"></script>
  <script src="unify/html/assets/js/components/hs.header.js"></script>
  <script src="unify/html/assets/js/helpers/hs.hamburgers.js"></script>
  <script src="unify/html/assets/js/components/hs.tabs.js"></script>
  <script src="unify/html/assets/js/components/hs.sticky-block.js"></script>
  <script src="unify/html/assets/js/components/hs.go-to.js"></script>



 
  <!-- JS Customization -->
  <script src="unify/html/assets/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
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

        // initialization of sticky blocks
        setTimeout(function() {
          $.HSCore.components.HSStickyBlock.init('.js-sticky-block');
        }, 300);
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
  </script>

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
<!-- JS Unify -->
<script  src="unify/html/assets/js/components/hs.modal-window.js"></script>

<!-- JS Plugins Init. -->
<script >
  $(document).on('ready', function () {
    // initialization of popups
    $.HSCore.components.HSModalWindow.init('[data-modal-target]');
  });
</script>
<script>
  var csrf_token = $('meta[name="csrf-token"]').attr('content');
  var c = null;
  Vue.component('tabs', {

      template:'#tabscd',

      data() {
        return {tabs: []
          }
      },
      created(){
        this.tabs = this.$children;
      },

      methods: {

          selectTab(selectedTab){
            
            if(selectedTab.name == "People Who Thanked You")
            {
              vm.feed="";
              this.$http.get('http://localhost/homev3').then(function(response){
                if(response.status == "200")
                {
                  vm.feed=response.body;
                  //console.log(vm.feed);   


                } 
                else
                {
                  console.log(response);
                } 
   


                    });

            } 
            else if(selectedTab.name == "People You Thanked")
            {
                vm.feed="";
                this.$http.get('http://localhost/thankwallv3').then(function(response){
                if(response.status == "200")
                {
                  vm.feed=response.body;
                  //console.log(vm.feed);   


                } 
                else
                {
                  console.log(response);
                } 
   


                    });
            } 
            else if (selectedTab.name == "Feed")
            {
              vm.feed="";
              this.$http.get('http://localhost/thankfeed').then(function(response){
                if(response.status == "200")
                {
                  vm.feed=response.body;
                  //console.log(vm.feed);   


                } 
                else
                {
                  console.log(response);
                } 
                  });
            }
            else
            {
              alert("Not a valid selection");
            }

            this.tabs.forEach(tab => {
              tab.isActive = (tab.name == selectedTab.name );
              //console.log(tab.isActive);
            });
            //this.tabselect(selectedTab.name);

          }

        }
      }); 

    Vue.component('tab',{
      template:'#tabcontent',
      
      props: {
        name : {required: true},
        selected: {default: false}
      },
      data(){
        return {
          isActive: false 
        }
        

      },
      mounted(){
        this.isActive= this.selected;
      }

    });

    Vue.component('thankdata', {
  
    template:'#thankdata',
    
    props: ['post','index','feed'],
    data: function() {

      return {
        //feed:'',
        commentShow:false,
        commenttext:'',
        token   : csrf_token
        //post:this.$root.feed['ThankedBy']['data'],

      }
    },
    methods: {
      commentBox:function()
      {

      //console.log(this.feed);
      if (this.commentShow==true)
      {
        this.commentShow=false;
      }
      else
      {
        this.commentShow=true;
      }
      
    },
    heart:function(postid,currentPage,index) {
        //

        var likeUrl="http://localhost/likepost/";
        this.$http.get(likeUrl+postid).then(function(response){
          if(response.status == "200")
          {
            
              vm.feed['ThankedBy']['data'][index]['likeCount']+=1;
              //this.heartButtonFlag=false;
    
        } 
        else
        {
           vm.feed['ThankedBy']['data'][index]['likeCount']-=1;
        } 
      // console.log("Yes its here " +this.checkBox);
//      console.log("Yes its here " +this.key);
      
    
    
    });
    },
    nextPage:function(url) {
        this.url = url;
        this.$http.get(this.url).then(function(response){
          if(response.status == "200")
          {
            this.feed=response.body;
            //this.$emit.('applied'); 
    
    
        } 
        else
        {
          console.log(response);
        } 
      // console.log("Yes its here " +this.checkBox);
//      console.log("Yes its here " +this.key);
      
    
    
    });
      },
    postComment:function(postid,index,path) {

        //alert(path);

        this.$http.post('http://localhost/comments/'+postid+'/'+'storev3',{

            commenttext: this.commenttext,
            _token: this.token
            

          }).then(function(response){

            if(response.status == "200")
            {
                //console.log(this.feed['ThankedBy']['path']);
                this.commenttext="";
                this.nextPage(path+'/?page='+index);
                
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
      this.populateFeed();
    },
    // watch: { 

    //  projectSelect: function() { 
    //      console.log(this.projectSelect);
    //  } 

    // },
  watch: {
  
        projectSelect: function(projectSelect) {
          

            // Clear previously selected values
            // this.countries = [];
            // this.cities = [];
            // this.selectedCountry = "";
            // this.selectedCity = "";
            // Populate list of countries in the second dropdown
            this.projectSelect = projectSelect;
            //console.log(projectSelect);
            this.$http.get('http://127.0.0.1:8000/test/getmetricsets/'+this.projectSelect).then(function(response){
          if(response.status == "200")
          {
            this.metricsSetList=response.body;
            //console.log(this.metricsSetList);   
    
    
        } 
        else
        {
          console.log("Bad");
        } 
      // console.log("Yes its here " +this.checkBox);
//      console.log("Yes its here " +this.key);
      
    
    
    });
            if (this.projectSelect.length > 0) {
              
              //console.log(this.projectSelect.length);
                // this.countries = this.places[this.selectedContinent]
            }
        },
        firstSelection: function(firstSelection) {
          //console.log(firstSelection);

          this.firstSelection = firstSelection;
          if (this.firstSelection.length > 0) {
            //alert("test");
            //console.log(this.firstSelection.length);
          }
        },
        
    },
  methods: {

    // onChangeh:function(e){
    //    var self = this;
    //    alert(self);
        
    //  },
      
    // firstSelect:function(){
    //    alert("This");
    //  },
    
    tabselect:function(tabName) {
           // vm.feed="";
            
            

    },
    
    onScroll:function()
    {
      console.log("cool");
    },
    loadMoreFeed:function(urlmore) {
      console.log(this.urlmore);

        //this.busy = true;

      
        this.$http.get(this.urlmore).then(function(response){
          if(response.status == "200")
          {
            this.feed=response.body;
            //console.log(this.feed);   
    
    
        } 
        else
        {
          console.log(response);
        } 
      // console.log("Yes its here " +this.checkBox);
//      console.log("Yes its here " +this.key);
      
    
    
    });
             
        
    },
    
    postComment:function()
    {
      alert(this.commenttext);
    },
    nextPage:function(url) {
        this.url = url;
        this.$http.get(this.url).then(function(response){
          if(response.status == "200")
          {
            this.feed=response.body;
            //this.$emit.('applied'); 
    
    
        } 
        else
        {
          console.log(response);
        } 
      // console.log("Yes its here " +this.checkBox);
//      console.log("Yes its here " +this.key);
      
    
    
    });
      },
    populateFeed:function() {
      this.loading = true;
        this.$http.get('http://localhost/thankfeed').then(function(response){
          if(response.status == "200")
          {
             
            this.feed=response.body;
            this.loading = false;
            console.log(this.currentRoute);   
    
    
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

    
    },
  
  data: {
  
    
    projectSelect:'',
    firstSelection:'',
    metricSetSelection:'',
    feed:'',
    postid:'',
    heartButtonFlag:true,
    url:'',
     currentRoute:window.location.pathname,
    urlmore:'',
    metricsSetList:[],
    commenttext:'Add a comment or Respond to the Thank You message',
    busy: false,
    commentShow:false,
    loading: false,
    analyzeBySelect:[],
    //summaryData:'',

    data:'',
    checkedState:false,
    checkBox:[]
  },
  
  });


</script>





</body>

</html>