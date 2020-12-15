"use strict";

// Class definition
var KTWizard1 = function () {
    // Base elements
    var wizardEl;
    var formEl;
    var validator;
    var wizard;

    // Private functions
    var initWizard = function () {
        // Initialize form wizard
        wizard = new KTWizard('kt_wizard_v1', {
            startStep: 1
        });

        // Validation before going to next page
        wizard.on('beforeNext', function (wizardObj) {
            if (validator.form() !== true) {
                wizardObj.stop();  // don't go to the next step
            }
        })

        // Change event
        wizard.on('change', function (wizard) {
            setTimeout(function () {
                KTUtil.scrollTop();
            }, 500);
        });
    }

    var initValidation = function () {
        validator = formEl.validate({
            // Validate only visible fields
            ignore: ":hidden",
            // Validation rules
            rules: {
                //= Step 1
                calend: {
                    required: true
                },
                titre: {
                    required: true
                },
                description: {
                    required: true
                },
                categorie_id: {
                    required: true
                },
                demande_vip: {
                    required: true
                },
                adresse_check: {
                    required: true
                },
                demanrde_vip: {
                    required: true
                },
                type_commentaire: {
                    required: true
                },
                demeande_vip: {
                    required: true
                },

            },
            messages: {
                titre: {
                    required: "Ce champ est requis"
                },
                description: {
                    required: "Ce champ est requis"
                },
                categorie_id: {
                    required: "Ce champ est requis"
                },
                demande_vip: {
                    required: "Ce champ est requis"
                },
                adresse_check: {
                    required: "Ce champ est requis"
                },
                demanrde_vip: {
                    required: "Ce champ est requis"
                },
                type_commentaire: {
                    required: "Ce champ est requis"
                },
                demeande_vip: {
                    required: "Ce champ est requis"
                },
            },

            // Display error
            invalidHandler: function (event, validator) {
                KTUtil.scrollTop();

                swal.fire({
                    "title": "",
                    // "text": "Champ est requis !",
                    "text": "Champ requis!",
                    "type": "error",
                    "confirmButtonClass": "btn btn-secondary"
                });
            },

            // Submit valid form
            submitHandler: function (form) {

            }
        });
    }

    var initSubmit = function () {
        var btn = formEl.find('[data-ktwizard-type="action-submit"]');
console.log(formEl);
        btn.on('click', function (e) {

            e.preventDefault();
            myDropzone.processQueue();

            Swal.fire({
                title: 'Un instant SVP',
                text: "Votre demande est encours d'excution .....",
                imageUrl: 'https://menarosa.org/wp-content/uploads/2018/12/pending-loop.gif',
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: 'Custom image',
                showCancelButton: false,
                showConfirmButton: false,
                cancelButtonColor: '#d33',
                allowOutsideClick: false,
             });

            if (validator.form()) {
                // See: src\js\framework\base\app.js
                KTApp.progress(btn);
                //KTApp.block(formEl);

                myDropzone.processQueue();

                // See: http://malsup.com/jquery/form/#ajaxSubmit
                setTimeout(function () {
                    formEl.ajaxSubmit({
                        success: function () {

                            if (document.querySelector('[name="hidemail"]').value.indexOf('gmail.com') > -1) {

                                Swal.fire({
                                    title: 'RDV ajouté',
                                    text: "RDV ajouté avec succès",
                                    type: "success",
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    allowOutsideClick: false,
                                    //confirmButtonText: 'Synch avec google calendrier!?'
                                }).then((result) => {
                                    if (result.value) {
                                        //location.href = '/demandeur/mes-demandes/google-calendar';
                                          location.href = '/demandeur/mes-demandes';

                                    }
                                    else {
                                        location.href = '/demandeur/mes-demandes';
                                    }
                                })
                            }
                            else {

                                swal.fire({
                                    "title": "",
                                    "text": "RDV ajouté avec succès",
                                    "type": "success",
                                    allowOutsideClick: false,
                                    confirmButtonText:
                                        '<a href="/demandeur/mes-demandes" style="color:white"><i class="fa fa-thumbs-up"></i> OK! Mes demandes</a>',
                                }).then((result) => {
                                    if (result.value) {
                                        location.href = '/demandeur/mes-demandes';
                                    }

                                });
                            }
                            // console.log(document.querySelector('[name="hidemail"]').value);
                        }

                    });

                }, 3000);
            }
        });
    }

    return {
        // public functions
        init: function () {
            wizardEl = KTUtil.get('kt_wizard_v1');
            formEl = $('#kt_form');

            initWizard();
            initValidation();
            initSubmit();
        }
    };
}();

jQuery(document).ready(function () {
    KTWizard1.init();
});
