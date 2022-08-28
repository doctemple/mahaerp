<script src="dist/js/vue.min.js"></script>
<?php
$_CONFIG['script']['chart'] = true;
$_CONFIG['script']['dashboard3'] = true;
?>
<div class="content-header animate__animated animate__fadeInDown animate__delay-1s">
    <div class="container-fluid">

        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?php echo _L('dashboard_title'); ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#"><i class="nav-icon fas fa-home"></i>
                            <?php echo _L('dashboard'); ?></a></li>
                    <li class="breadcrumb-item active">ฝ่ายขาย</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>


<div id="container1" class="content animate__animated animate__fadeInDown">
    <div id="container2" class="container-fluid">


        <a class="btn btn-app" href="?cm" id="btmodal1" data-toggle="modal" data-target="#modal-xl">
            <span class="badge bg-purple">891</span>
            <i class="fas fa-users"></i> Customers
        </a>
        <a class="btn btn-app">
            <i class="fas fa-edit"></i> Quo
        </a>
        <a class="btn btn-app">
            <i class="fas fa-play"></i> P/O
        </a>
        <a class="btn btn-app">
            <span class="badge bg-warning">3</span>
            <i class="fas fa-bullhorn"></i> Stocks
        </a>
        <a class="btn btn-app">
            <span class="badge bg-success">300</span>
            <i class="fas fa-barcode"></i> Products
        </a>
        <a class="btn btn-app">
            <span class="badge bg-teal">67</span>
            <i class="fas fa-inbox"></i> Orders
        </a>
        <a class="btn btn-app">
            <span class="badge bg-info">12</span>
            <i class="fas fa-envelope"></i> Inbox
        </a>

        <div class="row">
            <div class="col-lg-6">
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
                                        <img src="dist/img/default-150x150.png" alt="Product 1"
                                            class="img-circle img-size-32 mr-2">
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
                                        <img src="dist/img/default-150x150.png" alt="Product 1"
                                            class="img-circle img-size-32 mr-2">
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
                                        <img src="dist/img/default-150x150.png" alt="Product 1"
                                            class="img-circle img-size-32 mr-2">
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
                                        <img src="dist/img/default-150x150.png" alt="Product 1"
                                            class="img-circle img-size-32 mr-2">
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
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
                <!-- Box 3 -->
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">ฝ่ายขาย</h3>
                            <a href="javascript:void(0);">ดูรายงาน</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <p class="d-flex flex-column">
                                <span class="text-bold text-lg">18,230.00</span>
                                <span>ยอดขาย</span>
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                                <span class="text-success">
                                    <i class="fas fa-arrow-up"></i> 33.1%
                                </span>
                                <span class="text-muted">เดือนที่ผ่านมา</span>
                            </p>
                        </div>
                        <!-- /.d-flex -->

                        <div class="position-relative mb-4">
                            <canvas id="sales-chart" height="200"></canvas>
                        </div>

                        <div class="d-flex flex-row justify-content-end">
                            <span class="mr-2">
                                <i class="fas fa-square text-primary"></i> ปีนี้
                            </span>

                            <span>
                                <i class="fas fa-square text-gray"></i> ปีที่แล้ว
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Box 2 -->
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title">การรับสินค้า</h3>
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
                                    <th>ซัพพลายเออร์</th>
                                    <th>สินค้า</th>
                                    <th>จำนวน</th>
                                    <th>หน่วย</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="dist/img/default-150x150.png" alt="Product 1"
                                            class="img-circle img-size-32 mr-2">
                                        Vendor A
                                    </td>
                                    <td>Product aaa</td>
                                    <td>
                                        12
                                    </td>
                                    <td>
                                        ชิ้น
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="dist/img/default-150x150.png" alt="Product 1"
                                            class="img-circle img-size-32 mr-2">
                                        Vendor B
                                    </td>
                                    <td>Product bbbb</td>
                                    <td>
                                        25
                                    </td>
                                    <td>
                                        กล่อง
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="dist/img/default-150x150.png" alt="Product 1"
                                            class="img-circle img-size-32 mr-2">
                                        Vendor C
                                    </td>
                                    <td>Product cccc</td>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        ถัง
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="dist/img/default-150x150.png" alt="Product 1"
                                            class="img-circle img-size-32 mr-2">
                                        Vendor D
                                    </td>
                                    <td>Product ddd</td>
                                    <td>
                                        210
                                    </td>
                                    <td>
                                        ชิ้น
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="dist/img/default-150x150.png" alt="Product 1"
                                            class="img-circle img-size-32 mr-2">
                                        Vendor D
                                    </td>
                                    <td>Product ffff</td>
                                    <td>
                                        160
                                    </td>
                                    <td>
                                        ห่อ
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
        <div class="p-4">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
    </div>

