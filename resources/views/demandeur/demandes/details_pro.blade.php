<div class="modal fade" id="kt_modal_9{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{$proposition->professionnel->nom}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="kt-demo__preview">


                    <div class="kt-portlet">

                        <div class="kt-form kt-form--label-right ">
                            <div class="kt-portlet__body">
                                <div class="kt-widget__media kt-hidden- text-center">
                                    @if($proposition->professionnel->avatar)

                                        <img class="kt-hidden-"
                                             src="{{asset('storage/'.$proposition->professionnel->avatar)}}"
                                             alt="image" style="height:120px;width:150px;">
                                    @else
                                        <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder">{{ucfirst($proposition->professionnel->nom[0])}}</span>
                                    @endif
                                </div>
                                <br>
                                <div class="form-group form-group-xs row">
                                    <label class="col-4 col-form-label">Nom de la société:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext kt-font-bolder">{{$proposition->professionnel->nom_societe}}</span>
                                    </div>
                                </div>

                                <div class="form-group form-group-xs row">
                                    <label class="col-4 col-form-label">Description:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext kt-font-bolder">{{$proposition->professionnel->description}}</span>
                                    </div>
                                </div>
                                <div class="form-group form-group-xs row">
                                    {{-- <label class="col-4 col-form-label">Specialité:</label> --}}
                                    <label class="col-4 col-form-label">Spécialité:</label>
                                    <div class="col-8">
                                        @foreach($proposition->professionnel->categories as $cat)
                                            <span class="form-control-plaintext kt-font-bolder">{{$cat->label}}</span>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group form-group-xs row">
                                    <label class="col-4 col-form-label">Siret:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext kt-font-bolder">{{$proposition->professionnel->siret}}</span>
                                    </div>
                                </div>

                                <div class="form-group form-group-xs row">
                                    {{-- <label class="col-4 col-form-label">Website:</label> --}}
                                    <label class="col-4 col-form-label">Site Web:</label>
                                    <div class="col-8">
                            <span class="form-control-plaintext kt-font-bolder">
                                    <a href="#">{{$proposition->professionnel->site}}</a>
                                </span>
                                    </div>
                                </div>
                            </div>
                            {{--<div class="kt-portlet__foot text-center">--}}
                                {{--<div class="kt-form__actions kt-space-between">--}}
                                    {{--<a href="{{route('demandeur.proposition_status_update',['id'=>$proposition->id,'status'=> App\Proposition::ACCEPTE])}}" class="btn btn-label-brand btn-sm btn-bold">Accepter</a>--}}

                                    {{--<a href="{{route('demandeur.proposition_status_update',['id'=>$proposition->id,'status'=> App\Proposition::REFUSE])}}" class="btn btn-label-brand btn-sm btn-bold">Refuser</a>--}}

                                    {{--<a href="{{route('demandeur.chat.show',$proposition)}}" class="btn btn-label-brand btn-sm btn-bold">Chatter</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
