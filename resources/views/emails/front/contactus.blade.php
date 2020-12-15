@component('mail::message')
    <p style="font-family:cursive">J e suis Mr ou M {{$data['name']}}<br>
        Mon adresse mail est , {{$data['email']}}<br>
        Mon object est , {{$data['object']}}<br>
        Mon Message est , {{$data['message']}} </p>

@endcomponent