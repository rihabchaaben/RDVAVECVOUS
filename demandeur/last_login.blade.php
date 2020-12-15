<div class="modal fade" id="kt_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Notification</h5>
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                {{--</button>--}}
            </div>
            <div class="modal-body">
                <p> Votre invité est desormais sur MA LISTE, vous pourrez le sélectionner en exclusivité.
                </p>
            </div>
            <div class="modal-footer">
                {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                <form action="{{route('notification.vip_update')}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-secondary" >Fermer</button>
                </form>

            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#kt_modal_5').modal({backdrop: 'static', keyboard: false})

        $("#kt_modal_5").modal('show');
    });
</script>
