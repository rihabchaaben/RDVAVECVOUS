@extends('layouts.front.professionnel.master')
@section('content')

    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <!-- begin:: Content Head -->
        {{-- <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">
                    FAQ
                </h3>


            </div>

        </div> --}}
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
                                    <span class="kt-nav__link-text" style="font-size: 18px">JE SUIS UN PROFESSIONNEL</span>
                                    <span class="kt-nav__link-arrow"></span>
                                </a>
                                <ul class="kt-nav__sub show" id="kt_nav_sub_1" role="tabpanel"
                                    aria-labelledby="m_nav_link_1" data-parent="#kt_nav" style="">
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text" data-toggle="collapse"
                                                  data-target="#collapseSeven1" style="font-size: 16px">Comment s’inscrire et recevoir des demandes</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text" data-toggle="collapse"
                                                  data-target="#collapseEight1" style="font-size: 16px">Comment se passe la prise de rendez-vous?</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text" data-toggle="collapse"
                                                  data-target="#collapseNine1" style="font-size: 16px">Comment s’organise les paiements</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text" data-toggle="collapse"
                                                  data-target="#collapseTen1" style="font-size: 16px">Puis-je communiquer avec le demandeur avant le RDV?</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text" data-toggle="collapse"
                                                  data-target="#collapseEleven1" style="font-size: 16px">Comment puis-je être choisi par le demandeur</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text" data-toggle="collapse"
                                                  data-target="#collapseTwelve1" style="font-size: 16px">Comment envoyer un devis</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text" data-toggle="collapse"
                                                  data-target="#collapseThirteen1" style="font-size: 16px">Quels sont les tarifs dans ma catégorie?</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
                                            <span class="kt-nav__link-text"  data-toggle="collapse"
                                                  data-target="#collapseFourteen1" style="font-size: 16px">Je ne trouve pas ma facture</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
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
                                                  data-target="#collapsefour1" style="font-size: 16px">Puis - je avoir un devis sans RDV?</span>
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
                                <div class="card-header" id="headingSeven1">
                                    <div class="card-title collapsed" data-toggle="collapse"
                                         data-target="#collapseSeven1" aria-expanded="false"
                                         aria-controls="collapseSeven1" style="font-size: 18px">
                                        Comment s’ inscrire et recevoir des demandes de rendez-vous.
                                    </div>
                                </div>
                                <div id="collapseSeven1" class="collapse" aria-labelledby="headingSeven1"
                                     data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <p style="font-size: 16px">
                                            Il vous suffit de suivre pas à pas les étapes du formulaire d'inscription et sélectionner
                                            les deux paramètres qui vous permettront de recevoir vos premières demandes : <br>
                                            <ul style="font-size: 16px">
                                                <li>La catégorie d'activité qui vous concerne.</li>
                                                <li>La zone géographique pour laquelle vous acceptez de recevoir des demandes de RDV.</li>
                                            </ul>
                                            <p style="font-size: 16px">
                                            Ainsi vous recevrez les demandes concernant votre domaine d'activité et n'allant pas au delàs de la zone indiquée. A tout moment, sur le MENU, dans l'onglet MON PROFIL, vous pourrez modifier votre sélection.
                                            </p>
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="card">
                                <div class="card-header" id="headingEight1">
                                    <div class="card-title collapsed" data-toggle="collapse"
                                         data-target="#collapseEight1" aria-expanded="false"
                                         aria-controls="collapseEight1" style="font-size: 18px">
                                        Comment se passe la prise de rendez-vous.
                                    </div>
                                </div>
                                <div id="collapseEight1" class="collapse" aria-labelledby="headingEight1"
                                     data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <p style="font-size: 16px">
                                        Lorsqu’une demande se trouve être dans votre domaine d’activité et dans votre zone géographique,
                                        vous la retrouvez sur un tableau qui vous indique les détails de la demande, la date et le créneau
                                         horaire souhaité par le demandeur. Si vous souhaitez proposer votre candidature,
                                         vous devez cliquer sur PROPOSER UN RENDEZ-VOUS qui indique au demandeur votre offre de rendez-vous
                                         et lui donne accès à votre profil.

                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="card">
                                <div class="card-header" id="headingNine1">
                                    <div class="card-title collapsed" data-toggle="collapse"
                                         data-target="#collapseNine1" aria-expanded="false"
                                         aria-controls="collapseNine1" style="font-size: 18px">
                                        Comment s’organise les paiements sur la plateforme RDVavecVOUS.com
                                    </div>
                                </div>
                                <div id="collapseNine1" class="collapse" aria-labelledby="headingNine1"
                                     data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <p style="font-size: 16px">
                                        Pour plus de sécurité, vous renseignez lors de votre premier RDV vos coordonnées bancaires
                                        se trouvant sur votre RIB.
                                        Nous procéderons ainsi à des prélèvements déclenchés UNIQUEMENT à l'acceptation du rendez-vous par le demandeur suite à une
                                        proposition de votre part.
                                        En effet, si les demandes ne vous intéressent pas ou que vous n'êtes pas disponible,
                                        vous ne proposerez pas de rendez-vous et ne serez pas facturé.


                                        </p>
                                    </div>
                                </div>

                            </div>




                            <div class="card">
                                <div class="card-header" id="headingTen1">
                                    <div class="card-title collapsed" data-toggle="collapse"
                                         data-target="#collapseTen1" aria-expanded="false"
                                         aria-controls="collapseTen1" style="font-size: 18px">
                                         Puis-je communiquer avec le demandeur avant le RDV?                                    </div>
                                </div>
                                <div id="collapseTen1" class="collapse" aria-labelledby="headingTen1"
                                     data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <p style="font-size: 16px">
                                        Une fois le RDV accepté par le client, vous recevez les coordonnées téléphoniques de celui-ci. Une messagerie privée est aussi  ouverte, vous permettant de finaliser les dernières informations.

                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="card">
                                <div class="card-header" id="headingEleven1">
                                    <div class="card-title collapsed" data-toggle="collapse"
                                         data-target="#collapseEleven1" aria-expanded="false"
                                         aria-controls="collapseEleven1" style="font-size: 18px">
                                         Comment puis-je être choisi par le demandeur
                                    </div>
                                </div>
                                <div id="collapseEleven1" class="collapse" aria-labelledby="headingEleven1"
                                     data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <p style="font-size: 16px">
                                        Sur votre profil, un descriptif de votre entreprise permet au demandeur de mieux connaître vos compétences et ainsi mieux faire leur choix. Le choix de l'image qui vous représente est aussi essentiel. Ce peut être votre logo, la photo d'une réalisation ou pourquoi pas la photo de votre équipe.
                                        Lors de votre proposition de RDV vous aurez  aussi la possibilité de laisser un message, une dernière manière d'être convaincant.



                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTwelve1">
                                    <div class="card-title collapsed" data-toggle="collapse"
                                         data-target="#collapseTwelve1" aria-expanded="false"
                                         aria-controls="collapseTwelve1" style="font-size: 18px">
                                         Comment envoyer un devis
                                    </div>
                                </div>
                                <div id="collapseTwelve1" class="collapse" aria-labelledby="headingTwelve1"
                                     data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <p style="font-size: 16px">
                                        Après tout RDV, le demandeur attends votre devis. Celui-ci doit être adressé au plus vite pour permettre au demandeur de programmer votre intervention.
                                        Dans le MENU à l'onglet MES DEVIS, vous retrouverez la liste des demandeurs en attente et un formulaire à remplir de vos cotations et tarifs.
                                        Un état du devis vous permettra de savoir si il a été accepté ou refusé.



                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="card">
                                <div class="card-header" id="headingThirteen1">
                                    <div class="card-title collapsed" data-toggle="collapse"
                                         data-target="#collapseThirteen1" aria-expanded="false"
                                         aria-controls="collapseThirteen1" style="font-size: 18px">
                                         Quels sont les tarifs dans ma catégorie?
                                    </div>
                                </div>
                                <div id="collapseThirteen1" class="collapse" aria-labelledby="headingThirteen1"
                                     data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <p style="font-size: 16px">
                                        Vous trouverez la grille de tarif dans le MENU à l'onglet TARIFICATION.
                                            Le prélèvement aura lieu UNIQUEMENT  pour les RDV acceptés non annulés par le demandeur.
                                            Toute annulation de votre part exclut tout remboursement conformément au <a href="https://rdvavecvous.com/conditions-generales-d-utilisation"><b style="color: dodgerblue">CGU CGV</b></a>
                                        </p>
                                    </div>
                                </div>

                            </div>


                            <div class="card">
                                <div class="card-header" id="headingFourteen1">
                                    <div class="card-title collapsed" data-toggle="collapse"
                                         data-target="#collapseFourteen1" aria-expanded="false"
                                         aria-controls="collapseFourteen1" style="font-size: 18px">
                                        JE NE TROUVE PAS MA FACTURE.
                                    </div>
                                </div>
                                <div id="collapseFourteen1" class="collapse" aria-labelledby="headingFourteen1"
                                     data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <p style="font-size: 16px">
                                            Nous programmons le prélèvement à partir de la date du rendez-vous. C’est à
                                            ce moment là que votre espace Facture contiendra votre nouvelle facture à
                                            télécharger ou imprimer

                                        </p>
                                    </div>
                                </div>

                            </div>





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
                                        Puis - je avoir un devis sans RDV.
                                    </div>
                                </div>
                                <div id="collapsefour1" class="collapse" aria-labelledby="headingfour1"
                                     data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <p style="font-size: 16px">
                                        Une fois le RDV accepté par le client, vous recevez les coordonnées téléphoniques de celui-ci.
                                        Une messagerie privée est aussi  ouverte, vous permettant de finaliser les dernières informations
                                        ..
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
{{-- 02/10/2020 : added  style="font-size:Xpx" tag --}}
