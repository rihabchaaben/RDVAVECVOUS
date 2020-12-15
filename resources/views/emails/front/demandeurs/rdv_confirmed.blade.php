@component('mail::message')
<p style="font-family:cursive">
    <p style="font-family:cursive">
        {{$proposition->demande->demandeur->nom}}, vous avez accepté un rendez-vous avec le prestataire {{$proposition->professionnel->nom}}<br>
        <span style="background-color:#2594a5; border-radius:20px;font-family:cursive;color:white">
            Le {{$proposition->demande->events->first()->start_date->format('d-m-y')}}
            De {{$proposition->demande->events->first()->start_date->format('H:i')}} À {{$proposition->demande->events->first()->end_date->format('H:i')}}    
        </span><br>
    </p>
    <p style="font-family:cursive">
        Vous recevrez un rappel  2 jours avant le rendez-vous.<br>
    </p>
    <p style="font-family:cursive">
        Toute l’équipe de <b style="color: #2E3284">RDVavec</b><b style="color: #0F8598">VOUS.com</b> vous remercie  de votre confiance et espère vous proposer d’autres rendez-vous.<br>
    </p>
    <p style="font-family:cursive">
        Un encouragement nous ferait plaisir.<br>
        Likez notre page facebook et laissez un commentaire.<br>
    </p>
</p>
@component('mail::button', ['url' => "https://www.facebook.com/RDVaVOUS/?modal=admin_todo_tour"])
        FB Like
@endcomponent

@endcomponent
{{-- 30/09/2020: Added span for date, colors to website name and br tag to some lines with seperating text into multiple paragraphs --}}
{{-- 16/10/2020 : added paragraph to hold every other paragraphs - styling issue --}}
