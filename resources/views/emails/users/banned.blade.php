@component('mail::message')
<br>
{{ $user->name }},
<br>
Your account has been banned for inappropriate behavior. If you think this is an error, contact us directly.

@component('mail::button', ['url' => '/contact'])
Contact Us
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
