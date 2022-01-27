@component('mail::message')
<br>
{{ $user->username }},
<br>
Your account has been unbanned.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
