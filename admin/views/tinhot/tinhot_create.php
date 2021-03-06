    <script language="javascript" src="public/ckeditor/ckeditor.js"></script>
    <script language="javascript" src="public/ckfinder/ckfinder.js"></script>

<div class="content">
  <div class="header">
    <h1 class="page-title">Thêm Tin HOT</h1>
  </div>

  <div class="main-content">
    <div class="">
    <form action="tinhot.php" method="POST" enctype="multipart/form-data">
    <div>
        <div class="col-sm-2"><b>Tiêu đề</b></div>
        <div class="col-sm-10"><input type="text" size="108" name="tieude_create"></div>
    </div>
    <div class="col-sm-12"><br></div>

    <div>
        <div class="col-sm-2"><b>Nội dung</b></div>
        <div class="col-sm-9 "><textarea class="ckeditor" rows="4" cols="" name="noidung_create" id="ta_noidung"></textarea></div>

    </div>
    <div class="col-sm-12"><br></div>

    <div>
        <div class="col-sm-2"><b>Tóm tắt</b></div>
        <div class="col-sm-10"><textarea rows="2" cols="108" name="tomtat_create"></textarea></div>
    </div>

    <div>
        <div class="col-sm-2"><b>Chủ đề</b></div>
        <div class="col-sm-10"><input type="text" size="108" name="chude_create"></div>
    </div>
    <div class="col-sm-12"><br></div>

    <div>
        <div class="col-sm-2"><b>Ảnh đại diện</b></div>
        <div class="col-sm-10"><input type="file" name="anhdaidien_create"></div>
    </div>
    <div class="col-sm-12"><br></div>

    <div>
        <div class="col-sm-2"></div>
        <div class="col-sm-10"><input type="submit" value="Tạo" name="btn_tao_tinhot"></div>
    </div>
    </form>
    </div>

    <div class="col-sm-12">
    <!-- Start include footer here -->
    <?php   try { require 'views/footer.html';
    } catch (ErrorException $ex) {
    echo "Unable to load configuration file.";
    } ?>
    <!-- End include footer here -->
    </div>

  </div>
</div>


