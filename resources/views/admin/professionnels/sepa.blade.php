@extends('layouts.admin.master')

@section('content')


<style>

    body{
        font-size: 1.5rem;
        font-weight: bold;
    }

    .form-control{

        font-size: 1.5rem;
        font-weight: bold;
    }

    .row{
        margin-left: 20px;
    }
</style>

    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

        <div class="kt-portlet">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="kt-grid  kt-wizard-v2 kt-wizard-v2--white" id="kt_wizard_v2" data-ktwizard-state="first">

                    <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v2__wrapper">
                        <br>

                        <!--begin: Form Wizard Form-->

                        <!--begin: Form Wizard Step 1-->

                            <div class="kt-wizard-v2__content" data-ktwizard-type="step-content"
                                 data-ktwizard-state="current">

                                 <div class="kt-heading kt-heading--md text-center" style="padding: 10px;background-color:lightgrey;">
                                    <h2>RDVAVECVOUSFR{{$creancier->ics}}</h2>
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
                                                       value=" {{$creancier->cp}}  ,  {{$creancier->ville}}" disabled>
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
                                <hr>


                                <div class="kt-wizard-v2__review">
                                    <div class="kt-wizard-v2__review-title">
                                       Debiteur
                                    </div>
                                    <div class="row">
                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                Nom du débiteur
                                            </div>
                                            <input class="form-control" type="text" name="nom"
                                                   value="{{$sepa->nom}}" disabled>
                                        </div>
                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                Adresse ( N° et rue )
                                            </div>
                                            <div class="kt-wizard-v2__review-content">
                                                <input class="form-control" type="text" name="adress"
                                                       value="{{$sepa->adress}}" disabled>
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
                                                       value="{{$sepa->ville}}" disabled>
                                            </div>
                                        </div>

                                        <div class="kt-wizard-v2__review-item col-md-6">
                                            <div class="kt-wizard-v2__review-title">
                                                Code postal
                                            </div>
                                            <div class="kt-wizard-v2__review-content">
                                                <input class="form-control" type="text" name="cp"
                                                       value="{{$sepa->cp}}" disabled>
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
                                                       value="France" disabled>
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
                                                       value="{{$sepa->numero_jacent}}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="footer_validation">
                                    <div class="kt-wizard-v2__review-item col-md-6">
                                        <div class="kt-wizard-v2__review-title">
                                            N° de compte IBAN
                                        </div>
                                        <div class="kt-wizard-v2__review-content">
                                            <input class="form-control" type="text" name="iban" disabled value="{{\Crypt::decrypt($sepa->iban)}}">
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
                                            <input class="form-control" type="text" name="bic"  disabled  value="{{\Crypt::decrypt($sepa->bic)}}">
                                        </div>
                                        @if ($errors->has('bic'))
                                            <span class="" role="alert">
                                        <strong style="color: red;">{{ $errors->first('bic') }}</strong>
                                           </span>
                                        @endif
                                    </div>
                                </div>

                            </div>
<br><br>
                    </div>
                    <!--end: Form Wizard Step 1-->



                    <!--end: Form Actions -->
                    </form>

                    <!--end: Form Wizard Form-->
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
