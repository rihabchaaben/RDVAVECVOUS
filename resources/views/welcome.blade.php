<!DOCTYPE html>

 
<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>Metronic | Dashboard</title>
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
    <link href="../assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>

    <!--end::Page Vendors Styles -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="../assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet"
          type="text/css"/>

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="../assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet"
          type="text/css"/>
    <link href="../assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet"
          type="text/css"/>
    <link href="../assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet"
          type="text/css"/>
    <link href="../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"
          type="text/css"/>
    <link href="../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet"
          type="text/css"/>
    <link href="../assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet"
          type="text/css"/>
    <link href="../assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet"
          type="text/css"/>
    <link href="../assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet"
          type="text/css"/>
    <link href="../assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="../assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/vendors/custom/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css"/>

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="../assets/demo/demo3/base/style.bundle.css" rel="stylesheet" type="text/css"/>

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="../assets/media/logos/favicon.ico"/>
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

<!-- begin:: Page -->

<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="index.html">
            <img alt="Logo" src="../assets/media/logos/logo-2-sm.png"/>
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left"
                id="kt_aside_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                    class="flaticon-more"></i></button>
    </div>
</div>

<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

        <!-- begin:: Aside -->
        <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
        <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop"
             id="kt_aside">

            <!-- begin:: Aside -->
            <div class="kt-aside__brand kt-grid__item  " id="kt_aside_brand">
                <div class="kt-aside__brand-logo">
                    <a href="index.html">
                        <img alt="Logo" src="../assets/media/logos/logo-4.png"/>
                    </a>
                </div>
            </div>

            <!-- end:: Aside -->

            <!-- begin:: Aside Menu -->
            <diwv class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
                <div id="kt_aside_menu" class="kt-aside-menu  kt-aside-menu--dropdown " data-ktmenu-vertical="1"
                     data-ktmenu-dropdown="1" data-ktmenu-scroll="0">
                    <ul class="kt-menu__nav ">
                        <li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true"><a href="index.html"
                                                                                                 class="kt-menu__link "><i
                                        class="kt-menu__link-icon flaticon2-gear"></i><span class="kt-menu__link-text">Demandes</span></a>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i
                                        class="kt-menu__link-icon flaticon2-layers-1"></i><span
                                        class="kt-menu__link-text">Devis</span></a>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i
                                        class="kt-menu__link-icon flaticon2-graph"></i><span class="kt-menu__link-text">Factures</span></a>
                        </li>
                    </ul>
                </div>
            </diwv>

            <!-- end:: Aside Menu -->
        </div>

        <!-- end:: Aside -->
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

            <!-- begin:: Header -->
            <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

                <!-- begin: Header Menu -->
                <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i
                            class="la la-close"></i></button>
                <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                    <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-tab ">
                        <ul class="kt-menu__nav ">
                            <li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="index.html"
                                                                                                      class="kt-menu__link "><span
                                            class="kt-menu__link-text">Dashboard</span></a></li>
                            <li class="kt-menu__item  kt-menu__item " aria-haspopup="true"><a href="index.html"
                                                                                              class="kt-menu__link "><span
                                            class="kt-menu__link-text">Nouvelle proposition</span></a></li>

                        </ul>
                    </div>
                </div>

                <!-- end: Header Menu -->

                <!-- begin:: Header Topbar -->
                <div class="kt-header__topbar">

                    <!--begin: Search -->
                    <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown"
                         id="kt_quick_search_toggle">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                            <span class="kt-header__topbar-icon"><i class="flaticon2-search-1"></i></span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-top-unround dropdown-menu-anim dropdown-menu-lg">
                            <div class="kt-quick-search kt-quick-search--inline" id="kt_quick_search_inline">
                                <form method="get" class="kt-quick-search__form">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="flaticon2-search-1"></i></span></div>
                                        <input type="text" class="form-control kt-quick-search__input"
                                               placeholder="Search...">
                                        <div class="input-group-append"><span class="input-group-text"><i
                                                        class="la la-close kt-quick-search__close"></i></span></div>
                                    </div>
                                </form>
                                <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="300"
                                     data-mobile-height="200">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--end: Search -->

                    <!--begin: Notifications -->
                    <div class="kt-header__topbar-item dropdown">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px"
                             aria-expanded="true">
                            <span class="kt-header__topbar-icon"><i class="flaticon2-bell-alarm-symbol"></i></span>
                            <span class="kt-hidden kt-badge kt-badge--dot kt-badge--notify kt-badge--sm"></span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg">
                            <form>

                                <!--begin: Head -->
                                <div class="kt-head kt-head--skin-light kt-head--fit-x kt-head--fit-b">
                                    <h3 class="kt-head__title">
                                        User Notifications
                                        &nbsp;
                                        <span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 new</span>
                                    </h3>
                                    <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active show" data-toggle="tab"
                                               href="#topbar_notifications_notifications" role="tab"
                                               aria-selected="true">Alerts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#topbar_notifications_events"
                                               role="tab" aria-selected="false">Events</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs"
                                               role="tab" aria-selected="false">Logs</a>
                                        </li>
                                    </ul>
                                </div>

                                <!--end: Head -->
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="topbar_notifications_notifications"
                                         role="tabpanel">
                                        <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll"
                                             data-scroll="true" data-height="300" data-mobile-height="200">
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-line-chart kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New order has been received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        2 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-box-1 kt-font-brand"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer is registered
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-chart2 kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Application has been approved
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-image-file kt-font-warning"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New file has been uploaded
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        5 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-bar-chart kt-font-info"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New user feedback received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        8 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        System reboot has been successfully completed
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        12 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-favourite kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New order has been placed
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        15 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item kt-notification__item--read">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-safe kt-font-primary"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Company meeting canceled
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        19 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-psd kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New report has been received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        23 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon-download-1 kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Finance report has been generated
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        25 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon-security kt-font-warning"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer comment recieved
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        2 days ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-pie-chart kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer is registered
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 days ago
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                        <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll"
                                             data-scroll="true" data-height="300" data-mobile-height="200">
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-psd kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New report has been received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        23 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon-download-1 kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Finance report has been generated
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        25 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-line-chart kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New order has been received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        2 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-box-1 kt-font-brand"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer is registered
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-chart2 kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Application has been approved
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-image-file kt-font-warning"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New file has been uploaded
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        5 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-bar-chart kt-font-info"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New user feedback received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        8 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        System reboot has been successfully completed
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        12 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-favourite kt-font-brand"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New order has been placed
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        15 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item kt-notification__item--read">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-safe kt-font-primary"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Company meeting canceled
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        19 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-psd kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New report has been received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        23 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon-download-1 kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Finance report has been generated
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        25 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon-security kt-font-warning"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer comment recieved
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        2 days ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-pie-chart kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer is registered
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 days ago
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                        <div class="kt-grid kt-grid--ver" style="min-height: 200px;">
                                            <div class="kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle">
                                                <div class="kt-grid__item kt-grid__item--middle kt-align-center">
                                                    All caught up!
                                                    <br>No new notifications.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!--end: Notifications -->

                    <!--begin: Language bar -->
                    <div class="kt-header__topbar-item kt-header__topbar-item--langs">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
									<span class="kt-header__topbar-icon">
										<img class="" src="../assets/media/flags/012-uk.svg" alt=""/>
									</span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround">
                            <ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
                                <li class="kt-nav__item kt-nav__item--active">
                                    <a href="#" class="kt-nav__link">
                                        <span class="kt-nav__link-icon"><img src="../assets/media/flags/020-flag.svg"
                                                                             alt=""/></span>
                                        <span class="kt-nav__link-text">English</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <span class="kt-nav__link-icon"><img src="../assets/media/flags/016-spain.svg"
                                                                             alt=""/></span>
                                        <span class="kt-nav__link-text">Spanish</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <span class="kt-nav__link-icon"><img src="../assets/media/flags/017-germany.svg"
                                                                             alt=""/></span>
                                        <span class="kt-nav__link-text">German</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--end: Language bar -->

                    <!--begin: User Bar -->
                    <div class="kt-header__topbar-item kt-header__topbar-item--user">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                            <div class="kt-header__topbar-user">
                                <span class="kt-hidden kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
                                <span class="kt-hidden kt-header__topbar-username kt-hidden-mobile">Sean</span>
                                <img class="kt-hidden" alt="Pic" src="../assets/media/users/300_25.jpg"/>

                                <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder">S</span>
                            </div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

                            <!--begin: Head -->
                            <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x"
                                 style="background-image: url(../assets/media/misc/bg-1.jpg)">
                                <div class="kt-user-card__avatar">
                                    <img class="kt-hidden" alt="Pic" src="../assets/media/users/300_25.jpg"/>

                                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                    <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">S</span>
                                </div>
                                <div class="kt-user-card__name">
                                    Sean Stone
                                </div>
                                <div class="kt-user-card__badge">
                                    <span class="btn btn-success btn-sm btn-bold btn-font-md">23 messages</span>
                                </div>
                            </div>

                            <!--end: Head -->

                            <!--begin: Navigation -->
                            <div class="kt-notification">
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-calendar-3 kt-font-success"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            My Profile
                                        </div>
                                        <div class="kt-notification__item-time">
                                            Account settings and more
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-mail kt-font-warning"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            My Messages
                                        </div>
                                        <div class="kt-notification__item-time">
                                            Inbox and tasks
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-rocket-1 kt-font-danger"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            Envoie Kbis
                                        </div>
                                        <div class="kt-notification__item-time">
                                            Logs and notifications
                                        </div>
                                    </div>
                                </a>
                                <div class="kt-notification__custom">
                                    <a href="custom_user_login-v2.html" target="_blank"
                                       class="btn btn-label-brand btn-sm btn-bold">Sign Out</a>
                                </div>
                            </div>

                            <!--end: Navigation -->
                        </div>
                    </div>

                    <!--end: User Bar -->
                </div>

                <!-- end:: Header Topbar -->
            </div>

            <!-- end:: Header -->
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">


                <!-- begin:: Content -->

                <!-- begin:: Content -->
                <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

                    <!--Begin::Dashboard 3-->


                    <!--End::Dashboard 3-->
                </div>

                <!-- end:: Content -->

                <!-- end:: Content -->
            </div>

            <!-- begin:: Footer -->
            <div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop">
                <div class="kt-footer__copyright">
                    2019&nbsp;&copy;&nbsp;<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Keenthemes</a>
                </div>
                <div class="kt-footer__menu">
                    <a href="http://keenthemes.com/metronic" target="_blank"
                       class="kt-footer__menu-link kt-link">About</a>
                    <a href="http://keenthemes.com/metronic" target="_blank"
                       class="kt-footer__menu-link kt-link">Team</a>
                    <a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">Contact</a>
                </div>
            </div>

            <!-- end:: Footer -->
        </div>
    </div>
