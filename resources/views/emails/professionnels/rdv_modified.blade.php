@component('mail::message')


Votre demandeur {{$data['demandeur']}} a déplacé le rendez-vous 
<br> Il est désormais prévu le  entre le {{$data['start_date']}}   et  {{$data['end_date']}}
@if(!empty($data['motif']))
 <br> Pour la raison suivante : "{{$data['motif']}}"
@endif
 <br>Nous esperons que cette modification horaire ne vous gène pas et vous invitons à vous contactez par méssagerie pour tout empêchement
 

@component('mail::button', ['url' =>'www.clients.rdvavecvous.com/mes-demandes/accepte'])
Plus de details
@endcomponent

<a href="RDVavecVOUS.com"><b style="color: #2E3284">RDVavec</b><b style="color: #0F8598">VOUS.com</b></a> vous remercie de votre confiance.
@endcomponent
{{-- 16/10/2020 : added 'clients' to url 'http://www.rdvavecvous.com/mes-demandes' --}}