@extends('layouts.front.professionnel.master')
@section('content')
    <style>
        .select2-container--default .select2-results>.select2-results__options{
            max-height: 500px !important;
        }
    </style>
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch">
        <div class="kt-container kt-body  kt-grid kt-grid--ver" id="kt_body">

            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
                <!-- begin:: Content Head -->
                <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                    <div class="kt-subheader__main">

                        <h3 class="kt-subheader__title">
                            Edit User
                        </h3>

                        <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                        <div class="kt-subheader__group" id="kt_subheader_search">
            <span class="kt-subheader__desc" id="kt_subheader_total">
                                    Alex Stone                            </span>

                        </div>

                    </div>

                </div>
                <!-- end:: Content Head -->
                <!-- begin:: Content -->
                <div class="kt-content kt-grid__item kt-grid__item--fluid" id="kt_content">
                    <div class="kt-portlet kt-portlet--tabs">
                        <div class="kt-portlet__head bg-blue">
                            <div class="kt-portlet__head-toolbar">
                                <ul class="nav nav-tabs nav-tabs-space-xl nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#kt_apps_user_edit_tab_1"
                                           role="tab" aria-selected="true">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon id="Bound" points="0 0 24 0 24 24 0 24"></polygon>
                                                    <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                          id="Shape" fill="#000000" fill-rule="nonzero"></path>
                                                    <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                          id="Path" fill="#000000" opacity="0.3"></path>
                                                </g>
                                            </svg>
                                            Profile
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#kt_apps_user_edit_tab_2"
                                           role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z"
                                                          fill="#000000" opacity="0.3"></path>
                                                    <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z"
                                                          fill="#000000"></path>
                                                </g>
                                            </svg>
                                            Settings
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#kt_apps_user_edit_tab_3"
                                           role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z"
                                                          fill="#000000" opacity="0.3"></path>
                                                    <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z"
                                                          fill="#000000"></path>
                                                </g>
                                            </svg>
                                            Kbis Assurence
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#kt_apps_user_edit_tab_4" role="tab"
                                           aria-selected="false">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                                          id="Path-50" fill="#000000" opacity="0.3"></path>
                                                    <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z"
                                                          id="Mask" fill="#000000" opacity="0.3"></path>
                                                    <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z"
                                                          id="Mask-Copy" fill="#000000" opacity="0.3"></path>
                                                </g>
                                            </svg>
                                            Change Password
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <form action="{{route('pro.profile_update',Auth::user()->professionnel->id)}}"
                                  method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="tab-content">
                                    <div class="tab-pane active" id="kt_apps_user_edit_tab_1" role="tabpanel">
                                        <div class="kt-form kt-form--label-right">
                                            <div class="kt-form__body">
                                                <div class="kt-section kt-section--first">
                                                    <div class="kt-section__body">
                                                        <div class="row">
                                                            <label class="col-xl-3"></label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <h3 class="kt-section__title kt-section__title-sm">
                                                                    Customer Info:</h3>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <div class="kt-avatar kt-avatar--outline kt-avatar--circle-"
                                                                     id="kt_apps_user_add_avatar">
                                                                    <div class="kt-avatar__holder"
                                                                         @if(!$professionnel->avatar) @endif>
                                                                        <img src="{{asset('storage/'.$professionnel->avatar)}}"
                                                                             id="blah" alt=""
                                                                             style="height:100%;width:100%"/>
                                                                    </div>
                                                                    <label class="kt-avatar__upload"
                                                                           data-toggle="kt-tooltip" title=""
                                                                           data-original-title="Change avatar">
                                                                        <i class="fa fa-pen"></i>
                                                                        <input type="file" name="avatar"
                                                                               accept="image/*"
                                                                               onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                                                    </label>
                                                                    <span class="kt-avatar__cancel"
                                                                          data-toggle="kt-tooltip" title=""
                                                                          data-original-title="Cancel avatar">
                                                    <i class="fa fa-times"></i>
                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                Nom de la société</label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <input class="form-control" name="nom_societe"
                                                                       value="{{$professionnel->nom_societe}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                Name</label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <input class="form-control" name="nom"
                                                                       value="{{$professionnel->nom}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                Description</label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <textarea class="form-control" name="description"
                                                                          rows="5">{{$professionnel->description}}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                N° Siret</label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <input class="form-control" name="siret"
                                                                       value="{{$professionnel->siret}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                N° TVA</label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <input class="form-control" name="tva"
                                                                       value="{{$professionnel->tva}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Contact
                                                                Phone</label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"><span
                                                                                class="input-group-text"><i
                                                                                    class="la la-phone"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="phone"
                                                                           value="{{$professionnel->telephone}}"
                                                                           placeholder="Phone"
                                                                           aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Contact
                                                                Mobile</label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"><span
                                                                                class="input-group-text"><i
                                                                                    class="la la-phone"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="phone"
                                                                           value="{{$professionnel->mobile}}"
                                                                           placeholder="Phone"
                                                                           aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Email
                                                                Address</label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"><span
                                                                                class="input-group-text"><i
                                                                                    class="la la-at"></i></span></div>
                                                                    <input type="text" class="form-control" name="email"
                                                                           value="{{$professionnel->user->email}}"
                                                                           placeholder="Email"
                                                                           aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-group-last row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Company
                                                                Site</label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control"
                                                                           name="site"
                                                                           value="{{$professionnel->site}}">
                                                                    <div class="input-group-append"><span
                                                                                class="input-group-text">.com</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img id="output"/>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="kt_apps_user_edit_tab_2" role="tabpane1">
                                        <div class="kt-form kt-form--label-right">
                                            <div class="kt-form__body">
                                                <div class="kt-section kt-section--first">
                                                    <div class="kt-section__body">
                                                        {{-- <div class="row">
                                                            <label class="col-xl-3"></label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <h3 class="kt-section__title kt-section__title-sm">
                                                                    Adresse Info:</h3>
                                                            </div>
                                                        </div> --}}

                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                Adresse</label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <input class="form-control" type="text" name="adresse"
                                                                       value="{{$professionnel->adresse}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                Code Postale</label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <input class="form-control" type="text" name="cp"
                                                                       value="{{$professionnel->cp}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Ville</label>
                                                            <div class=" col-lg-4 col-md-9 col-sm-12">
                                                                <select class="form-control" id="js-data-example-ajax"
                                                                        name="ville_id" style="width: 300px">
                                                                    <option value="{{$professionnel->ville->id}}">{{$professionnel->ville->name}}</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Zone de
                                                                travail</label>
                                                            <div class="col-lg-4 col-md-9 col-sm-12">
                                                                <div class="dropdown bootstrap-select show-tick form-control kt-">
                                                                    <select id="js-data-example-ajax_multiple"
                                                                            class="form-control kt-selectpicker"
                                                                            multiple=""
                                                                            data-max-options="2"
                                                                            name="zone_de_travail[]"
                                                                            tabindex="-98" style="width: 300px">
                                                                        @foreach($professionnel->zoneDeTravailles as $pro)
                                                                            <option value="{{$pro->id}}"
                                                                                    selected>{{$pro->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Activité</label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <select class="form-control" name="category">
                                                                    @foreach($categories as $category)
                                                                        @foreach($category->childrens as $child)
                                                                            <option value="{{$child->id}}">{{$child->label}}</option>
                                                                        @endforeach
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                Nom de l'assurance</label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <input class="form-control" type="text" name="nom_assurance"
                                                                       value="{{$professionnel->nom_assurance}}">
                                                                @if ($errors->has('nom_assurance'))
                                                                    <span class="" role="alert">
                                        <strong style="color: red;">{{ $errors->first('nom_assurance') }}</strong>
                                           </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                Description des garanties</label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <input class="form-control" type="text" name="description_garantie"
                                                                       value="{{$professionnel->description_garantie}}">
                                                                @if ($errors->has('description_garantie'))
                                                                    <span class="" role="alert">
                                        <strong style="color: red;">{{ $errors->first('description_garantie') }}</strong>
                                           </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="kt_apps_user_edit_tab_3" role="tabpanel">
                                        <div class="kt-form kt-form--label-right">

                                            <div class="kt-form__body">
                                                <div class="kt-section kt-section--first">
                                                    <div class="kt-section__body">
                                                        <div class="alert alert-solid-danger alert-bold fade show kt-margin-t-20 kt-margin-b-40"
                                                             role="alert">
                                                            <div class="alert-icon"><i
                                                                        class="fa fa-exclamation-triangle"></i></div>
                                                            <div class="alert-text">Upload ou mis a jour kbis /
                                                                Assurence is MISSING. <br>
                                                                Entant que professionnel ou artisan vous devez faire le
                                                                upload de votre kbis & assurence inadvertently get
                                                                locked out of the system!
                                                            </div>
                                                            <div class="alert-close">
                                                                <button type="button" class="close" data-dismiss="alert"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-9 col-xl-6">
                                                                <div class="kt-widget4">
                                                                    @foreach($professionnel->kbis as $file)
                                                                        <div class="kt-widget4__item">
                                                                            @if($file->type == App\KbisFile::KBIS)
                                                                                <div class="kt-widget4__pic kt-widget4__pic--icon">
                                                                                    <img src="./assets/media/files/doc.svg"
                                                                                         alt="">
                                                                                </div>
                                                                                <a href="{{asset('assets/'.$file->url)}}"
                                                                                   class="kt-widget4__title" download>
                                                                                    Kbis
                                                                                </a>
                                                                            @else
                                                                                <div class="kt-widget4__pic kt-widget4__pic--icon">
                                                                                    <img src="./assets/media/files/pdf.svg"
                                                                                         alt="">
                                                                                </div>
                                                                                <a href="{{asset('storage/'.$file->url)}}"
                                                                                   class="kt-widget4__title">
                                                                                    Assurence
                                                                                </a>
                                                                            @endif
                                                                            <div class="kt-widget4__tools">
                                                                                <a href="#"
                                                                                   class="btn btn-clean btn-icon btn-sm">
                                                                                    <i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <label class="col-xl-3"></label>
                                                            <div class="col-lg-9 col-xl-6 text-center">
                                                                <h3 class="kt-section__title kt-section__title-sm">
                                                                    Change Or Update Your Kbis / Assurance:</h3>

                                                                <a href="{{route('pro.mes_kbis_create')}}">
                                                                    <button type="button"
                                                                            class="btn btn-brand btn-elevate btn-pill">
                                                                            Télécharger
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="tab-pane" id="kt_apps_user_edit_tab_4" role="tabpanel">
                                        <div class="kt-form kt-form--label-right">

                                            <div class="kt-form__body">
                                                <div class="kt-section kt-section--first">
                                                    <div class="kt-section__body">
                                                        <div class="alert alert-solid-danger alert-bold fade show kt-margin-t-20 kt-margin-b-40"
                                                             role="alert">
                                                            <div class="alert-icon"><i
                                                                        class="fa fa-exclamation-triangle"></i></div>
                                                            <div class="alert-text">Configure user passwords to expire
                                                                periodically. <br>Users will need warning that their
                                                                passwords are going to expire, or they might
                                                                inadvertently get locked out of the system!
                                                            </div>
                                                            <div class="alert-close">
                                                                <button type="button" class="close" data-dismiss="alert"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <label class="col-xl-3"></label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <h3 class="kt-section__title kt-section__title-sm">
                                                                    Change Or Recover Your Password:</h3>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">New
                                                                Password</label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <input type="password" class="form-control"
                                                                       name="password"
                                                                       placeholder="New password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-group-last row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Verify
                                                                Password</label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <input type="password" class="form-control"
                                                                       placeholder="Verify password" name="rpassword">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>

                                            <div class="kt-form__actions">
                                                <div class="row">
                                                    <div class="col-xl-3"></div>
                                                    <div class="col-lg-9 col-xl-6">
                                                        {{-- <button type="submit" class="btn btn-label-brand btn-bold">Save
                                                            changes
                                                        </button>
                                                        <button type="reset" class="btn btn-clean btn-bold">Cancel
                                                        </button> --}}
                                                        <button type="submit" class="btn btn-label-brand btn-bold">Sauvegarder
                                                        </button>
                                                        <button type="reset" class="btn btn-clean btn-bold">Annuler
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- end:: Content -->
            </div>
        </div>
    </div>
@section('script')
    <!--begin::Page Scripts(used by this page) -->
    <script src="{{asset('/assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js')}}"
            type="text/javascript"></script>
    <!--end::Page Scripts -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="{{asset('/assets/app/custom/general/crud/forms/widgets/select2.js')}}" type="text/javascript"></script>
    <!--end::Page Scripts -->
    <script>

        function formatRepo(repo) {
            return repo.full_name || repo.text;
        }

        $("#js-data-example-ajax").select2({
            placeholder: "Sélectionner la ville",
            allowClear: true,
            ajax: {
                url: '{{route('pro.get_villes')}}',
                dataType: 'json',

                data: function (params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function (data, params) {

                    params.page = params.page || 1;

                    return {
                        results: data,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: true
            },
            escapeMarkup: function (markup) {
                return markup;
            }, // let our custom formatter work
            // minimumInputLength: 1,
            templateResult: formatRepo, // omitted for brevity, see the source of this page
            // templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });

        //
        function formatRepos(repo) {
            return repo.full_name || repo.text;
        }

        $("#js-data-example-ajax_multiple").select2({
            placeholder: "Sélectionner les zones de travail",
            allowClear: true,
            maximumSelectionLength: 2,
            ajax: {
                url: '{{route('pro.get_villes')}}',
                dataType: 'json',

                data: function (params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function (data, params) {

                    params.page = params.page || 1;

                    return {
                        results: data,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: true
            },
            escapeMarkup: function (markup) {
                return markup;
            }, // let our custom formatter work
            // minimumInputLength: 1,
            templateResult: formatRepos, // omitted for brevity, see the source of this page
            // templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });

        var KTBootstrapSelect = function () {

            // Private functions
            var demos = function () {
                // minimum setup
                $('.kt-selectpicker').selectpicker();
            }

            return {
                // public functions
                init: function () {
                    demos();
                }
            };
        }();

        jQuery(document).ready(function () {
            KTBootstrapSelect.init();
        });
    </script>
    <script>
        // Class definition
        var KTSelect2 = function () {
            // Private functions
            var demos = function () {
                // basic
                $('#kt_select2_1, #kt_select2_1_validate').select2({
                    placeholder: "Select a state"
                });

                // nested
                $('#kt_select2_2, #kt_select2_2_validate').select2({
                    placeholder: "Select a state"
                });

                // multi select
                $('#kt_select2_3, #kt_select2_3_validate').select2({
                    placeholder: "Select a state",
                });

                // basic
                $('#kt_select2_4').select2({
                    placeholder: "Select a state",
                    allowClear: true
                });

                // loading data from array
                var data = [{
                    id: 0,
                    text: 'Enhancement'
                }, {
                    id: 1,
                    text: 'Bug'
                }, {
                    id: 2,
                    text: 'Duplicate'
                }, {
                    id: 3,
                    text: 'Invalid'
                }, {
                    id: 4,
                    text: 'Wontfix'
                }];

                $('#kt_select2_5').select2({
                    placeholder: "Select a value",
                    data: data
                });

                // loading remote data

                function formatRepo(repo) {
                    if (repo.loading) return repo.text;
                    var markup = "<div class='select2-result-repository clearfix'>" +
                        "<div class='select2-result-repository__meta'>" +
                        "<div class='select2-result-repository__title'>" + repo.full_name + "</div>";
                    if (repo.description) {
                        markup += "<div class='select2-result-repository__description'>" + repo.description + "</div>";
                    }
                    markup += "<div class='select2-result-repository__statistics'>" +
                        "<div class='select2-result-repository__forks'><i class='fa fa-flash'></i> " + repo.forks_count + " Forks</div>" +
                        "<div class='select2-result-repository__stargazers'><i class='fa fa-star'></i> " + repo.stargazers_count + " Stars</div>" +
                        "<div class='select2-result-repository__watchers'><i class='fa fa-eye'></i> " + repo.watchers_count + " Watchers</div>" +
                        "</div>" +
                        "</div></div>";
                    return markup;
                }

                function formatRepoSelection(repo) {
                    return repo.full_name || repo.text;
                }

                $("#kt_select2_6").select2({
                    placeholder: "Search for git repositories",
                    allowClear: true,
                    ajax: {
                        url: "https://api.github.com/search/repositories",
                        dataType: 'json',
                        delay: 250,
                        data: function (params) {
                            return {
                                q: params.term, // search term
                                page: params.page
                            };
                        },
                        processResults: function (data, params) {
                            // parse the results into the format expected by Select2
                            // since we are using custom formatting functions we do not need to
                            // alter the remote JSON data, except to indicate that infinite
                            // scrolling can be used
                            params.page = params.page || 1;

                            return {
                                results: data.items,
                                pagination: {
                                    more: (params.page * 30) < data.total_count
                                }
                            };
                        },
                        cache: true
                    },
                    escapeMarkup: function (markup) {
                        return markup;
                    }, // let our custom formatter work
                    minimumInputLength: 1,
                    templateResult: formatRepo, // omitted for brevity, see the source of this page
                    templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
                });

                // custom styles

                // tagging support
                $('#kt_select2_12_1, #kt_select2_12_2, #kt_select2_12_3, #kt_select2_12_4').select2({
                    placeholder: "Select an option",
                });

                // disabled mode
                $('#kt_select2_7').select2({
                    placeholder: "Select an option"
                });

                // disabled results
                $('#kt_select2_8').select2({
                    placeholder: "Select an option"
                });

                // limiting the number of selections
                $('#kt_select2_9').select2({
                    placeholder: "Select an option",
                    maximumSelectionLength: 2
                });

                // hiding the search box
                $('#kt_select2_10').select2({
                    placeholder: "Select an option",
                    minimumResultsForSearch: Infinity
                });

                // tagging support
                $('#kt_select2_11').select2({
                    placeholder: "Add a tag",
                    tags: true
                });

                // disabled results
                $('.kt-select2-general').select2({
                    placeholder: "Select an option"
                });
            }

            var modalDemos = function () {
                $('#kt_select2_modal').on('shown.bs.modal', function () {
                    // basic
                    $('#kt_select2_1_modal').select2({
                        placeholder: "Select a state"
                    });

                    // nested
                    $('#kt_select2_2_modal').select2({
                        placeholder: "Select a state"
                    });

                    // multi select
                    $('#kt_select2_3_modal').select2({
                        placeholder: "Select a state",
                    });

                    // basic
                    $('#kt_select2_4_modal').select2({
                        placeholder: "Select a state",
                        allowClear: true
                    });
                });
            }

            // Public functions
            return {
                init: function () {
                    demos();
                    modalDemos();
                }
            };
        }();

        // Initialization
        jQuery(document).ready(function () {
            KTSelect2.init();
        });
    </script>
@endsection
@endsection