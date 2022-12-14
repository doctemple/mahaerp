<div class="container-fluid">
<?php 
$wizard = array(
    array("ติดตาม<br>รายการขอราคาสินค้า",true,"ขั้นตอนที่ 1"),
    array("เพิ่มซัพพลายเออร์<br>ตรวจเช็คสินค้าที่มี",false,"ขั้นตอนที่ 2"),
    array("ส่งใบขอราคา<br>ซัพพลายเออร์",false,"ขั้นตอนที่ 3"),
    array("เพิ่มข้อมูลเสนอราคา<br>ตามใบเสนอราคา",false,"ขั้นตอนที่ 4"),
    array("สร้างใบสั่งซื้อ<br>ตามบิลขาย",false,"ขั้นตอนที่ 5"),
    array("ติดตาม<br>สถานะสั่งซื้อ",false,"ขั้นตอนที่ 6")
  );
            ECHO content(wizard($wizard,"ผังกระบวนการจัดซื้อ"));
?>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <div class="btn btn-secondary" data-toggle="modal" data-target="#modal-xl"><i class="fa fa-plus"></i>
                    ขอใบเสนอราคา(คลังสินค้า)</div>
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>รายการ</th>
                        <th>รหัสใบขอราคา</th>
                        <th>วันที่สร้าง</th>
                        <th>เจ้าหน้าที่</th>
                        <th style="width: 40px">สถานะ</th>
                        <th>ซัพพลายเออร์</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1.</td>
                        <td>Customer A</td>
                        <td>RQ0014</td>
                        <td>14/5/65 15:00PM</td>
                        <td>ส้ม</td>
                        <td><span class="badge bg-danger">ล่าช้า</span></td>
                        <td>
                            <a href="?rqs" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                            <div class="btn btn-secondary"><i class="fa fa-user"></i> มงคล ฟิล์ม จำกัด</div>
                            <div class="btn btn-secondary"><i class="fa fa-user"></i> AM Control</div>
                        </td>

                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Customer B</td>
                        <td>RQ0015</td>
                        <td>14/5/65 15:00PM</td>
                        <td>ส้ม</td>
                        <td><span class="badge bg-success">เสร็จ</span></td>
                        <td>
                            <a href="?rqs" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                            <div class="btn btn-secondary"><i class="fa fa-user"></i> มงคล ฟิล์ม จำกัด</div>
                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>มาหา เทคโนโลยี</td>
                        <td>RQ0016</td>
                        <td>14/5/65 15:00PM</td>
                        <td>ปอย</td>
                        <td><span class="badge bg-secondary">รอ</span></td>
                        <td>
                            <a href="?rqs" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Customer D</td>
                        <td>RQ0017</td>
                        <td>14/5/65 15:00PM</td>
                        <td>หน่อย</td>
                        <td><span class="badge bg-danger">ล่าช้า</span></td>
                        <td>
                            <a href="?rqs" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                            <div class="btn btn-secondary"><i class="fa fa-user"></i> AM Control</div>
                        </td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Customer E</td>
                        <td>RQ0018</td>
                        <td>14/5/65 15:00PM</td>
                        <td>ส้ม</td>
                        <td><span class="badge bg-secondary">รอ</span></td>
                        <td>
                            <a href="?rqs" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                            <div class="btn btn-secondary"><i class="fa fa-user"></i> AM Control</div>
                        </td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>Customer F</td>
                        <td>RQ0019</td>                        
                        <td>14/5/65 15:00PM</td>
                        <td>ส้ม</td>
                        <td><span class="badge bg-secondary">รอ</span></td>
                        <td>
                            <a href="?rqs" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                            <div class="btn btn-success"><i class="fas fa-file-invoice-dollar"></i> มงคล ฟิล์ม จำกัด</div>
                            <div class="btn btn-success"><i class="fas fa-file-invoice-dollar"></i> AM Control</div>
                            <div class="btn btn-success"><i class="fas fa-file-invoice-dollar"></i> PLM Tech</div>
                        </td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>Customer G</td>
                        <td>RQ0010</td>
                        <td>14/5/65 15:00PM</td>
                        <td>ส้ม</td>
                        <td><span class="badge bg-secondary">รอ</span></td>
                        <td>
                            <a href="?rqs" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer ">
            &nbsp;
        </div>
        </div>
    </div>


<div class="modal fade" id="modal-xl" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">ขอใบเสนอราคา(เพื่อคลังสินค้า)</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="container-fluid">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Require Quotation</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="address">รายละเอียดสินค้า</label>
                                    <textarea class="form-control" id="detail" placeholder="Products"
                                        rows="8"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">แนบไฟล์</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">อัพโหลด</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <a href="?rql&rq0014" class="btn btn-primary">สร้าง ใบขอราคาซัพพลายเออร์</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>