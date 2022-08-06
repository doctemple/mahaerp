<?php
$_CONFIG['script']['chart'] = true;
$_CONFIG['script']['report'] = true; 
?>

    <div id="container1" class="content" >
      <div id="container2" class="container-fluid" >
        <div class="row">
          <div class="col-lg">
            <!-- Box 1 -->
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">คลังสินค้า</h3>
                  <a href="javascript:void(0);">ดูรายงาน</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">820</span>
                    <span>ปริมาณสินค้า</span>
                  </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 12.5%
                    </span>
                    <span class="text-muted">อัตราการเบิก</span>
                  </p>
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="visitors-chart" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> สัปดาห์ปัจจุบัน
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> สัปดาห์ที่ผ่านมา
                  </span>
                </div>
              </div>
            </div>
            <!-- Box 2 -->
            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">รายงานการขาย</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>สินค้า</th>
                    <th>ราคา</th>
                    <th>ยอดขาย</th>
                    <th>อื่นๆ</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                      <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Product A
                    </td>
                    <td>1,333 บาท</td>
                    <td>
                      <small class="text-success mr-1">
                        <i class="fas fa-arrow-up"></i>
                        12%
                      </small>
                      12,000 ชิ้น
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Product B
                    </td>
                    <td>2,920 บาท</td>
                    <td>
                      <small class="text-warning mr-1">
                        <i class="fas fa-arrow-down"></i>
                        0.5%
                      </small>
                      123,234 ชิ้น
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Product C
                    </td>
                    <td>1,230 บาท</td>
                    <td>
                      <small class="text-danger mr-1">
                        <i class="fas fa-arrow-down"></i>
                        3%
                      </small>
                      198 ชิ้น
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Product D
                      <span class="badge bg-danger">NEW</span>
                    </td>
                    <td>13,909 บาท</td>
                    <td>
                      <small class="text-success mr-1">
                        <i class="fas fa-arrow-up"></i>
                        63%
                      </small>
                      87 ชิ้น
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- /.card -->
          </div>

        </div>
        <!-- /.row -->
        <div class="p-4" ><p>&nbsp;</p><p>&nbsp;</p></div>
      </div>
      <!-- /.container-fluid -->
    </div>
