<div class="kt-header__topbar-item dropdown">
    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px"
         aria-expanded="true">
                           <span class="kt-header__topbar-icon  kt-pulse kt-pulse--danger">
    <i class="flaticon2-bell-alarm-symbol"></i>
					<span class="kt-pulse__ring"></span>
			</span>
        <span class="kt-hidden kt-badge kt-badge--dot kt-badge--notify kt-badge--sm"></span>
    </div>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg">
        <form>

            <!--begin: Head -->
            <div class="kt-head kt-head--skin-light kt-head--fit-x kt-head--fit-b">
                <h3 class="kt-head__title">
                    User Notifications
                    &nbsp;
                    <span class="btn btn-label-primary btn-sm btn-bold btn-font-md">{{$notificationscnt->count()}}
                        new</span>
                </h3>
                <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x"
                    role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show" data-toggle="tab"
                           href="#topbar_notifications_notifications" role="tab"
                           aria-selected="true">Proposition</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#topbar_notifications_events"
                           role="tab" aria-selected="false">Devis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs"
                           role="tab" aria-selected="false">Message</a>
                    </li>
                </ul>
            </div>

            <!--end: Head -->
            <div class="tab-content">
                <div class="tab-pane active show" id="topbar_notifications_notifications"
                     role="tabpanel">
                    <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll"
                         data-scroll="true" data-height="300" data-mobile-height="200">
                        @if($notifPropositions["App\Proposition"]->isEmpty())
                            <br>
                            <div class="kt-grid__item kt-grid__item--middle kt-align-center">
                                All caught up!
                                <br>No new notifications.
                            </div>
                        @else
                            @foreach($notifPropositions["App\Proposition"] as $notif)
                                    <a href="{{url("demandeur/mes-demandes/show",$notif->notifiable->demande_id)}}" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-line-chart kt-font-success"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title">
                                                Nouvelle proposition recu
                                            </div>
                                            <div class="kt-notification__item-time">
                                                2 hrs ago
                                            </div>
                                        </div>
                                    </a>
                                    @endforeach
                                @endif
                    </div>
                </div>
                <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                    <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll"
                         data-scroll="true" data-height="300" data-mobile-height="200">
                        @if($notifDevis->isEmpty())
                            <br>
                            <div class="kt-grid__item kt-grid__item--middle kt-align-center">
                                All caught up!
                                <br>No new notifications.
                            </div>
                        @else
                            @foreach($notifDevis as $notif)
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-psd kt-font-success"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            New report has been received
                                        </div>
                                        <div class="kt-notification__item-time">
                                            23 hrs ago
                                        </div>
                                    </div>
                                </a>

                            @endforeach
                        @endif

                    </div>
                </div>
                <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                    <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll"
                         data-scroll="true" data-height="300" data-mobile-height="200">
                        @if($notifMessage->isEmpty())
                            <br>
                            <div class="kt-grid__item kt-grid__item--middle kt-align-center">
                                All caught up!
                                <br>No new notifications.
                            </div>
                        @else

                            @foreach($notifMessage as $notif)
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-psd kt-font-success"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            New report has been received
                                        </div>
                                        <div class="kt-notification__item-time">
                                            23 hrs ago
                                        </div>
                                    </div>
                                </a>

                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>