@extends('layouts.front.professionnel.master')

@section('content')



    <style>

        #map {

            height: 500px;

        }

        .kt-portlet .kt-portlet__head{

            border-top-left-radius:14px !important;

            border-top-right-radius:14px !important;

        }

        .kt-portlet {

            border-bottom-left-radius:14px !important;

            border-bottom-right-radius:14px !important;

        }

        .kt-widget17 {

            border-top-left-radius:14px !important;

            border-top-right-radius:14px !important;

            border-bottom-left-radius:14px !important;

            border-bottom-right-radius:14px !important;

        }

    </style>

    

<div class="grid-content">

    <!-- begin:: Content -->

    <div class="kt-content kt-grid__item kt-grid__item--fluid pro-citation grid-content--width" id="kt_content">

        {{-- <div class="kt-subheader   kt-grid__item citation " id="kt_subheader"> --}}

        <div style="height: auto" class="kt-subheader   kt-grid__item citation " id="kt_subheader">

            <div class="kt-subheader__main">



                <h3 class="kt-subheader__title" style="color:#fd397a">

                    {{$citation->text}}

                </h3>



                <span class="kt-subheader__separator kt-subheader__separator--v"></span>



                <div class="kt-subheader__group" id="kt_subheader_search">

            {{-- <span class="kt-subheader__desc" id="kt_subheader_total" style="color:black"> --}}

            <span class="kt-subheader__desc" id="kt_subheader_total" style="color:black;">

                              {{$citation->author}}

            </span>



                </div>



            </div>



        </div>

        <div class="row">

            <div class="col-xl-4">



                <!--begin:: Widgets/Activity-->

                <div  class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--skin-solid kt-portlet--height-fluid">

                    <div class="kt-portlet__head kt-portlet__head--noborder kt-portlet__space-x" >

                        <div class="kt-portlet__head-label" >

                            <h3 class="kt-portlet__head-title">

                                Activity

                            </h3>

                        </div>

                    </div>

                    <div class="kt-portlet__body kt-portlet__body--fit">

                        <div class="kt-widget17">

                            {{-- <div class="kt-widget17__visual kt-widget17__visual--chart kt-portlet-fit--top kt-portlet-fit--sides"

                                 style="background-color: #fd397a"> --}}

                            <div class="kt-widget17__visual kt-widget17__visual--chart kt-portlet-fit--top kt-portlet-fit--sides"

                                 style="background-color: #2D328C">

                                <div class="kt-widget17__chart" style="height:320px;">

                                    <div class="chartjs-size-monitor">

                                        <div class="chartjs-size-monitor-expand">

                                            <div class=""></div>

                                        </div>

                                        <div class="chartjs-size-monitor-shrink">

                                            <div class=""></div>

                                        </div>

                                    </div>

                                    <canvas id="kt_chart_activities" width="519" height="216"

                                            class="chartjs-render-monitor"

                                            style="display: block; width: 519px; height: 216px;"></canvas>

                                </div>

                            </div>

                            <div class="kt-widget17__stats">

                                <div class="kt-widget17__items">

                                    <div class="kt-widget17__item" style="cursor:default">

															<span class="kt-widget17__icon">

																<svg xmlns="http://www.w3.org/2000/svg"

                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"

                                                                     width="24px" height="24px" viewBox="0 0 24 24"

                                                                     version="1.1"

                                                                     class="kt-svg-icon kt-svg-icon--brand">

																	<g stroke="none" stroke-width="1" fill="none"

                                                                       fill-rule="evenodd">

																		<rect id="bound" x="0" y="0" width="24"

                                                                              height="24"></rect>

																		<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"

                                                                              id="Combined-Shape" fill="#000000"></path>

																		<rect id="Rectangle-Copy-2" fill="#000000"

                                                                              opacity="0.3"

                                                                              transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) "

                                                                              x="16.3255682" y="2.94551858" width="3"

                                                                              height="18" rx="1"></rect>

																	</g>

																</svg> </span>

                                        <span class="kt-widget17__subtitle">

																Nouvelle proposition

															</span>

                                        <span class="kt-widget17__desc">

																{{$newprop}} nouvelle proposition(s)

															</span>

                                    </div>

                                    <div class="kt-widget17__item" style="cursor:default">

															<span class="kt-widget17__icon">

																<svg xmlns="http://www.w3.org/2000/svg"

                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"

                                                                     width="24px" height="24px" viewBox="0 0 24 24"

                                                                     version="1.1"

                                                                     class="kt-svg-icon kt-svg-icon--success">

																	<g stroke="none" stroke-width="1" fill="none"

                                                                       fill-rule="evenodd">

																		<polygon id="Bound"

                                                                                 points="0 0 24 0 24 24 0 24"></polygon>

																		<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"

                                                                              id="Shape" fill="#000000"

                                                                              fill-rule="nonzero"></path>

																		<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"

                                                                              id="Path" fill="#000000"

                                                                              opacity="0.3"></path>

																	</g>

																</svg> </span>

                                        <span class="kt-widget17__subtitle">

																rdv en attente

															</span>

                                        <span class="kt-widget17__desc">

																{{$rdvAttente}} rdv en attente

															</span>

                                    </div>

                                </div>

                                <div class="kt-widget17__items">

                                    <div class="kt-widget17__item" style="cursor:default">

															<span class="kt-widget17__icon">

																<svg xmlns="http://www.w3.org/2000/svg"

                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"

                                                                     width="24px" height="24px" viewBox="0 0 24 24"

                                                                     version="1.1"

                                                                     class="kt-svg-icon kt-svg-icon--warning">

																	<g stroke="none" stroke-width="1" fill="none"

                                                                       fill-rule="evenodd">

																		<rect id="bound" x="0" y="0" width="24"

                                                                              height="24"></rect>

																		<path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"

                                                                              id="Combined-Shape" fill="#000000"

                                                                              opacity="0.3"></path>

																		<path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"

                                                                              id="Combined-Shape" fill="#000000"></path>

																	</g>

																</svg> </span>

                                        <span class="kt-widget17__subtitle">

																rdv validé

															</span>

                                        <span class="kt-widget17__desc">

																{{$rdvAccepte}} rdv validé(s)

															</span>

                                    </div>

                                    <div class="kt-widget17__item" style="cursor:default">

															<span class="kt-widget17__icon">

																<svg xmlns="http://www.w3.org/2000/svg"

                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"

                                                                     width="24px" height="24px" viewBox="0 0 24 24"

                                                                     version="1.1"

                                                                     class="kt-svg-icon kt-svg-icon--danger">

																	<g stroke="none" stroke-width="1" fill="none"

                                                                       fill-rule="evenodd">

																		<rect id="bound" x="0" y="0" width="24"

                                                                              height="24"></rect>

																		<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"

                                                                              id="Combined-Shape" fill="#000000"

                                                                              opacity="0.3"></path>

																		<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"

                                                                              id="Rectangle-102-Copy"

                                                                              fill="#000000"></path>

																	</g>

																</svg> </span>

                                        <span class="kt-widget17__subtitle">

																rdv refusé

															</span>

                                        <span class="kt-widget17__desc">

																{{$rdvRefuse}} rdv refusé(s)

															</span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                <!--end:: Widgets/Activity-->

            </div>

            <div class="col-xl-4 space--top">



                <div class="kt-portlet kt-portlet--tab">

                    <div class="kt-portlet__head bg-blue" >

                        <div class="kt-portlet__head-label " >

                    <span class="kt-portlet__head-icon kt-hidden" >

                        <i class="la la-gear"></i>

                    </span>

                            <h3 class="kt-portlet__head-title">

                                Mon Plan

                            </h3>

                        </div>

                    </div>

                    <div class="kt-portlet__body">

                        <div id="kt_gmap_2" style="height: 500px; position: relative; overflow: hidden;">

                            <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">

                                <div id="map"></div>

                            </div>

                        </div>

                        <div class="kt-widget15__items kt-margin-t-30">

                            <div class="row">



                                <div class="col text-center">

                                    <!--begin::widget item-->

                                    <div class="kt-widget15__item">



                                            <span class="kt-widget15__text">

                                                <i class="flaticon2-map"

                                                   style="color:#0b78fa"></i> <b>Nouvelles demandes</b>

							</span>

                                        <div class="kt-space-20"></div>

                                        <div class="progress m-progress--sm">

                                            <div class="progress-bar bg-info" role="progressbar"

                                                 style="width: 100%;"

                                                 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>

                                        </div>

                                    </div>

                                    <!--end::widget item-->

                                </div>



                                <div class="col text-center">

                                    <!--begin::widget item-->

                                    <div class="kt-widget15__item">



                                            <span class="kt-widget15__text">

                                               <i class="flaticon2-map" style="color:red"></i> <b>Demandes acceptées</b>

							</span>

                                        <div class="kt-space-20"></div>

                                        <div class="progress m-progress--sm">

                                            <div class="progress-bar bg-danger" role="progressbar"

                                                 style="width: 100%;"

                                                 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>

                                        </div>

                                    </div>

                                    <!--end::widget item-->

                                </div>



                            </div>



                        </div>

                    </div>

                </div>



            </div>

            <div class="col-xl-4 space--top">

                <!--Begin::Portlet-->

                <div class="kt-portlet kt-portlet--height-fluid">

                    <div class="kt-portlet__head bg-blue">

                        <div class="kt-portlet__head-label ">

                            <h3 class="kt-portlet__head-title">

                                Mes prochains RDV

                            </h3>

                        </div>



                    </div>

                    <div class="kt-portlet__body">



                        <!--Begin::Timeline 3 -->

                        <div class="kt-timeline-v2">

                            <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">

                                @if($timelines->isEmpty())

                                    <p>Vous n'avez aucun rendez-vous</p>

                                @else



                                    @foreach($timelines as $key=>$timeline)



                                        @if($timeline->demande->events->first()->start_date>= \Carbon\Carbon::today())

                                        <div class="kt-timeline-v2__item">

                                            <span class="kt-timeline-v2__item-time"

                                                  style="font-size: 13.3px;">{{$timeline->demande->events->first()->start_date->format('d/m/y')}}</span>

                                            <div class="kt-timeline-v2__item-cricle">

                                                <i class="fa fa-genderless kt-font-success"></i>

                                            </div>

                                            <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">

                                                Votre prochain rdv avec<a data-toggle="modal"

                                                                           data-target="#kt_modal_rdv_details{{$key}}"

                                                                           class="kt-link kt-link--brand kt-font-bolder"

                                                                           style="color:#1dc9b7;cursor: pointer">

                                                    &nbsp;{{$timeline->demande->demandeur->nom}}</a>



                                            </div>

                                            {{--<div class="kt-list-pics kt-list-pics--sm kt-padding-l-20">--}}

                                            {{--{{$timeline->avatar}}--}}

                                            {{--<a href="#"><img src="../assets/media/users/100_3.jpg" title=""></a>--}}

                                            {{--</div>--}}

                                        </div>

                                        @include('partials.rdv_details',['proposition'=>$timeline,'key'=>$key])

                                   @endif





                                    @endforeach

                                @endif



                            </div>

                        </div>



                        <!--End::Timeline 3 -->

                    </div>

                </div>



                <!--End::Portlet-->

            </div>

        </div>

        <div class="row">

            <div class="col-xl-12">

                <div class="kt-portlet kt-portlet--tabs kt-portlet--fluid">

                    <div class="kt-portlet__head bg-blue">

                        <div class="kt-portlet__head-label " >

                            <h3 class="kt-portlet__head-title">

                                LISTE DES NOUVELLES DEMANDES

                            </h3>

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

                                                <th>Description</th>

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

                                                    <td>{{$demande->demandeur->nom}}</td>

                                            <td  >

                                             {{$demande->demandeur->telephone}} </td>





                                             <td>{{$demande->ville->name}}</td>

                                            </td>



                                          @else



                                          <td style="filter: blur(3px);" data-skin="brand"

                                                        data-toggle="kt-tooltip"

                                                        data-placement="top" title=""

                                                        data-original-title="les données sont protégées">00000000000

                                                    </td> <td style="filter: blur(3px);" data-skin="brand"

                                                        data-toggle="kt-tooltip"

                                                        data-placement="top" title=""

                                                        data-original-title="les données sont protégées">00000000000

                                                    </td>



                                                    <td style="filter: blur(3px);" data-skin="brand"

                                                        data-toggle="kt-tooltip"

                                                        data-placement="top" title=""

                                                        data-original-title="les données sont protégées">00000000000

                                                    </td>



                                            @endif





                                                    <td>

                                                        @if (auth()->user()->professionnel->isvip($demande->demandeur->id)==1)

                                                        <span class="kt-badge  kt-badge--warning kt-badge--inline kt-badge--pill"><i

                                                            class="flaticon-star"></i>&nbsp;Exclusive</span>

                                                        @else

                                                      <span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Nouveau</span>



                                                        @endif   </td>

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



        </div>

    </div>

</div>

@section('script')

    @if(request()->status == true) @include('professionnel.last_login') @endif

    <script>

        var map;

        function initMap() {

            map = new google.maps.Map(document.getElementById('map'), {

                center: {lat: 48.7980000, lng: 2.6063000},

                zoom: 6

            });

                    @foreach($maps as $map)

            var marker = new google.maps.Marker({

                    position: {lat: {{ isset($map->ville) ? $map->ville->latitude : 0}}, lng: {{isset($map->ville) ? $map->ville->longitude : 0}}},

                    map: map,

                    title: '{{$map->nom}}',

                    icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png',

                    animation: google.maps.Animation.BOUNCE,

                });

            // var marker = new google.maps.Marker({

            //     position: {lat: 42.4827800, lng: 2.8944400},

            //     map: map,

            //     title: 'Hello World!',

            //     // icon: 'pin.png',

            //     animation: google.maps.Animation.BOUNCE,

            // });

                    @endforeach

                    @foreach($mapsAccepted as $map)

                    var marker = new google.maps.Marker({

                    position: {lat: {{ isset($map->ville) ? $map->ville->latitude : 0}}, lng: {{isset($map->ville) ? $map->ville->longitude : 0}}},

                    map: map,

                    title: '{{$map->demande->nom}}',

                    // icon: 'pin.png',

                    animation: google.maps.Animation.BOUNCE,

                });

            @endforeach

        }

    </script>

    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJ6Gba0ZmVR4CP2wDlTiCFkM4-fEyJO20&callback=initMap" --}}



    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUuAp6BFoC7-TEobWGxRfAT-mxNtt4Jrw&callback=initMap"

            async defer></script>

@endsection



@endsection