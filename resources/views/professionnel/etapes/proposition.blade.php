@extends('layouts.front.professionnel.master')
@section('content')
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{asset('assets/app/custom/wizard/wizard-v2.default.css')}}" rel="stylesheet" type="text/css"/>

    <!--end::Page Custom Styles -->
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{asset('assets/app/custom/invoices/invoice-v2.default.css')}}" rel="stylesheet" type="text/css"/>

    <!--end::Page Custom Styles -->

    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-subheader__main">



                {{--<span class="kt-subheader__separator kt-subheader__separator--v"></span>--}}

                {{--<div class="kt-subheader__group" id="kt_subheader_search">--}}
                {{--<span class="kt-subheader__desc" id="kt_subheader_total">--}}
                {{--Etape de lenvoie de votre proposition--}}
                {{--</span>--}}

                {{--</div>--}}

            </div>

        </div>
        <div class="alert alert-info fade show" role="alert">
            <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
            <div class="alert-text" style="font-size: 16px">92% de nos demandeurs acceptent le rendez-vous de la premiere proposition. Répondez rapidement pour avoir toutes vos chances!</div>
                                    {{-- 02/10/2020 : added style tag --}}
            <div class="alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="la la-close"></i></span>
                </button>
            </div>
        </div>
        <div class="kt-portlet">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="kt-grid  kt-wizard-v2 kt-wizard-v2--white" id="kt_wizard_v2" data-ktwizard-state="first">
                    <div class="kt-grid__item kt-wizard-v2__aside">

                        <!--begin: Form Wizard Nav -->
                        <div class="kt-wizard-v2__nav">
                            <div class="kt-wizard-v2__nav-items">
                                <a class="kt-wizard-v2__nav-item" href="#" data-ktwizard-type="step"
                                   data-ktwizard-state="current">
                                    <div class="kt-wizard-v2__nav-body">
                                        <div class="kt-wizard-v2__nav-icon">
                                            <i class="flaticon-globe"></i>
                                        </div>
                                        <div class="kt-wizard-v2__nav-label">
                                            <div class="kt-wizard-v2__nav-label-title">
                                                Détails du rendez-vous
                                            </div>
                                            {{--<div class="kt-wizard-v2__nav-label-desc">--}}
                                            {{--Setup Your Account Details--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                </a>
                                <a class="kt-wizard-v2__nav-item" href="#" data-ktwizard-type="step"
                                   data-ktwizard-state="pending">
                                    <div class="kt-wizard-v2__nav-body">
                                        <div class="kt-wizard-v2__nav-icon">
                                            <i class="flaticon-truck"></i>
                                        </div>
                                        <div class="kt-wizard-v2__nav-label">
                                            <div class="kt-wizard-v2__nav-label-title">
                                                Faire une proposition
                                            </div>
                                            {{--<div class="kt-wizard-v2__nav-label-desc">--}}
                                            {{--Use Credit or Debit Cards--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--end: Form Wizard Nav -->
                    </div>
                    <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v2__wrapper">

                        <!--begin: Form Wizard Form-->
                        <form action="{{route('pro.mes_demandes_proposition_store')}}" method="post" class="kt-form"
                              id="kt_form">

                            <input type="hidden" value="{{Auth::user()->professionnel->id}}" name="professionnel_id">
                            <input type="hidden" value="{{$proposition->id}}" name="demande_id">
                            <input type="hidden" value="{{$proposition->demandeur->user->id}}" name="demandeur_id">

                        @csrf

                        <!--begin: Form Wizard Step 1-->
                            <div class="kt-wizard-v2__content" data-ktwizard-type="step-content"
                                 data-ktwizard-state="current">
                                {{-- <div class="kt-heading kt-heading--md">
                                    
                                    <div style="color:#2c77f4;float:right;font-size: 18px">
                                    <i class="flaticon2-time"></i>
                                    {{$proposition->events->first()->start_date}}
                                    </div>
                                </div> --}}
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v2__review">
                                        <div class="kt-wizard-v2__review-item">
                                            {{-- <div class="kt-wizard-v2__review-title">
                                                Horaire du RDV
                                            </div> --}}
                                            <div class="kt-wizard-v2__review-content">
                                                @foreach($proposition->events as $event)
                                        <div style="font-size:16px;color:red;">
                                            <i class="flaticon-calendar-with-a-clock-time-tools"
                                            ></i> <b>

                                                {{ucfirst(\Carbon\Carbon::parse($event->start_date)->formatLocalized('%A %d %B %Y'))}}
                                                De {{$event->start_date->format('H:i')}}
                                                - À {{$event->end_date->format('H:i')}} </b><br>
                                        </div>
                                    @endforeach 
                                                {{-- @foreach($proposition->events as $event)
                                                    <i class="flaticon2-time"
                                                       style="font-size:16px;color:#2c77f4"></i>
                                                    <span style="font-size:15px">
                                                         {{ucfirst(\Carbon\Carbon::parse($event->start_date)->formatLocalized('%A %d %B %Y'))}}

                                                        De {{$event->start_date->format('H:i')}}
                                                        -
                                                        {{ucfirst(\Carbon\Carbon::parse($event->end_date)->formatLocalized('%A %d %B %Y'))}}
                                                        À {{$event->end_date->format('H:i')}} </span><br>
                                                @endforeach --}}
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="kt-wizard-v2__review-item col-md-6">
                                                <div class="kt-wizard-v2__review-title">
                                                    Titre de la proposition
                                                </div>
                                                <div class="kt-wizard-v2__review-content">
                                                    {{$proposition->nom}}
                                                </div>
                                            </div>
                                            <div class="kt-wizard-v2__review-item col-md-6">
                                                <div class="kt-wizard-v2__review-title">
                                                    Description
                                                </div>
                                                <div class="kt-wizard-v2__review-content">
                                                    {{$proposition->description}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="kt-wizard-v2__review-item col-md-6">
                                                <div class="kt-wizard-v2__review-title">
                                                    Catégorie
                                                </div>
                                                <div class="kt-wizard-v2__review-content">
                                                    {{$proposition->categorie->label}}
                                                </div>
                                            </div>
                                            <div class="kt-wizard-v2__review-item col-md-6">
                                                <div class="kt-wizard-v2__review-title">
                                                    Type de demande
                                                </div>
                                                <div class="kt-wizard-v2__review-content">
                                                    @if($proposition->type_devis == App\Demande::TYPE_DEVIS)
                                                        Devis
                                                    @else
                                                        Intervention
                                                    @endif
                                                    <br>
                                                    souhaité le {{$proposition->type_commentaire}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="kt-wizard-v2__review-item col-md-6">
                                                <div class="kt-wizard-v2__review-title">
                                                    Nom
                                                </div>
                                                <div class="kt-wizard-v2__review-content" title="les données sont protégées"<?= $isvip > 0 ? '' : 'style="filter: blur(3px);"' ?> >

                                                @if($isvip==1)
                                                {{$proposition->demandeur->nom}}
                                                 @else
                                                    Payer pour voir

                                                    @endif
                                                </div>
                                            </div>

                                            <div class="kt-wizard-v2__review-item col-md-6">
                                                <div class="kt-wizard-v2__review-title">
                                                    Adresse
                                                </div>
                                                <div class="kt-wizard-v2__review-content" title="les données sont protégées" <?= $isvip > 0 ? '' : 'style="filter: blur(3px);"' ?>>
                                                @if($isvip==1)
                                                  {{$proposition->adresse}}<br/>
                                                    {{$proposition->cp}}<br/>
                                                    {{$proposition->ville->nom}}
                                                @else
                                                    Payer pour voir
                                                @endif


                                                </div>
                                            </div>
                                            <div class="kt-wizard-v2__review-item col-md-6">
                                                <div class="kt-wizard-v2__review-title">
                                                    Téléphone
                                                </div>
                                                <div class="kt-wizard-v2__review-content" title="les données sont protégées" <?= $isvip > 0 ? '' : 'style="filter: blur(3px);"' ?>>
                                                @if($isvip==1){{$proposition->demandeur->telephone}}
                                                @else
                                                    Payer pour voir
                                                @endif
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        @if($proposition->demandeFiles->isNotEmpty()  )
                                            <div class="kt-wizard-v2__review-item">
                                                <div class="kt-wizard-v2__review-title">
                                                    Pieces Jointes
                                                </div>
                                                <div class="kt-wizard-v2__review-content">
                                                    @foreach($proposition->demandeFiles as $key=>$img)


                                                             <a href="{{route('pro.download',$img->id )}})">
                                                                <img src="https://iwebp.de/images/imgingest-86484203375697119894134aa58fb3aa799.png"

                                                                style="height: 30px; cursor: pointer, width=30px ,font-size:bold"> Fichier  {{ $key+1 }}. {{ explode(".",$img->url)[1] }}</a>
                                                                <br>
                                                    @endforeach

                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!--end: Form Wizard Step 1-->


                            <!--begin: Form Wizard Step 5-->
                            <div class="kt-wizard-v2__content" data-ktwizard-type="step-content">
                                <div class="kt-heading kt-heading--md">Donnez des indications sur votre heure exacte d'arrivée, votre savoir
                                    faire, vos tarifs...</div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v2__form">
                                        <div class="form-group">

                                            <textarea type="text" class="form-control"
                                                      name="message"
                                                      rows="7" required></textarea>
                                                    <br>
                                                    <label>
                                                    Code promo

                                                    </label>
                                                      <input type="text" class="form-control"
                                                      name="coupon"
                                                       />
                                         </div>
                                    </div>
                                </div>
                            </div>





                            <!--end: Form Wizard Step 5-->

                            <!--begin: Form Actions -->
                            <div class="kt-form__actions">
                                <div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                     data-ktwizard-type="action-prev">
                                    Précedent
                                </div>

                                @if($isvip==1)
                                <div class="btn btn-danger btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                     data-ktwizard-type="action-prev">
                                     <a href="{{route('pro.demande_refuser',$proposition->id)}}" style="text-decoration: none; color:white"> Refuser</a>

                                </div>
                                @endif

                                <div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                     data-ktwizard-type="action-submit" onclick()="this.disabled=true">
                                    Envoyer ma proposition
                                </div>
                                <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                     data-ktwizard-type="action-next">
                                    Suivant
                                </div>
                            </div>

                            <!--end: Form Actions -->
                        </form>

                        <!--end: Form Wizard Form-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')




    <!--begin::Page Scripts(used by this page) -->
    <script src="{{asset('assets/app/custom/wizard/proposition-wizard.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/app/custom/gallerybox/jquery.popupimg.js')}}" type="text/javascript"></script>


    <script>
        $(document).ready(function () {
            $('.popupimg').popupimg({
                'show': 600,
                'hide': 300
            });
        });

    </script>




@stop
