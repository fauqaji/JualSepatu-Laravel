@extends('layoutSingle.masterSi')

@section('content')


<body>
	<!-- banner -->
	<div class="banner_top innerpage" id="home">
		<div class="wrapper_top_w3layouts">
			<div class="header_agileits">
				<div class="logo inner_page_log">
					<h1><a class="navbar-brand" href="{{('home')}}"><span>Jual</span> <i>Sepatu</i></a></h1>
				</div>

			</div>
		</div>
		<!-- //cart details -->
		<!-- search -->

		<!-- //search -->
		<div class="clearfix"></div>
		<!-- /banner_inner -->
		<div class="services-breadcrumb_w3ls_agileinfo">
			<div class="inner_breadcrumb_agileits_w3">

				<ul class="short">
					<li><a href="{{('shop')}}">Shop</a><i>|</i></li>
					<li>Single</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>

	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="col-md-4 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">

						<ul class="slides">

							<li data-thumb="images/d1.jpg">
								<div class="thumb-image"> <img src="images/d1.jpg" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							<!-- <li data-thumb="images/d3.jpg">
								<div class="thumb-image"> <img src="images/d3.jpg" data-imagezoom="true" class="img-responsive"> </div>
							</li> -->
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-8 single-right-left simpleCart_shelfItem">
				<h3>Shoe Rock Vision(SRV) Sneakers (Blue)</h3>
				<div class="color-quality-right">
					<h5>Harga :</h5>
                    <p><span class="item_price">Rp.600000</span>
					<!-- <del>Rp750000</del> -->
				</p>
				</div>
                <div class="color-quality-right">
					<h5>Model :</h5>
                    <p>Sepatu Lari</p>
				</div>
                <div class="color-quality">
					<div class="color-quality-right">
						<h5>Ukuran :</h5>
						<p>42</p>
					</div>
				</div>
                <div class="color-quality-right">
					<h5>Warna :</h5>
                    <p>Biru</p>
				</div>
				<div >







					<div class="clearfix"></div>
				</div>
				<!-- <div class="occasion-cart">
					<div class="shoe single-item single_page_b">
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="shoe_item" value="Chikku Loafers">
							<input type="hidden" name="amount" value="405.00">
							<input type="submit" name="submit" value="Add to cart" class="button add">

							<a href="#" data-toggle="modal" data-target="#myModal1"></a>
						</form>

					</div>

				</div> -->
				<div class="col-md-a8 address_form">
						<h4>Informasi Pemesan</h4>
						<form action="{{('')}}" method="post" class="creditly-card-form agileinfo_form">
							<section class="creditly-wrapper wrapper">
								<div class="information-wrapper">
									<div class="first-row form-group">

										<div class="controls">
										<label class="control-label">Jenis Pembayaran :</label>
										<select class="form-select form-select-lg mb-3" aria-label=".form-select-sm example">
											<option value="1">COD</option>
										</select>
										</div>

									</div>
									<button class="submit check_out">Pesan</button>
								</div>
							</section>
						</form>
						<!-- <div class="checkout-right-basket">
							<a href="payment.html">Make a Payment </a>
						</div> -->
					</div>
			</div>
			<div class="clearfix"> </div>

			<!--/tabs-->

			<!--//tabs-->
			<!-- /new_arrivals -->

			<!--//new_arrivals-->


		</div>
	</div>
	<!-- //top products -->

	<!-- /newsletter-->

	<!-- //newsletter-->
	<!-- footer -->

	</div>
	<!-- //footer -->
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->

</body>
@endsection
