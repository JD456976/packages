@component('mail::message')
<br>
{{ $user->name }},
<br>
Your account has been unbanned.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
