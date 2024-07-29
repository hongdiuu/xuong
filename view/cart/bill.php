 
  
  <!-- BANNER STRAT -->
  <div class="banner inner-banner align-center">
    <div class="container">
      <section class="banner-detail">
        <h1 class="banner-title">Checkout</h1>
        <div class="bread-crumb mt-30">
          <ul>
            <li><a href="index.php">Home</a>/</li>
            <li><a href="index.php?act=addtocart">Cart</a>/</li>
            <li><span>Checkout</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>

  <section class="checkout-section ptb-95">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="checkout-step mb-40">
            <ul>
              <li class="active"> <a href="index.php?act=bill">
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
              <li> <a href="index.php?act=order-complete">
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
          <div class="checkout-content" >
            <div class="row">
              <div class="col-xs-12">
                <div class="heading-part align-center">
                  <h2 class="heading">Please fill up your Shipping details</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-8 col-sm-8 col-lg-offset-3 col-sm-offset-2">
                <form action="https://webcotheme.com/honour/demo2/hon001/order-overview.html" class="main-form full">
                  <div class="mb-20">
                    <div class="row">
                      <div class="col-xs-12 mb-20">
                        <div class="heading-part">
                          <h3 class="sub-heading">Shipping Address</h3>
                        </div>
                        <hr>
                      </div>
                      <?php
                       if(isset($_SESSION['user'])){
                        $name=$_SESSION['user']['user'];
                        $address=$_SESSION['user']['address'];
                        $email=$_SESSION['user']['email'];
                        $tel=$_SESSION['user']['tel'];
                      }else{
                        $name="";
                        $address="";
                        $email="";
                        $tel="";
                      }
                      ?>
                      <div class="col-sm-6">
                        <div class="input-box">
                          <input type="text" required placeholder="Full Name" value="<?=$name?>" name="user" >
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="input-box">
                          <input type="email" required placeholder="Email Address" value="<?=$email?>" name="email">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="input-box">
                          <input type="text" required placeholder="Company">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="input-box">
                          <input type="text" required placeholder="Contact Number"value="<?=$tel?>" name="tel">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="input-box">
                          <input type="text" required placeholder="Shipping Address" value="<?=$address?>" name="address">
                          <span>Please provide the number and street.</span> </div>
                      </div>
                
                    </div>
                  </div>
                  <div class="">
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
            <div class="row">
        <div class="col-xs-12 mb-xs-30">
          <div class="cart-item-table commun-table">
            <div class="table-responsive">
              <table class="table">
              
                <?php
                viewcart(0);
                ?>
           
                 <div class="col-sm-12">
                        <div class="check-box"> <span>
                          <input type="checkbox" class="checkbox" id="chk-billing-address" name="chk-billing-address">
                          </span>
                          <label for="chk-billing-address">Use my delivery address as my billing address</label>
                        </div>
                      </div>
                      <div class="col-sm-12"> <a href="index.php?act=payment" class="btn btn-color right-side" name="dongydathang">Next</a> </div>
              </table>
            </div>
          </div>
        </div>
       
      </div>
      
    </div>
  </section>
  <!-- CONTAINER END --> 
  
  