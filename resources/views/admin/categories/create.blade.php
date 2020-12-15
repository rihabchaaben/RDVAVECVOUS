@extends('layouts.admin.master')
@section('content')
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
        <!-- begin:: Content Head -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">


        </div>
        <!-- end:: Content Head -->
        <!-- begin:: Content -->

        <div class="kt-container  kt-grid__item kt-grid__item--fluid">

            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Ajouter Catégorie
                        </h3>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="kt-form kt-form--label-right" action="{{route('admin.categorie_store')}}" method="post">
                    @csrf
                    <div class="kt-portlet__body">
                        <div class="kt-section kt-section--first">
                            <h3 class="kt-section__title">1. Catégorie Info:</h3>
                            <div class="kt-section__body">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Parent Name:</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="parent" class="form-control"
                                               placeholder="Enter full name">
                                        <span class="form-text text-muted">Le Nom du categorie le parent</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Nom du Catégorie:</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="categorie" class="form-control"
                                               placeholder="Nom du Catégorie">
                                        <span class="form-text text-muted">Le nom du catégorie</span>
                                    </div>
                                </div>
                            </div>

                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>


                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>

        </div>
    </div>
@endsection

