<?php $__env->startSection('content'); ?>
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="<?php echo e(asset('assets/app/custom/invoices/invoice-v1.default.css')); ?>" rel="stylesheet" type="text/css"/>

    <!--end::Page Custom Styles -->

    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <div class="kt-portlet">
            <div class="alert alert-info fade show" role="alert">
                <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                                    
                                    <div class="alert-text"  style="font-size: 16px">Un devis pour être légale doit contenir des informations obligatoires. Nous vous
                    les rapellons ici :
                    <p>
                        <span>Décompte détaillé et description de chaque prestation, en quantité et en prix unitaire</span><br>
                        <span>Prix horaire ou forfaitaire de main d'œuvre</span><br>
                        <span>Frais de déplacement, éventuellement</span><br>
                        <span>Conditions de paiement, de livraison et d'exécution du contrat</span><br>
                        
                        <span>Procédures de réclamation et conditions du service après-vente (garantie notamment)</span><br>
                        <span>Somme globale à payer HT et TTC, en précisant les taux de TVA applicables.</span></p>
                </div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="la la-close"></i></span>
                    </button>
                </div>
            </div>
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="kt-portlet__body kt-portlet__body--fit">
                    <form action="<?php echo e(route('pro.mes_devis_store',request()->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="kt-invoice-1">
                            <div class="kt-invoice__wrapper">
                                <div class="kt-invoice__head"
                                     style="background-image: url(../../assets/media/bg/bg-6.jpg);">

                                    <div class="kt-invoice__container kt-invoice__container--centered">
                                        <div class="kt-invoice__logo">
                                            <a href="#">
                                                <h1>DEVIS</h1>
                                            </a>
                                            <a href="#">
                                                <h1><?php echo e($proposition->professionnel->nom_societe ?? $proposition->professionnel->nom); ?></h1>
                                                
                                            </a>
                                        </div>
                                        <span class="kt-invoice__desc">
                                            

                                            <span><?php echo e(Auth::user()->professionnel->adresse); ?></span>
                                                     <span><?php echo e(Auth::user()->professionnel->cp); ?> </span>
                                                     <span><?php echo e(Auth::user()->professionnel->ville->name); ?> </span>
                                                     


														<span>Siret : <?php echo e(Auth::user()->professionnel->siret); ?></span>
														
														<span>TVA : <?php echo e(Auth::user()->professionnel->tva); ?></span>
													</span>
                                        <div class="kt-invoice__items">
                                            <div class="kt-invoice__item">
                                                
                                                <span class="kt-invoice__text"><?php echo e(date('d/m/y')); ?></span>
                                            </div>
                                            <div class="kt-invoice__item">
                                                
                                                <span class="kt-invoice__text">RDV 000014</span>
                                            </div>
                                            <div class="kt-invoice__item">
                                                
                                                <span class="kt-invoice__text"><?php echo e($proposition->demande->demandeur->nom); ?>

                                                    <br>
                                                    <?php echo e($proposition->demande->demandeur->adresse); ?>

                                                    
                                                    <br><?php echo e($proposition->demande->demandeur->ville->name); ?> ,<?php echo e($proposition->demande->demandeur->cp); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-invoice__body kt-invoice__body--centered">
                                    <div class="table-responsive">
                                        <table class="table" id="myTable">
                                            <thead>
                                            <tr>
                                                <th class="text-center">DESIGNATION</th>
                                                <th class="text-center">QUANTITE</th>
                                                <th class="text-center">PRIX UNITAIRE HT</th>
                                                <th class="text-center">TOTAL</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><input type="text" class="form-control"
                                                           style="border:1px solid #d1d2d4;font-weight: 600;"
                                                           name="designation[]" required></td>
                                                <td><input type="number" class="form-control"
                                                           style="width:50%;border:1px solid #d1d2d4;margin-left:25%;font-weight: 600;"
                                                           name="quantite[]" required step="0.10" min="1"></td>
                                                <td><input type="number" class="form-control  prix_unitaire"
                                                
                                                           style="width:50%;border:1px solid #d1d2d4;margin-left:25%;font-weight: 600;"
                                                           name="prix_unitaire[]" required step="0.10" min="0" ></td>
                                                <td class="kt-font-danger">€<span class="tota" style="font-weight:800;"
                                                                                  name="total[]">0</span></td>
                                            </tr>
                                            
                                                
                                                           
                                                           
                                                
                                                           
                                                           
                                                
                                                           
                                                           
                                                
                                                                                  
                                            
                                            </tbody>
                                        </table>
                                    </div>
 
                                    <a href="javascript:;"
                                       class="btn btn-bold btn-sm btn-label-brand add">
                                        <i class="la la-plus"></i> Ajouter désignation
                                    </a>

                                    <a href="javascript:;"
                                       class="btn-sm btn btn-label-danger btn-bold delete">
                                        <i class="la la-trash-o"></i>
                                        Supprimer
                                    </a>

                                </div>
                                <div class="row">
                                    <div class="col-md-9">

                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                            
                                            TAXE EN %</label>
                                        <div class="col-lg-7 col-xl-3">
                                            <input type="number" class="form-control" name="tax" id="tax"
                                                   style="border:1px solid red" step="any" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>
                                            &nbsp;&nbsp;&nbsp;Condition de paiment</label>
                                        <div class="col-lg-7 col-xl-6">
                                            <textarea rows="3" class="form-control yes" name="condition_paiement"
                                                      style="border:1px solid #d1d2d4;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>
                                            &nbsp;&nbsp;&nbsp;Valable jusqu'au</label>
                                        <div class="">
                                            <input type="date" class="form-control yes" name="valable_until"
                                                   style="border:1px solid #d1d2d4;" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-invoice__footer">
                                    <div class="kt-invoice__container kt-invoice__container--centered">
                                        <div class="kt-invoice__content">
                                            

                                        </div>
                                        <div class="kt-invoice__content">
                                            <span>TOTAL HT</span>
                                            <span class="kt-invoice__price" id="total">€0</span>
                                            

                                            
                                        </div>
                                        <div class="kt-invoice__content">
                                            <span>TOTAL TTC</span>
                                            <span class="kt-invoice__price" id="total_ht">€0</span>
                                            
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <button type="reset"
                                    class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                    data-ktwizard-type="action-submit">
                                Réinitialiser
                            </button>
                            <button type="submit"
                                    class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                    data-ktwizard-type="action-next">
                                Envoyer Devis
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- end:: Content -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>


        var KTFormRepeater = {
            init: function () {
                $("#kt_repeater_1").repeater({
                    initEmpty: !1, defaultValues: {"text-input": "foo"}, show: function () {
                        $(this).slideDown()
                    }, hide: function (e) {
                        $(this).slideUp(e)
                    }
                })
            }
        };
        jQuery(document).ready(function () {
            KTFormRepeater.init()
        });
    </script>

    <script>


        $(".prix_unitaire").keyup(function () {

            var total = 0;
            var $tr = $(this).closest('tr');
            var val1 = $tr.find('td:eq(1) input').val();
            var val2 = $tr.find('td:eq(2) input').val();
            var montant = val1 * val2;
            $tr.find('td:eq(3) span').text(parseFloat(montant).toFixed(2));


            calcul();
        });


        //supprimer cette function si ca marche pas 
        $(".prix_unitaire").change(function () {

var total = 0;
var $tr = $(this).closest('tr');
var val1 = $tr.find('td:eq(1) input').val();
var val2 = $tr.find('td:eq(2) input').val();
var montant = val1 * val2;
$tr.find('td:eq(3) span').text(parseFloat(montant).toFixed(2));

calcul();
});

        function calcul() {
            total = 0;
            $(".tota").each(function (index) {
                tota = $(this).text()
                if (!isNaN(tota)) total += parseFloat(tota);

            });
            var tax = $("#tax").val();
            $("#total").text('€' + total);
            var ht = total * tax / 100;
            
            $("#total_ht").text('€' + (total + parseFloat(ht)).toFixed(2) );
        }

        $('.add').click(function () {
            $('#myTable tr:last').after(' <tr>\n' +
                '                                                <td><input type="text" class="form-control"\n' +
                '                                                           style="border:1px solid #d1d2d4;font-weight: 600;"\n' +
                '                                                           name="designation[]" required></td>\n' +
                '                                                <td><input type="number" class="form-control"\n' +
                '                                                           style="width:50%;border:1px solid #d1d2d4;margin-left:25%;font-weight: 600;"\n' +
                '                                                           name="quantite[]"    step="0.10" required></td>\n' +
                '                                                <td><input type="number" class="form-control prix_unitaire"\n' +
                '                                                           style="width:50%;border:1px solid #d1d2d4;margin-left:25%;font-weight: 600;"\n' +
                '                                                           name="prix_unitaire[]"  step="0.10" required></td>\n' +
                '                                                <td class="kt-font-danger">€<span class="tota" style="font-weight:800;"\n' +
                '                                                                                  name="total[]">0</span></td>\n' +
                '                                            </tr>');

            $(".prix_unitaire").keyup(function () {

                var total = 0;
                var $tr = $(this).closest('tr');
                var val1 = $tr.find('td:eq(1) input').val();
                var val2 = $tr.find('td:eq(2) input').val();
                var montant = val1 * val2;
                $tr.find('td:eq(3) span').text(montant);

                calcul();
            });


        });

        $("#tax").keyup(function () {
            calcul();
        });
        
        
        //here change
        
        $("#tax").change(function () {
            calcul();
        });

        $('.delete').click(function () {
            $('#myTable tr:last').fadeTo(1000, 0.01, function () {
                $('#myTable tr:last').slideUp(150, function () {
                    var remove = $('#myTable tr:last').find('td:eq(3) span').text();
                    var total = $("#total").text().replace('$', '');
                    newTotal = parseFloat(total) - parseFloat(remove);
                    $("#total").text('€' + newTotal);
                    $("#total_ht").text('€' + newTotal / 2);
                    $('#myTable tr:last').remove();
                });
            });
        });

    </script>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front.professionnel.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rdvavecvbk/clients/resources/views/professionnel/nouveau_devis.blade.php ENDPATH**/ ?>