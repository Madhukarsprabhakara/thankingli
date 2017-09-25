@foreach ($ThankedBy as $ThankedByUser)
        <!-- Blog Post Row -->
        <div class="row">
            <div class="col-md-1 text-center">
                <p><i class="fa fa-camera fa-4x"></i>
                </p>
                <p>{{$ThankedByUser->created_at}}</p>
            </div>
            <div class="col-md-1">
                <a href="{{URL::asset('profile/id')}}/{{$ThankedByUser->from_id}}">
                <?php $perImage=App\UserProfiles::where('id',$ThankedByUser->from_id)->get(['image'])->first() ?>
                @if (count($perImage))
                
                    <img class="img-responsive img-hover" src="{{URL::asset('')}}{{$perImage->image}}" alt="http://placehold.it/600x300">
                @else
                	<img class="img-responsive img-hover" src="#" alt="">
                @endif	  	    
                </a>
            </div>
            <div class="col-md-5">
            	


                 
                <span STYLE="color: #636B6F; font-size: 18pt">    Thank you <a href="#">{{$ThankedByUser->to_name}} </a></span>
                
                <h4>
                    <a href="#">{{$ThankedByUser->thank_title}}</a>
                </h4>
                <p>by <a href="{{URL::asset('profile/id')}}/{{$ThankedByUser->from_id}}">{{$ThankedByUser->from_name}}</a>
                </p>
                <p>{!!nl2br(e($ThankedByUser->thank_description))!!}.</p>
                
                <a href="#">
                    <img class="img-responsive img-hover" src="{{URL::asset('')}}{{$ThankedByUser->image}}" alt="">
                </a>
                <br>
                <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>
                <hr>
    <!--commenting section-->
  <div id="accordion" role="tablist" aria-multiselectable="true">  
  <a data-toggle="collapse" data-parent="#accordion" href="#{{$ThankedByUser->post_thank_id}}" aria-expanded="true" aria-controls="{{$ThankedByUser->post_thank_id}}">
           <span class="glyphicon glyphicon-comment"> </span> 
           
           
        </a>
        @if(\Auth::id())
        <?php $likeData=App\create_addnl_posts_infos::where('id',\Auth::id())->where('post_thank_id', '=',$ThankedByUser->post_thank_id)->get()->first() ?>
        	<?php $countLikes = App\create_addnl_posts_infos::where('post_thank_id',$ThankedByUser->post_thank_id)->count()?>
        	@if(count($likeData)>0)
        		
        		<span class="glyphicon glyphicon-heart"></span>({{$countLikes}})
        	@else	
        		<a href="{{URL::asset('')}}likepost/{{$ThankedByUser->post_thank_id}}"  ><span class="glyphicon glyphicon-heart"> </span></a>({{$countLikes}})
        	@endif
        	
        @else
        	<?php $countLikes =0 ?>
        	<a href="{{URL::asset('')}}likepost/{{$ThankedByUser->post_thank_id}}"  ><span class="glyphicon glyphicon-heart"> </span></a>({{$countLikes}})	
        @endif
        <a href="{{URL::asset('')}}showposts/postid/{{$ThankedByUser->post_thank_id}}" title="Sharable link for posting on linkedin or facebook" ><span class="glyphicon glyphicon-link"> </span></a>
        @include('validation-errors')
    <div id="{{$ThankedByUser->post_thank_id}}" class="collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form" method="post" action="{{URL::asset('')}}comments/{{$ThankedByUser->post_thank_id}}/store">
                        <div class="form-group">
                            <textarea name="commenttext" placeholder="Respond to the thank message here or if you wish to thank the person click on his/her name besides 'by' where you can start a new thank post for this person." class="form-control" rows="3" autofocus>{{old('commenttext')}}</textarea>
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
    </div>            
        <!--ends here-->
                
            </div>
        </div>
        
        <hr>
        <!-- /.row -->
@endforeach