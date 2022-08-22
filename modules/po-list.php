<div class="container-fluid">
<?php 
$wizard = array(
    array("ติดตาม<br>รายการขอราคาสินค้า",true,"ขั้นตอนที่ 1"),
    array("เพิ่มซัพพลายเออร์<br>ตรวจเช็คสินค้าที่มี",true,"ขั้นตอนที่ 2"),
    array("ส่งใบขอราคา<br>ซัพพลายเออร์",true,"ขั้นตอนที่ 3"),
    array("เพิ่มข้อมูลเสนอราคา<br>ตามใบเสนอราคา",true,"ขั้นตอนที่ 4"),
    array("สร้างใบสั่งซื้อ<br>ตามบิลขาย",true,"ขั้นตอนที่ 5"),
    array("ติดตาม<br>สถานะสั่งซื้อ",true,"ขั้นตอนที่ 6")
  );
            ECHO content(wizard($wizard,"ผังกระบวนการจัดซื้อ"));
?>

<div class="card">
        <div class="card-header">
            <h3 class="card-title">
รายการออกคำสั่งซื้อ
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>รายการ</th>
                        <th>รหัสใบสั่งซื้อ</th>
                        <th>รายละเอียด</th>
                        <th>วันที่สร้าง</th>
                        <th>วันที่รับสินค้า</th>
                        <th>ดำเนินการต่อ</th>
                        <th style="width: 40px">สถานะ</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1.</td>
                        <td>Vendor A</td>
                        <td>PO0014</td>
                        <td>
                            <a href="?po" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>19/5/65 09:00AM</td>
                        <td>ส่งสินค้า</td>
                        <td><span class="badge bg-danger">ล่าช้า</span></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Vendor B</td>
                        <td>PO0015</td>
                        <td>
                            <a href="?po" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>19/5/65 09:00AM</td>
                        <td>ส่งสินค้า</td>
                        <td><span class="badge bg-success">เสร็จ</span></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Vendor C</td>
                        <td>PO0016</td>
                        <td>
                            <a href="?po" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>19/5/65 09:00AM</td>
                        <td>เก็บเข้าคลังสินค้า</td>
                        <td><span class="badge bg-secondary">รอ</span></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Vendor D</td>
                        <td>PO0017</td>
                        <td>
                            <a href="?po" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>19/5/65 09:00AM</td>
                        <td>ส่งสินค้า</td>
                        <td><span class="badge bg-danger">ล่าช้า</span></td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Vendor E</td>
                        <td>PO0018</td>
                        <td>
                            <a href="?po" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>19/5/65 09:00AM</td>
                        <td>ส่งสินค้า</td>
                        <td><span class="badge bg-secondary">รอ</span></td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>Vendor F</td>
                        <td>PO0019</td>   
                        <td>
                            <a href="?po" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        </td>                     
                        <td>14/5/65 15:00PM</td>
                        <td>19/5/65 09:00AM</td>
                        <td>เก็บเข้าคลังสินค้า</td>
                        <td><span class="badge bg-secondary">รอ</span></td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>Vendor G</td>
                        <td>PO0010</td>
                        <td>
                            <a href="?po" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>19/5/65 09:00AM</td>
                        <td>ส่งสินค้า</td>
                        <td><span class="badge bg-secondary">รอ</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer ">
            &nbsp;
        </div>
    </div>
</div>


</div>   