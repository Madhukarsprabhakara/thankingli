@component('mail::message')
Hello {{$ToUserName}},

{{$FromUserName}} had thanked you a few days ago, with the following message.

"<em>{{$userTMessage}}</em>"

Please click on the link below to respond to the message.

@component('mail::button', ['url' => $url])
Click here to respond
@endcomponent

By responding to this thank post you'd be encouraging people from spreading the good that happens around us.

Thankingli is a platform that helps spread the good around us by helping people thank anyone, anything or anyplace!
Happy Thanking!

Cheers!<br>
{{ config('app.name') }}
@endcomponent
