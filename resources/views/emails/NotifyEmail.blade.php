@component('mail::message')
# Introduction

Hello {{$name}},

We are all helped by someone or the other in this journey called life, please take a moment to acknowledge the help so you keep the wheel of goodness spinning.
Happy thanking!

{{$user->name}} has thanked you on Thankingli. Please click on the below link to view and respond to the message.

@component('mail::button', ['url' => $url])
Click here to respond
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
