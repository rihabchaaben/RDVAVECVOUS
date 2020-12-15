@extends('layouts.front.demandeurs.master')
@section('content')


    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
        {{--<div class="kt-subheader   kt-grid__item" id="kt_subheader">--}}
            {{--<div class="kt-subheader__main">--}}

                {{--<h3 class="kt-subheader__title">--}}
                    {{--Ajouter un artisan VIP--}}
                {{--</h3>--}}

                {{--<span class="kt-subheader__separator kt-subheader__separator--v"></span>--}}

                {{--<div class="kt-subheader__group" id="kt_subheader_search">--}}
            {{--<span class="kt-subheader__desc" id="kt_subheader_total">--}}
                                    {{--Ajouter artisan pour invitation VIP inscris                           </span>--}}

                {{--</div>--}}

            {{--</div>--}}

        {{--</div>--}}
        <!-- end:: Content Head -->
        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="row">
                <div class="col">
                    {{--<div class="alert alert-light alert-elevate fade show" role="alert">--}}
                        {{--<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>--}}
                        {{--<div class="alert-text">--}}
                            {{--Linvitation est un outil pour inviter vos artisan a utiliser notre RDV en tant que VIP est--}}
                            {{--sera integrer apres dans votre demande.--}}
                            {{--<br>--}}
                            {{--For more info please visit the platform (a ajouter dans le faq comme partie VIP) <a--}}
                                    {{--class="kt-link kt-font-bold"--}}
                                    {{--href="https://www.malot.fr/bootstrap-datetimepicker/demo.php"--}}
                                    {{--target="_blank">Demo Page</a> or <a--}}
                                    {{--class="kt-link kt-font-bold"--}}
                                    {{--href="https://github.com/smalot/bootstrap-datetimepicker" target="_blank">Github--}}
                                {{--Repo</a>.--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="alert alert-info fade show" role="alert">
                        <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                                    {{-- 02/10/2020 : added style tag --}}
                                    <div class="alert-text" style="font-size: 16px">Pourquoi inviter un artisan ?
                            <p>Si vous connaissez un artisan et souhaitez gagner du temps dans la prise de contact, invitez-le!
                                Il recevra en exclusivité vos demandes si vous le selectionnez dans MA LISTE lors de vos
                                prochaines demandes.</p>
                            {{-- <p class="mb-0">Remplissez les champs suivant et nous l' invitons à s'inscrire gratuitement. --}}
                            <p class="mb-0">Remplissez les champs suivants et nous l'invitons à s'inscrire gratuitement.
                                Travaillez ensemble de manière plus simple!</p>
                        </div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="la la-close"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head bg-blue">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Invitez vos artisans préférés
                        </h3>
                    </div>
                </div>
                <!--begin::Form-->
                <form action="{{route('demandeur.mes_invitation_storeByRef')}}" method="post" class="kt-form kt-form--label-right">
                    @csrf
                    <div class="kt-portlet__body">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12">Nom</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <input type="text" class="form-control" name="name"
                                       placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12">Activité</label>
                            <select class="form-control col-lg-4 col-md-9 col-sm-12" name="category">
                                 @foreach($categories as $category)
                                        @foreach($category->childrens as $child)
                                             <option value="{{$child->id}}">
                                             {{$child->label}}</option>
                                        @endforeach
                                 @endforeach
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12">Email</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <input type="email" class="form-control" name="email"
                                       placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-lg-9 ml-lg-auto">
                                    <button type="submit" class="btn btn-success">Valider</button>
                                    <button type="submit" class="btn btn-secondary">Annuler</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->

        </div>
        <!-- end:: Content -->
    </div>

@endsection