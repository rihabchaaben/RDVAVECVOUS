@extends('layouts.front.professionnel.master')
@section('content')
    <style>
        .kt-sc-license {
            background-position: center top;
            background-size: cover;
            background-repeat: no-repeat
        }

        .kt-sc-license .kt-sc__top {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding: 6rem 0 10rem;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .kt-sc-license .kt-sc__top .kt-sc__title {
            margin-bottom: 0;
            font-size: 1.85rem;
            font-weight: 600;
            color: #fff
        }

        .kt-sc-license .kt-sc__top .kt-sc__nav {
            margin: auto 0 auto auto
        }

        .kt-sc-license .kt-sc__top .kt-sc__nav .kt-link {
            font-size: 2rem;
            font-weight: 400
        }

        .kt-infobox .kt-infobox__body .kt-infobox__section .kt-infobox__content .table thead th {
            padding-top: .8rem;
            padding-bottom: .8rem;
        }

        .table:not(.table-bordered) thead td, .table:not(.table-bordered) thead th {
            border-top: 0;
        }

        .table thead td, .table thead th {
            font-weight: 500;
            border-bottom-width: 1px;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .table-light tbody + tbody, .table-light td, .table-light th, .table-light thead th {
            border-color: #fbfcfc;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #ebedf2;
        }

        .table td, .table th {
            padding: .75rem;
            vertical-align: top;
            border-top: 1px solid #ebedf2;
        }

        th {
            text-align: inherit;
        }

        *, ::after, ::before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        th {
            display: table-cell;
            vertical-align: inherit;
            font-weight: bold;
            text-align: -internal-center;
        }

        .table.table-light--success thead tr {
            color: #1dc9b7;
            background-color: rgba(29, 201, 183, .15);
        }

        i {
            color: #0c8397;
        }
        .space{
            height: 100px;
        }
        #obligatoire{
            /* background-color:   #1dc9b7; */
            background-color:   #0A8396;
            font-size: 20px;
        }
        .table-center i{
            font-size: 40px;
        }
        @keyframes fadeIn {
            0% {opacity: 0;}
            100% {opacity: 1;}
         }
         
         .fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
         }
         .animated1 {
            -webkit-animation-duration:  1s;
            animation-duration:  1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            animation-delay: 0s;
         }
         .animated2 {
            -webkit-animation-duration:  1s;
            animation-duration:  1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            animation-delay:  1s;
         }
         .animated3 {
            -webkit-animation-duration:  1s;
            animation-duration:  1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            animation-delay: 2s;
         }
         .animated4 {
            -webkit-animation-duration:  1s;
            animation-duration:  1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            animation-delay: 3s;
         }
         .animated5 {
            -webkit-animation-duration:  1s;
            animation-duration:  1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            animation-delay: 4s;
         }
         .litige{
             /* margin-left: 30%; */
            margin-left: 25%;
            color: #1e90ff;
            font-size : 40px
         }

         .header-info-h5{
            font-size:18px;
         }

        #obligation-th{
            font-size:18px;
            color:white;
        }
         
         @media only screen and (max-width: 600px) {
              .litige{
             /* margin-left: 30%; */
             margin-left: 15%;
             color: #1e90ff;
             font-size : 40px
         }
}
         .medal{
             height: 120px;
             width: auto;
             margin-left: 35px;
         }
         .table-responsive{
             margin-top:50px;
         }
         
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <!-- begin:: Content Head -->
<!--
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">
                    LICENSE
                </h3>


            </div>

        </div>
-->

