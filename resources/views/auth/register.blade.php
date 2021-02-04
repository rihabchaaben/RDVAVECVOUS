<!DOCTYPE html>


<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>RDVavecVous | Inscription</title>
    <meta name="description" content="Login page example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Fonts -->

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="../../assets/app/custom/login/login-v6.default.css" rel="stylesheet" type="text/css"/>

    <!--end::Page Custom Styles -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="../../assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet"
          type="text/css"/>

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="../../assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet"
          type="text/css"/>
    <link href="../../assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css"
          rel="stylesheet"
          type="text/css"/>
    <link href="../../assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet"
          type="text/css"/>
    <link href="../../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"
          type="text/css"/>
    <link href="../../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet"
          type="text/css"/>
    <link href="../../assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet"
          type="text/css"/>
    <link href="../../assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet"
          type="text/css"/>
    <link href="../../assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet"
          type="text/css"/>
    <link href="../../assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet"
          type="text/css"/>
    <link href="../../assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="../../assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet"
          type="text/css"/>
    <link href="../../assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/vendors/custom/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css"/>

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="../../assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css"/>

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="../../assets/demo/default/skins/header/base/light.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/demo/default/skins/header/menu/light.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/demo/default/skins/brand/dark.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/demo/default/skins/aside/dark.css" rel="stylesheet" type="text/css"/>

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="../../assets/media/logos/favicon.ico"/>
 {{-- <script src='https://www.google.com/recaptcha/api.js'></script> --}}
