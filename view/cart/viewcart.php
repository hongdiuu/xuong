<!-- CONTAIN START 


              
              $tong=0;
       foreach ($_SESSION['mycart'] as $cart) {
        $hinh=$img_path.$cart[2];
        $ttien=$cart[3]*$cart[4];-->
<section class="ptb-95">
<div class="container">
      <div class="row">
        <div class="col-xs-12 mb-xs-30">
          <div class="cart-item-table commun-table">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Sub Total</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    $total = 0;
                    $i = 0;
                    // var_dump($_SESSION['mycart']);
                    // unset($_SESSION['mycart']);
                    // $add_sp = [$idpro, $name, $price, $img, $soluong, $mota, $tong];
                    foreach($_SESSION['mycart'] as $cart) :
                        $img = $img_path. $cart[3];
                        $thanhtien = $cart[2] * $cart[4];
                        $total += $thanhtien;
                        $link="?act=delcart&idcart=$i";
                  ?>
                    <tr>
                     <td><div class="product-title"><img width="100px" src="<?=$img?>" alt=""></div></td>
                     <td><div class="base-price price-box"> <span class="price"><?=$cart[1]?></span> </div></td>
                     <td><div class="input-box"><?=$cart[2]?></div></td>
                     <td><div class="input-box"><?=$cart[4]?></div></td>
                     <td><div class="input-box"><?=$thanhtien?></div></td>
                     
                     <td><a href="<?=$link?>"><i title="Remove Item From Cart" data-id="100" class="fa fa-trash cart-remove-item"></i></a></td>
                   </tr>
                   
                   <?php $i++; endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="mb-30">
        <div class="row">
          <div class="col-sm-6">
            <div class="mt-30"> <a href="?act=home" class="btn btn-black"><span><i class="fa fa-angle-left"></i></span>Tiếp tục mua hàng</a> </div>
          </div>
          <div class="col-sm-6">
            <div class="mt-30 right-side float-none-xs"> <a href="?act=delcart" class="btn btn-black">Xóa giỏ hàng</a> </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="mtb-30">
        <div class="row">
          
          <div class="col-sm-6">
            <div class="cart-total-table commun-table">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="2">Cart Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr>
                      <td><b>Amount Payable</b></td>
                      <td><div class="price-box"> <span class="price"><b><?=$total?></b></span> </div></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="mt-30">
        <div class="row">
          <div class="col-xs-12">
            <div class="right-side float-none-xs"> <a href="?act=thanhtoan" class="btn btn-black">Tiến hành thanh toán<span><i class="fa fa-angle-right"></i></span></a> </div>
          </div>
        </div>
      </div>
    </div>
      
    
    
   
  </section>
  <!-- CONTAINER END --> 