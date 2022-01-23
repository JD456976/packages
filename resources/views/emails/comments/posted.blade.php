@component('mail::message')
Hi,
<br>
{{ $video->user->name }}

A new comment was posted on a video you uploaded.



@component('mail::button', ['url' => '/video/'.$video->slug])
View Video
@endcomponent
<br>
<br>

Too many emails? Change your notification preferences in your profile:

@component('mail::button', ['url' => '/user/'.$video->user->id.'/edit', 'color' => 'error'])
    Your Profile
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
