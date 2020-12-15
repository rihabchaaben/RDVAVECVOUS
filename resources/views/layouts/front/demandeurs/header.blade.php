<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="{{route('demandeur.index')}}">
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
        <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop"
             id="kt_aside">

            <!-- begin:: Aside -->
            <div class="kt-aside__brand kt-grid__item logo-sidebar " id="kt_aside_brand">
                <div class="kt-aside__brand-logo">
                    <a href="{{route('demandeur.index')}}">
                        <img alt="Logo" src="{{asset('assets/media/logos/logo-4.png')}}"/>
                    </a>
                </div>
            </div>

            <!-- end:: Aside -->

            <!-- begin:: Aside Menu -->
            <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
                <div id="kt_aside_menu" class="kt-aside-menu  kt-aside-menu--dropdown " data-ktmenu-vertical="1"
                     data-ktmenu-dropdown="1" data-ktmenu-scroll="0">
                    <ul class="kt-menu__nav ">
                        <li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true"><a
                                    href="{{route('demandeur.mes_demandes')}}"
                                    class="kt-menu__link "><i
                                        class="kt-menu__link-icon flaticon2-gear"></i><span class="kt-menu__link-text"
                                                                                            style="font-size:10.8px">MES DEMANDES</span></a>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('demandeur.mes_invitation')}}"
                                                                           class="kt-menu__link "><i
                                        class="kt-menu__link-icon flaticon2-layers-1"></i><span
                                        class="kt-menu__link-text">MA LISTE</span></a>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('demandeur.mes_devis')}}"
                                                                           class="kt-menu__link "><i
                                        class="kt-menu__link-icon flaticon2-graph"></i><span class="kt-menu__link-text">MES DEVIS</span></a>
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
                                        href="{{route('demandeur.index')}}"
                                        class="kt-menu__link "><span
                                            class="kt-menu__link-text">DASHBOARD</span></a></li>
                            <li class="kt-menu__item  kt-menu__item " aria-haspopup="true"><a
                                        href="{{route('demandeur.mes_demandes_create')}}"
                                        class="kt-menu__link "><span
                                            class="kt-menu__link-text btn btn-success" style="color:white;">NOUVELLE DEMANDE</span></a></li>

                        </ul>
                    </div>
                </div>



                <style>
                .btn .btn-success{
                    background-color:green !important;
                }
.visibledesktop {display:display;}
@media (max-width : 720px) {
    .visibledesktop {display:none;}
}
                </style>
                <div class="visibledesktop"> <img alt="Logo" src="{{asset('images/logo_typo.png')}}" width="300px" height="53px"/></div>

                <!-- end: Header Menu -->

                <!-- begin:: Header Topbar -->
                <div class="kt-header__topbar">

                    {{--<!--begin: Search -->--}}
                    {{--<div class="kt-header__topbar-item kt-header__topbar-item--search dropdown"--}}
                         {{--id="kt_quick_search_toggle">--}}
                        {{--<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">--}}
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
                {{--@include('demandeur.notification',[$notificationscnt,$notifPropositions,$notifMessage,$notifDevis])--}}

                {{--<!--end: Notifications -->--}}

                <!--begin: Language bar -->
                    {{--<div class="kt-header__topbar-item kt-header__topbar-item--langs">--}}
                        {{--<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">--}}
									{{--<span class="kt-header__topbar-icon">--}}
										{{--<img class="" src="../../../assets/media/flags/012-uk.svg" alt=""/>--}}
									{{--</span>--}}
                        {{--</div>--}}
                        {{--<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround">--}}
                            {{--<ul class="kt-nav kt-margin-t-10 kt-margin-b-10">--}}
                                {{--<li class="kt-nav__item kt-nav__item--active">--}}
                                    {{--<a href="#" class="kt-nav__link">--}}
                                        {{--<span class="kt-nav__link-icon"><img--}}
                                                    {{--src="../../../assets/media/flags/020-flag.svg"--}}
                                                    {{--alt=""/></span>--}}
                                        {{--<span class="kt-nav__link-text">English</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li class="kt-nav__item">--}}
                                    {{--<a href="#" class="kt-nav__link">--}}
                                        {{--<span class="kt-nav__link-icon"><img--}}
                                                    {{--src="../../../assets/media/flags/016-spain.svg"--}}
                                                    {{--alt=""/></span>--}}
                                        {{--<span class="kt-nav__link-text">Spanish</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li class="kt-nav__item">--}}
                                    {{--<a href="#" class="kt-nav__link">--}}
                                        {{--<span class="kt-nav__link-icon"><img--}}
                                                    {{--src="../../assets/media/flags/017-germany.svg"--}}
                                                    {{--alt=""/></span>--}}
                                        {{--<span class="kt-nav__link-text">German</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}





                    <div class="kt-header__topbar-item ">

                          <div class="kt-header__topbar-wrapper" >

                   <span class="kt-header__topbar-icon kt-header__topbar-icon--success" >
                      {{-- <a href="{{url('demandeur/chat')}}"> <i class="flaticon2-bell-alarm-symbol" style="font-size: 2.1rem;color:blue"></i> </a> --}}
                      <a href="{{url('demandeur/chat')}}"> <i class="flaticon2-bell-alarm-symbol" style="font-size: 2.1rem;color:#2D328C"></i> </a>
                      
                      @if($cntMessagenonlue>0)
                <span class="kt-badge kt-badge--danger kt-font-bold">


                {{$cntMessagenonlue}}

            </span>

            @endif
                </span>



            </div>

        </div>

                    <!--end: Language bar -->

                    <!--begin: User Bar -->
                    <div class="kt-header__topbar-item kt-header__topbar-item--user">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                            <div class="kt-header__topbar-user">
                                <span class="kt-hidden kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
                                <span class="kt-hidden kt-header__topbar-username kt-hidden-mobile">{{Auth::user()->name}}</span>
                                <img class="kt-hidden" alt="Pic" src="../../assets/media/users/300_25.jpg"/>

                                <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder">{{ucfirst(Auth::user()->name[0])}}</span>
                            </div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

                            <!--begin: Head -->
                            <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x"
                                 style="background-image: url(../../../assets/media/misc/bg-1.jpg)">
                                <div class="kt-user-card__avatar">
                                    <img class="kt-hidden" alt="Pic" src="../../assets/media/users/300_25.jpg"/>

                                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                    <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">{{ucfirst(Auth::user()->name[0])}}</span>
                                </div>
                                <div class="kt-user-card__name">
                                    {{Auth::user()->name}}
                                </div>
                                <div class="kt-user-card__badge">
                                <a href="{{url('demandeur/chat')}}">  <span class="btn btn-success btn-sm btn-bold btn-font-md">{{$cntMessage}}
                                        messages</span></a>
                                </div>
                            </div>

                            <!--end: Head -->

                            <!--begin: Navigation -->
                            <div class="kt-notification">
                                <a href="{{route('demandeur.profile_agence')}}" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-calendar-3 kt-font-success"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold" style="font-size: 16px">
                                            MON PROFIL
                                        </div>
                                        {{--<div class="kt-notification__item-time">--}}
                                        {{--Account settings and more--}}
                                        {{--</div>--}}
                                    </div>
                                </a>
                                <a href="{{route('demandeur.chat')}}" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-mail kt-font-warning"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold" style="font-size: 16px">
                                            MESSAGERIE
                                        </div>
                                    </div>
                                </a>
                                <a href="{{route('demandeur.faq')}}" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon-settings kt-font-danger"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold" style="font-size: 16px">
                                            FAQ
                                        </div>
                                    </div>
                                </a>
                                <a href="{{route('demandeur.contactUs_create')}}" class="kt-notification__item">
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
                <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#exampleModalCenter").modal('show');
    });
</script>

                @if($vips->count()>0)

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">MA LISTE </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

Vous avez un nouveau professionnel invité sur MA LISTE et vous pourrez le choisir en exclusivité lors de vos prochaines demandes
       <!--   <ul></ul>
        @foreach($vips as $vip)
       <li>Votre invité  M (me) : {{$vip->professionnel->nom}} a cree un nouveau compte </li>
       @endforeach
      </ul> -->
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-primary"  onclick="compris()"  data-dismiss="modal">J'ai compris</button>
      </div>
    </div>
  </div>
</div>

        @endif



        @if($propos->count()>0)

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Félicitation ! Vous avez une nouvelle proposition </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-footer">
         <button type="button" class="btn btn-primary"  onclick="compris2()"  data-dismiss="modal">J'ai compris</button>
      </div>
    </div>
  </div>
</div>

        @endif
            @yield('content')

            <!-- end:: Content -->

            </div>
            <!-- begin:: Footer -->
            <div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop">
                <div class="kt-footer__copyright">
                    2020&nbsp;&copy;&nbsp;<a href="{{url('/')}}" target="_blank" class="kt-link">RDVavecVous.com</a>
                </div>
                {{--<div class="kt-footer__menu">--}}
                    {{--<a href="http://keenthemes.com/metronic" target="_blank"--}}
                       {{--class="kt-footer__menu-link kt-link">About</a>--}}
                    {{--<a href="http://keenthemes.com/metronic" target="_blank"--}}
                       {{--class="kt-footer__menu-link kt-link">Team</a>--}}
                    {{--<a href="{{route('demandeur.contactUs_create')}}" class="kt-footer__menu-link kt-link">Contact</a>--}}
                {{--</div>--}}











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


<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>

      <script> function compris2() {
            $.ajax({
               type:'GET',
               url:'/demandeur/compris2/{{ Auth::user()->demandeur->id }}',
               success:function(data) {
                //alert(data);
               }
            });
         }
         function compris() {
            $.ajax({
               type:'GET',
               url:'/demandeur/compris/{{ Auth::user()->demandeur->id }}',
               success:function(data) {
                //alert(data);
               }
            });
         }
      </script>
<!-- end::Scrolltop -->