<?php $__env->startSection('content'); ?>
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
        <!-- begin:: Content Head -->
    
    

    
    
    

    

    
    
    

    

    

    
    <!-- end:: Content Head -->
        <!-- begin:: Content -->

        <div class="kt-content  kt-grid__item kt-grid__item--fluid">

            <div class="row">
                <div class="col">
                    <div class="alert alert-info fade show" role="alert">
                        <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                                    
                                    <div class="alert-text" style="font-size: 16px">Pourquoi inviter un artisan ?
                            <p>Si vous connaissez un artisan et souhaitez gagner du temps dans la prise de contact,
                                invitez-le!
                                Il recevra en exclusivité vos demandes si vous le selectionnez dans MA LISTE lors de vos
                                prochaines demandes.</p>
                            <p class="mb-0">Remplissez les champs suivant et nous l' invitons à s'inscrire gratuitement.
                                Travaillez ensemble de manière plus simple!</p>
                        </div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="la la-close"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg bg-blue">
                    <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                        <h3 class="kt-portlet__head-title">
                            Ma liste
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions"> &nbsp;
                                <a href="<?php echo e(route('demandeur.mes_invitation_create')); ?>"
                                   class="btn btn-brand btn-elevate btn-icon-sm btn-white">
                                    <i class="la la-plus"></i>
                                    Inviter un artisan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">

                    <div class="kt-section">
                        <div class="kt-section__content">
                            <?php if($invitations->isEmpty()): ?>
                                <p>Vous n'avez aucun invité</p>
                            <?php else: ?>

                            <table id="kt_table_1" role="grid" style="width: 1237px;" class="table table-striped dataTable no-footer dtr-inline collapsed" class="table table-striped" id="kt_table_1">                                    <thead>
                                    <tr>

                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Téléphone</th>
                                        <th>Catégorie</th>
                                        <th>Ville</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $invitations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$invit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>

                                            <td><?php echo e($invit->professionnel->user->name); ?></td>
                                            <td><?php echo e($invit->professionnel->user->email); ?> </td>
                                            <td> <?php if(isset($invit->professionnel->telephone)): ?>
                                                    <?php echo e($invit->professionnel->telephone); ?>

                                                <?php else: ?>
                                                    Profile Incomplet
                                                <?php endif; ?></td>
                                            <td>
                                                <?php if(isset($invit->professionnel->categories->first()->label)): ?>
                                                    <?php echo e($invit->professionnel->categories->first()->label); ?>

                                                <?php else: ?>
                                                    Profile Incomplet
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if(isset($invit->professionnel->ville->name)): ?>
                                                    <?php echo e($invit->professionnel->ville->name); ?>

                                                <?php else: ?>
                                                    Profile Incomplet
                                                <?php endif; ?>
                                            </td>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            

                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.demandeurs.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rdvavecvbk/clients/resources/views/demandeur/invitations/index.blade.php ENDPATH**/ ?>