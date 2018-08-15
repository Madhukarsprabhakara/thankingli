
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>Profile Settings</title>

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
  <!-- CSS Global Icons -->
  <link rel="stylesheet" href="unify/html/assets/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="unify/html/assets/vendor/icon-line/css/simple-line-icons.css">
  <link rel="stylesheet" href="unify/html/assets/vendor/icon-etlinefont/style.css">
  <link rel="stylesheet" href="unify/html/assets/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="unify/html/assets/vendor/icon-hs/style.css">
  <link rel="stylesheet" href="unify/html/assets/vendor/animate.css">
  <link rel="stylesheet" href="unify/html/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="unify/html/assets/vendor/chosen/chosen.css">
  <link rel="stylesheet" href="unify/html/assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="unify/html/assets/vendor/hamburgers/hamburgers.min.css">
  <link rel="stylesheet" href="unify/html/assets/css/instantsearch_algolia.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="unify/html/assets/css/unify-core.css">
  <link rel="stylesheet" href="unify/html/assets/css/unify-components.css">
  <link rel="stylesheet" href="unify/html/assets/css/unify-globals.css">

  <!-- CSS Customization -->
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



  <section class="g-mb-100 g-mt-120">
    <div id="app">
      <div class="container ">
        <div class="row">
          <!-- Profile Sidebar -->
          <div class="col-lg-3 g-mb-50 g-mb-0--lg">
            <!-- User Image -->
            <div class="u-block-hover g-pos-rel">
              <figure>
                <img v-if="udata['data']['image']" class="img-fluid w-100 u-block-hover__main--zoom-v1" :src="'/'+udata['data']['image']" alt="Image Description">
                <img v-else class="img-fluid w-100 u-block-hover__main--zoom-v1" src="unify/html/assets/img-temp/400x450/img5.jpg" alt="Image Description">
              </figure>

              <!-- Figure Caption -->
              <figcaption class="u-block-hover__additional--fade g-bg-black-opacity-0_5 g-pa-30">
                <div class="u-block-hover__additional--fade u-block-hover__additional--fade-up g-flex-middle">
                  <!-- Figure Social Icons -->
                  <ul class="list-inline text-center g-flex-middle-item--bottom g-mb-20">
                    <!-- <li class="list-inline-item align-middle g-mx-7">
                      <a class="u-icon-v1 u-icon-size--md g-color-white" href="#!">
                        <i class="icon-note u-line-icon-pro"></i>
                      </a>
                    </li>
                    <li class="list-inline-item align-middle g-mx-7">
                      <a class="u-icon-v1 u-icon-size--md g-color-white" href="#!">
                        <i class="icon-notebook u-line-icon-pro"></i>
                      </a>
                    </li> -->
                    <li class="list-inline-item align-middle g-mx-7">
                      <input id="fileAttachment" @change="onFileChange()" ref="files" name="file-attachment" type="file">
                      <i class="icon-cloud-upload g-font-size-16 g-pos-rel g-top-2 g-mr-5"></i>
                    </li>
                  </ul>
                  <!-- End Figure Social Icons -->
                  
                </div>
              </figcaption>
              <!-- End Figure Caption -->
              <!-- <p   class="fa fa-spinner" style="font-size:20px">This message will self destroy when image is uploaded successfully</p> -->
              <div v-show="loading" class="alert alert-dismissible fade show g-bg-teal g-color-white rounded-0" role="alert">
                <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>

                <div class="media">
                  <span class="d-flex g-mr-10 g-mt-5">
                    <i class="icon-check g-font-size-25"></i>
                  </span>
                  <span class="media-body align-self-center">
                    <strong>Please wait, Image upload in progress!</strong> This message will self destroy when image is uploaded successfully.
                  </span>
                </div>
              </div>
              <!-- User Info -->
              <span class="g-pos-abs g-top-20 g-left-0">
                <a class="btn btn-sm u-btn-primary rounded-0" href="#!">@{{udata['data']['name']}}</a>
                <small class="d-block g-bg-black g-color-white g-pa-5">@{{udata['data']['position']}}</small>
              </span>
              <!-- End User Info -->
            </div>
            <!-- User Image -->

            <!-- Sidebar Navigation -->
            <div class="list-group list-group-border-0 g-mb-40">



            </div>
            <!-- End Sidebar Navigation -->

            <!-- Project Progress -->
            
            <!-- End Project Progress -->
          </div>
          <!-- End Profile Sidebar -->

          <!-- Profle Content -->
          <div class="col-lg-9">
            <!-- Nav tabs -->
            <ul class="nav nav-justified u-nav-v1-1 u-nav-primary g-brd-bottom--md g-brd-bottom-2 g-brd-primary g-mb-20" role="tablist" data-target="nav-1-1-default-hor-left-underline" data-tabs-mobile-type="slide-up-down" data-btn-classes="btn btn-md btn-block rounded-0 u-btn-outline-primary g-mb-20">
              <li class="nav-item">
                <a class="nav-link g-py-10 active" data-toggle="tab" href="#nav-1-1-default-hor-left-underline--1" role="tab">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link g-py-10" data-toggle="tab" href="#nav-1-1-default-hor-left-underline--2" role="tab">Skills</a>
              </li>
              <li class="nav-item">
                <a class="nav-link g-py-10" data-toggle="tab" href="#nav-1-1-default-hor-left-underline--3" role="tab">Inbox</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link g-py-10" data-toggle="tab" href="#nav-1-1-default-hor-left-underline--4" role="tab"> People you helped</a>
              </li> -->
            </ul>
            <!-- End Nav tabs -->

            <!-- Tab panes -->
            <div id="nav-1-1-default-hor-left-underline" class="tab-content">
              <!-- Edit Profile -->
              <div class="tab-pane fade show active" id="nav-1-1-default-hor-left-underline--1" role="tabpanel" data-parent="#nav-1-1-default-hor-left-underline">
                <h2 class="h4 g-font-weight-300">Manage your Profile</h2>
                <p>You may edit your Company name, Position, Slack channel and Phone number</p>

                <ul class="list-unstyled g-mb-30">
                  <!-- Name -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Name</strong>
                      <span class="align-top">@{{udata['data']['name']}}</span>
                    </div>
                    <span>
                      <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                    </span>
                  </li>
                  <!-- End Name -->
                  <!-- Primary Email Address -->
                  <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Primary email address</strong>
                      <span class="align-top">@{{udata['data']['email']}}</span>
                    </div>
                    <span>
                      <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                    </span>
                  </li>
                  <!-- End Primary Email Address -->
                  <!-- Your ID -->
                  <!-- <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Your ID</strong>
                      <span class="align-top">FKJ-032440</span>
                    </div>
                    <span>
                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                      </span>
                    </li> -->
                    <!-- End Your ID -->

                    <!-- Company Name -->
                    <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                      <div class="g-pr-10">
                        <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Company name</strong>
                        <span v-if="!editClickFlag" class="align-top">@{{udata['data']['company']}}</span>
                        <input v-model="company_name"  type="text" v-else></input>
                      </div>
                      <span>
                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                      </span>
                    </li>
                    <!-- End Company Name -->

                    <!-- Position -->
                    <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                      <div class="g-pr-10">
                        <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Position</strong>
                        <span v-if="!editClickFlag" class="align-top">@{{udata['data']['position']}}</span>
                        <input v-model="position" type="text" v-else></input>
                      </div>
                      <span>
                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                      </span>
                    </li>
                    <!-- End Position -->



                    <!-- Linked Account -->
                  <!-- <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Linked account</strong>
                      <span class="align-top">Facebook</span>
                    </div>
                    <span>
                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                      </span>
                    </li> -->
                    <!-- End Linked Account -->

                    <!-- Website -->
                  <!-- <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Website</strong>
                      <span class="align-top">https://htmlstream.com</span>
                    </div>
                    <span>
                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                      </span>
                    </li> -->
                    <!-- End Website -->
                    <!-- Slack channel-->
                    <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                      <div class="g-pr-10">
                        <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Slack Channel</strong>
                        <span v-if="!editClickFlag" class="align-top">@{{udata['data']['slack_channel']}}</span>
                        <input v-model="slack_channel" type="text" v-else></input>
                      </div>
                      <span>
                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                      </span>
                    </li>
                    <!-- End Slack channel-->
                    <!-- Phone Number -->
                    <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                      <div class="g-pr-10">
                        <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Phone number</strong>
                        <span v-if="!editClickFlag" class="align-top">@{{udata['data']['phone_no']}}</span>
                        <input v-model="phone_no" type="text" v-else></input>
                      </div>
                      <span>
                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                      </span>
                    </li>
                    <!-- End Phone Number -->

                    <!-- Office Number -->

                    <!-- End Office Number -->

                    <!-- Address -->
                  <!-- <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                    <div class="g-pr-10">
                      <strong class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Address</strong>
                      <span class="align-top">795 Folsom Ave, Suite 600, San Francisco CA, US </span>
                    </div>
                    <span>
                        <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                      </span>
                    </li> -->
                    <!-- End Address -->
                  </ul>

                  <div class="text-sm-right">
                    <!-- <input  v-if="!editClickFlag" class="btn btn-md btn-xl--md u-btn-lightblue-v3 g-width-160--md g-font-size-12 g-font-size-default--md g-mr-10 g-mb-10" v-on:click.stop.prevent="editClickFlag=true" value="Edit" type="submit"></input> -->
                    <a v-if="!editClickFlag" class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10"  v-on:click.stop.prevent="editClickFlag=true" href="#!">Edit</a>
                    <a v-else class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10"  v-on:click.stop.prevent="editClickFlag=false" href="#!">Cancel</a>
                    <a v-if="editClickFlag" class="btn u-btn-primary rounded-0 g-py-12 g-px-25" v-on:click.stop.prevent="saveProfileData" href="#!">Save Changes</a>
                  </div>
                  <div v-if="profileupdatestatus" class="media">
                    <span class="d-flex g-mr-10 g-mt-5">
                      <i class="icon-check g-font-size-25"></i>
                    </span>
                    <span class="media-body align-self-center">
                      <strong>Cool!</strong> Profile info updated successfully.
                    </span>
                  </div>
                </div>
                <!-- End Edit Profile -->

                <!-- Security Settings -->
                <div class="tab-pane fade" id="nav-1-1-default-hor-left-underline--2" role="tabpanel" data-parent="#nav-1-1-default-hor-left-underline">
                  <h2 class="h4 g-font-weight-300">Skills</h2>
                  <p class="g-mb-25">Add/Edit skills that you'd be helping people with. We use these settings to match help requests relevant to you.</p>


                  
                  <!-- select skills -->
                  <div class="form-group row g-mb-25">
                    <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10"> Select all Skills that apply</label>
                    <div class="col-sm-9">
                      <div  class="input-group g-brd-primary--focus">
                        <select :disabled="!editSkillsClickFlag" v-model="catSelection" multiple="" class="form-control rounded-0" id="exampleSelect2">
                          <option v-for="category in categories['data']"  :value="category['cat_id']">@{{category['cat_name']}}</option>

                        </select>
                        <!-- <div class="input-group-append">
                          <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-lock"></i></span>
                        </div> -->
                      </div>
                    </div>
                  </div>
                  <!-- select skills -->
                  <!-- select sub-skills -->
                  <div class="form-group row g-mb-25">
                    <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10"> Select all Sub-skills that apply</label>
                    <div class="col-sm-9">
                      <div v-for="sub_category in subcategories['data']" class="input-group g-brd-primary--focus">
                        <select :disabled="catSelection.length == 0 || !editSkillsClickFlag" v-model="subcatid" multiple="" class="form-control rounded-0" id="exampleSelect2">
                          <option v-for="subcategory in sub_category"  :value="subcategory['sub_cat_id']">@{{subcategory['sub_cat_name']}}</option>

                        </select>
                        <!-- <div class="input-group-append">
                          <span class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0"><i class="icon-lock"></i></span>
                        </div> -->
                      </div>
                    </div>
                  </div>
                  <!-- select sub-skills -->

                  <!-- About Yourself -->
                  <div class="form-group row g-mb-25">
                    <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">A little about yourself</label>
                    <div class="col-sm-9">
                      <div class="input-group g-brd-primary--focus">
                        <!-- <label for="exampleTextarea">Example textarea</label> -->
                        <textarea class="form-control rounded-0 form-control-md" :disabled="!editSkillsClickFlag" v-model="yourself" placeholder="A little about your work|A little about who you are. Every single person is capable of helping someone else because everybody is good at something." id="exampleTextarea" rows="4"></textarea>
                      </div>
                    </div>
                  </div>
                  <!-- End About Yourself -->


                  <hr class="g-brd-gray-light-v4 g-my-25">

                  <div class="text-sm-right">
                    <a v-if="!editSkillsClickFlag" class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10"  v-on:click.stop.prevent="editSkillsClickFlag=true" href="#!">Edit</a>
                    <a v-else class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10"  v-on:click.stop.prevent="editSkillsClickFlag=false" href="#!">Cancel</a>
                    <a v-if="editSkillsClickFlag" class="btn u-btn-primary rounded-0 g-py-12 g-px-25" v-on:click.stop.prevent="saveProfileSkills" href="#!">Save Changes</a>
                  </div>
                  <div v-if="skillsstatus" class="media">
                    <span class="d-flex g-mr-10 g-mt-5">
                      <i class="icon-check g-font-size-25"></i>
                    </span>
                    <span class="media-body align-self-center">
                      <strong>Cool!</strong> Profile skills info updated successfully.
                    </span>
                  </div>
                </div>
                <!-- End Security Settings -->

                <!-- Payment Options -->
                <!--template id goes here-->
                <div class="tab-pane fade" id="nav-1-1-default-hor-left-underline--3" role="tabpanel" data-parent="#nav-1-1-default-hor-left-underline">
                 <h2 class="h4 g-font-weight-300">Manage your Private messages</h2>
                 <p class="g-mb-25">All the private messages that you send or are sent to you will appear here.</p>
                 <!-- Panel Body -->
                 <!--Accordian template-->
                 <div  id="accordion-07" class="u-accordion u-accordion-color-primary" role="tablist" aria-multiselectable="true">
                  <inbox v-on:applied="populateInbox" v-for="(value,helpmsgid) in inboxfeed['distinctMessages']" v-bind:value="value" v-bind:helpmsgid="helpmsgid" v-bind:inboxfeed="inboxfeed" ></inbox>
                </div>
              </div>
              <!-- End Payment Options -->
              <!--ends here-->

              <!-- Notification Settings -->
              <div class="tab-pane fade" id="nav-1-1-default-hor-left-underline--4" role="tabpanel" data-parent="#nav-1-1-default-hor-left-underline">
                <h2 class="h4 g-font-weight-300">Manage your Notifications</h2>
                <p class="g-mb-25">Below are the notifications you may manage.</p>

                <form>
                  <!-- Email Notification -->
                  <div class="form-group">
                    <label class="d-flex align-items-center justify-content-between">
                      <span>Email notification</span>
                      <div class="u-check">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="emailNotification" type="checkbox" checked>
                        <div class="u-check-icon-radio-v7">
                          <i class="d-inline-block"></i>
                        </div>
                      </div>
                    </label>
                  </div>
                  <!-- End Email Notification -->

                  <hr class="g-brd-gray-light-v4 g-my-20">

                  <!-- Comments Notification -->
                  <div class="form-group">
                    <label class="d-flex align-items-center justify-content-between">
                      <span>Send me email notification when a user comments on my blog</span>
                      <div class="u-check">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="commentNotification" type="checkbox">
                        <div class="u-check-icon-radio-v7">
                          <i class="d-inline-block"></i>
                        </div>
                      </div>
                    </label>
                  </div>
                  <!-- End Comments Notification -->

                  <hr class="g-brd-gray-light-v4 g-my-20">

                  <!-- Update Notification -->
                  <div class="form-group">
                    <label class="d-flex align-items-center justify-content-between">
                      <span>Send me email notification for the latest update</span>
                      <div class="u-check">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="updateNotification" type="checkbox" checked>
                        <div class="u-check-icon-radio-v7">
                          <i class="d-inline-block"></i>
                        </div>
                      </div>
                    </label>
                  </div>
                  <!-- End Update Notification -->

                  <hr class="g-brd-gray-light-v4 g-my-25">

                  <!-- Message Notification -->
                  <div class="form-group">
                    <label class="d-flex align-items-center justify-content-between">
                      <span>Send me email notification when a user sends me message</span>
                      <div class="u-check">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="messageNotification" type="checkbox" checked>
                        <div class="u-check-icon-radio-v7">
                          <i class="d-inline-block"></i>
                        </div>
                      </div>
                    </label>
                  </div>
                  <!-- End Message Notification -->

                  <hr class="g-brd-gray-light-v4 g-my-25">

                  <!-- Newsletter Notification -->
                  <div class="form-group">
                    <label class="d-flex align-items-center justify-content-between">
                      <span>Receive our monthly newsletter</span>
                      <div class="u-check">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="newsletterNotification" type="checkbox">
                        <div class="u-check-icon-radio-v7">
                          <i class="d-inline-block"></i>
                        </div>
                      </div>
                    </label>
                  </div>
                  <!-- End Newsletter Notification -->

                  <hr class="g-brd-gray-light-v4 g-my-25">

                  <div class="text-sm-right">
                    <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10" href="#!">Cancel</a>
                    <a class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="#!">Save Changes</a>
                  </div>
                </form>
              </div>
              <!-- End Notification Settings -->
            </div>
            <!-- End Tab panes -->
          </div>
          <!-- End Profle Content -->
        </div>
      </div>
    </div>
  </section>

  <template id="inbox">
    <div>


      <!-- Card -->
      <div  class="card rounded-0 g-brd-none">

        <div id="accordion-07-heading-01" class="u-accordion__header g-pa-0" role="tab">
          <h5 class="mb-0 text-uppercase g-font-size-default g-font-weight-700 g-pa-20a mb-0">
            <a class="d-flex g-color-main g-text-underline--none--hover" :href="'#accordion-07-body-'+helpmsgid" data-toggle="collapse" data-parent="#accordion-07" aria-expanded="true" aria-controls="accordion-07-body-01">
              <span class="u-accordion__control-icon g-brd-right g-brd-gray-light-v4 g-color-primary text-center g-pa-20">
                <i class="fa fa-plus"></i>
                <i class="fa fa-minus"></i>
              </span>
              <span class="g-pa-20">
                @{{value[0]['help_post_title']}}
              </span>
            </a>
          </h5>
        </div>
        <div v-bind:id="'accordion-07-body-'+helpmsgid" class="collapse" role="tabpanel" aria-labelledby="accordion-07-heading-01" data-parent="#accordion-07">
          <div v-for="helpmsg in value" class="u-accordion__body g-bg-gray-light-v5 g-px-50 g-py-30">

            <!--messages-->
            <div class="card-block g-pa-0">
              <div class="media g-brd-around g-bg-white g-brd-gray-light-v4 g-pa-20 g-mb-20">
                <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-2 g-mr-20" src="unify/html/assets/img-temp/100x100/img14.jpg" alt="Image Description">
                
                <div class="media-body">
                  <div class="d-sm-flex justify-content-sm-between align-items-sm-center g-mb-15 g-mb-10--sm">
                    <header class="g-mb-5 g-mb-0--sm">
                      <h5 class="h4 g-font-weight-300 g-mr-10 g-mb-5">@{{helpmsg['from_name']}}</h5>
                      <div class="js-rating g-color-yellow" data-rating="5"></div>
                    </header>
                    <div class="text-nowrap g-font-size-12">
                      <span class="text-muted">2 days ago</span>
                    </div>
                  </div>

                  <!-- <p>@{{helpmsg['help_text']}}</p> -->
                  <p style="word-wrap: break-word;" v-html="$options.filters.nl2br(helpmsg['help_text'])"> </p>
                  <commentsection  v-on:applied="populateInbox" v-bind:value="value" v-bind:helpmsgid="helpmsgid" v-bind:helpmsg="helpmsg" v-bind:inboxfeed="inboxfeed"></commentsection>


                </div>
              </div>



              <!-- <a class="btn btn-block u-btn-darkgray rounded-0 g-py-10" href="#!">Load More</a> -->
            </div>
            <!-- End Panel Body -->



          </div>
        </div>
      </div>

      <!-- End Accordian -->



    </div>
  </template>

  <template id="commentsection" >
    <div>
                  <ul class="list-inline my-0">

                    <li class="list-inline-item g-mr-20">
                      <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!"  v-on:click.stop.prevent="commentBox">
                        <i class="icon-finance-206 u-line-icon-pro g-pos-rel g-top-1 g-mr-3"></i> 
                      </a>
                    </li>
                  </ul>
                  
                  <div v-if="commentShow" class="g-brd-around g-brd-secondary-light-v2 g-bg-lightblue g-pa-20">
                    <div class="form-group g-mb-5">
                      <textarea id="inputGroup2_2" class="form-control form-control-md  rounded-2" v-model="commenttext" rows="2" placeholder="Respond to the private message sent to you."></textarea>
                    </div>
                    <div class="form-group g-mb-5">
                      <a href="#!" v-on:click.stop.prevent="postComment(helpmsg['help_post_id'],helpmsg['in_id'])" v-if="commenttext.length > 0" class="btn btn-xs u-btn-primary g-mr-5 g-mb-5">Post</a>
                    </div>
                    <hr class="g-brd-secondary-light-v2 my-1">
                    <div v-for="comment in inboxfeed['commentsOnReplies']" class="media g-mb-5">
                      
                      <!-- <img class="d-flex g-width-60 g-height-60 rounded-circle g-mt-3 g-mr-20" src="../../assets/img-temp/100x100/img7.jpg" alt="Image Description"> -->
                      <div v-if="comment['in_id']==helpmsg['in_id']" class="media-body" >
                        <div class="d-flex align-items-start g-mb-5 g-mb-5--sm">
                          <div class="d-block">
                            <h5 class="h6">@{{comment['comment_from_name']}}</h5>
                            <span class="d-block g-color-gray-dark-v5 g-font-size-11">@{{comment['created_at']|date('%-d %b')}}</span>
                          </div>

                        </div>

                        <p style="word-wrap: break-word;" v-html="$options.filters.nl2br(comment['comment_text'])"> </p>


                      </div>
                    </div>
                  </div>
                </div>
                </template>

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
<script src="unify/html/assets/vendor/appear.js"></script>
<script src="unify/html/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
<script src="unify/html/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="unify/html/assets/vendor/jquery.maskedinput/src/jquery.maskedinput.js"></script>
<script src="unify/html/assets/vendor/chosen/chosen.jquery.js"></script>

