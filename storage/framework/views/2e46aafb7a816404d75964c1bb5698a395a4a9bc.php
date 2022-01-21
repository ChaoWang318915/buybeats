
<?php $__env->startSection('title','BuyBeats::Release'); ?>
<?php $__env->startSection('frontend-body'); ?>
	<!-- release page body content -->
		<div class="row row--grid">
				<!-- breadcrumb -->
				<!--<div class="col-12">-->
				<!--	<ul class="breadcrumb">-->
				<!--		<li class="breadcrumb__item"><a href="index.html">Home</a></li>-->
				<!--		<li class="breadcrumb__item breadcrumb__item--active">Releases</li>-->
				<!--	</ul>-->
				<!--</div>-->
				<!-- end breadcrumb -->

				<!-- title -->
				<!-- <div class="col-12">
					<div class="main__title main__title--page">
						<h1>Releases</h1>
					</div>
				</div> -->
				<!-- end title -->
			</div>

			<!-- releases -->
			<div class="row row--grid">
				<div class="col-12">
					<div class="main__filter">
						<form action="#" class="main__filter-search">
							<input type="text" placeholder="Search...">
							<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"/></svg></button>
						</form>

						<div class="main__filter-wrap">
							<select class="main__select" name="genres">
								<option value="all">All artists</option>
								<option value="legacy">Legacy artists</option>
								<option value="active">Active artists</option>
							</select>

							<select class="main__select" name="years">
								<option value="All genres">All genres</option>
								<option value="1">Alternative</option>
								<option value="2">Blues</option>
								<option value="3">Classical</option>
								<option value="4">Country</option>
								<option value="5">Electronic</option>
								<option value="6">Hip-Hop/Rap</option>
								<option value="7">Indie</option>
								<option value="8">Jazz</option>
								<option value="8">Latino</option>
								<option value="8">R&B/Soul</option>
								<option value="8">Rock</option>
							</select>
						</div>

						<!-- <div class="slider-radio">
							<input type="radio" name="grade" id="featured" checked="checked"><label for="featured">Featured</label>
							<input type="radio" name="grade" id="popular"><label for="popular">Popular</label>
							<input type="radio" name="grade" id="newest"><label for="newest">Newest</label>
						</div> -->
					</div>

					<div class="row row--grid main__list--playlist main__list--dashbox">
						
						<!-- all release beats -->
						<?php if(!empty($collections) && (count($collections) > 0 )): ?>
						<?php $__currentLoopData = $collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

						<div class="col-6 col-sm-4 col-lg-2">
							<div class="album">
							    
								
								
								<div class="album__cover">
									<img src="<?php echo e(asset('storage/app/public/beat-image/'.$collection->beat_image)); ?>" alt="<?php echo e($collection->beat_title); ?>">
									<span class="single-item">
										<a data-playlist data-title="<?php echo e($collection->beat_title); ?>" data-artist="<?php echo e(str_replace(' ', '',$collection->user->user_name)); ?>" data-img="<?php echo e(asset('storage/app/public/beat-image/'.$collection->beat_image)); ?>" href="<?php echo e(asset('storage/app/public/beat-file/'.$collection->beat_mp3)); ?>" class="single-item__cover">
										<!-- <img src="img/covers/cover.svg" alt=""> -->
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"/></svg>
									</a>
									</span>	
								</div>
								
								<div class="album__title">
									<h3><a href="<?php echo e(route('collection_of_artist_beats',str_replace(' ', '',$collection->user->user_name))); ?>"><?php echo e($collection->beat_title); ?></a></h3>
									<span><a href="<?php echo e(route('collection_of_artist_beats',str_replace(' ', '',$collection->user->user_name))); ?>"><?php echo e($collection->user->user_name); ?></a></span>
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>
						

						
					</div>

					<!-- <button class="main__load" type="button">Load more</button> -->
				</div>
			</div>
			<!-- end releases -->
	<!-- end release page body content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/buybeats/public_html/resources/views/frontend/releases-collection/all_releases_beats_collection.blade.php ENDPATH**/ ?>