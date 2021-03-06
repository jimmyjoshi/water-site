<!-- BEGIN .header-wrapper -->
<header class="header-wrapper clearfix">

	<!-- BEGIN .header-inner -->
	<div class="header-inner">

		<div class="qns-one-half">
			<img src="{{ URL::to('/').'/uploads/logo/apac.png'}}"  alt="logo" width="250"  height="70">
		</div>
		
		</div>

		<a href="{!! route('frontend.water-my-cart') !!}" class="top-right-button"><i class="fa fa-arrow-circle-right"></i>Inquiry</a>

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
								 	<a href="{{ route('frontend.service-container', ['key' => 'quality']) }}">
	                                	Quality
	                            	</a>
								</li>
								<li>
								 	<a href="{{ route('frontend.service-container', ['key' => 'lrtm']) }}">
	                                	LRTM
	                            	</a>
								</li>
								<li>
								 	<a href="{{ route('frontend.service-container', ['key' => 'design-capabilities']) }}">
	                                	Design Capabilities
	                                </a>
								</li>
								<li>
								 	<a href="{{ route('frontend.service-container', ['key' => 'marketing-layout']) }}">
	                                	Marketing Layout
	                                </a>
								</li>
								
								<li>
								 	<a href="{{ route('frontend.service-container', ['key' => 'thematization']) }}">
	                                	Thematization
	                            	</a>
								</li>
								<li>
								 	<a href="{{ route('frontend.service-container', ['key' => 'engineering']) }}">
	                                	Engineering
	                            	</a>
								</li>
								<li>
								 	<a href="{{ route('frontend.service-container', ['key' => 'installations']) }}">
	                                	Installations
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

				<a href="{!! route('frontend.water-my-cart') !!}" class="top-right-button"><i class="fa fa-arrow-circle-right"></i>Inquiry</a>

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
								 	<a href="{{ route('frontend.service-container', ['key' => 'quality']) }}">
	                                	Quality
	                            	</a>
								</li>
								<li>
								 	<a href="{{ route('frontend.service-container', ['key' => 'lrtm']) }}">
	                                	LRTM
	                            	</a>
								</li>
								<li>
								 	<a href="{{ route('frontend.service-container', ['key' => 'design-capabilities']) }}">
	                                	Design Capabilities
	                                </a>
								</li>
								<li>
								 	<a href="{{ route('frontend.service-container', ['key' => 'marketing-layout']) }}">
	                                	Marketing Layout
	                                </a>
								</li>
								
								<li>
								 	<a href="{{ route('frontend.service-container', ['key' => 'thematization']) }}">
	                                	Thematization
	                            	</a>
								</li>
								<li>
								 	<a href="{{ route('frontend.service-container', ['key' => 'engineering']) }}">
	                                	Engineering
	                            	</a>
								</li>
								<li>
								 	<a href="{{ route('frontend.service-container', ['key' => 'installations']) }}">
	                                	Installations
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

		<!-- END .mobile-navigation-wrapper -->
		</div>

	<!-- END .header-inner -->
	</div>

<!-- END .header-wrapper -->
</header>