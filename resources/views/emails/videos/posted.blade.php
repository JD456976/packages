@component('mail::message')
Hi,
<br>
{{ $user->name }}

A video was just uploaded that matched the Zipcode you have set in your profile:

@component('mail::button', ['url' => $url])
Button Text
@endcomponent
<br>
<br>
Too many emails? Change your notification preferences in your profile:

@component('mail::button', ['url' => $profile, 'color' => 'error'])
    Your Profile
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