<div class="kt-sc-license">
          <div class="kt-container ">
                    <div class="kt-sc__top text-center">
                        <h1 class="litige">
                            {{-- &nbsp;&nbsp;&nbsp;0 LITIGE 0 ARNAQUE --}}
                            &nbsp;&nbsp;&nbsp;0 ARNAQUE 0 LITIGE 
                        </h1>
                        {{-- <img class="medal" src="http://clipart-library.com/image_gallery2/Winner-Ribbon-Transparent.png" alt="Medaille"> --}}
                        <img class="medal fadeIn animated3" src="{{asset('images/medaille.png')}}" alt="Medaille">
                        {{--<div class="kt-sc__nav">--}}
                        {{--<a href="#" class="kt-link kt-link--light kt-font-bold">Help Center</a>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
            

            <!-- begin:: Content -->
            <!-- begin:: hero -->
            
            <!-- end:: hero -->
            <div class="kt-negative-spacing--7"></div>
            <!-- begin:: infobox -->
            <div class="kt-grid__item">
                <div class="kt-container ">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="kt-infobox">
                                <div class="kt-infobox__body">
                                    <div class="row">
<!--
                                        <div class="col-lg-3">
                                        </div>
-->
                                        <div class="col-lg-7 mx-auto licence-item">
                                            <div class="kt-infobox__section">
                                                <div class="kt-infobox__content kt-infobox__content--md">
                                                    <h5 class="header-info-h5">Tout manquement à un des points ci-après provoquera le blocage de
                                                        votre compte d&#39;accès
                                                        à RDVavecVOUS.com.<h5>
                                                        <h5 class="header-info-h5">Un avis est recueilli à travers un questionnaire de satisfaction après chaque rendez-vous
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="kt-infobox__section">
                                                <div class="kt-infobox__content">
                                                    <div class="table-responsive">
                                                        <table class="table table-light table-light--success">
                                                            <thead>
                                                            <tr>
                                                                <th id="obligation-th">Vous acceptez obligatoirement les
                                                        points suivants</th>
                                                                <th id="obligatoire" class="table-center"></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            <tr>
                                                                <td class="kt-font-bold table-row-title fadeIn animated1" > <h4>Un respect
                                                                    rigoureux de l &#39;horaire accepté.</h4> 
                                                                </td>
                                                                <td class="table-center">
                                                                <i class="fa fa-check fadeIn animated1" aria-hidden="true"></i>
                                                                    <!--<svg xmlns="http://www.w3.org/2000/svg"
                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         width="24px" height="24px" viewBox="0 0 24 24"
                                                                         version="1.1"
                                                                         class="kt-svg-icon kt-svg-icon--success">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                           fill-rule="evenodd">
                                                                            <polygon
                                                                                    points="0 0 24 0 24 24 0 24"></polygon>
                                                                            <path d="M9.26193932,16.6476484 C8.90425297,17.0684559 8.27315905,17.1196257 7.85235158,16.7619393 C7.43154411,16.404253 7.38037434,15.773159 7.73806068,15.3523516 L16.2380607,5.35235158 C16.6013618,4.92493855 17.2451015,4.87991302 17.6643638,5.25259068 L22.1643638,9.25259068 C22.5771466,9.6195087 22.6143273,10.2515811 22.2474093,10.6643638 C21.8804913,11.0771466 21.2484189,11.1143273 20.8356362,10.7474093 L17.0997854,7.42665306 L9.26193932,16.6476484 Z"
                                                                                  fill="#000000" fill-rule="nonzero"
                                                                                  opacity="0.3"
                                                                                  transform="translate(14.999995, 11.000002) rotate(-180.000000) translate(-14.999995, -11.000002) "></path>
                                                                            <path d="M4.26193932,17.6476484 C3.90425297,18.0684559 3.27315905,18.1196257 2.85235158,17.7619393 C2.43154411,17.404253 2.38037434,16.773159 2.73806068,16.3523516 L11.2380607,6.35235158 C11.6013618,5.92493855 12.2451015,5.87991302 12.6643638,6.25259068 L17.1643638,10.2525907 C17.5771466,10.6195087 17.6143273,11.2515811 17.2474093,11.6643638 C16.8804913,12.0771466 16.2484189,12.1143273 15.8356362,11.7474093 L12.0997854,8.42665306 L4.26193932,17.6476484 Z"
                                                                                  fill="#000000" fill-rule="nonzero"
                                                                                  transform="translate(9.999995, 12.000002) rotate(-180.000000) translate(-9.999995, -12.000002) "></path>
                                                                        </g>
                                                                    </svg>-->
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="kt-font-bold table-row-title fadeIn animated2"> <h4> Être un
                                                                    professionnel honnête dans le conseil de vos
                                                                    clients. </h4>
                                                                </td>
                                                                <td class="table-center">
                                                                <i class="fa fa-check fadeIn animated2" aria-hidden="true"></i>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="kt-font-bold table-row-title fadeIn animated3"><h4> Répondre
                                                                    rapidement et de manière cordiale aux demandes
                                                                    d&#39;informations de vos clients </h4>
                                                                </td>
                                                                <td class="table-center">
                                                                <i class="fa fa-check fadeIn animated3" aria-hidden="true"></i>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="kt-font-bold table-row-title fadeIn animated4"><h4>Être vigilant à votre pratique tarifaire, et ne pas proposer des prix excedant
                                                                exagérement ceux de votre secteur d'activité.</h4>
                                                                </td>
                                                                <td class="table-center">
                                                                <i class="fa fa-check fadeIn animated4" aria-hidden="true"></i>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="kt-font-bold table-row-title fadeIn animated5"><h4>Répondre rapidement à toute problématique post chantier, en
                                                                    assurer le service après-vente et la garantie conformément à
                                                                    votre assurance
                                                                    professionnelle.</h4>
                                                                </td>
                                                                <td class="table-center">
                                                                <i class="fa fa-check fadeIn animated5" aria-hidden="true"></i>
                                                                </td>

                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-infobox__section space-top">
                                                <div class="kt-infobox__content kt-infobox__content--md">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
            <!-- end:: infobox -->

            <!-- begin:: iconbox -->
            {{--<div class="kt-grid__item">--}}
                {{--<div class="kt-container ">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-lg-4">--}}
                            {{--<a href="{{route('pro.mes_demandes')}}" class="kt-portlet kt-iconbox kt-iconbox--success kt-iconbox--animate-slow">--}}
                                {{--<div class="kt-portlet__body">--}}
                                    {{--<div class="kt-iconbox__body">--}}
                                        {{--<div class="kt-iconbox__icon">--}}
                                            {{--<svg xmlns="http://www.w3.org/2000/svg"--}}
                                                 {{--xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"--}}
                                                 {{--viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">--}}
                                                {{--<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                                                    {{--<rect x="0" y="0" width="24" height="24"></rect>--}}
                                                    {{--<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"--}}
                                                          {{--fill="#000000" opacity="0.3"></path>--}}
                                                    {{--<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"--}}
                                                          {{--fill="#000000"></path>--}}
                                                {{--</g>--}}
                                            {{--</svg>--}}
                                        {{--</div>--}}
                                        {{--<div class="kt-iconbox__desc">--}}
                                            {{--<h3 class="kt-iconbox__title">--}}
                                                {{--Getting Started--}}
                                            {{--</h3>--}}
                                            {{--<div class="kt-iconbox__content">--}}
                                                {{--Commencer de proposer votre premier RDV.--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-4">--}}
                            {{--<a href="#" class="kt-portlet kt-iconbox kt-iconbox--success kt-iconbox--animate-slower">--}}
                                {{--<div class="kt-portlet__body">--}}
                                    {{--<div class="kt-iconbox__body">--}}
                                        {{--<div class="kt-iconbox__icon">--}}
                                            {{--<svg xmlns="http://www.w3.org/2000/svg"--}}
                                                 {{--xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"--}}
                                                 {{--viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">--}}
                                                {{--<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                                                    {{--<rect x="0" y="0" width="24" height="24"></rect>--}}
                                                    {{--<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"--}}
                                                          {{--fill="#000000" opacity="0.3"></path>--}}
                                                    {{--<path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z"--}}
                                                          {{--fill="#000000"></path>--}}
                                                    {{--<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"--}}
                                                          {{--fill="#000000"></path>--}}
                                                {{--</g>--}}
                                            {{--</svg>--}}
                                        {{--</div>--}}
                                        {{--<div class="kt-iconbox__desc">--}}
                                            {{--<h3 class="kt-iconbox__title">--}}
                                                {{--Tutorials--}}
                                            {{--</h3>--}}
                                            {{--<div class="kt-iconbox__content">--}}
                                                {{--Regarder notre tutoriel video.--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-4">--}}
                            {{--<a href="{{route('faq')}}" class="kt-portlet kt-iconbox kt-iconbox--success kt-iconbox--animate">--}}
                                {{--<div class="kt-portlet__body">--}}
                                    {{--<div class="kt-iconbox__body">--}}
                                        {{--<div class="kt-iconbox__icon">--}}
                                            {{--<svg xmlns="http://www.w3.org/2000/svg"--}}
                                                 {{--xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"--}}
                                                 {{--viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">--}}
                                                {{--<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                                                    {{--<polygon points="0 0 24 0 24 24 0 24"></polygon>--}}
                                                    {{--<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"--}}
                                                          {{--fill="#000000" fill-rule="nonzero" opacity="0.3"></path>--}}
                                                    {{--<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"--}}
                                                          {{--fill="#000000" fill-rule="nonzero"></path>--}}
                                                {{--</g>--}}
                                            {{--</svg>--}}
                                        {{--</div>--}}
                                        {{--<div class="kt-iconbox__desc">--}}

                                            {{--<h3 class="kt-iconbox__title">--}}
                                                {{--FAQ--}}
                                            {{--</h3>--}}
                                            {{--<div class="kt-iconbox__content">--}}
                                                {{--Liser bien notre FAQ pour comprendre.--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!-- end:: iconbox -->
            <!-- end:: Content -->               
<!--
            <div class="kt-sc-license bg-blue">
<!--                 style="background-image: url('../images/license.jpg')">-->
              <!--  <div class="kt-container ">
                    <div class="kt-sc__top text-center">
                        <h3 class="kt-sc__title">
                            &nbsp;&nbsp;&nbsp;0 LITIGE 0 ARNAQUE
                        </h3>
                        {{--<div class="kt-sc__nav">--}}
                        {{--<a href="#" class="kt-link kt-link--light kt-font-bold">Help Center</a>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>-->
        </div>
        </div>
        </div>
 

@endsection