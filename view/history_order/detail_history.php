<!-- Cart Area Start -->
<style>
    .cancel-order {
        background-color: #f2f2f2;
        margin: 30px 0;
        border: none;
        border-radius: 0;
        color: #212121;
        display: inline-block;
        font-size: 14px;
        font-weight: 600;
        line-height: 1;
        padding: 18px 63px 17px;
        text-transform: uppercase;
    }
    .cancel-order:hover {
        background-color: #b9a06f;
        color: #fff;
    }
</style>
<!-- Cart Area Start -->
<div class="cart-main-area pt-100px" style="margin-top: 80px; padding-bottom: 50px;">
        <div class="container">
            <h3 class="cart-page-title"  style="margin-bottom: 40px">Đơn hàng</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Người nhận</th>
                                        <th>Mã đơn hàng</th>
                                        <th>Ngày đặt</th>
                                        <th>Tổng đơn</th>
                                        <th>Địa chỉ</th>
                                        <th>PTTT</th>
                                        <th>Tình trạng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <?php
                                        if (isset($list_his_order)) {
                                            foreach ($list_his_order as $order) :
                                                extract($order);
                                                $payment = method_payment($pttt);
                                                $status = find_status($trangthai);
                                    ?>
                                        
                                    <tr>
                                        <td><?=$hoten?></td>
                                        <td><?=$id_order?></td>
                                        <td><?=$ngaydathang?></td>
                                        <td><?=number_format($tongtien, 0, '.', '.')?> đ</td>
                                        <td><?=$diachi .'</br>' .$sdt.'</br>' .$email?></td>
                                        <td><?=$payment?></td>
                                        <td><?=$status?></td>
                                    </tr>
                                    
                                    <?php endforeach; }?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Area End -->


<div class="cart-main-area pt-70px pb-100px">
        <div class="container">
            <h3 class="cart-page-title"  style="margin-bottom: 40px">Đơn hàng chi tiết</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="table-content table-responsive cart-table-content">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Hình ảnh</th>
                                        <th>Số lượng</th>
                                        <th>Đơn giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <?php
                                        if (isset($list_his_detail)) {
                                            $total_order = 0;
                                            foreach ($list_his_detail as $order) :
                                                extract($order);
                                                $img = $img_path. $hinhanh;
                                                $status = $trangthai;
                                                $total_order += $dongia;
                                    ?>
                                        
                                    <tr>
                                        <td><a href="#" style="color: #333;"><?=$id_order?></a></td>
                                        <td><a href="#" style="color: #333;"><?=$tensp?></a></td>
                                        <td class="product-thumbnail">
                                            <a href="#" style="color: #333;"><img class="img-responsive ml-15px" width="80px" src="<?= $img ?>" alt="" /></a>
                                        </td>
                                        <td class="product-name"><?= $soluong ?></td>
                                        <td class="product-name"><?= $dongia ?></td>
                                    </tr>
                                    
                                    <?php endforeach; }?>
                                    <tr>
                                        <td colspan="4"><strong>TỔNG ĐƠN</strong></td>
                                        <td colspan="1"><?=number_format($total_order, 0, '.', '.')?> đ</td>
                                    </tr>
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                        <form id="paymentForm" action="index.php?act=update_status_order" method="POST">
                        <input type="hidden" name="id_order" value="<?=$id_order?>">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update" style="text-align: right">
                                        <?php 
                                            if ($status == 0 || $status == 4) {
                                                echo '<a href="?act=home" class="cancel-order">Mua lại</a>';
                                            } else {
                                        ?>
                                            <?php
                                                if ($status == 2 || $status == 3){
                                                    echo "<script>var isCancel = false;</script>";
                                                }else {
                                                    echo "<script>var isCancel = true;</script>";
                                                }    
                                            ?>
                                                    <button name="cancel" class="cancel-order" onclick="return confirm('Bạn có muốn hủy không?')">Hủy đơn hàng</button>
                                            <?php } ?>
                                            <p class="text-danger mt-15px" style="display: none" id="messageLogin"></p>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Area End -->
    <?php 
        
    ?>
    <script>
        document.getElementById('paymentForm').addEventListener('submit', function(event) {
        if (!isCancel) {
            // Ngăn chặn việc gửi form nếu người dùng chưa đăng nhập
            event.preventDefault();
            document.getElementById('messageLogin').style.display = 'block';
            document.getElementById('messageLogin').textContent = 'Không thể hủy đơn hàng này!';
            // Hoặc có thể chuyển hướng đến trang đăng nhập
            // window.location.href = 'login.php';
        }
    });
    </script>