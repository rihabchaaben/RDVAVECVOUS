@component('mail::message')
    <p style="font-family:cursive">
        Un message important de la part de votre client vous attend dans votre messagerie.
        Cliquez ici pour le consulter
    </p>

@component('mail::button', ['url' => route('pro.chat.show',[$proposition,'#last_chat'])])
        Consulter
@endcomponent

@endcomponent