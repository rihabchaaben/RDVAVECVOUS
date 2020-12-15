@extends('layouts.front.demandeurs.master')
@section('content')
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
        <!-- begin:: Content Head -->
    {{--<div class="kt-subheader   kt-grid__item" id="kt_subheader">--}}
    {{--<div class="kt-subheader__main">--}}

    {{--<h3 class="kt-subheader__title">--}}
    {{--Mon liste VIP--}}
    {{--</h3>--}}

    {{--<span class="kt-subheader__separator kt-subheader__separator--v"></span>--}}

    {{--<div class="kt-subheader__group" id="kt_subheader_search">--}}
    {{--<span class="kt-subheader__desc" id="kt_subheader_total">--}}
    {{--Liste des invitation VIP inscris                           </span>--}}

    {{--</div>--}}

    {{--</div>--}}

    {{--</div>--}}
    <!-- end:: Content Head -->
        <!-- begin:: Content -->

        <div class="kt-content  kt-grid__item kt-grid__item--fluid">

            <div class="row">
                <div class="col">
                    <div class="alert alert-info fade show" role="alert">
                        <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                                    {{-- 02/10/2020 : added style tag --}}
                                    <div class="alert-text" style="font-size: 16px">Pourquoi inviter un artisan ?
                            <p>Si vous connaissez un artisan et souhaitez gagner du temps dans la prise de contact,
                                invitez-le!
                                Il recevra en exclusivité vos demandes si vous le selectionnez dans MA LISTE lors de vos
                                prochaines demandes.</p>
                            <p class="mb-0">Remplissez les champs suivant et nous l' invitons à s'inscrire gratuitement.
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
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg bg-blue">
                    <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                        <h3 class="kt-portlet__head-title">
                            Ma liste
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions"> &nbsp;
                                <a href="{{route('demandeur.mes_invitation_create')}}"
                                   class="btn btn-brand btn-elevate btn-icon-sm btn-white">
                                    <i class="la la-plus"></i>
                                    Inviter un artisan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">

                    <div class="kt-section">
                        <div class="kt-section__content">
                            @if($invitations->isEmpty())
                                <p>Vous n'avez aucun invité</p>
                            @else

                            <table id="kt_table_1" role="grid" style="width: 1237px;" class="table table-striped dataTable no-footer dtr-inline collapsed" class="table table-striped" id="kt_table_1">                                    <thead>
                                    <tr>

                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Téléphone</th>
                                        <th>Catégorie</th>
                                        <th>Ville</th>
                                        {{--<th>Actions</th>--}}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($invitations as $key=>$invit)
                                        <tr>

                                            <td>{{$invit->professionnel->user->name}}</td>
                                            <td>{{$invit->professionnel->user->email}} </td>
                                            <td> @isset($invit->professionnel->telephone)
                                                    {{$invit->professionnel->telephone}}
                                                @else
                                                    Profile Incomplet
                                                @endisset</td>
                                            <td>
                                                @isset($invit->professionnel->categories->first()->label)
                                                    {{$invit->professionnel->categories->first()->label}}
                                                @else
                                                    Profile Incomplet
                                                @endisset
                                            </td>
                                            <td>
                                                @isset($invit->professionnel->ville->name)
                                                    {{$invit->professionnel->ville->name}}
                                                @else
                                                    Profile Incomplet
                                                @endisset
                                            </td>
                                            {{--<td>--}}
                                            {{--<div class="dropdown dropdown-inline">--}}
                                            {{--<button type="button"--}}
                                            {{--class="btn btn-clean btn-sm btn-icon btn-icon-md"--}}
                                            {{--data-toggle="dropdown" aria-haspopup="true"--}}
                                            {{--aria-expanded="false">--}}
                                            {{--<i class="flaticon-more-1"></i>--}}
                                            {{--</button>--}}
                                            {{--<div class="dropdown-menu dropdown-menu-right"--}}
                                            {{--x-placement="bottom-end"--}}
                                            {{--style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">--}}
                                            {{--<ul class="kt-nav">--}}
                                            {{--<li class="kt-nav__item">--}}
                                            {{--<a href="#" class="kt-nav__link">--}}
                                            {{--<i class="kt-nav__link-icon flaticon2-line-chart"></i>--}}
                                            {{--<span class="kt-nav__link-text">Editer</span>--}}
                                            {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<form action="{{route('admin.demandes.destroy',$invit->id)}}"--}}
                                            {{--method="POST" id="delete_demande">--}}

                                            {{--<li class="kt-nav__item">--}}
                                            {{--<a href="#"--}}
                                            {{--class="kt-nav__link">--}}
                                            {{--<i class="kt-nav__link-icon flaticon2-send"></i>--}}
                                            {{--<span class="kt-nav__link-text">Supprimer</span>--}}
                                            {{--</a>--}}
                                            {{--@method('DELETE')--}}
                                            {{--@csrf--}}
                                            {{--</li>--}}
                                            {{--</form>--}}
                                            {{--</ul>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--</td>--}}
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
