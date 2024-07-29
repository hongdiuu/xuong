<!-- CONTAIN START -->
<section class="checkout-section ptb-95">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-8 col-lg-offset-3 col-sm-offset-2">  
             <form action="index.php?act=quenmk" method="post" class="main-form full">
             <div class="row">
                  <div class="col-xs-12 mb-20">
                    <div class="heading-part heading-bg">
                      <h2 class="heading">Create your account</h2>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="login-email">Email address</label>
                      <input id="login-email" name="email" type="email" required placeholder="Email Address">
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="input-box">
                       <h4 class="thongbao">
                            <?php
                             if(isset($thongbao)&&($thongbao!="")){
                              echo "$thongbao";
                             }
                            ?>
                       </h4> 

                    </div>
                  </div>
                  <div class="col-xs-12">
                    <!-- <div class="check-box left-side mb-20">
                       <span>
                      <input type="checkbox" name="remember_me" id="remember_me" class="checkbox">
                      </span>
                      <label for="remember_me">Remember Me</label>
                    </div> -->
                    <input class="submit" type="submit" name="guiemail" value="Sent">
                    <input class="submit" type="reset" name="dangky" value="Nhập lại">

                  </div>
                  <div class="col-xs-12">
                    <hr>
                    <div class="new-account align-center mt-20"> <span>Already have an account with us</span> <a class="link" title="Register with Honour" href="index.php?act=dangnhap">Login Here</a> </div>
                  </div>
                </div>
                <!-- <h4 class="thongbao">
                <?php
                             if(isset($thongbao)&&($thongbao!="")){
                              echo "$thongbao";
                             }
           ?>
                </h4> -->

             </form>            
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END --> 