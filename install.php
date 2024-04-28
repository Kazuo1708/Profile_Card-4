<!--
# ĐỂ CÀI ĐẶT THÔNG TIN THÌ CÁC BẠN VUI LÒNG VÀO PHẦN system/install.php ĐỂ CÀI ĐẶT THÔNG TIN GIỚI THIỆU BẢN THÂN
# SAU KHI CÀI ĐẶT THÔNG TIN GIỚI THIỆU BẢN THÂN XONG THÌ XÓA THƯ MỤC system ĐỂ TRÁNH KẺ GIAN TRỤC LỢI LỖ HỎNG THAY ĐỔI THÔNG TIN
# HUY2XDT NHẬN LÀM CODE - ZALO 0919.122.430
-->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Cấu hình website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<!-- body code -->
  <div class="container">
    <?php
    if(isset($_POST['install'])){
      $name = $_POST['name'];
      $avatar = $_POST['avatar'];
      $fb = $_POST['fb'];
      $twitter = $_POST['twitter'];
      $phone = $_POST['phone'];
      $gmail = $_POST['gmail'];
      $music = $_POST['music'];
      copy("ex_config.php", "index.php");
          $file = "index.php";
          file_put_contents($file,str_replace("ex_name",$name,file_get_contents($file)));
          file_put_contents($file,str_replace("ex_avatar",$avatar,file_get_contents($file)));
          file_put_contents($file,str_replace("ex_fb",$fb,file_get_contents($file)));
          file_put_contents($file,str_replace("ex_twitter",$twitter,file_get_contents($file)));
          file_put_contents($file,str_replace("ex_phone",$phone,file_get_contents($file)));
          file_put_contents($file,str_replace("ex_gmail",$gmail,file_get_contents($file)));
          file_put_contents($file,str_replace("ex_music",$music,file_get_contents($file)));
          echo '<div class="alert alert-success">Cài đặt thành công!</div>';
          echo '<meta http-equiv="refresh" content="2;url=">';
          unlink('install.php');
          unlink('ex_config.php');
    }


?>
    <section class="py-5 container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-4 mx-auto">
          <h1 class="fw-light text-center">Cài Đặt Thông Tin</h1>
          <form method="post" action="" enctype="multipart/form-data">
            <div class="card">
              <div class="card-body">
            <div class="form-group mb-3 mt-4">
              <label>Tên của bạn</label>
              <input type="text" name="name" class="form-control" placeholder="Tên của bạn..." required>
            </div>
            <div class="form-group mb-3 mt-4">
              <label>Ảnh của bạn</label>
              <input type="text" class="form-control" placeholder="Nhập đường link ảnh" name="avatar">
            </div>
            <div class="form-group mb-3 mt-4">
              <label>ID Facebook</label>
              <input type="text" class="form-control" placeholder="Nhập id facebook" name="fb">
            </div>
            <div class="form-group mb-3 mt-4">
              <label>ID Telegram</label>
              <input type="text" class="form-control" placeholder="Nhập id telegram" name="twitter">
            </div>
            <div class="form-group mb-3 mt-4">
              <label>Số điện thoại</label>
              <input type="text" class="form-control" placeholder="Nhập số điện thoại" name="phone">
            </div>
            <div class="form-group mb-3 mt-4">
              <label>Gmail</label>
              <input type="text" class="form-control" placeholder="Nhập gmail" name="gmail">
            </div>
            <div class="form-group mb-3 mt-4">
              <label>Link nhạc</label>
              <input type="text" class="form-control" placeholder="Nhập link nhạc" name="music">
            </div>
            <button class="btn btn-block btn-success" type="submit" name="install">Install</button>
          </div>
        </div>
          </form>
        </div>
      </div>
    </section>

  </div>
</body>
