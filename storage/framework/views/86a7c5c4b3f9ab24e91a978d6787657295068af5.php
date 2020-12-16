<?php $__env->startSection('content'); ?>

    <style>
        .kt-badge.kt-badge--md {
            height: 18px;
            width: 16px;
        }
    </style>
    <!-- begin:: Content -->

    <div class="kt-content kt-grid__item kt-grid__item--fluid">
        
            

                
                    
                

                

                
            
                                    
            

                

            

        


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
                            <a class="nav-link active" data-toggle="tab" href="#kt_widget2_tab2_content" role="tab"
                               aria-selected="false">
                                Acceptée
                                &nbsp;<span class="kt-badge kt-badge--brand kt-badge--md"><?php echo e($accepteCnt); ?></span>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo e(route('pro.mes_demandes_valide')); ?>" role="tab"
                               aria-selected="true">
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
                                        <tr>
                                            <td><?php echo e($proposition->demande->nom); ?></td>
                                            <td><?php echo e(\Carbon\Carbon::parse($proposition->demande->events->first()->start_date)->formatLocalized('%A %d %B %Y')); ?></td>
                                            <td><?php echo e($proposition->demande->description); ?></td>
                                            <td ><?php echo e($proposition->demande->demandeur->nom); ?></td>

                                           <?php if($ispaye==1 or auth()->user()->professionnel->isvip($proposition->demande->demandeur->id)==1): ?>
                                             <td><?php echo e($proposition->demande->demandeur->telephone); ?></td>
                                             <td><?php echo e($proposition->demande->ville->name); ?></td>
                                             <?php if(isset($proposition->coupon)): ?>
                                             <td><?php echo e($proposition->coupon); ?></td>
                                             <?php else: ?>  <td>------</td>
                                            <?php endif; ?>
                                            <?php else: ?>
                                            <td style="filter: blur(3px);">000000000000</td>
                                            <td style="filter: blur(3px);">XXXXXXXXXXXXXXX</td>
                                            <?php if(isset($proposition->coupon)): ?>
                                             <td><?php echo e($proposition->coupon); ?></td>
                                             <?php else: ?>  <td>------</td>
                                             <?php endif; ?>
                                            <?php endif; ?>


                                            <td>
<?php if(auth()->user()->professionnel->isvip($proposition->demande->demandeur->id)==1): ?>
<span class="kt-badge  kt-badge--warning kt-badge--inline kt-badge--pill"><i
    class="flaticon-star"></i>&nbsp;Exclusive</span>
<?php else: ?>   <span
class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Accepte</span>

<?php endif; ?>

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

                                                            <?php if($ispaye==1 || auth()->user()->professionnel->isvip($proposition->demande->demandeur->id)==1): ?>


                                                            <a data-toggle="modal" data-target="#kt_modal_rdv_details<?php echo e($key); ?>"
                                                                   class="kt-nav__link">
                                                                   <i class="kt-nav__link-icon flaticon2-search"></i>
                                                                    <span class="kt-nav__link-text">Consulter RDV</span>
                                                                </a>

                                                           <?php else: ?>
                                                                <a href="<?php echo e(route('pro.devi_show',$proposition->id)); ?>"
                                                                   class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                    <span class="kt-nav__link-text">Payer RDV</span>
                                                                </a>
                                                            <?php endif; ?>

                                                            </li>
                                                            <li class="kt-nav__item">
                                                                <a href="<?php echo e(route('pro.chat.show',[$proposition->id,'#last_chat'])); ?>"
                                                                   class="kt-nav__link">
                                                                   <i class=" kt-nav__link-icon flaticon2-mail kt-font-warning"></i>
                                                                   <span class="kt-nav__link-text">Chat</span>
                                                                </a>
                                                            </li>



                                                            <?php if($ispaye==1 || auth()->user()->professionnel->isvip($proposition->demande->demandeur->id)==1): ?>

                                                            <li class="kt-nav__item">
                                                                <a href="<?php echo e(route('pro.mes_devis_create',$proposition->id)); ?>"
                                                                   class="kt-nav__link">
                                                                   <i class="kt-nav__link-icon flaticon-settings kt-font-danger"></i>
                                                                    <span class="kt-nav__link-text">Créér le devis</span>
                                                                </a>
                                                            </li>
                                                          <?php else: ?>
                                                            <li class="kt-nav__item">
                                                                <a href="<?php echo e(route('pro.proposition_status_update',['id'=>$proposition->id,'status'=> App\Proposition::ANNULER])); ?>"
                                                                   class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                    <span class="kt-nav__link-text">Annuler</span>
                                                                </a>
                                                            </li>
                                                            <?php endif; ?>




                                                        </ul>
                                                    </div>
                                                </div>

                                                <?php echo $__env->make('partials.rdv_details',['proposition'=>$proposition,'key'=>$key], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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

<?php $__env->startSection('script'); ?>
    <!--begin::Page Scripts(used by this page) -->
    <script src="../assets/app/custom/general/crud/metronic-datatable/base/html-table.js"
            type="text/javascript"></script>

    <!--end::Page Scripts -->
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.professionnel.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rdvavecvbk/clients/resources/views/professionnel/demandes/demandes_accepter.blade.php ENDPATH**/ ?>