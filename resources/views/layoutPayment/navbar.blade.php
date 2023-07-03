<div class="wrapper_top_w3layouts">
			<div class="header_agileits">

				<div class="overlay overlay-contentpush">
					<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

					<nav>
						<ul>
							<li><a href="{{('/')}}" class="active">Home</a></li>
                            <li><a href="{{('shop')}}">Shop</a></li>
                            <li><a href="{{('halamanAdmin')}}">Halaman Admin</a></li>

						</ul>
					</nav>
				</div>
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
				<!-- cart details -->
				<div class="top_nav_right">
					<div class="mobile-nav-button-2">
                        <!-- <form action="#" method="post" class="last"> -->

                            <a href="{{('checkout')}}" class="top_shoe_cart">
                                <button type="submit" name="submit" value="">
                                    <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                </button>
                            </a>

                        <!-- </form> -->
                    </div>
				</div>
			</div>
		</div>


<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
<script src="{{ asset('js/classie.js') }}"></script>
<script src="{{ asset('js/demo1.js') }}"></script>
