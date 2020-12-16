<?php $__env->startSection('content'); ?>
    <!-- begin:: Content -->




<?php

$months = array(
    1 => 'Janvier',
    2 => 'Février',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juillet',
    8 => 'Août',
    9=> 'Septembre',
   10=> 'Octobre',
   11 => 'Novembre',
   12 => 'Décembre'
);


?>


    <div class="kt-content kt-grid__item kt-grid__item--fluid" id="kt_content">
        <div class="kt-portlet kt-portlet--tabs">
            <div class="kt-portlet__head bg-blue">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        MES FACTURES
                    </h3>
                </div>

            </div>
            <div class="kt-portlet__body">
                <div class="tab-content">
                    <div class="tab-pane active" id="kt_widget5_tab1_content">
                        <?php if($factures->isEmpty()): ?>
                            <p>AUCUNE FACTURE À CE JOUR</p>
                        <?php else: ?>
                            <?php $__currentLoopData = $factures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="kt-widget5">
                                    <div class="kt-widget5__item">
                                        <div class="kt-widget5__content">
                                            <div class="kt-widget5__pic">
                                                <img class="kt-widget7__img"
                                                     src="<?php echo e(asset('/images/logo_typo.png')); ?>"
                                                     alt="">
                                            </div>
                                            <div class="kt-widget5__section">
                                                <a href="#" class="kt-widget5__title">
                                                   Votre facture pour le mois de  <?php echo e($months[$facture->mois]); ?>

                                                </a>
                                                <p class="kt-widget5__desc">
                                                   M(me) <?php echo e($facture->professionnel->nom); ?>

                                                </p>
                                                <div class="kt-widget5__info">
                                                    <span>Nombre de RDV :</span>
                                                    <span class="kt-font-info"><?php echo e($facture->nombre_rdv); ?> RDV</span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-widget5__content">
                                            <div class="kt-widget5__stats">
                                                <span class="kt-widget5__number"><?php echo e($facture->montant); ?>€</span>
                                             </div>
                                           <a href="<?php echo e(route('pro.mes_factures.generer',$facture->id)); ?>" target="_blank"> <div class="kt-widget5__stats">
                                                    <span class="kt-widget5__number"><div class="kt-demo-icon">
                    <div class="kt-demo-icon__preview">
                        <i class="fa fa-file-download"></i>
                    </div>

                </div>
                                                    </span>
                                                <span class="kt-widget5__sales">Imprimer</span>


                                            </div></a>
                                        </div>
                                    </div>


                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>


        <hr>



<!-- 
    
                    <div class="tab-content">
                    <div class="tab-pane active" id="kt_widget2_tab2_content">
                        <div class="kt-widget2">
                            <?php if($factures->isEmpty()): ?>
                                <p>AUCUNE DEMANDE</p>
                            <?php else: ?>
                                <table class="table table-striped" id="kt_table_1">
                                    <thead>
                                    <tr>

                                        <th>Mois</th>
                                        <th>Nombre des RDV  acceptes </th>
                                        <th>Facture N</th>
                                         
                                        
                                    </tr>
                                    </thead>

                                    <tbody>
                                   

                                    <?php $__currentLoopData = $factures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <th> 
                                                <?php echo e($months[$facture->mois]); ?>


                                            </th>
                                            <th> 
                                                <?php echo e($facture->nombre_rdv); ?>  RDV

                                            </th>

                                            <th> 
                                                Facture<?php echo e($facture->id); ?>


                                            </th>
                                             

                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
                </div>
            </div>
        </div>
    </div>


   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
   <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>


   <script>

$( document ).ready(function() {
$('#kt_table_1').DataTable({
         "processing": true,
          
         "dom": 'lBfrtip',

         "buttons": [
            {
                extend: 'collection',
                text: 'Export',
                buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'pdf',
                    'print'
                ]
                ,
                exportOptions: {
              columns: ':visible:not(.notexport)'
                  }
            }

            
        ]
        
        });
});
   </script>


 -->


    <!-- end:: Content -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front.professionnel.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rdvavecvbk/clients/resources/views/professionnel/factures.blade.php ENDPATH**/ ?>