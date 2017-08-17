
<form class="navbar-form navbar-right" method="get" id="search" action="/search">
					{{csrf_field()}}
        			<div class="form-group">
          				<input type="text" class="form-control" name="searchname" placeholder="Search">
       				 </div>
        			<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"> </span></button>
</form>
