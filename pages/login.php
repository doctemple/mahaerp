<?php
$_CONFIG['script']['login'] = true; 
?>
<div class="row justify-content-center ">

<div class="login-box align-items-center">
  <p>&nbsp;</p>
  <div class="login-logo">
    <b>MAHA</b>Technology
  </div>
  <!-- /.login-logo -->
  <div class="card">
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
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                จดจำ
              </label>
            </div>
          </div>
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

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</div>