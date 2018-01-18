<!-- BEGIN .header-wrapper -->
<header class="header-wrapper clearfix">

	<!-- BEGIN .header-inner -->
	<div class="header-inner">

		<div class="logo">
			<h2><a href="{!! route('frontend.index') !!}">Water Slide</a></h2>
		</div>

		<a href="{!! route('frontend.water-my-cart') !!}" class="top-right-button"><i class="fa fa-arrow-circle-right"></i>Checkout</a>

		<!-- BEGIN #primary-navigation -->
		<nav id="primary-navigation" class="navigation-wrapper fixed-navigation clearfix">

			<!-- BEGIN .navigation-inner -->
			<div class="navigation-inner">

				<!-- BEGIN .navigation -->
				<div class="navigation">
					<ul>	
						<li class="current-menu-item">
							<a href="{!! route('frontend.index') !!}">Home</a>
						</li>
						<li><a href="{!! route('frontend.water-products') !!}">Products</a>
							@if(count(access()->getProductCategories()))
							<ul>
								@foreach(access()->getProductCategories() as $category)
									<li>
										<a href="{!! route('frontend.water-product-category', ['id' => $category->id]) !!}">
											{{$category->title}}
										</a>
										@if(count($category->products))
											<ul>
												@foreach($category->products as $product)
													<li>
													 	<a href="{{ route('frontend.jewel-products-details', ['id' => $product->id]) }}">
						                                	{{ $product->title }}
						                            	</a>
													</li>
												@endforeach
											</ul>
										@endif
									</li>
								@endforeach
							</ul>
							@endif
						</li>
						<li class="current-menu-item">
							<a href="{!! route('frontend.about-us') !!}">About Us</a>
						</li>
						<li class="current-menu-item">
							<a href="{!! route('frontend.water-services') !!}">Services</a>
							<ul>
								<li>
								 	<a href="{{ route('frontend.jewel-service-manufacture') }}">
	                                	Manufacturing
	                            	</a>
								</li>
								<li>
								 	<a href="{{ route('frontend.jewel-service-theming') }}">
	                                	Theming
	                            	</a>
								</li>
								<li>
								 	<a href="{{ route('frontend.jewel-service-engineering') }}">
	                                	Engineering
	                            	</a>
								</li>
								<li>
								 	<a href="{{ route('frontend.jewel-service-quality') }}">
	                                	Quality Management
	                            	</a>
								</li>
								<li>
								 	<a href="{{ route('frontend.jewel-service-installations') }}">
	                                	Installations
	                            	</a>
								</li>
								<li>
								 	<a href="{{ route('frontend.jewel-service-testing') }}">
	                                	Testing & Commissioning
	                            	</a>
								</li>
								<li>
								 	<a href="{{ route('frontend.jewel-service-park-consulating') }}">
	                                	Park Rejuvenation And Consultation
	                            	</a>
								</li>
							</ul>
						</li>
						{{-- <li class="current-menu-item current_page_item">
							<a href="{!! route('frontend.water-products') !!}">Products</a>
						</li> --}}
						<li class="current-menu-item">
							<a href="{!! route('frontend.water-contact-us') !!}">Contact Us</a>
						</li>
					</ul>
				<!-- END .navigation -->
				</div>

				<a href="{!! route('frontend.water-my-cart') !!}" class="top-right-button"><i class="fa fa-arrow-circle-right"></i>Check Out</a>

			<!-- END .navigation-inner -->
			</div>

		<!-- END #primary-navigation -->
		</nav>

		<div id="mobile-navigation">
			<a href="#" id="mobile-navigation-btn"><i class="fa fa-bars"></i></a>
		</div>

		<div class="clearboth"></div>

		<!-- BEGIN .mobile-navigation-wrapper -->
		<div class="mobile-navigation-wrapper">	
			<ul>	
				<li class="current-menu-item">
							<a href="{!! route('frontend.index') !!}">Home</a>
				</li>
				<li class="current-menu-item">
					<a href="{!! route('frontend.about-us') !!}">About Us</a>
				</li>
				<li class="current-menu-item">
					<a href="{!! route('frontend.water-services') !!}">Services</a>
				</li>
				<li class="current-menu-item current_page_item">
					<a href="{!! route('frontend.water-products') !!}">Products</a>
				</li>
				<li class="current-menu-item">
					<a href="{!! route('frontend.water-contact-us') !!}">Contact Us</a>
				</li>
			</ul>

		<!-- END .mobile-navigation-wrapper -->
		</div>

	<!-- END .header-inner -->
	</div>

<!-- END .header-wrapper -->
</header>