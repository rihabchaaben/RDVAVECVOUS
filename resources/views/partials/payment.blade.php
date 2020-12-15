@extends('layouts.app')
@section('content')

@section('script')
    <script>
        swal.fire({
            title: '',
            "type": "success",
            html:
                ' <div class="alert alert-success" role="alert">\n' +
                '                            <div class="alert-text">\n' +
                '                                <h4 class="alert-heading">Félicitation!</h4>\n' +
                '                                <p>Votre proposition a été acceptée!<br> Vous recevrez un rappel quelques jours avant la date du rendez-vous! Votre facture sera disponible dans votre espace facture.<br>' +
                '80% de nos utilisateurs signent le devis de l\'artisan rencontré sur RDVavecVous.com\n' +
                '                                    .</p>\n' +
                '                                <hr>\n' +
                '                                <p class="mb-0"> Nom : {{$data['nom']}} </p>\n' +
                '                                <p class="mb-0"> Email : {{$data['mail']}} </p>\n' +
                '                                <p class="mb-0"> Télephone : {{$data['tel']}} </p>\n' +
                '                                <p class="mb-0"> Adresse :  {{$data['adr']}} </p>\n' +
                '                            </div>\n' +
                '                        </div>' +
                ' <div class="alert alert-info" role="alert">\n' +
                '                            <div class="alert-text">\n' +
                'Vous recevrez d\'ici 48h votre  formulaire SEPA  à signer électroniquement via notre partenaire YOUSIGN, organisme certifié par l\' Agence Nationale de la Sécurité des Systèmes d\'Information pour la protection de vos données.' +
                '                            </div>\n' +
                '                        </div>',

            showCloseButton:
                false,
            showCancelButton:
                false,
            focusConfirm:
                true,
            confirmButtonText:
                '<a href="{{route("pro.index")}}" style="color:white"><i class="fa fa-thumbs-up"></i> OK </a>',
            confirmButtonAriaLabel:
                'Thumbs up, great!',
            allowOutsideClick: false

        })
    </script>
@endsection
