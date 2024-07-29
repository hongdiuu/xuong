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
                    <form class="row" method="post" enctype="multipart/form-data">
                        <div class="form-group  col-md-4">
                            <label class="control-label">Mã Loại</label>
                            <input class="form-control" type="text" name="maloai" disabled placeholder="Autoload...">
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="control-label">Tên Danh Mục</label>
                            <input class="form-control" type="text" name="tenloai">
                        </div>

                </div>
                <input type="submit" class="btn btn-save" name="themmoidanhmuc" value="Thêm danh mục">
                <a href="index.php?act=listdm" class="btn btn-save">Danh sách</a>
                <a class="btn btn-cancel" href="/doc/table-data-oder.html">Hủy bỏ</a>
                </form>
            </div>
        </div>
    </div>
</main>
<!-- xong add dm(chinh)-->