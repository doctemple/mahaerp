<?php
$_CONFIG['script']['login'] = true; 
?>
<div class="row justify-content-center " style="height:100vh; margin-top:5%;">

<div class="login-box  align-items-center">
  <p>&nbsp;</p><p>&nbsp;</p>
  <div class="login-logo">
    <h1 class="text-light" style="text-shadow: 4px 4px 10px black;"><?php ECHO strtoupper(_SYS['system']); ?></h1>
  </div>
  <p>&nbsp;</p>
  <!-- /.login-logo -->
  <div class="card shadow-lg animate__animated animate__zoomIn ">
    <?php
    CheckVersion(); 
    ?>
    <div class="card-body login-card-body">
      <center><img src="dist/img/logo.jpg" width="50%"></center>
      <p class="login-box-msg">ลงทะเบียน เข้าระบบ</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" name="u" id="username" class="form-control" placeholder="User">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="p" id="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

<div class="form-check-inline">
  <label class="form-check-label" for="th">
    <input type="radio" name="lang" id="th" class="form-check-input" value="TH" checked>ภาษาไทย
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label" for="en">
  <input type="radio" name="lang" id="en" class="form-check-input" value="EN">English
  </label>
</div>
<p>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                จดจำ
              </label>
            </div>
          </div>
          </p>
          <!-- /.col -->
          <div class="col-4">
            <input type="button" class="btn btn-primary btn-block" id="btlogin" value="ล็อกอิน">
          </div>
          <!-- /.col -->
        </div>
      </form>


      <p class="mb-1">
        <a href="forgot-password.html">ลืมรหัสผ่าน</a>
      </p>

      <p class="mb-1">
        ปรับปรุงระบบล่าสุด <?php ECHO _LAST; ?>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</div>