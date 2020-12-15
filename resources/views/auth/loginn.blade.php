@extends('layouts.app')
<!-- begin:: Page -->
<div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v6 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
            <div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
                <div class="kt-login__wrapper">
                    <div class="kt-login__container">
                        <div class="kt-login__body">
                            <div class="kt-login__logo">
                                <a href="#">
                                    <img src="{{asset('images/logo.jpg')}}">
                                </a>
                            </div>
                            <div class="kt-login__signin">
                                <div class="kt-login__head">
                                    <h3 class="kt-login__title">Sign In To Admin</h3>
                                </div>
                                <div class="kt-login__form">
                                    <form method="post" action="{{ route('login') }}" class="kt-form">
                                        @csrf
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Email" name="email"
                                                   autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control form-control-last" type="password"
                                                   placeholder="Password" name="password">
                                        </div>
                                        <div class="kt-login__extra">
                                            <label class="kt-checkbox">
                                                <input type="checkbox" name="remember"> Remember me
                                                <span></span>
                                            </label>
                                            <a href="javascript:;" id="kt_login_forgot">Forget Password ?</a>
                                        </div>
                                        <div class="kt-login__actions">
                                            <button id="kt_login_signin_submit"
                                                    class="btn btn-brand btn-pill btn-elevate">Sign In
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="kt-login__signup">
                                <div class="kt-login__head">
                                    <h3 class="kt-login__title">Sign Up</h3>
                                    <div class="kt-login__desc">Enter your details to create your account:</div>
                                </div>
                                <div class="kt-login__form">
                                    <form class="kt-form" action="">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Fullname"
                                                   name="fullname">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Email" name="email"
                                                   autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="password" placeholder="Password"
                                                   name="password">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control form-control-last" type="password"
                                                   placeholder="Confirm Password" name="rpassword">
                                        </div>
                                        <div class="form-group row">

                                            <div class="col-9">
                                                <div class="kt-radio-inline">
                                                    <label class="kt-radio">
                                                        <input type="radio" name="radio4"> Professionelle
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio">
                                                        <input type="radio" checked="checked" name="radio4"> Demandeur
                                                        <span></span>
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-login__extra">
                                            <label class="kt-checkbox">
                                                <input type="checkbox" name="agree"> I Agree the <a
                                                        href="{{url('https://rdvavecvous.com/conditions-generales-d-utilisation')}}"
                                                        target="_blank">terms and
                                                    conditions</a>.
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="kt-login__actions">
                                            <button id="kt_login_signup_submit"
                                                    class="btn btn-brand btn-pill btn-elevate">Sign Up
                                            </button>
                                            <button id="kt_login_signup_cancel" class="btn btn-outline-brand btn-pill">
                                                Cancel
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <!--begin::Divider-->
                                <div class="kt-login__divider">
                                    <div class="kt-divider">
                                        <span></span>
                                        <span>OR</span>
                                        <span></span>
                                    </div>
                                </div>

                                <!--end::Divider-->

                                <!--begin::Options--><br>
                                <center>
                                    <div class="kt-login__options">
                                        <a href="#" class="btn btn-primary kt-btn">
                                            <i class="fab fa-facebook-f"></i>
                                            Facebook
                                        </a>

                                        <a href="#" class="btn btn-danger kt-btn">
                                            <i class="fab fa-google"></i>
                                            Google
                                        </a>
                                    </div>
                                </center>
                                <!--end::Options-->
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
								<span class="kt-login__account-msg" style="font-size:  1.2rem;">
									Don't have an account yet ?
								</span>&nbsp;&nbsp;
                        <a href="javascript:;" id="kt_login_signup" class="kt-login__account-link"
                           style="font-size:  1.4rem;">Sign Up!</a>
                    </div>
                </div>
            </div>
            <div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content"
                 style="background-image: url(../images/test.jpg);">

                <div class="kt-login__section">
                    <div class="kt-login__block">
                        <center><img src="{{asset('images/logo_login_background.png')}}" class="justify-content-center"
                                     style="margin-bottom: 50px"></center>
                        <h3 class="kt-login__title" style="color: black">Join Our Community</h3>
                        <div class="kt-login__desc" style="color: black">
                            Lorem ipsum dolor sit amet, coectetuer adipiscing
                            <br>elit sed diam nonummy et nibh euismod
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end:: Page -->
