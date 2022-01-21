
<?php $__env->startSection('title','User List'); ?>
<?php $__env->startSection('body'); ?>
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
                                        <?php if(!empty($UserList) && (count($UserList)>0)): ?>
                                        <?php $__currentLoopData = $UserList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="border-b dark:border-dark-5"><?php echo e($loop->index+1); ?></td>
                                            <td class="border-b dark:border-dark-5">
                                                

                                                   <?php if($list->profile_photo_path): ?>
                                                    <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                                                    <img alt="<?php echo e($list->name); ?>" class="rounded-full" src="<?php echo e(asset('storage/app/public/'.$list->profile_photo_path)); ?>">
                                                    </div>
                                                    <?php else: ?>
                                                    <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                                                        <img alt="<?php echo e($list->name); ?>" class="rounded-full" src="<?php echo e(url('public/dist/images/profile-2.jpg')); ?>">
                                                    </div>
                                                    <?php endif; ?>
                                            </td>
                                            <td class="border-b dark:border-dark-5"><?php echo e($list->first_name); ?></td>
                                            <td class="border-b dark:border-dark-5"><?php echo e($list->last_name); ?></td>
                                            <td class="border-b dark:border-dark-5"><?php echo e($list->email); ?></td>
                                            <td class="border-b dark:border-dark-5">
                                                <?php if($list->type == 2): ?>
                                                Producer
                                                <?php else: ?>
                                                Member
                                                <?php endif; ?>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/buybeats/public_html/resources/views/user/index.blade.php ENDPATH**/ ?>