<!--code for breadcrumb-->
<ol class="breadcrumb">
                    <!-- 
<li><a href="#">Home</a>
                    </li>
                    <li class="active">Thank Home</li>
                    
 -->
<li>
 <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    More...
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
	<li><a class="pull-left" href="{{URL::asset('home')}}" >People who thanked you! <i class="fa fa-angle-right"></i></a></li>  
  	
    <li><a class="pull-left" href="{{URL::asset('latestposts')}}" >Whats happening? <i class="fa fa-angle-right"></i></a></li>
    <li><a class="pull-left" href="{{URL::asset('thankwall')}}" >People you thanked! <i class="fa fa-angle-right"></i></a></li>
    <!-- 
<li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
 -->
  </ul>
</div>
</li>
                    
<!--                     <a class="pull-right" href="{{URL::asset('thankwall')}}" >Latest thank stories <i class="fa fa-angle-right"></i></a> -->
                    <a class="pull-right" href="{{URL::asset('latestposts')}}" >Whats happening? <i class="fa fa-angle-right"></i></a>
                     
</ol>