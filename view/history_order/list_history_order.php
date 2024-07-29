<!-- Cart Area Start -->
<div class="cart-main-area" style="margin-top: 100px; padding-bottom: 100px;">
        <div class="container">
            <h3 class="cart-page-title" style="margin-bottom: 40px">Lịch sử mua hàng</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            
            <table class="table" style="margin-bottom: 100px;">
                <thead>
                  <tr>
                    <th>Người nhận</th>
                    <th>Hóa đơn</th>
                    <th>Ngày đặt</th>
                    <th>Tổng đơn</th>
                    <th>Địa chỉ</th>
                    <th>PTTT</th>
                    <th>Tình trạng</th>
                    <th>Hoạt động</th>
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
                     
                     <td><a href="?act=detail_history&id_order=<?= $id_order ?>&id_account=<?= $_SESSION['user']['id'] ?>">Xem chi tiết</a></td>
                   </tr>
                   
                   <?php endforeach; }?>
                </tbody>
              </table>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Area End -->