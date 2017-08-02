@component('mail::message')
# Introduction

Hello {{$name}},

We all are helped by someone or the other in this journey called life, someone took a moment to acknowledge the help you have extended.


Someone has thanked you on Thankingli. Please click on the below link to view and respond to the message.

@component('mail::button', ['url' => $url])
Click here to respond
@endcomponent

thankingli is a platform that helps people thank and appreciate the good done by people around us. Happy thanking!

Thanks,<br>
{{ config('app.name') }}
@endcomponent
