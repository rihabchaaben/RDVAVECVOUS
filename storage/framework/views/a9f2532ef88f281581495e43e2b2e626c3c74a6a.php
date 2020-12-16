<?php $__env->startComponent('mail::message'); ?>
 
<p style="font-family:cursive">
    <p style="font-family:cursive">
    Vous venez de vous inscrire sur <b style="color: #2E3284">RDVavec</b><b style="color: #0F8598">VOUS.com</b>
    </p>
    <p style="font-family:cursive">
        Vous pourrez publier des demandes de rendez-vous sur le créneau qui vous intéresse.<br>
        Les artisans de votre secteur en seront informés et se positionneront s'ils sont disponibles.<br>
        Vos coordonnées sont protégés et communiqués uniquement aux prestataires choisis par vous-même.
    </p>
    <p style="font-family:cursive">
        Nous espérons améliorer la gestion de votre temps.<br>
        Pour publier votre première demande, vous devez d'abord finaliser votre profil:   
    </p>
</p>

            

<?php $__env->startComponent('mail::button', ['url' => $url]); ?>
    CLIQUEZ ICI POUR FINALISER VOTRE PROFIL
<?php echo $__env->renderComponent(); ?>

<span style="font-family:cursive"><ul>
    <li>
        Des rendez-vous au bon moment
    </li>
</ul> </span>

<?php echo $__env->renderComponent(); ?>

<?php /**PATH /home/rdvavecvbk/clients/resources/views/emails/front/demandeurs/bienvenue.blade.php ENDPATH**/ ?>