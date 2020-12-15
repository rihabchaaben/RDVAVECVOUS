<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 7
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>Se connecter| RDVAvecVOUS</title>
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

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="../../assets/demo/default/skins/header/base/light.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/demo/default/skins/header/menu/light.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/demo/default/skins/brand/dark.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/demo/default/skins/aside/dark.css" rel="stylesheet" type="text/css"/>

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="../../assets/media/logos/favicon.ico"/>
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
                                    <img src="{{asset('images/logo.jpg')}}">
                                </a>
                            </div>
                            <div class="kt-login__signup" style="display:block">
                                <div class="kt-login__head">
                                    <h3 class="kt-login__title">CREER UN COMPTE MEMBRE VIP</h3>
                                    {{--<div class="kt-login__desc">Enter your details to create your account:</div>--}}
                                </div>
                                <div class="kt-login__form">
                                    <form method="post" action="{{ route('register') }}" class="kt-form"
                                          id="kt_form">
                                        @csrf
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="IDENTIFIANT"
                                                   name="name">
                                        </div>
                                        @if ($errors->has('name'))
                                            <span class="" role="alert">
                                        <strong style="color: red;">{{ $errors->first('name') }}</strong>
                                           </span>
                                        @endif
                                        <input type="hidden" value="{{request()->ref}}" name="ref">
                                        <div class="input-group">
                                            <input class="form-control" type="text" value="{{request()->email}}"
                                                   name="email"
                                                   autocomplete="off">
                                        </div>
                                        @if ($errors->has('email'))
                                            <span class="" role="alert">
                                        <strong style="color: red;">{{ $errors->first('email') }}</strong>
                                           </span>
                                        @endif
                                        <div class="input-group">
                                            <input class="form-control" type="password" placeholder="MOT DE PASSE"
                                                   name="password">
                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="" role="alert">
                                        <strong style="color: red;">{{ $errors->first('password') }}</strong>
                                           </span>
                                        @endif
                                        <div class="input-group">
                                            <input class="form-control" type="password"
                                                   placeholder="CONFIRMER LE MOT DE PASSE"
                                                   name="password_confirmation">
                                        </div>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="" role="alert">
                                        <strong style="color: red;">{{ $errors->first('password_confirmation') }}</strong>
                                           </span>
                                        @endif
                                        <div class="form-group row">

                                            <div class="col-9">
                                                <div class="kt-radio-inline">
                                                    <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                        <input type="radio" name="role" value="2" checked>
                                                        Professionelle
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                        <input type="radio" name="role" value="3" disabled>
                                                        Demandeur
                                                        <span></span>
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                        <strong style="color: red;">{{ $errors->first('role') }}</strong>

                                        {!! Recaptcha::render() !!}

                                        <strong style="color: red;">{{ $errors->first('g-recaptcha-response') }}</strong>

                                        <div class="row kt-login__extra">
                                            <div class="col kt-align-left">
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="agree">J'ai lu est accepté <a href="#"
                                                                                                               class="kt-link kt-login__link kt-font-bold">les
                                                        conditions générales d'utilisation
                                                    </a>.
                                                    <span></span>
                                                </label>
                                                <span class="form-text text-muted"></span>
                                            </div>

                                        </div>
                                        <strong style="color: red;">{{ $errors->first('agree') }}</strong>

                                        <div class="kt-login__actions">
                                            <button id="inscrire" type="submit" data-ktwizard-type="action-submit"
                                                    class="btn btn-brand btn-pill kt-login__btn-primary">S'INSCRIRE
                                            </button>&nbsp;&nbsp;
                                            <button type="reset"
                                                    class="btn btn-secondary btn-pill kt-login__btn-secondary">ANNULER
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="kt-login__forgot">
                                <div class="kt-login__head">
                                    {{-- <h3 class="kt-login__title">Forgotten Password ?</h3>
                                    <div class="kt-login__desc">Enter your email to reset your password:</div> --}}

                                    <h3 class="kt-login__title">Mot de passe oublié? ?</h3>
                                    <div class="kt-login__desc">Entrer votre email pour réinitialiser votre mot de passe:</div>
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
                                                {{-- Cancel --}}
                                                Annuler
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content"
                 style="background-image: url(../../images/login_back.png);">

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
{{--<!DOCTYPE html>--}}

