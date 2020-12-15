@component('mail::message')
<p style="font-family:cursive">

    <p style="font-family:cursive">Bonne nouvelle!<br></p>
    <p style="font-family:cursive">
        {{$proposition->demande->demandeur->nom}} vous venez de recevoir un devis du prestataire {{$proposition->professionnel->nom}}.<br>
        Pour en prendre connaissance, veuillez cliquer sur ce lien:<br>
    </p>
</p>
@component('mail::button', ['url' => "www.clients.rdvavecvous.com/login"])
        Cliquer Ici
@endcomponent
<p style="font-family:cursive">
    <p style="font-family:cursive">
        Toute l’équipe de <b style="color: #2E3284">RDVavec</b><b style="color: #0F8598">VOUS.com</b> vous remercie de votre confiance et espère vous proposer d’autres rendez-vous.<br>
    </p>
    <p style="font-family:cursive">
        Un encouragement nous ferait plaisir.<br>
        Likez notre page Facebook et laissez un commentaire.<br>
    </p>
</p>

{{-- 30/09/2020 : Added coloring - separate paragraphs - add button component for website link --}}

@component('mail::button', ['url' => "https://www.facebook.com/RDVaVOUS/?modal=admin_todo_tour"])
        FB Like
@endcomponent

@endcomponent
{{-- 16/10/2020 : added paragraphs to hold every other paragraphs - styling issue --}}
