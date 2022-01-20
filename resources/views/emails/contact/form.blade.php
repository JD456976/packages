@component('mail::message')
Hi Admin,
<br>

You received a message from:
<br>
Name: {{ $name }}
<br>
Email: {{ $email }}
<br>
Message:
<br>
{{ $message }}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
