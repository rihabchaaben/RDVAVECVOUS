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
        {{--<div class="kt-subheader   kt-grid__item" id="kt_subheader">--}}
            {{--<div class="kt-subheader__main">--}}

                {{--<h3 class="kt-subheader__title">--}}
                    {{--Demandes--}}
                {{--</h3>--}}

                {{--<span class="kt-subheader__separator kt-subheader__separator--v"></span>--}}

                {{--<div class="kt-subheader__group" id="kt_subheader_search">--}}
            {{--<span class="kt-subheader__desc" id="kt_subheader_total">--}}
                                    {{--Liste des demandes selon vos secteurs et catégorie--}}
            {{--</span>--}}

                {{--</div>--}}

            {{--</div>--}}

        {{--</div>--}}
        {{--<div class="kt-demo">--}}
        {{--<div class="kt-demo__preview">--}}
        {{--<div class="alert alert-success" role="alert">--}}
        {{--<div class="alert-text">--}}
        {{--<h4 class="alert-heading">Félicitation!</h4>--}}
        {{--<p>Votre proposition de rdv a été acceptée, le demandeur veut vous rencontrer, pour--}}
        {{--connaitre ses coordonnées,--}}
        {{--.</p>--}}
        {{--<hr>--}}
        {{--<p class="mb-0"> réglez votre facture ici (un lien pour le facturation). <a--}}
        {{--href="#">Payer ma facture</a></p>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        <div class="kt-portlet kt-portlet--tabs kt-portlet--fluid">
            <div class="kt-portlet__head bg-blue">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        ETAT DE MES DEMANDES
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand colors-item" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#kt_widget2_tab1_content" role="tab"
                               aria-selected="false">
                                Nouvelle demande
                                &nbsp; <span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded">{{$newCnt}}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('pro.mes_demandes_attente')}}" role="tab"
                               aria-selected="true">
                                En attente
                                &nbsp;<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded">{{$attenteCnt}}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('pro.mes_demandes_accepte')}}" role="tab"
                               aria-selected="false">
                                Acceptée
                                &nbsp;<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded">{{$accepteCnt}}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('pro.mes_demandes_valide')}}" role="tab"
                               aria-selected="true">
                                Validée
                                &nbsp;<span
                                        class="kt-badge kt-badge--danger kt-badge--md kt-badge--rounded">{{$valideCnt}}</span>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('pro.mes_demandes_accepte')}}" role="tab"
                               aria-selected="true">
                                Refusée
                                &nbsp; <span class="kt-badge kt-badge--danger kt-badge--md kt-badge--rounded">{{$refuseCnt}}</span>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="kt-portlet__body">
                <div class="tab-content">
                    <div class="tab-pane active" id="kt_widget2_tab1_content">
                        <div class="kt-widget2">
                            @if($demandes->isEmpty() && $propositions->isEmpty())
                                <p>AUCUNE DEMANDE</p>
                            @else
                                <table class="table table-striped" id="kt_table_1">
                                    <thead>
                                    <tr>

                                        <th>Titre</th>
                                        <th>Date RDV</th>
                                        <th>Descriptif</th>
                                        <th>Nom</th>

                                        <th>Téléphone</th>
                                        <th>Ville</th>
                                        <th>Statut</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($demandes as $demande)
                                        <tr>
                                            <td>{{$demande->nom}}</td>


                                            <td>{{\Carbon\Carbon::parse($demande->events->first()->start_date)->formatLocalized('%A %d %B %Y')}}</td>
                                            <td>{{$demande->description}}</td>
                                           @if(auth()->user()->professionnel->isvip($demande->demandeur->id)==1)
                                          <td >{{$demande->demandeur->nom}}</td>
                                            <td  >
                                             {{$demande->demandeur->telephone}} </td>

                                          @else

                                          <td style="filter: blur(3px);" title="les données sont protégées">
                                          inconnu
                                            </td>
                                          <td style="filter: blur(3px);" title="les données sont protégées">

                                            0000000000

                                            @endif


                                            </td>

                                            <td >{{$demande->ville->name}}</td>
                                            <td>

                                                @if (auth()->user()->professionnel->isvip($demande->demandeur->id)==1)
<span class="kt-badge  kt-badge--warning kt-badge--inline kt-badge--pill"><i
    class="flaticon-star"></i>&nbsp;Exclusive</span>
@else                                                   <span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Nouveau</span>

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
                                                                <a href="{{route('pro.demande_show',$demande->id)}}"
                                                                   class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                    <span class="kt-nav__link-text">En savoir plus</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @foreach($propositions as $prop)
                                        <tr>
                                            <td>{{$prop->nom}}</td>
                                            <td>{{\Carbon\Carbon::parse($prop->events->first()->start_date)->formatLocalized('%A %d %B %Y')}}</td>
                                            <td>{{$prop->description}}</td>
                                            <td>{{$prop->demandeur->nom}}</td>
                                            <td>{{$prop->demandeur->telephone}}</td>

                                            <td>{{$prop->ville->name}}</td>
                                            <td>
                                                <span class="kt-badge  kt-badge--warning kt-badge--inline kt-badge--pill"><i
                                                            class="flaticon-star"></i>&nbsp;Exclusive</span>
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
                                                                <a href="{{route('pro.demande_show',$prop->id)}}"
                                                                   class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                    <span class="kt-nav__link-text">Proposer RDV</span>
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