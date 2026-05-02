<?php $__env->startSection('main'); ?>
<div class="" ng-controller="user">
	<div class="topbanner">
		<div class="container">
			<div class="col-lg-12 displayflex">
				<div class="col-lg-6 col-md-6">
					<div class="topbannertxt">
						<h1><?php echo e(trans('messages.home.title')); ?></h1>

						<p><?php echo e(trans('messages.home.desc')); ?></p>

						<ul>
							<li>
								<?php if($app_links[0]->value !="" ): ?>
								<a href="<?php echo e($app_links[0]->value); ?>" target="_blank"><img src="<?php echo e(url('images/new/app.png')); ?>" alt="app"></a>
								<?php endif; ?>
							</li>
							<li>
								<?php if($app_links[2]->value !="" ): ?>
									<a href="<?php echo e($app_links[2]->value); ?>" target="_blank">
										<img src="<?php echo e(url('images/new/google.png')); ?>" alt="Get it on Googleplay">
									</a>
								<?php endif; ?>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="topbannerimg">
						<img src="https://media.assettype.com/thenewsminute%2Fimport%2Fsites%2Fdefault%2Ffiles%2Fbike_Taxis_collage.jpg?w=480&auto=format%2Ccompress&fit=max" alt="banner">
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="alllogin">
		<div class="container">
			<div class="col-lg-12 allloginbottom">
				<div class="col-lg-4">
					<div class="alllogintwo">
						<img src="images/new/buy.png" alt="icon">
						<h4><?php echo e(trans('messages.home.buy')); ?></h4>
						<!--<p><?php echo e(trans('messages.home.easy_content')); ?></p> -->
					</div>
				</div>
				<div class="col-lg-4">
					<div class="alllogintwo">
						<img src="images/new/go.png" alt="icon">
						<h4><?php echo e(trans('messages.home.go')); ?></h4>
						<!--<p><?php echo e(trans('messages.home.anywhere_content')); ?></p> -->
					</div>
				</div>
				<div class="col-lg-4">
					<div class="alllogintwo">
						<img src="images/new/smart.png" alt="icon">
						<h4><?php echo e(trans('messages.home.smart')); ?></h4>
						<!--<p><?php echo e(trans('messages.home.lowcost_content')); ?></p> -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="cls_sectionone" style="display:none;">
		<div class="container">
			<div class="row displayflex">
				<div class="col-lg-6">
					<div class="cls_sectiononeimg">
						<img src="images/new/image3.jpg" alt="banner">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="cls_sectiononetxt">
						<h4 class="text-twotruncate"><?php echo e(trans('messages.home.drive_you')); ?> <?php echo e(trans('messages.home.you_need')); ?></h4>
						<p class="text-threetruncate"><?php echo e(trans('messages.home.drive_with')); ?> <?php echo e($site_name); ?><?php echo e(trans('messages.home.goals')); ?></p>
					</div>
				</div>
			</div>
			<div class="row cls_sectionbtm displayflex">
				<div class="col-lg-6">
					<div class="cls_sectiononetxt">
						<h4 class="text-twotruncate"><?php echo e(trans('messages.home.drive_you1')); ?></h4>
						<p class="text-threetruncate"><?php echo e(trans('messages.home.goals1')); ?></p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="cls_sectiononeimg">
						<img src="images/new/image2.png" alt="banner">
					</div>
					</div>
				
			</div>
		</div>
	</div>

	<div class="cls_arriving">
		<div class="container">
			<div class="title">
				<h5><?php echo e(trans('messages.home.now_arrive')); ?></h5>
				<h6><?php echo e(trans('messages.home.safe')); ?></h6>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="cls_arrivingin">
						<img src="images/new/arrive2.svg" alt="banner">

						<h5><?php echo e(trans('messages.home.helping')); ?></h5>
						<p><?php echo e(trans('messages.home.city_with')); ?> <?php echo e($site_name); ?> <?php echo e(trans('messages.home.city_with_content')); ?></p>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="cls_arrivingin">
						<img src="images/new/arrive1.svg" alt="banner">

						<h5><?php echo e(trans('messages.home.safe_ride')); ?></h5>
						<p><?php echo e(trans('messages.home.backseat')); ?> <?php echo e($site_name); ?><?php echo e(trans('messages.home.designed')); ?></p>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templatesign', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fdeamvhp/jaoopass.com/resources/views/home/home.blade.php ENDPATH**/ ?>