@extends('layouts.front.demandeurs.master')
@section('content')
    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="../assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>


    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">


            <!-- begin:: Content -->
            <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
                <div class="row">
                    <div class="col-lg-12">

                        <!--begin::Portlet-->
                        <div class="kt-portlet" id="kt_portlet">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon">
													<i class="flaticon-calendar-2"></i>
												</span>
                                    <h3 class="kt-portlet__head-title">
                                        Background Events
                                    </h3>
                                </div>
                                <div class="kt-portlet__head-toolbar">
                                    <a href="#" class="btn btn-brand btn-elevate">
                                        <i class="la la-plus"></i>
                                        Add Event
                                    </a>
                                </div>
                            </div>
                            <div class="kt-portlet__body">
                                <div id="kt_calendar" class="fc fc-unthemed fc-ltr">
                                    <div class="fc-toolbar fc-header-toolbar">
                                        <div class="fc-left">
                                            <div class="fc-button-group">
                                                <button type="button"
                                                        class="fc-prev-button fc-button fc-state-default fc-corner-left"
                                                        aria-label="prev"><span
                                                            class="fc-icon fc-icon-left-single-arrow"></span></button>
                                                <button type="button"
                                                        class="fc-next-button fc-button fc-state-default fc-corner-right"
                                                        aria-label="next"><span
                                                            class="fc-icon fc-icon-right-single-arrow"></span></button>
                                            </div>
                                            <button type="button"
                                                    class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled"
                                                    disabled="">today
                                            </button>
                                        </div>
                                        <div class="fc-right">
                                            <div class="fc-button-group">
                                                <button type="button"
                                                        class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">
                                                    month
                                                </button>
                                                <button type="button"
                                                        class="fc-agendaWeek-button fc-button fc-state-default">week
                                                </button>
                                                <button type="button"
                                                        class="fc-agendaDay-button fc-button fc-state-default">day
                                                </button>
                                                <button type="button"
                                                        class="fc-listWeek-button fc-button fc-state-default fc-corner-right">
                                                    list
                                                </button>
                                            </div>
                                        </div>
                                        <div class="fc-center"><h2>May 2019</h2></div>
                                        <div class="fc-clear"></div>
                                    </div>
                                    <div class="fc-view-container" style="">
                                        <div class="fc-view fc-month-view fc-basic-view" style="">
                                            <table class="">
                                                <thead class="fc-head">
                                                <tr>
                                                    <td class="fc-head-container fc-widget-header">
                                                        <div class="fc-row fc-widget-header">
                                                            <table class="">
                                                                <thead>
                                                                <tr>
                                                                    <th class="fc-day-header fc-widget-header fc-sun">
                                                                        <span>Sun</span></th>
                                                                    <th class="fc-day-header fc-widget-header fc-mon">
                                                                        <span>Mon</span></th>
                                                                    <th class="fc-day-header fc-widget-header fc-tue">
                                                                        <span>Tue</span></th>
                                                                    <th class="fc-day-header fc-widget-header fc-wed">
                                                                        <span>Wed</span></th>
                                                                    <th class="fc-day-header fc-widget-header fc-thu">
                                                                        <span>Thu</span></th>
                                                                    <th class="fc-day-header fc-widget-header fc-fri">
                                                                        <span>Fri</span></th>
                                                                    <th class="fc-day-header fc-widget-header fc-sat">
                                                                        <span>Sat</span></th>
                                                                </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </thead>
                                                <tbody class="fc-body">
                                                <tr>
                                                    <td class="fc-widget-content">
                                                        <div class="fc-scroller fc-day-grid-container"
                                                             style="overflow: hidden; height: 1119px;">
                                                            <div class="fc-day-grid fc-unselectable">
                                                                <div class="fc-row fc-week fc-widget-content fc-rigid"
                                                                     style="height: 186px;">
                                                                    <div class="fc-bg">
                                                                        <table class="">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past"
                                                                                    data-date="2019-04-28"></td>
                                                                                <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past"
                                                                                    data-date="2019-04-29"></td>
                                                                                <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past"
                                                                                    data-date="2019-04-30"></td>
                                                                                <td class="fc-day fc-widget-content fc-wed fc-past"
                                                                                    data-date="2019-05-01"></td>
                                                                                <td class="fc-day fc-widget-content fc-thu fc-past"
                                                                                    data-date="2019-05-02"></td>
                                                                                <td class="fc-day fc-widget-content fc-fri fc-past"
                                                                                    data-date="2019-05-03"></td>
                                                                                <td class="fc-day fc-widget-content fc-sat fc-past"
                                                                                    data-date="2019-05-04"></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-content-skeleton">
                                                                        <table>
                                                                            <thead>
                                                                            <tr>
                                                                                <td class="fc-day-top fc-sun fc-other-month fc-past"
                                                                                    data-date="2019-04-28"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-04-28&quot;,&quot;type&quot;:&quot;day&quot;}">28</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-mon fc-other-month fc-past"
                                                                                    data-date="2019-04-29"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-04-29&quot;,&quot;type&quot;:&quot;day&quot;}">29</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-tue fc-other-month fc-past"
                                                                                    data-date="2019-04-30"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-04-30&quot;,&quot;type&quot;:&quot;day&quot;}">30</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-wed fc-past"
                                                                                    data-date="2019-05-01"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-01&quot;,&quot;type&quot;:&quot;day&quot;}">1</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-thu fc-past"
                                                                                    data-date="2019-05-02"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-02&quot;,&quot;type&quot;:&quot;day&quot;}">2</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-fri fc-past"
                                                                                    data-date="2019-05-03"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-03&quot;,&quot;type&quot;:&quot;day&quot;}">3</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-sat fc-past"
                                                                                    data-date="2019-05-04"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-04&quot;,&quot;type&quot;:&quot;day&quot;}">4</a>
                                                                                </td>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td class="fc-event-container"><a
                                                                                            class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-danger fc-event-solid-success fc-draggable fc-resizable"
                                                                                            data-original-title=""
                                                                                            title="">
                                                                                        <div class="fc-content"><span
                                                                                                    class="fc-title">All Day Event</span>
                                                                                        </div>
                                                                                        <div class="fc-resizer fc-end-resizer"></div>
                                                                                    </a></td>
                                                                                <td class="fc-event-container"><a
                                                                                            class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-light fc-event-solid-primary fc-draggable fc-resizable"
                                                                                            data-original-title=""
                                                                                            title="">
                                                                                        <div class="fc-content"><span
                                                                                                    class="fc-title">Company Trip</span>
                                                                                        </div>
                                                                                        <div class="fc-resizer fc-end-resizer"></div>
                                                                                    </a></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-bgevent-skeleton">
                                                                        <table>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td class="fc-nonbusiness fc-bgevent"
                                                                                    colspan="1"></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-bgevent-skeleton">
                                                                        <table>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td class="fc-nonbusiness fc-bgevent"
                                                                                    colspan="1"></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-bgevent-skeleton">
                                                                        <table>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td class="fc-event-primary fc-bgevent"
                                                                                    style="background-color:#5d78ff"
                                                                                    colspan="2"></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="fc-row fc-week fc-widget-content fc-rigid"
                                                                     style="height: 186px;">
                                                                    <div class="fc-bg">
                                                                        <table class="">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td class="fc-day fc-widget-content fc-sun fc-past"
                                                                                    data-date="2019-05-05"></td>
                                                                                <td class="fc-day fc-widget-content fc-mon fc-past"
                                                                                    data-date="2019-05-06"></td>
                                                                                <td class="fc-day fc-widget-content fc-tue fc-past"
                                                                                    data-date="2019-05-07"></td>
                                                                                <td class="fc-day fc-widget-content fc-wed fc-past"
                                                                                    data-date="2019-05-08"></td>
                                                                                <td class="fc-day fc-widget-content fc-thu fc-past"
                                                                                    data-date="2019-05-09"></td>
                                                                                <td class="fc-day fc-widget-content fc-fri fc-past"
                                                                                    data-date="2019-05-10"></td>
                                                                                <td class="fc-day fc-widget-content fc-sat fc-past"
                                                                                    data-date="2019-05-11"></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-content-skeleton">
                                                                        <table>
                                                                            <thead>
                                                                            <tr>
                                                                                <td class="fc-day-top fc-sun fc-past"
                                                                                    data-date="2019-05-05"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-05&quot;,&quot;type&quot;:&quot;day&quot;}">5</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-mon fc-past"
                                                                                    data-date="2019-05-06"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-06&quot;,&quot;type&quot;:&quot;day&quot;}">6</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-tue fc-past"
                                                                                    data-date="2019-05-07"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-07&quot;,&quot;type&quot;:&quot;day&quot;}">7</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-wed fc-past"
                                                                                    data-date="2019-05-08"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-08&quot;,&quot;type&quot;:&quot;day&quot;}">8</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-thu fc-past"
                                                                                    data-date="2019-05-09"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-09&quot;,&quot;type&quot;:&quot;day&quot;}">9</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-fri fc-past"
                                                                                    data-date="2019-05-10"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-10&quot;,&quot;type&quot;:&quot;day&quot;}">10</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-sat fc-past"
                                                                                    data-date="2019-05-11"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-11&quot;,&quot;type&quot;:&quot;day&quot;}">11</a>
                                                                                </td>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td class="fc-event-container"><a
                                                                                            class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-danger fc-draggable"
                                                                                            style="background-color:#5867dd;border-color:#5867dd"
                                                                                            data-original-title=""
                                                                                            title="">
                                                                                        <div class="fc-content"><span
                                                                                                    class="fc-time">4p</span>
                                                                                            <span class="fc-title">Repeating Event</span>
                                                                                        </div>
                                                                                    </a></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-bgevent-skeleton">
                                                                        <table>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td class="fc-nonbusiness fc-bgevent"
                                                                                    colspan="1"></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-bgevent-skeleton">
                                                                        <table>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td class="fc-nonbusiness fc-bgevent"
                                                                                    colspan="1"></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="fc-row fc-week fc-widget-content fc-rigid"
                                                                     style="height: 186px;">
                                                                    <div class="fc-bg">
                                                                        <table class="">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td class="fc-day fc-widget-content fc-sun fc-past"
                                                                                    data-date="2019-05-12"></td>
                                                                                <td class="fc-day fc-widget-content fc-mon fc-past"
                                                                                    data-date="2019-05-13"></td>
                                                                                <td class="fc-day fc-widget-content fc-tue fc-past"
                                                                                    data-date="2019-05-14"></td>
                                                                                <td class="fc-day fc-widget-content fc-wed fc-past"
                                                                                    data-date="2019-05-15"></td>
                                                                                <td class="fc-day fc-widget-content fc-thu fc-past"
                                                                                    data-date="2019-05-16"></td>
                                                                                <td class="fc-day fc-widget-content fc-fri fc-past"
                                                                                    data-date="2019-05-17"></td>
                                                                                <td class="fc-day fc-widget-content fc-sat fc-past"
                                                                                    data-date="2019-05-18"></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-content-skeleton">
                                                                        <table>
                                                                            <thead>
                                                                            <tr>
                                                                                <td class="fc-day-top fc-sun fc-past"
                                                                                    data-date="2019-05-12"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-12&quot;,&quot;type&quot;:&quot;day&quot;}">12</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-mon fc-past"
                                                                                    data-date="2019-05-13"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-13&quot;,&quot;type&quot;:&quot;day&quot;}">13</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-tue fc-past"
                                                                                    data-date="2019-05-14"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-14&quot;,&quot;type&quot;:&quot;day&quot;}">14</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-wed fc-past"
                                                                                    data-date="2019-05-15"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-15&quot;,&quot;type&quot;:&quot;day&quot;}">15</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-thu fc-past"
                                                                                    data-date="2019-05-16"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-16&quot;,&quot;type&quot;:&quot;day&quot;}">16</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-fri fc-past"
                                                                                    data-date="2019-05-17"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-17&quot;,&quot;type&quot;:&quot;day&quot;}">17</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-sat fc-past"
                                                                                    data-date="2019-05-18"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-18&quot;,&quot;type&quot;:&quot;day&quot;}">18</a>
                                                                                </td>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td class="fc-event-container"><a
                                                                                            class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-brand fc-draggable"
                                                                                            data-original-title=""
                                                                                            title="">
                                                                                        <div class="fc-content"><span
                                                                                                    class="fc-time">1:30p</span>
                                                                                            <span class="fc-title">Reporting</span>
                                                                                        </div>
                                                                                    </a></td>
                                                                                <td></td>
                                                                                <td class="fc-event-container"><a
                                                                                            class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                                                            data-original-title=""
                                                                                            title="">
                                                                                        <div class="fc-content"><span
                                                                                                    class="fc-time">4p</span>
                                                                                            <span class="fc-title">Repeating Event</span>
                                                                                        </div>
                                                                                    </a></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-bgevent-skeleton">
                                                                        <table>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td class="fc-nonbusiness fc-bgevent"
                                                                                    colspan="1"></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-bgevent-skeleton">
                                                                        <table>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td class="fc-nonbusiness fc-bgevent"
                                                                                    colspan="1"></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-bgevent-skeleton">
                                                                        <table>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td class="fc-bgevent"
                                                                                    style="background-color:#36a3f7"
                                                                                    colspan="1"></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="fc-row fc-week fc-widget-content fc-rigid"
                                                                     style="height: 186px;">
                                                                    <div class="fc-bg">
                                                                        <table class="">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td class="fc-day fc-widget-content fc-sun fc-past"
                                                                                    data-date="2019-05-19"></td>
                                                                                <td class="fc-day fc-widget-content fc-mon fc-past"
                                                                                    data-date="2019-05-20"></td>
                                                                                <td class="fc-day fc-widget-content fc-tue fc-past"
                                                                                    data-date="2019-05-21"></td>
                                                                                <td class="fc-day fc-widget-content fc-wed fc-past"
                                                                                    data-date="2019-05-22"></td>
                                                                                <td class="fc-day fc-widget-content fc-thu fc-past"
                                                                                    data-date="2019-05-23"></td>
                                                                                <td class="fc-day fc-widget-content fc-fri fc-past"
                                                                                    data-date="2019-05-24"></td>
                                                                                <td class="fc-day fc-widget-content fc-sat fc-past"
                                                                                    data-date="2019-05-25"></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-content-skeleton">
                                                                        <table>
                                                                            <thead>
                                                                            <tr>
                                                                                <td class="fc-day-top fc-sun fc-past"
                                                                                    data-date="2019-05-19"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-19&quot;,&quot;type&quot;:&quot;day&quot;}">19</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-mon fc-past"
                                                                                    data-date="2019-05-20"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-20&quot;,&quot;type&quot;:&quot;day&quot;}">20</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-tue fc-past"
                                                                                    data-date="2019-05-21"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-21&quot;,&quot;type&quot;:&quot;day&quot;}">21</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-wed fc-past"
                                                                                    data-date="2019-05-22"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-22&quot;,&quot;type&quot;:&quot;day&quot;}">22</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-thu fc-past"
                                                                                    data-date="2019-05-23"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-23&quot;,&quot;type&quot;:&quot;day&quot;}">23</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-fri fc-past"
                                                                                    data-date="2019-05-24"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-24&quot;,&quot;type&quot;:&quot;day&quot;}">24</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-sat fc-past"
                                                                                    data-date="2019-05-25"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-25&quot;,&quot;type&quot;:&quot;day&quot;}">25</a>
                                                                                </td>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-bgevent-skeleton">
                                                                        <table>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td class="fc-nonbusiness fc-bgevent"
                                                                                    colspan="1"></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-bgevent-skeleton">
                                                                        <table>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td class="fc-nonbusiness fc-bgevent"
                                                                                    colspan="1"></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="fc-row fc-week fc-widget-content fc-rigid"
                                                                     style="height: 186px;">
                                                                    <div class="fc-bg">
                                                                        <table class="">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td class="fc-day fc-widget-content fc-sun fc-past"
                                                                                    data-date="2019-05-26"></td>
                                                                                <td class="fc-day fc-widget-content fc-mon fc-past"
                                                                                    data-date="2019-05-27"></td>
                                                                                <td class="fc-day fc-widget-content fc-tue fc-past"
                                                                                    data-date="2019-05-28"></td>
                                                                                <td class="fc-day fc-widget-content fc-wed fc-today "
                                                                                    data-date="2019-05-29"></td>
                                                                                <td class="fc-day fc-widget-content fc-thu fc-future"
                                                                                    data-date="2019-05-30"></td>
                                                                                <td class="fc-day fc-widget-content fc-fri fc-future"
                                                                                    data-date="2019-05-31"></td>
                                                                                <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future"
                                                                                    data-date="2019-06-01"></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-content-skeleton">
                                                                        <table>
                                                                            <thead>
                                                                            <tr>
                                                                                <td class="fc-day-top fc-sun fc-past"
                                                                                    data-date="2019-05-26"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-26&quot;,&quot;type&quot;:&quot;day&quot;}">26</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-mon fc-past"
                                                                                    data-date="2019-05-27"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-27&quot;,&quot;type&quot;:&quot;day&quot;}">27</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-tue fc-past"
                                                                                    data-date="2019-05-28"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-28&quot;,&quot;type&quot;:&quot;day&quot;}">28</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-wed fc-today "
                                                                                    data-date="2019-05-29"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-29&quot;,&quot;type&quot;:&quot;day&quot;}">29</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-thu fc-future"
                                                                                    data-date="2019-05-30"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-30&quot;,&quot;type&quot;:&quot;day&quot;}">30</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-fri fc-future"
                                                                                    data-date="2019-05-31"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-05-31&quot;,&quot;type&quot;:&quot;day&quot;}">31</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-sat fc-other-month fc-future"
                                                                                    data-date="2019-06-01"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-06-01&quot;,&quot;type&quot;:&quot;day&quot;}">1</a>
                                                                                </td>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td rowspan="4"></td>
                                                                                <td rowspan="4"></td>
                                                                                <td class="fc-event-container"
                                                                                    rowspan="4"><a
                                                                                            class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable"
                                                                                            href="http://google.com/"
                                                                                            data-original-title=""
                                                                                            title="">
                                                                                        <div class="fc-content"><span
                                                                                                    class="fc-title">Click for Google</span>
                                                                                        </div>
                                                                                        <div class="fc-resizer fc-end-resizer"></div>
                                                                                    </a></td>
                                                                                <td class="fc-event-container"><a
                                                                                            class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                                                            data-original-title=""
                                                                                            title="">
                                                                                        <div class="fc-content"><span
                                                                                                    class="fc-time">10:30a</span>
                                                                                            <span class="fc-title">Meeting</span>
                                                                                        </div>
                                                                                    </a></td>
                                                                                <td rowspan="4"></td>
                                                                                <td rowspan="4"></td>
                                                                                <td rowspan="4"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="fc-event-container"><a
                                                                                            class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-info fc-draggable"
                                                                                            data-original-title=""
                                                                                            title="">
                                                                                        <div class="fc-content"><span
                                                                                                    class="fc-time">12p</span>
                                                                                            <span class="fc-title">Lunch</span>
                                                                                        </div>
                                                                                    </a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="fc-event-container"><a
                                                                                            class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-metal fc-draggable"
                                                                                            data-original-title=""
                                                                                            title="">
                                                                                        <div class="fc-content"><span
                                                                                                    class="fc-time">5:30p</span>
                                                                                            <span class="fc-title">Happy Hour</span>
                                                                                        </div>
                                                                                    </a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="fc-event-container"><a
                                                                                            class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                                                            data-original-title=""
                                                                                            title="">
                                                                                        <div class="fc-content"><span
                                                                                                    class="fc-time">8p</span>
                                                                                            <span class="fc-title">Dinner</span>
                                                                                        </div>
                                                                                    </a></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-bgevent-skeleton">
                                                                        <table>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td class="fc-nonbusiness fc-bgevent"
                                                                                    colspan="1"></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-bgevent-skeleton">
                                                                        <table>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td class="fc-nonbusiness fc-bgevent"
                                                                                    colspan="1"></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-bgevent-skeleton">
                                                                        <table>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td class="fc-event-accent fc-bgevent"
                                                                                    style="background-color:#282a3c"
                                                                                    colspan="2"></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="fc-row fc-week fc-widget-content fc-rigid"
                                                                     style="height: 189px;">
                                                                    <div class="fc-bg">
                                                                        <table class="">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td class="fc-day fc-widget-content fc-sun fc-other-month fc-future"
                                                                                    data-date="2019-06-02"></td>
                                                                                <td class="fc-day fc-widget-content fc-mon fc-other-month fc-future"
                                                                                    data-date="2019-06-03"></td>
                                                                                <td class="fc-day fc-widget-content fc-tue fc-other-month fc-future"
                                                                                    data-date="2019-06-04"></td>
                                                                                <td class="fc-day fc-widget-content fc-wed fc-other-month fc-future"
                                                                                    data-date="2019-06-05"></td>
                                                                                <td class="fc-day fc-widget-content fc-thu fc-other-month fc-future"
                                                                                    data-date="2019-06-06"></td>
                                                                                <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future"
                                                                                    data-date="2019-06-07"></td>
                                                                                <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future"
                                                                                    data-date="2019-06-08"></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-content-skeleton">
                                                                        <table>
                                                                            <thead>
                                                                            <tr>
                                                                                <td class="fc-day-top fc-sun fc-other-month fc-future"
                                                                                    data-date="2019-06-02"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-06-02&quot;,&quot;type&quot;:&quot;day&quot;}">2</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-mon fc-other-month fc-future"
                                                                                    data-date="2019-06-03"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-06-03&quot;,&quot;type&quot;:&quot;day&quot;}">3</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-tue fc-other-month fc-future"
                                                                                    data-date="2019-06-04"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-06-04&quot;,&quot;type&quot;:&quot;day&quot;}">4</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-wed fc-other-month fc-future"
                                                                                    data-date="2019-06-05"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-06-05&quot;,&quot;type&quot;:&quot;day&quot;}">5</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-thu fc-other-month fc-future"
                                                                                    data-date="2019-06-06"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-06-06&quot;,&quot;type&quot;:&quot;day&quot;}">6</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-fri fc-other-month fc-future"
                                                                                    data-date="2019-06-07"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-06-07&quot;,&quot;type&quot;:&quot;day&quot;}">7</a>
                                                                                </td>
                                                                                <td class="fc-day-top fc-sat fc-other-month fc-future"
                                                                                    data-date="2019-06-08"><a
                                                                                            class="fc-day-number"
                                                                                            data-goto="{&quot;date&quot;:&quot;2019-06-08&quot;,&quot;type&quot;:&quot;day&quot;}">8</a>
                                                                                </td>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-bgevent-skeleton">
                                                                        <table>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td class="fc-nonbusiness fc-bgevent"
                                                                                    colspan="1"></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-bgevent-skeleton">
                                                                        <table>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td class="fc-nonbusiness fc-bgevent"
                                                                                    colspan="1"></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end::Portlet-->
                    </div>
                </div>
            </div>

            <!-- end:: Content -->
        </div>
    </div>
@endsection
@section('script')
    <!--begin::Page Vendors(used by this page) -->
    <script src="../assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>

    <!--end::Page Vendors -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="../assets/app/custom/general/components/calendar/background-events.js" type="text/javascript"></script>

    <!--end::Page Scripts -->

@endsection