<!-- JS Unify -->
<script src="unify/html/assets/js/hs.core.js"></script>
<script src="unify/html/assets/js/helpers/hs.hamburgers.js"></script>
<script src="unify/html/assets/js/components/hs.header.js"></script>
<script src="unify/html/assets/js/components/hs.tabs.js"></script>
<script src="unify/html/assets/js/components/hs.progress-bar.js"></script>
<script src="unify/html/assets/js/components/hs.scrollbar.js"></script>
<script src="unify/html/assets/js/helpers/hs.not-empty-state.js"></script>
<script src="unify/html/assets/js/helpers/hs.focus-state.js"></script>
<script src="unify/html/assets/js/components/hs.masked-input.js"></script>
<script src="unify/html/assets/js/components/hs.select.js"></script>
<script src="unify/html/assets/js/components/hs.go-to.js"></script>

<!-- JS Customization -->
<script src="unify/html/assets/js/custom.js"></script>

<!-- JS Plugins Init. -->
<script>
  $(document).on('ready', function () {
    $.HSCore.helpers.HSFocusState.init();
    $.HSCore.helpers.HSNotEmptyState.init();

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of input masking
        $.HSCore.components.HSMaskedInput.init('[data-mask]');

        // initialization of custom select
        $.HSCore.components.HSSelect.init('.js-custom-select');

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

    <script>

      var csrf_token = $('meta[name="csrf-token"]').attr('content');
      Vue.component('inbox', {

        template:'#inbox',

        props: ['inboxfeed','value','helpmsgid'],
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

       // console.log(this.feed);
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
      populateInbox:function() {
              this.$emit('applied');
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

  Vue.component('commentsection',{
      template:'#commentsection',

        props: ['inboxfeed','value','helpmsgid','helpmsg'],

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

       if (this.commentShow==true)
       {
        this.commentShow=false;
      }
      else
      {
        this.commentShow=true;
      }

    },
    populateInbox:function() {
              this.$emit('applied');
    },
    postComment:function(postid,index) {

        //alert(path);

        this.$http.post('http://localhost/shresponsecomment',{

          help_post_id: postid,
          in_id: index,
          commenttext: this.commenttext,
          _token: this.token


        }).then(function(response){

          if(response.status == "200")
          {
                //console.log(this.feed['ThankedBy']['path']);
                this.commenttext="";
                this.populateInbox();
                //this.populateInbox();  
                //console.log(this.$parent.$parent.$options.methods.populateInbox());
                //this.$parent.$parent.$options.methods;             
                
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

          this.populateudata();
          this.populateCategories();
          this.populatesdata();
          this.populateInbox();
        },
        watch: {

          catSelection:function(catSelection)
          {
            this.$http.post('http://localhost/getsubcats',{

              cat_id:this.catSelection,
              _token: this.token




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
          onFileChange:function($event)
          {
            this.loading=true;
            this.imageFile=this.$refs.files.files[0];
            let formData = new FormData();
            formData.append('image', this.imageFile);
            formData.append('_token',this.token);
            //console.log(this.imageFile);
            this.$http.post('http://localhost/uploadimage',formData).then(function(response){
            if(response.status == "200")
            {

              this.loading=false;
              this.populatesdata(); 
              this.populateudata();
            } 
            else
            {
              console.log("Bad");
            } 
      // console.log("Yes its here " +this.checkBox);
//      console.log("Yes its here " +this.key);



});

          },
          populateInbox:function() {
            this.$http.get('http://localhost/getinboxreplies').then(function(response){
              if(response.status == "200")
              {

                this.inboxfeed=response.body;
                console.log(this.inboxfeed);   


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

          populateudata:function() {
           this.$http.get('http://localhost/getudata').then(function(response){
            if(response.status == "200")
            {

              this.udata=response.body;
              this.company_name=this.udata['data']['company'];
              this.position=this.udata['data']['position'];
              this.phone_no=this.udata['data']['phone_no'];
              this.slack_channel=this.udata['data']['slack_channel'];
                //console.log(this.udata);   


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
         populatesdata:function() {
           this.$http.get('http://localhost/getsdata').then(function(response){
            if(response.status == "200")
            {

              this.sdata=response.body;
              this.catSelection=this.sdata['data']['skills_info']['cat_id'];
              this.subcatid=this.sdata['data']['skills_info']['sub_cat_id'];
              this.yourself=this.sdata['data']['skills_info']['experience'];
                //this.slack_channel=this.udata['data']['slack_channel'];
                //console.log(this.udata);   


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
         saveProfileSkills:function()
         {
          this.$http.post('http://localhost/postsdata',{


            cat_selection:this.catSelection,
            subcat_selection:this.subcatid,
            experience:this.yourself,
            _token: this.token




          }).then(function(response){
            if(response.status == "200")
            {

              this.skillsstatus=true;
              this.populatesdata();
              this.editSkillsClickFlag=false;
            } 
            else
            {
              console.log("Bad");
            } 
      // console.log("Yes its here " +this.checkBox);
//      console.log("Yes its here " +this.key);



});
        },
        saveProfileData:function()
        {
          this.$http.post('http://localhost/postudata',{

            phno:this.phone_no,
            company:this.company_name,
            position:this.position,
            slackchannel:this.slack_channel,
            _token: this.token




          }).then(function(response){
            if(response.status == "200")
            {
            //this.subcategories=response.body;
            this.profileupdatestatus=true;
            this.editClickFlag=false;
            this.populateudata();
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
        udata:'',
        sdata:'',
        editClickFlag:false,
        editSkillsClickFlag:false,
        company_name:'',
        position:'',
        phone_no:'',
        slack_channel:'',
        profileupdatestatus:false,
        categories:'',
        subcategories:'',
        subcatid:[],
        yourself:'',
        skillsstatus:false,
        inboxfeed:'',
        imageFile:'',
        token: csrf_token,
        loading:false,
        catSelect:[],
        searchtext:'',
        helpfeed:'',
        catSelection:[],
        createHelpClicked:false,
        helptitle:'',
        helpdescr:'',
        tags:'',
            //catid:'',
            
            helppoststatus:false
          }




        });
      </script>



    </body>

    </html>
