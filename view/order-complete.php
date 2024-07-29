  <!-- BANNER STRAT -->
  <div class="banner inner-banner align-center">
    <div class="container">
      <section class="banner-detail">
        <h1 class="banner-title">Checkout</h1>
        <div class="bread-crumb mt-30">
          <ul>
            <li><a href="index.php">Home</a>/</li>
            <li><a href="index.php?act=bill">Cart</a>/</li>
            <li><span>Checkout</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- BANNER END --> 
  
  <!-- CONTAIN START -->
  <!-- <section class="checkout-section ptb-95">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="checkout-step mb-40">
            <ul>
              <li> <a href="index.php?act=bill">
                <div class="step">
                  <div class="line"></div>
                  <div class="circle">1</div>
                </div>
                <span>Shipping</span> </a> </li>           
              <li> <a href="index.php?act=payment">
                <div class="step">
                  <div class="line"></div>
                  <div class="circle">2</div>
                </div>
                <span>Payment</span> </a> </li>
              <li class="active"> <a href="index.php?act=order-complete">
                <div class="step">
                  <div class="line"></div>
                  <div class="circle">3</div>
                </div>
                <span>Order Complete</span> </a> </li>
              <li>
                <div class="step">
                  <div class="line"></div>
                </div>
              </li>
            </ul>
            <hr>
          </div>
          <div class="checkout-content">
            <div class="row">
              <div class="col-xs-12">
                <div class="heading-part align-center">
                  <h2 class="heading">Order Overview</h2>
                </div>
              </div>
            </div>
            <?php
            global $img_path;
            $tong=0;
            echo '<thead>
            <tr>
              <th>Product</th>
              <th>Product Detail</th>
            </tr>
          </thead>';
                        
                        foreach($_SESSION['mycart'] as $cart){
                            $hinh=$img_path.$cart[2];
                            $ttien=$cart[3] * $cart[4];
                            $tong+=$ttien;
                            $soluong=1;
                            echo '<div class="row">
                            <div class="col-sm-8 mb-sm-30">
                              <div class="cart-item-table complete-order-table commun-table mb-30">
                                <div class="table-responsive">
                                  <table class="table">
                                    
                                    <tbody>
                                    <tr>
                                    <td><a href="index.php?act=sanphamct">
                                      <div class="product-image"><img alt="index.php?act=sanphamct" src="'.$hinh.'"></div>
                                      </a></td>
                                    <td><div class="product-title"> <a href="index.php?act=sanphamct">'.$cart[1].'</a>
                                        <div class="product-info-stock-sku m-0">
                                          <div>
                                            <label>Price: </label>
                                            <div class="price-box"> <span class="info-deta price">'.$cart[3].'</span> </div>
                                          </div>
                                        </div>
                                        <div class="product-info-stock-sku m-0">
                                          <div>
                                            <label>Quantity: </label>
                                            <span class="info-deta">'.$soluong.'</span> </div>
                                        </div>
                                      </div></td>
                                  </tr>
                                      
                                   ';
                           }
                           echo '
                           </tbody>
                           </table>
                         </div>
                       </div>
                       <div class="complete-order-detail commun-table mb-30">
                         <div class="table-responsive">
                           <table class="table">
                             <tbody>
                               <tr>
                                 <td><b>Order Places :</b></td>
                                 <td>17 December 2016</td>
                               </tr>
                               <tr>
                                 <td><b>Total :</b></td>
                                 <td><div class="price-box"> <span class="price">'.$tong.'</span> </div></td>
                               </tr>
                               <tr>
                                 <td><b>Payment :</b></td>
                                 <td>COD</td>
                               </tr>
                               <tr>
                                 <td><b>Order No. :</b></td>
                                 <td>#011052</td>
                               </tr>
                             </tbody>
                           </table>
                         </div>
                       </div>
                            <div class="mb-30">
                           <div class="heading-part">
                             <h3 class="sub-heading">Order Confirmation</h3>
                           </div>
                           <hr>
                           <p class="mt-20">Quisque id fermentum tellus. Donec fringilla mauris nec ligula maximus sodales. Donec ac felis nunc. Fusce placerat volutpat risus, ac fermentum ex tempus eget.</p>
                           
                         </div>
                        
                         <div class="right-side float-none-xs"> <a class="btn btn-black" href="index.php?act=muahangthanhcong">Next<span><i class="fa fa-angle-right"></i></span></a> </div>
                         
                       </div>
                       
                       <div class="col-sm-4">
                         <div class="cart-total-table address-box commun-table mb-30">
                           <div class="table-responsive">
                             <table class="table">
                               <thead>
                                 <tr>
                                   <th>Shipping Address</th>
                                 </tr>
                               </thead>
                               <tbody>
                                 <tr>
                                   <td><ul>
                                       <li class="inner-heading"> <b>Denial tom</b> </li>
                                       <li>
                                         <p>5-A kadambari aprtment,opp. vasan eye care,</p>
                                       </li>
                                       <li>
                                         <p>Risalabaar,City Road, deesa-405001.</p>
                                       </li>
                                       <li>
                                         <p>India</p>
                                       </li>
                                     </ul></td>
                                 </tr>
                               </tbody>
                             </table>
                           </div>
                         </div>
                         <div class="cart-total-table address-box commun-table">
                           <div class="table-responsive">
                             <table class="table">
                               <thead>
                                 <tr>
                                   <th>Billing Address</th>
                                 </tr>
                               </thead>
                               <tbody>
                                 <tr>
                                   <td><ul>
                                       <li class="inner-heading"> <b>Denial tom</b> </li>
                                       <li>
                                         <p>5-A kadambari aprtment,opp. vasan eye care,</p>
                                       </li>
                                       <li>
                                         <p>Risalabaar,City Road, deesa-405001.</p>
                                       </li>
                                       <li>
                                         <p>India</p>
                                       </li>
                                     </ul></td>
                                 </tr>
                               </tbody>
                             </table>
                           </div>
                         </div>
                       </div>
                     </div>';
            ?>      
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- CONTAINER END --> 

    <!-- CONTAIN START -->
    <section class="checkout-section ptb-95">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="checkout-step mb-40">
            <ul>
              <li> <a href="checkout.html">
                <div class="step">
                  <div class="line"></div>
                  <div class="circle">1</div>
                </div>
                <span>Shipping</span> </a> </li>
              <li> <a href="order-overview.html">
                <div class="step">
                  <div class="line"></div>
                  <div class="circle">2</div>
                </div>
                <span>Order Overview</span> </a> </li>
              <li> <a href="payment.html">
                <div class="step">
                  <div class="line"></div>
                  <div class="circle">3</div>
                </div>
                <span>Payment</span> </a> </li>
              <li class="active"> <a href="order-complete.html">
                <div class="step">
                  <div class="line"></div>
                  <div class="circle">4</div>
                </div>
                <span>Order Complete</span> </a> </li>
              <li>
                <div class="step">
                  <div class="line"></div>
                </div>
              </li>
            </ul>
            <hr>
          </div>
          <div class="checkout-content">
            <div class="row">
              <div class="col-xs-12">
                <div class="heading-part align-center">
                  <h2 class="heading">Order Overview</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 mb-sm-30">
                <div class="cart-item-table complete-order-table commun-table mb-30">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Product Detail</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="product-page.html">
                            <div class="product-image"><img alt="Honour" src="images/1.jpg"></div>
                            </a></td>
                          <td><div class="product-title"> <a href="product-page.html">Cross Colours Camo Print Tank half mengo</a>
                              <div class="product-info-stock-sku m-0">
                                <div>
                                  <label>Price: </label>
                                  <div class="price-box"> <span class="info-deta price">$80.00</span> </div>
                                </div>
                              </div>
                              <div class="product-info-stock-sku m-0">
                                <div>
                                  <label>Quantity: </label>
                                  <span class="info-deta">1</span> </div>
                              </div>
                            </div></td>
                        </tr>
                        <tr>
                          <td><a href="product-page.html">
                            <div class="product-image"><img alt="Honour" src="images/2.jpg"></div>
                            </a></td>
                          <td><div class="product-title"> <a href="product-page.html">Cross Colours Camo Print Tank half mengo</a>
                              <div class="product-info-stock-sku m-0">
                                <div>
                                  <label>Price: </label>
                                  <div class="price-box"> <span class="info-deta price">$80.00</span> </div>
                                </div>
                              </div>
                              <div class="product-info-stock-sku m-0">
                                <div>
                                  <label>Quantity: </label>
                                  <span class="info-deta">1</span> </div>
                              </div>
                            </div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="complete-order-detail commun-table mb-30">
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td><b>Order Places :</b></td>
                          <td>17 December 2016</td>
                        </tr>
                        <tr>
                          <td><b>Total :</b></td>
                          <td><div class="price-box"> <span class="price">$160.00</span> </div></td>
                        </tr>
                        <tr>
                          <td><b>Payment :</b></td>
                          <td>COD</td>
                        </tr>
                        <tr>
                          <td><b>Order No. :</b></td>
                          <td>#011052</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="mb-30">
                  <div class="heading-part">
                    <h3 class="sub-heading">Order Confirmation</h3>
                  </div>
                  <hr>
                  <p class="mt-20">Quisque id fermentum tellus. Donec fringilla mauris nec ligula maximus sodales. Donec ac felis nunc. Fusce placerat volutpat risus, ac fermentum ex tempus eget.</p>
                </div>
                <div class="right-side float-none-xs"> <a class="btn btn-black" href="shop.html"><span><i class="fa fa-angle-left"></i></span>Continue Shopping</a> </div>
              </div>
              <div class="col-sm-4">
                <div class="cart-total-table address-box commun-table mb-30">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Shipping Address</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><ul>
                              <li class="inner-heading"> <b>Denial tom</b> </li>
                              <li>
                                <p>5-A kadambari aprtment,opp. vasan eye care,</p>
                              </li>
                              <li>
                                <p>Risalabaar,City Road, deesa-405001.</p>
                              </li>
                              <li>
                                <p>India</p>
                              </li>
                            </ul></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="cart-total-table address-box commun-table">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Billing Address</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><ul>
                              <li class="inner-heading"> <b>Denial tom</b> </li>
                              <li>
                                <p>5-A kadambari aprtment,opp. vasan eye care,</p>
                              </li>
                              <li>
                                <p>Risalabaar,City Road, deesa-405001.</p>
                              </li>
                              <li>
                                <p>India</p>
                              </li>
                            </ul></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END --> 