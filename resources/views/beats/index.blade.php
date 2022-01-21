@extends('layouts.app')
@section('title','Beats List')
@section('body')
<!-- BEGIN: Content -->
                <div class="content">
                    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto">
                            Beats List
                        </h2>
                    </div>
                    <!-- BEGIN: HTML Table Data -->
                    <div class="intro-y box p-5 mt-5">

                        @if (Session::has('success'))
                        <div class="alert alert-primary alert-dismissible show flex items-center mb-2" id="success-alert" role="alert"> <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> {{Session::get('success')}} <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <i data-feather="x" class="w-4 h-4"></i> </button> </div>
                        @endif


                        <div class="overflow-x-auto scrollbar-hidden">
                            <div class="overflow-x-auto">
                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Sl</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Image</th>
                                            
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Title</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Type</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Tempo</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Genre</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Price</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Beats Music</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($BeatsCollection) && (count($BeatsCollection)>0))
                                        @foreach($BeatsCollection as $key=> $list)
                                        <tr>
                                            <td class="border-b dark:border-dark-5">{{$loop->index+1}}</td>
                                            <td class="border-b dark:border-dark-5">
                                                <div class="w-12 h-12 image-fit">
                                                    @if($list->beat_image)
                                                    <img alt="{{$list->beat_title}}" class="rounded-full" src="{{ asset('storage/app/public/beat-image/'.$list->beat_image) }}" alt="">
                                                    @else
                                                    <img alt="beats-image" class="rounded-full" src="{{url('public/dist/images/profile-11.jpg')}}">
                                                    @endif
                                                </div>
                                            </td>
                                            
                                           
                                            
                                            <td class="border-b dark:border-dark-5">{{$list->beat_title}}</td>
                                            <td class="border-b dark:border-dark-5">{{$list->beat_type}}</td>
                                            <td class="border-b dark:border-dark-5">{{$list->beat_tempo}}</td>
                                            <td class="border-b dark:border-dark-5">{{$list->beat_genre}}</td>
                                            <td class="border-b dark:border-dark-5">{{$list->beat_price}}</td>
                                             <td class="border-b dark:border-dark-5">
                                                <div class="w-12 h-12 image-fit">
                                                    @if($list->beat_mp3)
                                                    <audio style="width: 140px;" controls=""><source src="{{ asset('storage/app/public/beat-file/'.$list->beat_mp3) }}"></audio>
                                                    @else
                                                    No Audio File
                                                    @endif
                                                </div>
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