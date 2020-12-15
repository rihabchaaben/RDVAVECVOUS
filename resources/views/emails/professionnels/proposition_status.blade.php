@component('mail::message')
    <p style="font-family:cursive">
    Félicitations!{{$proposition->professionnel->nom}}, votre proposition de rendez vous pour le {{\Carbon\Carbon::parse($proposition->demande->events->first()->start_date)->formatLocalized('%A %d %B %Y')}}
        De {{$proposition->demande->events->first()->start_date->format('H:i')}} À {{$proposition->demande->events->first()->end_date->format('H:i')}}
    concernant {{$proposition->demande->events->first()->titre}} a été accepté.
    Vous pouvez connaître l’identité de votre futur client et chatter avec lui en cliquant pour accéder à votre espace.
    </p>

@component('mail::button', ['url' =>  'http://clients.rdvavecvous.com/login'])
        Accédez à votre espace
@endcomponent
{{-- 16/10/2020 : changed url from route('login') to 'http://clients.rdvavecvous.com/login' --}}
@endcomponent