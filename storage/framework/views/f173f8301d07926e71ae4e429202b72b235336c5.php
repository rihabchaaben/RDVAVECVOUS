<?php $__env->startSection('content'); ?>


    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="<?php echo e(asset('assets/app/custom/chat/chat.css')); ?>" rel="stylesheet"
          type="text/css"/>

    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <!--Begin::App-->
            <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
                <!--Begin:: App Aside Mobile Toggle-->
                <button class="kt-app__aside-close" id="kt_chat_aside_close">
                    <i class="la la-close"></i>
                </button>
                <!--End:: App Aside Mobile Toggle-->

                <!--Begin:: App Aside-->
                <div class="kt-grid__item kt-app__toggle kt-app__aside kt-app__aside--lg kt-app__aside--fit"
                     id="kt_chat_aside">
                    <!--begin::Portlet-->
                    <div class="kt-portlet kt-portlet--last">
                        <div class="kt-portlet__body">

                            <div class="kt-widget kt-widget--users ">
                                <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll"
                                     data-scroll="true" data-height="300" data-mobile-height="200">
                                    <div class="kt-widget__items">
                                        <?php $__currentLoopData = $userList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="kt-widget__item">
                                <span class="kt-media kt-media--circle">
                                    <?php if($user->userFrom->demandeur->avatar): ?>
                                        <img src="<?php echo e(asset('storage/'.$user->userFrom->demandeur->avatar)); ?>"
                                             alt="image">
                                    <?php else: ?>
                                        <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder"><?php echo e(ucfirst($user->userFrom->demandeur->nom[0])); ?></span>
                                    <?php endif; ?>
                                </span>
                                                <div class="kt-widget__info">
                                                    <div class="kt-widget__section">
                                                        <a href="<?php echo e(route('pro.chat.show',[$user->proposition_id,'#last_chat'])); ?>"
                                                           class="kt-widget__username"><?php echo e($user->userFrom->demandeur->nom); ?></a>
                                                        <?php if(!$user->readed_at): ?><span
                                                                class="kt-badge kt-badge--danger kt-font-bold"> 1 </span><?php endif; ?>
                                                        
                                                    </div>

                                                    <span class="kt-widget__desc">
                                        
                                    </span>
                                                </div>
                                                <div class="kt-widget__action">
                                                    <span class="kt-widget__date"><?php echo e($user->created_at->diffForHumans()); ?></span>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                    </div>
                                    <div class="ps__rail-y" style="top: 0px; height: 62px; right: -2px;">
                                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Portlet-->
                </div>
                <!--End:: App Aside-->


                <!--Begin:: App Content-->
                <div class="kt-grid__item kt-grid__item--fluid kt-app__content" id="kt_chat_content">
                    <div class="kt-chat">
                        <div class="kt-portlet kt-portlet--head-lg kt-portlet--last">
                            <div class="kt-portlet__head bg-blue">
                                <div class="kt-chat__head ">
                                    <div class="kt-chat__left">
                                        <!--begin:: Aside Mobile Toggle -->
                                        <button type="button"
                                                class="btn btn-clean btn-sm btn-icon btn-icon-md kt-hidden-desktop"
                                                id="kt_chat_aside_mobile_toggle">
                                            <i class="flaticon2-open-text-book"></i>
                                        </button>
                                        <!--end:: Aside Mobile Toggle-->
                                    </div>
                                    <div class="kt-chat__center">

                                        <div class="kt-chat__label">
                                            <a href="#"
                                               class="kt-chat__title">
                                                <?php echo e($messages->first()->userTo->name); ?>

                                            </a>
                                            <span class="kt-chat__status">
                                    <?php echo e($messages->first()->proposition->demande->events->first()->titre); ?>

                                </span>
                                        </div>

                                    </div>

                                    <div class="kt-chat__right">

                                    </div>
                                </div>
                            </div>

                            <div class="kt-portlet__body">
                                <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll"
                                     data-scroll="true" data-height="300" data-mobile-height="200">
                                    <div class="kt-chat__messages">
                                        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($msg->userFrom->demandeur): ?>
                                                <div class="kt-chat__message">
                                                    <div class="kt-chat__user">
                                    <span class="kt-media kt-media--circle kt-media--sm">
                                        <?php if($msg->userFrom->demandeur->avatar): ?>
                                            <img src="<?php echo e(asset('storage/'.$msg->userFrom->demandeur->avatar)); ?>"
                                                 alt="image">
                                        <?php else: ?>
                                            <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder"><?php echo e(ucfirst($user->userFrom->demandeur->nom[0])); ?></span>
                                        <?php endif; ?>
                                    </span>
                                                        <a href="#"
                                                           class="kt-chat__username"><?php echo e($msg->userFrom->demandeur->nom); ?></a>
                                                        <span class="kt-chat__datetime"><?php echo e($msg->created_at->diffForHumans()); ?></span>
                                                    </div>
                                                    <div class="kt-chat__text kt-bg-light-success">
                                                        <?php echo e($msg->message); ?>

                                                    </div>
                                                </div>
                                            <?php else: ?>
                                                <div class="kt-chat__message kt-chat__message--right">
                                                    <div class="kt-chat__user">
                                                        <span class="kt-chat__datetime"><?php echo e($msg->created_at->diffForHumans()); ?></span>
                                                        
                                                        <a href="#" class="kt-chat__username">Vous</a>
                                                        <span class="kt-media kt-media--circle kt-media--sm">
                                        <?php if($msg->userFrom->professionnel->avatar): ?>
                                                                <img src="<?php echo e(asset('storage/'.$msg->userFrom->professionnel->avatar)); ?>"
                                                                     alt="image">
                                                            <?php else: ?>
                                                                <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder">T</span>
                                                            <?php endif; ?>
                                    </span>
                                                    </div>
                                                    <div class="kt-chat__text kt-bg-light-brand">
                                                        <?php echo e($msg->message); ?>

                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                    </div>
                                    <div class="ps__rail-y" style="top: 0px; height: 396px; right: -2px;">
                                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 161px;"></div>
                                    </div>
                                    <div id="last_chat">

                                    </div>
                                </div>
                            </div>
                            <form action="<?php echo e(route('pro.chat.store','#last_chat')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="proposition_id" value="<?php echo e(request()->id); ?>">
                                <input type="hidden" name="from_id" value="<?php echo e($messages->first()->userTo->id); ?>">
                                <input type="hidden" name="to_id" value="<?php echo e($messages->first()->userFrom->id); ?>">

                                <div class="kt-portlet__foot">
                                    <div class="kt-chat__input">
                                        <div class="kt-chat__editor">
                                            <textarea style="height: 50px;color:black" placeholder="Ecrire ici..."
                                                      name="message"></textarea>
                                        </div>
                                        <div class="kt-chat__toolbar">
                                            <div class="kt_chat__tools">
                                                
                                                
                                                
                                            </div>
                                            <div class="kt_chat__actions">
                                                <button type="submit"
                                                        class="btn btn-brand btn-md btn-upper btn-bold kt-chat__reply">
                                                    Répondre
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End:: App Content-->
            </div>
            <!--End::App-->    </div>
        <!-- end:: Content -->                </div>

<?php $__env->startSection('script'); ?>

    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#5d78ff",
                    "dark": "#282a3c",
                    "light": "#ffffff",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                    "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                }
            }
        };
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front.professionnel.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/rdvavecvbk/clients/resources/views/professionnel/chats/show.blade.php ENDPATH**/ ?>