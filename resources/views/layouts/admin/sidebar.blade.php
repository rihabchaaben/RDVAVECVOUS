<!-- begin:: Aside -->
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop"
     id="kt_aside">

    <!-- begin:: Aside Menu -->
    <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
        <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1"
             data-ktmenu-dropdown-timeout="500">
            <ul class="kt-menu__nav ">
                <li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true"><a href="{{route('admin.index')}}"
                                                                                         class="kt-menu__link "><i
                                class="kt-menu__link-icon flaticon2-protection"></i><span
                                class="kt-menu__link-text">Dashboard</span></a></li>
                <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('admin.demandeurs')}}"
                                                                   class="kt-menu__link "><i
                                class="kt-menu__link-icon flaticon2-hourglass-1"></i><span
                                class="kt-menu__link-text">Demandeurs</span></a></li>
                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                          class="kt-menu__link kt-menu__toggle"><i
                                class="kt-menu__link-icon flaticon2-analytics-2"></i><span
                                class="kt-menu__link-text">Finance</span><i
                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                        class="kt-menu__link"><span
                                            class="kt-menu__link-text">Finance</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('admin.devis')}}"
                                                                               class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Devis</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('admin.factures')}}"
                                                                               class="kt-menu__link "><i
                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                            class="kt-menu__link-text">Facture</span></a></li>
                        </ul>
                    </div>
                </li>
                <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('admin.professionnels')}}"
                                                                   class="kt-menu__link "><i
                                class="kt-menu__link-icon flaticon2-medical-records-1"></i><span
                                class="kt-menu__link-text">Professionnels</span></a></li>
                <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('admin.vendeurs')}}"
                                                                   class="kt-menu__link "><i
                                class="kt-menu__link-icon flaticon2-hourglass-1"></i><span
                                class="kt-menu__link-text">Vendeurs</span></a></li>
                <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i
                                class="kt-menu__link-icon flaticon2-attention"></i><span
                                class="kt-menu__link-text">Incidents</span></a></li>
                <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i
                                class="kt-menu__link-icon flaticon2-gear"></i><span
                                class="kt-menu__link-text">System</span></a>
                </li>
            </ul>
        </div>
    </div>

    <!-- end:: Aside Menu -->
</div>

<!-- end:: Aside -->