<style>

        /* radio btn style    */
        label > input[type="radio"] {
            display: none;
            }
            label > input[type="radio"] + *::before {
            content: "";
            display: inline-block;
            vertical-align: bottom;
            width: 1.3rem;
            height: 1.3rem;
            margin-right: 0.3rem;
            border-radius: 50%;
            border-style: solid;
            border-width: 0.1rem;
            border-color: gray;
            }
            label > input[type="radio"]:checked + * {
            color: ;
            }
            label > input[type="radio"]:checked + *::before {
            background: radial-gradient(#2c77f4 0%, #2c77f4 90%, transparent 50%, transparent);
            
            border-color: #2c77f4;
            }

            /* basic layout */
            fieldset {
            margin: 20px;
            max-width: 400px;
            }
            label > input[type="radio"] + * {
            display: inline-block;
            padding: 0.5rem 1rem;
            } 
</style>
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

<!-- begin:: Page -->
<div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v6 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
            <div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
                <div class="kt-login__wrapper">
                    <div class="kt-login__container">
                        <div class="kt-login__body">
                            <div class="kt-login__logo">
                                <a href="{{route('login')}}">
                                    {{-- <img src="{{asset('images/logo_typo.png')}}"> --}}
                                    <img src="{{asset('images/logo_login_background.png')}}">
                                </a>
                            </div>
                            <div class="kt-login__signup" style="display:block">
                                <div class="kt-login__head">
                                    {{-- <h3 class="kt-login__title">CREER UN COMPTE</h3> --}}
                                    {{-- <h3 class="kt-login__title" style="font-size: 28px">CREER UN COMPTE</h3> --}}
                                    {{--<div class="kt-login__desc">Enter your details to create your account:</div>--}}
                                </div>
                                <div class="kt-login__form">
                                    <form method="post" action="{{ route('register') }}" class="kt-form"
                                          id="kt_form">
                                        @csrf
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="IDENTIFIANT"
                                            {{-- name="name" value="{{old('name')}}"> --}}
                                            name="name" value="{{old('name')}}" style="font-size: 18px">
                                        </div>
                                        @if ($errors->has('name'))
                                            <span class="" role="alert">
                                        <strong style="color: red;">{{ $errors->first('name') }}</strong>
                                           </span>
                                        @endif
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="EMAIL" name="email"
                                            {{-- autocomplete="off" value="{{old('email')}}"> --}}
                                            autocomplete="off" value="{{old('email')}}" style="font-size: 18px">
                                        </div>
                                        @if ($errors->has('email'))
                                            <span class="" role="alert">
                                        <strong style="color: red;">{{ $errors->first('email') }}</strong>
                                           </span>
                                        @endif
                                        <div class="input-group">
                                            <input class="form-control" type="password" placeholder="MOT DE PASSE"
                                            {{-- name="password"> --}}
                                            name="password" style="font-size: 18px">
                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="" role="alert">
                                        <strong style="color: red;">{{ $errors->first('password') }}</strong>
                                           </span>
                                        @endif
                                        <div class="input-group">
                                            <input class="form-control" type="password"
                                                   placeholder="CONFIRMER LE MOT DE PASSE"
                                                   {{-- name="password_confirmation"> --}}
                                                   name="password_confirmation" style="font-size: 18px">
                                        </div>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="" role="alert">
                                        <strong style="color: red;">{{ $errors->first('password_confirmation') }}</strong>
                                           </span>
                                        @endif
                                        <br>
                                        <div class="form-group row">

                                            <div class="col-9">
                                                <div class="kt-radio-inline">
                                                    <label >
                                                        <input type="radio" name="role" value="2">
                                                        <span> Professionelle</span>
                                                    </label>
                                                    <label >
                                                        <input type="radio" name="role" value="3">
                                                       
                                                        <span> Demandeur</span>
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                        <strong style="color: red;">{{ $errors->first('role') }}</strong>

                                        <div class="row kt-login__extra">
                                            <div class="col kt-align-left">
                                                <label class="kt-checkbox">
                                                    {{-- <input type="checkbox" name="agree">J'ai lu est accepté <a --}}
                                                    <input type="checkbox" name="agree" style="font-size: 16px">J'ai lu et accepté <a
                                                            href="https://rdvavecvous.com/conditions-generales-de-vente"
                                                            class="kt-link kt-login__link kt-font-bold">les
                                                        conditions générales d'utilisation
                                                    </a>.
                                                    <span></span>
                                                </label>
                                                <span class="form-text text-muted"></span>
                                            </div>

                                        </div>
                                        <strong style="color: red;">{{ $errors->first('agree') }}</strong>
                                        <br><br>
 {!! Recaptcha::render() !!}
          

                                        <strong style="color: red;">{{ $errors->first('g-recaptcha-response') }}</strong>


                                        <div class="kt-login__actions">
                                            <button id="inscrire" type="submit" data-ktwizard-type="action-submit"
                                            {{-- class="btn btn-brand btn-pill kt-login__btn-primary">S'INSCRIRE --}}
                                            class="btn btn-brand btn-pill kt-login__btn-primary" style="font-size: 18px">S'INSCRIRE
                                            </button>&nbsp;&nbsp;
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="kt-login__forgot">
                                <div class="kt-login__head">
                                    <h3 class="kt-login__title">Forgotten Password ?</h3>
                                    <div class="kt-login__desc">Enter your email to reset your password:</div>
                                </div>
                                <div class="kt-login__form">
                                    <form class="kt-form" action="">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Email" name="email"
                                                   id="kt_email" autocomplete="off">
                                        </div>
                                        <div class="kt-login__actions">
                                            <button id="kt_login_forgot_submit"
                                                    class="btn btn-brand btn-pill btn-elevate">Request
                                            </button>
                                            <button id="kt_login_forgot_cancel" class="btn btn-outline-brand btn-pill">
                                                Cancel
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="kt-login__account">
                    {{-- <span class="kt-login__account-msg"> --}}
                    <span class="kt-login__account-msg" style="font-size: 16px">
                   Vous avez un compte ?
                    </span>
                        &nbsp;&nbsp;
                        {{-- <a href="{{route('login')}}" class="kt-login__account-link"> SE CONNECTER </a> --}}
                        <a href="{{route('login')}}" class="kt-login__account-link" style="font-size: 18px; color:#3758FF"> SE CONNECTER </a>
                    </div>
                </div>
            </div>
            <div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content register"
                 style="background-image: url(images/login_back.png);">
            </div>
        </div>
    </div>
</div>

<!-- end:: Page -->

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

<!-- end::Global Config -->

<!--begin:: Global Mandatory Vendors -->
<script src="../../assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="../../assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"
        type="text/javascript"></script>
<script src="../../assets/vendors/custom/components/vendors/bootstrap-datepicker/init.js"
        type="text/javascript"></script>
<script src="../../assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js"
        type="text/javascript"></script>
<script src="../../assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js"
        type="text/javascript"></script>
<script src="../../assets/vendors/custom/components/vendors/bootstrap-timepicker/init.js"
        type="text/javascript"></script>
<script src="../../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"
        type="text/javascript"></script>
<script src="../../assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js"
        type="text/javascript"></script>
<script src="../../assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js"
        type="text/javascript"></script>
<script src="../../assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
<script src="../../assets/vendors/custom/components/vendors/bootstrap-switch/init.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js"
        type="text/javascript"></script>
<script src="../../assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js"
        type="text/javascript"></script>
<script src="../../assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="../../assets/vendors/custom/components/vendors/bootstrap-markdown/init.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
<script src="../../assets/vendors/custom/components/vendors/bootstrap-notify/init.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
<script src="../../assets/vendors/custom/components/vendors/jquery-validation/init.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
<script src="../../assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js"
        type="text/javascript"></script>
<script src="../../assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script src="../../assets/vendors/custom/components/vendors/sweetalert2/init.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
<script src="../../assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>

<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="../../assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Scripts(used by this page) -->
<script src="../../assets/app/custom/login/login-general.js" type="text/javascript"></script>

<!--end::Page Scripts -->

<!--begin::Global App Bundle(used by all pages) -->
<script src="../../assets/app/bundle/app.bundle.js" type="text/javascript"></script>
<!--end::Global App Bundle -->
{{-- reCAPTCHA script --}}
<script src='https://www.google.com/recaptcha/api.js'></script>
{{-- 20:43 - replaced recaptcha script here --}}
</body>

<!-- end::Body -->
</html>
<script>
    $("#inscrire").click(function () {
        var formEl;
        var btn = $("#kt_form").find('[data-ktwizard-type="action-submit"]');
        KTApp.progress(btn);
    });

</script>
