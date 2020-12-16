<?php $__env->startSection('content'); ?>
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
        <!-- begin:: Content Head -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">


        </div>
        <!-- end:: Content Head -->
        <!-- begin:: Content -->
        <div class="kt-subheader-search ">
            <div class="kt-container  kt-container--fluid ">
                <h3 class="kt-subheader-search__title">
                    Liste des Demandes
                    <span class="kt-subheader-search__desc">Liste des Demandes effectué dans notre platfort</span>
                </h3>
                <form class="kt-form">
                    <div class="kt-grid kt-grid--desktop kt-grid--ver-desktop">
                        <div class="kt-grid__item kt-grid__item--middle">
                            <div class="row kt-margin-r-10">
                                <div class="col-lg-6">
                                    <div class="kt-input-icon kt-input-icon--pill kt-input-icon--right">
                                        <input type="text" class="form-control form-control-pill"
                                               placeholder="Booking Number">
                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i
                                                        class="la la-puzzle-piece"></i></span></span>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="kt-input-icon kt-input-icon--pill kt-input-icon--right">
                                        <input type="text" class="form-control form-control-pill" placeholder="From">
                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i
                                                        class="la la-calendar-check-o"></i></span></span>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="kt-input-icon kt-input-icon--pill kt-input-icon--right">
                                        <input type="text" class="form-control form-control-pill" placeholder="To">
                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i
                                                        class="la la-calendar-check-o"></i></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-grid__item kt-grid__item--middle">
                            <div class="kt-margin-top-20 kt--visible-tablet-and-mobile"></div>
                            <button type="button"
                                    class="btn btn-pill btn-upper btn-bold btn-font-sm kt-subheader-search__submit-btn">
                                Recherche
                            </button>

                            &nbsp
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <br><br>
        <div class="kt-container  kt-grid__item kt-grid__item--fluid">

            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                        <h3 class="kt-portlet__head-title">
                            Liste des demandes
                            <small>Liste des demandes inscris dans notre platform</small>
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle"
                                    onclick="javascript:xport.toCSV('testTable');">
                                        <i class="la la-download"></i> Export
                                    </button>

                                </div>
                                &nbsp;
                                <a href="<?php echo e(route('admin.demandes.create')); ?>"
                                   class="btn btn-brand btn-elevate btn-icon-sm">
                                    <i class="la la-plus"></i>
                                    Ajouter une demande
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">

                    <div class="kt-section">
                        <div class="kt-section__content">
                            <table class="table table-striped"  id="testTable">
                                <thead>
                                <tr>
                                    <th>Etat</th>

                                    <th>Titre</th>
                                  <th>Date </th>
                                    <th>Catégorie</th>
                                    <th>Nom</th>
                                    <th>Mail</th>
                                    <th>Tele</th>
                                    <th>Ville</th>
                                     <th>cp</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $demandes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$demande): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <?php if(isset($demande->demandeur) && isset($demande->demandeur->user)): ?> 
                                    
                                    
                                    <tr>



                                         <?php if($demande->getDemandeStatus($demande->id)==1): ?>
                                        <th scope="row">EN A</th>

                                        <?php elseif($demande->getDemandeStatus($demande->id)==2): ?>
                                        <th scope="row">ACC</th>
                                        <?php elseif($demande->getDemandeStatus($demande->id)==3): ?>
                                        <th scope="row">NEW</th>
                                        <?php elseif($demande->getDemandeStatus($demande->id)==4): ?>
                                        <th scope="row">R  </th>
                                         

                                        <?php endif; ?>

                                        <td><?php echo e($demande->nom); ?></td>
                                         <?php if($demande->events->count()>0): ?>
                                         <td><?php echo e($demande->events->first()->start_date->format('Y.m.d')); ?></td>
                                         <?php else: ?> <td> <span class="badge badge-danger">ici le probleme</span> </td>
                                          <?php endif; ?>
                                        <td><?php echo e($demande->categorie->label); ?></td>
                                        <td><?php echo e($demande->demandeur->nom); ?></td>
                                        <td><?php echo e($demande->demandeur->user->email); ?></td>
                                        <td><?php echo e($demande->demandeur->telephone); ?></td>
                                        <td><?php echo e($demande->ville->name); ?></td>
                                        <td><?php echo e($demande->cp); ?></td>
                                         <td>
                                            <div class="dropdown dropdown-inline">
                                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                    <i class="flaticon-more-1"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end"
                                                     style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
                                                    <ul class="kt-nav">
                                                        <li class="kt-nav__item">
                                                            <a href="<?php echo e(route('admin.demandes.prpositions',$demande->id)); ?>" class="kt-nav__link">
                                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                <span class="kt-nav__link-text">Liste des propositions</span>
                                                            </a>
                                                        </li>

                                                        <li class="kt-nav__item">
                                                            <a data-toggle="modal" data-target="#kt_modal_rdv_details<?php echo e($key); ?>" class="kt-nav__link">
                                                                <i class="kt-nav__link-icon flaticon2-search-1"></i>
                                                                <span class="kt-nav__link-text">Plus de details</span>
                                                            </a>
                                                        </li>



                                                        <form action="<?php echo e(route('admin.demandes.destroy',$demande->id)); ?>"
                                                              method="POST" id="delete_demande">

                                                            <li class="kt-nav__item">
                                                                <a href="#"
                                                                   class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                    <span class="kt-nav__link-text">Supprimer</span>
                                                                </a>
                                                                <?php echo method_field('DELETE'); ?>
                                                                <?php echo csrf_field(); ?>
                                                            </li>
                                                        </form>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php echo $__env->make('partials.details',['demande'=>$demande,'key'=>$key], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                  
                                    <?php endif; ?>
                                  
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>



    <script>

var xport = {
  _fallbacktoCSV: true,
  toXLS: function(tableId, filename) {
    this._filename = (typeof filename == 'undefined') ? tableId : filename;

    //var ieVersion = this._getMsieVersion();
    //Fallback to CSV for IE & Edge
    if ((this._getMsieVersion() || this._isFirefox()) && this._fallbacktoCSV) {
      return this.toCSV(tableId);
    } else if (this._getMsieVersion() || this._isFirefox()) {
      alert("Not supported browser");
    }

    //Other Browser can download xls
    var htmltable = document.getElementById(tableId);
    var html = htmltable.outerHTML;

    this._downloadAnchor("data:application/vnd.ms-excel" + encodeURIComponent(html), 'xls');
  },
  toCSV: function(tableId, filename) {
    this._filename = (typeof filename === 'undefined') ? tableId : filename;
    // Generate our CSV string from out HTML Table
    var csv = this._tableToCSV(document.getElementById(tableId));
    // Create a CSV Blob
    var blob = new Blob([csv], { type: "text/csv" });

    // Determine which approach to take for the download
    if (navigator.msSaveOrOpenBlob) {
      // Works for Internet Explorer and Microsoft Edge
      navigator.msSaveOrOpenBlob(blob, this._filename + ".csv");
    } else {
      this._downloadAnchor(URL.createObjectURL(blob), 'csv');
    }
  },
  _getMsieVersion: function() {
    var ua = window.navigator.userAgent;

    var msie = ua.indexOf("MSIE ");
    if (msie > 0) {
      // IE 10 or older => return version number
      return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)), 10);
    }

    var trident = ua.indexOf("Trident/");
    if (trident > 0) {
      // IE 11 => return version number
      var rv = ua.indexOf("rv:");
      return parseInt(ua.substring(rv + 3, ua.indexOf(".", rv)), 10);
    }

    var edge = ua.indexOf("Edge/");
    if (edge > 0) {
      // Edge (IE 12+) => return version number
      return parseInt(ua.substring(edge + 5, ua.indexOf(".", edge)), 10);
    }

    // other browser
    return false;
  },
  _isFirefox: function(){
    if (navigator.userAgent.indexOf("Firefox") > 0) {
      return 1;
    }

    return 0;
  },
  _downloadAnchor: function(content, ext) {
      var anchor = document.createElement("a");
      anchor.style = "display:none !important";
      anchor.id = "downloadanchor";
      document.body.appendChild(anchor);

      // If the [download] attribute is supported, try to use it

      if ("download" in anchor) {
        anchor.download = this._filename + "." + ext;
      }
      anchor.href = content;
      anchor.click();
      anchor.remove();
  },
  _tableToCSV: function(table) {
    // We'll be co-opting `slice` to create arrays
    var slice = Array.prototype.slice;

    return slice
      .call(table.rows)
      .map(function(row) {
        return slice
          .call(row.cells)
          .map(function(cell) {
            return '"t"'.replace("t", cell.textContent);
          })
          .join(",");
      })
      .join("\r\n");
  }
};

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rdvavecvbk/clients/resources/views/admin/demandes/index.blade.php ENDPATH**/ ?>