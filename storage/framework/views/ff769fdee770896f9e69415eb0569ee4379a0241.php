<?php $__env->startComponent('mail::message'); ?>
    <p style="font-family:cursive">
        Un message important de la part de votre client vous attend dans votre messagerie.
        Cliquez ici pour le consulter
    </p>

<?php $__env->startComponent('mail::button', ['url' => route('pro.chat.show',[$proposition,'#last_chat'])]); ?>
        Consulter
<?php echo $__env->renderComponent(); ?>

<?php echo $__env->renderComponent(); ?><?php /**PATH /home/rdvavecvbk/clients/resources/views/emails/professionnels/new_message.blade.php ENDPATH**/ ?>