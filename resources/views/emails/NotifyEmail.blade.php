@component('mail::message')

Hello {{$name}},


{{$user->name}} has thanked you on Thankingli. Please click on the below link to view and respond to the message.

@component('mail::button', ['url' => $url])
Click here to respond
@endcomponent

Thankingli is a platform that helps people thank and appreciate the good done by people around us. Happy thanking!

Cheers,<br>
{{ config('app.name') }}
@endcomponent
