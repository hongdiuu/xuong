<?php
  if(is_array($dm)){
    extract($dm);
}
?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách danh mục</li>
            <li class="breadcrumb-item"><a href="#">Thêm danh mục</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Tạo mới danh mục</h3>
                <div class="tile-body">
                <form action="index.php?act=updatedm" method="POST">
                        <div class="form-group  col-md-4">
                            <label class="control-label">Mã Loại</label>
                            <input class="form-control" type="text" name="maloai" disabled value="<?php if(isset($id)&&($id!="")) echo $id ;?>">
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="control-label">Tên Danh Mục</label>
                            <input class="form-control" type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name ;?>">
                        </div>
                </div>
                <input type="hidden" name="id" value="<?php if(isset($id)&&($id > 0)) echo $id ;?>">
                <input type="submit" class="btn btn-save" name="capnhat" value="Lưu Lại">
                <a href="index.php?act=listdm" class="btn btn-save">Danh sách</a>
                <a class="btn btn-cancel" href="?act=listdm">Hủy bỏ</a>
                </form>
            </div>
        </div>
    </div>
</main>
<!-- xong dm (chinh)-->