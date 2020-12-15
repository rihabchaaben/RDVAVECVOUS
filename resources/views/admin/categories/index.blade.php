@extends('layouts.admin.master')
<!--begin::Page Vendors Styles(used by this page) -->
<link href="{{asset('assets/vendors/custom/jstree/jstree.bundle.css')}}"
      rel="stylesheet" type="text/css"/>
<!--end::Page Vendors Styles -->

@section('content')
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
        <!-- begin:: Content Head -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">


        </div>

        <div class="kt-container  kt-grid__item kt-grid__item--fluid">

            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                        <h3 class="kt-portlet__head-title">
                            Liste des categories
                            <small>Liste des catégories dans notre platform</small>
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-download"></i> Export
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                                <span class="kt-nav__section-text">Choose an option</span>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-print"></i>
                                                    <span class="kt-nav__link-text">Print</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-copy"></i>
                                                    <span class="kt-nav__link-text">Copy</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                    <span class="kt-nav__link-text">Excel</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                    <span class="kt-nav__link-text">CSV</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                    <span class="kt-nav__link-text">PDF</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                &nbsp;
                                <a href="{{route('admin.categorie_create')}}"
                                   class="btn btn-brand btn-elevate btn-icon-sm">
                                    <i class="la la-plus"></i>
                                    Ajouter une catégorie
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">

                    <div id="kt_tree_2" class="tree-demo jstree jstree-2 jstree-default" role="tree"
                         aria-multiselectable="true" tabindex="0" aria-activedescendant="j2_8" aria-busy="false">
                        <ul>
                            @if($categories->isEmpty()) <p class="text-center">
                            Aucun enregistrement trouvé
                            </p> @endif

                            @foreach($categories as $cat)
                                <li data-jstree='{ "opened" : true }'>
                                    <a href="">{{ ucfirst(@$cat->label) }}</a>

                                    <ul>
                                        @foreach($cat->childrens as $child)
                                            <li data-jstree='{ "opened" : true }'>
                                                <a href="">{{ucfirst(@$child->label) }}</a>
                                                <ul>
                                                    @foreach($child->childrens as $ch)
                                                        <li>
                                                            <a href="">{{ ucfirst(@$ch->label) }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                            @endforeach
                        </ul>

                    </div>

                </div>
            </div>

            <!-- end:: Content Head -->
        </div>
    @section('script')
        <!--begin::Page Vendors(used by this page) -->
            <script src="{{asset('assets/vendors/custom/jstree/jstree.bundle.js')}}" type="text/javascript"></script>
            <!--end::Page Vendors -->

            <!--begin::Page Scripts(used by this page) -->
            <script src="{{asset('assets/app/custom/general/components/extended/treeview.js')}}"
                    type="text/javascript"></script>
            <!--end::Page Scripts -->
@endsection
@endsection
