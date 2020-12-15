@extends('layouts.front.demandeurs.master')
@section('content')
    <link href="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet"
          type="text/css"/>


    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch">
        <div class="kt-container kt-body  kt-grid kt-grid--hor space--top" id="kt_body">
            <!-- begin:: Content Head -->
            <div class="kt-subheader   kt-grid__item citation" id="kt_subheader">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title" style="color:#fd397a">
                        {{$citation->text}}


                    </h3>

                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                    <div class="kt-subheader__group " id="kt_subheader_search">
            <span class="kt-subheader__desc" id="kt_subheader_total" style="color:black">
                              {{$citation->type}} - {{$citation->annee}}
            </span>

                    </div>

                </div>

            </div>
            <!-- end:: Content Head -->
            <!-- begin:: Content -->
            <div class="kt-content kt-grid__item kt-grid__item--fluid" id="kt_content">
                <div class="row">
                    <br><br>

                    <div class="col-xl-7">

                        <!--begin:: Widgets/Activity-->
                        <div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--skin-solid kt-portlet--height-fluid">
                            <div class="kt-portlet__body kt-portlet__body--fit">
                                <div class="kt-widget17">
                                    <div class="kt-widget17__visual kt-widget17__visual--chart kt-portlet-fit--top kt-portlet-fit--sides"
                                         style="background-color: #fd397a">
                                        <div class="kt-widget17__chart" style="height:320px;">
                                            {{--<div class="chartjs-size-monitor">--}}
                                            {{--<div class="chartjs-size-monitor-expand">--}}
                                            {{--<div class=""></div>--}}
                                            {{--</div>--}}
                                            {{--<div class="chartjs-size-monitor-shrink">--}}
                                            {{--<div class=""></div>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<canvas id="kt_chart_activities" width="519" height="216"--}}
                                            {{--class="chartjs-render-monitor"--}}
                                            {{--style="display: block; width: 519px; height: 216px;"></canvas>--}}
                                        </div>
                                    </div>
                                    <div class="kt-widget17__stats">
                                        <div class="kt-widget17__items">
                                            <div class="kt-widget17__item">
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
																rdv accepte
															</span>
                                                <span class="kt-widget17__desc">
																{{$rdvAccepte}} rdv accepte
															</span>
                                            </div>
                                            <div class="kt-widget17__item">
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
                                            <div class="kt-widget17__item">
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
																rdv sans prop
															</span>
                                                <span class="kt-widget17__desc">
																{{$rdvNoProp}} rdv sans prop
															</span>
                                            </div>
                                            <div class="kt-widget17__item">
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
																Messages
															</span>
                                                <span class="kt-widget17__desc">
																{{$msgs}} messages
															</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end:: Widgets/Activity-->
                    </div>

                    {{--<div class="col-xl-5">--}}
                    {{--<!--begin::Portlet-->--}}
                    {{--<div class="kt-portlet">--}}
                    {{--<div class="kt-portlet__head">--}}
                    {{--<div class="kt-portlet__head-label">--}}
                    {{--<h3 class="kt-portlet__head-title">--}}
                    {{--Inviter un artisan--}}
                    {{--</h3>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="alert alert-solid-danger alert-bold fade show kt-margin-t-20 kt-margin-b-40"--}}
                    {{--role="alert">--}}
                    {{--<div class="alert-icon"><i--}}
                    {{--class="fa fa-check-circle"></i></div>--}}
                    {{--<div class="alert-text">Inviter un artisan est gagner du temp a travailler ensemble.--}}
                    {{--<br>Nous envoyons une demande de votre part, afin de ne plus perdre de temp a--}}
                    {{--prendre rendez-vous avec lui!--}}
                    {{--</div>--}}
                    {{--<div class="alert-close">--}}
                    {{--<button type="button" class="close" data-dismiss="alert"--}}
                    {{--aria-label="Close">--}}
                    {{--<span aria-hidden="true"><i class="la la-close"></i></span>--}}
                    {{--</button>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--begin::Form-->--}}
                    {{--<form action="{{route('demandeur.mes_invitation_storeByRef')}}" method="post"--}}
                    {{--class="kt-form kt-form--label-right">--}}
                    {{--@csrf--}}
                    {{--<div class="kt-portlet__body">--}}
                    {{--<div class="form-group row">--}}
                    {{--<label class="col-form-label col-lg-3 col-sm-12">Nom</label>--}}
                    {{--<div class="col-lg-4 col-md-9 col-sm-12">--}}
                    {{--<input type="text" class="form-control" name="name"--}}
                    {{--placeholder="Ecrire le nom et le prénom du artisan">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group row">--}}
                    {{--<label class="col-form-label col-lg-3 col-sm-12">Email</label>--}}
                    {{--<div class="col-lg-4 col-md-9 col-sm-12">--}}
                    {{--<input type="email" class="form-control" name="email"--}}
                    {{--placeholder="Ecrire l email du artisan">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group row">--}}
                    {{--<label class="col-form-label col-lg-3 col-sm-12">Message</label>--}}
                    {{--<div class="col-lg-4 col-md-9 col-sm-12">--}}
                    {{--<textarea name="message" placeholder="Ecrire un message pour lartisan vip"--}}
                    {{--class="form-control" rows="8"></textarea>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="kt-portlet__foot">--}}
                    {{--<div class="kt-form__actions">--}}
                    {{--<div class="row">--}}
                    {{--<div class="col-lg-9 ml-lg-auto">--}}
                    {{--<button type="submit" class="btn btn-success">Inviter</button>--}}
                    {{--<button type="reset" class="btn btn-secondary">Cancel</button>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</form>--}}
                    {{--<!--end::Form-->--}}
                    {{--</div>--}}
                    {{--<!--end::Portlet-->--}}
                    {{--</div>--}}

                    <div class="col-xl-5">

                        <!--Begin::Portlet-->
                        <div class="kt-portlet kt-portlet--height-fluid">
                            <div class="kt-portlet__head bg-blue">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">
                                        Mes prochains RDV
                                    </h3>
                                </div>
                                {{--<div class="kt-portlet__head-toolbar">--}}
                                {{--<div class="dropdown dropdown-inline">--}}
                                {{--<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"--}}
                                {{--data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                {{--<i class="flaticon-more-1"></i>--}}
                                {{--</button>--}}
                                {{--<div class="dropdown-menu dropdown-menu-right">--}}
                                {{--<ul class="kt-nav">--}}
                                {{--<li class="kt-nav__item">--}}
                                {{--<a href="#" class="kt-nav__link">--}}
                                {{--<i class="kt-nav__link-icon flaticon2-send"></i>--}}
                                {{--<span class="kt-nav__link-text">Messages</span>--}}
                                {{--</a>--}}
                                {{--</li>--}}
                                {{--</ul>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
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
                                                    <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold"
                                                         style="cursor:pointer">
                                                        Votre prochain rdv avec<a data-toggle="modal"
                                                                                   data-target="#kt_modal_9{{$key}}"
                                                                                   class="kt-link kt-link--brand kt-font-bolder">
                                                            &nbsp;{{$timeline->professionnel->nom}}</a>

                                                    </div>
                                                    <div class="kt-list-pics kt-list-pics--sm kt-padding-l-20"
                                                         style="cursor:pointer">
                                                        @if($timeline->professionnel->avatar)
                                                            <a data-toggle="modal" data-target="#kt_modal_9{{$key}}">
                                                                <img src="{{asset('storage/'.$timeline->professionnel->avatar)}}" title=""></a>
                                                        @endif
                                                    </div>
                                                </div>
                                                @include('demandeur.demandes.details_pro',['proposition'=>$timeline,'key'=>$key])
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
                    <div class="col-xl-9">
                        <!--begin::Portlet-->

                        <div class="kt-portlet kt-portlet--mobile">
                            <div class="kt-portlet__head kt-portlet__head--lg bg-blue">
                                <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="flaticon-calendar-2"></i>
										</span>
                                    <h3 class="kt-portlet__head-title">
                                        Mes demandes
                                    </h3>
                                </div>
                                <div class="kt-portlet__head-toolbar">
                                    <div class="kt-portlet__head-wrapper">
                                        <div class="kt-portlet__head-actions">
                                            &nbsp;
                                            <a href="{{route('demandeur.mes_demandes_create')}}"
                                               class="btn btn-brand btn-elevate btn-icon-sm btn-white">
                                                <i class="la la-plus"></i>
                                                Nouvelle Demande
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__body">

                                <div class="kt-section">
                                    <div class="kt-section__content row">
                                              <div class="col-lg-12 table-responsive">
                                                                 <div class="item-caland">
                                        <div id="kt_calendar" name="calend"></div>
                                                  </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="kt-widget15__items kt-margin-t-30">
                                    <div class="row">
                                        <div class="col text-center">
                                            <!--begin::widget item-->
                                            <div class="kt-widget15__item">

                                            <span class="kt-widget15__text">
                                                <b>RDV sans proposition</b>
							</span>
                                                <div class="kt-space-20"></div>
                                                <div class="progress m-progress--sm">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                         style="width: 100%;"
                                                         aria-valuenow="100" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <!--end::widget item-->
                                        </div>

                                        <div class="col text-center">
                                            <!--begin::widget item-->
                                            <div class="kt-widget15__item">
                                            <span class="kt-widget15__text">
                                                <b>Rdv avec  proposition</b>
							</span>
                                                <div class="kt-space-20"></div>
                                                <div class="progress m-progress--sm">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                         style="width: 100%;"
                                                         aria-valuenow="100" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <!--end::widget item-->
                                        </div>


                                        <div class="col text-center">
                                            <!--begin::widget item-->
                                            <div class="kt-widget15__item">

                                            <span class="kt-widget15__text">
                                                <b>RDV validé</b>
							</span>
                                                <div class="kt-space-20"></div>
                                                <div class="progress m-progress--sm">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                         style="width: 100%;"
                                                         aria-valuenow="100" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <!--end::widget item-->
                                        </div>
                                        <div class="col text-center">
                                        <!--begin::widget item-->
                                        <div class="kt-widget15__item">

                                            <span class="kt-widget15__text">
                                                <b>RDV Refusé</b>
							</span>
                                            <div class="kt-space-20"></div>
                                            <div class="progress m-progress--sm">
                                                <div class="progress-bar" role="progressbar"
                                                     style="width: 100%; background-color: red;"
                                                     aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <!--end::widget item-->
                                    </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    {{--<div class="kt-portlet" id="kt_portlet">--}}
                    {{--<div class="kt-portlet__head">--}}
                    {{--<div class="kt-portlet__head-label">--}}
                    {{--<span class="kt-portlet__head-icon">--}}
                    {{--<i class="flaticon-calendar-2"></i>--}}
                    {{--</span>--}}
                    {{--<h3 class="kt-portlet__head-title">--}}
                    {{--Mes demandes--}}
                    {{--</h3>--}}

                    {{--</div>--}}

                    {{--</div>--}}
                    {{--<a href="{{route('demandeur.mes_demandes_create')}}"--}}
                    {{--class="btn btn-brand btn-elevate btn-icon-sm" style="rigth">--}}
                    {{--<i class="la la-plus"></i>--}}
                    {{--Nouvelle demande--}}
                    {{--</a>--}}
                    {{--<div class="kt-portlet__body">--}}
                    {{--<div id="kt_calendar" name="calend"></div>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    <!--end::Portlet-->
                    </div>
                    <div class="col-xl-3">
                        <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                            <div class="kt-portlet__body kt-portlet__body--fit">
                                <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides"
                                     style="min-height: 300px; background-image: url(../assets/media//products/product4.jpg)">
                                    <h3 class="kt-widget19__title kt-font-light">
                                        Introducing
                                    </h3>
                                    <div class="kt-widget19__shadow"></div>
                                    <div class="kt-widget19__labels">
                                        <a href="#" class="btn btn-label-light-o2 btn-bold btn-sm ">Recent</a>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__body">
                                <div class="kt-widget19__wrapper">
                                    <div class="kt-widget19__content">
                                        <div class="kt-widget19__userpic">
                                            <img src="../assets/media//users/user1.jpg" alt="">
                                        </div>
                                        <div class="kt-widget19__info">
                                            <a href="#" class="kt-widget19__username">
                                                Ansna Krox
                                            </a>
                                            <span class="kt-widget19__time">
															UX/UI Designer, Google
														</span>
                                        </div>
                                        <div class="kt-widget19__stats">
														<span class="kt-widget19__number kt-font-brand">
															18
														</span>
                                            <a href="#" class="kt-widget19__comment">
                                                Comments
                                            </a>
                                        </div>
                                    </div>
                                    <div class="kt-widget19__text">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting scrambled a
                                        type specimen book text of the dummy text of the printing printing and
                                        typesetting industry scrambled dummy text of the printing.
                                    </div>
                                </div>
                                <div class="kt-widget19__action">
                                    <a href="#" class="btn btn-sm btn-label-brand btn-bold">Read More...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
</script>
@section('script')
    @foreach($demandeurVip as $dem)
       @include('demandeur.last_login')
    @endforeach
    {{--@if(request()->status == true) @include('professionnel.last_login') @endif--}}
    <script>
        "use strict";

        // Class definition
        var KTDashboard = function () {

            // Sparkline Chart helper function
            var _initSparklineChart = function (src, data, color, border) {
                if (src.length == 0) {
                    return;
                }

                var config = {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
                        datasets: [{
                            label: "",
                            borderColor: color,
                            borderWidth: border,

                            pointHoverRadius: 4,
                            pointHoverBorderWidth: 12,
                            pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('danger'),
                            pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),
                            fill: false,
                            data: data,
                        }]
                    },
                    options: {
                        title: {
                            display: false,
                        },
                        tooltips: {
                            enabled: false,
                            intersect: false,
                            mode: 'nearest',
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        legend: {
                            display: false,
                            labels: {
                                usePointStyle: false
                            }
                        },
                        responsive: true,
                        maintainAspectRatio: true,
                        hover: {
                            mode: 'index'
                        },
                        scales: {
                            xAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Month'
                                }
                            }],
                            yAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Value'
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },

                        elements: {
                            point: {
                                radius: 4,
                                borderWidth: 12
                            },
                        },

                        layout: {
                            padding: {
                                left: 0,
                                right: 10,
                                top: 5,
                                bottom: 0
                            }
                        }
                    }
                };

                return new Chart(src, config);
            }

            // Daily Sales chart.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var dailySales = function () {
                var chartContainer = KTUtil.getByID('kt_chart_daily_sales');

                if (!chartContainer) {
                    return;
                }

                var chartData = {
                    labels: ["Label 1", "Label 2", "Label 3", "Label 4", "Label 5", "Label 6", "Label 7", "Label 8", "Label 9", "Label 10", "Label 11", "Label 12", "Label 13", "Label 14", "Label 15", "Label 16"],
                    datasets: [{
                        //label: 'Dataset 1',
                        backgroundColor: KTApp.getStateColor('success'),
                        data: [
                            15, 20, 25, 30, 25, 20, 15, 20, 25, 30, 25, 20, 15, 10, 15, 20
                        ]
                    }, {
                        //label: 'Dataset 2',
                        backgroundColor: '#f3f3fb',
                        data: [
                            15, 20, 25, 30, 25, 20, 15, 20, 25, 30, 25, 20, 15, 10, 15, 20
                        ]
                    }]
                };

                var chart = new Chart(chartContainer, {
                    type: 'bar',
                    data: chartData,
                    options: {
                        title: {
                            display: false,
                        },
                        tooltips: {
                            intersect: false,
                            mode: 'nearest',
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        legend: {
                            display: false
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        barRadius: 4,
                        scales: {
                            xAxes: [{
                                display: false,
                                gridLines: false,
                                stacked: true
                            }],
                            yAxes: [{
                                display: false,
                                stacked: true,
                                gridLines: false
                            }]
                        },
                        layout: {
                            padding: {
                                left: 0,
                                right: 0,
                                top: 0,
                                bottom: 0
                            }
                        }
                    }
                });
            }

            // Profit Share Chart.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var profitShare = function () {
                if (!KTUtil.getByID('kt_chart_profit_share')) {
                    return;
                }

                var randomScalingFactor = function () {
                    return Math.round(Math.random() * 100);
                };

                var config = {
                    type: 'doughnut',
                    data: {
                        datasets: [{
                            data: [
                                35, 30, 35
                            ],
                            backgroundColor: [
                                KTApp.getStateColor('success'),
                                KTApp.getStateColor('danger'),
                                KTApp.getStateColor('brand')
                            ]
                        }],
                        labels: [
                            'Angular',
                            'CSS',
                            'HTML'
                        ]
                    },
                    options: {
                        cutoutPercentage: 75,
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            display: false,
                            position: 'top',
                        },
                        title: {
                            display: false,
                            text: 'Technology'
                        },
                        animation: {
                            animateScale: true,
                            animateRotate: true
                        },
                        tooltips: {
                            enabled: true,
                            intersect: false,
                            mode: 'nearest',
                            bodySpacing: 5,
                            yPadding: 10,
                            xPadding: 10,
                            caretPadding: 0,
                            displayColors: false,
                            backgroundColor: KTApp.getStateColor('brand'),
                            titleFontColor: '#ffffff',
                            cornerRadius: 4,
                            footerSpacing: 0,
                            titleSpacing: 0
                        }
                    }
                };

                var ctx = KTUtil.getByID('kt_chart_profit_share').getContext('2d');
                var myDoughnut = new Chart(ctx, config);
            }

            // Sales Stats.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var salesStats = function () {
                if (!KTUtil.getByID('kt_chart_sales_stats')) {
                    return;
                }

                var config = {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December",
                            "January", "February", "March", "April"
                        ],
                        datasets: [{
                            label: "Sales Stats",
                            borderColor: KTApp.getStateColor('brand'),
                            borderWidth: 2,
                            //pointBackgroundColor: KTApp.getStateColor('brand'),
                            backgroundColor: KTApp.getStateColor('brand'),
                            pointBackgroundColor: Chart.helpers.color('#ffffff').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#ffffff').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('danger'),
                            pointHoverBorderColor: Chart.helpers.color(KTApp.getStateColor('danger')).alpha(0.2).rgbString(),
                            data: [
                                10, 20, 16,
                                18, 12, 40,
                                35, 30, 33,
                                34, 45, 40,
                                60, 55, 70,
                                65, 75, 62
                            ]
                        }]
                    },
                    options: {
                        title: {
                            display: false,
                        },
                        tooltips: {
                            intersect: false,
                            mode: 'nearest',
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        legend: {
                            display: false,
                            labels: {
                                usePointStyle: false
                            }
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        hover: {
                            mode: 'index'
                        },
                        scales: {
                            xAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Month'
                                }
                            }],
                            yAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Value'
                                }
                            }]
                        },

                        elements: {
                            point: {
                                radius: 3,
                                borderWidth: 0,

                                hoverRadius: 8,
                                hoverBorderWidth: 2
                            }
                        }
                    }
                };

                var chart = new Chart(KTUtil.getByID('kt_chart_sales_stats'), config);
            }

            // Sales By KTUtillication Stats.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var salesByApps = function () {
                // Init chart instances
                _initSparklineChart($('#kt_chart_sales_by_apps_1_1'), [10, 20, -5, 8, -20, -2, -4, 15, 5, 8], KTApp.getStateColor('success'), 2);
                _initSparklineChart($('#kt_chart_sales_by_apps_1_2'), [2, 16, 0, 12, 22, 5, -10, 5, 15, 2], KTApp.getStateColor('danger'), 2);
                _initSparklineChart($('#kt_chart_sales_by_apps_1_3'), [15, 5, -10, 5, 16, 22, 6, -6, -12, 5], KTApp.getStateColor('success'), 2);
                _initSparklineChart($('#kt_chart_sales_by_apps_1_4'), [8, 18, -12, 12, 22, -2, -14, 16, 18, 2], KTApp.getStateColor('warning'), 2);

                _initSparklineChart($('#kt_chart_sales_by_apps_2_1'), [10, 20, -5, 8, -20, -2, -4, 15, 5, 8], KTApp.getStateColor('danger'), 2);
                _initSparklineChart($('#kt_chart_sales_by_apps_2_2'), [2, 16, 0, 12, 22, 5, -10, 5, 15, 2], KTApp.getStateColor('dark'), 2);
                _initSparklineChart($('#kt_chart_sales_by_apps_2_3'), [15, 5, -10, 5, 16, 22, 6, -6, -12, 5], KTApp.getStateColor('brand'), 2);
                _initSparklineChart($('#kt_chart_sales_by_apps_2_4'), [8, 18, -12, 12, 22, -2, -14, 16, 18, 2], KTApp.getStateColor('info'), 2);
            }

            // Latest Updates.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var latestUpdates = function () {
                if ($('#kt_chart_latest_updates').length == 0) {
                    return;
                }

                var ctx = document.getElementById("kt_chart_latest_updates").getContext("2d");

                var config = {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
                        datasets: [{
                            label: "Sales Stats",
                            backgroundColor: KTApp.getStateColor('danger'), // Put the gradient here as a fill color
                            borderColor: KTApp.getStateColor('danger'),
                            pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('success'),
                            pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),

                            //fill: 'start',
                            data: [
                                10, 14, 12, 16, 9, 11, 13, 9, 13, 15
                            ]
                        }]
                    },
                    options: {
                        title: {
                            display: false,
                        },
                        tooltips: {
                            intersect: false,
                            mode: 'nearest',
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        legend: {
                            display: false
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        hover: {
                            mode: 'index'
                        },
                        scales: {
                            xAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Month'
                                }
                            }],
                            yAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Value'
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        elements: {
                            line: {
                                tension: 0.0000001
                            },
                            point: {
                                radius: 4,
                                borderWidth: 12
                            }
                        }
                    }
                };

                var chart = new Chart(ctx, config);
            }

            // Trends Stats.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var trendsStats = function () {
                if ($('#kt_chart_trends_stats').length == 0) {
                    return;
                }

                var ctx = document.getElementById("kt_chart_trends_stats").getContext("2d");

                var gradient = ctx.createLinearGradient(0, 0, 0, 240);
                gradient.addColorStop(0, Chart.helpers.color('#00c5dc').alpha(0.7).rgbString());
                gradient.addColorStop(1, Chart.helpers.color('#f2feff').alpha(0).rgbString());

                var config = {
                    type: 'line',
                    data: {
                        labels: [
                            "January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
                            "January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
                            "January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
                            "January", "February", "March", "April"
                        ],
                        datasets: [{
                            label: "Sales Stats",
                            backgroundColor: gradient, // Put the gradient here as a fill color
                            borderColor: '#0dc8de',

                            pointBackgroundColor: Chart.helpers.color('#ffffff').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#ffffff').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('danger'),
                            pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.2).rgbString(),

                            //fill: 'start',
                            data: [
                                20, 10, 18, 15, 26, 18, 15, 22, 16, 12,
                                12, 13, 10, 18, 14, 24, 16, 12, 19, 21,
                                16, 14, 21, 21, 13, 15, 22, 24, 21, 11,
                                14, 19, 21, 17
                            ]
                        }]
                    },
                    options: {
                        title: {
                            display: false,
                        },
                        tooltips: {
                            intersect: false,
                            mode: 'nearest',
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        legend: {
                            display: false
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        hover: {
                            mode: 'index'
                        },
                        scales: {
                            xAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Month'
                                }
                            }],
                            yAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Value'
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        elements: {
                            line: {
                                tension: 0.19
                            },
                            point: {
                                radius: 4,
                                borderWidth: 12
                            }
                        },
                        layout: {
                            padding: {
                                left: 0,
                                right: 0,
                                top: 5,
                                bottom: 0
                            }
                        }
                    }
                };

                var chart = new Chart(ctx, config);
            }

            // Trends Stats 2.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var trendsStats2 = function () {
                if ($('#kt_chart_trends_stats_2').length == 0) {
                    return;
                }

                var ctx = document.getElementById("kt_chart_trends_stats_2").getContext("2d");

                var config = {
                    type: 'line',
                    data: {
                        labels: [
                            "January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
                            "January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
                            "January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
                            "January", "February", "March", "April"
                        ],
                        datasets: [{
                            label: "Sales Stats",
                            backgroundColor: '#d2f5f9', // Put the gradient here as a fill color
                            borderColor: KTApp.getStateColor('brand'),

                            pointBackgroundColor: Chart.helpers.color('#ffffff').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#ffffff').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('danger'),
                            pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.2).rgbString(),

                            //fill: 'start',
                            data: [
                                20, 10, 18, 15, 32, 18, 15, 22, 8, 6,
                                12, 13, 10, 18, 14, 24, 16, 12, 19, 21,
                                16, 14, 24, 21, 13, 15, 27, 29, 21, 11,
                                14, 19, 21, 17
                            ]
                        }]
                    },
                    options: {
                        title: {
                            display: false,
                        },
                        tooltips: {
                            intersect: false,
                            mode: 'nearest',
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        legend: {
                            display: false
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        hover: {
                            mode: 'index'
                        },
                        scales: {
                            xAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Month'
                                }
                            }],
                            yAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Value'
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        elements: {
                            line: {
                                tension: 0.19
                            },
                            point: {
                                radius: 4,
                                borderWidth: 12
                            }
                        },
                        layout: {
                            padding: {
                                left: 0,
                                right: 0,
                                top: 5,
                                bottom: 0
                            }
                        }
                    }
                };

                var chart = new Chart(ctx, config);
            }

            // Trends Stats.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var latestTrendsMap = function () {
                if ($('#kt_chart_latest_trends_map').length == 0) {
                    return;
                }

                try {
                    var map = new GMaps({
                        div: '#kt_chart_latest_trends_map',
                        lat: -12.043333,
                        lng: -77.028333
                    });
                } catch (e) {
                    console.log(e);
                }
            }

            // Revenue Change.
            // Based on Morris plugin - http://morrisjs.github.io/morris.js/
            var revenueChange = function () {
                if ($('#kt_chart_revenue_change').length == 0) {
                    return;
                }

                Morris.Donut({
                    element: 'kt_chart_revenue_change',
                    data: [{
                        label: "New York",
                        value: 10
                    },
                        {
                            label: "London",
                            value: 7
                        },
                        {
                            label: "Paris",
                            value: 20
                        }
                    ],
                    colors: [
                        KTApp.getStateColor('success'),
                        KTApp.getStateColor('danger'),
                        KTApp.getStateColor('brand')
                    ],
                });
            }

            // Support Tickets Chart.
            // Based on Morris plugin - http://morrisjs.github.io/morris.js/
            var supportCases = function () {
                if ($('#kt_chart_support_tickets').length == 0) {
                    return;
                }

                Morris.Donut({
                    element: 'kt_chart_support_tickets',
                    data: [{
                        label: "Margins",
                        value: 20
                    },
                        {
                            label: "Profit",
                            value: 70
                        },
                        {
                            label: "Lost",
                            value: 10
                        }
                    ],
                    labelColor: '#a7a7c2',
                    colors: [
                        KTApp.getStateColor('success'),
                        KTApp.getStateColor('brand'),
                        KTApp.getStateColor('danger')
                    ]
                    //formatter: function (x) { return x + "%"}
                });
            }

            // Support Tickets Chart.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var supportRequests = function () {
                var container = KTUtil.getByID('kt_chart_support_requests');

                if (!container) {
                    return;
                }

                var randomScalingFactor = function () {
                    return Math.round(Math.random() * 100);
                };

                var config = {
                    type: 'doughnut',
                    data: {
                        datasets: [{
                            data: [
                                35, 30, 35
                            ],
                            backgroundColor: [
                                KTApp.getStateColor('success'),
                                KTApp.getStateColor('danger'),
                                KTApp.getStateColor('brand')
                            ]
                        }],
                        labels: [
                            'Angular',
                            'CSS',
                            'HTML'
                        ]
                    },
                    options: {
                        cutoutPercentage: 75,
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            display: false,
                            position: 'top',
                        },
                        title: {
                            display: false,
                            text: 'Technology'
                        },
                        animation: {
                            animateScale: true,
                            animateRotate: true
                        },
                        tooltips: {
                            enabled: true,
                            intersect: false,
                            mode: 'nearest',
                            bodySpacing: 5,
                            yPadding: 10,
                            xPadding: 10,
                            caretPadding: 0,
                            displayColors: false,
                            backgroundColor: KTApp.getStateColor('brand'),
                            titleFontColor: '#ffffff',
                            cornerRadius: 4,
                            footerSpacing: 0,
                            titleSpacing: 0
                        }
                    }
                };

                var ctx = container.getContext('2d');
                var myDoughnut = new Chart(ctx, config);
            }

            // Activities Charts.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var activitiesChart = function () {
                if ($('#kt_chart_activities').length == 0) {
                    return;
                }

                var ctx = document.getElementById("kt_chart_activities").getContext("2d");

                var gradient = ctx.createLinearGradient(0, 0, 0, 240);
                gradient.addColorStop(0, Chart.helpers.color('#e14c86').alpha(1).rgbString());
                gradient.addColorStop(1, Chart.helpers.color('#e14c86').alpha(0.3).rgbString());

                var config = {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
                        datasets: [{
                            label: "Sales Stats",
                            backgroundColor: Chart.helpers.color('#e14c86').alpha(1).rgbString(),  //gradient
                            borderColor: '#e13a58',

                            pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('light'),
                            pointHoverBorderColor: Chart.helpers.color('#ffffff').alpha(0.1).rgbString(),

                            //fill: 'start',
                            data: [
                                10, 14, 12, 16, 9, 11, 13, 9, 13, 15
                            ]
                        }]
                    },
                    options: {
                        title: {
                            display: false,
                        },
                        tooltips: {
                            mode: 'nearest',
                            intersect: false,
                            position: 'nearest',
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        legend: {
                            display: false
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            xAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Month'
                                }
                            }],
                            yAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Value'
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        elements: {
                            line: {
                                tension: 0.0000001
                            },
                            point: {
                                radius: 4,
                                borderWidth: 12
                            }
                        },
                        layout: {
                            padding: {
                                left: 0,
                                right: 0,
                                top: 10,
                                bottom: 0
                            }
                        }
                    }
                };

                var chart = new Chart(ctx, config);
            }

            // Bandwidth Charts 1.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var bandwidthChart1 = function () {
                if ($('#kt_chart_bandwidth1').length == 0) {
                    return;
                }

                var ctx = document.getElementById("kt_chart_bandwidth1").getContext("2d");

                var gradient = ctx.createLinearGradient(0, 0, 0, 240);
                gradient.addColorStop(0, Chart.helpers.color('#d1f1ec').alpha(1).rgbString());
                gradient.addColorStop(1, Chart.helpers.color('#d1f1ec').alpha(0.3).rgbString());

                var config = {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
                        datasets: [{
                            label: "Bandwidth Stats",
                            backgroundColor: gradient,
                            borderColor: KTApp.getStateColor('success'),

                            pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('danger'),
                            pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),

                            //fill: 'start',
                            data: [
                                10, 14, 12, 16, 9, 11, 13, 9, 13, 15
                            ]
                        }]
                    },
                    options: {
                        title: {
                            display: false,
                        },
                        tooltips: {
                            mode: 'nearest',
                            intersect: false,
                            position: 'nearest',
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        legend: {
                            display: false
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            xAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Month'
                                }
                            }],
                            yAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Value'
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        elements: {
                            line: {
                                tension: 0.0000001
                            },
                            point: {
                                radius: 4,
                                borderWidth: 12
                            }
                        },
                        layout: {
                            padding: {
                                left: 0,
                                right: 0,
                                top: 10,
                                bottom: 0
                            }
                        }
                    }
                };

                var chart = new Chart(ctx, config);
            }

            // Bandwidth Charts 2.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var bandwidthChart2 = function () {
                if ($('#kt_chart_bandwidth2').length == 0) {
                    return;
                }

                var ctx = document.getElementById("kt_chart_bandwidth2").getContext("2d");

                var gradient = ctx.createLinearGradient(0, 0, 0, 240);
                gradient.addColorStop(0, Chart.helpers.color('#ffefce').alpha(1).rgbString());
                gradient.addColorStop(1, Chart.helpers.color('#ffefce').alpha(0.3).rgbString());

                var config = {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
                        datasets: [{
                            label: "Bandwidth Stats",
                            backgroundColor: gradient,
                            borderColor: KTApp.getStateColor('warning'),
                            pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('danger'),
                            pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),

                            //fill: 'start',
                            data: [
                                10, 14, 12, 16, 9, 11, 13, 9, 13, 15
                            ]
                        }]
                    },
                    options: {
                        title: {
                            display: false,
                        },
                        tooltips: {
                            mode: 'nearest',
                            intersect: false,
                            position: 'nearest',
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        legend: {
                            display: false
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            xAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Month'
                                }
                            }],
                            yAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Value'
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        elements: {
                            line: {
                                tension: 0.0000001
                            },
                            point: {
                                radius: 4,
                                borderWidth: 12
                            }
                        },
                        layout: {
                            padding: {
                                left: 0,
                                right: 0,
                                top: 10,
                                bottom: 0
                            }
                        }
                    }
                };

                var chart = new Chart(ctx, config);
            }

            // Bandwidth Charts 2.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var adWordsStat = function () {
                if ($('#kt_chart_adwords_stats').length == 0) {
                    return;
                }

                var ctx = document.getElementById("kt_chart_adwords_stats").getContext("2d");

                var gradient = ctx.createLinearGradient(0, 0, 0, 240);
                gradient.addColorStop(0, Chart.helpers.color('#ffefce').alpha(1).rgbString());
                gradient.addColorStop(1, Chart.helpers.color('#ffefce').alpha(0.3).rgbString());

                var config = {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
                        datasets: [{
                            label: "AdWord Clicks",
                            backgroundColor: KTApp.getStateColor('brand'),
                            borderColor: KTApp.getStateColor('brand'),

                            pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('danger'),
                            pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),
                            data: [
                                12, 16, 9, 18, 13, 12, 18, 12, 15, 17
                            ]
                        }, {
                            label: "AdWords Views",

                            backgroundColor: KTApp.getStateColor('success'),
                            borderColor: KTApp.getStateColor('success'),

                            pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('danger'),
                            pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),
                            data: [
                                10, 14, 12, 16, 9, 11, 13, 9, 13, 15
                            ]
                        }]
                    },
                    options: {
                        title: {
                            display: false,
                        },
                        tooltips: {
                            mode: 'nearest',
                            intersect: false,
                            position: 'nearest',
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        legend: {
                            display: false
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            xAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Month'
                                }
                            }],
                            yAxes: [{
                                stacked: true,
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Value'
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        elements: {
                            line: {
                                tension: 0.0000001
                            },
                            point: {
                                radius: 4,
                                borderWidth: 12
                            }
                        },
                        layout: {
                            padding: {
                                left: 0,
                                right: 0,
                                top: 10,
                                bottom: 0
                            }
                        }
                    }
                };

                var chart = new Chart(ctx, config);
            }

            // Bandwidth Charts 2.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var financeSummary = function () {
                if ($('#kt_chart_finance_summary').length == 0) {
                    return;
                }

                var ctx = document.getElementById("kt_chart_finance_summary").getContext("2d");

                var config = {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
                        datasets: [{
                            label: "AdWords Views",

                            backgroundColor: KTApp.getStateColor('success'),
                            borderColor: KTApp.getStateColor('success'),

                            pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('danger'),
                            pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),
                            data: [
                                10, 14, 12, 16, 9, 11, 13, 9, 13, 15
                            ]
                        }]
                    },
                    options: {
                        title: {
                            display: false,
                        },
                        tooltips: {
                            mode: 'nearest',
                            intersect: false,
                            position: 'nearest',
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        legend: {
                            display: false
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            xAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Month'
                                }
                            }],
                            yAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Value'
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        elements: {
                            line: {
                                tension: 0.0000001
                            },
                            point: {
                                radius: 4,
                                borderWidth: 12
                            }
                        },
                        layout: {
                            padding: {
                                left: 0,
                                right: 0,
                                top: 10,
                                bottom: 0
                            }
                        }
                    }
                };

                var chart = new Chart(ctx, config);
            }

            // Order Statistics.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var orderStatistics = function () {
                var container = KTUtil.getByID('kt_chart_order_statistics');

                if (!container) {
                    return;
                }

                var MONTHS = ['1 Jan', '2 Jan', '3 Jan', '4 Jan', '5 Jan', '6 Jan', '7 Jan'];

                var color = Chart.helpers.color;
                var barChartData = {
                    labels: ['1 Jan', '2 Jan', '3 Jan', '4 Jan', '5 Jan', '6 Jan', '7 Jan'],
                    datasets: [
                        {
                            fill: true,
                            //borderWidth: 0,
                            backgroundColor: color(KTApp.getStateColor('brand')).alpha(0.6).rgbString(),
                            borderColor: color(KTApp.getStateColor('brand')).alpha(0).rgbString(),

                            pointHoverRadius: 4,
                            pointHoverBorderWidth: 12,
                            pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('brand'),
                            pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),

                            data: [20, 30, 20, 40, 30, 60, 30]
                        },
                        {
                            fill: true,
                            //borderWidth: 0,
                            backgroundColor: color(KTApp.getStateColor('brand')).alpha(0.2).rgbString(),
                            borderColor: color(KTApp.getStateColor('brand')).alpha(0).rgbString(),

                            pointHoverRadius: 4,
                            pointHoverBorderWidth: 12,
                            pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('brand'),
                            pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),

                            data: [15, 40, 15, 30, 40, 30, 50]
                        }
                    ]
                };

                var ctx = container.getContext('2d');
                var chart = new Chart(ctx, {
                    type: 'line',
                    data: barChartData,
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: false,
                        scales: {
                            xAxes: [{
                                categoryPercentage: 0.35,
                                barPercentage: 0.70,
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString: 'Month'
                                },
                                gridLines: false,
                                ticks: {
                                    display: true,
                                    beginAtZero: true,
                                    fontColor: KTApp.getBaseColor('shape', 3),
                                    fontSize: 13,
                                    padding: 10
                                }
                            }],
                            yAxes: [{
                                categoryPercentage: 0.35,
                                barPercentage: 0.70,
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString: 'Value'
                                },
                                gridLines: {
                                    color: KTApp.getBaseColor('shape', 2),
                                    drawBorder: false,
                                    offsetGridLines: false,
                                    drawTicks: false,
                                    borderDash: [3, 4],
                                    zeroLineWidth: 1,
                                    zeroLineColor: KTApp.getBaseColor('shape', 2),
                                    zeroLineBorderDash: [3, 4]
                                },
                                ticks: {
                                    max: 70,
                                    stepSize: 10,
                                    display: true,
                                    beginAtZero: true,
                                    fontColor: KTApp.getBaseColor('shape', 3),
                                    fontSize: 13,
                                    padding: 10
                                }
                            }]
                        },
                        title: {
                            display: false
                        },
                        hover: {
                            mode: 'index'
                        },
                        tooltips: {
                            enabled: true,
                            intersect: false,
                            mode: 'nearest',
                            bodySpacing: 5,
                            yPadding: 10,
                            xPadding: 10,
                            caretPadding: 0,
                            displayColors: false,
                            backgroundColor: KTApp.getStateColor('brand'),
                            titleFontColor: '#ffffff',
                            cornerRadius: 4,
                            footerSpacing: 0,
                            titleSpacing: 0
                        },
                        layout: {
                            padding: {
                                left: 0,
                                right: 0,
                                top: 5,
                                bottom: 5
                            }
                        }
                    }
                });
            }

            // Quick Stat Charts
            var quickStats = function () {
                _initSparklineChart($('#kt_chart_quick_stats_1'), [10, 14, 18, 11, 9, 12, 14, 17, 18, 14], KTApp.getStateColor('brand'), 3);
                _initSparklineChart($('#kt_chart_quick_stats_2'), [11, 12, 18, 13, 11, 12, 15, 13, 19, 15], KTApp.getStateColor('danger'), 3);
                _initSparklineChart($('#kt_chart_quick_stats_3'), [12, 12, 18, 11, 15, 12, 13, 16, 11, 18], KTApp.getStateColor('success'), 3);
                _initSparklineChart($('#kt_chart_quick_stats_4'), [11, 9, 13, 18, 13, 15, 14, 13, 18, 15], KTApp.getStateColor('success'), 3);
            }

            // Daterangepicker Init
            var daterangepickerInit = function () {
                if ($('#kt_dashboard_daterangepicker').length == 0) {
                    return;
                }

                var picker = $('#kt_dashboard_daterangepicker');
                var start = moment();
                var end = moment();

                function cb(start, end, label) {
                    var title = '';
                    var range = '';

                    if ((end - start) < 100 || label == 'Today') {
                        title = 'Today:';
                        range = start.format('MMM D');
                    } else if (label == 'Yesterday') {
                        title = 'Yesterday:';
                        range = start.format('MMM D');
                    } else {
                        range = start.format('MMM D') + ' - ' + end.format('MMM D');
                    }

                    $('#kt_dashboard_daterangepicker_date').html(range);
                    $('#kt_dashboard_daterangepicker_title').html(title);
                }

                picker.daterangepicker({
                    direction: KTUtil.isRTL(),
                    startDate: start,
                    endDate: end,
                    opens: 'left',
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    }
                }, cb);

                cb(start, end, '');
            }

            // Latest Orders
            var datatableLatestOrders = function () {
                if ($('#kt_datatable_latest_orders').length === 0) {
                    return;
                }

                var datatable = $('.kt-datatable').KTDatatable({
                    data: {
                        type: 'remote',
                        source: {
                            read: {
                                url: 'https://keenthemes.com/metronic/themes/themes/metronic/dist/preview/inc/api/datatables/demos/default.php'
                            }
                        },
                        pageSize: 10,
                        saveState: {
                            cookie: false,
                            webstorage: true
                        },
                        serverPaging: true,
                        serverFiltering: true,
                        serverSorting: true
                    },

                    layout: {
                        theme: 'default',
                        class: '',
                        scroll: true,
                        height: 400,
                        footer: false
                    },

                    sortable: true,

                    filterable: false,

                    pagination: true,

                    columns: [{
                        field: "RecordID",
                        title: "#",
                        sortable: false,
                        width: 40,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center'
                    }, {
                        field: "ShipName",
                        title: "Company",
                        width: 'auto',
                        autoHide: false,
                        // callback function support for column rendering
                        template: function (data, i) {
                            var number = i + 1;
                            while (number > 5) {
                                number = number - 3;
                            }
                            var img = number + '.png';

                            var skills = [
                                'Angular, React',
                                'Vue, Kendo',
                                '.NET, Oracle, MySQL',
                                'Node, SASS, Webpack',
                                'MangoDB, Java',
                                'HTML5, jQuery, CSS3'
                            ];

                            var output = '\
                        <div class="kt-user-card-v2">\
                            <div class="kt-user-card-v2__pic">\
                                <img src="https://keenthemes.com/metronic/preview/assets/media/client-logos/logo' + img + '" alt="photo">\
                            </div>\
                            <div class="kt-user-card-v2__details">\
                                <a href="#" class="kt-user-card-v2__name">' + data.CompanyName + '</a>\
                                <span class="kt-user-card-v2__email">' +
                                skills[number - 1] + '</span>\
                            </div>\
                        </div>';

                            return output;
                        }
                    }, {
                        field: "ShipDate",
                        title: "Date",
                        width: 100,
                        template: function (data) {
                            return '<span class="kt-font-bold">' + data.ShipDate + '</span>';
                        }
                    }, {
                        field: "Status",
                        title: "Status",
                        width: 100,
                        // callback function support for column rendering
                        template: function (row) {
                            var status = {
                                1: {
                                    'title': 'Pending',
                                    'class': ' btn-label-brand'
                                },
                                2: {
                                    'title': 'Processing',
                                    'class': ' btn-label-danger'
                                },
                                3: {
                                    'title': 'Success',
                                    'class': ' btn-label-success'
                                },
                                4: {
                                    'title': 'Delivered',
                                    'class': ' btn-label-success'
                                },
                                5: {
                                    'title': 'Canceled',
                                    'class': ' btn-label-warning'
                                },
                                6: {
                                    'title': 'Done',
                                    'class': ' btn-label-danger'
                                },
                                7: {
                                    'title': 'On Hold',
                                    'class': ' btn-label-warning'
                                }
                            };
                            return '<span class="btn btn-bold btn-sm btn-font-sm ' + status[row.Status].class + '">' + status[row.Status].title + '</span>';
                        }
                    }, {
                        field: "Type",
                        title: "Managed By",
                        width: 200,
                        // callback function support for column rendering
                        template: function (data, i) {
                            var number = 4 + i;
                            while (number > 12) {
                                number = number - 3;
                            }
                            var user_img = '100_' + number + '.jpg';

                            var pos = KTUtil.getRandomInt(0, 5);
                            var position = [
                                'Developer',
                                'Designer',
                                'CEO',
                                'Manager',
                                'Architect',
                                'Sales'
                            ];

                            var output = '';
                            if (number > 5) {
                                output = '<div class="kt-user-card-v2">\
							<div class="kt-user-card-v2__pic">\
								<img src="https://keenthemes.com/metronic/preview/assets/media/users/' + user_img + '" alt="photo">\
							</div>\
							<div class="kt-user-card-v2__details">\
								<a href="#" class="kt-user-card-v2__name">' + data.CompanyAgent + '</a>\
								<span class="kt-user-card-v2__desc">' + position[pos] + '</span>\
							</div>\
						</div>';
                            }
                            else {
                                var stateNo = KTUtil.getRandomInt(0, 6);
                                var states = [
                                    'success',
                                    'brand',
                                    'danger',
                                    'success',
                                    'warning',
                                    'primary',
                                    'info'];
                                var state = states[stateNo];

                                output = '<div class="kt-user-card-v2">\
							<div class="kt-user-card-v2__pic">\
								<div class="kt-badge kt-badge--xl kt-badge--' + state + '">' + data.CompanyAgent.substring(0, 1) + '</div>\
							</div>\
							<div class="kt-user-card-v2__details">\
								<a href="#" class="kt-user-card-v2__name">' + data.CompanyAgent + '</a>\
								<span class="kt-user-card-v2__desc">' + position[pos] + '</span>\
							</div>\
						</div>';
                            }

                            return output;
                        }
                    }, {
                        field: "Actions",
                        width: 80,
                        title: "Actions",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function () {
                            return '\
                        <div class="dropdown">\
                            <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">\
                                <i class="flaticon-more-1"></i>\
                            </a>\
                            <div class="dropdown-menu dropdown-menu-right">\
                                <ul class="kt-nav">\
                                    <li class="kt-nav__item">\
                                        <a href="#" class="kt-nav__link">\
                                            <i class="kt-nav__link-icon flaticon2-expand"></i>\
                                            <span class="kt-nav__link-text">View</span>\
                                        </a>\
                                    </li>\
                                    <li class="kt-nav__item">\
                                        <a href="#" class="kt-nav__link">\
                                            <i class="kt-nav__link-icon flaticon2-contract"></i>\
                                            <span class="kt-nav__link-text">Edit</span>\
                                        </a>\
                                    </li>\
                                    <li class="kt-nav__item">\
                                        <a href="#" class="kt-nav__link">\
                                            <i class="kt-nav__link-icon flaticon2-trash"></i>\
                                            <span class="kt-nav__link-text">Delete</span>\
                                        </a>\
                                    </li>\
                                    <li class="kt-nav__item">\
                                        <a href="#" class="kt-nav__link">\
                                            <i class="kt-nav__link-icon flaticon2-mail-1"></i>\
                                            <span class="kt-nav__link-text">Export</span>\
                                        </a>\
                                    </li>\
                                </ul>\
                            </div>\
                        </div>\
                    ';
                        }
                    }]
                });
            }

            // Calendar Init
            var calendarInit = function () {
                if ($('#kt_calendar').length === 0) {
                    return;
                }

                var todayDate = moment().startOf('day');
                var YM = todayDate.format('YYYY-MM');
                var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
                var TODAY = todayDate.format('YYYY-MM-DD');
                var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

                $('#kt_calendar').fullCalendar({
                    isRTL: KTUtil.isRTL(),
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'agendaWeek,listWeek'
                    },
                    defaultView: 'agendaWeek',
                    eventLimit: true, // allow "more" link when too many events
                    navLinks: true,
                    selectHelper: true,
                    locale: 'fr',
                       // defaultDate: @if($demandes->first())"{{$demandes->first()->start_date}}" @else moment().startOf('day') @endif,

                    events: [
                            @foreach($demandes as $appointment)
                        {
                            id_demande: '{{$appointment->id}}',
                            description: '{{$appointment->demande->categorie->label}}',
                            title: '{{ $appointment->titre}}',
                            url: '@if($appointment->demande->propositions->first()&& $appointment->demande->propositions->first()->status !== App\Proposition::REFUSE){{url("demandeur/mes-demandes/show",$appointment->demande_id)}}@endif',
                            start: moment('{{ $appointment->start_date }}'),
                            end: moment('{{ $appointment->end_date }}'),
                            className: "{{$appointment->demande->demandeBycolor($appointment->demande->id)}}",
                        },
                        @endforeach
                    ],
                    eventRender: function (event, element) {
                        if (element.hasClass('fc-day-grid-event')) {
                            element.data('content', event.description);
                            element.data('placement', 'top');
                            KTApp.initPopover(element);
                        } else if (element.hasClass('fc-time-grid-event')) {
                            element.find('.fc-title').append('<div class="fc-description">' + event.description + '</div>');
                        } else if (element.find('.fc-list-item-title').lenght !== 0) {
                            element.find('.fc-list-item-title').append('<div class="fc-description">' + event.description + '</div>');
                        }

                        var url = '{{ route("demandeur.demande_delete", ":id") }}';
                        url = url.replace(':id', event.id_demande);

                        element.find(".fc-bg").css("pointer-events", "none");
                        element.append("<div style='position:absolute;bottom:0px;right:0px' ><a href='" + url + "'> <button type='button' id='" + event.id_demande + "' class='btn btn-block btn-primary btn-flat'>X</button></a></div>");
                        element.find("#btnDeleteEvent").click(function () {
                            $('#kt_calendar').fullCalendar('removeEvents', event._id);
                        })

                    }
                });
            }


            // Earnings Sliders
            var earningsSlide = function () {
                var carousel1 = $('#kt_earnings_widget .kt-widget30__head .owl-carousel');
                var carousel2 = $('#kt_earnings_widget .kt-widget30__body .owl-carousel');

                carousel1.find('.carousel').each(function (index) {
                    $(this).attr('data-position', index);
                });

                carousel1.owlCarousel({
                    rtl: KTUtil.isRTL(),
                    center: true,
                    loop: true,
                    items: 2
                });

                carousel2.owlCarousel({
                    rtl: KTUtil.isRTL(),
                    items: 1,
                    animateIn: 'fadeIn(100)',
                    loop: true
                });

                $(document).on('click', '.carousel', function () {
                    var index = $(this).attr('data-position');
                    if (index) {
                        carousel1.trigger('to.owl.carousel', index);
                        carousel2.trigger('to.owl.carousel', index);
                    }
                });

                carousel1.on('changed.owl.carousel', function () {
                    var index = $(this).find('.owl-item.active.center').find('.carousel').attr('data-position');
                    if (index) {
                        carousel2.trigger('to.owl.carousel', index);
                    }
                });

                carousel2.on('changed.owl.carousel', function () {
                    var index = $(this).find('.owl-item.active.center').find('.carousel').attr('data-position');
                    if (index) {
                        carousel1.trigger('to.owl.carousel', index);
                    }
                });
            }

            return {
                // Init demos
                init: function () {
                    // init charts
                    dailySales();
                    profitShare();
                    salesStats();
                    salesByApps();
                    latestUpdates();
                    trendsStats();
                    trendsStats2();
                    latestTrendsMap();
                    revenueChange();
                    supportCases();
                    supportRequests();
                    activitiesChart();
                    bandwidthChart1();
                    bandwidthChart2();
                    adWordsStat();
                    financeSummary();
                    quickStats();
                    orderStatistics();

                    // init daterangepicker
                    daterangepickerInit();

                    // datatables
                    datatableLatestOrders();

                    // calendar
                    calendarInit();

                    // earnings slide
                    earningsSlide();


                    // demo loading
                    // var loading = new KTDialog({'type': 'loader', 'placement': 'top center', 'message': 'Loading ...'});
                    var loading = new KTDialog({'type': 'loader', 'placement': 'top center', 'message': 'Chargement ...'});
                    loading.show();

                    setTimeout(function () {
                        loading.hide();
                    }, 3000);
                }
            };
        }();

        // Class initialization on page load
        jQuery(document).ready(function () {
            KTDashboard.init();
        });
    </script>
    {{--<!--begin::Page Vendors(used by this page) -->--}}
    {{--<script src="../assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>--}}

    {{--<!--end::Page Vendors -->--}}

    {{--<!--begin::Page Scripts(used by this page) -->--}}
    {{--<script src="{{asset('assets/app/custom/general/demandes.js')}}" type="text/javascript"></script>--}}

    {{--<!--end::Page Scripts -->--}}

@endsection
