
<?php $__env->startSection('title','Content List'); ?>
<?php $__env->startSection('body'); ?>
<!-- BEGIN: Content -->
<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Content List
        </h2>
    </div>
    <!-- BEGIN: HTML Table Data -->
    <div class="intro-y box p-5 mt-5">

        <?php if(Session::has('success')): ?>
        <div class="alert alert-primary alert-dismissible show flex items-center mb-2" id="success-alert" role="alert"> <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> <?php echo e(Session::get('success')); ?> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <i data-feather="x" class="w-4 h-4"></i> </button> </div>
        <?php endif; ?>


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
                        <?php if(!empty($dataContent) && (count($dataContent)>0)): ?>
                        <?php $__currentLoopData = $dataContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="border-b dark:border-dark-5"><?php echo e($loop->index+1); ?></td>
                            <td class="border-b dark:border-dark-5"><?php echo $list->category_name; ?></td>
                            <td class="border-b dark:border-dark-5"><?php echo $list->content; ?></td>
                            <td class="border-b dark:border-dark-5">
                                <?php if($list->status == 1): ?>
                                <div class="flex text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                <?php elseif($list->status == 2): ?>
                                <div class="flex text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                                <?php else: ?>
                                N/A
                                <?php endif; ?>
                            </td>
                            <td class="border-b dark:border-dark-5">
                                <div class="flex">
                                    <a class="flex items-center mr-3" href="<?php echo e(route('edit-content',encrypt($list->id))); ?>"> <i data-feather="edit" class="w-4 h-4 mr-1"></i> Edit </a>
                                    <!-- <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a> -->
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </tbody>
                </table>

            </div> 
        </div>
    </div>
    <!-- END: HTML Table Data -->
</div>
<!-- END: Content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/buybeats/public_html/resources/views/content/list.blade.php ENDPATH**/ ?>