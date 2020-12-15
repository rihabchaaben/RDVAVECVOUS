<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="index.html">
            <img alt="Logo" src="../images/logo.jpg"/>
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left"
                id="kt_aside_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                    class="flaticon-more-1"></i></button>
    </div>
</div>

<!-- end:: Header Mobile -->

<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

            <!-- begin:: Header -->
            <div id="kt_header" class="kt-header  kt-header--fixed " data-ktheader-minimize="on">
                <div class="kt-container kt-container--fluid">

                    <!-- begin: Header Menu -->
                    <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i
                                class="la la-close"></i></button>
                    <div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_header_menu_wrapper">

                        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
                            <ul class="kt-menu__nav ">
                                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                                    data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="{{url('/dashboard')}}"
                                                                                               class="kt-menu__link"><span
                                                class="kt-menu__link-text">Dashboard</span></a>
                                </li>
                                <li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here"
                                    data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="{{url('/mes-demande')}}"
                                                                                               class="kt-menu__link"><span
                                                class="kt-menu__link-text">Toutes mes demandes</span></a>
                                </li>
                                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                                    data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="{{url('nouvelle-demande')}}"
                                                                                               class="kt-menu__link"><span
                                                class="kt-menu__link-text">Nouvelle demande</span></a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <!-- end: Header Menu -->

                    <!-- begin:: Brand -->
                    <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                        <a class="kt-header__brand-logo" href="index.html">
                            <img alt="Logo" src="../images/navbar_logo.png"/>
                        </a>
                    </div>

                    <!-- end:: Brand -->

                    <!-- begin:: Header Topbar -->
                    <div class="kt-header__topbar kt-grid__item">

                        <!--begin: User bar -->
                        <div class="kt-header__topbar-item kt-header__topbar-item--user">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                                <span class="kt-header__topbar-welcome kt-visible-desktop">Hi,</span>
                                <span class="kt-header__topbar-username kt-visible-desktop">Nick</span>
                                &nbsp;<i class="kt-menu__hor-arrow la la-angle-down" style="color: #591df1"></i>

                                <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
                            </div>

                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

                                <!--begin: Head -->
                                <div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">

                                    <div class="kt-user-card__name">
                                        Sean Stone
                                    </div>
                                    <div class="kt-user-card__badge">
                                        <span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 messages</span>
                                    </div>
                                </div>

                                <!--end: Head -->

                                <!--begin: Navigation -->
                                <div class="kt-notification">
                                    <a href="{{url('profile')}}" class="kt-notification__item">
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
                                                My Devis
                                            </div>
                                            <div class="kt-notification__item-time">
                                                Logs and notifications
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-hourglass kt-font-brand"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                My Rendez-vous
                                            </div>
                                            <div class="kt-notification__item-time">
                                                latest tasks and projects
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

                        <!--end: User bar -->

                    </div>

                    <!-- end:: Header Topbar -->
                </div>
            </div>

            <!-- end:: Header -->

        </div>
    </div>
</div>
<!-- end:: Page -->
