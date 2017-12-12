<header id="header">
    <div class="container-fluid">
        <div class="row d-flex align-items-center">
            <div class="col-md text-center text-md-left">
            <input type="text" placeholder="Enter Keyword" class="global-search">
            </div>
            <div class="col-md text-center">
                <a href="#">
                    <img src="{{ URL::to('/').'/images/logo.png'}}" alt="">
                    
                </a>
            </div>
            <div class="col-md text-center text-md-right ">
                <ul class="list-inline d-inline-block m-0">
                    <li><i class="flag en-flag"></i>English</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <!--<a class="navbar-brand" href="#">Fixed navbar</a>-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item {{ active_class(Active::checkUriPattern('/')) }}">
                                <a class="nav-link" href="{!! route('frontend.index') !!}">Our Company</a>
                            </li>
                            <li class="nav-item {{ active_class(Active::checkUriPattern('jewel-categories')) }}">
                                <a class="nav-link" href="{!! route('frontend.jewel-categories') !!}">Categories</a>
                            </li>
                            <li class="nav-item {{ active_class(Active::checkUriPattern('jewel-products')) }}">
                                <a class="nav-link" href="{!! route('frontend.jewel-products') !!}">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{!! route('frontend.index') !!}">Timepiece</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{!! route('frontend.index') !!}">Accessories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{!! route('frontend.index') !!}">Gifts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{!! route('frontend.index') !!}"><img src="images/star_icon.png" alt=""></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{!! route('frontend.index') !!}"><img src="images/cart_icon.png" alt=""></a>
                            </li>
                            @if(! isset(access()->user()->id))
                                <li class="nav-item">
                                    <a class="nav-link" href="{!! route('frontend.login') !!}">Signin</a>
                                </li>
                                <li class="nav-item sap">
                                    <a class="nav-link" href="{!! route('frontend.index') !!}">|</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{!! route('frontend.index') !!}">Signup</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{!! route('frontend.user.show-cart') !!}">Cart</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>