<?php $__env->startSection('content'); ?>
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch">
        <div class="kt-container kt-body  kt-grid kt-grid--hor" id="kt_body">
            <div class="row row-no-padding row-col-separator-xl" style="background-color:white;margin-bottom:20px">

                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::Total Profit-->
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title">
                                    Nbre de demandeurs inscrits
                                </h4>
                                <span class="kt-widget24__desc">
					            Demandeurs inscrits
					        </span>
                            </div>

                            <span class="kt-widget24__stats kt-font-brand">
					        <?php echo e($nbrInscris); ?>

					    </span>
                        </div>

                        <div class="progress progress--sm">
                            <div class="progress-bar kt-bg-brand" role="progressbar" style="width: 78%;"
                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <div class="kt-widget24__action">
						<span class="kt-widget24__change">
							Change
						</span>
                            <span class="kt-widget24__number">
							78%
					    </span>
                        </div>
                    </div>
                    <!--end::Total Profit-->
                </div>

                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Feedbacks-->
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title">
                                    Nombre de demandes
                                </h4>
                                <span class="kt-widget24__desc">
					            Demandes
					        </span>
                            </div>

                            <span class="kt-widget24__stats kt-font-warning">
					       <?php echo e($nbrDemandes); ?>

					    </span>
                        </div>

                        <div class="progress progress--sm">
                            <div class="progress-bar kt-bg-warning" role="progressbar" style="width: 84%;"
                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <div class="kt-widget24__action">
						<span class="kt-widget24__change">
							Change
						</span>
                            <span class="kt-widget24__number">
							84%
					    </span>
                        </div>
                    </div>
                    <!--end::New Feedbacks-->
                </div>

                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Orders-->
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title">
                                    Nbre de professionel inscrits
                                </h4>
                                <span class="kt-widget24__desc">
					            Professionel
					        </span>
                            </div>

                            <span class="kt-widget24__stats kt-font-danger">
					        <?php echo e($nbrPro); ?>

					    </span>
                        </div>

                        <div class="progress progress--sm">
                            <div class="progress-bar kt-bg-danger" role="progressbar" style="width: 69%;"
                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <div class="kt-widget24__action">
						<span class="kt-widget24__change">
							Change
						</span>
                            <span class="kt-widget24__number">
							69%
					    </span>
                        </div>
                    </div>
                    <!--end::New Orders-->
                </div>

                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Users-->
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title">
                                    Nbre de rdv en attente
                                </h4>
                                <span class="kt-widget24__desc">
					            Rdv
					        </span>
                            </div>

                            <span class="kt-widget24__stats kt-font-success">
					        <?php echo e($nbrRdvAttente); ?>

					    </span>
                        </div>

                        <div class="progress progress--sm">
                            <div class="progress-bar kt-bg-success" role="progressbar" style="width: 90%;"
                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <div class="kt-widget24__action">
						<span class="kt-widget24__change">
							Change
						</span>
                            <span class="kt-widget24__number">
							90%
					    </span>
                        </div>
                    </div>
                    <!--end::New Users-->
                </div>

            </div>
            <div class="row row-no-padding row-col-separator-xl" style="background-color:white;margin-bottom:20px">

                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::Total Profit-->
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title">
                                    Nombre devis
                                </h4>
                                <span class="kt-widget24__desc">
					            Nombre de devis
					        </span>
                            </div>

                            <span class="kt-widget24__stats kt-font-brand">
					        <?php echo e($nbrDevis); ?>

					    </span>
                        </div>

                        <div class="progress progress--sm">
                            <div class="progress-bar kt-bg-brand" role="progressbar" style="width: 78%;"
                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <div class="kt-widget24__action">
						<span class="kt-widget24__change">
							Change
						</span>
                            <span class="kt-widget24__number">
							78%
					    </span>
                        </div>
                    </div>
                    <!--end::Total Profit-->
                </div>

                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Feedbacks-->
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title">
                                    Nbre de rdv proposés
                                </h4>
                                <span class="kt-widget24__desc">
					            Nbre de rdv proposés/artisans/catégories
					        </span>
                            </div>

                            <span class="kt-widget24__stats kt-font-warning">
					       <?php echo e($nbrPropose); ?>

					    </span>
                        </div>

                        <div class="progress progress--sm">
                            <div class="progress-bar kt-bg-warning" role="progressbar" style="width: 84%;"
                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <div class="kt-widget24__action">
						<span class="kt-widget24__change">
							Change
						</span>
                            <span class="kt-widget24__number">
							84%
					    </span>
                        </div>
                    </div>
                    <!--end::New Feedbacks-->
                </div>

                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Orders-->
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title">
                                    Nbre de rdv accéptés
                                </h4>
                                <span class="kt-widget24__desc">
					            Nbre de rdv accéptés/artisans
					        </span>
                            </div>

                            <span class="kt-widget24__stats kt-font-danger">
					        <?php echo e($nbrRdvAccepte); ?>

					    </span>
                        </div>

                        <div class="progress progress--sm">
                            <div class="progress-bar kt-bg-danger" role="progressbar" style="width: 69%;"
                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <div class="kt-widget24__action">
						<span class="kt-widget24__change">
							Change
						</span>
                            <span class="kt-widget24__number">
							69%
					    </span>
                        </div>
                    </div>
                    <!--end::New Orders-->
                </div>

                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Users-->
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title">
                                    Nbre de rdv annulés
                                </h4>
                                <span class="kt-widget24__desc">
					            Nbre de rdv annulés/artisans
					        </span>
                            </div>

                            <span class="kt-widget24__stats kt-font-success">
					        <?php echo e($nbrRdvAnnule); ?>

					    </span>
                        </div>

                        <div class="progress progress--sm">
                            <div class="progress-bar kt-bg-success" role="progressbar" style="width: 90%;"
                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <div class="kt-widget24__action">
						<span class="kt-widget24__change">
							Change
						</span>
                            <span class="kt-widget24__number">
							90%
					    </span>
                        </div>
                    </div>
                    <!--end::New Users-->
                </div>

            </div>

            <div class="row">
                <div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">
                    <!--begin:: Widgets/Finance Summary-->
                    <div class="kt-portlet kt-portlet--height-fluid">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    CHIFFRE D AFFAIRES DEVIS DERNIER MOIS
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <div class="kt-widget12">
                                <div class="kt-widget12__content">
                                    <div class="kt-widget12__item">
                                        <div class="kt-widget12__info">
                                            <span class="kt-widget12__desc">Le Gains de Devis</span>
                                            <span class="kt-widget12__value">$<?php echo e($sumDevisLast); ?></span>
                                        </div>

                                        <div class="kt-widget12__info">
                                            <span class="kt-widget12__desc">Pour le mois</span>
                                            <span class="kt-widget12__value"><?php echo e($deviLastMonthEarn); ?></span>
                                        </div>
                                    </div>
                                    <div class="kt-widget12__item">
                                        <div class="kt-widget12__info">
                                            <span class="kt-widget12__desc">Le Gains de Devis</span>
                                            <span class="kt-widget12__value">$3,800,000</span>
                                        </div>

                                        <div class="kt-widget12__info">
                                            <span class="kt-widget12__desc">Pour le mois</span>
                                            <span class="kt-widget12__value">Grossery</span>
                                        </div>
                                    </div>
                                    <div class="kt-widget12__item">

                                        <div class="kt-widget12__info">
                                            <span class="kt-widget12__desc">Satisfication</span>
                                            <span class="kt-widget12__progress">
							<div class="progress progress-sm">
								<div class="progress-bar kt-bg-brand" role="progressbar" style="width: 63%"
                                     aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="kt-widget12__stat">
								63%
							</span>
						</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end:: Widgets/Finance Summary-->
                </div>
                <div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">
                    <!--begin:: Widgets/Finance Summary-->
                    <div class="kt-portlet kt-portlet--height-fluid">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    CHIFFRE D AFFAIRES FACTURES DERNIER MOIS
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <div class="kt-widget12">
                                <div class="kt-widget12__content">
                                    <div class="kt-widget12__item">
                                        <div class="kt-widget12__info">
                                            <span class="kt-widget12__desc">Le Gains de Devis</span>
                                            <span class="kt-widget12__value">$<?php echo e($sumDevisLast); ?></span>
                                        </div>

                                        <div class="kt-widget12__info">
                                            <span class="kt-widget12__desc">Pour le mois</span>
                                            <span class="kt-widget12__value"><?php echo e($deviLastMonthEarn); ?></span>
                                        </div>
                                    </div>
                                    <div class="kt-widget12__item">
                                        <div class="kt-widget12__info">
                                            <span class="kt-widget12__desc">Le Gains de Devis</span>
                                            <span class="kt-widget12__value">$3,800,000</span>
                                        </div>

                                        <div class="kt-widget12__info">
                                            <span class="kt-widget12__desc">Pour le mois</span>
                                            <span class="kt-widget12__value">Grossery</span>
                                        </div>
                                    </div>
                                    <div class="kt-widget12__item">

                                        <div class="kt-widget12__info">
                                            <span class="kt-widget12__desc">Satisfication</span>
                                            <span class="kt-widget12__progress">
							<div class="progress progress-sm">
								<div class="progress-bar kt-bg-success" role="progressbar" style="width: 63%"
                                     aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="kt-widget12__stat">
								63%
							</span>
						</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end:: Widgets/Finance Summary-->    </div>
                <div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">
                    <!--begin:: Widgets/Finance Summary-->
                    <div class="kt-portlet kt-portlet--height-fluid">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    CHIFFRE D AFFAIRES TOTAL DERNIER MOIS
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <div class="kt-widget12">
                                <div class="kt-widget12__content">
                                    <div class="kt-widget12__item">
                                        <div class="kt-widget12__info">
                                            <span class="kt-widget12__desc">Le Gains de Devis</span>
                                            <span class="kt-widget12__value">$<?php echo e($sumDevisLast); ?></span>
                                        </div>

                                        <div class="kt-widget12__info">
                                            <span class="kt-widget12__desc">Pour le mois</span>
                                            <span class="kt-widget12__value"><?php echo e($deviLastMonthEarn); ?></span>
                                        </div>
                                    </div>
                                    <div class="kt-widget12__item">
                                        <div class="kt-widget12__info">
                                            <span class="kt-widget12__desc">Le Gains de Devis</span>
                                            <span class="kt-widget12__value">$3,800,000</span>
                                        </div>

                                        <div class="kt-widget12__info">
                                            <span class="kt-widget12__desc">Pour le mois</span>
                                            <span class="kt-widget12__value">Grossery</span>
                                        </div>
                                    </div>
                                    <div class="kt-widget12__item">

                                        <div class="kt-widget12__info">
                                            <span class="kt-widget12__desc">Satisfication</span>
                                            <span class="kt-widget12__progress">
							<div class="progress progress-sm">
								<div class="progress-bar kt-bg-danger" role="progressbar" style="width: 63%"
                                     aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="kt-widget12__stat">
								63%
							</span>
						</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end:: Widgets/Finance Summary-->    </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rdvavecvbk/clients/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>