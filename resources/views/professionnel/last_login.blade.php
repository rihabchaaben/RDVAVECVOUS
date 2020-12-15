<div class="modal fade" id="kt_modal_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Bienvenue VIP</h5>
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                {{--</button>--}}
            </div>
            <div class="modal-body">
                {{-- <p>Bienvenue sur votre espace RDVavecVOUS.com.<br> Vous avez répondu à l'invitation d'un membre souhaitant
                    travailler avec vous de manière plus fluide.<br>Vous recevrez toutes les demandes de votre catégorie.<br>
                    Les demandes avec mention VIP vous sont exclusivement adressées et ne vous seront pas facturées.
                </p> --}}
                <p style="font-size: 16px">Bienvenue sur votre espace RDVavecVOUS.com.<br> Vous avez répondu à l'invitation d'un membre souhaitant
                    travailler avec vous de manière plus fluide.<br>Vous recevrez toutes les demandes de votre catégorie.<br>
                    Les demandes avec mention <b style="color: rgb(255, 183, 0)">EXCLUSIVITE</b> vous sont exclusivement adressées et ne vous seront pas facturées.
                </p>
            </div>
            <div class="modal-footer">
                {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                <form action="{{route('pro.last_login_update')}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary">Fermer</button>
                </form>

            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#kt_modal_6').modal({backdrop: 'static', keyboard: false})

        $("#kt_modal_6").modal('show');
    });
</script>
