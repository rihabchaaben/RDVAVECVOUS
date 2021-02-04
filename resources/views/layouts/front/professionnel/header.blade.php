begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="/dashboard">
            <img alt="Logo" src="{{asset('assets/media/logos/logo-2-sm.png')}}"/>
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
<div class="kt-grid kt-grid--hor kt-grid--root professionnel-side-menu-wrapper">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

        <!-- begin:: Aside -->
        <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
        <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop "
             id="kt_aside">

            <!-- begin:: Aside -->
            <div class="kt-aside__brand kt-grid__item  logo-sidebar" id="kt_aside_brand">
                <div class="kt-aside__brand-logo">
                    <a href="/dashboard">
                        <img alt="Logo" src="{{asset('assets/media/logos/logo-4.png')}}"/>
                    </a>
                </div>
            </div>

            <!-- end:: Aside -->

            <!-- begin:: Aside Menu -->
            <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid " id="kt_aside_menu_wrapper" style="background-color:#96d2d9">
                <div id="kt_aside_menu" class="kt-aside-menu  kt-aside-menu--dropdown " data-ktmenu-vertical="1"
                     data-ktmenu-dropdown="1" data-ktmenu-scroll="0">
                    <ul class="kt-menu__nav ">
                        <li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true"><a
                                    href="{{route('pro.mes_demandes')}}"
                                    class="kt-menu__link "><i
                                        class="kt-menu__link-icon flaticon2-gear"></i><span class="kt-menu__link-text"
                                                                                            style="font-size:10.8px">MES DEMANDES</span></a>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('pro.mes_devis')}}"
                                                                           class="kt-menu__link "><i
                                        class="kt-menu__link-icon flaticon2-layers-1"></i><span
                                        class="kt-menu__link-text">MES DEVIS</span></a>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('pro.mes_factures')}}"
                                                                           class="kt-menu__link "><i
                                        class="kt-menu__link-icon flaticon2-graph"></i><span class="kt-menu__link-text"
                                                                                             style="font-size:10.8px">MES FACTURES</span></a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- end:: Aside Menu -->
        </div>

        <!-- end:: Aside -->
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

            <!-- begin:: Header -->
            <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed professionnel-header">

                <!-- begin: Header Menu -->
                <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i
                            class="la la-close"></i></button>
                <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                    <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-tab ">
                        <ul class="kt-menu__nav ">
                            <li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a
                                        href="{{route('pro.index')}}"
                                        class="kt-menu__link "><span
                                            class="kt-menu__link-text">DASHBOARD</span></a></li>
                            <li class="kt-menu__item  kt-menu__item-- " aria-haspopup="true"><a
                            href="{{route('license')}}"
                            class="kt-menu__link "><span
                            class="kt-menu__link-text">CHARTE</span></a></li>

                        </ul>

                       
                    </div>

                    
                </div>


                <style>

.visibledesktop {display:display;}

