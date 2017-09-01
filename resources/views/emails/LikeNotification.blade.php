@component('mail::message')
Hi {{$postOwnerName}}

Your thank story was liked by {{$likeFromName}}.

Here is a link to your story,
@component('mail::button', ['url' => $posturl])
Thank story
@endcomponent

Cheers!<br>
{{ config('app.name') }}
@endcomponent