</div>

<!-- Search Customer -->
<div class="modal fade" id="modal-xl" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title"><i class="fas fa-search"></i> ค้นหา</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">

                <div class="card ">
                    <div class="card-body">

                        <form action="">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="" v-model="customersearch">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                            </div>
                        </form>

                        <small>พิมพ์ค้นหา 3 พยางค์ ขึ้นไป</small>
                    </div>
                </div>

                <div class="card ">
                    <div class="card-header">ผลการค้นหา

                        <div class="btn btn-success float-right" id="btmodal2" data-toggle="modal"
                            data-target="#modal-add-customer"><i class="fa fa-plus"></i>
                            เพิ่มลูกค้าใหม่</div>

                    </div>
                    <div class="card-body">



                        <table class="table table-head-fixed text-nowrap" >
                            <thead>
                                <tr>
                                    <th>ลูกค้า</th>
                                    <th><i class="fas fa-phone-square"></i> โทร</th>
                                    <th><i class="fas fa-user"></i> ติดต่อ</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr v-repeat="customers | filterBy customersearch" data-toggle="modal" data-target="#modal-customer" style="cursor:pointer;">
                                    <td>{{company}}</td>
                                    <td>{{tel}}</td>
                                    <td>{{contract}}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="card-footer"><small>พบ 7 รายการ</small></div>
                </div>

            </div>
            <div class="modal-footer">
                &nbsp;
            </div>
        </div>
    </div>

</div>
<script>
  new Vue({
  el: '#modal-xl',
  data: {
        customers: null
    },
    created: function () {
      fetch("api/customers.php")
        .then(r => r.json())
        .then(json => {
          this.customers=json;
        });
    }
})
</script>


<!-- Add Customer -->
<div class="modal fade" id="modal-add-customer" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title">เพิ่มลูกค้าใหม่</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="inputName">ชื่อลูกค้า</label>
                    <input type="text" id="inputName" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputEmail">เบอร์โทร</label>
                    <input type="tel" id="inputPhone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputEmail">อีเมล</label>
                    <input type="email" id="inputEmail" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputSubject">บริษัท</label>
                    <input type="text" id="inputSubject" class="form-control">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary float-right">เพิ่มลูกค้า</button>
            </div>
        </div>
    </div>

</div>

<!-- Customer Detail -->
<div class="modal fade" id="modal-customer" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title"><i class="fas fa-user"></i> ข้อมูลลูกค้า</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-row" id="corporate">
                    <div class="col">
                        <label>บริษัท</label>
                        <input type="text" name="company" class="form-control" value="ชัยเกียรติเจริญ จำกัด"
                            required="">
                        <div class="valid-feedback">ผ่าน</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label>เลขที่ผู้เสียภาษี</label>
                        <input type="text" name="tax_identification" placeholder="0-0000-00000-00-0"
                            value="8-1234-5687-52-7" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label><i class="fas fa-phone-square"></i> เบอร์โทร</label>
                        <input type="text" name="workphone" placeholder="0-0000-0000" value="084-623-5112"
                            class="form-control ">
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label><i class="far fa-envelope"></i> อีเมล</label>
                        <input type="text" name="email1" placeholder="example@netcom.com" value="chaikier@gmail.com"
                            class="form-control ">
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label><i class="fab fa-line"></i> Line</label>
                        <input type="text" name="line" value="@chaikier" class="form-control ">
                    </div>
                </div>

            </div>
            <div class="modal-footer">

                <a href="?cm&edit&id=cm10002" class="btn btn-success float-right" style="margin-right:6px;">ซื้อ</a>
                <a href="?cm&edit&id=cm10002" class="btn btn-warning float-right"
                    style="margin-right:6px;">ประวัติการซื้อ-ขาย</a>
                <a href="?cm&edit&id=cm10002" class="btn btn-primary float-right" style="margin-right:6px;">ขาย</a>
                <a href="?cm&edit&id=cm10002" class="btn btn-danger float-right" style="margin-right:6px;">แก้ไข</a>
            </div>
        </div>
    </div>

</div>

