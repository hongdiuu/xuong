
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">

                            <a class="btn btn-add btn-sm" href="?act=addsp" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới sản phẩm</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm nhap-tu-file" type="button" title="Nhập"
                                onclick="myFunction(this)"><i class="fas fa-file-upload"></i> Tải từ file</a>
                        </div>

                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm print-file" type="button" title="In"
                                onclick="myApp.printTable()"><i class="fas fa-print"></i> In dữ liệu</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm print-file js-textareacopybtn" type="button"
                                title="Sao chép"><i class="fas fa-copy"></i>Sao chép</a>
                        </div>

                        <div class="col-sm-2">
                            <form action="">
                                <button style="border:none;background-color:white;">
                                    <a class="btn btn-excel btn-sm"><i class="fas fa-file-excel"></i>
                                        Nhập
                                        Excel</a>
                                </button>

                            </form>

                        </div>
                        <div class="col-sm-2">
                            <form action="" method="post" enctype="multipart/form-data">
                                <button style="border:none;background-color:white;" name="expostExcel">
                                    <a class="btn btn-excel btn-sm"><i class="fas fa-file-excel"></i>
                                        Xuất
                                        Excel</a>
                                </button>

                            </form>

                        </div>

                        <div class="col-sm-2">
                            <a href="" class="btn btn-delete btn-sm pdf-file" type="button" title="In"
                                onclick="myFunction(this)"><i class="fas fa-file-pdf"></i> Thùng giác sản phẩm</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                                    class="fas fa-trash-alt"></i> Xóa tất cả </a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh</th>
                                <!-- <th>Số lượng</th>
                                <th>Tình trạng</th> -->
                                <th>Mô tả</th>
                                <th>Giá tiền</th>
                                <th>Danh mục</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($thunggiac as $sp) {
                                extract($sp);
                                $xoasp = "index.php?act=xoasp&idsp=" . $id;
                                $khoiphuc = "index.php?act=khoiphuc&idsp=" . $id;
                                ?>
                                <tr>
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td>
                                        <?= $id ?>
                                    </td>
                                    <td>
                                        <?= $name_product ?>
                                    </td>

                                    <td><img src="<?= $image ?>" alt="lỗi" width="100px;"></td>
                                    <!-- <td>40</td>  : số lượng (chưa làm)-->
                                    <!-- <td><span class="badge bg-success">Còn hàng</span></td> : status chưa làm -->
                                    <td>
                                        <?= $detail ?>
                                    </td>
                                    <td>
                                        <?= $price ?>
                                    </td>
                                    <td>
                                        <?= $iddm ?>
                                    </td>
                                    <td>
                                        <a href="<?= $xoasp ?>"><button class="btn btn-primary btn-sm trash" type="button"
                                                title="Xóa" onclick="return confirm('Bạn có chắc chắn muốn xóa không')"><i
                                                    class="fas fa-trash-alt"></i></button></a>
                                        <a href="<?= $khoiphuc ?>"><button class="btn btn-primary btn-sm right" type="button"
                                                title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP">
                                                <i class="fa-solid fa-rotate-right"></i></button></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Essential javascripts for application to work-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="src/jquery.table2excel.js"></script>
<script src="js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<!-- Data table plugin-->
<script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $('#sampleTable').DataTable();
    //Thời Gian
    function time() {
        var today = new Date();
        var weekday = new Array(7);
        weekday[0] = "Chủ Nhật";
        weekday[1] = "Thứ Hai";
        weekday[2] = "Thứ Ba";
        weekday[3] = "Thứ Tư";
        weekday[4] = "Thứ Năm";
        weekday[5] = "Thứ Sáu";
        weekday[6] = "Thứ Bảy";
        var day = weekday[today.getDay()];
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        nowTime = h + " giờ " + m + " phút " + s + " giây";
        if (dd < 10) {
            dd = '0' + dd
        }
        if (mm < 10) {
            mm = '0' + mm
        }
        today = day + ', ' + dd + '/' + mm + '/' + yyyy;
        tmp = '<span class="date"> ' + today + ' - ' + nowTime +
            '</span>';
        document.getElementById("clock").innerHTML = tmp;
        clocktime = setTimeout("time()", "1000", "Javascript");

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
    }

</script>
