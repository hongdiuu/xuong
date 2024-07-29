<?php
if (is_array($sanpham)) {
    extract($sanpham);
}

?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách sản phẩm</li>
            <li class="breadcrumb-item"><a href="#">Thêm sản phẩm</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Tạo mới sản phẩm</h3>
                <div class="tile-body">

            <form action="index.php?act=updatesp" class="row" method="post" enctype="multipart/form-data">
                        <div class="form-group col-md-3">
                            <label class="control-label">Mã sản phẩm </label>
                            <input class="form-control" type="number" value="<?= $id ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Tên sản phẩm</label>
                            <input class="form-control" type="text" name="tensp" value="<?= $name_product ?>">
                        </div>
                        <!-- <div class="form-group col-md-3 ">
                            <label for="exampleSelect1" class="control-label">Tình trạng</label>
                            <select class="form-control" id="exampleSelect1">
                                <option>-- Chọn tình trạng --</option>
                                <option>Còn hàng</option>
                                <option>Hết hàng</option>
                            </select>
                        </div> -->
                        <div class="form-group col-md-3">
                            <label for="exampleSelect1" class="control-label">Danh mục</label>
                            <select class="form-control" id="exampleSelect1" name="iddm">
                                <?php
                                foreach($listdm as $key =>$value){
                                    if ($iddm == $value['id']) {
                                      echo '<option value ="'.$value['id'].'"selected>'.$value['name'].'</option>';
                                    }else{
                                      echo '<option value ="'.$value['id'].'">'.$value['name'].'</option>';
                                    }
                                }
                                ?>
                            </select>   
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Giá Cho Thuê</label>
                            <input class="form-control" type="text" name="giasp" value="<?= $price ?>">
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Ảnh sản phẩm</label>
                            <div id="myfileupload">
                                <input type="file" id="uploadfile" name="hinh" onchange="readURL(this);" />
                            </div>
                            <div id="thumbbox">
                                <img height="450" width="400" alt="Thumb image" id="thumbimage" style="display: none" />
                                <a class="removeimg" href="javascript:"></a>
                            </div>
                            <div id="boxchoice">
                                <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn
                                    ảnh</a>
                                <p style="clear:both"></p>
                            </div>
                            <img src="<?= $image ?>" alt=""  height="150" width="150">
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Mô tả sản phẩm</label>
                            <textarea class="form-control" name="mota" id="mota"><?= $detail ?></textarea>
                            <script>
                                CKEDITOR.replace('mota');
                            </script>
                        </div>

                </div>
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" class="btn btn-save" name="capnhat" value="Lưu lại">
                <a class="btn btn-cancel" href="?act=listsp">Hủy bỏ</a>
            </form>
            </div>
</main>

<!-- xong sản phẩm update -->