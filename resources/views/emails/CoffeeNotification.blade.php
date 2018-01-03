@component('mail::message')

Hey {{$toName}},

{{$fromName}} just thanked you with a cup of coffee on Thankingli.

Presnt this code, {{$code}}, at COFFEE FACTORY in 3787 stevens creek boulevard, Santa Clara to enjoy your thank coffee.

Enjoy your cup of coffee and please don't forget to respond to your friend for this sweet gesture on the link below.

@component('mail::button', ['url' => $url])
Respond to the sweetness
@endcomponent

Cheers!<br>
{{ config('app.name') }}
@endcomponent
