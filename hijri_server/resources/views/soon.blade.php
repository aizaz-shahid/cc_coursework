@extends('includes.master')
@section('content')


	<section class="banner-bottom-w3ls-agileinfo coming-soon">
			<div class="content-timer"> 
					<h3 class="tittle cen soon">Stay tuned 
we're launching soon. </h3>
					<div class="clock">
						<div class="column days">
							<div class="timer" id="days"></div>
							<div class="text">DAYS</div>
						</div>
						<div class="timer days"></div>
						<div class="column">
							<div class="timer" id="hours"></div>
							<div class="text">HOURS</div>
						</div>
						<div class="timer"></div>
						<div class="column">
							<div class="timer" id="minutes"></div>
							<div class="text">MINUTES</div>
						</div>
						<div class="timer"></div>
						<div class="column">
							<div class="timer" id="seconds"></div>
							<div class="text">SECONDS</div>
						</div>
						<div class="clear"> </div>
					</div>	 
				</div>
	
				<!--newsletter-->
			<div class="newsletter">
				<h4>Subscribe Now</h4>
				<form action="#" method="post" class="newsletter">
					<input class="form-control" class="email" type="email" placeholder="Your Email and Get Notified..." required="">
					<input class="form-control" type="submit" class="submit" value="subscribe">
				</form>
				<ul class="social_list1">
						<li>
							<a href="#" class="facebook1">
								<i class="fab fa-facebook-f"></i>

							</a>
						</li>
						<li>
							<a href="#" class="twitter2">
								<i class="fab fa-twitter"></i>

							</a>
						</li>
						<li>
							<a href="#" class="dribble3">
								<i class="fab fa-dribbble"></i>
							</a>
						</li>
					</ul>

            </div>
			<!--//newsletter-->

	</section>
	
	
	@endsection