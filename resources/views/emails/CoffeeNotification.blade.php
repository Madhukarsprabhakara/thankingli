@component('mail::message')

Hey {{$toName}}!

{{$fromName}} just thanked you with a cup of coffee on Thankingli.

Present this code, {{$code}}, at COFFEE FACTORY in 3787 stevens creek boulevard, Santa Clara to enjoy your "Thank You Coffee".

Please do not forget to respond to {{$fromName}} for thanking you.

@component('mail::button', ['url' => $url])
Your Response
@endcomponent

Note: If you aren't already a subscriber, You will have to create an account to respond to the message. The button will take you to the appropriate screen.

Cheers!<br>
{{ config('app.name') }}
@endcomponent
