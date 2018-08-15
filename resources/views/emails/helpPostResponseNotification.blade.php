@component('mail::message')

Hey {{$name}},

{{$fromname}} responded to your following help request

"<em>{{$help_post_title}}</em>"

Please check your inbox to view the full response,
@component('mail::button', ['url' => $url])
Inbox
@endcomponent

Cheers!<br>
{{ config('app.name') }}
@endcomponent
