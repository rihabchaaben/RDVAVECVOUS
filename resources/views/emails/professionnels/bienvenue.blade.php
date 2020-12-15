@component('mail::message')
    <p style="font-family:cursive">
        <p style="font-family:cursive">
            Vous venez de vous inscrire sur <b style="color: #2E3284">RDVavec</b><b style="color: #0F8598">VOUS.com</b> <br>
            Vous recevrez des demandes de rendez-vous et pourrez d’un clic y répondre si vous êtes disponible sur le créneau du client.<br>
            Vous ne paierez que les propositions de rendez-vous  validées par le client.<br>
        </p>
        <p style="font-family:cursive">
            Vous bénéficiez d’un tarif clair et précis :<br>
            Pas de rendez-vous = Pas de facturation<br>
        </p>
        <p style="font-family:cursive">
            Nous vous remercions d’avoir  adhéré à notre charte<br> 
            <b style="color:firebrick ">O ARNAQUE 0  LITIGE</b><br>
            qui garantit à nos demandeurs des prix en cohérences avec le marché, un  travail de qualité et un relationnel respectueux avec les usagers du site.<br>
        </p>
        <p style="font-family:cursive">
            Vous acceptez obligatoirement les points suivants :<br>
            Tout manquement  à un de ces points ci-après provoquera le blocage de votre compte d'accès à <b style="color: #2E3284">RDVavec</b><b style="color: #0F8598">VOUS.com</b><br>
        </p>    
        <ul style="font-family:cursive">
            <li style="font-family:cursive">Un respect rigoureux de l 'horaire accepté.</li>
            <li style="font-family:cursive">Être un professionnel  honnête dans le conseil de vos clients.</li>
            <li style="font-family:cursive">Être  juste dans l' établissement de vos prix.</li>
        </ul>
        <p style="font-family:cursive">Une hausse  supérieure à  20%  par rapport au prix du marché dans  votre secteur  ne sera pas tolérée, même si vous souhaitez à juste titre, facturer  votre expérience et votre sérieux.<br></p>
        <ul style="font-family:cursive">
            <li style="font-family:cursive">Répondre rapidement et de manière cordiale aux demandes  d'informations de vos clients.</li>
            <li style="font-family:cursive">Répondre rapidement à toute problématique post chantier, en assurer le service après vente et la garantie conformément à votre assurance professionnelle.</li>
        </ul>
        <p style="font-family:cursive">Un avis est recueilli à travers un questionnaire de satisfaction après chaque rendez-vous.<br>
        </p>    
    </p>
{{-- 30/09/2020: ADDED colors website name - separate paragraphs - add li tag for "tabulation" --}}
@component('mail::button', ['url' => $url])
    Cliquez ici et valider votre email
@endcomponent

{{-- <span style="font-family:unset">- Des rendez-vous au bon moment</span> --}}
    {{--{{ config('app.name') }}--}}
@endcomponent
{{-- 16/10/2020 : added paragraph to hold every other paragraphs - styling issue --}}

