<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('header')
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Sign in</a>
                        <a href="{{ url('/register') }}">Sign up</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    thankingli
                </div>
				
				<div >
				<!-- 
<h3>We are all helped  by someone or something along our journey; Please take a moment to thank them.</h3>
				<h3>Go ahead thank your family, friends, a country, a state, your dog,  well, just about anyone, anything or anyplace.</h3>
 -->
 					<h3>thankingli helps people thank someone, something or someplace!</h3>
 					<h3>Every thank has a story and every story has an inspiration. </h3>
 					
 					<h3>Go ahead thank someone, inspire the world!</h3>
					
				</div>
				<div class="col-md-6 col-md-offset-3">
					<a class="btn btn-primary pull-center" href="{{URL::asset('register')}}">Sign up! <i class="fa fa-angle-right"></i></a>
					or
					<a class="btn btn-primary pull-center" href="{{URL::asset('latestposts')}}">Read thank stories<i class="fa fa-angle-right"></i></a>
                </div>
                <!-- 
<div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
 -->
            </div>
        </div>
    </body>
</html>
