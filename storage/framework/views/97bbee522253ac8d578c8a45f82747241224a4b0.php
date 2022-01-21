
<?php $__env->startSection('title','Buy Beats | Sell Beats | Beat Battle Online'); ?>
<?php $__env->startSection('frontend-body'); ?>

<!-- home body content -->
	
			<!-- slider -->
			<section class="row">
				<div class="col-12" style="color: #ffffff;text-align: justify;">
					<h2 style="color: #fff;"><?php echo e($dataContent->category_name); ?></h2 style="color: #fff;">
					<p style="color: #ffffff;text-align: justify;"><?php echo $dataContent->content; ?></p>
				</div>
			</section>
			<!-- end slider -->
		
	<!-- end home body content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/buybeats/public_html/resources/views/frontend/view_content.blade.php ENDPATH**/ ?>