@component('mail::message')

@component('mail::panel')
Hey there!

Wish you a very happy New Year from everyone here at Thankingli.

Why not start your New Year by thanking someone who has made a difference in your life. 

Thank someone with a quick thank you note, or even better, with a “Thank you Coffee”. (Available only in Santa Clara for now)

@endcomponent

<img src="https://www.thankingli.com/images/email-images/Ha1.png" />


@component('mail::button', ['url' => 'https://www.thankingli.com/thank-someone-1-0'])
Thank Someone!
@endcomponent


Cheers!<br>
{{ config('app.name') }}
@endcomponent
