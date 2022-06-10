@component('mail::message')
Hello Pitsi,

Welcome to the new file store App.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
