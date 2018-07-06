@component('mail::message')

Hi {{$name}},

We are so excited to have you onboard. We have one goal, to spread the good there is around us. We believe sharing happiness , appreciating people and consciously remembering the good things in the world are essential to unite people.   

Thankingli helps spread the good around us by helping people thank anyone, anything or anyplace! 

So what are you waiting for, Start thanking!

Click to see who's thanking.
@component('mail::button', ['url' => $url])
Who's thanking
@endcomponent

Cheers!<br>
{{ config('app.name') }}
@endcomponent
