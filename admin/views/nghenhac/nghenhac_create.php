    <script language="javascript" src="public/ckeditor/ckeditor.js"></script>
    <script language="javascript" src="public/ckfinder/ckfinder.js"></script>

<div class="content">
  <div class="header">
    <h1 class="page-title">Thêm Nghe nhạc</h1>
  </div>

  <div class="main-content">
    <div class="">
    <form action="nghenhac.php" method="POST" enctype="multipart/form-data">
    <div>
        <div class="col-sm-2"><b>Tên bài hát</b></div>
        <div class="col-sm-10"><input type="text" size="108" name="tenbaihat_create"></div>
    </div>

    <div class="col-sm-12"><br></div>

    <div>
        <div class="col-sm-2"><b>Lời bài hát</b></div>
        <div class="col-sm-9 "><textarea class="ckeditor" rows="4" cols="" name="loibaihat_create" id="ta_noidung"></textarea></div>
    </div>

    <div class="col-sm-12"><br></div>

    <div>
        <div class="col-sm-2"><b>Ca sỹ</b></div>
        <div class="col-sm-10"><input type="text" size="108" name="casy_create"></div>
    </div>

    <div class="col-sm-12"><br></div>

    <div>
        <div class="col-sm-2"><b>Tác giả</b></div>
        <div class="col-sm-10"><input type="text" size="108" name="tacgia_create"></div>
    </div>

    <div class="col-sm-12"><br></div>

    <div>
        <div class="col-sm-2"><b>Thể loại</b></div>
        <div class="col-sm-10"><input type="text" size="108" name="theloai_create"></div>
    </div>

    <div class="col-sm-12"><br></div>

    <div>
        <div class="col-sm-2"><b>Đường dẫn</b></div>
        <div class="col-sm-10"><input type="file" name="duongdan_create"></div>
    </div>

    <div class="col-sm-12"><br></div>

    <div>
        <div class="col-sm-2"></div>
        <div class="col-sm-10"><input type="submit" value="Tạo" name="btn_tao_nghenhac"></div>
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


