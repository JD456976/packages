@component('mail::message')
Hi,

{{ $video->user->username }}

A video you posted was just featured. Check it out:

@component('mail::button', ['url' => $url, 'color' => 'success'])
Featured Video
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
