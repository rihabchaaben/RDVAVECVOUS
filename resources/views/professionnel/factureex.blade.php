<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>facture</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Fonts -->

    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="{{asset('/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet"
          type="text/css"/>

    <!--end::Page Vendors Styles -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="{{asset('/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet"
          type="text/css"/>

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="{{asset('/assets/vendors/general/tether/dist/css/tether.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css')}}"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css')}}"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css')}}"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css')}}"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets/vendors/general/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets/vendors/general/nouislider/distribute/nouislider.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets/vendors/general/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets/vendors/general/summernote/dist/summernote.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets/vendors/general/animate.css/animate.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets/vendors/general/toastr/build/toastr.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets/vendors/general/morris.js/morris.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets/vendors/general/sweetalert2/dist/sweetalert2.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets/vendors/general/socicon/css/socicon.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets/vendors/custom/vendors/line-awesome/css/line-awesome.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('/assets/vendors/custom/vendors/flaticon/flaticon.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets/vendors/custom/vendors/flaticon2/flaticon.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/assets/vendors/custom/vendors/fontawesome5/css/all.min.css')}}" rel="stylesheet"
          type="text/css"/>

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{asset('/assets/demo/demo6/base/style.bundle.css')}}" rel="stylesheet" type="text/css"/>

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="{{asset('/assets/media/logos/favicon.ico')}}"/>
</head>







<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading">

 

<!-- end:: Header Mobile -->
 
<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#22b9ff",
                "light": "#ffffff",
                "dark": "#282a3c",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
</script>

<!-- end::Global Config -->

<!--begin:: Global Mandatory Vendors -->
<script src="{{asset('/assets/vendors/general/jquery/dist/jquery.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/popper.js/dist/umd/popper.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/js-cookie/src/js.cookie.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/moment/min/moment.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/sticky-js/dist/sticky.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/wnumb/wNumb.js')}}" type="text/javascript"></script>

<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="{{asset('/assets/vendors/general/jquery-form/dist/jquery.form.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/block-ui/jquery.blockUI.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/custom/components/vendors/bootstrap-datepicker/init.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/custom/components/vendors/bootstrap-timepicker/init.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/custom/components/vendors/bootstrap-switch/init.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/select2/dist/js/select2.full.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/typeahead.js/dist/typeahead.bundle.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/handlebars/dist/handlebars.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/nouislider/distribute/nouislider.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/owl.carousel/dist/owl.carousel.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/autosize/dist/autosize.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/clipboard/dist/clipboard.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/dropzone/dist/dropzone.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/summernote/dist/summernote.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/markdown/lib/markdown.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/custom/components/vendors/bootstrap-markdown/init.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/custom/components/vendors/bootstrap-notify/init.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/jquery-validation/dist/jquery.validate.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/jquery-validation/dist/additional-methods.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/custom/components/vendors/jquery-validation/init.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/toastr/build/toastr.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/raphael/raphael.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/morris.js/morris.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/chart.js/dist/Chart.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/waypoints/lib/jquery.waypoints.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/counterup/jquery.counterup.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/es6-promise-polyfill/promise.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/sweetalert2/dist/sweetalert2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/custom/components/vendors/sweetalert2/init.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/jquery.repeater/src/lib.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/jquery.repeater/src/jquery.input.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/jquery.repeater/src/repeater.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/vendors/general/dompurify/dist/purify.js')}}" type="text/javascript"></script>

<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{asset('/assets/demo/demo6/base/scripts.bundle.js')}}" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Vendors(used by this page) -->
<script src="{{asset('/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>
<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM"
        type="text/javascript"></script>
<script src="{{asset('/assets/vendors/custom/gmaps/gmaps.js')}}" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="{{asset('/assets/app/custom/general/dashboard.js')}}" type="text/javascript"></script>

<!--end::Page Scripts -->

<!--begin::Global App Bundle(used by all pages) -->
<script src="{{asset('/assets/app/bundle/app.bundle.js')}}" type="text/javascript"></script>

  
    <link href="{{asset('assets/app/custom/invoices/invoice-v1.default.css')}}" rel="stylesheet" type="text/css"/>
    <style type="text/css" media="all">
	@import "nucss2.css";
</style>


<style>



@media print {
   .example-screen {
       display: none;
    }
     
}
</style>
    <!--end::Page Custom Styles -->




<?php


$months = array(
        1 => 'Janvier',
        2 => 'Février',
        3 => 'Mars',
        4 => 'Avril',
        5 => 'Mai',
        6 => 'Juin',
        7 => 'Juillet',
        8 => 'Août',
        9=> 'Septembre',
       10=> 'Octobre',
       11 => 'Novembre',
       12 => 'Décembre'
   );?>
    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <div class="kt-portlet">
            
            <div class="kt-portlet__body kt-portlet__body--fit " >
                <div class="kt-portlet__body kt-portlet__body--fit">
                    
                        <div class="kt-invoice-1">
                            <div class="kt-invoice__wrapper">
                                <div class="kt-invoice__head alert alert-info fade show"
                                     style="background-image: url(../../assets/media/bg/bg-6.jpg);">

                                    <div class="kt-invoice__container kt-invoice__container--centered">
                                        <div class="kt-invoice__logo">
                                            <a  >
                                                <h1>Facture pour le mois :  {{$months[$facture->mois]}} </h1>
                                            </a>
                                             
                                        </div>
                                       
                                        <div class="kt-invoice__items">
                                            <div class="kt-invoice__item">
                                                <span class="kt-invoice__subtitle" style="font-size: 1.2rem;">DATE</span>
                                                <span class="kt-invoice__text" style="font-size: 1.2rem;">{{date('d-m-y')}}</span>
                                            </div>
                                            <div class="kt-invoice__item">
                                                <span class="kt-invoice__subtitle" style="font-size: 1.2rem;">Facture  NO.</span>
                                                <span class="kt-invoice__text" style="font-size: 1.2rem;">Facture {{$facture->id}}   </span>
                                            </div>
                                            <div class="kt-invoice__item">
                                                <span class="kt-invoice__subtitle" style="font-size: 1.2rem;">Facture POUR.</span>
                                                <span class="kt-invoice__text" style="font-size: 1.2rem;"> 
                                                   M(me): {{$facture->professionnel->nom}}
                                                      </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-invoice__body kt-invoice__body--centered">
                                    <div class="table-responsive">
                                        <table class="table" border="1px" style="border-color: gray;" >
                                            <thead>
                                            <tr>
                                                <th class="text-center">Date Creation</th>
                                                <th class="text-center">Mois</th>
                                                <th class="text-center">Nombre des RDV acceptes </th>
                                                 <td class="text-center kt-font-danger" style="font-size: 1.5rem;font-weight: bold;">Total (€) </td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-center">  {{$facture->created_at->format('d-m-y')}} </td>

                                                <td class="text-center">
                                                    
                                                {{$months[$facture->mois]}}
                                                
                                                </td>
                                                <td class="text-center">
                                               {{$facture->nombre_rdv}} RDV</td>
                                                
                                                <td class="text-center"> {{$facture->montant}}€</td>

                                            </tr>
                                            
                                            </tbody>
                                        </table>
                                    </div>
 
                                    

                                </div>
                                
                               
                                 

                            </div>
 <br> <br>
                            <hr>
                            <br> <br> <br>
                          <center>
                             
                        
                            <button onclick="window.print()"
                                    class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u example-screen"
                                    data-ktwizard-type="action-next">
                                Imprimer
                            </button>
                             
                        
                        </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


   