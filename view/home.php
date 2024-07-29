 <!-- BANNER STRAT -->
 <div class="banner">
    <div class="main-banner">
      <div class="item"> <img src="images/banner1.jpg" alt="Honour">
        <div class="banner-detail">
          <div class="container">
            <div class="banner-detail-inner"> <span class="slogan">Hurry up !......  Hurry up !......  Hurry up !......</span>
              <h1 class="banner-title">The Biggest Fashion Sale</h1>
              <span class="offer">Upto 60% Off + Extra 32% Off</span> </div>
          </div>
        </div>
      </div>
      <div class="item"> <img src="images/banner2.jpg" alt="Honour">
        <div class="banner-detail">
          <div class="container">
            <div class="banner-detail-inner"> <span class="slogan">Hurry up !......  Hurry up !......  Hurry up !......</span>
              <h1 class="banner-title">Get Exciting Cash back & Discounts</h1>
              <span class="offer">End of Season Sale - Get Best Offers</span> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- BANNER END --> 
  
  <!-- CONTAIN START -->
  <section>
    <div class="container">
      <div class="sub-banner-block center-xs">
        <div class="row mlr_-20">
          <div class="col-sm-6 plr-20">
            <div class="sub-banner sub-banner1"> <a> <img src="images/sub-banner1.jpg" alt="Honour">
              <div class="sub-banner-detail">
                <div class="sub-banner-type">Winter</div>
                <div class="sub-banner-title">Clothes</div>
                <span></span>
                <div class="sub-banner-subtitle">Get Extra 20% Off</div>
              </div>
              </a> </div>
          </div>
          <div class="col-sm-6 plr-20">
            <div class="sub-banner sub-banner2"> <a> <img src="images/sub-banner2.jpg" alt="Honour">
              <div class="sub-banner-detail">
                <div class="sub-banner-type">Men's</div>
                <div class="sub-banner-title">Apparel</div>
                <span></span>
                <div class="sub-banner-subtitle">Buy Men's Clothing Online</div>
              </div>
              </a> </div>
            <div class="sub-banner sub-banner3"> <a> <img src="images/sub-banner3.jpg" alt="Honour">
              <div class="sub-banner-detail">
                <div class="sub-banner-title">Luxury Essentials</div>
                <div class="sub-banner-type">SALE with up to 50% off </div>
              </div>
              </a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--  Featured Products Slider Block Start  -->
  <section class="pt-95">
    <div class="container">
      <div class="product-slider">
        <div class="row">
          <div class="col-xs-12">
            <div class="heading-part align-center mb-40">
              <h2 class="main_title">Featured Products</h2>
              <div class="category-bar mb-20">
                <ul class="tab-stap">
                  <!-- <li id="step1" class="active"><a href="javascript:void(0)">Dresses</a>•</li>
                  <li id="step2"><a href="javascript:void(0)">Tops</a>•</li>
                  <li id="step3"><a href="javascript:void(0)">Skirts</a>•</li>
                  <li id="step4"><a href="javascript:void(0)">Jeans</a>•</li>
                  <li id="step5"><a href="javascript:void(0)">Trousers</a>•</li>
                  <li id="step6"><a href="javascript:void(0)">Shorts</a>•</li>
                  <li id="step7"><a href="javascript:void(0)">Jackets</a>•</li>
                  <li id="step8"><a href="javascript:void(0)">Sleepwear</a></li>\ -->

                  <?php
                            foreach ($dsdm as $dm) {
                                extract($dm);
                                $linkdm = "index.php?act=sanpham&iddm=".$id;
                                echo '<li >       
                                        <a href="'.$linkdm.'" id="step1" class="active">'.$name.'</a>                        
                                    </li>';                              
                            }
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="pro_cat">
            <div id="data-step1" class="product-slider-main position-r" data-temp="tabdata">
              <div class="owl-carousel pro_cat_slider">
              <?php foreach($sanpham as $sp){
                   extract($sp);
                   $link="index.php?act=ctsanpham&id=".$id;
                      
                          echo '<div class="item">
                          <div class="product-item">
                            <div class="sale-label"><span>Sale</span></div>
                            <div class="product-image"> <a href="'.$link.'"> <img src="images/'.$image.'" alt=""> </a>
                              <div class="product-detail-inner">
                                <div class="detail-inner-left left-side">
                                  <ul>
                                    <li class="pro-cart-icon">
                                      <form>
                                        <button title="Add to Cart"></button>
                                      </form>
                                    </li>
                                    <li class="pro-wishlist-icon active"><a href="#"></a></li>
                                    <li class="pro-compare-icon"><a href="#"></a></li>
                                  </ul>
                                </div>
                                <div class="rating-summary-block right-side">
                                  <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-item-details">
                              <div class="product-item-name"> <a href="product-page.html">'.$name_product.'</a> </div>
                              <div class="price-box"> <span class="price">$'.$price.'</span>  </div>
                            </div>
                          </div>
                        </div>';
                ?>
                
                <?php  } ?>
                                     
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  Featured Products Slider Block End  --> 
  
  <!--  Site Services Features Block Start  -->
  <section class="pt-95">
    <div class="container">
      <div class="ser-feature-block center-sm">
        <div class="row">
          <div class="col-md-4">
            <div class="feature-box feature1">
              <div class="ser-title">Free Shipping</div>
              <div class="ser-subtitle">world for order over $99</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box feature2">
              <div class="ser-title">Special Gift</div>
              <div class="ser-subtitle">Give the perfect gift to you</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-box feature3">
              <div class="ser-title">Money Back</div>
              <div class="ser-subtitle">Money Back Insurance plan</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  Site Services Features Block End  -->
  
  <section class="ptb-95">
    <div class="container">
      <div class="row">
        <div class="col-md-8 pb-sm-30">
          <div class="heading-part mb-40">
            <h2 class="main_title">Offer of the Fashion Week</h2>
          </div>
          <div id="special-pro" class="owl-carousel">
            <div class="item">
              <div class="special-products-block">
                <div class="product-item">
                  <div class="sale-label"><span>Sale</span></div>
                  <div class="product-image"> <a href="product-page.html"> <img src="images/1.jpg" alt=""> </a> </div>
                </div>
                <div class="pro-detail-main">
                  <div class="product-item-details">
                    <div class="product-item-name"> <a href="product-page.html">Cross Colours Camo Print Tank half mengo</a> </div>
                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    <div class="rating-summary-block">
                      <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                      <span class="label-review"><span>( 2 review )</span></span> </div>
                    <p>make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was make a type specimen book. but also the leap It has survived not </p>
                    <a href="#" class="more-link">Learn More</a>
                    <div class="bottom-detail">
                      <ul>
                        <li class="pro-cart-icon">
                          <form>
                            <button title="Add to Cart" class="btn-black"><span></span>Add to Cart</button>
                          </form>
                        </li>
                        <li class="pro-wishlist-icon"><a href="#"><span></span>Wishlist</a></li>
                        <li class="pro-compare-icon"><a href="#"><span></span>Compare</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="special-products-block">
                <div class="product-item">
                  <div class="sale-label"><span>Sale</span></div>
                  <div class="product-image"> <a href="product-page.html"> <img src="images/1.jpg" alt=""> </a> </div>
                </div>
                <div class="pro-detail-main">
                  <div class="product-item-details">
                    <div class="product-item-name"> <a href="product-page.html">Cross Colours Camo Print Tank half mengo</a> </div>
                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    <div class="rating-summary-block">
                      <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                      <span class="label-review"><span>( 2 review )</span></span> </div>
                    <p>make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was make a type specimen book. but also the leap It has survived not </p>
                    <a href="#" class="more-link">Learn More</a>
                    <div class="bottom-detail">
                      <ul>
                        <li class="pro-cart-icon">
                          <form>
                            <button title="Add to Cart" class="btn-black"><span></span>Add to Cart</button>
                          </form>
                        </li>
                        <li class="pro-wishlist-icon"><a href="#"><span></span>Wishlist</a></li>
                        <li class="pro-compare-icon"><a href="#"><span></span>Compare</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
        </div>
      </div>
    </div>
  </section>
  <section class="ptb-95 client-main client-bg align-center dark-bg">
    <div class="container">
      <div class="client-inner">
        <div class="heading-part mb-40">
          <h2 class="main_title">What Our Clients Say</h2>
        </div>
        <div id="client" class="owl-carousel">
          
          <div class="item client-detail">
            <div class="rating-summary-block big">
              <div class="rating-result" title="60%"> <span style="width:60%"></span> </div>
            </div>
            <h4 class="sub-title client-title">Wed Censtoriya</h4>
            <p>make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was make a type specimen book. It has survived not only five centuries.</p>
          </div>
          <div class="item client-detail">
            <div class="rating-summary-block big">
              <div class="rating-result" title="60%"> <span style="width:60%"></span> </div>
            </div>
            <h4 class="sub-title client-title">Wed Censtoriya</h4>
            <p>make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was make a type specimen book. It has survived not only five centuries.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ptb-95">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="heading-part align-center mb-40">
            <h2 class="main_title">Latest News</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <?php foreach($loadpost as $lp){
          extract($lp);
          echo'  <div class="col-sm-4">
          <div class="blog-item">
            <div class="blog-media"> <img src="images/'.$image.'" alt="Honour"> <a href="single-blog.html" title="Click For Read More" class="read">&nbsp;</a> </div>
            <div class="blog-detail"> <span>'.$date.'</span>
              <h3><a href="single-blog.html">'.$content.'</a></h3>
              <hr>
              <div class="post-info">
                <ul>
                  <li><span>By</span><a href="#"> cormon jons</a></li>
                  <li><a href="#">(5) comments</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>';
          ?>
      
        <?php } ?>
       
      </div>
    </div>
  </section>
  
  <!-- Brand logo block Start  -->
  <section class="pb-95">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="heading-part align-center mb-40">
            <h2 class="main_title">Top Brand</h2>
          </div>
        </div>
      </div>
      <div class="row brand">
        <div class="col-md-12">
          <div id="brand-logo" class="owl-carousel align_center">
            <div class="item"><a href="#"><img src="images/brand1.jpg" alt="#"></a></div>
            <div class="item"><a href="#"><img src="images/brand2.jpg" alt="#"></a></div>
            <div class="item"><a href="#"><img src="images/brand3.jpg" alt="#"></a></div>
            <div class="item"><a href="#"><img src="images/brand4.jpg" alt="#"></a></div>
            <div class="item"><a href="#"><img src="images/brand5.jpg" alt="#"></a></div>
            <div class="item"><a href="#"><img src="images/brand6.jpg" alt="#"></a></div>
            <div class="item"><a href="#"><img src="images/brand7.jpg" alt="#"></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Brand logo block End  --> 
  
  <!-- CONTAINER END --> 