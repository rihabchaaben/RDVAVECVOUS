@extends('layouts.admin.master')
@section('content')
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
        <!-- begin:: Content Head -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">


        </div>
        <!-- end:: Content Head -->
        <!-- begin:: Content -->

        <div class="kt-container  kt-grid__item kt-grid__item--fluid">
            <div class="alert alert-light alert-elevate" role="alert">
                <div class="alert-text text-center">
                    <h2>Demandes</h2>
                </div>
            </div>

            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Application Sales
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_widget11_tab1_content" role="tab" aria-selected="true">
                                    Demandes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget11_tab2_content" role="tab" aria-selected="false">
                                    Propositions
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="kt_widget11_tab1_content">
                            <!--begin::Widget 11-->
                            <div class="kt-widget11">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <td style=" width: 1%;"></td>
                                            <td style=" width: 20%;">Application</td>
                                            <td style=" width: 10%;">Sales</td>
                                            <td style=" width: 20%;">Change</td>
                                            <td style=" width: 10%;">Status</td>
                                            <td style=" width: 10%;" class="kt-align-right">Total</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox kt-checkbox--single">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <span class="kt-widget11__title">Vertex 2.0</span>
                                                <span class="kt-widget11__sub">Vertex To By Again</span>
                                            </td>
                                            <td>19,200</td>
                                            <td>
                                                <div class="kt-widget11__chart" style="height:50px; width: 100px"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                    <canvas id="kt_chart_sales_by_apps_1_1" style="display: block; width: 100px; height: 50px;" width="89" height="44" class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </td>
                                            <td><span class="kt-badge kt-badge--danger kt-badge--inline">in process</span></td>
                                            <td class="kt-align-right kt-font-brand kt-font-bold">$14,740</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
                                            </td>
                                            <td>
                                                <span class="kt-widget11__title">Metronic</span>
                                                <span class="kt-widget11__sub">Powerful Admin Theme</span>
                                            </td>
                                            <td>24,310</td>
                                            <td>
                                                <div class="kt-widget11__chart" style="height:50px; width: 100px"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                    <canvas id="kt_chart_sales_by_apps_1_2" style="display: block; width: 100px; height: 50px;" width="89" height="44" class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="kt-badge kt-badge--success kt-badge--inline">pending</span>
                                            </td>
                                            <td class="kt-align-right kt-font-brand kt-font-bold">$16,010</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
                                            </td>
                                            <td>
                                                <span class="kt-widget11__title">Apex</span>
                                                <span class="kt-widget11__sub">The Best Selling App</span>
                                            </td>
                                            <td>9,076</td>
                                            <td>
                                                <div class="kt-widget11__chart" style="height:50px; width: 100px"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                    <canvas id="kt_chart_sales_by_apps_1_3" style="display: block; width: 100px; height: 50px;" width="89" height="44" class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="kt-badge kt-badge--brand kt-badge--inline">new</span>
                                            </td>
                                            <td class="kt-align-right kt-font-brand kt-font-bold">$37,200</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
                                            </td>
                                            <td>
                                                <span class="kt-widget11__title">Cascades</span>
                                                <span class="kt-widget11__sub">Design Tool</span>
                                            </td>
                                            <td>11,094</td>
                                            <td>
                                                <div class="kt-widget11__chart" style="height:50px; width: 100px"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                    <canvas id="kt_chart_sales_by_apps_1_4" style="display: block; width: 100px; height: 50px;" width="89" height="44" class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="kt-badge kt-badge--warning kt-badge--inline">new</span>
                                            </td>
                                            <td class="kt-align-right kt-font-brand kt-font-bold">$8,520</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="kt-widget11__action kt-align-right">
                                    <button type="button" class="btn btn-label-success btn-sm btn-bold">View All Records</button>
                                </div>
                            </div>
                            <!--end::Widget 11-->
                        </div>
                        <div class="tab-pane" id="kt_widget11_tab2_content">
                            <!--begin::Widget 11-->
                            <div class="kt-widget11">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <td style=" width: 1%;"></td>
                                            <td style=" width: 20%;">Application</td>
                                            <td style=" width: 10%;">Sales</td>
                                            <td style=" width: 20%;">Change</td>
                                            <td style=" width: 10%;">Status</td>
                                            <td style=" width: 10%;" class="kt-align-right">Total</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox kt-checkbox--single">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <span class="kt-widget11__title">Loop</span>
                                                <span class="kt-widget11__sub">CRM System</span>
                                            </td>
                                            <td>19,200</td>
                                            <td>
                                                <div class="kt-widget11__chart" style="height:50px; width: 100px"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                    <canvas id="kt_chart_sales_by_apps_2_1" style="display: block; width: 100px; height: 50px;" height="44" width="89" class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </td>
                                            <td><span class="kt-badge kt-badge--danger kt-badge--inline">in process</span></td>
                                            <td class="kt-align-right kt-font-brand">$34,740</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
                                            </td>
                                            <td>
                                                <span class="kt-widget11__title">Selto</span>
                                                <span class="kt-widget11__sub">Powerful Website Builder</span>
                                            </td>
                                            <td>24,310</td>
                                            <td>
                                                <div class="kt-widget11__chart" style="height:50px; width: 100px"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                    <canvas id="kt_chart_sales_by_apps_2_2" style="display: block; width: 100px; height: 50px;" height="44" width="89" class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </td>
                                            <td><span class="kt-badge kt-badge--success kt-badge--inline">new</span></td>
                                            <td class="kt-align-right kt-font-brand">$46,010</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
                                            </td>
                                            <td>
                                                <span class="kt-widget11__title">Jippo</span>
                                                <span class="kt-widget11__sub">The Best Selling App</span>
                                            </td>
                                            <td>9,076</td>
                                            <td>
                                                <div class="kt-widget11__chart" style="height:50px; width: 100px"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                    <canvas id="kt_chart_sales_by_apps_2_3" style="display: block; width: 100px; height: 50px;" height="44" width="89" class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </td>
                                            <td><span class="kt-badge kt-badge--brand kt-badge--inline">approved</span></td>
                                            <td class="kt-align-right kt-font-brand">$67,800</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
                                            </td>
                                            <td>
                                                <span class="kt-widget11__title">Verto</span>
                                                <span class="kt-widget11__sub">Web Development Tool</span>
                                            </td>
                                            <td>11,094</td>
                                            <td>
                                                <div class="kt-widget11__chart" style="height:50px; width: 100px"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                    <canvas id="kt_chart_sales_by_apps_2_4" style="display: block; width: 100px; height: 50px;" height="44" width="89" class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </td>
                                            <td><span class="kt-badge kt-badge--danger kt-badge--inline">pending</span></td>
                                            <td class="kt-align-right kt-font-brand">$18,520</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="kt-widget11__action kt-align-right">
                                    <button type="button" class="btn btn-outline-brand btn-bold">View All Records</button>
                                </div>
                            </div>
                            <!--end::Widget 11-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection