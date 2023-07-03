@extends('layoutShop.masterS')

@section('content')
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


</head>

<body>
    <!-- banner -->
    <div class="banner_top innerpage" id="home">

        <!-- /banner_inner -->
        		<div class="logo inner_page_log">
                    <h1><a class="navbar-brand" ><span>Jual</span> <i>Sepatu</i></a></h1>
                </div>
        <!-- //banner_inner -->
		<div class="clearfix"></div>
		<div class="services-breadcrumb_w3ls_agileinfo">
            <div class="inner_breadcrumb_agileits_w3">

                <ul class="short">
                    <li><a href="{{('/')}}">Home</a><i>|</i></li>
                    <li>Shop</li>
                </ul>
            </div>
        </div>

    </div>

    <!-- //banner -->
    <!-- top Products -->
    <div class="ads-grid_shop">
        <div class="shop_inner_inf">
            <!-- tittle heading -->

            <!-- //tittle heading -->
            <!-- product left -->
            <div class="side-bar col-md-3">
                <div class="search-hotel">
                    <h3 class="agileits-sear-head">Search Here..</h3>
                    <form action="#" method="post">
                        <input type="search" placeholder="Product name..." name="search" required="">
                        <input type="submit" value=" ">
                    </form>
                </div>
                <!-- price range -->

                <!-- //reviews -->
                <!-- deals -->
                 <div class="col-md-6 shop_left shp">
                        <img src="images/banner4.jpg" alt="">
                        <h6>21% off</h6>
                    </div>
                    <div class="col-md-6 shop_right shp">
                        <img src="images/banner1.jpg" alt="">
                        <h6>31% off</h6>
                    </div>
                    <div class="clearfix"></div>
                <!-- //deals -->

            </div>
            <!-- //product left -->
            <!-- product right -->
            <div class="left-ads-display col-md-9">
                <div class="wrapper_top_shop">


                    <!-- product-sec1 -->
                    <div class="product-sec1">
                        <!--/mens-->
                        <div class="col-md-4 product-men">
                            <div class="product-shoe-info shoe">
                                <div class="men-pro-item">
                                    <div class="men-thumb-item">
                                        <img src="images/s1.jpg" alt="">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{('single')}}" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                    </div>
                                    <div class="item-info-product">
                                        <h4>
                                            <a href="{{('single')}}">Bella Toes </a>
                                        </h4>
                                        <div class="info-product-price">
                                            <div class="grid_meta">
                                                <div class="product_price">
                                                    <div class="grid-price ">
                                                        <span class="money ">$675.00</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="shoe single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart">
                                                    <input type="hidden" name="add" value="1">
                                                    <input type="hidden" name="shoe_item" value="Bella Toes">
                                                    <input type="hidden" name="amount" value="675.00">


                                                    <a href="#" data-toggle="modal"
                                                        data-target="#myModal1"></a>
                                                </form>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 product-men">
                            <div class="product-shoe-info shoe">
                                <div class="men-pro-item">
                                    <div class="men-thumb-item">
                                        <img src="images/s2.jpg" alt="">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{('single')}}" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                    </div>
                                    <div class="item-info-product">
                                        <h4>
                                            <a href="{{('single')}}">Chikku Loafers </a>
                                        </h4>
                                        <div class="info-product-price">
                                            <div class="grid_meta">
                                                <div class="product_price">
                                                    <div class="grid-price ">
                                                        <span class="money ">$405.00</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="shoe single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart">
                                                    <input type="hidden" name="add" value="1">
                                                    <input type="hidden" name="shoe_item" value="Chikku Loafers">
                                                    <input type="hidden" name="amount" value="405.00">


                                                    <a href="#" data-toggle="modal"
                                                        data-target="#myModal1"></a>
                                                </form>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 product-men">
                            <div class="product-shoe-info shoe">
                                <div class="men-pro-item">
                                    <div class="men-thumb-item">
                                        <img src="images/s3.jpg" alt="">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{('single')}}" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                    </div>
                                    <div class="item-info-product">
                                        <h4>
                                            <a href="{{('single')}}">(SRV) Sneakers </a>
                                        </h4>
                                        <div class="info-product-price">
                                            <div class="grid_meta">
                                                <div class="product_price">
                                                    <div class="grid-price ">
                                                        <span class="money ">$375.00</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="shoe single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart">
                                                    <input type="hidden" name="add" value="1">
                                                    <input type="hidden" name="shoe_item" value="(SRV) Sneakers">
                                                    <input type="hidden" name="amount" value="375.00">


                                                    <a href="#" data-toggle="modal"
                                                        data-target="#myModal1"></a>
                                                </form>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- //mens -->
                        <!-- /womens -->
                        <div class="col-md-4 product-men women_two">
                            <div class="product-shoe-info shoe">
                                <div class="men-pro-item">
                                    <div class="men-thumb-item">
                                        <img src="images/s4.jpg" alt="">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{('single')}}" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                    </div>
                                    <div class="item-info-product">
                                        <h4>
                                            <a href="{{('single')}}">Shuberry Heels </a>
                                        </h4>
                                        <div class="info-product-price">
                                            <div class="grid_meta">
                                                <div class="product_price">
                                                    <div class="grid-price ">
                                                        <span class="money ">$575.00</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="shoe single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart">
                                                    <input type="hidden" name="add" value="1">
                                                    <input type="hidden" name="shoe_item" value="Shuberry Heels">
                                                    <input type="hidden" name="amount" value="575.00">


                                                    <a href="#" data-toggle="modal"
                                                        data-target="#myModal1"></a>
                                                </form>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 product-men women_two">
                            <div class="product-shoe-info shoe">
                                <div class="men-pro-item">
                                    <div class="men-thumb-item">
                                        <img src="images/s5.jpg" alt="">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{('single')}}" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                    </div>
                                    <div class="item-info-product">
                                        <h4>
                                            <a href="{{('single')}}">Red Bellies </a>
                                        </h4>
                                        <div class="info-product-price">
                                            <div class="grid_meta">
                                                <div class="product_price">
                                                    <div class="grid-price ">
                                                        <span class="money ">$325.00</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="shoe single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart">
                                                    <input type="hidden" name="add" value="1">
                                                    <input type="hidden" name="shoe_item" value="Red Bellies">
                                                    <input type="hidden" name="amount" value="325.00">


                                                    <a href="#" data-toggle="modal"
                                                        data-target="#myModal1"></a>
                                                </form>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 product-men women_two">
                            <div class="product-shoe-info shoe">
                                <div class="men-pro-item">
                                    <div class="men-thumb-item">
                                        <img src="images/s6.jpg" alt="">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{('single')}}" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                    </div>
                                    <div class="item-info-product">
                                        <h4>
                                            <a href="{{('single')}}">Catwalk Flats</a>
                                        </h4>
                                        <div class="info-product-price">
                                            <div class="grid_meta">
                                                <div class="product_price">
                                                    <div class="grid-price ">
                                                        <span class="money ">$425.00</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="shoe single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart">
                                                    <input type="hidden" name="add" value="1">
                                                    <input type="hidden" name="shoe_item" value="Catwalk Flats">
                                                    <input type="hidden" name="amount" value="425.00">


                                                    <a href="#" data-toggle="modal"
                                                        data-target="#myModal1"></a>
                                                </form>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- //womens -->
                        <!-- /mens -->
                        <div class="col-md-4 product-men">
                            <div class="product-shoe-info shoe">
                                <div class="men-pro-item">
                                    <div class="men-thumb-item">
                                        <img src="images/s7.jpg" alt="">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{('single')}}" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                    </div>
                                    <div class="item-info-product">
                                        <h4>
                                            <a href="{{('single')}}">Running Shoes</a>
                                        </h4>
                                        <div class="info-product-price">
                                            <div class="grid_meta">
                                                <div class="product_price">
                                                    <div class="grid-price ">
                                                        <span class="money ">$875.00</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="shoe single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart">
                                                    <input type="hidden" name="add" value="1">
                                                    <input type="hidden" name="shoe_item" value="Running Shoes">
                                                    <input type="hidden" name="amount" value="875.00">


                                                    <a href="#" data-toggle="modal"
                                                        data-target="#myModal1"></a>
                                                </form>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 product-men">
                            <div class="product-shoe-info shoe">
                                <div class="men-pro-item">
                                    <div class="men-thumb-item">
                                        <img src="images/s8.jpg" alt="">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{('single')}}" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                    </div>
                                    <div class="item-info-product">
                                        <h4>
                                            <a href="{{('single')}}">Sukun Casuals</a>
                                        </h4>
                                        <div class="info-product-price">
                                            <div class="grid_meta">
                                                <div class="product_price">
                                                    <div class="grid-price ">
                                                        <span class="money ">$505.00</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="shoe single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart">
                                                    <input type="hidden" name="add" value="1">
                                                    <input type="hidden" name="shoe_item" value="Sukun Casuals">
                                                    <input type="hidden" name="amount" value="505.00">


                                                    <a href="#" data-toggle="modal"
                                                        data-target="#myModal1"></a>
                                                </form>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 product-men">
                            <div class="product-shoe-info shoe">
                                <div class="men-pro-item">
                                    <div class="men-thumb-item">
                                        <img src="images/s9.jpg" alt="">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{('single')}}" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                    </div>
                                    <div class="item-info-product">
                                        <h4>
                                            <a href="{{('single')}}">Bank Sneakers</a>
                                        </h4>
                                        <div class="info-product-price">
                                            <div class="grid_meta">
                                                <div class="product_price">
                                                    <div class="grid-price ">
                                                        <span class="money ">$635.00</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="shoe single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart">
                                                    <input type="hidden" name="add" value="1">
                                                    <input type="hidden" name="shoe_item" value="Bank Sneakers">
                                                    <input type="hidden" name="amount" value="635.00">


                                                    <a href="#" data-toggle="modal"
                                                        data-target="#myModal1"></a>
                                                </form>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- //mens -->
                        <div class="clearfix"></div>

                    </div>

                    <!-- //product-sec1 -->

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //top products -->
    <!-- /newsletter-->

    <!-- //newsletter-->
    <!-- footer -->

    </div>
    <!-- //footer -->
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover"
            style="opacity: 1;"> </span></a>
    <!-- js -->



</body>

</html>
@endsection
