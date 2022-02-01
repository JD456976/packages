@component('mail::message')
Hello Admin,


A report was received:

Item: {{ $item }}

Reason: {{ $report->reason }}

Comment: {{ $report->comment }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
