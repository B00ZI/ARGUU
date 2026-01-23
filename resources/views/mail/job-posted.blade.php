<x-mail::message>
# Introduction

{{ $job->title }}

The body of your message.

<x-mail::button :url="url('/jobs/' . $job->id)">
View Job
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
