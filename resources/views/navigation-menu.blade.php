<!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active" style="text-transform: capitalize;">
                        @php
                            $replace = array("-", ".");
                            echo str_replace($replace, " ", Str::ucfirst(trans(Route::currentRouteName())))
                        @endphp
                        
                        </a> 
                    </div>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Search -->
                    <div class="intro-x relative mr-3 sm:mr-6">
                        <div class="search hidden sm:block">
                            <input type="text" class="search__input form-control border-transparent placeholder-theme-13" placeholder="Search...">
                            <i data-feather="search" class="search__icon dark:text-gray-300"></i> 
                        </div>
                        <a class="notification sm:hidden" href=""> <i data-feather="search" class="notification__icon dark:text-gray-300"></i> </a>
                        <div class="search-result">
                            <div class="search-result__content">
                                <div class="search-result__content__title">Pages</div>
                                <div class="mb-5">
                                    <a href="" class="flex items-center">
                                        <div class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="inbox"></i> </div>
                                        <div class="ml-3">Mail Settings</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 bg-theme-17 text-theme-11 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="users"></i> </div>
                                        <div class="ml-3">Users & Permissions</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 bg-theme-14 text-theme-10 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="credit-card"></i> </div>
                                        <div class="ml-3">Transactions Report</div>
                                    </a>
                                </div>
                                <div class="search-result__content__title">Users</div>
                                <div class="mb-5">
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="public/dist/images/profile-11.jpg">
                                        </div>
                                        <div class="ml-3">{{ Auth::user()->name }}</div>
                                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">kevinspacey@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="public/dist/images/profile-8.jpg">
                                        </div>
                                        <div class="ml-3">Al Pacino</div>
                                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">alpacino@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="public/dist/images/profile-11.jpg">
                                        </div>
                                        <div class="ml-3">Kate Winslet</div>
                                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">katewinslet@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="public/dist/images/profile-14.jpg">
                                        </div>
                                        <div class="ml-3">Christian Bale</div>
                                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">christianbale@left4code.com</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Search -->
    
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8">
                        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false">
                            @if(Auth::user()->profile_photo_path)
                            
                            <img alt="BuyBeats" src="{{ asset('storage/app/public/'.Auth::user()->profile_photo_path) }}">
                            @else
                            <img alt="BuyBeats" src="{{url('public/dist/images/profile-11.jpg')}}">
                            @endif
                        </div>
                        <div class="dropdown-menu w-56">
                            <div class="dropdown-menu__content box bg-theme-26 dark:bg-dark-6 text-white">
                                <div class="p-4 border-b border-theme-27 dark:border-dark-3">
                                    <div class="font-medium">{{ Auth::user()->name }}</div>
                                    <div class="text-xs text-theme-28 mt-0.5 dark:text-gray-600">
                                        @if(Auth::user()->type == 1)
                                        Admin
                                        @elseif(Auth::user()->type == 2)
                                        Producer
                                        @else
                                        Member
                                        @endif
                                    </div>
                                </div>
                                <div class="p-2">
                                    <a href="{{ route('profile.show') }}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>

                                    <!-- <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>

                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                                    
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a> -->
                                </div>
                                <div class="p-2 border-t border-theme-27 dark:border-dark-3">
                                    <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->