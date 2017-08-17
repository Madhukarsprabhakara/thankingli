@extends('layouts.app')

@section('content')
 <div class="container">
		<!--Modal code here-->
		@include('thank-someone-modal')
		
		@include('validation-errors')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>People you thanked</small>
                    <a class="btn btn-primary pull-right" href="#" data-toggle="modal" data-target="#thank-someone" data-dismiss="modal">Thank Someone! <i class="fa fa-angle-right"></i></a>
                </h1>
                <ul>
    				 
<!--     				<li>Two <input class="btn pull-right" value="test2"></li> -->
				</ul>
                 @include('navbar-thankwall')
                
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
                <a href="#">
                    <img class="img-responsive img-hover" src="{{URL::asset('')}}{{$ThankedByUser->image}}" alt="">
                </a>
            </div>
            <div class="col-md-6">
            <h3>
                    Thank you <a href="#">{{$ThankedByUser->to_name}} </a>
                </h3>
                <h4>
                    <a href="#">{{$ThankedByUser->thank_title}}</a>
                </h4>
                <p>by <a href="{{URL::asset('profile/id')}}/{{$ThankedByUser->from_id}}">{{$ThankedByUser->from_name}}</a>
                </p>
                <p>{{$ThankedByUser->thank_description}}.</p>
                <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>
                <hr>
                   <!--commenting section-->
  <div id="accordion" role="tablist" aria-multiselectable="true">  
  <a data-toggle="collapse" data-parent="#accordion" href="#{{$ThankedByUser->post_thank_id}}" aria-expanded="true" aria-controls="{{$ThankedByUser->post_thank_id}}">
           <span class="glyphicon glyphicon-comment"> </span> 
           
           
        </a>
        <span class="glyphicon glyphicon-heart"> </span>
    <div id="{{$ThankedByUser->post_thank_id}}" class="collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form" method="post" action="{{URL::asset('')}}comments/{{$ThankedByUser->post_thank_id}}/store">
                        <div class="form-group">
                            <textarea name="commenttext" placeholder="Respond to the thank message here or if you wish to thank the person click on his/her name besides 'by' where you can start a new thank post for this person." class="form-control" rows="3" autofocus></textarea>
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
                    <a class="pull-left" href="{{URL::asset('profile/id')}}/{{$CommentsOnPost->id}}">
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
<!--       {{ $ThankedBy->links() }} -->
<!--       {{$ThankedBy->nextPageUrl()}} -->
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
