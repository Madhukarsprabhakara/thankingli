<!-- validation errors-->
@if (count($errors))
	<div class="form-group">
		<div class="alert alert-danger">

			<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach	

			</ul>


		</div>
	</div>
@endif

@if (Session::has('flash_message'))
    <div class="flash-message">
    <div class="alert alert-success">
			{{Session::get('flash_message')}}
    </div>
    </div>
@endif