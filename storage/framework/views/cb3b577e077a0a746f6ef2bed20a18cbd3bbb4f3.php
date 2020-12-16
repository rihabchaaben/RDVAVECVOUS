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
                    Liste des Professionnels
                    <span class="kt-subheader-search__desc">Liste des Demandeur effectué dans notre platfort</span>
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
                            Liste des professionels
                            <small>Liste des demandeurs inscris dans notre platform</small>
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
                                <a href="<?php echo e(route('admin.professionnel_create')); ?>"
                                   class="btn btn-brand btn-elevate btn-icon-sm">
                                    <i class="la la-plus"></i>
                                    Ajouter un professionel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">

                    <div class="kt-section">
                        <div class="kt-section__content">
                            <table class="table table-striped"id="testTable"  >
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Tél</th>
                                    <th>Adress</th>
                                    <th>CP</th>
                                    <th>Activité</th>
                                    <th>NB RDV P</th>
                                    <th>NB RDV AC</th>
                                    <th>NB RDV AN</th>
                                    <th>Notation</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $professionnels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $professionnel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>

                                    <?php if($professionnel->valide===0): ?>
                                        <th scope="row">NV</th>
                                    <?php else: ?> 
                                    <th scope="row">V</th>
                                    <?php endif; ?>
                                        <td><?php echo e($professionnel->id); ?></td>
                                        <td><?php echo e($professionnel->nom); ?></td>
                                        <?php if($professionnel->user): ?>
                                        <td><?php echo e($professionnel->user->email); ?></td>
                                        <?php else: ?>
                                        <td  style="color:red;font-size:bold"> un erreur ici (user) </td>
                                        <?php endif; ?>
                                        <td><?php echo e($professionnel->telephone); ?></td>
                                        <td><?php echo e($professionnel->adresse); ?></td>
                                        <td><?php echo e($professionnel->cp); ?></td>
                                        <td><ul>
                                            <?php $__currentLoopData = $professionnel->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <?php echo e($cat->label); ?>

                                            </li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul></td>
                                        <td><?php echo e(\App\Proposition::demandeStatus('professionnel_id',$professionnel->id,[1,2,3])); ?></td>
                                        <td><?php echo e(\App\Proposition::demandeStatus('professionnel_id',$professionnel->id,[\App\Proposition::ACCEPTE])); ?></td>
                                        <td><?php echo e(\App\Proposition::demandeStatus('professionnel_id',$professionnel->id,[\App\Proposition::REFUSE])); ?></td>
                                        <td><?php echo e(\App\Avis::getAvis($professionnel->id)); ?></td>
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

                                                     <?php if($professionnel->valide===0): ?>
                                                      <li class="kt-nav__item">
                                                            <a href="<?php echo e(url('admin/valide/'.$professionnel->id)); ?>"
                                                               class="kt-nav__link">
                                                                <i class="kt-nav__link-icon flaticon2-plus"></i>
                                                                <span class="kt-nav__link-text">Valider</span>
                                                            </a>
                                                        </li>

                                                     <?php endif; ?>

                                                    <li class="kt-nav__item">
                                                            <a href="<?php echo e(route('admin.professionnel_show',$professionnel->id)); ?>"
                                                               class="kt-nav__link">
                                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                <span class="kt-nav__link-text">Editer</span>
                                                            </a>
                                                        </li>
                                                        <li class="kt-nav__item">
                                                            <a href="<?php echo e(route('admin.professionnel_delete',$professionnel->id)); ?>"
                                                               class="kt-nav__link">
                                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                <span class="kt-nav__link-text">Supprimer</span>
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
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rdvavecvbk/clients/resources/views/admin/professionnels/index.blade.php ENDPATH**/ ?>