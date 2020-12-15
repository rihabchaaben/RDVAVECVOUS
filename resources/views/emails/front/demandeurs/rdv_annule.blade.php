@component('mail::message')
    <p style="font-family:cursive">Mauvaise nouvelle.<br>
        {{$proposition->demande->demandeur->nom}} votre rendez-vous avec {{$proposition->professionnel->nom}}
        le {{$proposition->demande->events->first()->start_date->format('d-m-y')}}
        De {{$proposition->demande->events->first()->start_date->format('H:i')}} À {{$proposition->demande->events->first()->end_date->format('H:i')}}
        a été annulé par le prestataire.<br>
        Consultez votre messagerie pour connaître les raisons de l’annulation et publier une nouvelle demande<br>
        @component('mail::button', ['url' => route('demandeur.mes_demandes_create')])
            Nouvelle demande
        @endcomponent
        Toute l’équipe de RDVavecVOUS.com vous remercie de votre confiance
    </p>

@endcomponent