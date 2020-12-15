@component('mail::message')
{{--# Introduction--}}
<img src="{{ asset('images/logo.jpg') }}">
<p>Vous venez de vous inscrire sur RDVavecVOUS.com.<br>
    Vous pourrez publier des demandes de rendez-vous sur le créneaux qui vous intéresse.<br>
    Les artisans de votre secteurs en seront informé et se positionneront si ils sont disponible.<br>
    Vos coordonnées sont protégés et communiqués uniquement aux prestataires choisis par vous-même.<br>
    Nous espérons améliorer la gestion de votre temps.</p>
<br><br>
<h3>Pour publier votre première demande, <a href="{{route('login')}}">cliquez ici!</a></h3>


<p><b>Des rendez-vous au bon moment</b></p>
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
