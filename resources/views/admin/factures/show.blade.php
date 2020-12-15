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
                    Liste des factures
                    <span class="kt-subheader-search__desc">Liste des Devis effectué dans notre platfort</span>
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
                                Recherche Devis
                            </button>


                            <div class="dropdown dropdown-inline">
                                <button type="button"
                                        class="btn btn-pill btn-upper btn-bold btn-font-sm kt-subheader-search__submit-btn dropdown-toggle"
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
                            Liste des factures
                            <small>Liste des factures effectué dans notre platform</small>
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                <div class="tab-content">
                    <div class="tab-pane active" id="kt_widget2_tab2_content">
                        <div class="kt-widget2">
                            @if($propositions->isEmpty())
                                <p>AUCUNE DEMANDE</p>
                            @else
                                <table class="table table-striped" id="kt_table_1">
                                    <thead>
                                    <tr>

                                        <th>Titre</th>
                                        <th>Date RDV</th>
                                        <th>Descriptif</th>
                                        <th>Téléphone</th>
                                        <th>Ville</th>
                                        <th>Coupon</th>
                                        <th>Statut</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($propositions as $key=>$proposition)
                                        <tr>
                                            <td>{{$proposition->demande->nom}}</td>
                                            <td>{{\Carbon\Carbon::parse($proposition->demande->events->first()->start_date)->formatLocalized('%A %d %B %Y')}}</td>
                                            <td>{{$proposition->demande->description}}</td>
                                            <td>{{$proposition->demande->demandeur->telephone}}</td>
                                            <td>{{$proposition->demande->ville->name}}</td>
                                            @if(isset($proposition->coupon))
                                             <td>{{$proposition->coupon}}</td>
                                             @else  <td>------</td>
                                             @endif
                                            <td>


                                @if($proposition->professionnel->isvip($proposition->demande->demandeur->id)==1)


                                <span class="kt-badge  kt-badge--warning kt-badge--inline kt-badge--pill" style="font-size: 1.2rem; font-weight: bold;"> Exclusivite</span>
                               @else
                                              @if($proposition->status===2)

                                                <span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill" style="font-size: 1.2rem; font-weight: bold;"> Acceptée</span>
                                              @else
                                            <span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill"   style="font-size: 1.2rem; font-weight: bold;" > Validée</span>
                                             @endif
                             @endif
                                            </td>
                                            <td>
                                                <div class="dropdown dropdown-inline">
                                                    <button type="button"
                                                            class="btn btn-clean btn-sm btn-icon btn-icon-md"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                        <i class="flaticon-more-1"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                         x-placement="bottom-end"
                                                         style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
                                                        <ul class="kt-nav">
                                                            <li class="kt-nav__item">
                                                                <a data-toggle="modal" data-target="#kt_modal_rdv_details{{$key}}"
                                                                   class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                    <span class="kt-nav__link-text">Consulter RDV</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        @include('partials.rdv_details',['proposition'=>$proposition,'key'=>$key])
                                    @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>

                </div>
            </div>

            </div>

        </div>
    </div>
@endsection
