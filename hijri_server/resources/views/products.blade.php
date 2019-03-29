@extends('includes.master')
@section('content')
	<!-- <style>
	.col-md-4{
		padding-left: 1px;
		padding-right: 1px;
		height: 500px;
		padding-top: 3px;
	}
	h3.tittle {
		text-align: center;
		font-size: 3em;
		color: #2c363e;
		text-shadow: 0 1px 2px rgba(0, 0, 0, 0.37);
		font-weight: 500;
		padding-top: 1em;
		padding-bottom: 1em;
	}

	h3.tittle.cen {
		color: #fff;
	}

	.contain {
    position: relative;
    width: 50%;
    width: 100%;
    height: 100%;
}

.image {
  opacity: 1;
  display: block;
  height: 100%;
  width: 100%;
  
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.contain:hover .image {
  opacity: 0.3;
}

.contain:hover .middle {
  opacity: 1;
}

.text {
  background-color: #dd4026;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}


	</style> -->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="#">Home</a>
		</li>
		<li class="breadcrumb-item active">{{ ucwords(str_replace('-', ' ', Request::path())) }}</li>
	</ol>

	<!--//banner-->
	<!-- //gallery -->
	<section class="container-fluid" style="margin-bottom: 50px;">
		<h3 class="tittle">{{ ucwords(str_replace('-', ' ', Request::path())) }}</h3>
		<div class="row" style="margin-bottom: 1em;">
			@foreach($products as $product)
			<div class="col-md-4">
				<div class="contain">
				  <img src="storage/{{$product->image}}" alt="Avatar" class="image" style="width:100%">
				  <div class="middle">
				  	<h2><strong>Design #</strong></h2>
				  	<h2><strong>{{$product->design_number}}</strong></h2>
				    <h3><strong>Rs-/{{$product->display_rate}}</strong></h3>
				    <p><strong>per yard</strong></p>
				    <br>
				    <form method="post" action="order-page">
				    	<input type="hidden" name="design" value="{{$product->design_number}}">
				    	<input type="submit" class="text" value="Buy Now" style="border:none">
				    	{{ csrf_field() }}
				    </form>
				  </div>
				</div>
			</div>
			@endforeach
		</div>

		{{ $products->links() }}
</section>
<!--/.portfolio-container-->


	
@endsection