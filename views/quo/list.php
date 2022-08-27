<div class="container-fluid ">
<?php 
        $wizard = array(
        array("ติดตามสถานะ<br>ใบเสนอราคา",true,"ขั้นตอนที่ 1"),
        array("เปิดบิลขาย",false,"ขั้นตอนที่ 2"),
        array("ติดตามสถานะ<br>การส่งสินค้า",false,"ขั้นตอนที่ 3"),
        array("การวางบิล<br>การชำระ",false,"ขั้นตอนที่ 4"),
        array("ปิดการขาย<br>เสร็จสิ้น",false,"ขั้นตอนที่ 5")
        );
        
        ECHO content(wizard($wizard,"ผังกระบวนการขาย"));
        ?>
<div class="card">
        <div class="card-header">
            <h3 class="card-title">
รายการออกใบเสนอราคา
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>รายการ</th>
                        <th>รหัสใบเสนอราคา</th>
                        <th>รายละเอียด</th>
                        <th>วันที่เสนอราคา</th>
                        <th>วันครบกำหนด</th>
                        <th>โดย</th>
                        <th style="width: 40px">สถานะ</th>
                        <th class="text-right">คำสั่งซื้อ</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1.</td>
                        <td>Customer A</td>
                        <td>QO0014</td>
                        <td>
                            <a href="?quo&qu" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>19/5/65 09:00AM</td>
                        <td><span class="badge bg-danger">ติดตาม</span></td>
                        <td>ส้ม</td>
                        <td>
                            <a href="?od" class="btn btn-sm btn-primary float-right"><i class="fas fa-file-alt"></i> เปิดบิลขาย </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Customer B</td>
                        <td>QO0015</td>
                        <td>
                            <a href="?quo&qu" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>19/5/65 09:00AM</td>
                        <td><span class="badge bg-danger">ติดตาม</span></td>
                        <td>ปอย</td>
                        <td>
                            <a href="?od" class="btn btn-sm btn-primary float-right"><i class="fas fa-file-alt"></i> เปิดบิลขาย </a>
                        </td>
                    </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Customer C</td>
                        <td>QO0016</td>
                        <td>
                            <a href="?quo&qu" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>19/5/65 09:00AM</td>
                        <td><span class="badge bg-secondary">เลยกำหนด</span></td>
                        <td>ปอย</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Customer D</td>
                        <td>QO0017</td>
                        <td>
                            <a href="?quo&qu" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>19/5/65 09:00AM</td>
                        <td><span class="badge bg-success">ได้รับคำสั่งซื้อ</span></td>
                        <td>หน่อย</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-success float-right"><i class="fas fa-file-alt"></i> เปิดบิลขาย <i class="fas fa-check"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Customer E</td>
                        <td>QO0018</td>
                        <td>
                            <a href="?quo&qu" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>19/5/65 09:00AM</td>
                        <td><span class="badge bg-secondary">เลยกำหนด</span></td>
                        <td>ส้ม</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>Customer F</td>
                        <td>QO0019</td>   
                        <td>
                            <a href="?quo&qu" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        </td>                     
                        <td>14/5/65 15:00PM</td>
                        <td>19/5/65 09:00AM</td>
                        <td><span class="badge bg-success">ได้รับคำสั่งซื้อ</span></td>
                        <td>ส้ม</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-success float-right"><i class="fas fa-file-alt"></i> เปิดบิลขาย <i class="fas fa-check"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>Customer G</td>
                        <td>QO0010</td>
                        <td>
                            <a href="?quo&qu" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>19/5/65 09:00AM</td>
                        <td><span class="badge bg-success">ได้รับคำสั่งซื้อ</span></td>
                        <td>ปอย</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-success float-right"><i class="fas fa-file-alt"></i> เปิดบิลขาย <i class="fas fa-check"></i></a>
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
</div>

