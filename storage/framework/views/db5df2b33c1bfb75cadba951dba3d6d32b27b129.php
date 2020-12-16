<div class="modal fade" id="kt_modal_rdv_details<?php echo e($key); ?>" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Détaille du rendezvous</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="kt-demo__preview">
                    <div class="kt-portlet ">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    <?php $__currentLoopData = $proposition->demande->events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <i class="flaticon-calendar-with-a-clock-time-tools"></i>
                                        <span style="font-size:15px"><?php echo e($event->start_date->formatLocalized('%d %B %Y')); ?>

                                            De <?php echo e($event->start_date->format('H:i')); ?>

                                            À <?php echo e($event->end_date->format('H:i')); ?> </span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <!--begin::Accordion-->
                            <div class="accordion  accordion-toggle-arrow" id="accordionExample4">

                           
                                <div class="card">
                                    <div class="card-header" id="headingOne4">
                                        <div class="card-title" data-toggle="collapse" data-target="#collapseOne4"
                                             aria-expanded="true" aria-controls="collapseOne4">
                                            <i class="flaticon2-layers-1"></i> Titre de la proposition
                                        </div>
                                    </div>
                                    <div id="collapseOne4" class="collapse show" aria-labelledby="headingOne"
                                         data-parent="#accordionExample4">
                                        <div class="card-body">
                                            <?php echo e($proposition->demande->nom); ?>

                                        </div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-header" id="headingSix4">
                                        <div class="card-title collapsed" data-toggle="collapse"
                                             data-target="#collapseSix4" aria-expanded="false"
                                             aria-controls="collapseSix4">
                                            <i class="flaticon2-user"></i> Nom de Demandeur
                                        </div>
                                    </div>
                                    <div id="collapseSix4" class="collapse" aria-labelledby="headingThree1"
                                         data-parent="#accordionExample4">
                                        <div class="card-body">
                                        <?php echo e($proposition->demande->demandeur->nom); ?>

                                        </div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-header" id="headingTwo4">
                                        <div class="card-title collapsed" data-toggle="collapse"
                                             data-target="#collapseTwo4" aria-expanded="false"
                                             aria-controls="collapseTwo4">
                                            <i class="flaticon2-copy"></i> Description
                                        </div>
                                    </div>
                                    <div id="collapseTwo4" class="collapse" aria-labelledby="headingTwo1"
                                         data-parent="#accordionExample4">
                                        <div class="card-body">
                                            <?php echo e($proposition->demande->description); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree4">
                                        <div class="card-title collapsed" data-toggle="collapse"
                                             data-target="#collapseThree4" aria-expanded="false"
                                             aria-controls="collapseThree4">
                                            <i class="flaticon2-bell-alarm-symbol"></i> Catégorie
                                        </div>
                                    </div>
                                    <div id="collapseThree4" class="collapse" aria-labelledby="headingThree1"
                                         data-parent="#accordionExample4">
                                        <div class="card-body">
                                            <?php echo e($proposition->demande->categorie->label); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour4">
                                        <div class="card-title collapsed" data-toggle="collapse"
                                             data-target="#collapseFour4" aria-expanded="false"
                                             aria-controls="collapseFour4">
                                            <i class="flaticon2-map"></i> Adresse
                                        </div>
                                    </div>
                                    <div id="collapseFour4" class="collapse" aria-labelledby="headingThree1"
                                         data-parent="#accordionExample4">
                                        <div class="card-body">
                                            <?php echo e($proposition->demande->adresse); ?><br/>
                                            <?php echo e($proposition->demande->cp); ?><br/>
                                            <?php echo e(isset($proposition->demande->ville) ? $proposition->demande->ville->name : ''); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive4">
                                        <div class="card-title collapsed" data-toggle="collapse"
                                             data-target="#collapseFive4" aria-expanded="false"
                                             aria-controls="collapseFive4">
                                            <i class="flaticon2-phone"></i> Téléphone
                                        </div>
                                    </div>
                                    <div id="collapseFive4" class="collapse" aria-labelledby="headingThree1"
                                         data-parent="#accordionExample4">
                                        <div class="card-body">
                                            <?php echo e($proposition->demande->demandeur->telephone); ?>

                                        </div>
                                    </div>
                                </div>




                               
                            </div>
                            <!--end::Accordion-->
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/rdvavecvbk/clients/resources/views/partials/rdv_details.blade.php ENDPATH**/ ?>