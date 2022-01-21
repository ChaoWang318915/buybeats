@extends('layouts.app')
@section('title','Update Content')
@section('body')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Edit Content
    </h2>
</div>

<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-12">


        <!-- BEGIN: Form Layout -->
        <div class="intro-y box p-5">
            <form action="{{ route('content-update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" class="form-control" name="id" hidden="" value="{!! $dataContent->id !!}" required>
             <div class="grid grid-cols-12 gap-2">
                <div class="col-span-6">
                    <label for="beat-title" class="form-label">Category Name</label>
                    <input type="text" class="form-control" name="category_name" placeholder="Category Name" value="{!! $dataContent->category_name !!}" required>
                </div>
                <div class="col-span-6">
                    <label for="beat-title" class="form-label">Status</label>
                    <select class="form-select" aria-label="Default select example" name="status" required>
                        @if($dataContent->status == 1)
                        <option value="1">Active</option>
                        <option value="2">InActive</option>
                        @elseif($dataContent->status == 2)
                        <option value="2">InActive</option>
                        <option value="1">Active</option>
                        @endif
                        
                    </select>
                </div>

                <div class="col-span-12">
                    <label for="Beat Description" class="form-label">Content</label>
                    <textarea class="editor"  name="content">{!! $dataContent->content !!}</textarea>
                </div>

                <div class="col-span-12">
                    <div class="text-right mt-5">
                        <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24">Update</button>
                    </div>
                </div>

            </div>
        </form> 
        </div>
        <!-- END: Form Layout -->
    </div>
</div>
@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@endsection