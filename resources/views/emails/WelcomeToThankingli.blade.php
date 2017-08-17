@component('mail::message')

Hi {{$name}},

We are so excited to have you onboard.

Thankingli helps spread the good around us by helping people thank anyone, anything or anyplace!

Click to see who's thanking.
@component('mail::button', ['url' => $url])
Who's thanking
@endcomponent

Cheers!<br>
{{ config('app.name') }}
@endcomponent
