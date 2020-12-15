@foreach($propositions as $notif)
    @if(isset($notif->notifiable->professionnel->debiteur))
    <script>
        swal.fire({
            title: 'SEPA PAIMENT AUTOMATIQUE',
            "type": "success",
            html:
                ' <div class="alert alert-success" role="alert">\n' +
                '                            <div class="alert-text">\n' +
                '                                <h4 class="alert-heading">Félicitation!</h4>\n' +
                '                                <p>Votre proposition a été acceptée!<br> Vous recevrez un rappel quelques jours avant la date du rendez-vous! Votre facture sera disponible dans votre espace facture.<br>' +
                '                                 80% de nos utilisateurs signent le devis de l\'artisan rencontré sur RDVavecVous.com\n' +
                '                                    .</p>\n' +
                '                                <hr>\n' +
                '                                <p class="mb-0"> Nom : {{$notif->notifiable->demande->demandeur->nom}} </p>\n' +
                '                                <p class="mb-0"> Email : {{$notif->notifiable->demande->demandeur->user->email}} </p>\n' +
                '                                <p class="mb-0"> Télephone : {{$notif->notifiable->demande->demandeur->telephone}} </p>\n' +
                '                                <p class="mb-0"> Code postale :  {{$notif->notifiable->demande->demandeur->cp}} </p>\n' +
                '                                <p class="mb-0"> Ville :  {{$notif->notifiable->demande->demandeur->ville->name}} </p>\n' +
                '                                <p class="mb-0"> Adresse :  {{$notif->notifiable->demande->demandeur->adresse}} </p>\n' +


                '                            </div>\n' +


                '                        </div>'
                @if(!isset($notif->notifiable->professionnel->debiteur->iban))
                +' <div class="alert alert-info" role="alert">\n' +
                '                            <div class="alert-text">\n' +
                'Vous recevrez d\'ici 48h votre  formulaire SEPA  à signer électroniquement via notre partenaire YOUSIGN, organisme certifié par l\' Agence Nationale de la Sécurité des Systèmes d\'Information pour la protection de vos données.' +
                '                            </div>\n'  @endif+
                '                        </div>'+
                ' <form method="post"\n' +
                '                              action="{{route('notification.sepa_update',['id'=>$notif->id])}}">\n' +
                '                            @csrf\n' +
                '                            <button type="submit" class="btn btn-primary"><i class="fa fa-thumbs-up"></i> OK</button>\n' +
                '                        </form>',






            showCloseButton:
                true,
            showCancelButton:
                false,
            showConfirmButton:
                false,
            focusConfirm:
                true,
            confirmButtonAriaLabel:
                'Thumbs up, great!',
            allowOutsideClick: false

        })
    </script>
@else
        <div class="modal fade" id="kt_modal_12" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        {{-- <h5 class="modal-title" id="exampleModalLongTitle">Proposition Acceptee</h5> --}}
                        <h5 class="modal-title" id="exampleModalLongTitle">Proposition Acceptée</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="kt-demo__preview">
                            <div class="alert alert-success" role="alert">
                                    {{-- 02/10/2020 : added style tag --}}
                                <div class="alert-text"  style="font-size: 16px"> 
                                    <h4 class="alert-heading">Félicitation!</h4>
                                    <p>Votre proposition de rdv a été acceptée, le demandeur veut vous rencontrer.</p>
                                    <hr>
                                    <p class="mb-0"> Pour connaitre ses coordonnées, remplissez le formulaire de
                                        paiment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <form method="post"
                              action="{{route('notification.update',['id'=>$notif->id])}}">
                            @csrf
                            <button type="submit" class="btn btn-primary">Payer ma facture</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $("#kt_modal_12").modal('show');
            });
        </script>
    @endif
@endforeach