@media (max-width : 720px) {
    .visibledesktop {display:none;}
}
                </style>
                {{-- <div class="visibledesktop"> <img alt="Logo" src="{{asset('images/logo_typo.png')}}" width="300px" height="53px"/></div> --}}
                <div class="visibledesktop"> <img alt="Logo" src="{{asset('images/logo_typo.png')}}" width="290px" height="60px"/></div>
               


                
                <!-- end: Header Menu -->

                <!-- begin:: Header Topbar -->
                <div class="kt-header__topbar">

                    {{--<!--begin: Search -->--}}
                    {{--<div class="kt-header__topbar-item kt-header__topbar-item--search dropdown"--}}
                         {{--id="kt_quick_search_toggle">--}}
                        {{--<div class="kt-header__topbar-faqwrapper" data-toggle="dropdown" data-offset="10px,0px">--}}
                            {{--<span class="kt-header__topbar-icon"><i class="flaticon2-search-1"></i></span>--}}
                        {{--</div>--}}
                        {{--<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-top-unround dropdown-menu-anim dropdown-menu-lg">--}}
                            {{--<div class="kt-quick-search kt-quick-search--inline" id="kt_quick_search_inline">--}}
                                {{--<form method="get" class="kt-quick-search__form">--}}
                                    {{--<div class="input-group">--}}
                                        {{--<div class="input-group-prepend"><span class="input-group-text"><i--}}
                                                        {{--class="flaticon2-search-1"></i></span></div>--}}
                                        {{--<input type="text" class="form-control kt-quick-search__input"--}}
                                               {{--placeholder="Search...">--}}
                                        {{--<div class="input-group-append"><span class="input-group-text"><i--}}
                                                        {{--class="la la-close kt-quick-search__close"></i></span></div>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                                {{--<div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="300"--}}
                                     {{--data-mobile-height="200">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<!--end: Search -->--}}

                    {{--<!--begin: Notifications -->--}}
                    {{--<div class="kt-header__topbar-item dropdown">--}}
                        {{--<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px"--}}
                             {{--aria-expanded="true">--}}
                            {{--<span class="kt-header__topbar-icon"><i class="flaticon2-bell-alarm-symbol"></i></span>--}}
                            {{--<span class="kt-hidden kt-badge kt-badge--dot kt-badge--notify kt-badge--sm"></span>--}}
                        {{--</div>--}}
                        {{--<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg">--}}
                            {{--<form>--}}

                                {{--<!--begin: Head -->--}}
                                {{--<div class="kt-head kt-head--skin-light kt-head--fit-x kt-head--fit-b">--}}
                                    {{--<h3 class="kt-head__title">--}}
                                        {{--User Notifications--}}
                                        {{--&nbsp;--}}
                                        {{--<span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 new</span>--}}
                                    {{--</h3>--}}
                                    {{--<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x"--}}
                                        {{--role="tablist">--}}
                                        {{--<li class="nav-item">--}}
                                            {{--<a class="nav-link active show" data-toggle="tab"--}}
                                               {{--href="#topbar_notifications_notifications" role="tab"--}}
                                               {{--aria-selected="true">Demande</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="nav-item">--}}
                                            {{--<a class="nav-link" data-toggle="tab" href="#topbar_notifications_events"--}}
                                               {{--role="tab" aria-selected="false">Devis</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="nav-item">--}}
                                            {{--<a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs"--}}
                                               {{--role="tab" aria-selected="false">Message</a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}



                                
                                {{--<!--end: Head -->--}}
                                {{--<div class="tab-content">--}}
                                    {{--<div class="tab-pane active show" id="topbar_notifications_notifications"--}}
                                         {{--role="tabpanel">--}}
                                        {{--<div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll"--}}
                                             {{--data-scroll="true" data-height="300" data-mobile-height="200">--}}
                                            {{--<a href="#" class="kt-notification__item">--}}
                                                {{--<div class="kt-notification__item-icon">--}}
                                                    {{--<i class="flaticon2-favourite kt-font-danger"></i>--}}
                                                {{--</div>--}}
                                                {{--<div class="kt-notification__item-details">--}}
                                                    {{--<div class="kt-notification__item-title">--}}
                                                        {{--New order has been placed--}}
                                                    {{--</div>--}}
                                                    {{--<div class="kt-notification__item-time">--}}
                                                        {{--15 hrs ago--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</a>--}}
                                            {{--<a href="#" class="kt-notification__item kt-notification__item--read">--}}
                                                {{--<div class="kt-notification__item-icon">--}}
                                                    {{--<i class="flaticon2-safe kt-font-primary"></i>--}}
                                                {{--</div>--}}
                                                {{--<div class="kt-notification__item-details">--}}
                                                    {{--<div class="kt-notification__item-title">--}}
                                                        {{--Company meeting canceled--}}
                                                    {{--</div>--}}
                                                    {{--<div class="kt-notification__item-time">--}}
                                                        {{--19 hrs ago--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="tab-pane" id="topbar_notifications_events" role="tabpanel">--}}
                                        {{--<div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll"--}}
                                             {{--data-scroll="true" data-height="300" data-mobile-height="200">--}}
                                            {{--<a href="#" class="kt-notification__item">--}}
                                                {{--<div class="kt-notification__item-icon">--}}
                                                    {{--<i class="flaticon2-favourite kt-font-brand"></i>--}}
                                                {{--</div>--}}
                                                {{--<div class="kt-notification__item-details">--}}
                                                    {{--<div class="kt-notification__item-title">--}}
                                                        {{--New order has been placed--}}
                                                    {{--</div>--}}
                                                    {{--<div class="kt-notification__item-time">--}}
                                                        {{--15 hrs ago--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</a>--}}
                                            {{--<a href="#" class="kt-notification__item">--}}
                                                {{--<div class="kt-notification__item-icon">--}}
                                                    {{--<i class="flaticon2-psd kt-font-success"></i>--}}
                                                {{--</div>--}}
                                                {{--<div class="kt-notification__item-details">--}}
                                                    {{--<div class="kt-notification__item-title">--}}
                                                        {{--New report has been received--}}
                                                    {{--</div>--}}
                                                    {{--<div class="kt-notification__item-time">--}}
                                                        {{--23 hrs ago--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">--}}
                                        {{--<div class="kt-grid kt-grid--ver" style="min-height: 200px;">--}}
                                            {{--<div class="kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle">--}}
                                                {{--<div class="kt-grid__item kt-grid__item--middle kt-align-center">--}}
                                                    {{--All caught up!--}}
                                                    {{--<br>No new notifications.--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}


































                    {{--<!--end: Notifications -->--}}

                    <!--begin: Language bar -->
<!--                     <div class="kt-header__topbar-item kt-header__topbar-item--langs">
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
                    </div> -->

                    <!--end: Language bar -->

                    <div class="kt-header__topbar-item ">
            
                          <div class="kt-header__topbar-wrapper" >
               
                   <span class="kt-header__topbar-icon kt-header__topbar-icon--success" >
                     
                      <a href="{{url('chat')}}"> <i class="flaticon2-bell-alarm-symbol" style="font-size: 2.1rem;color:#2D328C"></i> </a>
                 
                </span> 


                @if(\App\Message::where('to_id', Auth::user()->id)
        ->where('readed_at','=',NULL)
            ->count()>0)
                
                <span class="kt-badge kt-badge--danger kt-font-bold"> 
                  
                {{\App\Message::where('to_id', Auth::user()->id)
        ->where('readed_at','=',NULL)
            ->count()}}
                
                 
            
            </span>@endif

          
            
            </div>
            
        </div>
                    <!--begin: User Bar -->
                    <div class="kt-header__topbar-item kt-header__topbar-item--user">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                            <div class="kt-header__topbar-user">
                                <span class="kt-hidden kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
                                <span class="kt-hidden kt-header__topbar-username kt-hidden-mobile">{{ucfirst(Auth::user()->name[0])}}</span>
                                <img class="kt-hidden" alt="Pic" src="../assets/media/users/300_25.jpg"/>

                                <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder">{{ucfirst(Auth::user()->name[0])}}</span>
                            </div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

                            <!--begin: Head -->
                            <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x"
                                 style="background-image: url(../assets/media/misc/bg-1.jpg)">
                                <div class="kt-user-card__avatar">
                                    <img class="kt-hidden" alt="Pic" src="../assets/media/users/300_25.jpg"/>

                                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                    <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">{{ucfirst(Auth::user()->name[0])}}</span>
                                </div>
                                <div class="kt-user-card__name">
                                    {{Auth::user()->name}}
                                </div>
                                {{--<div class="kt-user-card__badge">--}}
                                    {{--<span class="btn btn-success btn-sm btn-bold btn-font-md">23 messages</span>--}}
                                {{--</div>--}}
                            </div>

                            <!--end: Head -->

                            <!--begin: Navigation -->
                            <div class="kt-notification">
                                <a href="{{route('pro.profile')}}" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-calendar-3 kt-font-success"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold" style="font-size: 16px">
                                            MON PROFIL
                                        </div>
                                    </div>
                                </a>
                                <a href="{{route('pro.chat')}}" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-mail kt-font-warning"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold" style="font-size: 16px">
                                            MESSAGERIE
                                        </div>
                                    </div>
                                </a>
                                <a href="{{route('pro.profile','tarif')}}" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-calendar-3 kt-font-success"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold" style="font-size: 16px">
                                            TARIFICATION
                                        </div>
                                    </div>
                                </a>
                                <a href="{{route('pro.mes_kbis_create')}}" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-rocket-1 kt-font-danger"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold" style="font-size: 16px">
                                            MES DOCUMENTS
                                        </div>
                                    </div>
                                </a>
                                <a href="{{route('faq')}}" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon-settings kt-font-danger"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold" style="font-size: 16px">
                                            FAQ
                                        </div>
                                    </div>
                                </a>
                                <a href="{{route('pro.contactUs_create')}}" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon-email kt-font-success"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold" style="font-size: 16px">
                                            CONTACTER
                                        </div>
                                    </div>
                                </a>
                                <div class="kt-notification__custom">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                       class="btn btn-label-brand btn-sm btn-bold" style="font-size: 16px">DECONNEXION</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
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

            @yield('content')

            <!-- end:: Content -->

            </div>
            <!-- begin:: Footer -->
            <div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop">
                <div class="kt-footer__copyright">
                    2020&nbsp;&copy;&nbsp;<a href="{{url('/')}}" target="_blank" class="kt-link">RDVavecVous.com</a>
                </div>
                <div class="kt-footer__menu">
                    {{--<a href="#" target="_blank"--}}
                       {{--class="kt-footer__menu-link kt-link">Mentions Légales</a>--}}
                    {{--<a href="{{route('faq')}}" class="kt-footer__menu-link kt-link">Faq</a>--}}
                    {{--<a href="{{route('pro.contactUs_create')}}" target="_blank" class="kt-footer__menu-link kt-link">Contact</a>--}}
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

<!-- end::Scrolltop