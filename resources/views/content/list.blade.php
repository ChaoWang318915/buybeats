@extends('layouts.app')
@section('title','Content List')
@section('body')
<!-- BEGIN: Content -->
<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Content List
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
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Category Name</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Content</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Status</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($dataContent) && (count($dataContent)>0))
                        @foreach($dataContent as $key=> $list)
                        <tr>
                            <td class="border-b dark:border-dark-5">{{$loop->index+1}}</td>
                            <td class="border-b dark:border-dark-5">{!! $list->category_name !!}</td>
                            <td class="border-b dark:border-dark-5">{!! $list->content !!}</td>
                            <td class="border-b dark:border-dark-5">
                                @if($list->status == 1)
                                <div class="flex text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                @elseif($list->status == 2)
                                <div class="flex text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                                @else
                                N/A
                                @endif
                            </td>
                            <td class="border-b dark:border-dark-5">
                                <div class="flex">
                                    <a class="flex items-center mr-3" href="{{route('edit-content',encrypt($list->id))}}"> <i data-feather="edit" class="w-4 h-4 mr-1"></i> Edit </a>
                                    <!-- <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a> -->
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