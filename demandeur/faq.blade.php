@extends('layouts.front.demandeurs.master')
@section('content')

    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <!-- begin:: Content Head -->
        {{-- <div class="kt-subheader   kt-grid__item" id="kt_subheader"> --}}
            {{-- <div class="kt-subheader__main"> --}}

                {{-- <h3 class="kt-subheader__title"> --}}
                    {{-- FAQ --}}
                {{-- </h3> --}}

                {{--<span class="kt-subheader__separator kt-subheader__separator--v"></span>--}}

                {{--<div class="kt-subheader__group" id="kt_subheader_search">--}}
            {{--<span class="kt-subheader__desc" id="kt_subheader_total">--}}
                                    {{--FAQ pour les infos du rubrique questions about us  </span>--}}

                {{--</div>--}}

            {{-- </div> --}}

        {{-- </div> --}}
        <!--begin::Portlet-->
        <div class="kt-portlet kt-faq-v1">
            <div class="kt-portlet__head bg-blue">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        FAQ
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <div class="row">
                    <div class="col-xl-3">
                        <ul class="kt-nav" id="kt_nav" role="tablist">

                            <li class="kt-nav__item  kt-nav__item--active">
                                <a class="kt-nav__link" role="tab" id="kt_nav_link_1" data-toggle="collapse"
                                   href="#kt_nav_sub_1" aria-expanded="false">
                                    <span class="kt-nav__link-text" style="font-size: 18px">JE SUIS DEMANDEUR</span>
                                    <span class="kt-nav__link-arrow"></span>
                                </a>
                                <ul class="kt-nav__sub show" id="kt_nav_sub_1" role="tabpanel"
                                    aria-labelledby="m_nav_link_1" data-parent="#kt_nav" style="">
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text" data-toggle="collapse"
                                                  data-target="#collapseOne1" style="font-size: 16px">Faire une demande</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text" data-toggle="collapse"
                                                  data-target="#collapseTwo1" style="font-size: 16px">Consulter mes rendez-vous prévus</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text" data-toggle="collapse"
                                                  data-target="#collapseThree1" style="font-size: 16px">La protection de mes coordonnées</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text" data-toggle="collapse"
                                                  data-target="#collapsefour1" style="font-size: 16px">Puis-je avoir un devis sans RDV?</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text" data-toggle="collapse"
                                                  data-target="#collapseFive1" style="font-size: 16px">Comment consulter les devis</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text" data-toggle="collapse"
                                                  data-target="#collapseSix1" style="font-size: 16px">Un professionnel que je connais déjà</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <div class="col-xl-9">
                        {{--je suis professionnel--}}

                        <div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample1">

                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <div class="card-title" data-toggle="collapse" data-target="#collapseOne1"
                                         aria-expanded="false" aria-controls="collapseOne1" style="font-size: 18px">
                                        Faire une demande.
                                    </div>
                                </div>
                                <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne"
                                     data-parent="#accordionExample1" style="">
                                    <div class="card-body">
                                        <p style="font-size: 16px">
                                            Simple et en trois étapes seulement, publiez votre demande en cliquant sur
                                            le bloc NOUVELLE DEMANDE.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo1"
                                         aria-expanded="false" aria-controls="collapseTwo1" style="font-size: 18px">
                                        Consulter mes rendez-vous prévus.
                                    </div>
                                </div>
                                <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo1"
                                     data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <p style="font-size: 16px">
                                            Le bloc MES RENDEZ-VOUS vous indique les rendez-vous et leurs statuts grâce
                                            à un code couleur.<br>
                                            En jaune, les RDV sans propositions.<br>
                                            En rose, les RDV en attente d'une réponse de votre part.<br>
                                            En vert, les RDV validés et programmés avec votre professionnel.

                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree1">
                                    <div class="card-title collapsed" data-toggle="collapse"
                                         data-target="#collapseThree1" aria-expanded="false"
                                         aria-controls="collapseThree1" style="font-size: 18px">
                                        La protection de mes coordonnées.
                                    </div>
                                </div>
                                <div id="collapseThree1" class="collapse" aria-labelledby="headingThree1"
                                     data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <p style="font-size: 16px">
                                            Vos coordonnées ne seront communiqués au professionnel faisant une
                                            proposition UNIQUEMENT après acceptation de votre part. Ainsi, le RDV pourra
                                            avoir lieu.
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="card">
                                <div class="card-header" id="headingfour1">
                                    <div class="card-title collapsed" data-toggle="collapse"
                                         data-target="#collapsefour1" aria-expanded="false"
                                         aria-controls="collapsefour1" style="font-size: 18px">
                                        Puis-je avoir un devis sans RDV.
                                    </div>
                                </div>
                                <div id="collapsefour1" class="collapse" aria-labelledby="headingfour1"
                                     data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <p style="font-size: 16px">
                                            Les devis estimés, sans prise en compte du contexte réel de votre
                                            problématique, sans métrage précis peuvent être faussés. C'est pourquoi,
                                            vous pouvez préciser lors de la demande que vous souhaitez avoir un devis et
                                            le professionnel se déplacera dans cette intention.
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="card">
                                <div class="card-header" id="headingfive1">
                                    <div class="card-title collapsed" data-toggle="collapse"
                                         data-target="#collapseFive1" aria-expanded="false"
                                         aria-controls="collapseFive1" style="font-size: 18px">
                                        Comment consulter les devis.
                                    </div>
                                </div>
                                <div id="collapseFive1" class="collapse" aria-labelledby="headingFive1"
                                     data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <p style="font-size: 16px">
                                            Les devis issus de vos rendez-vous sont consultables sur le MENU à l'onglet
                                            MES DEVIS.
                                            Vous pourrez télécharger et consulter le document et accepter ou non le
                                            devis.
                                            L'information sera transmise à votre professionnel.

                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="card">
                                <div class="card-header" id="headingSix1">
                                    <div class="card-title collapsed" data-toggle="collapse"
                                         data-target="#collapseSix1" aria-expanded="false"
                                         aria-controls="collapseSix1" style="font-size: 18px">
                                        Je veux organiser un rendez-vous avec un professionnel que je connais déjà.
                                    </div>
                                </div>
                                <div id="collapseSix1" class="collapse" aria-labelledby="headingSix1"
                                     data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <p style="font-size: 16px">
                                            Le bloc INVITATION, vous permet d'inviter un professionnel avec qui vous
                                            avez l'habitude de travailler. Une fois inscrit, il apparaitra sur une liste
                                            spécifique "mes professionnels" lors de vos nouvelle demande. Si vous le
                                            sélectionnez, il recevra en exclusivité la demande de rendez-vous.
                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--end::Portlet-->
    </div>
@endsection
{{-- 02/10/2020 : added  style="font-size:" tag --}}
