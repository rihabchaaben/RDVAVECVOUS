<?php $__env->startSection('content'); ?>

<?php $__env->startSection('script'); ?>
    <script>
        swal.fire({
            title: '',
            "type": "success",
            html:
                ' <div class="alert alert-success" role="alert">\n' +
                '                            <div class="alert-text">\n' +
                '                                <h4 class="alert-heading">Félicitation!</h4>\n' +
                '                                <p>Votre proposition a été acceptée!<br> Vous recevrez un rappel quelques jours avant la date du rendez-vous! Votre facture sera disponible dans votre espace facture.<br>' +
                '80% de nos utilisateurs signent le devis de l\'artisan rencontré sur RDVavecVous.com\n' +
                '                                    .</p>\n' +
                '                                <hr>\n' +
                '                                <p class="mb-0"> Nom : <?php echo e($data['nom']); ?> </p>\n' +
                '                                <p class="mb-0"> Email : <?php echo e($data['mail']); ?> </p>\n' +
                '                                <p class="mb-0"> Télephone : <?php echo e($data['tel']); ?> </p>\n' +
                '                                <p class="mb-0"> Adresse :  <?php echo e($data['adr']); ?> </p>\n' +
                '                            </div>\n' +
                '                        </div>' +
                ' <div class="alert alert-info" role="alert">\n' +
                '                            <div class="alert-text">\n' +
                'Vous recevrez d\'ici 48h votre  formulaire SEPA  à signer électroniquement via notre partenaire YOUSIGN, organisme certifié par l\' Agence Nationale de la Sécurité des Systèmes d\'Information pour la protection de vos données.' +
                '                            </div>\n' +
                '                        </div>',

            showCloseButton:
                false,
            showCancelButton:
                false,
            focusConfirm:
                true,
            confirmButtonText:
                '<a href="<?php echo e(route("pro.index")); ?>" style="color:white"><i class="fa fa-thumbs-up"></i> OK </a>',
            confirmButtonAriaLabel:
                'Thumbs up, great!',
            allowOutsideClick: false

        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rdvavecvbk/clients/resources/views/partials/payment.blade.php ENDPATH**/ ?>