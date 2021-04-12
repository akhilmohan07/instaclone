@component('mail::message')

Welcome To Instaclone.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
Visit Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
