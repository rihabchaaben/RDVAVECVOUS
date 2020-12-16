<?php $__env->startComponent('mail::message'); ?>
    <p style="font-family:cursive">
    Félicitations!<?php echo e($proposition->professionnel->nom); ?>, votre proposition de rendez vous pour le <?php echo e(\Carbon\Carbon::parse($proposition->demande->events->first()->start_date)->formatLocalized('%A %d %B %Y')); ?>

        De <?php echo e($proposition->demande->events->first()->start_date->format('H:i')); ?> À <?php echo e($proposition->demande->events->first()->end_date->format('H:i')); ?>

    concernant <?php echo e($proposition->demande->events->first()->titre); ?> a été accepté.
    Vous pouvez connaître l’identité de votre futur client et chatter avec lui en cliquant pour accéder à votre espace.
    </p>

<?php $__env->startComponent('mail::button', ['url' =>  'http://clients.rdvavecvous.com/login']); ?>
        Accédez à votre espace
<?php echo $__env->renderComponent(); ?>

<?php echo $__env->renderComponent(); ?><?php /**PATH /home/rdvavecvbk/clients/resources/views/emails/professionnels/proposition_status.blade.php ENDPATH**/ ?>