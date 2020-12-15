@extends('layouts.front.demandeurs.master')
@section('content')

    <!-- begin:: Content -->

    <div class="kt-content kt-grid__item kt-grid__item--fluid">


    <div class="row">

        <div class="col-lg-6">
            <!--Begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Extended Notes
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-notes">
                        <div class="kt-notes__items">
                            <div class="kt-notes__item">
                                <div class="kt-notes__media">
                                    <img class="kt-hidden-"
                                         src="{{asset('assets/media/users/100_3.jpg')}}"
                                         alt="image">
                                    <span class="kt-notes__icon kt-font-boldest kt-hidden">
                                    <i class="flaticon2-cup"></i>
                                </span>
                                    <h3 class="kt-notes__user kt-font-boldest kt-hidden">
                                        N S
                                    </h3>
                                </div>
                                <div class="kt-notes__content">
                                    <div class="kt-notes__section">
                                        <div class="kt-notes__info">
                                            <a href="#" class="kt-notes__title">
                                                New order
                                            </a>
                                            <span class="kt-notes__desc">
                                            9:30AM 16 June, 2015
                                        </span>
                                            <span class="kt-badge kt-badge--success kt-badge--inline">new</span>
                                        </div>
                                        <div class="kt-notes__dropdown">
                                            <a href="#" class="btn btn-sm btn-icon-md btn-icon" data-toggle="dropdown"
                                               aria-expanded="false">
                                                <i class="flaticon-more-1 kt-font-brand"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end"
                                                 style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(759px, 33px, 0px);">
                                                <ul class="kt-nav">
                                                    <li class="kt-nav__item">
                                                        <a href="#" class="kt-nav__link">
                                                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                            <span class="kt-nav__link-text">Reports</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="#" class="kt-nav__link">
                                                            <i class="kt-nav__link-icon flaticon2-send"></i>
                                                            <span class="kt-nav__link-text">Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="#" class="kt-nav__link">
                                                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                            <span class="kt-nav__link-text">Charts</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="#" class="kt-nav__link">
                                                            <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                            <span class="kt-nav__link-text">Members</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="#" class="kt-nav__link">
                                                            <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                            <span class="kt-nav__link-text">Settings</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="kt-notes__body">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.
                                </span>
                                </div>
                            </div>
                            <div class="kt-notes__item kt-notes__item--clean">
                                <div class="kt-notes__media">
                                    <img class="kt-hidden"
                                         src="{{asset('assets/media/users/100_1.jpg')}}"
                                         alt="image">
                                    <span class="kt-notes__icon kt-font-boldest kt-hidden">
                                    <i class="flaticon2-cup"></i>
                                </span>
                                    <h3 class="kt-notes__user kt-font-boldest kt-hidden">
                                        M E
                                    </h3>
                                    <span class="kt-notes__circle kt-hidden-"></span>
                                </div>

                                <div class="kt-notes__content">
                                    <div class="kt-notes__section">
                                        <div class="kt-notes__info">
                                            <a href="#" class="kt-notes__title">
                                                Order
                                            </a>
                                            <span class="kt-notes__desc">
                                            11:40AM 14 March, 2012
                                        </span>
                                            <span class="kt-badge kt-badge--danger kt-badge--inline">important</span>
                                        </div>
                                    </div>
                                    <span class="kt-notes__body">
                                    Sed ut sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.
                                </span>
                                </div>
                            </div>
                            <div class="kt-notes__item kt-notes__item--clean">
                                <div class="kt-notes__media">
                                    <img class="kt-hidden"
                                         src="{{asset('assets/media/users/100_1.jpg')}}"
                                         alt="image">
                                    <span class="kt-notes__icon kt-font-boldest kt-hidden">
                                    <i class="flaticon2-cup"></i>
                                </span>
                                    <h3 class="kt-notes__user kt-font-boldest kt-hidden">
                                        N B
                                    </h3>
                                    <span class="kt-notes__circle kt-hidden-"></span>
                                </div>

                                <div class="kt-notes__content">
                                    <div class="kt-notes__section">
                                        <div class="kt-notes__info">
                                            <a href="#" class="kt-notes__title">
                                                Remarks
                                            </a>
                                            <span class="kt-notes__desc">
                                            10:30AM 23 April, 2013
                                        </span>
                                        </div>
                                    </div>
                                    <span class="kt-notes__body">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End::Portlet-->
        </div>
    </div>

@endsection