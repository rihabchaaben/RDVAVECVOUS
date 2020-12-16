<?php $__env->startComponent('mail::message'); ?>
<p style="font-family:cursive">Rendez-vous confirmé!<br>
        <p style="font-family:cursive">
                Vous avez un rendez vous le:<br>
                <span style="background-color:#2594a5; border-radius:20px;font-family:cursive;color:white">
                        <?php echo e($proposition->demande->events->first()->start_date->format('d-m-y')); ?>

                De <?php echo e($proposition->demande->events->first()->start_date->format('H:i')); ?> À <?php echo e($proposition->demande->events->first()->end_date->format('H:i')); ?>

                </span><br>
                Pour <?php echo e($proposition->demande->events->first()->titre); ?>.<br>      
        </p>
        <p style="font-family:cursive">
        Vous pouvez indiquer au demandeur tout changement via le chat privé ou en le contactant téléphoniquement.<br></p>
        <p style="font-family:cursive">
        Toute l’équipe de <b style="color: #2E3284">RDVavec</b><b style="color: #0F8598">VOUS.com</b> vous remercie  de votre confiance et espère vous proposer d’autres rendez-vous.</p>
        <p style="font-family:cursive">
        Un encouragement nous ferait plaisir.<br>
        Likez notre page facebook et laissez un commentaire.</p>
</p>


<?php $__env->startComponent('mail::button', ['url' => "https://www.facebook.com/RDVaVOUS/?modal=admin_todo_tour"]); ?>
        FB Like
<?php echo $__env->renderComponent(); ?>

<?php echo $__env->renderComponent(); ?>

<?php /**PATH /home/rdvavecvbk/clients/resources/views/emails/professionnels/Rdv_confirmed.blade.php ENDPATH**/ ?>