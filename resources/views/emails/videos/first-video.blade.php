@component('mail::message')
Hi,
<br>
{{ $user->name }}

<p>Thank you for posting your first video. As this is your first video uploaded, it's status is pending until it is
    reviewed. Once we
    have determined your video is not spam, all further uploads will automatically appear on the site. </p>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
