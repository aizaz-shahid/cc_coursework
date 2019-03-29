
<?php $__env->startSection('content'); ?>
	<div class="banner-inner">
		</div>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Home</a>
			</li>
			<li class="breadcrumb-item active">Contact</li>
		</ol>

	<!--//banner-->

	<section class="banner-bottom-w3ls-agileinfo">
			<div class="container">
					<h3 class="tittle text-center">Contact Us</h3>
		<div class="row inner-sec-wthree-agileits">
			<div class="col-md-8 mail_form">
					<form action="contact" method="post">
							<span class="input input--chisato">
							<input class="input__field input__field--chisato" name="name" type="text" id="input-13" placeholder=" " required="" />
							<label class="input__label input__label--chisato" for="input-13">
								<span class="input__label-content input__label-content--chisato" data-content="Name">Name</span>
							</label>
							</span>
							<span class="input input--chisato">
							<input class="input__field input__field--chisato" name="email" type="email" id="input-14" placeholder=" " required="" />
							<label class="input__label input__label--chisato" for="input-14">
								<span class="input__label-content input__label-content--chisato" data-content="Email">Email</span>
							</label>
							</span>
							<span class="input input--chisato">
							<input class="input__field input__field--chisato" name="subject" type="text" id="input-15" placeholder=" " required="" />
							<label class="input__label input__label--chisato" for="input-15">
								<span class="input__label-content input__label-content--chisato" data-content="Subject">Subject</span>
							</label>
							</span>
							<textarea name="message" placeholder="Your comment here..." required=""></textarea>
							<p style="text-align: center;width: 100%;margin-top: 1em"><input type="submit" value="Submit"></p>
							<?php echo e(csrf_field()); ?>

						</form>
				
			</div>
			<div class="col-md-4 contact_grids_info" style="padding-top: 1em;">
				<div class="contact_grid">
					<div class="contact_grid_right">
						<h4>Address</h4>
						<p>Makkah centre shop#1 </p>
						<p>Ferozepur Road, opposite jamia ashrafia Lahore.</p>
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

		<div class="map">
			
			<div class="inner-sec-wthree-agileits">
				
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.085747505757!2d74.32227421515066!3d31.521804781369102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzHCsDMxJzE4LjUiTiA3NMKwMTknMjguMSJF!5e0!3m2!1sen!2s!4v1534177822382" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><!-- <iframe src="https://www.google.com/maps/place/31%C2%B031'18.5%22N+74%C2%B019'28.1%22E/@31.5218048,74.3222742,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d31.5218048!4d74.3244629?hl=en"
					style="border:0"></iframe> -->
			</div>
		</div>
	

	</div>
	</section>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('includes.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>