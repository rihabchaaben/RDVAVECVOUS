<script>
    $(document).ready(function () {
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "30000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        <?php if(session()->has('profile')): ?>toastr.success("Votre profil a été mis à jour avec succès!");
        <?php endif; ?>


        <?php if(session()->has('refusedemande')): ?>toastr.success("Cette demande a été refusée avec succès !");
        <?php endif; ?>

        <?php if(session()->has('invitation')): ?>toastr.success("Votre invitation a été envoyée avec succès!");
        <?php endif; ?>
        <?php if(session()->has('demandeCreated')): ?>toastr.success("Votre demande a été créée avec succès!");
        <?php endif; ?>
        <?php if(session()->has('demandedeleted')): ?>toastr.success("Votre demande a été supprimée avec succès!");
        <?php endif; ?>
        
        <?php if(session()->has('propositionCreated')): ?>toastr.success("Bravo! La demande a bien été envoyée.Vous recevrez une notification de réponse de la part du demandeur");
        <?php endif; ?>
        <?php if(session()->has('messageSended')): ?>toastr.success("Votre message a été envoyé avec succès!");
        <?php endif; ?>
        <?php if(session()->has('sepaCreated')): ?>toastr.success("Vous recevrez d'ici 48h votre formulaire SEPA à signer électroniquement via notre partenaire YOUSIGN, organisme certifié par l'Agence Nationale de la Sécurité des Systèmes d'Information pour la protection de vos données.");
        <?php endif; ?>
        <?php if(session()->has('devisUpdated')): ?>toastr.success("Devis a été mis à jour avec succès!");
        <?php endif; ?>
        <?php if(session()->has('kbisCreated')): ?>toastr.success("Votre document a été bien envoyé, il va être traité dans les meilleurs délais");
        <?php endif; ?>


    });
</script><?php /**PATH /home/rdvavecvbk/clients/resources/views/partials/flash.blade.php ENDPATH**/ ?>