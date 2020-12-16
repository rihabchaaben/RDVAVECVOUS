<?php $__env->startSection('content'); ?>


    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
        
            

                
                    
                

                

                
            
                                    

                

            

        
        <!-- end:: Content Head -->
        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="row">
                <div class="col">
                    
                        
                        
                            
                            
                            
                            
                                    
                                    
                                    
                                    
                                    
                                
                        
                    
                    <div class="alert alert-info fade show" role="alert">
                        <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                                    
                                    <div class="alert-text" style="font-size: 16px">Pourquoi inviter un artisan ?
                            <p>Si vous connaissez un artisan et souhaitez gagner du temps dans la prise de contact, invitez-le!
                                Il recevra en exclusivité vos demandes si vous le selectionnez dans MA LISTE lors de vos
                                prochaines demandes.</p>
                            
                            <p class="mb-0">Remplissez les champs suivants et nous l'invitons à s'inscrire gratuitement.
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

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head bg-blue">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Invitez vos artisans préférés
                        </h3>
                    </div>
                </div>
                <!--begin::Form-->
                <form action="<?php echo e(route('demandeur.mes_invitation_storeByRef')); ?>" method="post" class="kt-form kt-form--label-right">
                    <?php echo csrf_field(); ?>
                    <div class="kt-portlet__body">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12">Nom</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <input type="text" class="form-control" name="name"
                                       placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12">Activité</label>
                            <select class="form-control col-lg-4 col-md-9 col-sm-12" name="category">
                                 <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__currentLoopData = $category->childrens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <option value="<?php echo e($child->id); ?>">
                                             <?php echo e($child->label); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12">Email</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <input type="email" class="form-control" name="email"
                                       placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-lg-9 ml-lg-auto">
                                    <button type="submit" class="btn btn-success">Valider</button>
                                    <button type="submit" class="btn btn-secondary">Annuler</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->

        </div>
        <!-- end:: Content -->
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front.demandeurs.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rdvavecvbk/clients/resources/views/demandeur/invitations/create.blade.php ENDPATH**/ ?>