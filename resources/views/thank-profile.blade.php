@extends('layouts.app')

@section('content')
 <div class="container">
		<!--Modal code here-->
		
		
		@include('validation-errors')
		
		
		
		

<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">            
            
            <div class="panel-heading text-center">
<!--                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> -->
               <h3> Write the story - Inspire the world! </h3>
            </div>
            
            <div class="panel-body">
            
            	
            	
 <form method="post" id="loginsubmit" action="/postthank" enctype="multipart/form-data"> 
					{{csrf_field()}}
                <div class="form-group reg-username">
                    <div>
                        <input name="name" class="form-control input" size="40" value="{{$userOnId->name}}"
                               type="text" readonly="readonly">
                    </div>
                </div>
                <div class="form-group reg-email">
                    <div>
                        <input name="email" class="form-control input" size="100" value="{{$userOnId->email}}" readonly="readonly" type="hidden" >
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <input name="emailpresent" class="form-control input" size="100" value="1" readonly="readonly" type="hidden" >
                    </div>
                </div>
                <div class="form-group reg-password">
                    <div>
                        <input name="thank-title" class="form-control input" size="100" placeholder="Title for the thank post"
                               type="text" required>
                    </div>
                </div>
                <div class="form-group">
                
                    <div>
                    	<textarea name="thank-descr" class="form-control" rows="5" placeholder="Note about why you are thanking" id="comment" required></textarea>
                        <!-- 
<input name="thank-descr" class="form-control input" size="500" placeholder="Write a note about the thanks"
                               type="text">
 -->
                    </div>
                </div>
                <!-- 
@if (!empty ( $image ) )
                <div class="form-group">
                	<!~~ 
<label class="btn btn-default">
   						 Upload a photo of yourself (So the person knows who's thanking) <input name="image" type="file" hidden>
					</label>
 ~~>
					<p>Note: We have a phpto of yours on the file, that will be used in your thank post!<p>
				</div>
				@else
				<div class="form-group">
                	<label class="btn btn-default">
   						 Upload a photo of yourself (So the person knows who's thanking) <input name="image" type="file" hidden>
					</label>
					<p>Note: You will only need to upload your image once, we'd use the same image for subsequent thank posts. 
                                Please use a horizontal image while our engineers work on a fancy image processor!<p>
				</div>
				@endif
 -->
				
				<div class="form-group">
                	<label class="btn btn-default">
   						 Upload an optional photo (maybe of yours and the person you are thanking) <input name="image" type="file" hidden>
					</label>
<!-- 					<p>Note: You will only need to upload your image once, we'd use the same image for subsequent thank posts.  -->
<!--                                 Please use a horizontal image while our engineers work on a fancy image processor!<p> -->
				</div>

		
		<!--comment this out for diabling e-commerce-->
                
                <div class="form-group">
                    <div>
                        <div class="checkbox login-remember">
                            <label>
                            	<input name="surprise" id="surprise" value="1" 
                                       type="hidden">
                                <input name="surprise" id="surprise" value="0" 
                                       type="checkbox">
                                I want to buy this person a cup of coffee, I know it costs $3.5! </br>(Payment information will be taken after you thank your friend. Don't worry, until you pay we won't tell your friend about the coffee. You may change your mind on the next screen.)</label>

                                
                        </div>
                    </div>
                </div>

        
        <!--Till here -->
                <div>
                    <div>
                        <input name="submit" class="btn  btn-block btn-lg btn-primary" value="Thank now" type="submit">
                    </div>
                </div>
                </form>
            

            </div>
            

        </div>
        <!-- /.modal-content -->



    </div>
    <!-- /.modal-dialog -->

	
</div>

		


        <hr>

        <!-- Footer -->
        @include('footer')

    </div>
@endsection
