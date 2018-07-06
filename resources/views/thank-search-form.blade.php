<div>
<form class="navbar-form navbar-left" method="get" id="search" action="/search">
					{{csrf_field()}}
        			<div class="form-group">
          				<input type="text" class="form-control" name="searchname" placeholder="Search" required>
       				 </div>
        			<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"> </span></button>
</form>
</div>
</br>
	
