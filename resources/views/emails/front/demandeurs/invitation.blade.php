@component('mail::message')
    <p style="font-family:cursive">Bonjour!<br>

    Mr @if($data['demandeur']->agence) {{$data['demandeur']->agence->nom_contact}} @else {{$data['demandeur']->nom}} @endif de la société @if($data['demandeur']->agence){{$data['demandeur']->agence->nom_societe}}
        @else {{$data['demandeur']->nom}} @endif souhaite vous inviter en VIP sur le site RDVavecVOUS.com.<br>
    Vous pourrez recevoir des demandes de prestations sur un agenda en ligne partagé et envoyer vos devis.<br>

    RDVavecVOUS.com  met en relation  des demandeurs qui manquent de temps avec des professionnels qui en ont.<br>
    Ils sélectionnent une date qui leur convient et vous pouvez proposer un rendez(vous si vous ou un membre de votre équipe êtes disponible.<br>

    RDVavecVOUS.com est la seule plateforme claire sur ses tarifs!<br>
    Vous ne payez QUE pour les rendez-vous que  VOUS avez  finalisés.<br>
    Etant membre VIP, vous aurez accès aux demandes de votre secteur et décuplerez vos opportunités.<br>

    Les demandes émises par votre hôte  Mr @if($data['demandeur']->agence) {{$data['demandeur']->agence->nom_contact}} @else {{$data['demandeur']->nom}} @endif ne vous seront jamais facturées. Mr @if($data['demandeur']->agence) {{$data['demandeur']->agence->nom_contact}} @else {{$data['demandeur']->nom}} @endif pourra travailler avec vous de manière plus fluide.<br>

    Pour mieux comprendre le fonctionnement de notre outil, visionnez notre tutoriel et contactez nos équipes pour plus d’informations.<br>

@component('mail::button', ['url' => ' https://youtu.be/8trCMfH6O3k'])
            Tutoriel
@endcomponent
<br>
<p style="font-family:cursive"> Cliquez sur ce lien pour vous inscrire gratuitement et recevoir des demandes de rendez-vous de vos futurs clients.</p>

@component('mail::button', ['url' => $data['url']])
    Inscrire gratuitement
@endcomponent


@endcomponent
