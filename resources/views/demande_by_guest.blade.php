@extends('layouts.front.guest.master')
@section('content')
    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet"
          type="text/css"/>

    <!--end::Page Vendors Styles -->
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{asset('assets/app/custom/wizard/wizard-v1.default.css')}}" rel="stylesheet" type="text/css"/>
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
                                                1) Sélectionner la date
                                            </div>
                                        </div>
                                    </a>
                                    <a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step">
                                        <div class="kt-wizard-v1__nav-body">
                                            <div class="kt-wizard-v1__nav-icon">
                                                <i class="flaticon-globe"></i>
                                            </div>
                                            <div class="kt-wizard-v1__nav-label">
                                                2) Sélectionner l'activité
                                            </div>
                                        </div>
                                    </a>
                                    <a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step">
                                        <div class="kt-wizard-v1__nav-body">
                                            <div class="kt-wizard-v1__nav-icon">
                                                <i class="flaticon-list"></i>
                                            </div>
                                            <div class="kt-wizard-v1__nav-label">
                                                3) Créer votre compte
                                            </div>
                                        </div>
                                    </a>
                                    <a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step">
                                        <div class="kt-wizard-v1__nav-body">
                                            <div class="kt-wizard-v1__nav-icon">
                                                <i class="flaticon-line-graph"></i>
                                            </div>
                                            <div class="kt-wizard-v1__nav-label">
                                                3) Entrer les images
                                            </div>
                                        </div>
                                    </a>
                                    <a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="">
                                        <div class="kt-wizard-v1__nav-body">
                                            <div class="kt-wizard-v1__nav-icon">
                                                <i class="flaticon-responsive"></i>
                                            </div>
                                            <div class="kt-wizard-v1__nav-label">
                                                4) Valider la demande
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!--end: Form Wizard Nav -->
                        </div>


                        <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v1__wrapper">

                            <!--begin: Form Wizard Form-->
                            {{--<form action="{{route('pro.mes_devis_store')}}" method="post" class="kt-form" id="kt_form">--}}
                            <form action="{{route('guest.store')}}" method="post"
                                  class="kt-form"
                                  id="kt_form" enctype="multipart/form-data">

                                <div class="calendar-event">

                                </div>
                            @csrf
                            <!--begin: Form Wizard Step 1-->
                                <div class="kt-wizard-v1__content" data-ktwizard-type="step-content"
                                     data-ktwizard-state="current">
                                    <div class="kt-heading kt-heading--md">Sélectionner le calendrier</div>
                                    <div class="kt-form__section kt-form__section--first">
                                        <!-- begin:: Content -->
                                        <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <!--begin::Portlet-->
                                                    <div class="kt-portlet" id="kt_portlet">
                                                        <div class="kt-portlet__head">
                                                            <div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon">
													<i class="flaticon-calendar-2"></i>
												</span>
                                                                <h3 class="kt-portlet__head-title">
                                                                    Background Events
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="kt-portlet__body">
                                                            <div id="kt_calendar" name="calend"></div>
                                                        </div>
                                                    </div>

                                                    <!--end::Portlet-->
                                                </div>
                                            </div>
                                        </div>

                                        <!-- end:: Content -->
                                    </div>
                                </div>

                                <!--end: Form Wizard Step 1-->

                                <!--begin: Form Wizard Step 2-->

                                <div class="kt-wizard-v1__content" data-ktwizard-type="step-content"
                                     data-ktwizard-state="current">
                                    <div class="kt-heading kt-heading--md">Entrer le détail de l'activité</div>
                                    <div class="kt-form__section kt-form__section--first">
                                        <div class="kt-wizard-v1__form">
                                            <div class="form-group">
                                                <label>Titre de demande</label>
                                                <input type="text" class="form-control"
                                                       name="titre"
                                                       placeholder="Ecrire le titre du demande">
                                                <span class="form-text text-muted">Please enter your titre concernant votre proposition.</span>
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea type="text" class="form-control"
                                                          name="description"
                                                          placeholder="Ecrire la description" rows="6"></textarea>
                                                <span class="form-text text-muted">Please enter your Message concernant votre proposition.</span>
                                            </div>
                                            <div class="form-group">
                                                <label>Catégorie</label>
                                                <select class="form-control" name="categorie_id">
                                                    @foreach($categories as $categorie)
                                                        <option value="{{$categorie->id}}">{{$categorie->label}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="form-text text-muted">Please enter your Message concernant votre proposition.</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!--begin: Form Wizard Step 2-->

                                <div class="kt-wizard-v1__content" data-ktwizard-type="step-content"
                                     data-ktwizard-state="current">
                                    <div class="kt-heading kt-heading--md">Entrer le detaille de compte</div>
                                    <div class="kt-form__section kt-form__section--first">
                                        <div class="kt-wizard-v1__form">
                                            <div class="kt-section kt-section--first">
                                                <h3 class="kt-section__title">1. Customer Info:</h3>
                                                <div class="kt-section__body">
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-form-label">Full Name:</label>
                                                        <div class="col-lg-6">
                                                            <input type="text" class="form-control" name="name"
                                                                   placeholder="Enter full name">
                                                            <span class="form-text text-muted">Please enter your full name</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-form-label">Ville:</label>
                                                        <div class="col-lg-6">
                                                            <select class="form-control" id="exampleSelect1"
                                                                    name="ville_id">
                                                                @foreach($villes as $ville)
                                                                    <option value="{{$ville->id}}">{{$ville->nom}}</option>
                                                                @endforeach
                                                            </select>
                                                            <span class="form-text text-muted">Please enter your full name</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-form-label">Adresse:</label>
                                                        <div class="col-lg-6">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter full name"
                                                                   name="adresse">
                                                            <span class="form-text text-muted">Please enter your full name</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-form-label">Code Postal:</label>
                                                        <div class="col-lg-6">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter full name" name="cp">
                                                            <span class="form-text text-muted">Please enter your full name</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Contact
                                                            Phone</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span
                                                                            class="input-group-text"><i
                                                                                class="la la-phone"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control"
                                                                       value="+35278953712"
                                                                       placeholder="Phone"
                                                                       aria-describedby="basic-addon1" name="telephone">
                                                            </div>
                                                            <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>

                                                <h3 class="kt-section__title">2. Customer Account:</h3>
                                                <div class="kt-section__body">
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Email
                                                            Address</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span
                                                                            class="input-group-text"><i
                                                                                class="la la-at"></i></span></div>
                                                                <input type="text" class="form-control"
                                                                       placeholder="Email"
                                                                       aria-describedby="basic-addon1" name="email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-form-label">Password:</label>
                                                        <div class="col-lg-6">
                                                            <input type="password" class="form-control"
                                                                   placeholder="Enter email"
                                                                   name="password">
                                                            <span class="form-text text-muted">We'll never share your email with anyone else</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-form-label">Confirm Password:</label>
                                                        <div class="col-lg-6">
                                                            <input type="password" class="form-control"
                                                                   placeholder="Enter email">
                                                            <span class="form-text text-muted">We'll never share your email with anyone else</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--begin: Form Wizard Step 3-->

                                <div class="kt-wizard-v1__content" data-ktwizard-type="step-content"
                                     data-ktwizard-state="current">
                                    <div class="kt-heading kt-heading--md">Entrer les images du chantier</div>
                                    <div class="kt-form__section kt-form__section--first">
                                        <div class="kt-wizard-v1__form">
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Photo 1</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_1">
                                                        <div class="kt-avatar__holder"
                                                             style="background-image: url('../images/drill.png')"></div>
                                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip"
                                                               title="" data-original-title="Change image">
                                                            <i class="fa fa-pen"></i>
                                                            <input type="file" name="demande_file[]"
                                                            >
                                                        </label>
                                                        <span class="kt-avatar__cancel" data-toggle="kt-tooltip"
                                                              title="" data-original-title="Cancel avatar">
                            <i class="fa fa-times"></i>
                        </span>
                                                    </div>
                                                    <span class="form-text text-muted">Allowed file types:  png, jpg, jpeg.</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Photo 2</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_1">
                                                        <div class="kt-avatar__holder"
                                                             style="background-image: url('../images/drill.png')"></div>
                                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip"
                                                               title="" data-original-title="Change image">
                                                            <i class="fa fa-pen"></i>
                                                            <input type="file" name="demande_file[]"
                                                            >
                                                        </label>
                                                        <span class="kt-avatar__cancel" data-toggle="kt-tooltip"
                                                              title="" data-original-title="Cancel avatar">
                            <i class="fa fa-times"></i>
                        </span>
                                                    </div>
                                                    <span class="form-text text-muted">Allowed file types:  png, jpg, jpeg.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--begin: Form Actions -->
                                <div class="kt-form__actions">
                                    <div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                         data-ktwizard-type="action-prev">
                                        Previous
                                    </div>
                                    <div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                         data-ktwizard-type="action-submit">
                                        Submit
                                    </div>
                                    <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                         data-ktwizard-type="action-next">
                                        Next Step
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
    <script src="{{asset('assets/app/custom/wizard/wizard-v1.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/app/custom/fancybox/jquery.fancybox-1.3.4.pack.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/app/custom/fancybox/jquery.easing-1.3.pack.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/app/custom/fancybox/jquery.mousewheel-3.0.4.pack.js')}}"
            type="text/javascript"></script>
    {{--<!--begin::Page Scripts(used by this page) -->--}}
    {{--<script src="{{asset('/assets/vendors/general/dropzone/dist/dropzone.js')}}" type="text/javascript"></script>--}}
    {{--<!--end::Page Scripts -->--}}

    <!--end::Page Scripts -->

    <script>
        $(document).ready(function () {


            $("#adresse_check").click(function () {
                $(".section-hide").fadeIn();
            });
            $("#adresse_mine").click(function () {
                $(".section-hide").hide();
            });

            $("#demande_normal").click(function () {
                $(".section-demande-hide").hide();
            });
            $("#demande_vip").click(function () {
                $(".section-demande-hide").fadeIn();
            });

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
    <script>
        var KTBootstrapSelect = function () {

            // Private functions
            var demos = function () {
                // minimum setup
                $('.kt-selectpicker').selectpicker();
            }

            return {
                // public functions
                init: function () {
                    demos();
                }
            };
        }();

        jQuery(document).ready(function () {
            KTBootstrapSelect.init();
        });
    </script>
    <script>
        // Class definition
        var KTSelect2 = function () {
            // Private functions
            var demos = function () {
                // basic
                $('#kt_select2_1, #kt_select2_1_validate').select2({
                    placeholder: "Select a state"
                });

                // nested
                $('#kt_select2_2, #kt_select2_2_validate').select2({
                    placeholder: "Select a state"
                });

                // multi select
                $('#kt_select2_3, #kt_select2_3_validate').select2({
                    placeholder: "Select a state",
                });

                // basic
                $('#kt_select2_4').select2({
                    placeholder: "Select a state",
                    allowClear: true
                });

                // loading data from array
                var data = [{
                    id: 0,
                    text: 'Enhancement'
                }, {
                    id: 1,
                    text: 'Bug'
                }, {
                    id: 2,
                    text: 'Duplicate'
                }, {
                    id: 3,
                    text: 'Invalid'
                }, {
                    id: 4,
                    text: 'Wontfix'
                }];

                $('#kt_select2_5').select2({
                    placeholder: "Select a value",
                    data: data
                });

                // loading remote data

                function formatRepo(repo) {
                    if (repo.loading) return repo.text;
                    var markup = "<div class='select2-result-repository clearfix'>" +
                        "<div class='select2-result-repository__meta'>" +
                        "<div class='select2-result-repository__title'>" + repo.full_name + "</div>";
                    if (repo.description) {
                        markup += "<div class='select2-result-repository__description'>" + repo.description + "</div>";
                    }
                    markup += "<div class='select2-result-repository__statistics'>" +
                        "<div class='select2-result-repository__forks'><i class='fa fa-flash'></i> " + repo.forks_count + " Forks</div>" +
                        "<div class='select2-result-repository__stargazers'><i class='fa fa-star'></i> " + repo.stargazers_count + " Stars</div>" +
                        "<div class='select2-result-repository__watchers'><i class='fa fa-eye'></i> " + repo.watchers_count + " Watchers</div>" +
                        "</div>" +
                        "</div></div>";
                    return markup;
                }

                function formatRepoSelection(repo) {
                    return repo.full_name || repo.text;
                }

                $("#kt_select2_6").select2({
                    placeholder: "Search for git repositories",
                    allowClear: true,
                    ajax: {
                        url: "https://api.github.com/search/repositories",
                        dataType: 'json',
                        delay: 250,
                        data: function (params) {
                            return {
                                q: params.term, // search term
                                page: params.page
                            };
                        },
                        processResults: function (data, params) {
                            // parse the results into the format expected by Select2
                            // since we are using custom formatting functions we do not need to
                            // alter the remote JSON data, except to indicate that infinite
                            // scrolling can be used
                            params.page = params.page || 1;

                            return {
                                results: data.items,
                                pagination: {
                                    more: (params.page * 30) < data.total_count
                                }
                            };
                        },
                        cache: true
                    },
                    escapeMarkup: function (markup) {
                        return markup;
                    }, // let our custom formatter work
                    minimumInputLength: 1,
                    templateResult: formatRepo, // omitted for brevity, see the source of this page
                    templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
                });

                // custom styles

                // tagging support
                $('#kt_select2_12_1, #kt_select2_12_2, #kt_select2_12_3, #kt_select2_12_4').select2({
                    placeholder: "Select an option",
                });

                // disabled mode
                $('#kt_select2_7').select2({
                    placeholder: "Select an option"
                });

                // disabled results
                $('#kt_select2_8').select2({
                    placeholder: "Select an option"
                });

                // limiting the number of selections
                $('#kt_select2_9').select2({
                    placeholder: "Select an option",
                    maximumSelectionLength: 2
                });

                // hiding the search box
                $('#kt_select2_10').select2({
                    placeholder: "Select an option",
                    minimumResultsForSearch: Infinity
                });

                // tagging support
                $('#kt_select2_11').select2({
                    placeholder: "Add a tag",
                    tags: true
                });

                // disabled results
                $('.kt-select2-general').select2({
                    placeholder: "Select an option"
                });
            }

            var modalDemos = function () {
                $('#kt_select2_modal').on('shown.bs.modal', function () {
                    // basic
                    $('#kt_select2_1_modal').select2({
                        placeholder: "Select a state"
                    });

                    // nested
                    $('#kt_select2_2_modal').select2({
                        placeholder: "Select a state"
                    });

                    // multi select
                    $('#kt_select2_3_modal').select2({
                        placeholder: "Select a state",
                    });

                    // basic
                    $('#kt_select2_4_modal').select2({
                        placeholder: "Select a state",
                        allowClear: true
                    });
                });
            }

            // Public functions
            return {
                init: function () {
                    demos();
                    modalDemos();
                }
            };
        }();

        // Initialization
        jQuery(document).ready(function () {
            KTSelect2.init();
        });
    </script>
@endsection
