<?php $__env->startSection('content'); ?>
	<div class="banner-inner">
		</div>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Home</a>
			</li>
			<li class="breadcrumb-item active">Order</li>
		</ol>

	<!--//banner-->

	<section class="banner-bottom-w3ls-agileinfo">
			<div class="container">
					<h3 class="tittle text-center">Order Now</h3>
		<div class="row inner-sec-wthree-agileits">
			<div class="col-md-8 mail_form">
					<form action="order" method="post">
							<span class="input input--chisato">
							<input class="input__field input__field--chisato" name="name" type="text" id="input-13" placeholder=" " required="" />
							<label class="input__label input__label--chisato" for="input-13">
								<span class="input__label-content input__label-content--chisato" data-content="Name">Name</span>
							</label>
							</span>
							<span class="input input--chisato">
							<input class="input__field input__field--chisato" name="phone" type="text" id="input-14" placeholder=" " required="" />
							<label class="input__label input__label--chisato" for="input-14">
								<span class="input__label-content input__label-content--chisato" data-content="Phone">Phone</span>
							</label>
							</span>
							<span class="input input--chisato">
							<input class="input__field input__field--chisato" name="design" type="text" value="<?php echo e($design); ?>" id="input-15" placeholder=" " required="" />
							<label class="input__label input__label--chisato" for="input-15">
								<span class="input__label-content input__label-content--chisato" data-content="Design#">Design#</span>
							</label>
							</span>
							<textarea name="address" placeholder="Your Address (Optional)"></textarea>

							<p style="text-align: center;width: 100%;margin-top: 1em"><input type="submit" value="Order"></p>
							<?php echo e(csrf_field()); ?>

						</form>
				
			</div>
			<div class="col-md-4 contact_grids_info" style="padding-top: 1em;">
				<div class="contact_grid">
					<div class="contact_grid_right">
						<h4>Address</h4>
						<p>Mekkah Center</p>
						<p>Ferozepur Road, Lahore.</p>
					</div>
				</div>
				<!-- <div class="contact_grid">
					<div class="contact_grid_right">
						<h4>Branch 2</h4>
						<p>8088 Jasmine hall,</p>
						<p>NewYork City SD092.</p>
					</div>
				</div>
				<div class="contact_grid" data-aos="flip-up">

					<div class="contact_grid_right">
						<h4>OFFICE 3</h4>
						<p>436 Honey hall,</p>
						<p>NewYork City SD092.</p>
					</div>
					
				</div> -->
				<div class="clearfix"> </div>
			</div>
			
		</div>

		<!-- <div class="map">
			
			<div class="inner-sec-wthree-agileits">
				
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84010033106!2d-74.25819252532891!3d40.70583163828471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1475140387172"
					style="border:0"></iframe>
			</div>
		</div> -->
	

	</div>
	</section>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('includes.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>