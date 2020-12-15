@extends('layouts.front.demandeurs.master')
@section('content')


    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="{{asset('assets/app/custom/chat/chat.css')}}" rel="stylesheet"
          type="text/css"/>

    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <!--Begin::App-->
            <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
                <!--Begin:: App Aside Mobile Toggle-->
                <button class="kt-app__aside-close" id="kt_chat_aside_close">
                    <i class="la la-close"></i>
                </button>
                <!--End:: App Aside Mobile Toggle-->

                <!--Begin:: App Aside-->
                <div class="kt-grid__item kt-app__toggle kt-app__aside kt-app__aside--lg kt-app__aside--fit"
                     id="kt_chat_aside">
                    <!--begin::Portlet-->
                    <div class="kt-portlet kt-portlet--last">
                        <div class="kt-portlet__body">

                            <div class="kt-widget kt-widget--users ">
                                <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll"
                                     data-scroll="true" data-height="300" data-mobile-height="200">
                                    <div class="kt-widget__items">
                                        @foreach($userList as $user)
                                            <div class="kt-widget__item">
                                <span class="kt-media kt-media--circle">
                                     @if($user->userFrom->professionnel->avatar)
                                        <img src="{{asset('storage/'.$user->userFrom->professionnel->avatar)}}"
                                             alt="image">
                                    @else
                                        <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder">{{ucfirst($user->userFrom->professionnel->nom[0])}}</span>
                                    @endif
                                </span>
                                                <div class="kt-widget__info">
                                                    <div class="kt-widget__section">
                                                        <a href="{{route('demandeur.chat.show',[$user->proposition_id,'#last_chat'])}}"
                                                           class="kt-widget__username">{{$user->userFrom->professionnel->nom}}</a>
                                                        @if(!$user->readed_at)<span
                                                                class="kt-badge kt-badge--danger kt-font-bold"> 1 </span>@endif
                                                    </div>

                                                    <span class="kt-widget__desc">
                                        {{$user->userFrom->professionnel->categories->first()->label}}
                                    </span>
                                                </div>
                                                <div class="kt-widget__action">
                                                    <span class="kt-widget__date">{{$user->created_at->diffForHumans()}}</span>
                                                    {{--<span class="kt-badge kt-badge--success kt-font-bold">7</span>--}}
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                    </div>
                                    <div class="ps__rail-y" style="top: 0px; height: 62px; right: -2px;">
                                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Portlet-->
                </div>
                <!--End:: App Aside-->


                <!--Begin:: App Content-->
                <div class="kt-grid__item kt-grid__item--fluid kt-app__content" id="kt_chat_content">
                    <div class="kt-chat">
                        <div class="kt-portlet kt-portlet--head-lg kt-portlet--last">
                            <div class="kt-portlet__head bg-blue">
                                <div class="kt-chat__head ">
                                    <div class="kt-chat__left">
                                        <!--begin:: Aside Mobile Toggle -->
                                        <button type="button"
                                                class="btn btn-clean btn-sm btn-icon btn-icon-md kt-hidden-desktop"
                                                id="kt_chat_aside_mobile_toggle">
                                            <i class="flaticon2-open-text-book"></i>
                                        </button>
                                        <!--end:: Aside Mobile Toggle-->
                                    </div>
                                    <div class="kt-chat__center">
                                        <div class="kt-chat__label">
                                            <a href="#"
                                               class="kt-chat__title">
                                                {{$messages->first()->userFrom->name}}
                                            </a>
                                            <span class="kt-chat__status">
                                    <span class="kt-badge kt-badge--dot kt-badge--success"></span> {{$messages->first()->proposition->demande->events->first()->titre}}
                                </span>
                                        </div>
                                    </div>

                                    <div class="kt-chat__right">
                                        <div class="dropdown dropdown-inline">
                                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="flaticon2-add-1"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-md">
                                                <!--begin::Nav-->
                                                <ul class="kt-nav">
                                                    <li class="kt-nav__head">
                                                        Messaging
                                                        <i class="flaticon2-information" data-toggle="kt-tooltip"
                                                           data-placement="right" title=""
                                                           data-original-title="Click to learn more..."></i>
                                                    </li>
                                                    <li class="kt-nav__separator"></li>
                                                    <li class="kt-nav__item">
                                                        <a href="#" class="kt-nav__link">
                                                            <i class="kt-nav__link-icon flaticon2-group"></i>
                                                            <span class="kt-nav__link-text">Ma proposition ?</span>
                                                        </a>
                                                    </li>
                                                    <li class="kt-nav__separator"></li>
                                                    <li class="kt-nav__foot">
                                                        <a class="btn btn-label-brand btn-bold btn-sm"
                                                           href="#">Accepter</a>
                                                        <a class="btn btn-clean btn-bold btn-sm" href="#"
                                                           data-toggle="kt-tooltip"
                                                           data-placement="right" title=""
                                                           data-original-title="Click to learn more...">Refuser</a>
                                                    </li>
                                                </ul>
                                                <!--end::Nav-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="kt-portlet__body">
                                <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll"
                                     data-scroll="true" data-height="300" data-mobile-height="200">
                                    <div class="kt-chat__messages">
                                        @foreach($messages as $msg)
                                            @if($msg->userFrom->professionnel)
                                                <div class="kt-chat__message">
                                                    <div class="kt-chat__user">
                                    <span class="kt-media kt-media--circle kt-media--sm">
                                       @if($msg->userFrom->professionnel->avatar)
                                            <img src="{{asset('storage/'.$msg->userFrom->professionnel->avatar)}}"
                                                 alt="image">
                                        @else
                                            <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder">{{ucfirst($user->userFrom->professionnel->nom[0])}}</span>
                                        @endif
                                    </span>
                                                        <a href="#"
                                                           class="kt-chat__username">{{$msg->userFrom->professionnel->nom}}</a>
                                                        <span class="kt-chat__datetime">{{$msg->created_at->diffForHumans()}}</span>
                                                    </div>
                                                    <div class="kt-chat__text kt-bg-light-success">
                                                        {{$msg->message}}
                                                    </div>
                                                </div>
                                            @else
                                                <div class="kt-chat__message kt-chat__message--right">
                                                    <div class="kt-chat__user">
                                                        <span class="kt-chat__datetime">{{$msg->created_at->diffForHumans()}}</span>
                                                        <a href="#" class="kt-chat__username">You</a>
                                                        <span class="kt-media kt-media--circle kt-media--sm">
                                          @if($msg->userFrom->demandeur->avatar)
                                                                <img src="{{asset('storage/'.$msg->userFrom->demandeur->avatar)}}"
                                                                     alt="image">
                                                            @else
                                                                <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder">{{ucfirst($msg->userFrom->demandeur->nom[0])}}</span>
                                                            @endif
                                    </span>
                                                    </div>
                                                    <div class="kt-chat__text kt-bg-light-brand">
                                                        {{$msg->message}}
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                    </div>
                                    <div class="ps__rail-y" style="top: 0px; height: 396px; right: -2px;">
                                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 161px;"></div>
                                    </div>
                                    <div id="last_chat">

                                    </div>
                                </div>
                            </div>
                            <form action="{{route('demandeur.chat.store','#last_chat')}}" method="post">
                                @csrf
                                <input type="hidden" name="proposition_id" value="{{request()->id}}">
                                <input type="hidden" name="from_id" value="{{$messages->first()->userTo->id}}">
                                <input type="hidden" name="to_id" value="{{$messages->first()->userFrom->id}}">

                                <div class="kt-portlet__foot">
                                    <div class="kt-chat__input">
                                        <div class="kt-chat__editor">
                                             <textarea style="height: 50px;color:black" placeholder="Ecrire ici..."
                                                       name="message"></textarea>
                                        </div>
                                        <div class="kt-chat__toolbar">
                                            <div class="kt_chat__tools">
                                                {{--<a href="#"><i class="flaticon2-link"></i></a>--}}
                                                {{--<a href="#"><i class="flaticon2-photograph"></i></a>--}}
                                                {{--<a href="#"><i class="flaticon2-photo-camera"></i></a>--}}
                                            </div>
                                            <div class="kt_chat__actions">
                                                <button type="submit"
                                                        class="btn btn-brand btn-md btn-upper btn-bold kt-chat__reply">
                                                    Répondre
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End:: App Content-->
            </div>
            <!--End::App-->    </div>
        <!-- end:: Content -->                </div>

@section('script')

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
@endsection
@endsection