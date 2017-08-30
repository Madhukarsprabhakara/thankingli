@extends('layouts.app')

@section('content')
 <div class="container">
		
		
		@include('validation-errors')
		
		

		
	

<div class="row">
        
@foreach ($profileData as $profileDatas)
<div class="col-lg-4">
   
   		<div class="form-group">
    		<label for="image">Profile photo:</label>
			<img class="img-responsive img-hover" src="{{URL::asset('')}}{{$profileDatas->image}}" alt="">
  		</div>
  		<div class="form-group">
    			<label for="name">Name:</label><p>{{$name->name}}</p>
    			
  		</div>
  		<div class="form-group">
    		<label for="pwd">Company/School:</label><p>{{$profileDatas->company}}</p>
    			
  		</div>
  		<div class="form-group">
    		<label for="phno">Phone No:</label><p>{{$profileDatas->phno}}</p>
<!--     			<input type="number" class="form-control" id="phno" name="phno"> -->
  		</div>
  		<div class="form-group">
    		<label for="hadd">Home Address:</label><p>{{$profileDatas->homeaddress}}</p>
    			
  		</div>
  		
  	
  		
<!--   			<button type="submit" class="btn btn-default">Submit</button> -->
	
                
</div>        
<div class="col-lg-4">
    <form method="post" action="/update" enctype="multipart/form-data">
    {{csrf_field()}}
  		<!-- 
<div class="form-group">
    			<label for="name">Name:</label>
    			<input type="text" class="form-control" id="name" name="name" required>
  		</div>
 -->
  		<div class="form-group">
    		<label for="pwd">Company/School:</label>
    			<input type="text" class="form-control" id="company" value="{{$profileDatas->company}}" name="company">
  		</div>
  		<div class="form-group">
    		<label for="phno">Phone No:</label>
    			<input type="number" class="form-control" id="phno" value="{{$profileDatas->phno}}" name="phno">
  		</div>
  		<div class="form-group">
    		<label for="hadd">Home Address:</label>
    			<input type="text" class="form-control" placeholder="Street-Apt no-City-State-zipcode" value="{{$profileDatas->homeaddress}}" id="hadd" name="hadd">
  		</div>
  		<div class="form-group">
    		<label for="image">Image:</label>
    			<input type="file" class="form-control" id="image" name="image">
  		</div>
  	
  		
  			<button type="submit" class="btn btn-default">Submit Changes</button>
	</form>
    <br>
<a class="btn btn-primary pull-center" href="{{URL::asset('home')}}">Take be back home! <i class="fa fa-angle-right"></i></a>             
</div>
@endforeach

@if (count($profileData)==0)
<div class="col-lg-4">
    <form method="post" action="/profile-insert" enctype="multipart/form-data">
    {{csrf_field()}}
  		<!-- 
<div class="form-group">
    			<label for="name">Name:</label>
    			<input type="text" class="form-control" id="name" name="name" required>
  		</div>
 -->
  		<div class="form-group">
    		<label for="pwd">Company/School:</label>
    			<input type="text" class="form-control" id="company" default="Company/School name, so people can identify you easily" name="company">
  		</div>
  		<div class="form-group">
    		<label for="phno">Phone No:</label>
    			<input type="number" class="form-control" id="phno"  name="phno">
  		</div>
  		<div class="form-group">
    		<label for="hadd">Home Address:</label>
    			<input type="text" class="form-control" placeholder="Street-Apt no-City-State-zipcode"  id="hadd" name="hadd">
  		</div>
  		<div class="form-group">
    		<label for="image">Image:</label>
    			<input type="file" class="form-control" id="image" name="image">
  		</div>
  	
  		
  			<button type="submit" class="btn btn-default">Submit Changes</button>
	</form>
  
</div>
@endif


</div>
        
        <hr>

        <!-- Footer -->
        @include('footer')

    </div>
@endsection
