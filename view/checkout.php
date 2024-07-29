<!-- view/checkout.php -->

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form method="post" enctype="multipart/form-data" >
                <h2>Thông tin liên hệ</h2>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <input type="text" class="form-control" id="message" name="message">
                </div>
                <div class="mb-3">
                    <label for="dienthoai" class="form-label">Số điện thoại</label>
                    <input type="number" class="form-control" id="dienthoai" name="phone_number">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                </div>
                <div class="mb-3">
                    <label for="lienhe" class="form-label">Người cần liên hệ</label>
                    <input type="text" class="form-control" id="lienhe" name="name_user">
                </div>
                <div class="mb-3">
                    <label for="thoigian" class="form-label">Thời gian thuê</label>
                    <input type="date" class="form-control" id="thoigian" name="date_time">
                </div>
                <input type="hidden" name="product_id" value="<?= $id ?>">
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary" name="btn_insert">Xác nhận thuê</button>
            </form>
            <h3 style="color:red;">
                      <?php
                      if(isset($thongbao)&&($thongbao!="")){
                          echo $thongbao;
                      }  
                      ?>
                </h3> 
        </div>

        <?php extract($ctsanpham); ?>
        <div class="col-md-6">
            <div class="card">
            <input type="hidden" name="product_id" value="<?= $id ?>">
                <h2 class="card-header">Sản phẩm thuê: <?= $name_product ?></h2>
                <img src="images/<?= $image ?>" class="card-img-top img-fluid" alt="<?= $name_product ?>" width="700" style="height:700px; margin-bottom:10px;"> 
                <div class="card-body">
                
                </div>
            </div>
        </div>
    </div>
</div>

</script>
