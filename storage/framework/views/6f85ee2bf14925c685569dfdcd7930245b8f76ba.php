<?php $__env->startSection('content'); ?>


    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
        
        <!-- end:: Content Head -->
        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head bg-blue">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Contactez-Nous
                        </h3>
                    </div>
                </div>
                <!--begin::Form-->
                <form action="<?php echo e(route('demandeur.contactUs_store')); ?>" method="post"
                      class="kt-form kt-form--label-right">
                    <?php echo csrf_field(); ?>
                    <div class="kt-portlet__body">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12">Nom & Prénom</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <input type="text" class="form-control" name="name" value="<?php echo e($demandeur->nom); ?>"
                                       placeholder="Ecrire le nom et le prénom du artisan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12">Email</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <input type="email" class="form-control" name="email"
                                       value="<?php echo e($demandeur->user->email); ?>"
                                       placeholder="Ecrire l email du artisan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12">Message</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <textarea name="message"
                                          class="form-control" rows="8"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-lg-9 ml-lg-auto">
                                    <button type="submit" class="btn btn-success">Envoyer</button>
                                    <button type="submit" class="btn btn-secondary">Réinitialiser</button>
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
<?php echo $__env->make('layouts.front.demandeurs.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rdvavecvbk/clients/resources/views/demandeur/contacter_nous.blade.php ENDPATH**/ ?>