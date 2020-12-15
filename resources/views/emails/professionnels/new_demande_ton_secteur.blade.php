@component('mail::message')
    <p style="font-family:cursive">Bonne nouvelle<br>
    Vous avez reçu une nouvelle demande de rendez-vous dans votre catégorie.<br>
    Nous espérons que vous ou un membre de votre équipe sera disponible.<br>
    Pour consulter les détails de la demande, accédez à votre espace en cliquant</p>

@component('mail::button', ['url' => 'http://clients.rdvavecvous.com/mes-demandes'])
Accédez à votre espace
@endcomponent
{{-- 12/10/2020 : changing url from route("pro.mes_demandes") to route('login') --}}
{{-- 16/10/2020 : changed url to 'http://clients.rdvavecvous.com/mes-demandes' --}}
<p>
    <p style="text-decoration: line-through;text-decoration-color: red;">24.99 €</p> 
    19€ pour le 1er professionnel qui  propose un rendez-vous!
</p>
@endcomponent
