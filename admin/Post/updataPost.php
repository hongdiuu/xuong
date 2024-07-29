<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách bài đăng</li>
            <li class="breadcrumb-item"><a href="#">Sửa bài đăng</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="tile">
                    <h3 class="tile-title">Sửa bài đăng</h3>
                    <div class="tile-body">

                        <form class="row">
                            <div class="form-group col-md-3">
                                <label class="control-label">Tên người đăng</label>
                                <input class="form-control" readonly name="name" type="text" 
                                value="<?php echo $insterPostID['user_name'] ?>" placeholder="">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Ngày đăng</label>
                                <input class="form-control" name="date" type="date" 
                                value ="<?php echo $insterPostID['date'] ?>">
                            </div>

                            <div class="form-group col-md-12">
                                <label class="control-label">Ảnh sản phẩm</label>
                                <div id="myfileupload">
                                    <input type="file" id="uploadfile"  name="ImageUpload" onchange="readURL(this);" />
                                </div>
                                <div id="thumbbox">
                                    <img height="auto" width="170" style="margin: 8px 0px;" src="img/<?php echo $insterPostID['image'] ?>" alt="" id="thumbimage"/>
                                    <a class="removeimg" href="javascript:"></a>
                                </div>
                                <div id="boxchoice">
                                    <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i>
                                        Chọn ảnh</a>
                                    <p style="clear:both"></p>
                                </div>

                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Mô tả sản phẩm</label>
                                <textarea class="form-control" name="mota" id="mota" value="">
                                    <?php echo $insterPostID['content'] ?>
                                </textarea>
                                <script>CKEDITOR.replace('mota');</script>
                            </div>

                    </div>
                    <button class="btn btn-save" name="btnUpdataPost" type="sumbit">Sửa</button>
                    <a class="btn btn-cancel" href="index.php?act=listPost">Hủy bỏ</a>
                </div>
            </form>
</main>
<script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/plugins/pace.min.js"></script>
<script>
    const inpFile = document.getElementById("inpFile");
    const loadFile = document.getElementById("loadFile");
    const previewContainer = document.getElementById("imagePreview");
    const previewContainer = document.getElementById("imagePreview");
    const previewImage = previewContainer.querySelector(".image-preview__image");
    const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");
    inpFile.addEventListener("change", function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            previewDefaultText.style.display = "none";
            previewImage.style.display = "block";
            reader.addEventListener("load", function () {
                previewImage.setAttribute("src", this.result);
            });
            reader.readAsDataURL(file);
        }
    });

</script>
</body>

</html>