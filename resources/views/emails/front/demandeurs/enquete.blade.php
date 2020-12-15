@component('mail::message')
    Nous espérons que votre rendez-vous avec le prestataire ……..s’est bien passé.<br>
    Pour garantir la qualité de nos partenaires, nous aimerions vous poser quelques questions.<br>

{{$url}}

@component('mail::button', ['url' => $url])
Commencer l'enquete
@endcomponent

Toute l’équipe de Rdvavecvous.com vous remercie  de votre confiance et espère vous proposer d’autres rendez-vous.<br>

Un encouragement nous ferait plaisir!<br>
Likez notre page Facebook et laissez un commentaire!

@component('mail::button', ['url' => "https://www.facebook.com/RDVaVOUS/?modal=admin_todo_tour"])
        FB Like
@endcomponent

@endcomponent
