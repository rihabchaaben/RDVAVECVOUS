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
                                   data-ktwizard-state="current">
                                    <div class="kt-wizard-v2__nav-body">
                                        <div class="kt-wizard-v2__nav-icon">
                                            <i class="flaticon-globe"></i>
                                        </div>
                                        <div class="kt-wizard-v2__nav-label">
                                            <div class="kt-wizard-v2__nav-label-title">
                                                Paiement Sepa
                                            </div>

                                        </div>
                                    </div>
                                </a>


                            </div>
                        </div>

                        <!--end: Form Wizard Nav -->
                    </div>
                    <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v2__wrapper">
                        <br>
                        <div class="alert alert-info fade show" role="alert">
                            <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                                    
                            <div class="alert-text" style="font-size: 16px">
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
                        <!--begin: Form Wizard Form-->
                        <form action="<?php echo e(route('pro.sepa_store','#footer_validation')); ?>" method="post" class="kt-form" id="kt_form">

                            
                            <input type="hidden" value="<?php echo e($proposition->id); ?>" name="proposition_id">
                            

                        <?php echo csrf_field(); ?>

                        <!--begin: Form Wizard Step 1-->

                            <div class="kt-wizard-v2__content" data-ktwizard-type="step-content"
                                 data-ktwizard-state="current">
                                <div style="padding: 10px;background-color:lightgrey;">
                                    En signant ce formulaire de mandat, vous autorisez RDVavecVOUS.com à envoyer des instructions à
                                    votre banque pour débiter votre compte, et (B) votre banque à débiter votre compte conformément aux
                                    instructions de rdvavecvous.com.
                                    <br>Vous bénéficiez du droit d’être remboursé par votre banque selon les
                                    conditions décrites dans la convention que vous avez passée avec elle. Une demande de remboursement
                                    doit être présentée dans les 8 semaines suivant la date de débit de votre compte pour un prélèvement
                                    autorisé.
                                </div>
                                <div class="kt-heading kt-heading--md text-center" style="padding: 10px;background-color:lightgrey;">
                                    <h2>RDVAVECVOUSFR<?php echo e($creancier->ics); ?></h2>
                                </div>

                                <div class="kt-wizard-v2__review">
                                    <div class="kt-wizard-v2__review-item">
                                        <div class="kt-wizard-v2__review-title">
                                            Créancier
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                ICS
                                            </div>
                                            <input class="form-control" type="text" name="adresse"
                                                   value="<?php echo e($creancier->ics); ?>" disabled>
                                        </div>
                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                Nom du créancier
                                            </div>
                                            <div class="kt-wizard-v2__review-content">
                                                <input class="form-control" type="text" name="adresse"
                                                       value="<?php echo e($creancier->nom); ?>" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                Adresse ( N° et rue )
                                            </div>
                                            <div class="kt-wizard-v2__review-content">
                                                <input class="form-control" type="text" name="adresse"
                                                       value="<?php echo e($creancier->adress); ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                Code postal et ville
                                            </div>
                                            <div class="kt-wizard-v2__review-content">
                                                <input class="form-control" type="text" name="adresse"
                                                       value="<?php echo e($creancier->ville); ?> <?php echo e($creancier->cp); ?>" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                Pays
                                            </div>
                                            <div class="kt-wizard-v2__review-content">
                                                <input class="form-control" type="text" name="adresse"
                                                       value="<?php echo e($creancier->pays); ?>" disabled>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <br><br>

                                <div class="kt-wizard-v2__review">
                                    <div class="kt-wizard-v2__review-item">
                                        <div class="kt-wizard-v2__review-title">
                                            Débiteur
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                Nom du débiteur
                                            </div>
                                            <input class="form-control" type="text" name="nom"
                                                   value="<?php echo e($professionnel->nom); ?>">
                                        </div>
                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                Adresse ( N° et rue )
                                            </div>
                                            <div class="kt-wizard-v2__review-content">
                                                <input class="form-control" type="text" name="adress"
                                                       value="<?php echo e($professionnel->adresse); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                Ville
                                            </div>
                                            <div class="kt-wizard-v2__review-content">
                                                <input class="form-control" type="text" name="ville"
                                                       value="<?php echo e($professionnel->ville->name); ?>">
                                            </div>
                                        </div>

                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                Code postal
                                            </div>
                                            <div class="kt-wizard-v2__review-content">
                                                <input class="form-control" type="text" name="cp"
                                                       value="<?php echo e($professionnel->cp); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                Pays
                                            </div>
                                            <div class="kt-wizard-v2__review-content">
                                                <input class="form-control" type="text" name="pays"
                                                       value="France">
                                                <?php if($errors->has('pays')): ?>
                                                    <span class="" role="alert">
                                        <strong style="color: red;"><?php echo e($errors->first('pays')); ?></strong>
                                           </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                N° contrat sous-jacent
                                            </div>
                                            <div class="kt-wizard-v2__review-content">
                                                <input class="form-control" type="text" name="numero_jacent"
                                                       value="<?php echo e(strtoupper(substr($professionnel->nom,0,6))); ?><?php echo e($random); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="footer_validation">
                                    <div class="kt-wizard-v2__review-item col-md-6">
                                        <div class="kt-wizard-v2__review-title">
                                            N° de compte IBAN
                                        </div>
                                        <div class="kt-wizard-v2__review-content">
                                            <input class="form-control" type="password" name="iban" maxlength="20" value="<?php echo e(old('iban')); ?>">
                                        </div>
                                        <?php if($errors->has('iban')): ?>
                                            <span class="" role="alert">
                                        <strong style="color: red;"><?php echo e($errors->first('iban')); ?></strong>
                                           </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="kt-wizard-v2__review-item col-md-6">
                                        <div class="kt-wizard-v2__review-title">
                                            Code BIC
                                        </div>
                                        <div class="kt-wizard-v2__review-content">
                                            <input class="form-control" type="password" name="bic" maxlength="10" value="<?php echo e(old('bic')); ?>">
                                        </div>
                                        <?php if($errors->has('bic')): ?>
                                            <span class="" role="alert">
                                        <strong style="color: red;"><?php echo e($errors->first('bic')); ?></strong>
                                           </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                            </div>

                    </div>
                    <!--end: Form Wizard Step 1-->

                    <!--begin: Form Actions -->
                    <div class="kt-form__actions">
                        <button type="reset"
                                class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u">
                            Annuler
                        </button>
                        <button type="submit"
                                class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u">
                            Payer le RDV
                        </button>
                    </div>

                    <!--end: Form Actions -->
                    </form>

                    <!--end: Form Wizard Form-->
                </div>
            </div>
        </div>
    </div>
    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.front.professionnel.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rdvavecvbk/clients/resources/views/professionnel/etapes/sepa.blade.php ENDPATH**/ ?>