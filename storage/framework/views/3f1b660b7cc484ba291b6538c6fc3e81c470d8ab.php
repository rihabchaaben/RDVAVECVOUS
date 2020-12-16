<?php $__env->startSection('content'); ?>
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
        <!-- begin:: Content Head -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">


        </div>
        <!-- end:: Content Head -->
        <!-- begin:: Content -->
        <div class="kt-subheader-search ">
            
        </div>
        <br><br>
        <div class="kt-container  kt-grid__item kt-grid__item--fluid">

            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                       
                    </div>
                    
                </div>
                <div class="kt-portlet__body">

                    <div class="kt-section">
                        <div class="kt-section__content">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Etat</th>
                                     
                                    <th>Nom</th>
                                    <th>Mail </th>
                                    <th>Telephone</th>
                                     <th>Adresse </th>  
                                    <th>Ville</th>
                                    <th>Devis</th>
                                  

                                 </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $propositions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proposition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>

                                        

                                         <?php if($proposition->status===0): ?>
                                        <th scope="row">NV</th>

                                        <?php elseif($proposition->status===1): ?>
                                        <th scope="row">R</th>
                                        <?php elseif($proposition->status===2): ?>
                                        <th scope="row">ACC</th>
                                        <?php elseif($proposition->status===3): ?>
                                        <th scope="row">EN A</th>
                                        <?php elseif($proposition->status===4): ?>
                                        <th scope="row">ANN</th>
                                        <?php elseif($proposition->status===5): ?>
                                        <th scope="row">DV</th>
                                        <?php elseif($proposition->status===6): ?>
                                        <th scope="row">FC</th>

                                        <?php endif; ?>
                                       
                                        <td><?php echo e($proposition->professionnel->nom); ?></td>

                                         <td><?php echo e($proposition->professionnel->user->email); ?></td>

                                        <td><?php echo e($proposition->professionnel->telephone); ?></td>
                                        <td><?php echo e($proposition->professionnel->adresse); ?></td>
                                        <td><?php echo e($proposition->professionnel->ville->name); ?>,<?php echo e($proposition->professionnel->cp); ?></td>
                                         <td>
                                         <?php if($proposition->status===5): ?>
                                         Oui
                                         <?php else: ?> 
                                         Non
                                         <?php endif; ?> 
                                         
                                         </td>
                                        
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rdvavecvbk/clients/resources/views/admin/demandes/proposition.blade.php ENDPATH**/ ?>