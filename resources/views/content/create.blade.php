@extends('layouts.app')
@section('title','Upload Content')
@section('body')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Upload Content
    </h2>
</div>

<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-12">


        <!-- BEGIN: Form Layout -->
        <div class="intro-y box p-5">
            <form action="{{ route('content-store') }}" method="post" enctype="multipart/form-data">
                @csrf
             <div class="grid grid-cols-12 gap-2">
                <div class="col-span-6">
                    <label for="beat-title" class="form-label">Category Name</label>
                    <input type="text" class="form-control" name="category_name" placeholder="Category Name" required>
                </div>
                <div class="col-span-6">
                    <label for="beat-title" class="form-label">Status</label>
                    <select class="form-select" aria-label="Default select example" name="status" required>
                        <option value="1">Active</option>
                        <option value="2">InActive</option>
                    </select>
                </div>

                <div class="col-span-12">
                    <label for="Beat Description" class="form-label">Content</label>
                    <textarea class="editor"  name="content"></textarea>
                </div>

                <div class="col-span-12">
                    <div class="text-right mt-5">
                        <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24">Save</button>
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