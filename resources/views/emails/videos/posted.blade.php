@component('mail::message')
Hi,
<br>
{{ $user->name }}

A video was just uploaded that matched the Zipcode you have set in your profile:

@component('mail::button', ['url' => $url])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
