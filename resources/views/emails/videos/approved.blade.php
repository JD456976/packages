@component('mail::message')
Hello,
<br>
{{ $video->user->username }}

Your video was approved. Future uploads will automatically appear on the site. You can see your live video, by clicking the button below.

@component('mail::button', ['url' => $url])
Your Video
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