{{--<!----}}
{{--Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 7--}}
{{--Author: KeenThemes--}}
{{--Website: http://www.keenthemes.com/--}}
{{--Contact: support@keenthemes.com--}}
{{--Follow: www.twitter.com/keenthemes--}}
{{--Dribbble: www.dribbble.com/keenthemes--}}
{{--Like: www.facebook.com/keenthemes--}}
{{--Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes--}}
{{--Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes--}}
{{--License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.--}}
{{---->--}}
{{--<html lang="en">--}}

{{--<!-- begin::Head -->--}}
{{--<head>--}}
{{--<meta charset="utf-8"/>--}}
{{--<title>Metronic | Login Page v4</title>--}}
{{--<meta name="description" content="Login page example">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}

{{--<!--begin::Fonts -->--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfon.js')}}"></script>--}}
{{--<script>--}}
{{--WebFont.load({--}}
{{--google: {--}}
{{--"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]--}}
{{--},--}}
{{--active: function () {--}}
{{--sessionStorage.fonts = true;--}}
{{--}--}}
{{--});--}}
{{--</script>--}}

{{--<!--end::Fonts -->--}}

{{--<!--begin::Page Custom Styles(used by this page) -->--}}
{{--<link href="{{asset('assets/app/custom/login/login-v4.default.css')}}" rel="stylesheet" type="text/css"/>--}}

{{--<!--end::Page Custom Styles -->--}}

{{--<!--begin:: Global Mandatory Vendors -->--}}
{{--<link href="{{asset('assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet"--}}
{{--type="text/css"/>--}}

{{--<!--end:: Global Mandatory Vendors -->--}}

{{--<!--begin:: Global Optional Vendors -->--}}
{{--<link href="{{asset('assets/vendors/general/tether/dist/css/tether.css')}}" rel="stylesheet" type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css')}}"--}}
{{--rel="stylesheet"--}}
{{--type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css')}}"--}}
{{--rel="stylesheet"--}}
{{--type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css')}}" rel="stylesheet"--}}
{{--type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet"--}}
{{--type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css')}}"--}}
{{--rel="stylesheet"--}}
{{--type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css')}}" rel="stylesheet"--}}
{{--type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css')}}"--}}
{{--rel="stylesheet"--}}
{{--type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/general/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet"--}}
{{--type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/general/nouislider/distribute/nouislider.css')}}" rel="stylesheet"--}}
{{--type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css')}}" rel="stylesheet"--}}
{{--type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css')}}" rel="stylesheet"--}}
{{--type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/general/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/general/summernote/dist/summernote.css')}}" rel="stylesheet" type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" rel="stylesheet"--}}
{{--type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/general/animate.css/animate.css')}}" rel="stylesheet" type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/general/toastr/build/toastr.css')}}" rel="stylesheet" type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/general/morris.css')}}')}}" rel="stylesheet" type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/general/sweetalert2/dist/sweetalert2.css')}}" rel="stylesheet" type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/general/socicon/css/socicon.css')}}" rel="stylesheet" type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/custom/vendors/line-awesome/css/line-awesome.css')}}" rel="stylesheet"--}}
{{--type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/custom/vendors/flaticon/flaticon.css')}}" rel="stylesheet" type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/custom/vendors/flaticon2/flaticon.css')}}" rel="stylesheet" type="text/css"/>--}}
{{--<link href="{{asset('assets/vendors/custom/vendors/fontawesome5/css/all.min.css')}}" rel="stylesheet"--}}
{{--type="text/css"/>--}}

{{--<!--end:: Global Optional Vendors -->--}}

{{--<!--begin::Global Theme Styles(used by all pages) -->--}}
{{--<link href="{{asset('assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css"/>--}}

{{--<!--end::Global Theme Styles -->--}}

{{--<!--begin::Layout Skins(used by all pages) -->--}}
{{--<link href="{{asset('assets/demo/default/skins/header/base/light.css')}}" rel="stylesheet" type="text/css"/>--}}
{{--<link href="{{asset('assets/demo/default/skins/header/menu/light.css')}}" rel="stylesheet" type="text/css"/>--}}
{{--<link href="{{asset('assets/demo/default/skins/brand/dark.css')}}" rel="stylesheet" type="text/css"/>--}}
{{--<link href="{{asset('assets/demo/default/skins/aside/dark.css')}}" rel="stylesheet" type="text/css"/>--}}

{{--<!--end::Layout Skins -->--}}
{{--<link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}"/>--}}
{{--</head>--}}

{{--<!-- end::Head -->--}}

{{--<!-- begin::Body -->--}}
{{--<body class="kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">--}}

{{--<!-- begin:: Page -->--}}
{{--<div class="kt-grid kt-grid--ver kt-grid--root">--}}
{{--<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">--}}
{{--<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor"--}}
{{--style="background-image: url('../../../assets/media/bg/bg-2.jpg')">--}}
{{--<div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">--}}
{{--<div class="kt-login__container">--}}
{{--<div class="kt-login__logo">--}}
{{--<a href="#">--}}
{{--<img src="{{asset('assets/media/logos/logo-5.png')}}">--}}
{{--</a>--}}
{{--</div>--}}

{{--<div class="kt-login__signup" style="display:block">--}}
{{--<div class="kt-login__head">--}}
{{--<h3 class="kt-login__title">Sign Up</h3>--}}
{{--<div class="kt-login__desc">Enter your details to create your account:</div>--}}
{{--</div>--}}
{{--<form method="post" action="{{ route('demandeur.mes_invitation_store') }}" class="kt-form">--}}
{{--@csrf--}}
{{--<input type="hidden" value="{{$ref}}" name="ref">--}}
{{--<div class="input-group">--}}
{{--<input class="form-control" type="text" placeholder="Fullname" name="name">--}}
{{--</div>--}}
{{--<div class="input-group">--}}
{{--<input class="form-control" type="text" placeholder="Email" name="email"--}}
{{--autocomplete="off">--}}
{{--</div>--}}
{{--<div class="input-group">--}}
{{--<input class="form-control" type="password" placeholder="Password" name="password">--}}
{{--</div>--}}
{{--<div class="input-group">--}}
{{--<input class="form-control" type="password" placeholder="Confirm Password"--}}
{{--name="rpassword">--}}
{{--</div>--}}

{{--<div class="row kt-login__extra">--}}
{{--<div class="col kt-align-left">--}}
{{--<label class="kt-checkbox">--}}
{{--<input type="checkbox" name="agree">I Agree the <a href="#"--}}
{{--class="kt-link kt-login__link kt-font-bold">terms--}}
{{--and conditions</a>.--}}
{{--<span></span>--}}
{{--</label>--}}
{{--<span class="form-text text-muted"></span>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="kt-login__actions">--}}
{{--<button id="" type="submit"--}}
{{--class="btn btn-brand btn-pill kt-login__btn-primary">Sign Up--}}
{{--</button>&nbsp;&nbsp;--}}
{{--<button id="" type="reset"--}}
{{--class="btn btn-secondary btn-pill kt-login__btn-secondary">Cancel--}}
{{--</button>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}

{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<!-- end:: Page -->--}}

{{--<!-- begin::Global Config(global config for global JS sciprts) -->--}}
{{--<script>--}}
{{--var KTAppOptions = {--}}
{{--"colors": {--}}
{{--"state": {--}}
{{--"brand": "#5d78ff",--}}
{{--"dark": "#282a3c",--}}
{{--"light": "#ffffff",--}}
{{--"primary": "#5867dd",--}}
{{--"success": "#34bfa3",--}}
{{--"info": "#36a3f7",--}}
{{--"warning": "#ffb822",--}}
{{--"danger": "#fd3995"--}}
{{--},--}}
{{--"base": {--}}
{{--"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],--}}
{{--"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]--}}
{{--}--}}
{{--}--}}
{{--};--}}
{{--</script>--}}

{{--<!-- end::Global Config -->--}}

{{--<!--begin:: Global Mandatory Vendors -->--}}
{{--<script src="{{asset('assets/vendors/general/jquery/dist/jquer.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/poppe.js')}}/dist/umd/poppe.js')}}'" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/bootstrap/dist/js/bootstrap.mi.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/js-cookie/src/js.cooki.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/moment/min/moment.mi.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/toolti.js')}}/dist/umd/tooltip.mi.js')}}'" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/perfect-scrollbar/dist/perfect-scrollba.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/sticky-js/dist/sticky.mi.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/wnumb/wNum.js')}}" type="text/javascript"></script>--}}

{{--<!--end:: Global Mandatory Vendors -->--}}

{{--<!--begin:: Global Optional Vendors -->--}}
{{--<script src="{{asset('assets/vendors/general/jquery-form/dist/jquery.form.mi.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/block-ui/jquery.blockU.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.mi.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/custom/components/vendors/bootstrap-datepicker/ini.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.mi.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.mi.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/custom/components/vendors/bootstrap-timepicker/ini.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/bootstrap-daterangepicker/daterangepicke.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspi.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlengt.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.mi.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/bootstrap-select/dist/js/bootstrap-selec.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switc.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/custom/components/vendors/bootstrap-switch/ini.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/select2/dist/js/select2.ful.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/ion-rangeslider/js/ion.rangeSlide.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/typeahea.js')}}/dist/typeahead.bundl.js')}}'"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/handlebars/dist/handlebar.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/inputmask/dist/jquery.inputmask.bundl.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extension.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extension.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/nouislider/distribute/nouislide.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/owl.carousel/dist/owl.carouse.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/autosize/dist/autosiz.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/clipboard/dist/clipboard.mi.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/dropzone/dist/dropzon.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/summernote/dist/summernot.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/markdown/lib/markdow.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/bootstrap-markdown/js/bootstrap-markdow.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/custom/components/vendors/bootstrap-markdown/ini.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/bootstrap-notify/bootstrap-notify.mi.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/custom/components/vendors/bootstrap-notify/ini.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/jquery-validation/dist/jquery.validat.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/jquery-validation/dist/additional-method.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/custom/components/vendors/jquery-validation/ini.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/toastr/build/toastr.mi.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/raphael/raphae.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/morri.js/morri.js')}}')}}'" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/char.js/dist/Chart.bundl.js')}}')}}'" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.mi.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/custom/vendors/jquery-idletimer/idle-timer.mi.js')}}"--}}
{{--type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/waypoints/lib/jquery.waypoint.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/counterup/jquery.counteru.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/es6-promise-polyfill/promise.mi.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/sweetalert2/dist/sweetalert2.mi.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/custom/components/vendors/sweetalert2/ini.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/jquery.repeater/src/li.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/jquery.repeater/src/jquery.inpu.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/jquery.repeater/src/repeate.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('assets/vendors/general/dompurify/dist/purif.js')}}" type="text/javascript"></script>--}}

{{--<!--end:: Global Optional Vendors -->--}}

{{--<!--begin::Global Theme Bundle(used by all pages) -->--}}
{{--<script src="{{asset('assets/demo/default/base/scripts.bundl.js')}}" type="text/javascript"></script>--}}

{{--<!--end::Global Theme Bundle -->--}}

{{--<!--begin::Page Scripts(used by this page) -->--}}
{{--<script src="{{asset('assets/app/custom/login/login-genera.js')}}" type="text/javascript"></script>--}}

{{--<!--end::Page Scripts -->--}}

{{--<!--begin::Global App Bundle(used by all pages) -->--}}
{{--<script src="{{asset('assets/app/bundle/app.bundl.js')}}" type="text/javascript"></script>--}}

{{--<!--end::Global App Bundle -->--}}
{{--</body>--}}

{{--<!-- end::Body -->--}}
{{--</html>--}}