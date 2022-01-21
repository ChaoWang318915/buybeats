
<?php $__env->startSection('title','Beats List'); ?>
<?php $__env->startSection('body'); ?>
<!-- BEGIN: Content -->
                <div class="content">
                    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto">
                            Beats List
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
                                        <?php if(!empty($BeatsCollection) && (count($BeatsCollection)>0)): ?>
                                        <?php $__currentLoopData = $BeatsCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="border-b dark:border-dark-5"><?php echo e($loop->index+1); ?></td>
                                            <td class="border-b dark:border-dark-5">
                                                <div class="w-12 h-12 image-fit">
                                                    <?php if($list->beat_image): ?>
                                                    <img alt="<?php echo e($list->beat_title); ?>" class="rounded-full" src="<?php echo e(asset('storage/app/public/beat-image/'.$list->beat_image)); ?>" alt="">
                                                    <?php else: ?>
                                                    <img alt="beats-image" class="rounded-full" src="<?php echo e(url('public/dist/images/profile-11.jpg')); ?>">
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                            
                                           
                                            
                                            <td class="border-b dark:border-dark-5"><?php echo e($list->beat_title); ?></td>
                                            <td class="border-b dark:border-dark-5"><?php echo e($list->beat_type); ?></td>
                                            <td class="border-b dark:border-dark-5"><?php echo e($list->beat_tempo); ?></td>
                                            <td class="border-b dark:border-dark-5"><?php echo e($list->beat_genre); ?></td>
                                            <td class="border-b dark:border-dark-5"><?php echo e($list->beat_price); ?></td>
                                             <td class="border-b dark:border-dark-5">
                                                <div class="w-12 h-12 image-fit">
                                                    <?php if($list->beat_mp3): ?>
                                                    <audio style="width: 140px;" controls=""><source src="<?php echo e(asset('storage/app/public/beat-file/'.$list->beat_mp3)); ?>"></audio>
                                                    <?php else: ?>
                                                    No Audio File
                                                    <?php endif; ?>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/buybeats/public_html/resources/views/beats/index.blade.php ENDPATH**/ ?>