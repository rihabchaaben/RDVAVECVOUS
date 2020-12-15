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
                    Facture
                </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                {{--<div class="kt-subheader__group" id="kt_subheader_search">--}}
                {{--<span class="kt-subheader__desc" id="kt_subheader_total">--}}
                {{--Etape de lenvoi du votre facture--}}
                {{--</span>--}}

                {{--</div>--}}

            </div>

        </div>
        <div class="kt-portlet">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="kt-grid  kt-wizard-v2 kt-wizard-v2--white" id="kt_wizard_v2" data-ktwizard-state="first">
                    <div class="kt-grid__item kt-wizard-v2__aside">

                        <!--begin: Form Wizard Nav -->
                        <div class="kt-wizard-v2__nav">
                            <div class="kt-wizard-v2__nav-items">
                                {{--<a class="kt-wizard-v2__nav-item" href="#" data-ktwizard-type="step"--}}
                                   {{--data-ktwizard-state="current">--}}
                                    {{--<div class="kt-wizard-v2__nav-body">--}}
                                        {{--<div class="kt-wizard-v2__nav-icon">--}}
                                            {{--<i class="flaticon-globe"></i>--}}
                                        {{--</div>--}}
                                        {{--<div class="kt-wizard-v2__nav-label">--}}
                                            {{--<div class="kt-wizard-v2__nav-label-title">--}}
                                                {{--RDV Détaille--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                                <a class="kt-wizard-v2__nav-item" href="#" data-ktwizard-type="step"
                                   data-ktwizard-state="pending">
                                    <div class="kt-wizard-v2__nav-body">
                                        <div class="kt-wizard-v2__nav-icon">
                                            <i class="flaticon-truck"></i>
                                        </div>
                                        <div class="kt-wizard-v2__nav-label">
                                            <div class="kt-wizard-v2__nav-label-title">
                                                Payer la Facture
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
                        <form action="{{route('pro.facture_store')}}" method="post" class="kt-form" id="kt_form">

                            <input type="hidden" value="{{Auth::user()->professionnel->id}}" name="professionnel_id">
                            <input type="hidden" value="{{$proposition->id}}" name="proposition_id">
                            <input type="hidden" value="{{$proposition->demande->demandeur->id}}" name="demandeur_id">

                        @csrf

                        <!--begin: Form Wizard Step 1-->

                            {{--<div class="kt-wizard-v2__content" data-ktwizard-type="step-content">--}}
                                {{--<div class="kt-heading kt-heading--md">Détaille du rendezvous--}}

                                    {{--@foreach($proposition->demande->events as $event)--}}
                                        {{--<div style="font-size:18px;color:red;float:right">--}}
                                            {{--<i class="flaticon-calendar-with-a-clock-time-tools"--}}
                                            {{--></i> <b>{{$event->start_date}}--}}
                                                {{--À {{substr($event->end_date,10)}} </b>--}}
                                        {{--</div>--}}
                                    {{--@endforeach--}}
                                {{--</div>--}}
                                {{--<div class="kt-form__section kt-form__section--first">--}}
                                    {{--<div class="kt-wizard-v2__review">--}}
                                        {{--<div class="kt-wizard-v2__review-item">--}}
                                            {{--<div class="kt-wizard-v2__review-title">--}}
                                                {{--Horaire du RDV--}}
                                            {{--</div>--}}
                                            {{--<div class="kt-wizard-v2__review-content">--}}
                                                {{--@foreach($proposition->demande->events as $event)--}}
                                                    {{--<i class="flaticon2-time"--}}
                                                       {{--style="font-size:16px;color:#2c77f4"></i>--}}
                                                    {{--<span style="font-size:15px">{{ $event->start_date->formatLocalized('%d %B %Y')}}--}}
                                                        {{--De {{substr($event->start_date,10)}}--}}
                                                        {{--À {{substr($event->end_date,10)}} </span>--}}
                                                {{--@endforeach--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="kt-wizard-v2__review-item col-md-6">--}}
                                                {{--<div class="kt-wizard-v2__review-title">--}}
                                                    {{--Titre de la proposition--}}
                                                {{--</div>--}}
                                                {{--<div class="kt-wizard-v2__review-content">--}}
                                                    {{--{{$proposition->demande->nom}}--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="kt-wizard-v2__review-item col-md-6">--}}
                                                {{--<div class="kt-wizard-v2__review-title">--}}
                                                    {{--Description--}}
                                                {{--</div>--}}
                                                {{--<div class="kt-wizard-v2__review-content">--}}
                                                    {{--{{$proposition->demande->description}}--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="kt-wizard-v2__review-item col-md-6">--}}
                                                {{--<div class="kt-wizard-v2__review-title">--}}
                                                    {{--Catégorie--}}
                                                {{--</div>--}}
                                                {{--<div class="kt-wizard-v2__review-content">--}}
                                                    {{--{{$proposition->demande->categorie->label}}--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="kt-wizard-v2__review-item col-md-6">--}}
                                                {{--<div class="kt-wizard-v2__review-title">--}}
                                                    {{--Type du demande--}}
                                                {{--</div>--}}
                                                {{--<div class="kt-wizard-v2__review-content">--}}
                                                    {{--@if($proposition->demande->type_devis == App\Demande::TYPE_DEVIS)--}}
                                                        {{--Devis--}}
                                                    {{--@else--}}
                                                        {{--Intervention--}}
                                                    {{--@endif--}}
                                                    {{--<br>--}}
                                                    {{--{{$proposition->demande->type_commentaire}}--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="kt-wizard-v2__review-item col-md-6">--}}
                                                {{--<div class="kt-wizard-v2__review-title">--}}
                                                    {{--Adresse--}}
                                                {{--</div>--}}
                                                {{--<div class="kt-wizard-v2__review-content" style="filter: blur(2px);"--}}
                                                     {{--data-skin="brand" data-toggle="kt-tooltip"--}}
                                                     {{--data-placement="top" title=""--}}
                                                     {{--data-original-title="Contenu flouter">--}}
                                                    {{--{{$proposition->demande->adresse}}<br/>--}}
                                                    {{--{{$proposition->demande->cp}}<br/>--}}
                                                    {{--{{$proposition->demande->ville->nom}}--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="kt-wizard-v2__review-item col-md-6">--}}
                                                {{--<div class="kt-wizard-v2__review-title">--}}
                                                    {{--Téléphone--}}
                                                {{--</div>--}}
                                                {{--<div class="kt-wizard-v2__review-content" style="filter: blur(2px);"--}}
                                                     {{--data-skin="brand" data-toggle="kt-tooltip"--}}
                                                     {{--data-placement="top" title=""--}}
                                                     {{--data-original-title="Contenu flouter">--}}
                                                    {{--{{$proposition->demande->demandeur->telephone}}--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="kt-wizard-v2__review-item">--}}
                                            {{--<div class="kt-wizard-v2__review-title">--}}
                                                {{--Image--}}
                                            {{--</div>--}}
                                            {{--<div class="kt-wizard-v2__review-content">--}}
                                                {{--<a class="grouped_elements" rel="example_group" id="single_image"--}}
                                                   {{--title="Custom title"--}}
                                                   {{--href="{{$proposition->demande->fichier}}">--}}
                                                    {{--<img src="{{$proposition->demande->fichier}}">--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <!--end: Form Wizard Step 1-->


                            <!--begin: Form Wizard Step 5-->
                            <div class="kt-wizard-v2__content" data-ktwizard-type="step-content">

                                <div class="alert alert-info fade show" role="alert">
                                    <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                                    <div class="alert-text"  style="font-size: 16px">
                                    {{-- 02/10/2020 : added style tag --}}
                                        <p>Pourquoi un paiment par prélévement?</p>
                                        <p>- Beaucoup plus sûre qu'une carte bancaire.</p>
                                        <p>- Vos données sont protégés contre l'usurpation et le vol.</p>
                                        <p>- En fin de mois, vous ne payez QUE les rendez-vous acceptés.</p>
                                    </div>
                                    <div class="alert-close">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="la la-close"></i></span>
                                        </button>
                                    </div>
                                </div>

                                <div class="kt-heading kt-heading--md">Vous avez un code promo ?</div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v2__form">
                                        {{--<div class="form-group">--}}
                                        {{--<label class="kt-checkbox kt-checkbox--solid kt-checkbox--success">--}}
                                        {{--<input type="checkbox" id="promo-switch"> Code Promo--}}
                                        {{--<span></span>--}}
                                        {{--</label>--}}
                                        {{--</div>--}}
                                        <div class="form-group" id="promo">
                                            <label>Votre code promo</label>
                                            <input type="text" class="form-control" name="code_promo"
                                                   placeholder="Entre votre code promo" required>
                                        </div>

                                        <a href="{{route('pro.sepa_create',$proposition->id)}}" class="sepa">
                                            <button type="button" class="btn btn-bold btn-label-brand btn-sm">Paiement
                                                Formulaire SEPA
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!--end: Form Wizard Step 5-->

                            <!--begin: Form Actions -->
                            <div class="kt-form__actions">
                                {{--<div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"--}}
                                     {{--data-ktwizard-type="action-prev">--}}
                                    {{--Précédent--}}
                                {{--</div>--}}
                                <div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                     data-ktwizard-type="action-submit">
                                    Payer le RDV
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
    <script>

        window.MY_PROJECT = {
            sepa_route: "{{route('pro.sepa_create',$proposition->id)}}";
        };

    </script>
    <!--begin::Page Scripts(used by this page) -->
    <script src="{{asset('assets/app/custom/wizard/facture-wizard.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/app/custom/fancybox/jquery.fancybox-1.3.4.pack.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/app/custom/fancybox/jquery.easing-1.3.pack.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/app/custom/fancybox/jquery.mousewheel-3.0.4.pack.js')}}"
            type="text/javascript"></script>

    <script>
        $('#promo-switch').change(function () {
            if (this.checked == true) {
                $("#promo").fadeIn();
                $("#fact").hide();
            }
            else {
                $("#promo").hide();
                $("#fact").fadeIn();
            }
        })
    </script>
@endsection
@endsection