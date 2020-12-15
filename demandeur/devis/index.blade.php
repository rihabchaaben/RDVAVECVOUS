@extends('layouts.front.demandeurs.master')
@section('content')
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
        <!-- begin:: Content Head -->

        {{--<div class="kt-subheader   kt-grid__item" id="kt_subheader">--}}
            {{--<div class="kt-subheader__main">--}}

                {{--<h3 class="kt-subheader__title">--}}
                    {{--Devis RDV--}}
                {{--</h3>--}}

                {{--<span class="kt-subheader__separator kt-subheader__separator--v"></span>--}}

                {{--<div class="kt-subheader__group" id="kt_subheader_search">--}}
            {{--<span class="kt-subheader__desc" id="kt_subheader_total">--}}
                                    {{--Liste des devis recu pour les demandes--}}
            {{--</span>--}}

                {{--</div>--}}

            {{--</div>--}}

        {{--</div>--}}
        <!-- end:: Content Head -->
        <!-- begin:: Content -->

        <div class="kt-content  kt-grid__item kt-grid__item--fluid">

            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg bg-blue">
                    <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                        <h3 class="kt-portlet__head-title">
                            Mes Devis

                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand colors-item" role="tablist">
                            <li class="nav-item ">
                                <a class="nav-link active" href="{{route('demandeur.mes_devis')}}" role="tab"
                                   aria-selected="false">
                                    Nouveau

                                    &nbsp; <span
                                    class="kt-badge kt-badge--danger kt-badge--md kt-badge--rounded">{{ $devis->count() }}</span>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('demandeur.mes_devis_accepte')}}" role="tab"
                                   aria-selected="false">
                                    Accepté
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="kt_widget2_tab2_content">
                            <div class="kt-widget2">
                            @if($devis->isEmpty())
                                <p>AUCUN DEVIS</p>
                            @else

                            <table id="kt_table_1" role="grid" style="width: 1237px;" class="table table-striped dataTable no-footer dtr-inline collapsed" class="table table-striped" id="kt_table_1">                                    <thead>
                                <thead>
                                    <tr>
                                        <th>Categerie</th>
                                        <th>Nom Artisan</th>
                                        {{-- <th>Demande N°</th> --}}
                                        <th>Demande</th>
                                        <th>Statut</th>
                                        <th>Montant HT</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($devis as $devi)
                                        <tr>

                                            <td>{{$devi->proposition->demande->categorie->label}}</td>
                                            <td>{{$devi->professionnel->nom}}</td>
                                            <td>{{$devi->proposition->demande->nom}}</td>
                                            <td><span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">Nouveau</span>
                                            </td>
                                            <td>{{$devi->montant}} €</td>
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
                                                                <a href="{{route('demandeur.mes_devis_show',$devi->id)}}"
                                                                   class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                    <span class="kt-nav__link-text">Consulter</span>
                                                                </a>
                                                            </li>
                                                            <li class="kt-nav__item">
                                                                <a href="{{route('demandeur.mes_devis_download',$devi->id)}}"
                                                                   title="devis"
                                                                   class="kt-nav__link print">
                                                                    <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                    <span class="kt-nav__link-text">Imprimer</span>
                                                                </a>
                                                            </li>
                                                            {{--<form action="{{route('admin.demandes.destroy',$devi->id)}}"--}}
                                                                  {{--method="POST" id="delete_demande">--}}

                                                                {{--<li class="kt-nav__item">--}}
                                                                    {{--<a href="#"--}}
                                                                       {{--class="kt-nav__link">--}}
                                                                        {{--<i class="kt-nav__link-icon flaticon2-send"></i>--}}
                                                                        {{--<span class="kt-nav__link-text">Télecharger</span>--}}
                                                                    {{--</a>--}}
                                                                    {{--@method('DELETE')--}}
                                                                    {{--@csrf--}}
                                                                {{--</li>--}}
                                                            {{--</form>--}}
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
    </div>

@stop
{{-- @section('script')
    <script src="http://www.position-absolute.com/creation/print/jquery.printPage.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.print').printPage();
        });
    </script> --}
{{-- @endsection --}}

