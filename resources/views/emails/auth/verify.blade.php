@component('mail::message')
    # Email Confirmation

   Пожалуйста подтвержите вашу почту кликнув по ссылке ниже.
    Уважаемый {{$user->name}}
    @component('mail::button', ['url' => route('register.verify', ['token' => $user->verify_token])])
        Подтвердить почту
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
