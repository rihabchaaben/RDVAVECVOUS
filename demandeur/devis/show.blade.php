@extends('layouts.front.demandeurs.master')
@section('content')

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{asset('assets/app/custom/invoices/invoice-v1.default.css')}}" rel="stylesheet" type="text/css"/>

    <!--end::Page Custom Styles -->

    <style>
        .kt-invoice-1 {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }

        .kt-invoice-1 .kt-invoice__container {
            width: 100%;
            margin: 0;
            padding: 0 30px;
        }

        .kt-invoice-1 .kt-invoice__head {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            background-size: cover;
            background-repeat: no-repeat;
            padding: 80px 0;
        }

        .kt-invoice-1 .kt-invoice__head .kt-invoice__container {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }

        .kt-invoice-1 .kt-invoice__head .kt-invoice__brand {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .kt-invoice-1 .kt-invoice__head .kt-invoice__brand .kt-invoice__title {
            font-weight: 700;
            font-size: 2.7rem;
            margin-right: 10px;
            margin-top: 5px;
            color: #fff;
            vertical-align: top;
        }

        .kt-invoice-1 .kt-invoice__head .kt-invoice__brand .kt-invoice__logo {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-top: 5px;
            text-align: right;
        }

        .kt-invoice-1 .kt-invoice__head .kt-invoice__brand .kt-invoice__logo img {
            text-align: right;
        }

        .kt-invoice-1 .kt-invoice__head .kt-invoice__brand .kt-invoice__logo .kt-invoice__desc {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            text-align: right;
            padding: 1rem 0 1rem 0;
            color: rgba(255, 255, 255, 0.7);
        }

        .kt-invoice-1 .kt-invoice__head .kt-invoice__items {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-top: 50px;
            width: 100%;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
        }

        .kt-invoice-1 .kt-invoice__head .kt-invoice__items .kt-invoice__item {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            color: #fff;
            margin-right: 10px;
            margin-top: 20px;
        }

        .kt-invoice-1 .kt-invoice__head .kt-invoice__items .kt-invoice__item:last-child {
            margin-right: 0;
        }

        .kt-invoice-1 .kt-invoice__head .kt-invoice__items .kt-invoice__item .kt-invoice__subtitle {
            font-weight: 500;
            padding-bottom: 0.5rem;
        }

        .kt-invoice-1 .kt-invoice__head .kt-invoice__items .kt-invoice__item .kt-invoice__text {
            color: rgba(255, 255, 255, 0.7);
        }

        .kt-invoice-1 .kt-invoice__body {
            padding: 3rem 0;
        }

        .kt-invoice-1 .kt-invoice__body table {
            background-color: transparent;
        }

        .kt-invoice-1 .kt-invoice__body table thead tr th {
            background-color: transparent;
            padding: 1rem 0 0.5rem 0;
            border-top: none;
            color: #74788d;
        }

        .kt-invoice-1 .kt-invoice__body table thead tr th:not(:first-child) {
            text-align: right;
        }

        .kt-invoice-1 .kt-invoice__body table tbody tr td {
            background-color: transparent;
            padding: 1rem 0 1rem 0;
            border-top: none;
            font-weight: 700;
            font-size: 1.1rem;
            color: #595d6e;
        }

        .kt-invoice-1 .kt-invoice__body table tbody tr td:not(:first-child) {
            text-align: right;
        }

        .kt-invoice-1 .kt-invoice__body table tbody tr td:last-child {
            color: #FE21BE;
            font-size: 1.2rem;
        }

        .kt-invoice-1 .kt-invoice__body table tbody tr:first-child td {
            padding-top: 1.8rem;
        }

        .kt-invoice-1 .kt-invoice__footer {
            padding: 3rem 0;
            background-color: #f7f8fa;
        }

        .kt-invoice-1 .kt-invoice__footer .kt-invoice__container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .kt-invoice-1 .kt-invoice__footer .kt-invoice__bank {
            margin-right: 10px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .kt-invoice-1 .kt-invoice__footer .kt-invoice__bank .kt-invoice__title {
            font-size: 1.2rem;
            text-transform: capitalize;
            font-weight: 600;
            color: #74788d;
        }

        .kt-invoice-1 .kt-invoice__footer .kt-invoice__bank .kt-invoice__item {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            margin-top: 10px;
        }

        .kt-invoice-1 .kt-invoice__footer .kt-invoice__bank .kt-invoice__item .kt-invoice__label {
            font-size: 1.1rem;
            font-weight: 500;
            margin-right: 40px;
            color: #595d6e;
            text-align: left;
        }

        .kt-invoice-1 .kt-invoice__footer .kt-invoice__bank .kt-invoice__item .kt-invoice__value {
            font-size: 1.1rem;
            font-weight: 400;
            color: #74788d;
            text-align: right;
        }

        .kt-invoice-1 .kt-invoice__footer .kt-invoice__total {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            text-align: right;
        }

        .kt-invoice-1 .kt-invoice__footer .kt-invoice__total .kt-invoice__title {
            font-size: 1.2rem;
            text-transform: capitalize;
            font-weight: 600;
            color: #74788d;
        }

        .kt-invoice-1 .kt-invoice__footer .kt-invoice__total .kt-invoice__price {
            color: #FE21BE;
            font-weight: 700;
            font-size: 24px;
        }

        .kt-invoice-1 .kt-invoice__footer .kt-invoice__total .kt-invoice__notice {
            font-size: 1rem;
            font-weight: 500;
            color: #74788d;
        }

        .kt-invoice-1 .kt-invoice__actions {
            padding: 2rem 0;
        }

        .kt-invoice-1 .kt-invoice__actions .kt-invoice__container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        @media (min-width: 1025px) {
            .kt-invoice-1 .kt-invoice__container {
                width: 80%;
                margin: 0 auto;
            }
        }

        @media (max-width: 768px) {
            .kt-invoice-1 .kt-invoice__container {
                width: 100%;
                margin: 0;
                padding: 0 20px;
            }

            .kt-invoice-1 .kt-invoice__head {
                padding: 20px 0;
            }

            .kt-invoice-1 .kt-invoice__head .kt-invoice__brand {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }

            .kt-invoice-1 .kt-invoice__head .kt-invoice__brand .kt-invoice__title {
                font-weight: 700;
                font-size: 2rem;
                margin-bottom: 30px;
            }

            .kt-invoice-1 .kt-invoice__head .kt-invoice__brand .kt-invoice__logo {
                text-align: left;
            }

            .kt-invoice-1 .kt-invoice__head .kt-invoice__brand .kt-invoice__logo img {
                text-align: left;
            }

            .kt-invoice-1 .kt-invoice__head .kt-invoice__brand .kt-invoice__logo .kt-invoice__desc {
                text-align: left;
            }

            .kt-invoice-1 .kt-invoice__head .kt-invoice__items {
                margin-top: 20px;
            }

            .kt-invoice-1 .kt-invoice__body {
                padding: 2rem 0;
            }

            .kt-invoice-1 .kt-invoice__footer {
                padding: 2rem 0;
            }

            .kt-invoice-1 .kt-invoice__footer .kt-invoice__container {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }

            .kt-invoice-1 .kt-invoice__footer .kt-invoice__bank .kt-invoice__item .kt-invoice__label {
                margin-right: 20px;
            }

            .kt-invoice-1 .kt-invoice__footer .kt-invoice__total {
                margin-top: 30px;
                text-align: left;
            }
        }

        @media print {
            .kt-header,
            .kt-header-mobile,
            .kt-aside,
            .kt-footer,
            .kt-subheader,
            .kt-scrolltop,
            .kt-quick-panel,
            .kt-demo-panel,
            .kt-sticky-toolbar {
                display: none !important;
            }

            body,
            .kt-wrapper,
            .kt-body,
            .kt-content {
                background: transparent !important;
                padding: 0 !important;
                margin: 0 !important;
            }

            .kt-invoice-1 {
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }

            .kt-invoice-1 .kt-invoice__head {
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }

            .kt-invoice-1 .kt-invoice__head .kt-invoice__container {
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }

            .kt-invoice-1 .kt-invoice__actions {
                display: none !important;
            }

            .kt-invoice-1 .kt-invoice__container {
                width: 100%;
                padding: 0 10px;
            }
        }

    </style>
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
        <!-- begin:: Content Head -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">


        </div>
        <!-- end:: Content Head -->
        <!-- begin:: Content -->
        <div class="kt-content kt-grid__item kt-grid__item--fluid">
            <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title">
                        Devis consultation
                    </h3>

                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                    <div class="kt-subheader__group" id="kt_subheader_search">
            <span class="kt-subheader__desc" id="kt_subheader_total">
                                    Devis Numéro ° 1235       </span>

                    </div>

                </div>

            </div>
            <div class="kt-portlet">
                <div class="kt-portlet__body kt-portlet__body--fit">
                    <div class="kt-invoice-1">
                        <div class="kt-invoice__head"
                             style="background-image: url(../../../assets/media/bg/bg-6.jpg);">
                            <div class="kt-invoice__container">
                                <div class="kt-invoice__brand">
                                    <h1 class="kt-invoice__title">DEVIS</h1>

                                    <div href="#" class="kt-invoice__logo">
                                        <a href="#" style="color:white">
                                            <h1>{{$devi->proposition->professionnel->nom}}</h1>
                                        </a>

                                        <span class="kt-invoice__desc">
                                            <span>{{$devi->proposition->demande->demandeur->nom}}</span>
														<span>Siret : {{$devi->proposition->professionnel->siret}}</span>
														<span>Tva : {{$devi->proposition->professionnel->tva}}</span>
							</span>
                                    </div>
                                </div>

                                <div class="kt-invoice__items">
                                    <div class="kt-invoice__item">
                                        {{-- <span class="kt-invoice__subtitle">DATE</span> --}}
                                        <span class="kt-invoice__text">{{$devi->created_at->format('d-m-y')}}</span>
                                    </div>
                                    <div class="kt-invoice__item">
                                        {{-- <span class="kt-invoice__subtitle">NOM ASSURANCE</span> --}}
                                        <span class="kt-invoice__text">{{$devi->proposition->professionnel->nom_assurance}}</span>
                                    </div>
                                    <div class="kt-invoice__item">
                                        {{-- <span class="kt-invoice__subtitle">GARANTIE</span> --}}
                                        <span class="kt-invoice__text">{{$devi->proposition->professionnel->description_garantie}}</span>
                                    </div>
                                    <div class="kt-invoice__item">
                                        {{-- <span class="kt-invoice__subtitle">DEVIS N.</span> --}}
                                        <span class="kt-invoice__text">RDV{{$devi->id}}</span>
                                    </div>
                                    <div class="kt-invoice__item">
                                        {{-- <span class="kt-invoice__subtitle">DEVIS POUR.</span> --}}
                                        <span class="kt-invoice__text">
                                        {{$devi->proposition->demande->demandeur->nom}}
                                            <br>
                                            {{$devi->proposition->demande->demandeur->adresse}}
                                            <br>{{$devi->proposition->demande->demandeur->ville->nom}} {{$devi->proposition->demande->demandeur->cp}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="kt-invoice__body">
                            <div class="kt-invoice__container">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>DESIGNATION</th>
                                            <th>Quantite</th>
                                            <th>PRIX UNIT</th>
                                            <th>MONTANT HT</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($devi->designations as $designation)
                                            <tr>
                                                <td>{{$designation->designation}}</td>
                                                <td>{{$designation->quantite}}</td>
                                                <td>{{$designation->prix_unitaire}}</td>
                                                <td>{{$designation->quantite*$designation->prix_unitaire}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Condition de paiment</th>
                                            <th>Valable jusqu'au</th>
                                            <th>Taxe</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{{$devi->condition_paiement}}</td>
                                            <td>{{$devi->valable_until->format('d/m/y')}}</td>
                                            <td>{{$devi->tax}}%</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="kt-invoice__footer">
                            <div class="kt-invoice__container">
                                <div class="kt-invoice__total">
                                    <span class="kt-invoice__title">TOTAL HT</span>
                                    <span class="kt-invoice__price">€{{$devi->montant}}</span>
                                    <span class="kt-invoice__notice">Hors Taxe</span>
                                </div>
                                <div class="kt-invoice__total">
                                    <span class="kt-invoice__title">TOTAL TTC</span>
                                    <span class="kt-invoice__price">€{{$devi->ht}}</span>
                                    <span class="kt-invoice__notice">Taxe Inclus</span>
                                </div>
                            </div>
                        </div>
                        <div class="kt-invoice__actions">
                            <div class="kt-invoice__container"><a
                                        href="{{route('demandeur.devi_status_update',['id'=>$devi->id,'status'=> App\Devis::ACCEPTE])}}">
                                    <button type="button" class="btn btn-brand btn-bold">
                                        Accepter
                                    </button>
                                </a>
                                <a
                                        href="{{route('demandeur.mes_devis_download',$devi->id)}}" class="print">
                                    <button type="button" class="btn btn-label-brand btn-bold">
                                        Imprimer
                                    </button>
                                </a>
                                <a href="{{route('demandeur.devi_status_update',['id'=>$devi->id,'status'=> App\Devis::REFUSE])}}">
                                    <button type="button" class="btn btn-label-brand btn-bold">
                                        Refuser
                                    </button>
                                </a>
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
            $('.print').Page();
        });
    </script>
@endsection --}}
