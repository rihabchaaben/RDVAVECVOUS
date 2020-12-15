@extends('layouts.front.demandeurs.master')
@section('content')
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="../assets/app/custom/wizard/wizard-v4.default.css" rel="stylesheet" type="text/css"/>

    <!--end::Page Custom Styles -->

    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">


                    <!-- begin:: Subheader -->
                    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                        <div class="kt-subheader__main">
                            <h3 class="kt-subheader__title">
                                Wizard v4 </h3>
                            <span class="kt-subheader__separator kt-hidden"></span>
                            <div class="kt-subheader__breadcrumbs">
                                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                                <span class="kt-subheader__breadcrumbs-separator"></span>
                                <a href="" class="kt-subheader__breadcrumbs-link">
                                    Custom </a>
                                <span class="kt-subheader__breadcrumbs-separator"></span>
                                <a href="" class="kt-subheader__breadcrumbs-link">
                                    Wizard v4 </a>

                                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
                            </div>
                        </div>
                    </div>

                    <!-- end:: Subheader -->

                    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
                        <div class="kt-wizard-v4" id="kt_wizard_v4" data-ktwizard-state="first">

                            <!--begin: Form Wizard Nav -->
                            <div class="kt-wizard-v4__nav">
                                <div class="kt-wizard-v4__nav-items">
                                    <a class="kt-wizard-v4__nav-item" href="#" data-ktwizard-type="step" data-ktwizard-state="current">
                                        <div class="kt-wizard-v4__nav-body">
                                            <div class="kt-wizard-v4__nav-number">
                                                1
                                            </div>
                                            <div class="kt-wizard-v4__nav-label">
                                                <div class="kt-wizard-v4__nav-label-title">
                                                    Add Account
                                                </div>
                                                <div class="kt-wizard-v4__nav-label-desc">
                                                    Create Custom Account
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="kt-wizard-v4__nav-item" href="#" data-ktwizard-type="step" data-ktwizard-state="pending">
                                        <div class="kt-wizard-v4__nav-body">
                                            <div class="kt-wizard-v4__nav-number">
                                                2
                                            </div>
                                            <div class="kt-wizard-v4__nav-label">
                                                <div class="kt-wizard-v4__nav-label-title">
                                                    Your Address
                                                </div>
                                                <div class="kt-wizard-v4__nav-label-desc">
                                                    Setup Your Address
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="kt-wizard-v4__nav-item" href="#" data-ktwizard-type="step" data-ktwizard-state="pending">
                                        <div class="kt-wizard-v4__nav-body">
                                            <div class="kt-wizard-v4__nav-number">
                                                3
                                            </div>
                                            <div class="kt-wizard-v4__nav-label">
                                                <div class="kt-wizard-v4__nav-label-title">
                                                    Make Payment
                                                </div>
                                                <div class="kt-wizard-v4__nav-label-desc">
                                                    Add Payment Options
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="kt-wizard-v4__nav-item" href="#" data-ktwizard-type="step" data-ktwizard-state="pending">
                                        <div class="kt-wizard-v4__nav-body">
                                            <div class="kt-wizard-v4__nav-number">
                                                4
                                            </div>
                                            <div class="kt-wizard-v4__nav-label">
                                                <div class="kt-wizard-v4__nav-label-title">
                                                    Completed
                                                </div>
                                                <div class="kt-wizard-v4__nav-label-desc">
                                                    Review and Submit
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!--end: Form Wizard Nav -->
                            <div class="kt-portlet">
                                <div class="kt-portlet__body kt-portlet__body--fit">
                                    <div class="kt-grid">
                                        <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

                                            <!--begin: Form Wizard Form-->
                                            <form class="kt-form" id="kt_form" novalidate="novalidate">

                                                <!--begin: Form Wizard Step 1-->
                                                <div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                                                    <div class="kt-heading kt-heading--md">Enter your Account Details</div>
                                                    <div class="kt-form__section kt-form__section--first">
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

                                                <!--end: Form Wizard Step 1-->

                                                <!--begin: Form Wizard Step 2-->
                                                <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                                    <div class="kt-heading kt-heading--md">Setup Your Address</div>
                                                    <div class="kt-form__section kt-form__section--first">
                                                        <div class="kt-wizard-v4__form">
                                                            <div class="form-group">
                                                                <label>Address Line 1</label>
                                                                <input type="text" class="form-control" name="address1" placeholder="Address Line 1" value="Address Line 1" aria-describedby="address1-error">
                                                                <span class="form-text text-muted">Please enter your Address.</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Address Line 2</label>
                                                                <input type="text" class="form-control" name="address2" placeholder="Address Line 2" value="Address Line 2">
                                                                <span class="form-text text-muted">Please enter your Address.</span>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <div class="form-group">
                                                                        <label>Postcode</label>
                                                                        <input type="text" class="form-control" name="postcode" placeholder="Postcode" value="3000" aria-describedby="postcode-error">
                                                                        <span class="form-text text-muted">Please enter your Postcode.</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="form-group">
                                                                        <label>City</label>
                                                                        <input type="text" class="form-control" name="state" placeholder="City" value="Melbourne" aria-describedby="state-error">
                                                                        <span class="form-text text-muted">Please enter your City.</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <div class="form-group">
                                                                        <label>State</label>
                                                                        <input type="text" class="form-control" name="state" placeholder="State" value="VIC">
                                                                        <span class="form-text text-muted">Please enter your Postcode.</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="form-group">
                                                                        <label>Country:</label>
                                                                        <select name="country" class="form-control" aria-describedby="country-error">
                                                                            <option value="">Select</option>
                                                                            <option value="AF">Afghanistan</option>
                                                                            <option value="AX">Åland Islands</option>
                                                                            <option value="AL">Albania</option>
                                                                            <option value="DZ">Algeria</option>
                                                                            <option value="AS">American Samoa</option>
                                                                            <option value="AD">Andorra</option>
                                                                            <option value="AO">Angola</option>
                                                                            <option value="AI">Anguilla</option>
                                                                            <option value="AQ">Antarctica</option>
                                                                            <option value="AG">Antigua and Barbuda</option>
                                                                            <option value="AR">Argentina</option>
                                                                            <option value="AM">Armenia</option>
                                                                            <option value="AW">Aruba</option>
                                                                            <option value="AU" selected="">Australia</option>
                                                                            <option value="AT">Austria</option>
                                                                            <option value="AZ">Azerbaijan</option>
                                                                            <option value="BS">Bahamas</option>
                                                                            <option value="BH">Bahrain</option>
                                                                            <option value="BD">Bangladesh</option>
                                                                            <option value="BB">Barbados</option>
                                                                            <option value="BY">Belarus</option>
                                                                            <option value="BE">Belgium</option>
                                                                            <option value="BZ">Belize</option>
                                                                            <option value="BJ">Benin</option>
                                                                            <option value="BM">Bermuda</option>
                                                                            <option value="BT">Bhutan</option>
                                                                            <option value="BO">Bolivia, Plurinational State of</option>
                                                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                                            <option value="BA">Bosnia and Herzegovina</option>
                                                                            <option value="BW">Botswana</option>
                                                                            <option value="BV">Bouvet Island</option>
                                                                            <option value="BR">Brazil</option>
                                                                            <option value="IO">British Indian Ocean Territory</option>
                                                                            <option value="BN">Brunei Darussalam</option>
                                                                            <option value="BG">Bulgaria</option>
                                                                            <option value="BF">Burkina Faso</option>
                                                                            <option value="BI">Burundi</option>
                                                                            <option value="KH">Cambodia</option>
                                                                            <option value="CM">Cameroon</option>
                                                                            <option value="CA">Canada</option>
                                                                            <option value="CV">Cape Verde</option>
                                                                            <option value="KY">Cayman Islands</option>
                                                                            <option value="CF">Central African Republic</option>
                                                                            <option value="TD">Chad</option>
                                                                            <option value="CL">Chile</option>
                                                                            <option value="CN">China</option>
                                                                            <option value="CX">Christmas Island</option>
                                                                            <option value="CC">Cocos (Keeling) Islands</option>
                                                                            <option value="CO">Colombia</option>
                                                                            <option value="KM">Comoros</option>
                                                                            <option value="CG">Congo</option>
                                                                            <option value="CD">Congo, the Democratic Republic of the</option>
                                                                            <option value="CK">Cook Islands</option>
                                                                            <option value="CR">Costa Rica</option>
                                                                            <option value="CI">Côte d'Ivoire</option>
                                                                            <option value="HR">Croatia</option>
                                                                            <option value="CU">Cuba</option>
                                                                            <option value="CW">Curaçao</option>
                                                                            <option value="CY">Cyprus</option>
                                                                            <option value="CZ">Czech Republic</option>
                                                                            <option value="DK">Denmark</option>
                                                                            <option value="DJ">Djibouti</option>
                                                                            <option value="DM">Dominica</option>
                                                                            <option value="DO">Dominican Republic</option>
                                                                            <option value="EC">Ecuador</option>
                                                                            <option value="EG">Egypt</option>
                                                                            <option value="SV">El Salvador</option>
                                                                            <option value="GQ">Equatorial Guinea</option>
                                                                            <option value="ER">Eritrea</option>
                                                                            <option value="EE">Estonia</option>
                                                                            <option value="ET">Ethiopia</option>
                                                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                                                            <option value="FO">Faroe Islands</option>
                                                                            <option value="FJ">Fiji</option>
                                                                            <option value="FI">Finland</option>
                                                                            <option value="FR">France</option>
                                                                            <option value="GF">French Guiana</option>
                                                                            <option value="PF">French Polynesia</option>
                                                                            <option value="TF">French Southern Territories</option>
                                                                            <option value="GA">Gabon</option>
                                                                            <option value="GM">Gambia</option>
                                                                            <option value="GE">Georgia</option>
                                                                            <option value="DE">Germany</option>
                                                                            <option value="GH">Ghana</option>
                                                                            <option value="GI">Gibraltar</option>
                                                                            <option value="GR">Greece</option>
                                                                            <option value="GL">Greenland</option>
                                                                            <option value="GD">Grenada</option>
                                                                            <option value="GP">Guadeloupe</option>
                                                                            <option value="GU">Guam</option>
                                                                            <option value="GT">Guatemala</option>
                                                                            <option value="GG">Guernsey</option>
                                                                            <option value="GN">Guinea</option>
                                                                            <option value="GW">Guinea-Bissau</option>
                                                                            <option value="GY">Guyana</option>
                                                                            <option value="HT">Haiti</option>
                                                                            <option value="HM">Heard Island and McDonald Islands</option>
                                                                            <option value="VA">Holy See (Vatican City State)</option>
                                                                            <option value="HN">Honduras</option>
                                                                            <option value="HK">Hong Kong</option>
                                                                            <option value="HU">Hungary</option>
                                                                            <option value="IS">Iceland</option>
                                                                            <option value="IN">India</option>
                                                                            <option value="ID">Indonesia</option>
                                                                            <option value="IR">Iran, Islamic Republic of</option>
                                                                            <option value="IQ">Iraq</option>
                                                                            <option value="IE">Ireland</option>
                                                                            <option value="IM">Isle of Man</option>
                                                                            <option value="IL">Israel</option>
                                                                            <option value="IT">Italy</option>
                                                                            <option value="JM">Jamaica</option>
                                                                            <option value="JP">Japan</option>
                                                                            <option value="JE">Jersey</option>
                                                                            <option value="JO">Jordan</option>
                                                                            <option value="KZ">Kazakhstan</option>
                                                                            <option value="KE">Kenya</option>
                                                                            <option value="KI">Kiribati</option>
                                                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                                                            <option value="KR">Korea, Republic of</option>
                                                                            <option value="KW">Kuwait</option>
                                                                            <option value="KG">Kyrgyzstan</option>
                                                                            <option value="LA">Lao People's Democratic Republic</option>
                                                                            <option value="LV">Latvia</option>
                                                                            <option value="LB">Lebanon</option>
                                                                            <option value="LS">Lesotho</option>
                                                                            <option value="LR">Liberia</option>
                                                                            <option value="LY">Libya</option>
                                                                            <option value="LI">Liechtenstein</option>
                                                                            <option value="LT">Lithuania</option>
                                                                            <option value="LU">Luxembourg</option>
                                                                            <option value="MO">Macao</option>
                                                                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                                            <option value="MG">Madagascar</option>
                                                                            <option value="MW">Malawi</option>
                                                                            <option value="MY">Malaysia</option>
                                                                            <option value="MV">Maldives</option>
                                                                            <option value="ML">Mali</option>
                                                                            <option value="MT">Malta</option>
                                                                            <option value="MH">Marshall Islands</option>
                                                                            <option value="MQ">Martinique</option>
                                                                            <option value="MR">Mauritania</option>
                                                                            <option value="MU">Mauritius</option>
                                                                            <option value="YT">Mayotte</option>
                                                                            <option value="MX">Mexico</option>
                                                                            <option value="FM">Micronesia, Federated States of</option>
                                                                            <option value="MD">Moldova, Republic of</option>
                                                                            <option value="MC">Monaco</option>
                                                                            <option value="MN">Mongolia</option>
                                                                            <option value="ME">Montenegro</option>
                                                                            <option value="MS">Montserrat</option>
                                                                            <option value="MA">Morocco</option>
                                                                            <option value="MZ">Mozambique</option>
                                                                            <option value="MM">Myanmar</option>
                                                                            <option value="NA">Namibia</option>
                                                                            <option value="NR">Nauru</option>
                                                                            <option value="NP">Nepal</option>
                                                                            <option value="NL">Netherlands</option>
                                                                            <option value="NC">New Caledonia</option>
                                                                            <option value="NZ">New Zealand</option>
                                                                            <option value="NI">Nicaragua</option>
                                                                            <option value="NE">Niger</option>
                                                                            <option value="NG">Nigeria</option>
                                                                            <option value="NU">Niue</option>
                                                                            <option value="NF">Norfolk Island</option>
                                                                            <option value="MP">Northern Mariana Islands</option>
                                                                            <option value="NO">Norway</option>
                                                                            <option value="OM">Oman</option>
                                                                            <option value="PK">Pakistan</option>
                                                                            <option value="PW">Palau</option>
                                                                            <option value="PS">Palestinian Territory, Occupied</option>
                                                                            <option value="PA">Panama</option>
                                                                            <option value="PG">Papua New Guinea</option>
                                                                            <option value="PY">Paraguay</option>
                                                                            <option value="PE">Peru</option>
                                                                            <option value="PH">Philippines</option>
                                                                            <option value="PN">Pitcairn</option>
                                                                            <option value="PL">Poland</option>
                                                                            <option value="PT">Portugal</option>
                                                                            <option value="PR">Puerto Rico</option>
                                                                            <option value="QA">Qatar</option>
                                                                            <option value="RE">Réunion</option>
                                                                            <option value="RO">Romania</option>
                                                                            <option value="RU">Russian Federation</option>
                                                                            <option value="RW">Rwanda</option>
                                                                            <option value="BL">Saint Barthélemy</option>
                                                                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                                            <option value="LC">Saint Lucia</option>
                                                                            <option value="MF">Saint Martin (French part)</option>
                                                                            <option value="PM">Saint Pierre and Miquelon</option>
                                                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                                                            <option value="WS">Samoa</option>
                                                                            <option value="SM">San Marino</option>
                                                                            <option value="ST">Sao Tome and Principe</option>
                                                                            <option value="SA">Saudi Arabia</option>
                                                                            <option value="SN">Senegal</option>
                                                                            <option value="RS">Serbia</option>
                                                                            <option value="SC">Seychelles</option>
                                                                            <option value="SL">Sierra Leone</option>
                                                                            <option value="SG">Singapore</option>
                                                                            <option value="SX">Sint Maarten (Dutch part)</option>
                                                                            <option value="SK">Slovakia</option>
                                                                            <option value="SI">Slovenia</option>
                                                                            <option value="SB">Solomon Islands</option>
                                                                            <option value="SO">Somalia</option>
                                                                            <option value="ZA">South Africa</option>
                                                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                                            <option value="SS">South Sudan</option>
                                                                            <option value="ES">Spain</option>
                                                                            <option value="LK">Sri Lanka</option>
                                                                            <option value="SD">Sudan</option>
                                                                            <option value="SR">Suriname</option>
                                                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                                                            <option value="SZ">Swaziland</option>
                                                                            <option value="SE">Sweden</option>
                                                                            <option value="CH">Switzerland</option>
                                                                            <option value="SY">Syrian Arab Republic</option>
                                                                            <option value="TW">Taiwan, Province of China</option>
                                                                            <option value="TJ">Tajikistan</option>
                                                                            <option value="TZ">Tanzania, United Republic of</option>
                                                                            <option value="TH">Thailand</option>
                                                                            <option value="TL">Timor-Leste</option>
                                                                            <option value="TG">Togo</option>
                                                                            <option value="TK">Tokelau</option>
                                                                            <option value="TO">Tonga</option>
                                                                            <option value="TT">Trinidad and Tobago</option>
                                                                            <option value="TN">Tunisia</option>
                                                                            <option value="TR">Turkey</option>
                                                                            <option value="TM">Turkmenistan</option>
                                                                            <option value="TC">Turks and Caicos Islands</option>
                                                                            <option value="TV">Tuvalu</option>
                                                                            <option value="UG">Uganda</option>
                                                                            <option value="UA">Ukraine</option>
                                                                            <option value="AE">United Arab Emirates</option>
                                                                            <option value="GB">United Kingdom</option>
                                                                            <option value="US">United States</option>
                                                                            <option value="UM">United States Minor Outlying Islands</option>
                                                                            <option value="UY">Uruguay</option>
                                                                            <option value="UZ">Uzbekistan</option>
                                                                            <option value="VU">Vanuatu</option>
                                                                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                                            <option value="VN">Viet Nam</option>
                                                                            <option value="VG">Virgin Islands, British</option>
                                                                            <option value="VI">Virgin Islands, U.S.</option>
                                                                            <option value="WF">Wallis and Futuna</option>
                                                                            <option value="EH">Western Sahara</option>
                                                                            <option value="YE">Yemen</option>
                                                                            <option value="ZM">Zambia</option>
                                                                            <option value="ZW">Zimbabwe</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--end: Form Wizard Step 2-->

                                                <!--begin: Form Wizard Step 3-->
                                                <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                                    <div class="kt-heading kt-heading--md">Enter your Payment Details</div>
                                                    <div class="kt-form__section kt-form__section--first">
                                                        <div class="kt-wizard-v4__form">
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <div class="form-group">
                                                                        <label>Name on Card</label>
                                                                        <input type="text" class="form-control" name="ccname" placeholder="Card Name" value="John Wick">
                                                                        <span class="form-text text-muted">Please enter your Card Name.</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="form-group">
                                                                        <label>Card Number</label>
                                                                        <input type="text" class="form-control" name="ccnumber" placeholder="Card Number" value="4444 3333 2222 1111">
                                                                        <span class="form-text text-muted">Please enter your Address.</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label>Card Expiry Month</label>
                                                                        <input type="number" class="form-control" name="ccmonth" placeholder="Card Expiry Month" value="01">
                                                                        <span class="form-text text-muted">Please enter your Card Expiry Month.</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label>Card Expiry Year</label>
                                                                        <input type="number" class="form-control" name="ccyear" placeholder="Card Expire Year" value="21">
                                                                        <span class="form-text text-muted">Please enter your Card Expiry Year.</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label>Card CVV Number</label>
                                                                        <input type="password" class="form-control" name="cccvv" placeholder="Card CVV Number" value="123">
                                                                        <span class="form-text text-muted">Please enter your Card CVV Number.</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--end: Form Wizard Step 3-->

                                                <!--begin: Form Wizard Step 4-->
                                                <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                                    <div class="kt-heading kt-heading--md">Review your Details and Submit</div>
                                                    <div class="kt-form__section kt-form__section--first">
                                                        <div class="kt-wizard-v4__review">
                                                            <div class="kt-wizard-v4__review-item">
                                                                <div class="kt-wizard-v4__review-title">
                                                                    Your Account Details
                                                                </div>
                                                                <div class="kt-wizard-v4__review-content">
                                                                    John Wick<br>
                                                                    Phone: +61412345678<br>
                                                                    Email: johnwick@reeves.com
                                                                </div>
                                                            </div>
                                                            <div class="kt-wizard-v4__review-item">
                                                                <div class="kt-wizard-v4__review-title">
                                                                    Your Address Details
                                                                </div>
                                                                <div class="kt-wizard-v4__review-content">
                                                                    Address Line 1<br>
                                                                    Address Line 2<br>
                                                                    Melbourne 3000, VIC, Australia
                                                                </div>
                                                            </div>
                                                            <div class="kt-wizard-v4__review-item">
                                                                <div class="kt-wizard-v4__review-title">
                                                                    Payment Details
                                                                </div>
                                                                <div class="kt-wizard-v4__review-content">
                                                                    Card Number: xxxx xxxx xxxx 1111<br>
                                                                    Card Name: John Wick<br>
                                                                    Card Expiry: 01/21
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--end: Form Wizard Step 4-->

                                                <!--begin: Form Actions -->
                                                <div class="kt-form__actions">
                                                    <div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
                                                        Previous
                                                    </div>
                                                    <div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
                                                        Submit
                                                    </div>
                                                    <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
                                                        Next Step
                                                    </div>
                                                </div>

                                                <!--end: Form Actions -->
                                            </form>

                                            <!--end: Form Wizard Form-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
