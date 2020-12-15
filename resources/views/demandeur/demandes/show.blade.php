@extends('layouts.front.demandeurs.master')
@section('content')

    <!-- begin:: Content -->

    <div class="kt-content kt-grid__item kt-grid__item--fluid">


        <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-lg-10">
                <!--Begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head bg-blue">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                {{$propositions->first()->demande->events->first()->titre}}
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-notes">
                            <div class="kt-notes__items">
                                @foreach($propositions as $key=>$prop)
                                
                                <div class="kt-notes__item">
                                    <a data-toggle="modal" data-target="#kt_modal_9{{$key}}"
                                                       class="kt-notes__title" style="cursor: pointer">
                                        <div class="kt-notes__media">
                                            @if($prop->professionnel->avatar)

                                                <img class="kt-hidden-"
                                                     src="{{asset('storage/'.$prop->professionnel->avatar)}}"
                                                     alt="image" style="height:50px">
                                            @else
                                                <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder">{{ucfirst($prop->professionnel->nom[0])}}</span>
                                            @endif
                                            <span class="kt-notes__icon kt-font-boldest kt-hidden">
                                    <i class="flaticon2-cup"></i>
                                </span>
                                            <h3 class="kt-notes__user kt-font-boldest kt-hidden">
                                                N S
                                            </h3>
                                        </div>
                                        <div class="kt-notes__content">
                                            <div class="kt-notes__section">
                                                <div class="kt-notes__info">
                                                   
                                                        {{$prop->professionnel->nom }} 
                                                        

                                                        @if($prop->professionnel->valide===1)
                                                        <span style=" color:white;font-size: 1rem;margin-left: 13px;" class="kt-badge kt-badge--success kt-badge--inline" >   Vérifié  </span> 
                                                        @endif

                                                    
                                                    <span class="kt-notes__desc" style="margin-left: 7px;"> 
                                                    </span>
                                                    @if($prop->status == App\Proposition::ACCEPTE)
                                                        <span  style=" color:white;font-size: 1rem;font-weight: bold;margin-left: 1px;"  class="kt-badge kt-badge--success kt-badge--inline">Accepté</span>
                                                    @else
                                                        <span style=" color:white;font-size: 1rem;margin-left: 1px;"  class="kt-badge kt-badge--info kt-badge--inline">Nouveau</span>
                                                    @endif
                                                </div>
                                                <div class="kt-notes__dropdown">
                                                    <a href="#" class="btn btn-sm btn-icon-md btn-icon"
                                                       data-toggle="dropdown"
                                                       aria-expanded="false">
                                                        <i class="flaticon-more-1 kt-font-brand"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                         x-placement="bottom-end"
                                                         style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(759px, 33px, 0px);">
                                                        <ul class="kt-nav">
                                                            <li class="kt-nav__item">
                                                                <a href="{{route('demandeur.proposition_status_update',['id'=>$prop->id,'status'=> App\Proposition::ACCEPTE])}}"
                                                                   class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                    <span class="kt-nav__link-text">Accepter</span>
                                                                </a>
                                                            </li>
                                                            <li class="kt-nav__item">
                                                                <a href="{{route('demandeur.proposition_status_update',['id'=>$prop->id,'status'=> App\Proposition::REFUSE])}}"
                                                                   class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                    <span class="kt-nav__link-text">Refuser</span>
                                                                </a>
                                                            </li>
                                                            @if($prop->status == App\Proposition::ACCEPTE)
                                                            <li class="kt-nav__item">
                                                                <a href="{{route('demandeur.chat.show',[$prop,'#last_chat'])}}"
                                                                   class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                                    <span class="kt-nav__link-text">Chat</span>
                                                                </a>
                                                            </li>
                                                               @endif
                                                            <!--  -->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="kt-notes__body">


                                    @if($prop->messages->first()){{$prop->messages->first()->message}}@endif
                                </span>
                                        </div>
                                        </a>
                                    </div>
                                    @include('demandeur.demandes.view_pro_profile',['proposition'=>$prop,'key'=>$key])
                                   
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::Portlet-->
            </div>
        </div>
    </div>
@endsection