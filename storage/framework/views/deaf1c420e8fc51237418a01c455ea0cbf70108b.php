<?php $__env->startSection('content'); ?>
    <link href="<?php echo e(asset('assets/app/custom/wizard/wizard-v2.default.css')); ?>" rel="stylesheet" type="text/css"/>

    <style>
        .kt-badge.kt-badge--md {
            height: 18px;
            width: 16px;
        }
    </style>
    <!-- begin:: Content -->

    <div class="kt-content kt-grid__item kt-grid__item--fluid">
        
            

                
                    
                

                

                
            
                                    
            

                

            

        
        <div class="col" id="barre">
                    <div class="alert alert-info fade show" role="alert">
                        <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                        <div class="alert-text"> 
                            
                            <p style="font-size: 1.2rem;font-weight: bold;">Les lignes en bleu représentent les demandeurs qui ont changé les RDVs.</p>
                             
                        </div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="la la-close"></i></span>
                            </button>
                        </div>
                    </div>
         </div>

        <div class="kt-portlet kt-portlet--tabs kt-portlet--fluid">
            <div class="kt-portlet__head bg-blue">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        ETAT DE MES DEMANDES
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand colors-item" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('pro.mes_demandes')); ?>" role="tab"
                               aria-selected="false">
                                Nouvelle demande
                                &nbsp; <span
                                        class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded"><?php echo e($newCnt); ?></span>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo e(route('pro.mes_demandes_attente')); ?>" role="tab"
                               aria-selected="true">
                                En attente
                                &nbsp;<span class="kt-badge kt-badge--warning kt-badge--md"><?php echo e($attenteCnt); ?></span>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('pro.mes_demandes_accepte')); ?>" role="tab"
                               aria-selected="false">
                                Acceptée
                                &nbsp;<span class="kt-badge kt-badge--brand kt-badge--md"><?php echo e($accepteCnt); ?></span>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#kt_widget2_tab2_content" role="tab"
                               aria-selected="false">
                                Validée
                                &nbsp;<span
                                        class="kt-badge kt-badge--danger kt-badge--md kt-badge--rounded"><?php echo e($valideCnt); ?></span>

                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo e(route('pro.mes_demandes_refuse')); ?>" role="tab"
                               aria-selected="true">
                                Refusée
                                &nbsp; <span
                                        class="kt-badge kt-badge--danger kt-badge--md kt-badge--rounded"><?php echo e($refuseCnt); ?></span>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="kt-portlet__body">
                <div class="tab-content">
                    <div class="tab-pane active" id="kt_widget2_tab2_content">
                        <div class="kt-widget2">
                            <?php if($propositions->isEmpty()): ?>
                                <p>AUCUNE DEMANDE</p>
                            <?php else: ?>
                                <table class="table table-striped" id="kt_table_1">
                                    <thead>
                                    <tr>

                                        <th>Titre</th>
                                        <th>Date RDV</th>
                                        <th>Descriptif</th>
                                        <th>Nom</th>
                                        <th>Téléphone</th>
                                        <th>Ville</th>
                                        <th>Coupon</th>
                                        <th>Statut</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php $__currentLoopData = $propositions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$proposition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                         <?php if($proposition->demande->events->first()->created_at!=$proposition->demande->events->first()->updated_at): ?>
                                             <tr
                                             style="background-color:#d9e8f7;" >
                                            <td> <img  width="20px" src="https://lh3.googleusercontent.com/proxy/ji4kWAo-3qHrzvHGS7ddOcm0ZFyYXVEVBullnOxOWHAtq9Uzu8Sz7UDBEkcPtwNb0__hGucwevG9M5C5cBdlKZ4WRzFcJdP8x9o3Jcr4tVAmr_Ubdx4SqPA99OIE0sg" alt="">   <?php echo e($proposition->demande->nom); ?></td>
                                           <style>
                                               #barre{
                                                   display: block;
                                               }
                                           </style>


                                            <?php else: ?>

                                            <tr>
                                            <td>   <?php echo e($proposition->demande->nom); ?></td>
                                           <?php endif; ?>
                                            <td><?php echo e(\Carbon\Carbon::parse($proposition->demande->events->first()->start_date)->formatLocalized('%A %d %B %Y')); ?></td>
                                            <td><?php echo e($proposition->demande->description); ?></td>
                                            <td ><?php echo e($proposition->demande->demandeur->nom); ?></td>

                                            <td><?php echo e($proposition->demande->demandeur->telephone); ?></td>
                                            <td><?php echo e($proposition->demande->ville->name); ?></td>
                                            <?php if(isset($proposition->coupon)): ?>
                                             <td><?php echo e($proposition->coupon); ?></td>
                                             <?php else: ?>  <td>------</td>
                                             <?php endif; ?>
                                            <td>
                                                <span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Paiment effectué</span>
                                            </td>
                                            <td>
                                                <div class="dropdown dropdown-inline">
                                                    <button type="button"
                                                            class="btn btn-clean btn-sm btn-icon btn-icon-md"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                        <i class="flaticon-more-1"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                         x-placement="bottom-end"
                                                         style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
                                                        <ul class="kt-nav">
                                                            <li class="kt-nav__item">
                                                                <a data-toggle="modal" data-target="#kt_modal_rdv_details<?php echo e($key); ?>"
                                                                   class="kt-nav__link">
                                                                   <i class="kt-nav__link-icon flaticon2-search"></i>
                                                                   <span class="kt-nav__link-text">Consulter RDV</span>
                                                                </a>
                                                            </li>
                                                            <li class="kt-nav__item">
                                                                <a href="<?php echo e(route('pro.chat.show',[$proposition->id,'#last_chat'])); ?>"
                                                                   class="kt-nav__link">
                                                                   <i class=" kt-nav__link-icon flaticon2-mail kt-font-warning"></i>
                                                                   <span class="kt-nav__link-text">Chat</span>
                                                                </a>
                                                            </li>
                                                            <li class="kt-nav__item">
                                                                <a href="<?php echo e(route('pro.mes_devis_create',$proposition->id)); ?>"
                                                                   class="kt-nav__link">
                                                                   <i class="kt-nav__link-icon flaticon-settings kt-font-danger"></i>
                                                                   <span class="kt-nav__link-text">Créér le devis</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <?php echo $__env->make('partials.rdv_details',['proposition'=>$proposition,'key'=>$key], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php $__env->startSection('script'); ?>
    <!--begin::Page Scripts(used by this page) -->
    <script src="../assets/app/custom/general/crud/metronic-datatable/base/html-table.js"
            type="text/javascript"></script>

    <!--end::Page Scripts -->
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.professionnel.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rdvavecvbk/clients/resources/views/professionnel/demandes/demandes_valider.blade.php ENDPATH**/ ?>