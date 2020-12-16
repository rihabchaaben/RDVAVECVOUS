
<?php $__env->startSection('content'); ?>
<style>
    .kt-badge.kt-badge--md  {
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
                            <a class="nav-link active" data-toggle="tab" href="#kt_widget2_tab1_content" role="tab"
                               aria-selected="false">
                                Nouvelle demande
                                &nbsp; <span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded"><?php echo e($newCnt); ?></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo e(route('pro.mes_demandes_attente')); ?>" role="tab"
                               aria-selected="true">
                                En attente
                                &nbsp;<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded"><?php echo e($attenteCnt); ?></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('pro.mes_demandes_accepte')); ?>" role="tab"
                               aria-selected="false">
                                Acceptée
                                &nbsp;<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded"><?php echo e($accepteCnt); ?></span>
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
                            <a class="nav-link" href="<?php echo e(route('pro.mes_demandes_accepte')); ?>" role="tab"
                               aria-selected="true">
                                Refusée
                                &nbsp; <span class="kt-badge kt-badge--danger kt-badge--md kt-badge--rounded"><?php echo e($refuseCnt); ?></span>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="kt-portlet__body">
                <div class="tab-content">
                    <div class="tab-pane active" id="kt_widget2_tab1_content">
                        <div class="kt-widget2">
                            <?php if($demandes->isEmpty() && $propositions->isEmpty()): ?>
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
                                        <th>Statut</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php $__currentLoopData = $demandes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $demande): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($demande->nom); ?></td>


                                            <td><?php echo e(\Carbon\Carbon::parse($demande->events->first()->start_date)->formatLocalized('%A %d %B %Y')); ?></td>
                                            <td><?php echo e($demande->description); ?></td>
                                           <?php if(auth()->user()->professionnel->isvip($demande->demandeur->id)==1): ?>
                                          <td ><?php echo e($demande->demandeur->nom); ?></td>
                                            <td  >
                                             <?php echo e($demande->demandeur->telephone); ?> </td>

                                          <?php else: ?>

                                          <td style="filter: blur(3px);" title="les données sont protégées">
                                          inconnu
                                            </td>
                                          <td style="filter: blur(3px);" title="les données sont protégées">

                                            0000000000

                                            <?php endif; ?>


                                            </td>

                                            <td ><?php echo e($demande->ville->name); ?></td>
                                            <td>

                                                <?php if(auth()->user()->professionnel->isvip($demande->demandeur->id)==1): ?>
<span class="kt-badge  kt-badge--warning kt-badge--inline kt-badge--pill"><i
    class="flaticon-star"></i>&nbsp;Exclusive</span>
<?php else: ?>                                                   <span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Nouveau</span>

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
                                                                <a href="<?php echo e(route('pro.demande_show',$demande->id)); ?>"
                                                                   class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                    <span class="kt-nav__link-text">En savoir plus</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php $__currentLoopData = $propositions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($prop->nom); ?></td>
                                            <td><?php echo e(\Carbon\Carbon::parse($prop->events->first()->start_date)->formatLocalized('%A %d %B %Y')); ?></td>
                                            <td><?php echo e($prop->description); ?></td>
                                            <td><?php echo e($prop->demandeur->nom); ?></td>
                                            <td><?php echo e($prop->demandeur->telephone); ?></td>

                                            <td><?php echo e($prop->ville->name); ?></td>
                                            <td>
                                                <span class="kt-badge  kt-badge--warning kt-badge--inline kt-badge--pill"><i
                                                            class="flaticon-star"></i>&nbsp;Exclusive</span>
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
                                                                <a href="<?php echo e(route('pro.demande_show',$prop->id)); ?>"
                                                                   class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                    <span class="kt-nav__link-text">Proposer RDV</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
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
<?php echo $__env->make('layouts.front.professionnel.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rdvavecvbk/clients/resources/views/professionnel/demandes/demandes.blade.php ENDPATH**/ ?>