<?php $__env->startComponent('mail::message'); ?>
<p style="font-family:cursive">
    <p style="font-family:cursive">
        <?php echo e($proposition->demande->demandeur->nom); ?>, vous avez accepté un rendez-vous avec le prestataire <?php echo e($proposition->professionnel->nom); ?><br>
        <span style="background-color:#2594a5; border-radius:20px;font-family:cursive;color:white">
            Le <?php echo e($proposition->demande->events->first()->start_date->format('d-m-y')); ?>

            De <?php echo e($proposition->demande->events->first()->start_date->format('H:i')); ?> À <?php echo e($proposition->demande->events->first()->end_date->format('H:i')); ?>    
        </span><br>
    </p>
    <p style="font-family:cursive">
        Vous recevrez un rappel  2 jours avant le rendez-vous.<br>
    </p>
    <p style="font-family:cursive">
        Toute l’équipe de <b style="color: #2E3284">RDVavec</b><b style="color: #0F8598">VOUS.com</b> vous remercie  de votre confiance et espère vous proposer d’autres rendez-vous.<br>
    </p>
    <p style="font-family:cursive">
        Un encouragement nous ferait plaisir.<br>
        Likez notre page facebook et laissez un commentaire.<br>
    </p>
</p>
<?php $__env->startComponent('mail::button', ['url' => "https://www.facebook.com/RDVaVOUS/?modal=admin_todo_tour"]); ?>
        FB Like
<?php echo $__env->renderComponent(); ?>

<?php echo $__env->renderComponent(); ?>


<?php /**PATH /home/rdvavecvbk/clients/resources/views/emails/front/demandeurs/rdv_confirmed.blade.php ENDPATH**/ ?>