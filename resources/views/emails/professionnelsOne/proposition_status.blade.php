<h1>Votre proposition a été @if($proposition->status == App\Proposition::ACCEPTE) ACCEPTE @else REFUSEE @endif</h1>

@if($proposition->status == App\Proposition::ACCEPTE)
    Felicitation votre proposition été acvcepté
@else
    Dommage prop refusé a bientot
@endif
