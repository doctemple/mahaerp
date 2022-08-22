
<div class="container-fluid">
<?php 
$wizard = array(
    array("ติดตาม<br>แผนการรับสินค้า",true,"ขั้นตอนที่ 1"),
    array("ตรวจรับสินค้า<br>ตามใบสั่งซื้อ",false,"ขั้นตอนที่ 2"),
    array("จัดเก็บสินค้า<br>ปรับปรุงคลังสินค้า",false,"ขั้นตอนที่ 3"),
    array("เบิกสินค้า",false,"ขั้นตอนที่ 4"),
    array("ตรวจสินค้า<br>ก่อนจัดส่งสินค้า",false,"ขั้นตอนที่ 5"),
    array("ติดตาม<br>สถานะการจัดส่ง",false,"ขั้นตอนที่ 6")
  );
            ECHO content(wizard($wizard,"ผังกระบวนการคลังสินค้า"));
?>


<div class="card">
        <div class="card-header">
            <h3 class="card-title">
แผนการรับสินค้า
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
                            <a href="?rec&detail=po00014" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>19/5/65 09:00AM</td>
                        <td><a href="?del" class="btn btn-primary">ส่งสินค้า</a></td>
                        <td><span class="badge bg-danger">ล่าช้า</span></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Vendor B</td>
                        <td>PO0015</td>
                        <td>
                            <a href="?rec&detail=po00014" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>19/5/65 09:00AM</td>
                        <td><a href="?del" class="btn btn-primary">ส่งสินค้า</a></td>
                        <td><span class="badge bg-success">เสร็จ</span></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Vendor C</td>
                        <td>PO0016</td>
                        <td>
                            <a href="?rec&detail=po00014" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>19/5/65 09:00AM</td>
                        <td><a href="?pua" class="btn btn-success">เก็บเข้าคลังสินค้า</a></td>
                        <td><span class="badge bg-secondary">รอ</span></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Vendor D</td>
                        <td>PO0017</td>
                        <td>
                            <a href="?rec&detail=po00014" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>19/5/65 09:00AM</td>
                        <td><a href="?del" class="btn btn-primary">ส่งสินค้า</a></td>
                        <td><span class="badge bg-danger">ล่าช้า</span></td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Vendor E</td>
                        <td>PO0018</td>
                        <td>
                            <a href="?rec&detail=po00014" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>19/5/65 09:00AM</td>
                        <td><a href="?del" class="btn btn-primary">ส่งสินค้า</a></td>
                        <td><span class="badge bg-secondary">รอ</span></td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>Vendor F</td>
                        <td>PO0019</td>   
                        <td>
                            <a href="?rec&detail=po00014" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        </td>                     
                        <td>14/5/65 15:00PM</td>
                        <td>19/5/65 09:00AM</td>
                        <td><a href="?pua" class="btn btn-success">เก็บเข้าคลังสินค้า</a></td>
                        <td><span class="badge bg-secondary">รอ</span></td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>Vendor G</td>
                        <td>PO0010</td>
                        <td>
                            <a href="?rec&detail=po00014" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>19/5/65 09:00AM</td>
                        <td><a href="?del" class="btn btn-primary">ส่งสินค้า</a></td>
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