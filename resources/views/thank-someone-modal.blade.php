<div class="modal signUpContent fade" id="thank-someone" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h3 class="modal-title-site text-center"> Keep thanking! </h3>
            </div>
            <div class="modal-body">
               <form method="post" id="loginsubmit" action="/postthank" enctype="multipart/form-data"> 
					{{csrf_field()}}
                <div class="form-group reg-username">
                    <div>
                        <input name="name" class="form-control input" size="40" placeholder="Name of the person you wish to thank"
                               type="text" required>
                    </div>
                </div>
                <div class="form-group reg-email">
                    <div>
                        <input name="email" class="form-control input" size="100" placeholder="Email of the person you wish to thank" type="email">
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
                <div class="form-group">
                	<label class="btn btn-default">
   						 Upload a photo of yourself (So the person knows who's thanking) <input name="image" type="file" hidden>
					</label>
				</div>
                <div class="form-group">
                    <div>
                        <div class="checkbox login-remember">
                            <label>
                                <!-- 
<input name="surprise" id="surprise" value="0" 
                                       type="checkbox">
                                Are you friends with this person? (The person will be asked to confirm in the notification)</label>
 -->
                                <p>Note: You will only need to upload your image once, we'd use the same image for subsequent thanks posts. 
                                Please use a horizontal image while our engineers work on a fancy image processor!<p>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <input name="submit" class="btn  btn-block btn-lg btn-primary" value="Thank now" type="submit">
                    </div>
                </div>
                </form>
                
                @include('validation-errors')
                <!--userForm-->
              

            </div>
            
        </div>
        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->

</div>