
<?php $__env->startSection('title','Upload Content'); ?>
<?php $__env->startSection('body'); ?>
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Upload Content
    </h2>
</div>

<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-12">


        <!-- BEGIN: Form Layout -->
        <div class="intro-y box p-5">
            <form action="<?php echo e(route('content-store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/buybeats/public_html/resources/views/content/create.blade.php ENDPATH**/ ?>