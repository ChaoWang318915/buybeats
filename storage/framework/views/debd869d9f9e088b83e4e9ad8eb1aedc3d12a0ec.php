<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="<?php echo e(url('public/dist/images/logo.svg')); ?>" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Rubick admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="<?php echo e(url('public/dist/css/app.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(url('public/DataTables-1.11.3/css/dataTables.bootstrap.min.css')); ?>" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="main">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="<?php echo e(route('dashboard')); ?>" class="flex mr-auto">
                    <img alt="BuyBeats" class="w-6" src="<?php echo e(url('public/dist/images/logo.svg')); ?>">
                </a>
                <a href="<?php echo e(route('dashboard')); ?>" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-29 py-5 hidden">
                <li>
                    <a href="<?php echo e(route('dashboard')); ?>" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard <i data-feather="chevron-down" class="menu__sub-icon transform rotate-180"></i> </div>
                    </a>
                </li>
           
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="<?php echo e(route('dashboard')); ?>" class="intro-x flex items-center pl-5 pt-4">
                    <img alt="BuyBeats" class="w-6" src="<?php echo e(url('public/dist/images/logo.svg')); ?>">
                    <span class="hidden xl:block text-white text-lg ml-3"> Buy<span class="font-medium">Beats</span> </span>
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                  <li>
                        <a href="<?php echo e(route('dashboard')); ?>" class="side-menu <?php echo e(Route::currentRouteName() == 'dashboard' ? 'side-menu--active' : ''); ?>">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title">Dashboard </div>
                        </a>
                    </li>
                    
                    <?php if(Auth::user()->type == 1): ?>
                    <li>
                        <a href="javascript:;.html" class="side-menu <?php echo e(Route::currentRouteName() == 'user-list' ? 'side-menu--active' : ''); ?>">
                            <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                            <div class="side-menu__title">
                                User Management 
                                <div class="side-menu__sub-icon transform rotate-180"> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="<?php echo e(Route::currentRouteName() == 'user-list' ? 'side-menu__sub-open' : ''); ?>">

                            <li>
                                <a href="<?php echo e(route('user-list')); ?>" class="side-menu <?php echo e(Route::currentRouteName() == 'user-list' ? 'side-menu--active' : ''); ?>">
                                    <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                                    <div class="side-menu__title"> User List </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>

                    <?php if(Auth::user()->type == 1 || Auth::user()->type == 2): ?>

                    <li>
                        <a href="javascript:;.html" class="side-menu side-menu <?php echo e(Route::currentRouteName() == 'upload-beats' ? 'side-menu--active' : ''  ||  Route::currentRouteName() == 'list-beats' ? 'side-menu--active' : ''); ?>

                        ">
                            <div class="side-menu__icon"> <i data-feather="music"></i> </div>
                            <div class="side-menu__title">
                                <?php if(Auth::user()->type == 1): ?>
                                Beats Collection
                                <?php elseif(Auth::user()->type == 2): ?>
                                My Beats
                                <?php endif; ?>
                                
                                <div class="side-menu__sub-icon transform rotate-180"> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="<?php echo e(Route::currentRouteName() == 'upload-beats' ? 'side-menu__sub-open' : ''  || Route::currentRouteName() == 'list-beats' ? 'side-menu__sub-open' : ''); ?>">

                            <li>
                                <?php if(Auth::user()->type == 2): ?>
                                <a href="<?php echo e(route('upload-beats')); ?>" class="side-menu <?php echo e(Route::currentRouteName() == 'upload-beats' ? 'side-menu--active' : ''); ?>">
                                    <div class="side-menu__icon"> <i data-feather="plus-square"></i> </div>
                                    <div class="side-menu__title"> Upload Beats </div>
                                </a>
                                <?php endif; ?>
                                                
                                <a href="<?php echo e(route('list-beats')); ?>" class="side-menu <?php echo e(Route::currentRouteName() == 'list-beats' ? 'side-menu--active' : ''); ?>">
                                    <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                                    <div class="side-menu__title"> List Beats </div>
                                </a>

                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>

                    <?php if(Auth::user()->type == 2): ?>
                    <li>
                        <a href="<?php echo e(route('my-sales')); ?>" class="side-menu <?php echo e(Route::currentRouteName() == 'my-sales' ? 'side-menu--active' : ''); ?>">
                            <div class="side-menu__icon"> <i data-feather="dollar-sign"></i> </div>
                            <div class="side-menu__title">My Sales </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('collection_of_artist_beats',str_replace(' ', '',Auth::user()->user_name))); ?>" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                            <div class="side-menu__title">My Profile </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('my-settings')); ?>" class="side-menu <?php echo e(Route::currentRouteName() == 'my-settings' ? 'side-menu--active' : ''); ?>">
                            <div class="side-menu__icon"> <i data-feather="settings"></i> </div>
                            <div class="side-menu__title">My Settings </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('beat-licenses')); ?>" class="side-menu <?php echo e(Route::currentRouteName() == 'beat-licenses' ? 'side-menu--active' : ''); ?>">
                            <div class="side-menu__icon"> <i data-feather="pause"></i> </div>
                            <div class="side-menu__title">Beat Licenses </div>
                        </a>
                    </li>
                    <?php endif; ?>

                    <?php if(Auth::user()->type == 3): ?>
                    <li>
                        <a href="<?php echo e(route('buy-beats')); ?>" class="side-menu <?php echo e(Route::currentRouteName() == 'buy-beats' ? 'side-menu--active' : ''); ?>">
                            <div class="side-menu__icon"> <i data-feather="dollar-sign"></i> </div>
                            <div class="side-menu__title">Buy Beats </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('my-orders')); ?>" class="side-menu <?php echo e(Route::currentRouteName() == 'my-orders' ? 'side-menu--active' : ''); ?>">
                            <div class="side-menu__icon"> <i data-feather="shopping-bag"></i> </div>
                            <div class="side-menu__title">My Orders </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('my-favorites')); ?>" class="side-menu <?php echo e(Route::currentRouteName() == 'my-favorites' ? 'side-menu--active' : ''); ?>">
                            <div class="side-menu__icon"> <i data-feather="heart"></i> </div>
                            <div class="side-menu__title">My Favorites </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('my-follows')); ?>" class="side-menu <?php echo e(Route::currentRouteName() == 'my-follows' ? 'side-menu--active' : ''); ?>">
                            <div class="side-menu__icon"> <i data-feather="filter"></i> </div>
                            <div class="side-menu__title">My Follows </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('special-offers')); ?>" class="side-menu <?php echo e(Route::currentRouteName() == 'special-offers' ? 'side-menu--active' : ''); ?>">
                            <div class="side-menu__icon"> <i data-feather="percent"></i> </div>
                            <div class="side-menu__title">Special Offers </div>
                        </a>
                    </li>
                    <?php endif; ?>


                    <?php if(Auth::user()->type == 2 || Auth::user()->type == 3): ?>
                    <li>
                        <a href="<?php echo e(route('support-help')); ?>" class="side-menu <?php echo e(Route::currentRouteName() == 'support-help' ? 'side-menu--active' : ''); ?>">
                            <div class="side-menu__icon"> <i data-feather="phone-forwarded"></i> </div>
                            <div class="side-menu__title">Support Help </div>
                        </a>
                    </li>
                    <?php endif; ?>

                    <?php if(Auth::user()->type == 1): ?>
                    <li>
                        <a href="javascript:;.html" class="side-menu side-menu <?php echo e(Route::currentRouteName() == 'upload-content' ? 'side-menu--active' : ''  ||  Route::currentRouteName() == 'list-content' ? 'side-menu--active' : '' ||  Route::currentRouteName() == 'edit-content' ? 'side-menu--active' : ''); ?>

                        ">
                            <div class="side-menu__icon"> <i data-feather="book"></i> </div>
                            <div class="side-menu__title">
                               Content
                                
                                <div class="side-menu__sub-icon transform rotate-180"> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="<?php echo e(Route::currentRouteName() == 'upload-content' ? 'side-menu__sub-open' : ''  || Route::currentRouteName() == 'list-content' ? 'side-menu__sub-open' : '' || Route::currentRouteName() == 'edit-content' ? 'side-menu__sub-open' : ''); ?>">

                            <li>
                                <a href="<?php echo e(route('upload-content')); ?>" class="side-menu <?php echo e(Route::currentRouteName() == 'upload-content' ? 'side-menu--active' : ''); ?>">
                                    <div class="side-menu__icon"> <i data-feather="plus-square"></i> </div>
                                    <div class="side-menu__title"> Upload Content </div>
                                </a>
                                                
                                <a href="<?php echo e(route('list-content')); ?>" class="side-menu <?php echo e(Route::currentRouteName() == 'list-content' ? 'side-menu--active' : ''); ?>">
                                    <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                                    <div class="side-menu__title"> List Content </div>
                                </a>

                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>

                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                
                <?php echo $__env->make('navigation-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->yieldContent('body'); ?>

                
            </div>
            <!-- END: Content -->
        </div>

        <!-- BEGIN: JS Assets-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="<?php echo e(url('public/dist/js/app.js')); ?>"></script>
        <script src="<?php echo e(url('public/DataTables-1.11.3/js/dataTables.bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(url('public/DataTables-1.11.3/js/dataTables.bootstrap4.min.js')); ?>"></script>
        <!-- END: JS Assets-->
        <!-- END: JS Assets-->
        <script src="<?php echo e(url('public/dist/js/ckeditor-classic.js')); ?>"></script>

        <script type="text/javascript">
        $("#success-alert").fadeTo(2000, 1000).slideUp(1000, function(){
          $("#success-alert").slideUp(1000);
        });
      </script>

        <?php echo $__env->yieldContent('scripts'); ?>
    </body>
</html><?php /**PATH /home/buybeats/public_html/resources/views/layouts/app.blade.php ENDPATH**/ ?>