@component('mail::message')
Hello {{$ToUserName}},

{{$FromUserName}} had thanked you a few days ago, with the following message.

"<em>{{$userTMessage}}</em>"

Please click on the link below to respond to the "Thank You" message.

@component('mail::button', ['url' => $url])
Sign Up & Respond
@endcomponent



Thankingli is a platform that helps spread the good around us by helping people thank anyone around the world!

Happy Thanking!

Cheers!<br>
{{ config('app.name') }}
@endcomponent
