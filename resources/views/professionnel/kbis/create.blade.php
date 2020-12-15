@extends('layouts.front.professionnel.master')
@section('content')


    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
        {{-- <div class="kt-subheader   kt-grid__item" id="kt_subheader">
           

        </div> --}}
        <!-- end:: Content Head -->
        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head bg-blue">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                        Extrait KBIS et Assurance
                        </h3>
                    </div>
                </div>
                <!--begin::Form-->
                <form action="{{route('pro.kbis_store')}}" method="post"
                      class="kt-form kt-form--label-right" enctype="multipart/form-data">
                    @csrf
                    <div class="kt-portlet__body">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12">Type</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <select class="form-control" name="type">
                                    <option value="{{\App\KbisFile::KBIS}}">Kbis</option>
                                    <option value="{{\App\KbisFile::ASSURENCE}}">Assurance</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12">Fichier</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <input type="file" class="form-control" name="kbis">
                            </div>
                        </div>
                      
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-lg-9 ml-lg-auto">
                                    <button type="submit" class="btn btn-success">Sauvegarder</button>
                                    <button type="submit" class="btn btn-secondary">Annuler</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->

        </div>
        <!-- end:: Content -->
    </div>

@endsection