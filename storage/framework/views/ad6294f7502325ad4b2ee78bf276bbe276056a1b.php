
<?php $__env->startSection('content'); ?>

    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="<?php echo e(asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')); ?>" rel="stylesheet"
          type="text/css"/>

    <!--end::Page Vendors Styles -->
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="<?php echo e(asset('assets/app/custom/wizard/wizard-v1.default.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/app/custom/fancybox/jquery.fancybox-1.3.4.css')); ?>" type="text/css" media="screen"/>
    <!--end::Page Custom Styles -->
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="<?php echo e(asset('assets/app/custom/invoices/invoice-v1.default.css')); ?>" rel="stylesheet" type="text/css"/>

    <!-- dropzone -->
    
    
    

    <!-- Font style change for the 4 stages "Nouvelle Demande" -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">

    <style>
        .kt-heading.kt-heading--md.text-center {
            font-family: 'Caveat Brush', cursive !important;
        }
        .kt-heading.kt-heading--md {
            font-size: 2rem !important;
        }
    </style>

    <!--end::Page Custom Styles -->
<!--
              <div class="col-12 text-center item-top-logo">
                <img alt="Logo" src="<?php echo e(asset('assets/media/logos/logo-2-top.png')); ?>" class="img-fluid"/>
            </div>
-->
    <div class="kt-content kt-grid__item kt-grid__item--fluid">
        
        

        
        
        

        

        
        
        
        

        

        

        
        <div class="row">


            <div class="kt-portlet">
                <div class="kt-portlet__body kt-portlet__body--fit">
                    <div class="kt-grid  kt-wizard-v1 kt-wizard-v1--white bg-blue" id="kt_wizard_v1"
                         data-ktwizard-state="step-first">
                        <div class="kt-grid__item">

                            <!--begin: Form Wizard Nav -->
                            <div class="kt-wizard-v1__nav">
                                <div class="kt-wizard-v1__nav-items">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;
                                    <a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step"
                                       data-ktwizard-state="current">
                                        <div class="kt-wizard-v1__nav-body">
                                            <div class="kt-wizard-v1__nav-icon">
                                                <i class="flaticon-list"></i>
                                            </div>
                                            <div class="kt-wizard-v1__nav-label">
                                                1) SELECTIONNER LA DATE
                                            </div>
                                        </div>
                                    </a>
                                    <a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step">
                                        <div class="kt-wizard-v1__nav-body">
                                            <div class="kt-wizard-v1__nav-icon">
                                                <i class="flaticon-globe"></i>
                                            </div>
                                            <div class="kt-wizard-v1__nav-label">
                                                2) SELECTIONNER L'ACTIVITE
                                            </div>
                                        </div>
                                    </a>
                                    <a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step">
                                        <div class="kt-wizard-v1__nav-body">
                                            <div class="kt-wizard-v1__nav-icon">
                                                <i class="flaticon-bus-stop"></i>
                                            </div>
                                            <div class="kt-wizard-v1__nav-label">
                                                3) SELECTIONNER L'ADRESSE
                                            </div>
                                        </div>
                                    </a>
                                    <a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step">
                                        <div class="kt-wizard-v1__nav-body">
                                            <div class="kt-wizard-v1__nav-icon">
                                                <i class="flaticon-line-graph"></i>
                                            </div>
                                            <div class="kt-wizard-v1__nav-label">
                                                4) VALIDER LA DEMANDE
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>

                            <!--end: Form Wizard Nav -->
                        </div>


                        <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v1__wrapper">
                            <input type="hidden" name="hidemail" value="<?php echo e($demandeur); ?>">
                            <!--begin: Form Wizard Form-->
                            
                            <form action="<?php echo e(route('demandeur.demande_store')); ?>" method="POST" class="kt-form form-calendar-item"
                                  id="kt_form" enctype="multipart/form-data" >
                                
                                <div class="calendar-event">

                                </div>
                            <?php echo csrf_field(); ?>
                            <!--begin: Form Wizard Step 1-->
                                <div class="kt-wizard-v1__content" data-ktwizard-type="step-content"
                                     data-ktwizard-state="current">
                                    <div class="kt-heading kt-heading--md text-center">SELECTIONNER LA DATE</div>
                                    <div class="kt-form__section kt-form__section--first">
                                        <!-- begin:: Content -->
                                        <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
                                            <div class="row">


                                                    <!--begin::Portlet-->
                                                    <div class="kt-portlet" id="kt_portlet">

                                                        <div class="kt-portlet__body">
                                                             <div class="col-lg-12 table-responsive">
                                                                 <div class="item-caland">
                                                                       <div id="kt_calendar" name="calend"
                                                                 style="width:128%;margin-left:-13%"></div>
                                                                </div>
                                                              </div>
                                                        </div>
                                                    </div>

                                                    <!--end::Portlet-->
                                                </div>
                                            </div>
                                        <!-- end:: Content -->
                                    </div>
                                </div>

                                <!--end: Form Wizard Step 1-->

                                <!--begin: Form Wizard Step 2-->

                                <div class="kt-wizard-v1__content" data-ktwizard-type="step-content"
                                     data-ktwizard-state="current">
                                    <div class="kt-heading kt-heading--md text-center">ENTRER LE DETAIL DE LA DEMANDE</div>
                                    <div class="kt-form__section kt-form__section--first row">
                                        <div class="kt-wizard-v1__form col-md-8 mx-auto">
                                            <div class="form-group">
                                                <label>Titre de demande</label>
                                                <input type="text" class="form-control"
                                                       name="titre"
                                                       autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea type="text" class="form-control"
                                                          name="description"
                                                         rows="2"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Catégorie</label>
                                                <select class=" form-control"
                                                        name="categorie_id">
                                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php $__currentLoopData = $categorie->childrens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->label); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Choix du destinataire</label>
                                                <div class="kt-radio-inline">
                                                    <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                        <input type="radio" id="demande_normal" name="demande_vip">
                                                        
                                                        Tout le panel
                                                        <span></span>
                                                    </label>
                                                    
                                                    <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                        <input type="radio" id="demande_vip" name="demande_vip"
                                                               <?php if($vips->isEmpty()): ?> disabled <?php endif; ?>>
                                                        Ma liste <?php if($vips->isEmpty()): ?> '
                                                        votre liste est vide ' <?php endif; ?>
                                                        <span></span>
                                                    </label>
                                                    
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <div class=" col-lg-12">
                                                    <div class="section-demande-hide" style="display: none">
                                                        <select class="form-control kt-select2 select2-hidden-accessible"
                                                                data-placeholder="Yours Placeholder"
                                                                id="vip" name="special_demande[]" multiple=""
                                                                style="width: 300px">

                                                            <optgroup label="Ma liste">
                                                                <?php $__currentLoopData = $vips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($vip->professionnel->id); ?>"><?php echo e($vip->professionnel->nom); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
                                                            </optgroup>
                                                           <?php if($historiques->count()>0): ?>
                                                            <optgroup label="Historique">
                                                                <?php $__currentLoopData = $historiques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $historique): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                   <?php if(!empty($historique)): ?>
                                                                    <option value="<?php echo e($historique->id); ?>"><?php echo e($historique->nom); ?></option>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </optgroup>
                                                            <?php endif; ?>


                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Choix de l'intervention</label>
                                                <div class="kt-radio-inline">
                                                    <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                        <input type="radio" id="devis_desire" name="intervention"
                                                               value="<?php echo e(App\Demande::TYPE_DEVIS); ?>">
                                                        Devis
                                                        <span></span>
                                                    </label>

                                                    <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                        <input type="radio" id="intervention_desire"
                                                               value="<?php echo e(App\Demande::TYPE_INTERVENTION); ?>"
                                                               name="intervention">
                                                        Demande d'intervention
                                                        <span></span>
                                                    </label>
                                                </div>
                                                

                                                <div class="form-group" id="intervention_desired">
                                                    <label><b>Intervention souhaitable le</b></label>
                                                    <textarea type="text" class="form-control"
                                                              name="type_commentaire_intervention"

                                                              rows="4"></textarea>
                                                    
                                                </div>
                                                <div class="form-group" id="devis_desired" style="display:none">
                                                    <label><b>Devis souhaitable avant le</b></label>
                                                    <textarea type="text" class="form-control"
                                                              name="type_commentaire_devis"

                                                              rows="4"></textarea>
                                                    
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <!--begin: Form Wizard Step 2-->

                                <div class="kt-wizard-v1__content row" data-ktwizard-type="step-content"
                                     data-ktwizard-state="current">

                                    <div class="kt-heading kt-heading--md text-center" style="padding-left: 100px;">PRECISEZ L'ADRESSE</div>
                                    <div class="kt-form__section kt-form__section--first col-md-8 mx-auto">
                                        <div class="kt-wizard-v1__form ">
                                            <div class="form-group">
                                                
                                                <div class="kt-radio-inline">
                                                    <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                        <input type="radio" id="adresse_mine" name="adresse_check" value="1">
                                                        Adresse du profil
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                        <input type="radio" id="adresse_check" name="adresse_check" value="0">
                                                        Autre adresse
                                                        <span></span>
                                                    </label>
                                                </div>
                                                
                                            </div>
                                            <div class="section-hide" style="display: none">
                                                <div class="kt-form kt-form--">
                                                    <div class="kt-form__body">
                                                        <div class="kt-section kt-section--first">
                                                            <div class="kt-section__body">

                                                                <div class="form-group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">
                                                                        Adresse</label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <input class="form-control" type="text"
                                                                               name="adresse" required=""

                                                                        >
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">
                                                                        Code Postale</label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <input class="form-control" type="text"
                                                                               name="cp"
                                                                        >
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">
                                                                        Ville</label>
                                                                    <div class="col-lg-10 col-xl-9">

                                                                        <select class="form-control"
                                                                                style="width: 300px"
                                                                                id="js-data-example-ajax"
                                                                                name="ville_id">

                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="dropped">

                                </div>
                                <div class="kt-wizard-v1__content row" data-ktwizard-type="step-content"
                                     data-ktwizard-state="current">
                                    <div class="kt-heading kt-heading--md text-center">Inserer des pieces jointes</div>
                                    <div id="dZUpload" class="dropzone col-md-8 mx-auto" style="border-color:#5d78ff">
                                        <div class="dz-default dz-message">Joindre mes documents</div>
                                    </div>
                                </div>
                                <!--begin: Form Actions -->
                                <div class="kt-form__actions">
                                    <div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                         data-ktwizard-type="action-prev">
                                        Précédent
                                    </div>
                                    <div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                         data-ktwizard-type="action-submit" >
                                        Valider la demande
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
    </div>
<?php $__env->startSection('script'); ?>

    <!--begin::Page Scripts(used by this page) -->
    <script src="<?php echo e(asset('/assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js')); ?>"
            type="text/javascript"></script>
    <!--end::Page Scripts -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="<?php echo e(asset('/assets/app/custom/general/crud/forms/widgets/select2.js')); ?>" type="text/javascript"></script>
    <!--end::Page Scripts -->

    <script src="<?php echo e(asset('/assets/app/custom/dropzone/dropzone.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('/assets/app/custom/dropzone/dropzone.min.js')); ?>" type="text/javascript"></script>
    <script>
        function formatRepo(repo) {
            return repo.full_name || repo.text;
        }
        $("#vip").select2({
            // placeholder: "Selectionner la ville",
            placeholder: "Sélectionner la ville",
        });
        $("#js-data-example-ajax").select2({
            // placeholder: "Selectionner la ville",
            placeholder: "Sélectionner la ville",
            allowClear: true,
            ajax: {
                url: '<?php echo e(route('demandeur.get_villes')); ?>',
                dataType: 'json',
                data: function (params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function (data, params) {
                    params.page = params.page || 1;
                    return {
                        results: data,
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
            // minimumInputLength: 1,
            templateResult: formatRepo, // omitted for brevity, see the source of this page
            // templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });
        var myDropzone = new Dropzone("#dZUpload", {
            url: "<?php echo e(route("demandeur.dropzone_store")); ?>",
            uploadMultiple: true,
            autoProcessQueue: false,
            addRemoveLinks: true,
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 10, // MB
            sending: function (file, xhr, formData) {
                formData.append("_token", "<?php echo e(csrf_token()); ?>");
            },
            success: function (file, response) {
                var my_dropped = $("#dropped");
                console.log(response);
                $.each(response, function (i, order) {
                    my_dropped.append('<input type="hidden" name="dropped[]" value="' + order + '">');
                });
            }
        });
        
        
        
    </script>


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
    

    <script src="<?php echo e(asset('assets/app/custom/general/dashboard.js')); ?>" type="text/javascript"></script>

    <!--end::Page Scripts -->
    <!--begin::Page Scripts(used by this page) -->
    <script src="<?php echo e(asset('assets/app/custom/wizard/wizard-v1.js')); ?>" type="text/javascript"></script>


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
            $("#devis_desire").click(function () {
                $("#intervention_desired").fadeIn();
                $("#devis_desired").hide();
            });
            $("#intervention_desire").click(function () {
                $("#devis_desired").fadeIn();
                $("#intervention_desired").hide();
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
            // multi select
            $('#kt_select2_3').select2({
                dropdownAutoWidth: true,
                multiple: true,
                width: '100%',
                height: '30px',
                placeholder: "Select",
                allowClear: true
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
                // $('#kt_select2_3').select2({
                //     placeholder: "Select a state"
                // });
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
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.demandeurs.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rdvavecvbk/clients/resources/views/demandeur/demandes/create.blade.php ENDPATH**/ ?>