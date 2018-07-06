@extends('layouts.app')

@section('content')
 <div class="container">
		<!--Modal code here-->
		
		
		@include('validation-errors')
		
		
		@if (Session::has('flash_message'))
    <div class="flash-message">
    <div class="alert alert-success">
			{{Session::get('flash_message')}}
    </div>
    </div>
@endif
		

<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">            
            
            <div class="panel-heading text-center">
<!--                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> -->
               <a class="btn btn-primary pull-center" href="{{URL::asset('latestposts')}}">Read thank stories<i class="fa fa-angle-right"></i></a>
               
               <h3> </h3>
            </div>
            
            <div class="panel-body">
            
            
            
            </div>
            
<!-- 		<p>Note: All the payments are processed through stripe, our payment partner. Thankingli doesn't store any of your card details</p> -->
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
