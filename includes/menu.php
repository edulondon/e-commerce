<body>
    <!--header-->
    <div class="header">
        <div class="header-top"
            style="display: flex; flex-wrap: nowrap; justify-content: space-between; background-color:#5FA5D2;">
            <div class="container" style="">
                <div class="search">
                    <form>
                        <input type="text" value="Search " onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Search';}">
                        <input type="submit" value="Go">
                    </form>
                </div>
                <div class="header-left">
                    <ul>
                        <li><a href="login_form.php">Login</a></li>

                    </ul>
                    <div class="cart box_1">
                        <a href="cart.php">
                            <h3>
                                <div class="total">
                                    <span class="net_total"></span> <span class="badge">0</span> items
                                </div>
                                <img src="images/cart.png" alt="" />
                            </h3>
                        </a>
                        <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="container">
            <div class="head-top">
                <div class="logo">
                    <a href="index.html"><img src="images/logo.png" alt="" width=60% height=60%></a>
                </div>
                <div class=" h_menu4">
                    <ul class="memenu skyblue">
                        <li class="active grid"><a class="color8" href="index.php">Home</a></li>
                        <li><a class="color4" href="about.php">About</a></li>
                        <li class="grid"><a class="color2" href="#"> Categories</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1">
                                        <div class="h_nav">
                                            <ul>
                                                <li><a href="products.html">Accessories</a></li>
                                                <li><a href="products.html">Bags</a></li>
                                                <li><a href="products.html">Caps & Hats</a></li>
                                                <li><a href="products.html">Hoodies & Sweatshirts</a></li>
                                                <li><a href="products.html">Jackets & Coats</a></li>
                                                <li><a href="products.html">Jeans</a></li>
                                                <li><a href="products.html">Jewellery</a></li>
                                                <li><a href="products.html">Jumpers & Cardigans</a></li>
                                                <li><a href="products.html">Leather Jackets</a></li>
                                                <li><a href="products.html">Long Sleeve T-Shirts</a></li>
                                                <li><a href="products.html">Loungewear</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <ul>
                                                <li><a href="products.html">Shirts</a></li>
                                                <li><a href="products.html">Shoes, Boots & Trainers</a></li>
                                                <li><a href="products.html">Shorts</a></li>
                                                <li><a href="products.html">Suits & Blazers</a></li>
                                                <li><a href="products.html">Sunglasses</a></li>
                                                <li><a href="products.html">Sweatpants</a></li>
                                                <li><a href="products.html">Swimwear</a></li>
                                                <li><a href="products.html">Trousers & Chinos</a></li>
                                                <li><a href="products.html">T-Shirts</a></li>
                                                <li><a href="products.html">Underwear & Socks</a></li>
                                                <li><a href="products.html">Vests</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Popular Brands</h4>
                                            <ul>
                                                <li><a href="products.html">Levis</a></li>
                                                <li><a href="products.html">Persol</a></li>
                                                <li><a href="products.html">Nike</a></li>
                                                <li><a href="products.html">Edwin</a></li>
                                                <li><a href="products.html">New Balance</a></li>
                                                <li><a href="products.html">Jack & Jones</a></li>
                                                <li><a href="products.html">Paul Smith</a></li>
                                                <li><a href="products.html">Ray-Ban</a></li>
                                                <li><a href="products.html">Wood Wood</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a class="color4" href="gallery.php">Gallery</a></li>
                        <li><a class="color6" href="contact.php">Conact</a></li>
                        <?php
                            if(isset($_SESSION["uid"])){
                                
                                    echo '
                                    <li class="grid"><a class="color2" href="#"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["name"]; ?></a>
					  	<div class="mepanel" style="padding-right:0px; margin-right:0px;">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="customer_order.php">Orders</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="cp.php">Chnage Password</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="logout.php">Logout</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
			    </li>
                                    ';


                            }
                            ?>

                    </ul>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>

    </div>