<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/home"><span class="glyphicon glyphicon-home"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
        <li >
          <a  href="/home">People who thanked you </span></a>
        
        </li>
        <li><a href="/thankwall">People you thanked</a></li>
        <li class="active"><a href="/latestposts">Look who's thanking</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
     @include('search-form')
      </ul>
    </div>
  </div>
</nav>