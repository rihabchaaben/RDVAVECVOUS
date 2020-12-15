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
                var href = $(".sepa").attr("href");
                swal.fire({
                    "title": "Remplissez le formulaire SEPA",
                    "text": "Code promo invalide.",
                    "type": "error",
                    confirmButtonText:
                        '<a href=' + href + ' style="color:white"><i class="fa fa-thumbs-up"></i> OK </a>',
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
            e.preventDefault();

            if (validator.form()) {
                // See: src\js\framework\base\app.js
                KTApp.progress(btn);
                //KTApp.block(formEl);

                // See: http://malsup.com/jquery/form/#ajaxSubmit
                formEl.ajaxSubmit({
                    success: function (data) {
                        KTApp.unprogress(btn);
                        //KTApp.unblock(formEl);
                        if ((data.status) === 404) {
                            swal.fire({
                                "title": "",
                                "text": "Il ya une error pour la soumission du facture. Please correct them.",
                                "type": "error",
                                "confirmButtonClass": "btn btn-secondary"
                            });
                        }
                        else {
                            swal.fire({
                                title: '<strong>Payment avec success!</strong>',
                                "type": "success",
                                html:
                                    ' <div class="alert alert-success" role="alert">\n' +
                                    '                            <div class="alert-text">\n' +
                                    '                                <h4 class="alert-heading">Félicitation!</h4>\n' +
                                    // '                                <p>Votre proposition a été acceptée!<br> Vous recevrez un rappel quelques jours avant la date du rendez-vous! votre facture sera disponible dans votre espace facture.<br>' +
                                    '                                <p>Votre proposition a été acceptée!<br> Vous recevrez un rappel quelques jours avant la date du rendez-vous!<br> Votre facture sera disponible dans votre espace facture.<br>' +
                                    '80% de nos utilisateurs signent le devis de lartisan rencontré sur RDVavecVous.com\n' +
                                    '                                    .</p>\n' +
                                    '                                <hr>\n' +
                                    '                                <p class="mb-0"> Nom : ' + data.data.nom + ' </p>\n' +
                                    '                                <p class="mb-0"> Email : ' + data.data.mail + ' </p>\n' +
                                    '                                <p class="mb-0"> Télephone : ' + data.data.tel + ' </p>\n' +
                                    '                                <p class="mb-0"> Adresse : ' + data.data.adr + ' </p>\n' +
                                    '                            </div>\n' +
                                    '                        </div>',

                                showCloseButton:
                                    true,
                                showCancelButton:
                                    false,
                                focusConfirm:
                                    false,
                                allowOutsideClick: false,
                                confirmButtonText:
                                    '<a href="/dashboard" style="color:white"><i class="fa fa-thumbs-up"></i> OK </a>',
                                confirmButtonAriaLabel:
                                    'Thumbs up, great!',

                            })
                            ;
                        }

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