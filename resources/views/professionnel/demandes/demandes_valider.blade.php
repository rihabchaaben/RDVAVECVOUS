@extends('layouts.front.professionnel.master')
@section('content')
    <link href="{{asset('assets/app/custom/wizard/wizard-v2.default.css')}}" rel="stylesheet" type="text/css"/>

    <style>
        .kt-badge.kt-badge--md {
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
                                    {{--Liste des demandes valider--}}
            {{--</span>--}}

                {{--</div>--}}

            {{--</div>--}}

        {{--</div>--}}
        <div class="col" id="barre">
                    <div class="alert alert-info fade show" role="alert">
                        <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                        <div class="alert-text"> 
                            {{-- <p style="font-size: 1.2rem;font-weight: bold;">Les lignes en Bleu   represente le demandeur qui ont changer les RDVs.</p> --}}
                            <p style="font-size: 1.2rem;font-weight: bold;">Les lignes en bleu représentent les demandeurs qui ont changé les RDVs.</p>
                             
                        </div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="la la-close"></i></span>
                            </button>
                        </div>
                    </div>
         </div>

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
                            <a class="nav-link" href="{{route('pro.mes_demandes')}}" role="tab"
                               aria-selected="false">
                                Nouvelle demande
                                &nbsp; <span
                                        class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded">{{$newCnt}}</span>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('pro.mes_demandes_attente')}}" role="tab"
                               aria-selected="true">
                                En attente
                                &nbsp;<span class="kt-badge kt-badge--warning kt-badge--md">{{$attenteCnt}}</span>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('pro.mes_demandes_accepte')}}" role="tab"
                               aria-selected="false">
                                Acceptée
                                &nbsp;<span class="kt-badge kt-badge--brand kt-badge--md">{{$accepteCnt}}</span>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#kt_widget2_tab2_content" role="tab"
                               aria-selected="false">
                                Validée
                                &nbsp;<span
                                        class="kt-badge kt-badge--danger kt-badge--md kt-badge--rounded">{{$valideCnt}}</span>

                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{route('pro.mes_demandes_refuse')}}" role="tab"
                               aria-selected="true">
                                Refusée
                                &nbsp; <span
                                        class="kt-badge kt-badge--danger kt-badge--md kt-badge--rounded">{{$refuseCnt}}</span>

                            </a>
                        </li>
                    </ul>
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
                                        <th>Nom</th>
                                        <th>Téléphone</th>
                                        <th>Ville</th>
                                        <th>Coupon</th>
                                        <th>Statut</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($propositions as $key=>$proposition)

                                         @if($proposition->demande->events->first()->created_at!=$proposition->demande->events->first()->updated_at)
                                             <tr
                                             style="background-color:#d9e8f7;" >
                                            <td> <img  width="20px" src="https://lh3.googleusercontent.com/proxy/ji4kWAo-3qHrzvHGS7ddOcm0ZFyYXVEVBullnOxOWHAtq9Uzu8Sz7UDBEkcPtwNb0__hGucwevG9M5C5cBdlKZ4WRzFcJdP8x9o3Jcr4tVAmr_Ubdx4SqPA99OIE0sg" alt="">   {{$proposition->demande->nom}}</td>
                                           <style>
                                               #barre{
                                                   display: block;
                                               }
                                           </style>


                                            @else

                                            <tr>
                                            <td>   {{$proposition->demande->nom}}</td>
                                           @endif
                                            <td>{{\Carbon\Carbon::parse($proposition->demande->events->first()->start_date)->formatLocalized('%A %d %B %Y')}}</td>
                                            <td>{{$proposition->demande->description}}</td>
                                            <td >{{$proposition->demande->demandeur->nom}}</td>

                                            <td>{{$proposition->demande->demandeur->telephone}}</td>
                                            <td>{{$proposition->demande->ville->name}}</td>
                                            @if(isset($proposition->coupon))
                                             <td>{{$proposition->coupon}}</td>
                                             @else  <td>------</td>
                                             @endif
                                            <td>
                                                <span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Paiment effectué</span>
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
                                                                   <i class="kt-nav__link-icon flaticon2-search"></i>
                                                                   <span class="kt-nav__link-text">Consulter RDV</span>
                                                                </a>
                                                            </li>
                                                            <li class="kt-nav__item">
                                                                <a href="{{route('pro.chat.show',[$proposition->id,'#last_chat'])}}"
                                                                   class="kt-nav__link">
                                                                   <i class=" kt-nav__link-icon flaticon2-mail kt-font-warning"></i>
                                                                   <span class="kt-nav__link-text">Chat</span>
                                                                </a>
                                                            </li>
                                                            <li class="kt-nav__item">
                                                                <a href="{{route('pro.mes_devis_create',$proposition->id)}}"
                                                                   class="kt-nav__link">
                                                                   <i class="kt-nav__link-icon flaticon-settings kt-font-danger"></i>
                                                                   <span class="kt-nav__link-text">Créér le devis</span>
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

@section('script')
    <!--begin::Page Scripts(used by this page) -->
    <script src="../assets/app/custom/general/crud/metronic-datatable/base/html-table.js"
            type="text/javascript"></script>

    <!--end::Page Scripts -->
@endsection
@endsection
