@extends('layouts.front.professionnel.master')
@section('content')
    <style>
        .kt-badge.kt-badge--md  {
            height: 18px;
            width: 16px;
        }
    </style>

    <!-- begin:: Content -->

    <div class="kt-content kt-grid__item kt-grid__item--fluid">
<!--
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">
                   MES DEVIS
                </h3>

                {{--<span class="kt-subheader__separator kt-subheader__separator--v"></span>--}}

                {{--<div class="kt-subheader__group" id="kt_subheader_search">--}}
            {{--<span class="kt-subheader__desc" id="kt_subheader_total">--}}
                                    {{--Liste des devis refusé--}}
            {{--</span>--}}

                {{--</div>--}}

            </div>

        </div>
-->

        <div class="kt-portlet kt-portlet--tabs kt-portlet--fluid">
            <div class="kt-portlet__head bg-blue">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Mes devis
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand colors-item" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('pro.mes_devis')}}" role="tab"
                               aria-selected="false">
                                {{--Tous mes devis--}}
                                Créer un devis
                                &nbsp;<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded">{{$cntDevis}}</span>

                            </a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('pro.mes_devis_attente')}}" role="tab"
                               aria-selected="true">
                                En attente
                                &nbsp;<span class="kt-badge kt-badge--warning kt-badge--md">{{$cntDevisAttente}}</span>

                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('pro.mes_devis_accepte')}}" role="tab"
                               aria-selected="false">
                                Accepté
                                &nbsp;<span class="kt-badge kt-badge--brand kt-badge--md">{{$cntDevisAccepte}}</span>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#kt_widget2_tab1_content" role="tab"
                               aria-selected="true">
                                Refusé
                                &nbsp;<span class="kt-badge kt-badge--danger kt-badge--md kt-badge--rounded">{{$cntDevisRefuse}}</span>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="kt-portlet__body">
                <div class="tab-content">
                    <div class="tab-pane active" id="kt_widget2_tab1_content">
                        <div class="kt-widget2">
                            @if($devis->isEmpty())
                                <p>AUCUN DEVIS</p>
                            @else
                                <table class="table table-striped" id="kt_table_1">
                                    <thead>
                                    <tr>

                                        <th>Nom du demandeur</th>
                                        <th>Titre de la demande</th>
                                        <th>Lieux</th>
                                        <th>Montant HT</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($devis as $devi)
                                        <tr>
                                            <td>{{$devi->proposition->demande->demandeur->nom}}</td>
                                            <td>{{$devi->proposition->demande->nom}}</td>
                                            <td>{{$devi->proposition->demande->ville->name}}</td>
                                            <td>{{$devi->montant}}</td>
                                            <td>
                                                <span class="kt-badge  kt-badge--warning kt-badge--inline kt-badge--pill">En Attente</span>
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
                                                                <a href="#" class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                    <span class="kt-nav__link-text">Consulter le DeviS HS</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
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

@section('script')
    <!--begin::Page Scripts(used by this page) -->
    <script src="../assets/app/custom/general/crud/metronic-datatable/base/html-table.js"
            type="text/javascript"></script>

    <!--end::Page Scripts -->
@endsection
@endsection