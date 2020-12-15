@extends('layouts.front.guest.master')
@section('content')
    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet"
          type="text/css"/>

    <!--end::Page Vendors Styles -->
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{asset('assets/app/custom/wizard/wizard-v3.default.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/app/custom/fancybox/jquery.fancybox-1.3.4.css')}}" type="text/css" media="screen"/>
    <!--end::Page Custom Styles -->
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{asset('assets/app/custom/invoices/invoice-v1.default.css')}}" rel="stylesheet" type="text/css"/>

    {{--<link href="{{asset('/assets/vendors/general/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css"/>--}}

    <!--end::Page Custom Styles -->
    <div class="kt-content kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="kt-portlet">
                <div class="kt-portlet__body kt-portlet__body--fit">
                    <div class="kt-grid kt-wizard-v3 kt-wizard-v3--white" id="kt_wizard_v3" data-ktwizard-state="first">
                        <div class="kt-grid__item">
                            <!--begin: Form Wizard Nav -->
                            <div class="kt-wizard-v3__nav">
                                <!--doc: Remove "kt-wizard-v3__nav-items--clickable" class and also set 'clickableSteps: false' in the JS init to disable manually clicking step titles -->
                                <div class="kt-wizard-v3__nav-items kt-wizard-v3__nav-items--clickable">
                                    <div class="kt-wizard-v3__nav-item" data-ktwizard-type="step"
                                         data-ktwizard-state="current">
                                        <div class="kt-wizard-v3__nav-body">
                                            <div class="kt-wizard-v3__nav-label">
                                                <span>1</span> Premiére Question
                                            </div>
                                            <div class="kt-wizard-v3__nav-bar"></div>
                                        </div>
                                    </div>
                                    <div class="kt-wizard-v3__nav-item" data-ktwizard-type="step"
                                         data-ktwizard-state="pending">
                                        <div class="kt-wizard-v3__nav-body">
                                            <div class="kt-wizard-v3__nav-label">
                                                <span>2</span> Deuxieme Question
                                            </div>
                                            <div class="kt-wizard-v3__nav-bar"></div>
                                        </div>
                                    </div>
                                    <div class="kt-wizard-v3__nav-item" data-ktwizard-type="step"
                                         data-ktwizard-state="pending">
                                        <div class="kt-wizard-v3__nav-body">
                                            <div class="kt-wizard-v3__nav-label">
                                                <span>3</span> Troixiéme Question
                                            </div>
                                            <div class="kt-wizard-v3__nav-bar"></div>
                                        </div>
                                    </div>
                                    <div class="kt-wizard-v3__nav-item" data-ktwizard-type="step"
                                         data-ktwizard-state="pending">
                                        <div class="kt-wizard-v3__nav-body">
                                            <div class="kt-wizard-v3__nav-label">
                                                <span>4</span> Quatriéme Question
                                            </div>
                                            <div class="kt-wizard-v3__nav-bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Form Wizard Nav -->
                        </div>
                        <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v3__wrapper">
                            <!--begin: Form Wizard Form-->
                            <form class="kt-form" id="kt_form" novalidate="novalidate" method="post"
                                  action="{{route('demandeur.questionnaire.save')}}">
                                @csrf
                                <input type="hidden" name="proposition" value="{{request()->proposition}}">
                                @foreach($questionnaires as $questionnaire)
                                    @foreach($questionnaire->questions as $key=>$question)
                                    <!--begin: Form Wizard Step 1-->
                                        <div class="kt-wizard-v3__content" data-ktwizard-type="step-content"
                                             data-ktwizard-state="current">
                                            <div class="kt-heading kt-heading--md">
                                                @if($question->type == 1) Qualité d'écoute
                                                @elseif($question->type == 2) Vos interrogations
                                                @elseif($question->type == 3) Aimeriez-vous travailler avec cet artisan
                                                @else Votre avis sur RendezVousAvecVous
                                                @endif

                                            </div>
                                            <div class="kt-form__section kt-form__section--first">
                                                <div class="kt-wizard-v3__form">
                                                    <div class="form-group">
                                                        <label>{{$question->text}}</label>
                                                        @foreach($question->options as $op)
                                                            <div class="kt-radio-inline">
                                                                <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                                    <input type="radio"
                                                                           name="answer{{$key+1}}" value="{{$op->id}}">
                                                                    {{$op->text}}
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                                <div class="kt-form__actions">
                                    <button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                            data-ktwizard-type="action-prev">
                                        Précédent
                                    </button>
                                    <button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                            data-ktwizard-type="action-submit">
                                        Submit
                                    </button>
                                    <button class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                            data-ktwizard-type="action-next">
                                        Suivant
                                    </button>
                                </div>
                                <!--end: Form Actions -->
                            </form>

                            <!--end: Form Wizard Form-->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@section('script')

    <!--begin::Page Scripts(used by this page) -->
    <script src="{{asset('/assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js')}}"
            type="text/javascript"></script>
    <!--end::Page Scripts -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="{{asset('/assets/app/custom/general/crud/forms/widgets/select2.js')}}" type="text/javascript"></script>
    <!--end::Page Scripts -->

    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#5d78ff",
                    "dark": "#282a3c",
                    "light": "#ffffff",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                    "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                }
            }
        };
    </script>

    <!-- end::Global Config -->
    <!--begin::Page Scripts(used by this page) -->
    <script src="{{asset('assets/app/custom/general/dashboard.js')}}" type="text/javascript"></script>

    <!--end::Page Scripts -->
    <!--begin::Page Scripts(used by this page) -->
    <script src="{{asset('assets/app/custom/wizard/wizard-v3.js')}}" type="text/javascript"></script>


@endsection

{{--<form method="post" action="{{route('demandeur.questionnaire.save')}}">--}}
{{--<input type="hidden" name="proposition" value="{{request()->proposition}}">--}}
{{--@csrf--}}
{{--<div class="row">--}}
{{--<div class="form-group">--}}
{{--@foreach($questionnaires as $questionnaire)--}}
{{--@foreach($questionnaire->questions as $key=>$question)--}}
{{--{{$question->text}}<br>--}}
{{--@foreach($question->options as $op)--}}
{{--<input type="radio" class="form-control" value="{{$op->id}}"--}}
{{--name="answer{{$key+1}}">{{$op->text}}--}}
{{--@endforeach--}}
{{--<br>--}}
{{--@endforeach--}}
{{--@endforeach--}}
{{--</div>--}}
{{--</div>--}}
{{--<br>--}}
{{--<input type="reset" value="reset">--}}
{{--<input type="submit" value="sauvegarder lenquete">--}}
{{--</form>--}}
