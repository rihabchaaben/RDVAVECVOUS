<!DOCTYPE html>


<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>RDVavecVOUS | Dashboard</title>
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
    {{--<link href="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet"--}}
          {{--type="text/css"/>--}}

    <!--end::Page Vendors Styles -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="{{asset('assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet"
          type="text/css"/>

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="{{asset('assets/vendors/general/tether/dist/css/tether.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css')}}"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css')}}"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css')}}"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css')}}"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/vendors/general/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/vendors/general/nouislider/distribute/nouislider.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/vendors/general/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/summernote/dist/summernote.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/vendors/general/animate.css/animate.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/toastr/build/toastr.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/morris.js/morris.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/sweetalert2/dist/sweetalert2.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/socicon/css/socicon.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/custom/vendors/line-awesome/css/line-awesome.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/vendors/custom/vendors/flaticon/flaticon.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/custom/vendors/flaticon2/flaticon.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/custom/vendors/fontawesome5/css/all.min.css')}}" rel="stylesheet"
          type="text/css"/>

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{asset('assets/demo/demo3/base/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}"/>

    <!-- loading page !-->
    <link href="{{asset('css/modal-loading.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/modal-loading-animate.css')}}" rel="stylesheet" type="text/css"/>

</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

<!-- begin:: Page -->
@include('layouts.front.demandeurs.header')

<!--begin:: Global Mandatory Vendors -->
<script src="{{asset('assets/vendors/general/jquery/dist/jquery.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/popper.js/dist/umd/popper.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/js-cookie/src/js.cookie.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/moment/min/moment.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/sticky-js/dist/sticky.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/wnumb/wNumb.js')}}" type="text/javascript"></script>

<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="{{asset('assets/vendors/general/jquery-form/dist/jquery.form.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/block-ui/jquery.blockUI.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/components/vendors/bootstrap-datepicker/init.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/components/vendors/bootstrap-timepicker/init.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/components/vendors/bootstrap-switch/init.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/select2/dist/js/select2.full.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/typeahead.js/dist/typeahead.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/handlebars/dist/handlebars.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/nouislider/distribute/nouislider.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/owl.carousel/dist/owl.carousel.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/autosize/dist/autosize.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/clipboard/dist/clipboard.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/dropzone/dist/dropzone.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/summernote/dist/summernote.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/markdown/lib/markdown.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/components/vendors/bootstrap-markdown/init.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/components/vendors/bootstrap-notify/init.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/jquery-validation/dist/jquery.validate.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/jquery-validation/dist/additional-methods.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/components/vendors/jquery-validation/init.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/toastr/build/toastr.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/raphael/raphael.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/morris.js/morris.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/chart.js/dist/Chart.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/waypoints/lib/jquery.waypoints.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/counterup/jquery.counterup.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/es6-promise-polyfill/promise.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/sweetalert2/dist/sweetalert2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/components/vendors/sweetalert2/init.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/jquery.repeater/src/lib.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/jquery.repeater/src/jquery.input.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/jquery.repeater/src/repeater.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/dompurify/dist/purify.js')}}" type="text/javascript"></script>

<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{asset('assets/demo/demo3/base/scripts.bundle.js')}}" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Vendors(used by this page) -->
{{--<script src="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>--}}
<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/gmaps/gmaps.js')}}" type="text/javascript"></script>

<!--end::Page Vendors -->
<!-- loading page script  !-->

<script src="{{ asset('js/modal-loading.js')}}"
        type="text/javascript"></script>

<!--begin::Page Scripts(used by this page) -->
<script src="{{ asset('/assets/js/demo10/pages/crud/datatables/basic/basic.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/vendors/custom/datatables/datatables.bundle.js')}}"
        type="text/javascript"></script>
<!--end::Page Scripts -->

<script src='https://unpkg.com/fullcalendar@3.10.1/dist/fullcalendar.min.js'></script>
<script src='https://unpkg.com/fullcalendar@3.10.1/dist/locale-all.js'></script>

<!--begin::Global App Bundle(used by all pages) -->
<script src="{{asset('assets/app/bundle/app.bundle.js')}}" type="text/javascript"></script>
@include('partials.flash')
@yield('script')

<!--end::Global App Bundle -->
</body>

<!-- end::Body -->
</html>
<script>
    "use strict";
    var KTAppChat = function () {
        var t;
        return {
            init: function () {
                t = KTUtil.getByID("kt_chat_aside"), function () {
                    new KTOffcanvas(t, {
                        overlay: !0,
                        baseClass: "kt-app__aside",
                        closeBy: "kt_chat_aside_close",
                        toggleBy: "kt_chat_aside_mobile_toggle"
                    });
                    var i = KTUtil.find(t, ".kt-scroll");
                    i && KTUtil.scrollInit(i, {
                        mobileNativeScroll: !0,
                        desktopNativeScroll: !1,
                        resetHeightOnDestroy: !0,
                        handleWindowResize: !0,
                        rememberPosition: !0,
                        height: function () {
                            var i, s = KTUtil.find(t, ".kt-portlet > .kt-portlet__body"),
                                e = KTUtil.find(t, ".kt-widget.kt-widget--users"),
                                n = KTUtil.find(t, ".kt-searchbar");
                            return i = KTUtil.isInResponsiveRange("desktop") ? KTLayout.getContentHeight() : KTUtil.getViewPort().height, t && (i = (i = i - parseInt(KTUtil.css(t, "margin-top")) - parseInt(KTUtil.css(t, "margin-bottom"))) - parseInt(KTUtil.css(t, "padding-top")) - parseInt(KTUtil.css(t, "padding-bottom"))), e && (i = (i = i - parseInt(KTUtil.css(e, "margin-top")) - parseInt(KTUtil.css(e, "margin-bottom"))) - parseInt(KTUtil.css(e, "padding-top")) - parseInt(KTUtil.css(e, "padding-bottom"))), s && (i = (i = i - parseInt(KTUtil.css(s, "margin-top")) - parseInt(KTUtil.css(s, "margin-bottom"))) - parseInt(KTUtil.css(s, "padding-top")) - parseInt(KTUtil.css(s, "padding-bottom"))), n && (i = (i -= parseInt(KTUtil.css(n, "height"))) - parseInt(KTUtil.css(n, "margin-top")) - parseInt(KTUtil.css(n, "margin-bottom"))), i -= 5
                        }
                    })
                }(), KTChat.setup(KTUtil.getByID("kt_chat_content")), KTUtil.getByID("kt_app_chat_launch_btn") && setTimeout(function () {
                    KTUtil.getByID("kt_app_chat_launch_btn").click()
                }, 1e3)
            }
        }
    }();
    KTUtil.ready(function () {
        KTAppChat.init()
    });
</script>
<script>

    function loadingOut(loading) {
        setTimeout(() => loading.out(), 1000);
    }

    // var loading = new Loading({
    //
    //     // 'ver' or 'hor'
    //     direction: 'ver',
    //
    //     // loading title
    //     title: undefined,
    //
    //     // text color
    //     titleColor: '#FFF',
    //
    //     // font size
    //     titleFontSize: 14,
    //
    //     // extra class(es)
    //     titleClassName: undefined,
    //
    //     // font family
    //     titleFontFamily:   undefined,
    //
    //     // loading description
    //     discription: undefined,
    //
    //     // text color
    //     discriptionColor:  '#FFF',
    //
    //     // font size
    //     discriptionFontSize: 14,
    //
    //     // extra class(es)
    //     discriptionClassName: undefined,
    //
    //     // font family
    //     directionFontFamily: undefined,
    //
    //     // width/height of loading indicator
    //     loadingWidth: 'auto',
    //     loadingHeight: 'auto',
    //
    //     // padding in pixels
    //     loadingPadding: 20,
    //
    //     // background color
    //     loadingBgColor: '#252525',
    //
    //     // border radius in pixels
    //     loadingBorderRadius: 12,
    //
    //     // loading position
    //     loadingPosition: 'fixed',
    //
    //     // shows/hides background overlay
    //     mask: true,
    //
    //     // background color
    //     maskBgColor: 'rgba(0, 0, 0, .6)',
    //
    //     // extra class(es)
    //     maskClassName: undefined,
    //
    //     // mask position
    //     maskPosition: 'fixed',
    //
    // // path to loading spinner
    // animationSrc: undefined,
    //
    //     // width/height of loading spinner
    //     animationWidth: 40,
    //     animationHeight: 40,
    //     animationOriginWidth: 4,
    //     animationOriginHeight: 4,
    //
    //     // color
    //     animationOriginColor: '#FFF',
    //
    //     // extra class(es)
    //     animationClassName: undefined,
    //
    //     // auto display
    //     defaultApply: true,
    //
    //     // animation options
    //     animationIn: 'animated fadeIn',
    //     animationOut: 'animated fadeOut',
    //     animationDuration:  1000,
    //
    //     // z-index property
    //     zIndex: 0,
    //
    // });


        var loading = new Loading({
            loadingBgColor: 	'rgb(77, 150, 223)',
            defaultApply: 	true,
        });

        loadingOut(loading);

</script>
<script>
    "use strict";
    var KTDatatablesBasicBasic = function () {

        var initTable1 = function () {
            var table = $('#kt_table_1');

            // begin first table
            table.DataTable({
                responsive: true,
                "paging": false,

                // DOM Layout settings

                // Order settings
                order: [[1, 'desc']],


                columnDefs: [{
                    targets: 1,
                    orderable: !1,

                }, {
                    targets: 0,
                    orderable: !1,

                }]


            });


        };

        return {

            //main function to initiate the module
            init: function () {
                initTable1();
            },

        };

    }();

    jQuery(document).ready(function () {
        KTDatatablesBasicBasic.init();
    });
</script>