</div>

<!-- end:: Page -->



<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>

<!-- end::Scrolltop -->

<!-- begin::Demo Panel -->
<div id="kt_demo_panel" class="kt-demo-panel">
    <div class="kt-demo-panel__head">
        <h3 class="kt-demo-panel__title">
            Select A Demo

            <!--<small>5</small>-->
        </h3>
        <a href="#" class="kt-demo-panel__close" id="kt_demo_panel_close"><i class="flaticon2-delete"></i></a>
    </div>
    <div class="kt-demo-panel__body">
        <div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Default
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="../assets/media/demos/Demo-_Default.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="../default/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
                </div>
            </div>
        </div>
        <div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 2
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="../assets/media/demos/Demo-2.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="../demo2/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
                </div>
            </div>
        </div>
        <div class="kt-demo-panel__item kt-demo-panel__item--active">
            <div class="kt-demo-panel__item-title">
                Demo 3
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="../assets/media/demos/Demo-3.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="../demo3/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
                </div>
            </div>
        </div>
        <div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 4
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="../assets/media/demos/Demo-4.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="../demo4/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
                </div>
            </div>
        </div>
        <div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 5
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="../assets/media/demos/Demo-5.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="../demo5/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
                </div>
            </div>
        </div>
        <div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 6
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="../assets/media/demos/Demo-6.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="../demo6/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
                </div>
            </div>
        </div>
        <div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 7
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="../assets/media/demos/Demo-7.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="../demo7/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
                </div>
            </div>
        </div>
        <div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 8
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="../assets/media/demos/Demo-8.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="../demo8/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
                </div>
            </div>
        </div>
        <div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 9
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="../assets/media/demos/Demo-9.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="../demo9/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
                </div>
            </div>
        </div>
        <div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 10
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="../assets/media/demos/Demo-10.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="../demo10/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
                </div>
            </div>
        </div>
        <div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 11
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="../assets/media/demos/Demo-11.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="../demo11/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
                </div>
            </div>
        </div>
        <div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 12
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="../assets/media/demos/Demo-12.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="../demo12/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
                </div>
            </div>
        </div>
        <div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 13
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="../assets/media/demos/Demo-13.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
                </div>
            </div>
        </div>
        <div class="kt-demo-panel__item ">
            <div class="kt-demo-panel__item-title">
                Demo 14
            </div>
            <div class="kt-demo-panel__item-preview">
                <img src="../assets/media/demos/Demo-14.jpg" alt=""/>
                <div class="kt-demo-panel__item-preview-overlay">
                    <a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
                </div>
            </div>
        </div>
        <a href="" target="_blank" class="kt-demo-panel__purchase btn btn-brand btn-elevate btn-bold btn-upper">
            Buy Metronic Now!
        </a>
    </div>
