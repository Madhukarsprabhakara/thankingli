@component('mail::message')
Hey {{$name}}!

A startup just raised a help request in the following category.

"<em>{{$sub_cat_name}}</em>"

Don't miss your opportunity to help them!

Browse, search or filter through the help requests.
@component('mail::button', ['url' => $url])
Help someone!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
