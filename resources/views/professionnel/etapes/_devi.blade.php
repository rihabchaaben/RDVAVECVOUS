<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v1__wrapper">

    <!--begin: Form Wizard Form-->
    {{--<form action="{{route('pro.mes_devis_store')}}" method="post" class="kt-form" id="kt_form">--}}
    <form action="{{route('pro.mes_demandes_proposition_store')}}" method="post" class="kt-form" id="kt_form">
        <input type="hidden" value="{{Auth::user()->professionnel->id}}" name="professionnel_id">
        <input type="hidden" value="{{$proposition->demande->id}}" name="demande_id">
        <input type="hidden" value="{{$proposition->demande->demandeur->id}}" name="demandeur_id">
    @csrf
    <!--begin: Form Wizard Step 1-->
        <div class="kt-wizard-v1__content" data-ktwizard-type="step-content"
             data-ktwizard-state="current">
            <div class="kt-heading kt-heading--md">RDV Details</div>
            <div class="kt-form__section kt-form__section--first">
                <div class="kt-wizard-v1__review">
                    <div class="kt-wizard-v1__review-item">
                        <div class="kt-wizard-v1__review-title">
                            Titre de la proposition
                        </div>
                        <div class="kt-wizard-v1__review-content">
                            {{$proposition->demande->nom}}
                        </div>
                    </div>
                    <div class="kt-wizard-v1__review-item">
                        <div class="kt-wizard-v1__review-title">
                            Description
                        </div>
                        <div class="kt-wizard-v1__review-content">
                            {{$proposition->demande->description}}
                        </div>
                    </div>
                    <div class="kt-wizard-v1__review-item">
                        <div class="kt-wizard-v1__review-title">
                            Catégorie
                        </div>
                        <div class="kt-wizard-v1__review-content">
                            {{$proposition->demande->categorie->label}}
                        </div>
                    </div>
                    <div class="kt-wizard-v1__review-item">
                        <div class="kt-wizard-v1__review-title">
                            Adresse
                        </div>
                        <div class="kt-wizard-v1__review-content">
                            {{$proposition->demande->adresse}}<br/>
                            {{$proposition->demande->cp}}<br/>
                            {{$proposition->demande->ville->nom}}
                        </div>
                    </div>
                    <div class="kt-wizard-v1__review-item">
                        <div class="kt-wizard-v1__review-title">
                            Téléphone
                        </div>
                        <div class="kt-wizard-v1__review-content">
                            {{$proposition->demande->telephone}}
                        </div>
                    </div>
                    <div class="kt-wizard-v1__review-item">
                        <div class="kt-wizard-v1__review-title">
                            Image
                        </div>
                        <div class="kt-wizard-v1__review-content">
                            <a class="grouped_elements" rel="example_group" id="single_image"
                               title="Custom title"
                               href="{{$proposition->demande->fichier}}">
                                <img src="{{$proposition->demande->fichier}}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end: Form Wizard Step 1-->

        <!--begin: Form Wizard Step 2-->

        <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
            <div class="kt-heading kt-heading--md">Enter the Details of your Proposition</div>
            <div class="kt-form__section kt-form__section--first">
                <div class="kt-wizard-v1__form">
                    <div class="form-group">
                        <label>Proposition Message</label>
                        <textarea type="text" class="form-control"
                                  name="designation"
                                  placeholder="Ecrire la désignation"></textarea>
                        <span class="form-text text-muted">Please enter your Message concernant votre proposition.</span>
                    </div>
                </div>
            </div>
        </div>

        <!--end: Form Wizard Step 2-->

        <!--begin: Form Wizard Step 3-->

    {{--<div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">--}}
    {{--<div class="kt-heading kt-heading--md">Enter the Details of your Devis</div>--}}
    {{--<div class="kt-form__section kt-form__section--first">--}}
    {{--<div class="kt-wizard-v1__form">--}}
    {{--<div class="form-group">--}}
    {{--<label>Désignation Details</label>--}}
    {{--<textarea type="text" class="form-control"--}}
    {{--name="designation"--}}
    {{--placeholder="Ecrire la désignation"></textarea>--}}
    {{--<span class="form-text text-muted">Please enter your Désignation Details.</span>--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--<label>Unité</label>--}}
    {{--<input type="text" class="form-control" name="unite"--}}
    {{--placeholder="L'unité M2 CM ...">--}}
    {{--<span class="form-text text-muted">Please enter your Unité Weight in KG.</span>--}}
    {{--</div>--}}
    {{--<div class="kt-wizard-v1__form-label">Package Dimensions</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col-xl-4">--}}
    {{--<div class="form-group">--}}
    {{--<label>Quantite</label>--}}
    {{--<input type="number" class="form-control"--}}
    {{--name="quantite"--}}
    {{--placeholder="Quantite">--}}
    {{--<span class="form-text text-muted">Please enter your Quantite.</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-xl-4">--}}
    {{--<div class="form-group">--}}
    {{--<label>Prix unitaire</label>--}}
    {{--<input type="text" class="form-control"--}}
    {{--name="prix_unitaire"--}}
    {{--placeholder="Le prix unitaire 20 ..">--}}
    {{--<span class="form-text text-muted">Please enter your Prix unitaire.</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-xl-4">--}}
    {{--<div class="form-group">--}}
    {{--<label>Totale en Euro</label>--}}
    {{--<input type="text" class="form-control"--}}
    {{--name="montant"--}}
    {{--placeholder="Package Length">--}}
    {{--<span class="form-text text-muted">Please enter your Total en euro.</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}


    <!--end: Form Wizard Step 3-->

        <!--begin: Form Actions -->
        <div class="kt-form__actions">
            <div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                 data-ktwizard-type="action-prev">
                Previous
            </div>
            <div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                 data-ktwizard-type="action-submit">
                Submit
            </div>
            <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                 data-ktwizard-type="action-next">
                Next Step
            </div>
        </div>

        <!--end: Form Actions -->
    </form>
    <!--end: Form Wizard Form-->
</div>