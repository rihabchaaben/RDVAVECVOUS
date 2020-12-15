@extends('layouts.app')

@section('content')
    <br><br><br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('vérifiez votre adresse e-mail') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail .') }}
                            </div>
                        @endif

                        {{ __("Avant de continuer, veuillez vérifier votre e-mail pour un lien de vérification , N'oubliez pas de verifer ton spam si vous le trouvez pas.") }}
                        {{ __("Si vous n'avez pas reçu l'e-mail,") }},<br> <a href="{{ route('verification.resend', app()->getLocale()) }}">{{ __('cliquez ici pour en demander un autre') }}</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection