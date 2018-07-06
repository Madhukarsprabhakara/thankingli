@extends('layouts.app')

@section('content')
 <div class="container">
		<!--Modal code here-->
		@include('thank-profile-modal')
		
		@include('validation-errors')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>{{$userOnId->name}}</small>
                    <a class="btn btn-primary pull-right" href="#" data-toggle="modal" data-target="#thank-profile" data-dismiss="modal">Thank {{$userOnId->name}}! <i class="fa fa-angle-right"></i></a>
                </h1>
                <ul>
    				 
<!--     				<li>Two <input class="btn pull-right" value="test2"></li> -->
				</ul>
                 @include('navbar-profile-thankwall')
                
            </div>
        </div>
        <!-- /.row -->
@include('posts-area')
        

        <!-- Blog Post Row -->
 <!-- 
       <div class="row">
            <div class="col-md-1 text-center">
                <p><i class="fa fa-film fa-4x"></i>
                </p>
                <p>June 17, 2014</p>
            </div>
            <div class="col-md-5">
                <a href="#">
                    <img class="img-responsive img-hover" src="http://localhost/thankingli-images/posts/IMG_2365.JPG.jpeg" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <h3><a href="#">Blog Post Title</a>
                </h3>
                <p>by <a href="#">Start Bootstrap</a>
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!~~ /.row ~~>

        <hr>

        <!~~ Blog Post Row ~~>
        <div class="row">
            <div class="col-md-1 text-center">
                <p><i class="fa fa-file-text fa-4x"></i>
                </p>
                <p>June 17, 2014</p>
            </div>
            <div class="col-md-5">
                <a href="#">
                    <img class="img-responsive img-hover" src="http://localhost/thankingli-images/posts/IMG_2806.PNG" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <h3><a href="#">Blog Post Title</a>
                </h3>
                <p>by <a href="#">Start Bootstrap</a>
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!~~ /.row ~~>
 -->

<!--         <hr> -->

        <!-- Pager -->
        <div class="row">
            <ul class="pager">
                <li class="previous"><a href="{{$ThankedBy->previousPageUrl()}}">&larr; Previous</a>
                </li>
                <li class="next"><a href="{{$ThankedBy->nextPageUrl()}}">Next &rarr;</a>
                </li>
            </ul>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        @include('footer')

    </div>
@endsection
