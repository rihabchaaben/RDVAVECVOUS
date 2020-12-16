<?php $__env->startSection('content'); ?>

    <!-- begin:: Content -->

    <div class="kt-content kt-grid__item kt-grid__item--fluid">


        <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-lg-10">
                <!--Begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head bg-blue">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                <?php echo e($propositions->first()->demande->events->first()->titre); ?>

                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-notes">
                            <div class="kt-notes__items">
                                <?php $__currentLoopData = $propositions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$prop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                <div class="kt-notes__item">
                                    <a data-toggle="modal" data-target="#kt_modal_9<?php echo e($key); ?>"
                                                       class="kt-notes__title" style="cursor: pointer">
                                        <div class="kt-notes__media">
                                            <?php if($prop->professionnel->avatar): ?>

                                                <img class="kt-hidden-"
                                                     src="<?php echo e(asset('storage/'.$prop->professionnel->avatar)); ?>"
                                                     alt="image" style="height:50px">
                                            <?php else: ?>
                                                <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder"><?php echo e(ucfirst($prop->professionnel->nom[0])); ?></span>
                                            <?php endif; ?>
                                            <span class="kt-notes__icon kt-font-boldest kt-hidden">
                                    <i class="flaticon2-cup"></i>
                                </span>
                                            <h3 class="kt-notes__user kt-font-boldest kt-hidden">
                                                N S
                                            </h3>
                                        </div>
                                        <div class="kt-notes__content">
                                            <div class="kt-notes__section">
                                                <div class="kt-notes__info">
                                                   
                                                        <?php echo e($prop->professionnel->nom); ?> 
                                                        

                                                        <?php if($prop->professionnel->valide===1): ?>
                                                        <span style=" color:white;font-size: 1rem;margin-left: 13px;" class="kt-badge kt-badge--success kt-badge--inline" >   Vérifié  </span> 
                                                        <?php endif; ?>

                                                    
                                                    <span class="kt-notes__desc" style="margin-left: 7px;"> 
                                                    </span>
                                                    <?php if($prop->status == App\Proposition::ACCEPTE): ?>
                                                        <span  style=" color:white;font-size: 1rem;font-weight: bold;margin-left: 1px;"  class="kt-badge kt-badge--success kt-badge--inline">Accepté</span>
                                                    <?php else: ?>
                                                        <span style=" color:white;font-size: 1rem;margin-left: 1px;"  class="kt-badge kt-badge--info kt-badge--inline">Nouveau</span>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="kt-notes__dropdown">
                                                    <a href="#" class="btn btn-sm btn-icon-md btn-icon"
                                                       data-toggle="dropdown"
                                                       aria-expanded="false">
                                                        <i class="flaticon-more-1 kt-font-brand"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                         x-placement="bottom-end"
                                                         style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(759px, 33px, 0px);">
                                                        <ul class="kt-nav">
                                                            <li class="kt-nav__item">
                                                                <a href="<?php echo e(route('demandeur.proposition_status_update',['id'=>$prop->id,'status'=> App\Proposition::ACCEPTE])); ?>"
                                                                   class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                    <span class="kt-nav__link-text">Accepter</span>
                                                                </a>
                                                            </li>
                                                            <li class="kt-nav__item">
                                                                <a href="<?php echo e(route('demandeur.proposition_status_update',['id'=>$prop->id,'status'=> App\Proposition::REFUSE])); ?>"
                                                                   class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                    <span class="kt-nav__link-text">Refuser</span>
                                                                </a>
                                                            </li>
                                                            <?php if($prop->status == App\Proposition::ACCEPTE): ?>
                                                            <li class="kt-nav__item">
                                                                <a href="<?php echo e(route('demandeur.chat.show',[$prop,'#last_chat'])); ?>"
                                                                   class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                                    <span class="kt-nav__link-text">Chat</span>
                                                                </a>
                                                            </li>
                                                               <?php endif; ?>
                                                            <!--  -->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="kt-notes__body">


                                    <?php if($prop->messages->first()): ?><?php echo e($prop->messages->first()->message); ?><?php endif; ?>
                                </span>
                                        </div>
                                        </a>
                                    </div>
                                    <?php echo $__env->make('demandeur.demandes.view_pro_profile',['proposition'=>$prop,'key'=>$key], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                   
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::Portlet-->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front.demandeurs.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rdvavecvbk/clients/resources/views/demandeur/demandes/show.blade.php ENDPATH**/ ?>