</div>

<!-- end::Demo Panel -->

<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#2c77f4",
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
<script src="../assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="../assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="../assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="../assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
<script src="../assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
<script src="../assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="../assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
<script src="../assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="../assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
<script src="../assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
<script src="../assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"
        type="text/javascript"></script>
<script src="../assets/vendors/custom/components/vendors/bootstrap-datepicker/init.js" type="text/javascript"></script>
<script src="../assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js"
        type="text/javascript"></script>
<script src="../assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js"
        type="text/javascript"></script>
<script src="../assets/vendors/custom/components/vendors/bootstrap-timepicker/init.js" type="text/javascript"></script>
<script src="../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"
        type="text/javascript"></script>
<script src="../assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
<script src="../assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js"
        type="text/javascript"></script>
<script src="../assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
<script src="../assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
<script src="../assets/vendors/custom/components/vendors/bootstrap-switch/init.js" type="text/javascript"></script>
<script src="../assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="../assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
<script src="../assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
<script src="../assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
<script src="../assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<script src="../assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js"
        type="text/javascript"></script>
<script src="../assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js"
        type="text/javascript"></script>
<script src="../assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
<script src="../assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
<script src="../assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
<script src="../assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
<script src="../assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="../assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
<script src="../assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
<script src="../assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="../assets/vendors/custom/components/vendors/bootstrap-markdown/init.js" type="text/javascript"></script>
<script src="../assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
<script src="../assets/vendors/custom/components/vendors/bootstrap-notify/init.js" type="text/javascript"></script>
<script src="../assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="../assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
<script src="../assets/vendors/custom/components/vendors/jquery-validation/init.js" type="text/javascript"></script>
<script src="../assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
<script src="../assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
<script src="../assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
<script src="../assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
<script src="../assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js"
        type="text/javascript"></script>
<script src="../assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
<script src="../assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
<script src="../assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
<script src="../assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
<script src="../assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script src="../assets/vendors/custom/components/vendors/sweetalert2/init.js" type="text/javascript"></script>
<script src="../assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
<script src="../assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
<script src="../assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
<script src="../assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>

<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="../assets/demo/demo3/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Vendors(used by this page) -->
<script src="../assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
<script src="../assets/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="../assets/app/custom/general/dashboard.js" type="text/javascript"></script>

<!--end::Page Scripts -->

<!--begin::Global App Bundle(used by all pages) -->
<script src="../assets/app/bundle/app.bundle.js" type="text/javascript"></script>

<!--end::Global App Bundle -->
</body>

<!-- end::Body -->
</html>