@extends('layouts.admin.master')
@section('content')
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
        <!-- begin:: Content Head -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">


        </div>
        <!-- end:: Content Head -->
        <!-- begin:: Content -->
        <div class="kt-subheader-search ">
            <div class="kt-container  kt-container--fluid ">
                <h3 class="kt-subheader-search__title">
                    Liste des Vendeurs
                    <span class="kt-subheader-search__desc">Liste des Vendeurs effectué dans notre platfort</span>
                </h3>
                <form class="kt-form">
                    <div class="kt-grid kt-grid--desktop kt-grid--ver-desktop">
                        <div class="kt-grid__item kt-grid__item--middle">
                            <div class="row kt-margin-r-10">
                                <div class="col-lg-6">
                                    <div class="kt-input-icon kt-input-icon--pill kt-input-icon--right">
                                        <input type="text" class="form-control form-control-pill"
                                               placeholder="Booking Number">
                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i
                                                        class="la la-puzzle-piece"></i></span></span>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="kt-input-icon kt-input-icon--pill kt-input-icon--right">
                                        <input type="text" class="form-control form-control-pill" placeholder="From">
                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i
                                                        class="la la-calendar-check-o"></i></span></span>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="kt-input-icon kt-input-icon--pill kt-input-icon--right">
                                        <input type="text" class="form-control form-control-pill" placeholder="To">
                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i
                                                        class="la la-calendar-check-o"></i></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-grid__item kt-grid__item--middle">
                            <div class="kt-margin-top-20 kt--visible-tablet-and-mobile"></div>
                            <button type="button"
                                    class="btn btn-pill btn-upper btn-bold btn-font-sm kt-subheader-search__submit-btn">
                                Recherche
                            </button>

                            &nbsp
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <br><br>
        <div class="kt-container  kt-grid__item kt-grid__item--fluid">


            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                        <h3 class="kt-portlet__head-title">
                            Liste des vendeurs
                            <small>Liste des demandeurs inscris dans notre platform</small>
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-download"></i> Export
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                                <span class="kt-nav__section-text">Choose an option</span>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-print"></i>
                                                    <span class="kt-nav__link-text">Print</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-copy"></i>
                                                    <span class="kt-nav__link-text">Copy</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                    <span class="kt-nav__link-text">Excel</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                    <span class="kt-nav__link-text">CSV</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                    <span class="kt-nav__link-text">PDF</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                &nbsp;
                                <a href="{{route('admin.vendeur_create')}}"
                                   class="btn btn-brand btn-elevate btn-icon-sm">
                                    <i class="la la-plus"></i>
                                    Ajouter un vendeur
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">

                    <div class="kt-section">
                        <div class="kt-section__content">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Secteur Attribué</th>
                                    <th>Code Promo</th>
                                    <th>NB demandeur/semaine</th>
                                    <th>NB artisant/semaine</th>
                                    <th>NB RDV accepté</th>
                                    <th>Score</th>
                                    <th>Actions</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>RDV2145</td>
                                    <td>Jhon</td>
                                    <td>Stone</td>
                                    <td>0321</td>
                                    <td>32214596</td>
                                    <td>Toulous rc rue charle</td>
                                    <td>5123</td>
                                    <td>12</td>
                                    <td>
                                        <div class="dropdown dropdown-inline">
                                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="flaticon-more-1"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end"
                                                 style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
                                                <ul class="kt-nav">
                                                    <li class="kt-nav__item">
                                                        <a href="#" class="kt-nav__link">
                                                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                            <span class="kt-nav__link-text">Editer</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="#" class="kt-nav__link">
                                                            <i class="kt-nav__link-icon flaticon2-send"></i>
                                                            <span class="kt-nav__link-text">Supprimer</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>RDV2s45</td>
                                    <td>Jeron</td>
                                    <td>Stoqne</td>
                                    <td>0123</td>
                                    <td>3296</td>
                                    <td>123</td>
                                    <td>5123</td>
                                    <td>16</td>
                                    <td>
                                        <div class="dropdown dropdown-inline">
                                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="flaticon-more-1"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end"
                                                 style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
                                                <ul class="kt-nav">
                                                    <li class="kt-nav__item">
                                                        <a href="#" class="kt-nav__link">
                                                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                            <span class="kt-nav__link-text">Editer</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__item">
                                                        <a href="#" class="kt-nav__link">
                                                            <i class="kt-nav__link-icon flaticon2-send"></i>
                                                            <span class="kt-nav__link-text">Supprimer</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection