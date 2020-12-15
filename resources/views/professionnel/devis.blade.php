@extends('layouts.front.professionnel.master')
@section('content')
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch">
        <div class="kt-container kt-body  kt-grid kt-grid--ver" id="kt_body">
            <!-- begin:: Aside -->
            <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>

            <div class="" id="kt_aside" style="opacity: 0;">
                <!-- begin:: Aside Menu -->
                <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
                    <div id="kt_aside_menu" class="kt-aside-menu kt-scroll ps ps--active-y" data-ktmenu-vertical="1"
                         data-ktmenu-scroll="1" style="height: 344px; overflow: hidden;">

                        <ul class="kt-menu__nav ">
                            <li class="kt-menu__item " aria-haspopup="true"><a
                                        href="/metronic/preview/demo9/builder.html" class="kt-menu__link "><i
                                            class="kt-menu__link-icon fa fa-cog"></i><span class="kt-menu__link-text">Layout Builder</span></a>
                            </li>
                            <li class="kt-menu__section ">
                                <h4 class="kt-menu__section-text">Components</h4>
                                <i class="kt-menu__section-icon flaticon-more-v2"></i>
                            </li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="/metronic/preview/demo9/#.html"
                                                                               class="kt-menu__link "><i
                                            class="kt-menu__link-icon fa fa-database"></i><span
                                            class="kt-menu__link-text">Datatables</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="/metronic/preview/demo9/#.html"
                                                                               class="kt-menu__link "><i
                                            class="kt-menu__link-icon fa fa-cube"></i><span class="kt-menu__link-text">Buttons</span></a>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                      class="kt-menu__link kt-menu__toggle"><i
                                            class="kt-menu__link-icon fa fa-dolly"></i><span class="kt-menu__link-text">Portlets</span><i
                                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                                    class="kt-menu__link"><span
                                                        class="kt-menu__link-text">Portlets</span></span></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a
                                                    href="/metronic/preview/demo9/#.html" class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Block UI</span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a
                                                    href="/metronic/preview/demo9/#.html" class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Perfect Scroll</span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a
                                                    href="/metronic/preview/demo9/#.html" class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Toastr</span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a
                                                    href="/metronic/preview/demo9/#.html" class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">SweetAlert2</span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a
                                                    href="/metronic/preview/demo9/#.html" class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Session Timeout</span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a
                                                    href="/metronic/preview/demo9/#.html" class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Idle Timer</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="/metronic/preview/demo9/#.html"
                                                                               class="kt-menu__link "><i
                                            class="kt-menu__link-icon fa fa-fill"></i><span class="kt-menu__link-text">Timeline</span></a>
                            </li>
                            <li class="kt-menu__section ">
                                <h4 class="kt-menu__section-text">Page Elements</h4>
                                <i class="kt-menu__section-icon flaticon-more-v2"></i>
                            </li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="/metronic/preview/demo9/#.html"
                                                                               class="kt-menu__link "><i
                                            class="kt-menu__link-icon fa fa-images"></i><span
                                            class="kt-menu__link-text">Widgets</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="/metronic/preview/demo9/#.html"
                                                                               class="kt-menu__link "><i
                                            class="kt-menu__link-icon fa fa-layer-group"></i><span
                                            class="kt-menu__link-text">Calendars</span></a></li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                      class="kt-menu__link kt-menu__toggle"><i
                                            class="kt-menu__link-icon fa fa-table"></i><span class="kt-menu__link-text">Prising Tables</span><i
                                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                                    class="kt-menu__link"><span class="kt-menu__link-text">Prising Tables</span></span>
                                        </li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a
                                                    href="/metronic/preview/demo9/#.html" class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Base</span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a
                                                    href="/metronic/preview/demo9/#.html" class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Draggable</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;"
                                                                               class="kt-menu__link "><i
                                            class="kt-menu__link-icon fa fa-poll"></i><span class="kt-menu__link-text">Invoice</span></a>
                            </li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;"
                                                                               class="kt-menu__link "><i
                                            class="kt-menu__link-icon fa fa-coins"></i><span class="kt-menu__link-text">Custom Pages</span></a>
                            </li>
                        </ul>
                        <div class="ps__rail-x" style="left: 0px; bottom: -10px;">
                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps__rail-y" style="top: 10px; height: 343px; right: 0px;">
                            <div class="ps__thumb-y" tabindex="0" style="top: 5px; height: 200px;"></div>
                        </div>
                    </div>
                </div>
                <!-- end:: Aside Menu -->
            </div>
            <!-- end:: Aside -->
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
                <!-- begin:: Content Head -->
                <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                    <div class="kt-subheader__main">

                        <h3 class="kt-subheader__title">
                            Dashboard
                        </h3>

                        <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                        <div class="kt-subheader__group" id="kt_subheader_search">
            <span class="kt-subheader__desc" id="kt_subheader_total">
                                    Mes Devis                            </span>

                        </div>

                    </div>


                </div>
                <!-- end:: Content Head -->
                <!-- begin:: Content -->

                <div class="kt-content kt-grid__item kt-grid__item--fluid" id="kt_content">
                    <div class="kt-portlet kt-portlet--tabs">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Mes Devis
                                </h3>
                            </div>

                        </div>
                        <div class="kt-portlet__body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="kt_widget5_tab1_content" aria-expanded="true">
                                    <div class="kt-widget5">
                                        <div class="kt-widget5__item">
                                            <div class="kt-widget5__content">
                                                <div class="kt-widget5__pic">
                                                    <img class="kt-widget7__img" src="../assets/media//products/product27.jpg" alt="">
                                                </div>
                                                <div class="kt-widget5__section">
                                                    <a href="#" class="kt-widget5__title">
                                                        Plambier urgent bessoin
                                                    </a>
                                                    <p class="kt-widget5__desc">
                                                        Francois meterons
                                                    </p>
                                                    <div class="kt-widget5__info">
                                                        <span>Adresse:</span>
                                                        <span class="kt-font-info">Toulouse Rue charlie vint 3000</span>
                                                        <span>Tél:</span>
                                                        <span class="kt-font-info">2308123327</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-widget5__content">
                                                <div class="kt-widget5__stats">
                                                    <span class="kt-widget5__number">23.20</span>
                                                    <span class="kt-widget5__sales">Euro</span>
                                                </div>
                                                <div class="kt-widget5__stats">
                                                    <span class="kt-widget5__number"><div class="kt-demo-icon">
                    <div class="kt-demo-icon__preview">
                        <i class="fa fa-file-download"></i>
                    </div>

                </div></span>
                                                    <span class="kt-widget5__sales">Télécharger</span>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="kt-widget5__item">
                                            <div class="kt-widget5__content">
                                                <div class="kt-widget5__pic">
                                                    <img class="kt-widget7__img" src="../assets/media//products/product22.jpg" alt="">
                                                </div>
                                                <div class="kt-widget5__section">
                                                    <a href="#" class="kt-widget5__title">
                                                        Vite plamberie Toulouse
                                                    </a>
                                                    <p class="kt-widget5__desc">
                                                        Marie Laurent
                                                    </p>
                                                    <div class="kt-widget5__info">
                                                        <span>Adresse:</span>
                                                        <span class="kt-font-info">Nice version Rue 23</span>
                                                        <span>Tél:</span>
                                                        <span class="kt-font-info">459874650</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-widget5__content">
                                                <div class="kt-widget5__stats">
                                                    <span class="kt-widget5__number">24,58</span>
                                                    <span class="kt-widget5__sales">Euro</span>
                                                </div>
                                                <div class="kt-widget5__stats">
                                                    <span class="kt-widget5__number"><div class="kt-demo-icon">
                    <div class="kt-demo-icon__preview">
                        <i class="fa fa-file-download"></i>
                    </div>

                                                        </div></span></div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="tab-pane" id="kt_widget5_tab2_content">
                                    <div class="kt-widget5">
                                        <div class="kt-widget5__item">
                                            <div class="kt-widget5__content">
                                                <div class="kt-widget5__pic">
                                                    <img class="kt-widget7__img" src="./assets/media//products/product10.jpg" alt="">
                                                </div>
                                                <div class="kt-widget5__section">
                                                    <a href="#" class="kt-widget5__title">
                                                        Branding Mockup
                                                    </a>
                                                    <p class="kt-widget5__desc">
                                                        Metronic bootstrap themes.
                                                    </p>
                                                    <div class="kt-widget5__info">
                                                        <span>Author:</span>
                                                        <span class="kt-font-info">Fly themes</span>
                                                        <span>Released:</span>
                                                        <span class="kt-font-info">23.08.17</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="kt-widget5__content">
                                                <div class="kt-widget5__stats">
                                                    <span class="kt-widget5__number">24,583</span>
                                                    <span class="kt-widget5__sales">sales</span>
                                                </div>
                                                <div class="kt-widget5__stats">
                                                    <span class="kt-widget5__number">3809</span>
                                                    <span class="kt-widget5__votes">votes</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="kt-widget5__item">
                                            <div class="kt-widget5__content">
                                                <div class="kt-widget5__pic">
                                                    <img class="kt-widget7__img" src="./assets/media//products/product11.jpg" alt="">
                                                </div>
                                                <div class="kt-widget5__section">
                                                    <a href="#" class="kt-widget5__title">
                                                        Awesome Mobile App
                                                    </a>
                                                    <p class="kt-widget5__desc">
                                                        Metronic admin themes.Lorem Ipsum Amet
                                                    </p>
                                                    <div class="kt-widget5__info">
                                                        <span>Author:</span>
                                                        <span class="kt-font-info">Fly themes</span>
                                                        <span>Released:</span>
                                                        <span class="kt-font-info">23.08.17</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="kt-widget5__content">
                                                <div class="kt-widget5__stats">
                                                    <span class="kt-widget5__number">210,054</span>
                                                    <span class="kt-widget5__sales">sales</span>
                                                </div>
                                                <div class="kt-widget5__stats">
                                                    <span class="kt-widget5__number">1103</span>
                                                    <span class="kt-widget5__votes">votes</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="kt-widget5__item">
                                            <div class="kt-widget5__content">
                                                <div class="kt-widget5__pic">
                                                    <img class="kt-widget7__img" src="./assets/media//products/product6.jpg" alt="">
                                                </div>
                                                <div class="kt-widget5__section">
                                                    <a href="#" class="kt-widget5__title">
                                                        Great Logo Designn
                                                    </a>
                                                    <p class="kt-widget5__desc">
                                                        Metronic admin themes.
                                                    </p>
                                                    <div class="kt-widget5__info">
                                                        <span>Author:</span>
                                                        <span class="kt-font-info">Keenthemes</span>
                                                        <span>Released:</span>
                                                        <span class="kt-font-info">23.08.17</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="kt-widget5__content">
                                                <div class="kt-widget5__stats">
                                                    <span class="kt-widget5__number">19,200</span>
                                                    <span class="kt-widget5__sales">sales</span>
                                                </div>
                                                <div class="kt-widget5__stats">
                                                    <span class="kt-widget5__number">1046</span>
                                                    <span class="kt-widget5__votes">votes</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="kt_widget5_tab3_content">
                                    <div class="kt-widget5">
                                        <div class="kt-widget5__item">
                                            <div class="kt-widget5__content">
                                                <div class="kt-widget5__pic">
                                                    <img class="kt-widget7__img" src="./assets/media//products/product11.jpg" alt="">
                                                </div>
                                                <div class="kt-widget5__section">
                                                    <a href="#" class="kt-widget5__title">
                                                        Awesome Mobile App
                                                    </a>
                                                    <p class="kt-widget5__desc">
                                                        Metronic admin themes.Lorem Ipsum Amet
                                                    </p>
                                                    <div class="kt-widget5__info">
                                                        <span>Author:</span>
                                                        <span class="kt-font-info">Fly themes</span>
                                                        <span>Released:</span>
                                                        <span class="kt-font-info">23.08.17</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="kt-widget5__content">
                                                <div class="kt-widget5__stats">
                                                    <span class="kt-widget5__number">210,054</span>
                                                    <span class="kt-widget5__sales">sales</span>
                                                </div>
                                                <div class="kt-widget5__stats">
                                                    <span class="kt-widget5__number">1103</span>
                                                    <span class="kt-widget5__votes">votes</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="kt-widget5__item">
                                            <div class="kt-widget5__content">
                                                <div class="kt-widget5__pic">
                                                    <img class="kt-widget7__img" src="./assets/media//products/product6.jpg" alt="">
                                                </div>
                                                <div class="kt-widget5__section">
                                                    <a href="#" class="kt-widget5__title">
                                                        Great Logo Designn
                                                    </a>
                                                    <p class="kt-widget5__desc">
                                                        Metronic admin themes.
                                                    </p>
                                                    <div class="kt-widget5__info">
                                                        <span>Author:</span>
                                                        <span class="kt-font-info">Keenthemes</span>
                                                        <span>Released:</span>
                                                        <span class="kt-font-info">23.08.17</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="kt-widget5__content">
                                                <div class="kt-widget5__stats">
                                                    <span class="kt-widget5__number">19,200</span>
                                                    <span class="kt-widget5__sales">sales</span>
                                                </div>
                                                <div class="kt-widget5__stats">
                                                    <span class="kt-widget5__number">1046</span>
                                                    <span class="kt-widget5__votes">votes</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="kt-widget5__item">
                                            <div class="kt-widget5__content">
                                                <div class="kt-widget5__pic">
                                                    <img class="kt-widget7__img" src="./assets/media//products/product10.jpg" alt="">
                                                </div>
                                                <div class="kt-widget5__section">
                                                    <a href="#" class="kt-widget5__title">
                                                        Branding Mockup
                                                    </a>
                                                    <p class="kt-widget5__desc">
                                                        Metronic bootstrap themes.
                                                    </p>
                                                    <div class="kt-widget5__info">
                                                        <span>Author:</span>
                                                        <span class="kt-font-info">Fly themes</span>
                                                        <span>Released:</span>
                                                        <span class="kt-font-info">23.08.17</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="kt-widget5__content">
                                                <div class="kt-widget5__stats">
                                                    <span class="kt-widget5__number">24,583</span>
                                                    <span class="kt-widget5__sales">sales</span>
                                                </div>
                                                <div class="kt-widget5__stats">
                                                    <span class="kt-widget5__number">3809</span>
                                                    <span class="kt-widget5__votes">votes</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end:: Content -->
            </div>
        </div>
    </div>
@endsection