@extends('layouts.app')
@section('title','User List')
@section('body')
<!-- BEGIN: Content -->
                <div class="content">
                    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto">
                            User List
                        </h2>
                    </div>
                    <!-- BEGIN: HTML Table Data -->
                    <div class="intro-y box p-5 mt-5">

                        <div class="overflow-x-auto scrollbar-hidden">
                            <div class="overflow-x-auto">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Sl</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Profile</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">First Name</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Last Name</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Email</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($UserList) && (count($UserList)>0))
                                        @foreach($UserList as $key=> $list)
                                        <tr>
                                            <td class="border-b dark:border-dark-5">{{$loop->index+1}}</td>
                                            <td class="border-b dark:border-dark-5">
                                                

                                                   @if($list->profile_photo_path)
                                                    <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                                                    <img alt="{{$list->name}}" class="rounded-full" src="{{ asset('storage/app/public/'.$list->profile_photo_path) }}">
                                                    </div>
                                                    @else
                                                    <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                                                        <img alt="{{$list->name}}" class="rounded-full" src="{{url('public/dist/images/profile-2.jpg')}}">
                                                    </div>
                                                    @endif
                                            </td>
                                            <td class="border-b dark:border-dark-5">{{$list->first_name}}</td>
                                            <td class="border-b dark:border-dark-5">{{$list->last_name}}</td>
                                            <td class="border-b dark:border-dark-5">{{$list->email}}</td>
                                            <td class="border-b dark:border-dark-5">
                                                @if($list->type == 2)
                                                Producer
                                                @else
                                                Member
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div> 
                        </div>
                    </div>
                    <!-- END: HTML Table Data -->
                </div>
                <!-- END: Content -->
@endsection