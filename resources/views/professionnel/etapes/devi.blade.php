@extends('layouts.front.professionnel.master')
@section('content')
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{asset('assets/app/custom/wizard/wizard-v2.default.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/app/custom/fancybox/jquery.fancybox-1.3.4.css')}}" type="text/css" media="screen"/>
    <!--end::Page Custom Styles -->
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{asset('assets/app/custom/invoices/invoice-v2.default.css')}}" rel="stylesheet" type="text/css"/>

    <!--end::Page Custom Styles -->

    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">
                    Devis
                </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <div class="kt-subheader__group" id="kt_subheader_search">
            <span class="kt-subheader__desc" id="kt_subheader_total">
                                    Etape envoie du votre devi
            </span>

                </div>

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
                                                RDV Détaille
                                            </div>
                                            <div class="kt-wizard-v2__nav-label-desc">
                                                Setup Your Account Details
                                            </div>
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
                                                Payment du RDV
                                            </div>
                                            <div class="kt-wizard-v2__nav-label-desc">
                                                Use Cette formulaire
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>

                        <!--end: Form Wizard Nav -->
                    </div>
                    <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v2__wrapper">

                        <!--begin: Form Wizard Form-->
                        <form action="{{route('pro.mes_devis_store')}}" method="post" class="kt-form" id="kt_form">

                            <input type="hidden" value="{{Auth::user()->professionnel->id}}" name="professionnel_id">
                            <input type="hidden" value="{{$proposition->id}}" name="proposition_id">

                        @csrf

                        <!--begin: Form Wizard Step 1-->
                            <div class="kt-wizard-v2__content" data-ktwizard-type="step-content"
                                 data-ktwizard-state="current">
                                <div class="kt-heading kt-heading--md">Détaille du rendezvous

                                    @foreach($proposition->demande->events as $event)
                                        <div style="font-size:18px;color:red;float:right">
                                            <i class="flaticon-calendar-with-a-clock-time-tools"
                                            ></i> <b>{{$event->start_date}}
                                                À {{substr($event->end_date,10)}} </b>
                                        </div>
                                    @endforeach
                                    {{----}}
                                    {{--<div style="color:#2c77f4;float:right;font-size: 18px">--}}
                                    {{--<i class="flaticon2-time"></i>--}}
                                    {{--{{$proposition->events->first()->start_date}}--}}
                                    {{--</div>--}}
                                </div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v2__review">
                                        <div class="kt-wizard-v2__review-item">
                                            <div class="kt-wizard-v2__review-title">
                                                Horaire du RDV
                                            </div>
                                            <div class="kt-wizard-v2__review-content">
                                                @foreach($proposition->demande->events as $event)
                                                    <i class="flaticon2-time"
                                                       style="font-size:16px;color:#2c77f4"></i>
                                                    <span style="font-size:15px">{{ $event->start_date->formatLocalized('%d %B %Y')}}
                                                        De {{substr($event->start_date,10)}}
                                                        À {{substr($event->end_date,10)}} </span>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="kt-wizard-v2__review-item col-md-6">
                                                <div class="kt-wizard-v2__review-title">
                                                    Titre de la proposition
                                                </div>
                                                <div class="kt-wizard-v2__review-content">
                                                    {{$proposition->demande->nom}}
                                                </div>
                                            </div>
                                            <div class="kt-wizard-v2__review-item col-md-6">
                                                <div class="kt-wizard-v2__review-title">
                                                    Description
                                                </div>
                                                <div class="kt-wizard-v2__review-content">
                                                    {{$proposition->demande->description}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="kt-wizard-v2__review-item col-md-6">
                                                <div class="kt-wizard-v2__review-title">
                                                    Catégorie
                                                </div>
                                                <div class="kt-wizard-v2__review-content">
                                                    {{$proposition->demande->categorie->label}}
                                                </div>
                                            </div>
                                            <div class="kt-wizard-v2__review-item col-md-6">
                                                <div class="kt-wizard-v2__review-title">
                                                    Type du demande
                                                </div>
                                                <div class="kt-wizard-v2__review-content">
                                                    @if($proposition->demande->type_devis == App\Demande::TYPE_DEVIS)
                                                        Devis
                                                    @else
                                                        Intervention
                                                    @endif
                                                    <br>
                                                    {{$proposition->demande->type_commentaire}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="kt-wizard-v2__review-item col-md-6">
                                                <div class="kt-wizard-v2__review-title">
                                                    Adresse
                                                </div>
                                                <div class="kt-wizard-v2__review-content" style="filter: blur(2px);"
                                                     data-skin="brand" data-toggle="kt-tooltip"
                                                     data-placement="top" title=""
                                                     data-original-title="Contenu flouter">
                                                    {{$proposition->demande->adresse}}<br/>
                                                    {{$proposition->demande->cp}}<br/>
                                                    {{$proposition->demande->ville->nom}}
                                                </div>
                                            </div>
                                            <div class="kt-wizard-v2__review-item col-md-6">
                                                <div class="kt-wizard-v2__review-title">
                                                    Téléphone
                                                </div>
                                                <div class="kt-wizard-v2__review-content" style="filter: blur(2px);"
                                                     data-skin="brand" data-toggle="kt-tooltip"
                                                     data-placement="top" title=""
                                                     data-original-title="Contenu flouter">
                                                    {{$proposition->demande->demandeur->telephone}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-wizard-v2__review-item">
                                            <div class="kt-wizard-v2__review-title">
                                                Image
                                            </div>
                                            <div class="kt-wizard-v2__review-content">
                                                <a class="grouped_elements" rel="example_group" id="single_image"
                                                   title="Custom title"
                                                   href="{{$proposition->demande->fichier}}">
                                                    <img src="{{$proposition->demande->fichier}}">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end: Form Wizard Step 1-->


                            <!--begin: Form Wizard Step 5-->
                            <div class="kt-wizard-v2__content" data-ktwizard-type="step-content">
                                <div class="kt-heading kt-heading--md">Enter votre Devis Details</div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v2__form">
                                        <div class="form-group">
                                            <label>Désignation Details</label>
                                            <textarea type="text" class="form-control" name="designation"
                                                      placeholder="Ecrire la désignation"></textarea>
                                            <span class="form-text text-muted">Please enter your Désignation Details.</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Unité</label>
                                            <input type="text" class="form-control" name="unite"
                                                   placeholder="L'unité M2 CM ...">
                                            <span class="form-text text-muted">Please enter your Unité Weight in KG.</span>
                                        </div>

                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label>Quantite</label>
                                                    <input type="number" class="form-control" name="quantite"
                                                           placeholder="Quantite">
                                                    <span class="form-text text-muted">Please enter your Quantite.</span>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label>Prix unitaire</label>
                                                    <input type="text" class="form-control" name="prix_unitaire"
                                                           placeholder="Le prix unitaire 20 ..">
                                                    <span class="form-text text-muted">Please enter your Prix unitaire.</span>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label>Totale en Euro</label>
                                                    <input type="text" class="form-control" name="montant"
                                                           placeholder="Package Length">
                                                    <span class="form-text text-muted">Please enter your Total en euro.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end: Form Wizard Step 5-->

                            <!--begin: Form Actions -->
                            <div class="kt-form__actions">
                                <div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                     data-ktwizard-type="action-prev">
                                    Précédent
                                </div>
                                <div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                     data-ktwizard-type="action-submit">
                                    Payer RDV
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

@section('script')
    <!--begin::Page Scripts(used by this page) -->
    <script src="{{asset('assets/app/custom/wizard/wizard-v2.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/app/custom/fancybox/jquery.fancybox-1.3.4.pack.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/app/custom/fancybox/jquery.easing-1.3.pack.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/app/custom/fancybox/jquery.mousewheel-3.0.4.pack.js')}}"
            type="text/javascript"></script>
@endsection
@endsection