@component('mail::message')
    <p style="font-family:cursive">
        <p style="font-family:cursive">Bonne nouvelle!<br>
        </p>
        <p style="font-family:cursive">
            {{$proposition->demande->demandeur->nom}}, vous avez reçu une proposition de rendez-vous pour votre demande {{$proposition->demande->events->first()->titre}}:<br>
            <span style="background-color:#2594a5; border-radius:20px;font-family:cursive;color:white">
                Le {{\Carbon\Carbon::parse($proposition->demande->events->first()->start_date)->formatLocalized('%A %d %B %Y')}}
            De {{$proposition->demande->events->first()->start_date->format('H:i')}} À {{$proposition->demande->events->first()->end_date->format('H:i')}}
            </span><br>
        </p>
        <p style="font-family:cursive">
            Consultez cette offre et acceptez le rendez-vous s’il vous convient.<br>
        </p>
        <p style="font-family:cursive">
            Pour votre sécurité, vos coordonnées sont protégées et ne seront divulguées au prestataire uniquement si vous acceptez la proposition.<br>
        </p>
        <p style="font-family:cursive">
            <b style="color: #2E3284">RDVavec</b><b style="color: #0F8598">VOUS.com</b> vous remercie de votre confiance.
        </p>
    </p>
@endcomponent
{{-- 30/09/2020: Added span for date, colors to website name and br tag to some lines with seperating text into multiple paragraphs --}}
{{-- 16/10/2020 : added paragraph to hold every other paragraphs - styling issue --}}
