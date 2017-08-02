@extends('layouts.app')

@section('content')
 <div class="container">
		<!--Modal code here-->
		@include('thank-someone-modal')
		
		@include('validation-errors')
		
		<form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        	<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"> </span></button>
      </form>
		
        <div class="row">
        
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>Recent activities</small>
                    <a class="btn btn-primary pull-right" href="#" data-toggle="modal" data-target="#thank-someone" data-dismiss="modal">Thank Someone! <i class="fa fa-angle-right"></i></a>
                </h1>
                <ul>
    				 
<!--     				<li>Two <input class="btn pull-right" value="test2"></li> -->
				</ul>
                @include('breadcrumb-home')
                
            </div>
        </div>
        <!-- /.row -->
@foreach ($ThankedBy as $ThankedByUser)
        <!-- Blog Post Row -->
        <div class="row">
            <div class="col-md-1 text-center">
                <p><i class="fa fa-camera fa-4x"></i>
                </p>
                <p>{{$ThankedByUser->created_at}}</p>
            </div>
            <div class="col-md-5">
                <a href="blog-post.html">
                    <img class="img-responsive img-hover" src="{{URL::asset('')}}{{$ThankedByUser->image}}" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <h3>
                    <a href="blog-post.html">{{$ThankedByUser->thank_title}}</a>
                </h3>
                <p>by <a href="#">{{$ThankedByUser->from_name}}</a>
                </p>
                <p>{{$ThankedByUser->thank_description}}.</p>
                <a class="btn btn-primary" href="blog-post.html">Read More <i class="fa fa-angle-right"></i></a>
                <hr>
    <!--commenting section-->
  <div id="accordion" role="tablist" aria-multiselectable="true">  
  <a data-toggle="collapse" data-parent="#accordion" href="#{{$ThankedByUser->post_thank_id}}" aria-expanded="true" aria-controls="{{$ThankedByUser->post_thank_id}}">
           <span class="glyphicon glyphicon-comment"> </span> 
           
           
        </a>
        <span class="glyphicon glyphicon-heart"> </span>
    <div id="{{$ThankedByUser->post_thank_id}}" class="collapse" role="tabpanel" aria-labelledby="headingOne">
        <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form" method="post" action="{{URL::asset('')}}comments/{{$ThankedByUser->post_thank_id}}/store">
                        <div class="form-group">
                            <textarea name="commenttext" class="form-control" rows="3"></textarea>
                            {{csrf_field()}}
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                @foreach ($CommentsOnPosts as $CommentsOnPost)
                @if ($CommentsOnPost->post_id ==$ThankedByUser->post_thank_id )
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="" alt="{{$CommentsOnPost->comment_name}}">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <small>{{$CommentsOnPost->created_at}}</small>
                        </h4>
                        {{$CommentsOnPost->comment_text}}
                    </div>
                </div>
                @endif
                @endforeach
      </div>
    </div>            
        <!--ends here-->
                
            </div>
        </div>
        
        <hr>
        <!-- /.row -->
@endforeach
        

        <!-- Blog Post Row -->
 <!-- 
       <div class="row">
            <div class="col-md-1 text-center">
                <p><i class="fa fa-film fa-4x"></i>
                </p>
                <p>June 17, 2014</p>
            </div>
            <div class="col-md-5">
                <a href="blog-post.html">
                    <img class="img-responsive img-hover" src="http://localhost/thankingli-images/posts/IMG_2365.JPG.jpeg" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <h3><a href="blog-post.html">Blog Post Title</a>
                </h3>
                <p>by <a href="#">Start Bootstrap</a>
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <a class="btn btn-primary" href="blog-post.html">Read More <i class="fa fa-angle-right"></i></a>
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
                <a href="blog-post.html">
                    <img class="img-responsive img-hover" src="http://localhost/thankingli-images/posts/IMG_2806.PNG" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <h3><a href="blog-post.html">Blog Post Title</a>
                </h3>
                <p>by <a href="#">Start Bootstrap</a>
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <a class="btn btn-primary" href="blog-post.html">Read More <i class="fa fa-angle-right"></i></a>
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
