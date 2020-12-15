@extends('layouts.front.demandeurs.master')
@section('content')
    <style>

        .kt-portlet .kt-portlet__body {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            padding: 25px;
            border-radius: 4px;
        }

        .kt-widget.kt-widget--user-profile-3 .kt-widget__top {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
        }

        .kt-widget.kt-widget--user-profile-3 .kt-widget__top .kt-widget__media img {
            width: 110px;
            border-radius: 8px;
        }

        .kt-widget.kt-widget--user-profile-3 .kt-widget__top .kt-widget__content {
            width: 100%;
            padding-left: 1.7rem;
        }

        .kt-widget.kt-widget--user-profile-3 .kt-widget__top .kt-widget__content .kt-widget__head {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .kt-widget.kt-widget--user-profile-3 .kt-widget__top .kt-widget__content .kt-widget__head .kt-widget__username {
            font-size: 1.3rem;
            color: #464457;
            font-weight: 500;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .kt-widget.kt-widget--user-profile-3 .kt-widget__top .kt-widget__content .kt-widget__subhead {
            padding: 0.6rem 0 0.8rem 0;
        }

        .kt-widget.kt-widget--user-profile-3 .kt-widget__top .kt-widget__content .kt-widget__info .kt-widget__desc {
            color: #6c7293;
            font-weight: 400;
            padding-right: 1rem;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            margin-bottom: 0.5rem;
        }

        .kt-widget.kt-widget--user-profile-3 .kt-widget__top .kt-widget__content .kt-widget__info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
        }

        .kt-widget.kt-widget--user-profile-3 .kt-widget__top .kt-widget__content .kt-widget__subhead a {
            padding-right: 2rem;
            color: #a7abc3;
            font-weight: 500;
        }

        .kt-widget.kt-widget--user-profile-3 .kt-widget__top .kt-widget__content .kt-widget__subhead a i {
            padding-right: 0.5rem;
        }

        .kt-widget.kt-widget--user-profile-3 .kt-widget__top .kt-widget__content .kt-widget__info .kt-widget__progress {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            max-width: 500px;
            width: 100%;
            margin: 0.1rem 0;
        }

        .kt-widget.kt-widget--user-profile-3 .kt-widget__top .kt-widget__content .kt-widget__info .kt-widget__progress .kt-widget__text {
            padding-right: 1rem;
            color: #6c7293;
            font-weight: 500;
        }

        .kt-widget.kt-widget--user-profile-3 .kt-widget__bottom {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            border-top: 1px solid #ebedf2;
            margin-top: 2rem;
        }

        .kt-widget.kt-widget--user-profile-3 .kt-widget__bottom .kt-widget__item {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            padding: 2rem 1.5rem 0 0;

        }

        .kt-widget.kt-widget--user-profile-3 .kt-widget__bottom .kt-widget__item .kt-widget__icon i {
            font-size: 2.7rem;
            color: #adb1c7;
            font-weight: 400;
        }

        .kt-widget.kt-widget--user-profile-3 .kt-widget__bottom .kt-widget__item .kt-widget__details {
            padding-left: 1rem;
        }

        .kt-widget.kt-widget--user-profile-3 .kt-widget__bottom .kt-widget__item .kt-widget__details .kt-widget__value {
            display: block;
            color: #464457;
            font-weight: 600;
            font-size: 1.2rem;
        }

        .kt-widget.kt-widget--user-profile-3 .kt-widget__bottom .kt-widget__item .kt-widget__details a.kt-widget__value {
            font-size: 0.95rem;
        }
    </style>
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
                                            class="kt-menu__linkcol-icon fa fa-database"></i><span
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

            <div class="kt-content kt-grid__item kt-grid__item--fluid" id="kt_content">

            <div class="kt-portlet">
                <div class="kt-portlet__body">
                    <div class="kt-widget kt-widget--user-profile-3">
                        <div class="kt-widget__top">
                            <div class="kt-widget__media kt-hidden-">
                                <img src="../assets/media/users/100_1.jpg" alt="image">
                            </div>
                            <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                                JM
                            </div>
                            <div class="kt-widget__content">
                                <div class="kt-widget__head">
                                    <a href="#" class="kt-widget__username">
                                        Jason Muller
                                        <i class="flaticon2-correct kt-font-success"></i>
                                    </a>

                                    <div class="kt-widget__action">
                                        <button type="button" class="btn btn-label-success btn-sm btn-upper">accepter
                                        </button>&nbsp;
                                        <button type="button" class="btn btn-brand btn-sm btn-upper">refuser</button>
                                    </div>
                                </div>

                                <div class="kt-widget__subhead">
                                    <a href="#"><i class="flaticon2-calendar-3"></i>PR Manager </a>
                                    <a href="#"><i class="flaticon2-placeholder"></i>Melbourne</a>
                                </div>

                                <div class="kt-widget__info">
                                    <div class="kt-widget__desc">
                                        I distinguish three main text objektive could be merely to inform people.<br>
                                        A second could be persuade people.You want people to bay objective
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="kt-widget__bottom">


                            <div class="kt-widget__item">
                                <div class="kt-widget__icon">
                                    <i class="flaticon-pie-chart"></i>
                                </div>
                                <div class="kt-widget__details">
                                    <span class="kt-widget__title">Statut</span>
                                    <span class="kt-widget__value">En attente</span>
                                </div>
                            </div>

                            <div class="kt-widget__item">
                                <div class="kt-widget__icon">
                                    <i class="flaticon-file-2"></i>
                                </div>
                                <div class="kt-widget__details">
                                    <span class="kt-widget__title">Devis</span>
                                    <a href="#" class="kt-widget__value kt-font-brand">View</a>
                                </div>
                            </div>

                            <div class="kt-widget__item">
                                <div class="kt-widget__icon">
                                    <i class="flaticon-chat-1"></i>
                                </div>
                                <div class="kt-widget__details">
                                    <span class="kt-widget__title">648 Comments</span>
                                    <a href="#" class="kt-widget__value kt-font-brand">View</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

@endsection