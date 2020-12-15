@component('mail::message')
<p style="font-family:cursive">Rendez-vous confirmé!<br>
        <p style="font-family:cursive">
                Vous avez un rendez vous le:<br>
                <span style="background-color:#2594a5; border-radius:20px;font-family:cursive;color:white">
                        {{$proposition->demande->events->first()->start_date->format('d-m-y')}}
                De {{$proposition->demande->events->first()->start_date->format('H:i')}} À {{$proposition->demande->events->first()->end_date->format('H:i')}}
                </span><br>
                Pour {{$proposition->demande->events->first()->titre}}.<br>      
        </p>
        <p style="font-family:cursive">
        Vous pouvez indiquer au demandeur tout changement via le chat privé ou en le contactant téléphoniquement.<br></p>
        <p style="font-family:cursive">
        Toute l’équipe de <b style="color: #2E3284">RDVavec</b><b style="color: #0F8598">VOUS.com</b> vous remercie  de votre confiance et espère vous proposer d’autres rendez-vous.</p>
        <p style="font-family:cursive">
        Un encouragement nous ferait plaisir.<br>
        Likez notre page facebook et laissez un commentaire.</p>
</p>
{{-- 30/09/2020: ADDED colors website name - separate paragraphs - add colored background to date --}}

@component('mail::button', ['url' => "https://www.facebook.com/RDVaVOUS/?modal=admin_todo_tour"])
        FB Like
@endcomponent

@endcomponent

