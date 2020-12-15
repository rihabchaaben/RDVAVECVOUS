"use strict";

// Class definition
var KTWizard2 = function () {
    // Base elements
    var wizardEl;
    var formEl;
    var validator;
    var wizard;

    // Private functions
    var initWizard = function () {
        // Initialize form wizard
        wizard = new KTWizard('kt_wizard_v2', {
            startStep: 1,
        });

        // Validation before going to next page
        wizard.on('beforeNext', function (wizardObj) {
            if (validator.form() !== true) {
                wizardObj.stop();  // don't go to the next step
            }
        })

        // Change event
        wizard.on('change', function (wizard) {
            KTUtil.scrollTop();
        });
    }

    var initValidation = function () {
        validator = formEl.validate({
            // Validate only visible fields
            ignore: ":hidden",

            // Validation rules
            rules: {
                //= Step 1
                fname: {
                    required: true
                },
                lname: {
                    required: true
                },
                phone: {
                    required: true
                },
                emaul: {
                    required: true,
                    email: true
                },

                //= Step 2
                address1: {
                    required: true
                },
                postcode: {
                    required: true
                },
                city: {
                    required: true
                },
                state: {
                    required: true
                },
                country: {
                    required: true
                },

                //= Step 3
                delivery: {
                    required: true
                },
                packaging: {
                    required: true
                },
                preferreddelivery: {
                    required: true
                },

                //= Step 4
                locaddress1: {
                    required: true
                },
                locpostcode: {
                    required: true
                },
                loccity: {
                    required: true
                },
                locstate: {
                    required: true
                },
                loccountry: {
                    required: true
                },

                //= Step 5
                ccname: {
                    required: true
                },
                ccnumber: {
                    required: true,
                    creditcard: true
                },
                ccmonth: {
                    required: true
                },
                ccyear: {
                    required: true
                },
                cccvv: {
                    required: true,
                    minlength: 2,
                    maxlength: 3
                },


            },

            // Display error
            invalidHandler: function (event, validator) {
                KTUtil.scrollTop();

                swal.fire({
                    "title": "",
                    // "text": "Merci de remplir ce champ avec les informations indiquées u.",
                    "text": "Merci de remplir ce champ avec les informations indiquées.",
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

        btn.on('click', function (e) {

             this.disabled=true;
             e.preventDefault();
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

                // See: http://malsup.com/jquery/form/#ajaxSubmit
                formEl.ajaxSubmit({
                    success: function () {
                        KTApp.unprogress(btn);
                        //KTApp.unblock(formEl);
                        swal.fire({
                            "title": "",
                            "text": "Proposition envoyée!",
                            "type": "success",
                            // "confirmButtonClass": "btn btn-secondary",
                            allowOutsideClick: false,
                            // showConfirmButton: true,

                            confirmButtonText:
                                '<a href="/mes-demandes/attente" style="color:white"><i class="fa fa-thumbs-up"></i> OK </a>',

                        }).then((result) => {
                            if (result.value) {
                                location.href = '/mes-demandes/accepte';
                            }

                        });
                    }
                });
            }
        });
    }

    return {
        // public functions
        init: function () {
            wizardEl = KTUtil.get('kt_wizard_v2');
            formEl = $('#kt_form');

            initWizard();
            initValidation();
            initSubmit();
        }
    };
}();

jQuery(document).ready(function () {
    KTWizard2.init();
});
