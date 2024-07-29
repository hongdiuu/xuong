<!-- BANNER STRAT -->

<div class="banner inner-banner align-center">
    <div class="container">
      <section class="banner-detail">
        <h1 class="banner-title">Login</h1>
        <div class="bread-crumb mt-30">
          <ul>
            <li><a href="index.html">Home</a>/</li>
            <li><span>Login</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- BANNER END --> 
  
  <!-- CONTAIN START -->
  <section class="checkout-section ptb-95">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-8 col-lg-offset-3 col-sm-offset-2">
              <form class="main-form full" action="index.php?act=login" method="POST">
                    <div class="row"> 
                      <div class="col-xs-12 mb-20">
                        <div class="heading-part heading-bg">
                          <h2 class="heading">Customer Login</h2>
                        </div>
                      </div>
                      <div class="col-xs-12">
                        <div class="input-box">
                          <label for="login-email">Tên đăng nhập :</label>
                          <input id="login" type="text" required placeholder="Tên đăng nhập.." name="user">
                        </div>
                      </div>
                      <div class="col-xs-12">
                        <div class="input-box">
                          <label for="login-pass">Mật Khẩu</label>
                          <input id="login-pass" type="password" required placeholder="Password" name="pass">
                        </div>
                      </div>
                      <div class="col-xs-12">
                        <input type="submit"  value="Log In" name="btn_login">
                      </div>
                      <div class="col-xs-12"> <a title="Forgot Password" class="forgot-password mtb-20" href="#">Forgot your password?</a>
                        <hr>
                      </div>
                      <div class="col-xs-12">
                        <div class="new-account align-center mt-20"> <span>New to Honour?</span> <a class="link" title="Register with Honour" href="?act=dangky">Create New Account</a> </div>
                      </div>
                    </div>

                    <h3 style="color:red;">
                      <?php
                      if(isset($thongbao)&&($thongbao!="")){
                          echo $thongbao;
                      }  
                      ?>
                  </h3>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
