@component('mail::message')

Hey {{$name}},

There are new comments on your post, click on the below button to view comments.


@component('mail::button', ['url' => $CommentURL])
View Comment
@endcomponent

Cheers!<br>
{{ config('app.name') }}
@endcomponent
