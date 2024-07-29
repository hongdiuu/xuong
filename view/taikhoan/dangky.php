<!-- CONTAIN START -->
<section class="checkout-section ptb-95">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="row">
          <div class="col-lg-6 col-md-8 col-sm-8 col-lg-offset-3 col-sm-offset-2">
            <form action="index.php?act=dangky" method="post" class="main-form full">
                <div class="row">
                  <div class="col-xs-12 mb-20">
                    <div class="heading-part heading-bg">
                      <h2 class="heading">Create your account</h2>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="login-email">User name</label>
                      <input id="login-email" name="user" type="text" required placeholder="User name">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="login-pass">Password</label>
                      <input id="login-pass" name="pass" type="password" required placeholder="Enter your Password">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="login-email">address</label>
                      <input id="login-email" name="address" type="text" required placeholder=" Address">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="login-email">Phone</label>
                      <input id="login-email" name="phonenumber" type="number" required placeholder="phone number">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <input class="submit" type="submit" name="signup" value="Đăng Ký">
                  </div>
                  <div class="col-xs-12">
                    <hr>
                    <div class="new-account align-center mt-20"> <span>Already have an account with us</span> <a
                        class="link" title="Register with Honour" href="index.php?act=login">Login Here</a> </div>
                  </div>
                </div>
                <h4 class="thongbao" style="color:red;">
                  <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                      echo "$thongbao";
                    }
                  ?>
                </h4>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- CONTAINER END -->