<?php $__env->startSection('content'); ?>
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="<?php echo e(asset('assets/app/custom/wizard/wizard-v2.default.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/app/custom/fancybox/jquery.fancybox-1.3.4.css')); ?>" type="text/css" media="screen"/>
    <!--end::Page Custom Styles -->
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="<?php echo e(asset('assets/app/custom/invoices/invoice-v2.default.css')); ?>" rel="stylesheet" type="text/css"/>

    <!--end::Page Custom Styles -->

    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">
                    Facture
                </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                
                
                
                

                

            </div>

        </div>
        <div class="kt-portlet">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="kt-grid  kt-wizard-v2 kt-wizard-v2--white" id="kt_wizard_v2" data-ktwizard-state="first">
                    <div class="kt-grid__item kt-wizard-v2__aside">

                        <!--begin: Form Wizard Nav -->
                        <div class="kt-wizard-v2__nav">
                            <div class="kt-wizard-v2__nav-items">
                                
                                   
                                    
                                        
                                            
                                        
                                        
                                            
                                                
                                            
                                        
                                    
                                
                                <a class="kt-wizard-v2__nav-item" href="#" data-ktwizard-type="step"
                                   data-ktwizard-state="pending">
                                    <div class="kt-wizard-v2__nav-body">
                                        <div class="kt-wizard-v2__nav-icon">
                                            <i class="flaticon-truck"></i>
                                        </div>
                                        <div class="kt-wizard-v2__nav-label">
                                            <div class="kt-wizard-v2__nav-label-title">
                                                Payer la Facture
                                            </div>
                                            
                                            
                                            
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>

                        <!--end: Form Wizard Nav -->
                    </div>
                    <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v2__wrapper">

                        <!--begin: Form Wizard Form-->
                        <form action="<?php echo e(route('pro.facture_store')); ?>" method="post" class="kt-form" id="kt_form">

                            <input type="hidden" value="<?php echo e(Auth::user()->professionnel->id); ?>" name="professionnel_id">
                            <input type="hidden" value="<?php echo e($proposition->id); ?>" name="proposition_id">
                            <input type="hidden" value="<?php echo e($proposition->demande->demandeur->id); ?>" name="demandeur_id">

                        <?php echo csrf_field(); ?>

                        <!--begin: Form Wizard Step 1-->

                            
                                

                                    
                                        
                                            
                                            
                                                
                                        
                                    
                                
                                
                                    
                                        
                                            
                                                
                                            
                                            
                                                
                                                    
                                                       
                                                    
                                                        
                                                        
                                                
                                            
                                        
                                        
                                            
                                                
                                                    
                                                
                                                
                                                    
                                                
                                            
                                            
                                                
                                                    
                                                
                                                
                                                    
                                                
                                            
                                        
                                        
                                            
                                                
                                                    
                                                
                                                
                                                    
                                                
                                            
                                            
                                                
                                                    
                                                
                                                
                                                    
                                                        
                                                    
                                                        
                                                    
                                                    
                                                    
                                                
                                            
                                        
                                        
                                            
                                                
                                                    
                                                
                                                
                                                     
                                                     
                                                     
                                                    
                                                    
                                                    
                                                
                                            
                                            
                                                
                                                    
                                                
                                                
                                                     
                                                     
                                                     
                                                    
                                                
                                            
                                        
                                        
                                            
                                                
                                            
                                            
                                                
                                                   
                                                   
                                                    
                                                
                                            
                                        
                                    
                                
                            
                            <!--end: Form Wizard Step 1-->


                            <!--begin: Form Wizard Step 5-->
                            <div class="kt-wizard-v2__content" data-ktwizard-type="step-content">

                                <div class="alert alert-info fade show" role="alert">
                                    <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                                    <div class="alert-text"  style="font-size: 16px">
                                    
                                        <p>Pourquoi un paiment par prélévement?</p>
                                        <p>- Beaucoup plus sûre qu'une carte bancaire.</p>
                                        <p>- Vos données sont protégés contre l'usurpation et le vol.</p>
                                        <p>- En fin de mois, vous ne payez QUE les rendez-vous acceptés.</p>
                                    </div>
                                    <div class="alert-close">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="la la-close"></i></span>
                                        </button>
                                    </div>
                                </div>

                                <div class="kt-heading kt-heading--md">Vous avez un code promo ?</div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v2__form">
                                        
                                        
                                        
                                        
                                        
                                        
                                        <div class="form-group" id="promo">
                                            <label>Votre code promo</label>
                                            <input type="text" class="form-control" name="code_promo"
                                                   placeholder="Entre votre code promo" required>
                                        </div>

                                        <a href="<?php echo e(route('pro.sepa_create',$proposition->id)); ?>" class="sepa">
                                            <button type="button" class="btn btn-bold btn-label-brand btn-sm">Paiement
                                                Formulaire SEPA
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!--end: Form Wizard Step 5-->

                            <!--begin: Form Actions -->
                            <div class="kt-form__actions">
                                
                                     
                                    
                                
                                <div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                     data-ktwizard-type="action-submit">
                                    Payer le RDV
                                </div>
                                <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                     data-ktwizard-type="action-next">
                                    Suivant
                                </div>
                            </div>

                            <!--end: Form Actions -->
                        </form>

                        <!--end: Form Wizard Form-->
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $__env->startSection('script'); ?>
    <script>

        window.MY_PROJECT = {
            sepa_route: "<?php echo e(route('pro.sepa_create',$proposition->id)); ?>";
        };

    </script>
    <!--begin::Page Scripts(used by this page) -->
    <script src="<?php echo e(asset('assets/app/custom/wizard/facture-wizard.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/app/custom/fancybox/jquery.fancybox-1.3.4.pack.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/app/custom/fancybox/jquery.easing-1.3.pack.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/app/custom/fancybox/jquery.mousewheel-3.0.4.pack.js')); ?>"
            type="text/javascript"></script>

    <script>
        $('#promo-switch').change(function () {
            if (this.checked == true) {
                $("#promo").fadeIn();
                $("#fact").hide();
            }
            else {
                $("#promo").hide();
                $("#fact").fadeIn();
            }
        })
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front.professionnel.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rdvavecvbk/clients/resources/views/professionnel/etapes/facture.blade.php ENDPATH**/ ?>