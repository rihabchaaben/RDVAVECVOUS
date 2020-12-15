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
                            Demandeur N° {{$demandeur->id}}
                        </h3>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="kt-form kt-form--label-right" action="{{route('admin.demandeur_update',$demandeur->id)}}"
                      method="post">
                    @csrf
                    <div class="kt-portlet__body">
                        <div class="kt-section kt-section--first">
                            <h3 class="kt-section__title">1. Customer Info:</h3>
                            <div class="kt-section__body">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Full Name:</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="name"
                                               value="{{$demandeur->nom}}">
                                        <span class="form-text text-muted">Please enter your full name</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Ville:</label>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="exampleSelect1" name="ville_id">
                                            @foreach($villes as $ville)
                                                <option value="{{$ville->id}}"
                                                        @if($ville->id == $demandeur->ville->id) selected @endif>{{$ville->nom}}</option>
                                            @endforeach
                                        </select>
                                        <span class="form-text text-muted">Please enter your full name</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Adresse:</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" value="{{$demandeur->adresse}}"
                                               name="adresse">
                                        <span class="form-text text-muted">Please enter your full name</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Code Postal:</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" value="{{$demandeur->cp}}" name="cp">
                                        <span class="form-text text-muted">Please enter your full name</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Contact
                                        Phone</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="la la-phone"></i></span>
                                            </div>
                                            <input type="text" class="form-control" value="{{$demandeur->telephone}}"
                                                   placeholder="Phone" aria-describedby="basic-addon1" name="telephone">
                                        </div>
                                        <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                                    </div>
                                </div>

                            </div>

                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>

                            <h3 class="kt-section__title">2. Customer Account:</h3>
                            <div class="kt-section__body">
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Email
                                        Address</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="la la-at"></i></span></div>
                                            <input type="text" class="form-control" value="{{$demandeur->user->email}}"
                                                   aria-describedby="basic-addon1" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Password:</label>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" placeholder="Enter email"
                                               name="password">
                                        <span class="form-text text-muted">We'll never share your email with anyone else</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Confirm Password:</label>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" placeholder="Enter email">
                                        <span class="form-text text-muted">We'll never share your email with anyone else</span>
                                    </div>
                                </div>

                            </div>
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

