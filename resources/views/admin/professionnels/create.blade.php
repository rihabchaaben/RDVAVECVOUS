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
                            Ajouter un Professionnel
                        </h3>
                    </div>
                </div>
                <!--begin::Form-->
                <form action="{{route('admin.professionnel_store')}}" method="post" enctype="multipart/form-data"
                      class="kt-form kt-form--label-right">
                    @csrf
                    <div class="kt-portlet__body">
                        <div class="kt-section kt-section--first">
                            <h3 class="kt-section__title">1. Customer Info</h3>
                            <div class="kt-section__body">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Full Name:</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="nom"
                                               placeholder="Enter full name">
                                        <span class="form-text text-muted">Please enter your full name</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Societe Name:</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="societe" class="form-control"
                                               placeholder="Enter full name">
                                        <span class="form-text text-muted">Please enter your full name</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Ville:</label>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="exampleSelect1" name="ville_id">
                                            @foreach($villes as $ville)
                                                <option value="{{$ville->id}}">{{$ville->nom}}</option>
                                            @endforeach
                                        </select>
                                        <span class="form-text text-muted">Please enter your full name</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Adresse:</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="adresse" class="form-control"
                                               placeholder="Enter full name">
                                        <span class="form-text text-muted">Please enter your full name</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Code Postal:</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="cp" class="form-control" placeholder="Enter full name">
                                        <span class="form-text text-muted">Please enter your full name</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Description:</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="description" placeholder="Enter full name">
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Company
                                        Site</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group">
                                            <input type="text" name="site" class="form-control" placeholder="Username">
                                            <div class="input-group-append"><span class="input-group-text">.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Catégorie</label>
                                    <div class=" col-lg-6">
                                        <select class="form-control kt-select2 select2-hidden-accessible"
                                                id="kt_select2_3" name="category[]" multiple=""
                                                data-select2-id="kt_select2_3" tabindex="-1" aria-hidden="true">
                                            @foreach($categories as $category)

                                                <optgroup
                                                        label="{{$category->label}}">
                                                    @foreach($category->childrens as $child)
                                                        <option value="{{$child->id}}">{{$child->label}}</option>
                                                    @endforeach

                                                </optgroup>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Zone de travail</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <div class="dropdown bootstrap-select show-tick form-control kt-"><select
                                                    class="form-control kt-selectpicker" multiple=""
                                                    data-max-options="2"
                                                    name="zone_de_travail[]"
                                                    tabindex="-98">
                                                @foreach($villes as $ville)
                                                    <option value="{{$ville->id}}">{{$ville->nom}}</option>
                                                @endforeach
                                            </select>
                                        </div>
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
                                            <input type="text" class="form-control" placeholder="Phone" name="telephone"
                                                   aria-describedby="basic-addon1">
                                        </div>
                                        <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Logo du professionnel:</label>
                                    <div class="col-lg-6">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="avatar" id="customFile">
                                            <label class="custom-file-label" for="customFile"></label>
                                        </div>
                                        <span class="form-text text-muted">Please enter your full name</span>
                                    </div>
                                </div>
                            </div>

                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>

                            <h3 class="kt-section__title">2. Customer Account</h3>
                            <div class="kt-section__body">
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Email
                                        Address</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="la la-at"></i></span></div>
                                            <input type="text" class="form-control" name="email"
                                                   placeholder="Email" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Password:</label>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" name="password"
                                               placeholder="Enter email">
                                        <span class="form-text text-muted">We'll never share your email with anyone else</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Confirm Password:</label>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control" placeholder="Enter email">
                                        <span class="form-text text-muted">We'll never share your email with anyone else</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Communication:</label>
                                    <div class="col-lg-6">
                                        <div class="kt-checkbox-inline">
                                            <label class="kt-checkbox">
                                                <input type="checkbox"> Email
                                                <span></span>
                                            </label>
                                            <label class="kt-checkbox">
                                                <input type="checkbox"> SMS
                                                <span></span>
                                            </label>
                                            <label class="kt-checkbox">
                                                <input type="checkbox"> Phone
                                                <span></span>
                                            </label>
                                        </div>
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
@section('script')
    <!--begin::Page Scripts(used by this page) -->
    <script src="{{asset('/assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js')}}"
            type="text/javascript"></script>
    <!--end::Page Scripts -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="{{asset('/assets/app/custom/general/crud/forms/widgets/select2.js')}}" type="text/javascript"></script>
    <!--end::Page Scripts -->
    <script>
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

