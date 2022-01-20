@component('mail::message')
Hi,
<br>
{{ $video->user->name }}

A new comment was posted on a video you uploaded.



@component('mail::button', ['url' => $url])
View Video
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
