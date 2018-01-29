<!-- BEGIN .content-wrapper -->
		<section class="content-wrapper clearfix our-yachts-sections">

			<h3 class="center-title">Our Products</h3>
			<div class="title-block2"></div>
			<p class="yacht-intro-text">Choose from a wide selection of boats ranging from luxury motor yachts to classic sailing yachts, we have every type
			of boat available to meet your needs. We also take custom orders and will help you acquire a specific yacht.</p>

			<!-- BEGIN .yacht-block-wrapper -->
			<div class="owl-carousel1 yacht-block-wrapper">
				
				@foreach(access()->getLatestProducts() as $product)
					<!-- BEGIN .yacht-block -->
					<div class="yacht-block">
						<div class="yacht-block-image">
							<div class="new-icon">New</div>
							<a href="{{ route('frontend.jewel-products-details', ['id' => $product->id]) }}">
								<img src="{{ URL::to('/').'/uploads/product/'.$product->image}}" alt="{{ $product->title }}" />

							</a>
						</div>
						<div class="yacht-block-content">
							<h3><a href="{{ route('frontend.jewel-products-details', ['id' => $product->id]) }}"> {{ $product->title }} </a></h3>
							<div class="title-block5"></div>
						</div>
					<!-- END .yacht-block -->
					</div>
				@endforeach
			</div>

		<!-- END .content-wrapper -->
		</section>
