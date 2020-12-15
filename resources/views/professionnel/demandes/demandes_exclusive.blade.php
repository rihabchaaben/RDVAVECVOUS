@extends('layouts.front.professionnel.master')
@section('content')


    <!-- begin:: Content -->

    <div class="kt-content kt-grid__item kt-grid__item--fluid">
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">
                    Demandes
                </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <div class="kt-subheader__group" id="kt_subheader_search">
            <span class="kt-subheader__desc" id="kt_subheader_total">
                                    Liste des demandes exclusive
            </span>

                </div>

            </div>

        </div>
        <br>
        <div class="kt-portlet kt-portlet--tabs kt-portlet--fluid">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Mes demandes Exclusive
                    </h3>
                </div>

            </div>
            <div class="kt-portlet__body">
                <div class="tab-content">
                    <div class="tab-pane active" id="kt_widget2_tab2_content">
                        <div class="kt-widget2">

                            <table class="table table-striped" id="kt_table_1">
                                <thead>
                                <tr>

                                    <th>Titre</th>
                                    <th>Date RDV</th>
                                    <th>Nom du demandeur</th>
                                    <th>Téléphone</th>
                                    <th>Ville</th>
                                    <th>Statut</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($propositions as $proposition)
                                    <tr>
                                        <td>{{$proposition->nom}}</td>
                                        <td>{{$proposition->created_at}}</td>
                                        <td>{{$proposition->demandeur->nom}}</td>
                                        <td>{{$proposition->demandeur->telephone}}</td>
                                        <td>{{$proposition->ville->nom}}</td>
                                        <td><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Nouveau</span>
                                        </td>
                                        <td>
                                            <a href="{{route('pro.demande_show',$proposition->id)}}"> <i
                                                        class="flaticon-eye"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

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