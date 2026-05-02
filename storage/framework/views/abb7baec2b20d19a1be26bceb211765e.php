	<footer>
		<div class="cls_footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="footerlogo">
							<a href="<?php echo e(url('/')); ?>"><img class="" src="<?php echo e(url(PAGE_LOGO_URL)); ?>"></a>
						</div>
						<div class="threelinks">
							<li>
								<a href="<?php echo e(url('drive')); ?>" class="city-link"><?php echo e(trans('messages.footer.drive')); ?>

								</a>
							</li>
							<li>
								<a href="<?php echo e(url('/')); ?>/help" class="city-link"><?php echo e(trans('messages.header.help')); ?></a>
							</li>
						</div>
						
					</div>
					<div class="col-lg-9">
						<div class="footertwo">
							<div class="footertwolinks">
								<ul>
									<?php if(in_array(Route::current()->uri(),['/','ride','signup_rider','ride','signin_rider']) || Auth::check() && Auth::user()->user_type='Rider'): ?>
									<?php else: ?>
										<li>
											<?php if($app_links[1]->value !="" ): ?>
												<a class="googleplay_class" href="<?php echo e($app_links[1]->value); ?>" target="_blank">
													<img src="<?php echo e(url('images/new/app.png')); ?>" alt="Download on the Appstore" class="CToWUd">
												</a>
											<?php endif; ?>
										</li>
										<li>
											<?php if($app_links[3]->value !="" ): ?>
												<a href="<?php echo e($app_links[3]->value); ?>" target="_blank" class="ios_class">
													<img src="<?php echo e(url('images/new/google.png')); ?>" alt="Get it on Googleplay" class="CToWUd bot_footimg">
												</a>
											<?php endif; ?>
										</li>

									<?php endif; ?>


									<li style="padding: 0">
										<div class="currency_select">
											<?php echo Form::select('language',$language, (Session::get('language')) ? Session::get('language') : $default_language[0]->value, ['class' => 'cls_lang', 'aria-labelledby' => 'language-selector-label', 'id' => 'js-language-select']); ?>

										</div>
									</li>
									<li style="padding: 0;margin: 0;">
										<div class="currency_select">
											<select id="js-currency-select" class="cls_lang">
												<?php $__currentLoopData = $currency_select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value="<?php echo e($code); ?>" <?php if(session('currency') == $code ): ?> selected="selected" <?php endif; ?> ><?php echo e($code); ?>

												</option>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</select>
										</div>
									</li>
								</ul>
							</div>
							<div class="footertwolinks1">
								<ul class="">
									<?php $__currentLoopData = $company_pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company_page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li>
										<a class="" href="<?php echo e(url($company_page->url)); ?>">
											<?php echo e($company_page->name); ?>

										</a>
									</li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</div>
							<div class="footertwolinks2 displayflex">
								<div class="social-icons">
									<div class="foot_soc">
										<?php for($i=0; $i < $join_us->count(); $i++): ?>
										<?php if($join_us[$i]->value): ?>
										<a href="<?php echo e($join_us[$i]->value); ?>" target="_blank"> 
											<span class="fa fa-<?php echo e(str_replace('_','-',$join_us[$i]->name)); ?>"></span>
										</a>        
										<?php endif; ?>
										<?php endfor; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
				<div class="row text-center" style="margin-top: 40px;">
					<div class="pull-right hidden-xs">
				    </div>
				    <p style="color:#fff;font-size:14px;"> &copy; <?php echo e($copyright_year); ?></p>
			    </div>
			</div>
		</div>

	</footer><?php /**PATH /home/fdeamvhp/jaoopass.com/resources/views/common/footer.blade.php ENDPATH**/ ?>