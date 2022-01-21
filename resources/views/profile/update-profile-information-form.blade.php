@extends('layouts.app')
@section('title','Profile')
@section('body')
<div class="wrapper">
            <div class="wrapper-box">
                <!-- BEGIN: Content -->
                <div class="content">
                    <div class="intro-y flex items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto">
                            My Profile
                        </h2>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <!-- BEGIN: Profile Menu -->
                        <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
                            <div class="intro-y box mt-5 lg:mt-0">
                                <div class="relative flex items-center p-5">
                                    <div class="w-12 h-12 image-fit">
                                        @if(Auth::user()->profile_photo_path)
                                        <img alt="{{ asset('storage/app/public/'.$this->user->profile_photo_path) }}" class="rounded-full" src="{{ asset('storage/app/public/'.$this->user->profile_photo_path) }}" alt="">
                                        @else
                                        <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="{{url('public/dist/images/profile-11.jpg')}}">
                                        @endif
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium text-base">{{ Auth::user()->name }}</div>
                                        <div class="text-gray-600">
                                        @if(Auth::user()->type == 1)
                                        Admin
                                        @elseif(Auth::user()->type == 2)
                                        Producer
                                        @else
                                        Member
                                        @endif
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-300"></i> </a>
                                        <div class="dropdown-menu w-56">
                                            <div class="dropdown-menu__content box dark:bg-dark-1">
                                                <div class="p-4 border-b border-gray-200 dark:border-dark-5 font-medium">Export Options</div>
                                                <div class="p-2">
                                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="activity" class="w-4 h-4 text-gray-700 dark:text-gray-300 mr-2"></i> English </a>
                                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                                        <i data-feather="box" class="w-4 h-4 text-gray-700 dark:text-gray-300 mr-2"></i> Indonesia 
                                                        <div class="text-xs text-white px-1 rounded-full bg-theme-24 ml-auto">10</div>
                                                    </a>
                                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="layout" class="w-4 h-4 text-gray-700 dark:text-gray-300 mr-2"></i> English </a>
                                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="sidebar" class="w-4 h-4 text-gray-700 dark:text-gray-300 mr-2"></i> Indonesia </a>
                                                </div>
                                                <div class="px-3 py-3 border-t border-gray-200 dark:border-dark-5 font-medium flex">
                                                    <button type="button" class="btn btn-primary py-1 px-2">Settings</button>
                                                    <button type="button" class="btn btn-secondary py-1 px-2 ml-auto">View Profile</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-5 border-t border-gray-200 dark:border-dark-5">
                                    <a class="flex items-center text-theme-17 dark:text-white font-medium" href=""> <i data-feather="activity" class="w-4 h-4 mr-2"></i> Personal Information </a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- END: Profile Menu -->
                        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
                            <div class="grid grid-cols-12 gap-6">
                                <!-- BEGIN: Update Profile -->
                                <div class="intro-y box col-span-12 2xl:col-span-6">
                                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">
                                        <h2 class="font-medium text-base mr-auto">
                                            Update Profile 
                                        </h2>
                                        
                                    </div>
                                    <div class="p-5">
                                         <form action="{{ route('user-profile-information.update') }}" method="post" enctype="multipart/form-data">

                                                {{ method_field('PUT') }}
                                                {{ csrf_field() }}
                                            <div class="mt-3"> 
                                                <label for="regular-form-1" class="form-label">First Name</label>
                                                 <input id="regular-form-1" name="first_name" type="text" class="form-control" placeholder="Input text" value="{{ Auth::user()->first_name }}"> 
                                             </div>
                                             
                                              <div class="mt-3"> 
                                                <label for="regular-form-1" class="form-label">Last Name</label>
                                                 <input id="regular-form-1" name="last_name" type="text" class="form-control" placeholder="Input text" value="{{ Auth::user()->last_name }}"> 
                                             </div>

                                             <div class="mt-3"> 
                                                <label for="regular-form-1" class="form-label">Email</label>
                                                 <input id="regular-form-1" name="email" type="text" class="form-control" placeholder="Input text" value="{{ Auth::user()->email }}"> 
                                             </div>

                                             <div class="mt-3"> 
                                                <label for="regular-form-1" class="form-label">Profile</label>
                                                 <input id="regular-form-1" name="photo" type="file" class="form-control"> 
                                             </div>


                                             <div class="mt-3"> 
                                                <button type="submit" class="btn btn-primary">Update</button>
                                             </div>

                                        </form>
                                    </div>
                                </div>
                                <!-- END: Update Profile -->

                                <!-- BEGIN: Update Profile -->
                                <div class="intro-y box col-span-12 2xl:col-span-6">
                                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">
                                        <h2 class="font-medium text-base mr-auto">
                                            Update Password 
                                        </h2>
                                        
                                    </div>
                                    <div class="p-5">
                                         <form action="{{ route('user-password.update') }}" method="POST">
                                                {{ method_field('PUT') }}
                                                {{ csrf_field() }}
                                            <div class="mt-3"> 
                                                <label for="regular-form-1" class="form-label">Current Password</label>
                                                 <input id="regular-form-1" name="current_password" type="text" class="form-control" placeholder="Current Password"> 
                                             </div>

                                             <div class="mt-3"> 
                                                <label for="regular-form-1" class="form-label">New Password</label>
                                                 <input id="regular-form-1" name="password" type="text" class="form-control" placeholder="New Password"> 
                                             </div>

                                             <div class="mt-3"> 
                                                <label for="regular-form-1" class="form-label">Confirm Password</label>
                                                 <input id="regular-form-1" name="password_confirmation" type="text" class="form-control" placeholder="Confirm Password"> 
                                             </div>

                                             <div class="mt-3"> 
                                                <button type="submit" class="btn btn-primary">Update</button>
                                             </div>

                                        </form>
                                    </div>
                                </div>
                                <!-- END: Update Profile -->
                            
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Content -->
            </div>
        </div>
@endsection
