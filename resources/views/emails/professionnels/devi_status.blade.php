@component('mail::message')
    <p style="font-family:cursive">Félicitations !<br>
        <p style="font-family:cursive">
            Votre devis adressé à {{$devis->proposition->demande->demandeur->nom}} a été accepté!<br>
        </p>
        <p style="font-family:cursive">
            Nous vous invitons à contacter votre client pour définir les derniers éléments et débuter votre prestation.<br>
        </p> 
        <p style="font-family:cursive">
            Toute l’équipe de <b style="color: #2E3284">RDVavec</b><b style="color: #0F8598">VOUS.com</b> vous remercie  de votre confiance et espère vous proposer d’autres rendez-vous.<br>
        </p> 
        <p style="font-family:cursive">
            Un encouragement nous ferait plaisir.<br>
            Likez notre page facebook et laissez un commentaire.<br>
        </p>
    </p>
{{-- 30/09/2020: ADDED colors website name - separate paragraphs - some typos correcting --}}

    @component('mail::button', ['url' => "https://www.facebook.com/RDVaVOUS/?modal=admin_todo_tour"])
        FB Like
    @endcomponent

@endcomponent