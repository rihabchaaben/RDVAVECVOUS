@extends('layouts.front.professionnel.master')
@section('content')
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{asset('assets/app/custom/wizard/wizard-v2.default.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/app/custom/fancybox/jquery.fancybox-1.3.4.css')}}" type="text/css" media="screen"/>
    <!--end::Page Custom Styles -->
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{asset('assets/app/custom/invoices/invoice-v2.default.css')}}" rel="stylesheet" type="text/css"/>

    <!--end::Page Custom Styles -->

    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">
                    Facture
                </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>



            </div>

        </div>
        <div class="kt-portlet">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="kt-grid  kt-wizard-v2 kt-wizard-v2--white" id="kt_wizard_v2" data-ktwizard-state="first">
                    <div class="kt-grid__item kt-wizard-v2__aside">

                        <!--begin: Form Wizard Nav -->
                        <div class="kt-wizard-v2__nav">
                            <div class="kt-wizard-v2__nav-items">
                                <a class="kt-wizard-v2__nav-item" href="#" data-ktwizard-type="step"
                                   data-ktwizard-state="current">
                                    <div class="kt-wizard-v2__nav-body">
                                        <div class="kt-wizard-v2__nav-icon">
                                            <i class="flaticon-globe"></i>
                                        </div>
                                        <div class="kt-wizard-v2__nav-label">
                                            <div class="kt-wizard-v2__nav-label-title">
                                                Paiement Sepa
                                            </div>

                                        </div>
                                    </div>
                                </a>


                            </div>
                        </div>

                        <!--end: Form Wizard Nav -->
                    </div>
                    <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v2__wrapper">
                        <br>
                        <div class="alert alert-info fade show" role="alert">
                            <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                                    {{-- 02/10/2020 : added style tag --}}
                            <div class="alert-text" style="font-size: 16px">
                                <p>Pourquoi un paiment par prélévement?</p>
                                <p>- Beaucoup plus sûre qu'une carte bancaire.</p>
                                <p>- Vos données sont protégés contre l'usurpation et le vol.</p>
                                <p>- En fin de mois, vous ne payez QUE les rendez-vous acceptés.</p>
                            </div>
                            <div class="alert-close">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                </button>
                            </div>
                        </div>
                        <!--begin: Form Wizard Form-->
                        <form action="{{route('pro.sepa_store','#footer_validation')}}" method="post" class="kt-form" id="kt_form">

                            {{--<input type="hidden" value="{{Auth::user()->professionnel->id}}" name="professionnel_id">--}}
                            <input type="hidden" value="{{$proposition->id}}" name="proposition_id">
                            {{--<input type="hidden" value="{{$proposition->demande->demandeur->id}}" name="demandeur_id">--}}

                        @csrf

                        <!--begin: Form Wizard Step 1-->

                            <div class="kt-wizard-v2__content" data-ktwizard-type="step-content"
                                 data-ktwizard-state="current">
                                <div style="padding: 10px;background-color:lightgrey;">
                                    En signant ce formulaire de mandat, vous autorisez RDVavecVOUS.com à envoyer des instructions à
                                    votre banque pour débiter votre compte, et (B) votre banque à débiter votre compte conformément aux
                                    instructions de rdvavecvous.com.
                                    <br>Vous bénéficiez du droit d’être remboursé par votre banque selon les
                                    conditions décrites dans la convention que vous avez passée avec elle. Une demande de remboursement
                                    doit être présentée dans les 8 semaines suivant la date de débit de votre compte pour un prélèvement
                                    autorisé.
                                </div>
                                <div class="kt-heading kt-heading--md text-center" style="padding: 10px;background-color:lightgrey;">
                                    <h2>RDVAVECVOUSFR{{$creancier->ics}}{{-- {{strtoupper(substr($professionnel->nom,0,6))}}{{$random}} --}}</h2>
                                </div>

                                <div class="kt-wizard-v2__review">
                                    <div class="kt-wizard-v2__review-item">
                                        <div class="kt-wizard-v2__review-title">
                                            Créancier
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                ICS
                                            </div>
                                            <input class="form-control" type="text" name="adresse"
                                                   value="{{$creancier->ics}}" disabled>
                                        </div>
                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                Nom du créancier
                                            </div>
                                            <div class="kt-wizard-v2__review-content">
                                                <input class="form-control" type="text" name="adresse"
                                                       value="{{$creancier->nom}}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                Adresse ( N° et rue )
                                            </div>
                                            <div class="kt-wizard-v2__review-content">
                                                <input class="form-control" type="text" name="adresse"
                                                       value="{{$creancier->adress}}" disabled>
                                            </div>
                                        </div>
                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                Code postal et ville
                                            </div>
                                            <div class="kt-wizard-v2__review-content">
                                                <input class="form-control" type="text" name="adresse"
                                                       value="{{$creancier->ville}} {{$creancier->cp}}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                Pays
                                            </div>
                                            <div class="kt-wizard-v2__review-content">
                                                <input class="form-control" type="text" name="adresse"
                                                       value="{{$creancier->pays}}" disabled>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <br><br>

                                <div class="kt-wizard-v2__review">
                                    <div class="kt-wizard-v2__review-item">
                                        <div class="kt-wizard-v2__review-title">
                                            Débiteur
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                Nom du débiteur
                                            </div>
                                            <input class="form-control" type="text" name="nom"
                                                   value="{{$professionnel->nom}}">
                                        </div>
                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                Adresse ( N° et rue )
                                            </div>
                                            <div class="kt-wizard-v2__review-content">
                                                <input class="form-control" type="text" name="adress"
                                                       value="{{$professionnel->adresse}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                Ville
                                            </div>
                                            <div class="kt-wizard-v2__review-content">
                                                <input class="form-control" type="text" name="ville"
                                                       value="{{$professionnel->ville->name}}">
                                            </div>
                                        </div>

                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                Code postal
                                            </div>
                                            <div class="kt-wizard-v2__review-content">
                                                <input class="form-control" type="text" name="cp"
                                                       value="{{$professionnel->cp}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                Pays
                                            </div>
                                            <div class="kt-wizard-v2__review-content">
                                                <input class="form-control" type="text" name="pays"
                                                       value="France">
                                                @if ($errors->has('pays'))
                                                    <span class="" role="alert">
                                        <strong style="color: red;">{{ $errors->first('pays') }}</strong>
                                           </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                N° contrat sous-jacent
                                            </div>
                                            <div class="kt-wizard-v2__review-content">
                                                <input class="form-control" type="text" name="numero_jacent"
                                                       value="{{strtoupper(substr($professionnel->nom,0,6))}}{{$random}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="footer_validation">
                                    <div class="kt-wizard-v2__review-item col-md-6">
                                        <div class="kt-wizard-v2__review-title">
                                            N° de compte IBAN
                                        </div>
                                        <div class="kt-wizard-v2__review-content">
                                            <input class="form-control" type="password" name="iban" maxlength="20" value="{{old('iban')}}">
                                        </div>
                                        @if ($errors->has('iban'))
                                            <span class="" role="alert">
                                        <strong style="color: red;">{{ $errors->first('iban') }}</strong>
                                           </span>
                                        @endif
                                    </div>
                                    <div class="kt-wizard-v2__review-item col-md-6">
                                        <div class="kt-wizard-v2__review-title">
                                            Code BIC
                                        </div>
                                        <div class="kt-wizard-v2__review-content">
                                            <input class="form-control" type="password" name="bic" maxlength="10" value="{{old('bic')}}">
                                        </div>
                                        @if ($errors->has('bic'))
                                            <span class="" role="alert">
                                        <strong style="color: red;">{{ $errors->first('bic') }}</strong>
                                           </span>
                                        @endif
                                    </div>
                                </div>

                            </div>

                    </div>
                    <!--end: Form Wizard Step 1-->

                    <!--begin: Form Actions -->
                    <div class="kt-form__actions">
                        <button type="reset"
                                class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u">
                            Annuler
                        </button>
                        <button type="submit"
                                class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u">
                            Payer le RDV
                        </button>
                    </div>

                    <!--end: Form Actions -->
                    </form>

                    <!--end: Form Wizard Form-->
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection


