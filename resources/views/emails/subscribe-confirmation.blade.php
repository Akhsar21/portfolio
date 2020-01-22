@component('mail::message')
# Subscribe Confirmation

The body of your message.

@component('mail::button', ['url' => ''])
Confirm email
@endcomponent

<a href="{{ route('subscriber.update', ['email' => $subscriber->email, 'token' => $subscriber->token]) }}">Confirm email</a>

Thanks,<br>
{{ config('app.name') }}
@endcomponent