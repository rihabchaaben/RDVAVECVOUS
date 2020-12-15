@extends('layouts.admin.master')
@section('content')

    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

        <!--begin::Portlet-->
        <div class="kt-portlet kt-faq-v1">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        FAQ RDV
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
                                    <span class="kt-nav__link-text">JE SUIS UN PROFESSIONNEL</span>
                                    <span class="kt-nav__link-arrow"></span>
                                </a>
                                <ul class="kt-nav__sub show" id="kt_nav_sub_1" role="tabpanel"
                                    aria-labelledby="m_nav_link_1" data-parent="#kt_nav" style="">
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text">Comment s’inscrire et recevoir des demandes</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text">Comment se passe la prise de rendez-vous?</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text">Comment s’organise les paiements</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text">Puis-je communiquer avec le demandeur avant le RDV?</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text">Comment puis -je être choisis par le demandeur</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text">Comment envoyer un devis</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text">Quels sont les tarifs dans ma catégorie?</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text">Je ne trouve pas ma facture</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="kt-nav__item  kt-nav__item--active">
                                <a class="kt-nav__link" role="tab" id="kt_nav_link_1" data-toggle="collapse"
                                   href="#kt_nav_sub_1" aria-expanded="false">
                                    <span class="kt-nav__link-text">JE SUIS DEMANDEUR</span>
                                    <span class="kt-nav__link-arrow"></span>
                                </a>
                                <ul class="kt-nav__sub show" id="kt_nav_sub_1" role="tabpanel"
                                    aria-labelledby="m_nav_link_1" data-parent="#kt_nav" style="">
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text">Faire une demande</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text">Consulter mes rendez-vous prévus</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text">La protection de mes coordonnées</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text">Puis - je avoir un devis sans RDV?</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text">Comment consulter les devis</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text">Un professionnel que je connais déjà</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <div class="col-xl-9">
                        <div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample1">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <div class="card-title" data-toggle="collapse" data-target="#collapseOne1"
                                         aria-expanded="false" aria-controls="collapseOne1">
                                        Updates and bug fixes are included in the cost of ALL items.
                                    </div>
                                </div>
                                <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne"
                                     data-parent="#accordionExample1" style="">
                                    <div class="card-body">
                                        <p>
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. Lorem Ipsum has been the industry's standard
                                            dummy text ever since the 1500s, when an unknown printer took a galley of
                                            type and scrambled it to make a type specimen book. It has survived not only
                                            five centuries, but also the leap into Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer took a
                                            galley of
                                        </p>
                                        <p>
                                            Type and scrambled it to make a type specimen book. It has survived not only
                                            five centuries, but also the leap into Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer took a
                                            galley of type and scrambled it to make a type specimen book. It has
                                            survived not only five centuries, but also the leap into Lorem Ipsum has
                                            been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap
                                            into
                                        </p>
                                        <p>
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. It has survived not only five centuries, but also
                                            the leap into Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and scrambled
                                            it to make a type specimen book. It has survived not only five centuries,
                                            but also the leap into Lorem Ipsum has been the industry's standard dummy
                                            text ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into
                                        </p>
                                        <p>
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. It has survived not only five centuries, but also
                                            the leap into Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and scrambled
                                            it to make a type specimen book. It has survived not only five centuries,
                                            but also the leap into Lorem Ipsum has been the industry's standard dummy
                                            text ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo1"
                                         aria-expanded="false" aria-controls="collapseTwo1">
                                        Impact on buyers who bought before the new item support policy.
                                    </div>
                                </div>
                                <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo1"
                                     data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <p>
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. Lorem Ipsum has been the industry's standard
                                            dummy text ever since the 1500s, when an unknown printer took a galley of
                                            type and scrambled it to make a type specimen book. It has survived not only
                                            five centuries, but also the leap into Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer took a
                                            galley of
                                        </p>
                                        <p>
                                            Type and scrambled it to make a type specimen book. It has survived not only
                                            five centuries, but also the leap into Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer took a
                                            galley of type and scrambled it to make a type specimen book. It has
                                            survived not only five centuries, but also the leap into Lorem Ipsum has
                                            been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap
                                            into
                                        </p>
                                        <p>
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. It has survived not only five centuries, but also
                                            the leap into Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and scrambled
                                            it to make a type specimen book. It has survived not only five centuries,
                                            but also the leap into Lorem Ipsum has been the industry's standard dummy
                                            text ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into
                                        </p>
                                        <p>
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. It has survived not only five centuries, but also
                                            the leap into Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and scrambled
                                            it to make a type specimen book. It has survived not only five centuries,
                                            but also the leap into Lorem Ipsum has been the industry's standard dummy
                                            text ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree1">
                                    <div class="card-title collapsed" data-toggle="collapse"
                                         data-target="#collapseThree1" aria-expanded="false"
                                         aria-controls="collapseThree1">
                                        Extending and Renewing Item Support.
                                    </div>
                                </div>
                                <div id="collapseThree1" class="collapse" aria-labelledby="headingThree1"
                                     data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <p>
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. Lorem Ipsum has been the industry's standard
                                            dummy text ever since the 1500s, when an unknown printer took a galley of
                                            type and scrambled it to make a type specimen book. It has survived not only
                                            five centuries, but also the leap into Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer took a
                                            galley of
                                        </p>
                                        <p>
                                            Type and scrambled it to make a type specimen book. It has survived not only
                                            five centuries, but also the leap into Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer took a
                                            galley of type and scrambled it to make a type specimen book. It has
                                            survived not only five centuries, but also the leap into Lorem Ipsum has
                                            been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap
                                            into
                                        </p>
                                        <p>
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. It has survived not only five centuries, but also
                                            the leap into Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and scrambled
                                            it to make a type specimen book. It has survived not only five centuries,
                                            but also the leap into Lorem Ipsum has been the industry's standard dummy
                                            text ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into
                                        </p>
                                        <p>
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. It has survived not only five centuries, but also
                                            the leap into Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and scrambled
                                            it to make a type specimen book. It has survived not only five centuries,
                                            but also the leap into Lorem Ipsum has been the industry's standard dummy
                                            text ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into
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