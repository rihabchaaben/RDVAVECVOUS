@component('mail::message')
 
<p style="font-family:cursive">
    <p style="font-family:cursive">
    Vous venez de vous inscrire sur <b style="color: #2E3284">RDVavec</b><b style="color: #0F8598">VOUS.com</b>
    </p>
    <p style="font-family:cursive">
        Vous pourrez publier des demandes de rendez-vous sur le créneau qui vous intéresse.<br>
        Les artisans de votre secteur en seront informés et se positionneront s'ils sont disponibles.<br>
        Vos coordonnées sont protégés et communiqués uniquement aux prestataires choisis par vous-même.
    </p>
    <p style="font-family:cursive">
        Nous espérons améliorer la gestion de votre temps.<br>
        Pour publier votre première demande, vous devez d'abord finaliser votre profil:   
    </p>
</p>
{{--@component('mail::button', ['url' => route("login")])--}}
            {{--Cliquez ici!--}}
{{--@endcomponent--}}
@component('mail::button', ['url' => $url])
    CLIQUEZ ICI POUR FINALISER VOTRE PROFIL
@endcomponent

<span style="font-family:cursive"><ul>
    <li>
        Des rendez-vous au bon moment
    </li>
</ul> </span>
{{--{{ config('app.name') }}--}}
@endcomponent
{{-- 30/09/2020: Added coloring for website name and br tag to some lines with seperating text into multiple paragraphs - li tag for last sentence--}}
{{-- 16/10/2020 : added paragraph to hold every other paragraphs - styling issue --}}