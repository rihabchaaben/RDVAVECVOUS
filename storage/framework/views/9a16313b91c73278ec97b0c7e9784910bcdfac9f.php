<?php $__env->startComponent('mail::message'); ?>
    <p style="font-family:cursive">Bonne nouvelle<br>
    Vous avez reçu une nouvelle demande de rendez-vous dans votre catégorie.<br>
    Nous espérons que vous ou un membre de votre équipe sera disponible.<br>
    Pour consulter les détails de la demande, accédez à votre espace en cliquant</p>

<?php $__env->startComponent('mail::button', ['url' => 'http://clients.rdvavecvous.com/mes-demandes']); ?>
Accédez à votre espace
<?php echo $__env->renderComponent(); ?>


<p>
    <p style="text-decoration: line-through;text-decoration-color: red;">24.99 €</p> 
    19€ pour le 1er professionnel qui  propose un rendez-vous!
</p>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home/rdvavecvbk/clients/resources/views/emails/professionnels/new_demande_ton_secteur.blade.php ENDPATH**/ ?>