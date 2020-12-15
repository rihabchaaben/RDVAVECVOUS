@component('mail::message')
    <p style="font-family:cursive">
    Mauvaise nouvelle!<br>
    Le rdv prévu <span style="background-color:#2594a5; border-radius:20px;font-family:cursive;color:white">le {{$proposition->demande->events->first()->start_date->format('d-m-y')}}
        De {{$proposition->demande->events->first()->start_date->format('H:i')}} À {{$proposition->demande->events->first()->end_date->format('H:i')}} par {{$proposition->demande->demandeur->nom}}</span>
    pour {{$proposition->demande->events->first()->titre}} a été annulé.<br>
    Nous espérons que vous trouverez d’autres rendez-vous dans les meilleurs délais.<br>
    Aucun prélèvement n’aura donc lieu et vous  ne serez pas facturé pour ce rendez-vous.<br>
    Toute l’équipe de <b style="color: #2E3284">RDVavec</b><b style="color: #0F8598">VOUS.com</b> vous remercie de votre confiance et vous souhaite une agréable journée.
    </p>
{{-- 30/09/2020: Added span for date, colors to website name and br tag to some lines --}}
@endcomponent