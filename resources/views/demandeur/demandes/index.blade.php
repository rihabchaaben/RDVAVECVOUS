@extends('layouts.front.demandeurs.master')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet"
          type="text/css"/>


    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

<!--
            <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title">
                        Mes Demandes
                    </h3>

                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                    {{--<div class="kt-subheader__group" id="kt_subheader_search">--}}
                    {{--<span class="kt-subheader__desc" id="kt_subheader_total">--}}
                    {{--Liste des demandes calendrier                           </span>--}}

                    {{--</div>--}}

                </div>

            </div>
-->

            <!-- begin:: Content -->
            <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Portlet-->
                        <div class="kt-portlet" id="kt_portlet">
                            <div class="kt-portlet__head bg-blue">
                                <div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon">
													<i class="flaticon-calendar-2"></i>
												</span>
                                    <h3 class="kt-portlet__head-title">
                                        Mes Demandes

                                    </h3>

                                </div>
                            </div>
                            <div class="kt-portlet__body row ">

                                      <div class="col-lg-12 table-responsive">
                                                                 <div class="item-caland">
                                <div id="kt_calendar" name="calend"></div>
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
                                                     aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <!--end::widget item-->
                                    </div>

                                    <div class="col text-center">
                                        <!--begin::widget item-->
                                        <div class="kt-widget15__item">
                                            <span class="kt-widget15__text">
                                                <b>Rdv avec proposition</b>
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
                                                     aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
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

                            <!-- end:: Content -->
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

                        {{--<script src="{{asset('assets/vendors/general/moment/min/moment.min.js')}}"--}}
                        {{--type="text/javascript"></script>--}}
                        {{--<script src="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}"--}}
                        {{--type="text/javascript"></script>--}}

                        {{--<script src="{{asset('assets/app/custom/general/lang-all.js')}}"--}}
                        {{--type="text/javascript"></script>--}}

                        <script>

                            $(function () {
                                "use strict";
                                $('#kt_calendar').fullCalendar('option', 'locale', 'fr');
                                // Class definition
                                var KTDashboard = function () {


// csrf token init
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });

                                    // Calendar Init
                                    const lang = $('html').attr('lang') || 'pt-br';

                                    var calendarInit = function () {


                                        if ($('#kt_calendar').length === 0) {
                                            return;
                                        }

                                        var todayDate = moment().startOf('day');
                                        var YM = todayDate.format('YYYY-MM');
                                        var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
                                        var TODAY = todayDate.format('YYYY-MM-DD');
                                        var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');
                                        var initialLocaleCode = 'fr';
                                        {{--var debut = @if($demandes->first()){{$demandes->first()->start_date}} @else moment().startOf('day') @endif ;--}}
                                        $('#kt_calendar').fullCalendar({
                                            isRTL: KTUtil.isRTL(),
                                            header: {
                                                left: 'prev,next today',
                                                center: 'title',
                                                right: 'agendaWeek,listWeek'
                                            },
                                            editable: true,
                                            defaultView: 'agendaWeek',
                                            eventLimit: true, // allow "more" link when too many events
                                            navLinks: true,
                                            selectHelper: true,
                                            locale: 'fr',

                                          //  defaultDate: @if($demandes->first())"{{$demandes->first()->start_date}}" @else moment().startOf('day') @endif,



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

                                            eventRender
                                    :

                                        function (event, element) {
                                            if (element.hasClass('fc-day-grid-event')) {
                                                element.data('content', event.description);
                                                element.data('placement', 'top');
                                                KTApp.initPopover(element);
                                            } else if (element.hasClass('fc-time-grid-event')) {
                                                element.find('.fc-title').append('<div class="fc-description">' + event.description + '</div>');
                                            } else if (element.find('.fc-list-item-title').lenght !== 0) {
                                                element.find('.fc-list-item-title').append('<div class="fc-description"   data-skin="brand" data-toggle="kt-tooltip" data-placement="top" title=""\n' +
                                                    '                                            data-original-title="Contenu flouter">' + event.description + '</div>');
                                            }

                                            var url = '{{ route("demandeur.demande_delete", ":id") }}';
                                            url = url.replace(':id', event.id_demande);
                                            // var msg_delete = 'return confirm("Vous étes sure de vouloir supprimer cette rdv ?")';
                                            var msg_delete = 'return confirm("Vous êtes sûre que vous voulez supprimer cette rdv?")';

                                            element.find(".fc-bg").css("pointer-events", "none");
                                            element.append("<div style='position:absolute;bottom:0px;right:0px' ><a href='" + url + "' onclick='" + msg_delete + "'> <button type='button' id='" + event.id_demande + "' class='btn btn-block btn-primary btn-flat'><i class='flaticon-delete'></i>Supprimer</button></a></div>");
                                            element.append("<div style='position:absolute;bottom:40%;right:25%' ><a href='#'> <button type='button' id='" + event.id_demande + "' class='btn btn-block btn-primary btn-flat'><i class='fa fa-hand-paper'></i>Délpacer</button></a></div>");
                                            element.find("#btnDeleteEvent").click(function () {
                                                $('#kt_calendar').fullCalendar('removeEvents', event._id);
                                            })

                                        }

                                    ,

                                        eventDrop: function (event, delta) {
                                            var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                                            var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                                            var id = event.id_demande;
                                            Swal.fire({
                                                // title: 'Edit RDV',
                                                // text: "Vous desirez modifier le RDV pourquoi?",

                                                title: '',
                                                text: "Pourquoi vous desirez modifier le RDV?",
                                                type: "info",
                                                icon: 'warning',
                                                input: 'textarea',

                                                showCancelButton: true,
                                                cancelButtonText:'Annuler',
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                // confirmButtonText: 'Je Confirme',
                                                confirmButtonText: 'Je confirme',
                                                preConfirm: (message) => {
                                                    if (!message) {
                                                        // Swal.showValidationMessage('Dites au moins quelque chose...')
                                                        Swal.showValidationMessage('Dites-nous au moins quelque chose...')
                                                    }
                                                },
                                            }).then((result) => {

                                                if (result.value) {
                                                    $.ajax({
                                                        url: '{{route('demandeur.demande_updateCalendar')}}',
                                                        data: {
                                                            start_date: start,
                                                            end_date: end,
                                                            id: id,
                                                            message: result.value
                                                        },
                                                        type: "POST",
                                                        success: function (response) {
                                                            // toastr.success("Votre demande a été mis a jours avec succeé!");
                                                            toastr.success("Votre demande a été mis à jour avec succès!");
                                                        }
                                                    });
                                                }
                                                else {
                                                    location.href = '/demandeur/mes-demandes';
                                                }
                                            })

                                        }
                                    ,
                                    })
                                        ;
                                    }


                                    return {
                                        // Init demos
                                        init: function () {


                                            // calendar
                                            calendarInit();
                                            // $('#kt_calendar').fullCalendar({lang: "es"});
                                            // $('#kt_calendar').fullCalendar().setOption('locale', 'fr');


                                            // demo loading
                                            var loading = new KTDialog({
                                                'type': 'loader',
                                                'placement': 'top center',
                                                // 'message': 'Loading ...'
                                                'message': 'Chargement ...'
                                            });
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
                                // $('#kt_calendar').setOption('locale', 'fr');
                                // $('#kt_calendar').setOption('locale', 'pt-br');
                            });

                        </script>

@endsection
