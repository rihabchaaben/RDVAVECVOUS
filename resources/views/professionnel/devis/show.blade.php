@extends('layouts.front.professionnel.master')
@section('content')
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{asset('assets/app/custom/wizard/wizard-v1.default.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/app/custom/fancybox/jquery.fancybox-1.3.4.css')}}" type="text/css" media="screen"/>
    <!--end::Page Custom Styles -->
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{asset('assets/app/custom/invoices/invoice-v1.default.css')}}" rel="stylesheet" type="text/css"/>

    <!--end::Page Custom Styles -->
    <div class="kt-content kt-grid__item kt-grid__item--fluid">
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">
                    Devis
                </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <div class="kt-subheader__group" id="kt_subheader_search">
            <span class="kt-subheader__desc" id="kt_subheader_total">
                                    Votre devis concernant la demande N° 1324
            </span>

                </div>

            </div>

        </div>
        <div class="row">
            <div class="kt-portlet col-md-9">
                <div class="kt-portlet__body kt-portlet__body--fit">
                    <div class="kt-grid  kt-wizard-v1 kt-wizard-v1--white" id="kt_wizard_v1"
                         data-ktwizard-state="step-first">
                        <div class="kt-grid__item">

                            <!--begin: Form Wizard Nav -->
                            <div class="kt-wizard-v1__nav">
                                <div class="kt-wizard-v1__nav-items">
                                    <a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step"
                                       data-ktwizard-state="current">
                                        <div class="kt-wizard-v1__nav-body">
                                            <div class="kt-wizard-v1__nav-icon">
                                                <i class="flaticon-bus-stop"></i>
                                            </div>
                                            <div class="kt-wizard-v1__nav-label">
                                                1) Rendez-vous détails
                                            </div>
                                        </div>
                                    </a>
                                    <a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step">
                                        <div class="kt-wizard-v1__nav-body">
                                            <div class="kt-wizard-v1__nav-icon">
                                                <i class="flaticon-list"></i>
                                            </div>
                                            <div class="kt-wizard-v1__nav-label">
                                                2) Envoyer un devis
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!--end: Form Wizard Nav -->
                        </div>

                        @section('devi')
                            @include('professionnel.etapes.devi')
                        @endsection

                    </div>
                </div>
            </div>
            <!--Begin::Portlet-->

            <div class="kt-portlet kt-portlet--height-fluid col-md-3">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Demande Timeline
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <!--Begin::Timeline 3 -->
                    <div class="kt-timeline-v2 timeline-dossier">
                        <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
                            <div class="kt-timeline-v2__item ">
                                <span class="kt-timeline-v2__item-time">RDV</span>
                                <div class="kt-timeline-v2__item-cricle">
                                    <i class="fa fa-genderless kt-font-danger"></i>
                                </div>
                                <div class="kt-timeline-v2__item-text  kt-padding-top-5" style="color: black">
                                    Rdv créé
                                </div>
                            </div>
                            <div class="kt-timeline-v2__item ">
                                <span class="kt-timeline-v2__item-time"></span>
                                <div class="kt-timeline-v2__item-cricle">
                                    <i class="fa fa-genderless kt-font-danger"></i>
                                </div>
                                <div class="kt-timeline-v2__item-text  kt-padding-top-5" style="color: black">
                                    {{-- Proposition envoyé --}}
                                    Proposition envoyée
                                </div>
                            </div>
                            <div class="kt-timeline-v2__item ">
                                <span class="kt-timeline-v2__item-time"></span>
                                <div class="kt-timeline-v2__item-cricle">
                                    <i class="fa fa-genderless kt-font-danger"></i>
                                </div>
                                <div class="kt-timeline-v2__item-text  kt-padding-top-5"
                                     @if($proposition->status == App\Proposition::ACCEPTE) style="color: black" @endif>
                                    Proposition acceptée
                                </div>
                            </div>
                            <div class="kt-timeline-v2__item">
                                <span class="kt-timeline-v2__item-time">Devis</span>
                                <div class="kt-timeline-v2__item-cricle">
                                    <i class="fa fa-genderless kt-font-brand"></i>
                                </div>
                                <div class="kt-timeline-v2__item-text kt-padding-top-5">
                                    Devis envoyé
                                </div>
                            </div>
                            <div class="kt-timeline-v2__item">
                                <span class="kt-timeline-v2__item-time"></span>
                                <div class="kt-timeline-v2__item-cricle">
                                    <i class="fa fa-genderless kt-font-brand"></i>
                                </div>
                                <div class="kt-timeline-v2__item-text kt-padding-top-5">
                                    Devis acceptée
                                </div>
                            </div>
                            <div class="kt-timeline-v2__item">
                                <span class="kt-timeline-v2__item-time">Billing</span>
                                <div class="kt-timeline-v2__item-cricle">
                                    <i class="fa fa-genderless kt-font-warning"></i>
                                </div>
                                <div class="kt-timeline-v2__item-text kt-padding-top-5">
                                    Facturation crée
                                </div>
                            </div>
                            <div class="kt-timeline-v2__item">
                                <span class="kt-timeline-v2__item-time"></span>
                                <div class="kt-timeline-v2__item-cricle">
                                    <i class="fa fa-genderless kt-font-warning"></i>
                                </div>
                                <div class="kt-timeline-v2__item-text kt-padding-top-5">
                                    Facturation acceptée
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::Timeline 3 -->
                </div>
            </div>
            <!--End::Portlet-->
        </div>
    </div>
@section('script')
    <!--begin::Page Scripts(used by this page) -->
    <script src="{{asset('assets/app/custom/wizard/wizard-v1.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/app/custom/fancybox/jquery.fancybox-1.3.4.pack.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/app/custom/fancybox/jquery.easing-1.3.pack.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/app/custom/fancybox/jquery.mousewheel-3.0.4.pack.js')}}"
            type="text/javascript"></script>

    <script>
        $(document).ready(function () {

            /* This is basic - uses default settings */

            $("a.grouped_elements").fancybox();

            /* Using custom settings */

            $("a#inline").fancybox({
                'hideOnContentClick': true
            });

            /* Apply fancybox to multiple items */

            $("a.group").fancybox({
                'transitionIn': 'elastic',
                'transitionOut': 'elastic',
                'speedIn': 600,
                'speedOut': 200,
                'overlayShow': false
            });

        });
    </script>


    <!--end::Page Scripts -->
@endsection
@endsection