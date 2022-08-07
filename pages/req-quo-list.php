<div class="container-fluid">
    <?php 
        $wizard = array(
        array("ลูกค้าขอใบเสนอราคา",true,"1"),
        array("รายการสถานะการขอราคา",true,"2"),
        array("สร้างใบขอราคา",false,"3"),
        array("ขอราคาซัพพลายเออร์",false,"4")
        );

        ECHO content(wizard($wizard,"ผังกระบวนการขอราคา"));
        ?>


    <div class="card">
        <div class="card-header ">
            <h3 class="card-title">
                <a class="btn btn-secondary" href="?rq"><i class="fa fa-plus"></i>
                    ขอใบเสนอราคา(จำหน่าย)</a>
            </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                    <i class="fas fa-expand"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>รายการ</th>
                        <th>รหัสใบขอราคา</th>
                        <th>รายละเอียด</th>
                        <th>วันที่สร้าง</th>
                        <th>เจ้าหน้าที่</th>
                        <th style="width: 40px">สถานะ</th>
                        <th>ซัพพลายเออร์</th>
                        <th>ดำเนินการต่อ</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1.</td>
                        <td>Customer A</td>
                        <td>RQ0014</td>
                        <td>
                            <a class="btn btn-secondary" href="?rqld&rq0014"><i class="fas fa-file-alt"></i>
                                ข้อมูล</a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>ส้ม</td>
                        <td><span class="badge bg-success">ได้ราคาครบ</span></td>
                        <td>
                            <span class="badge badge-success"><i class="fa fa-user"></i> มงคล ฟิล์ม จำกัด</span>
                            <span class="badge badge-success"><i class="fa fa-user"></i> AM Control</span>
                        </td>
                        <td>
                            <a href="?rqc" class="btn btn-primary"><i class="fa fa-cog"></i> เปรียบเทียบราคา</a>
                        </td>

                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Customer B</td>
                        <td>RQ0015</td>
                        <td>
                            <a class="btn btn-secondary" href="?rqld&rq0014"><i class="fas fa-file-alt"></i>
                                ข้อมูล</a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>ส้ม</td>
                        <td><span class="badge bg-success">ได้ราคาครบ</span></td>
                        <td>
                            <span class="badge badge-secondary"><i class="fa fa-user"></i> AM Control</span>
                        </td>
                        <td>
                            <a class="btn btn-success" href="?quo"><i class="fa fa-signatue"></i>
                                สร้างใบเสนอราคา</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>มาหา เทคโนโลยี</td>
                        <td>RQ0016</td>
                        <td>
                            <a class="btn btn-secondary" href="?rqld&rq0014"><i class="fas fa-file-alt"></i>
                                ข้อมูล</a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>ปอย</td>
                        <td><span class="badge bg-secondary">รอ.. เลือกซัพพลายเออร์</span></td>
                        <td>

                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Customer D</td>
                        <td>RQ0017</td>
                        <td>
                            <a class="btn btn-secondary" href="?rqld&rq0014"><i class="fas fa-file-alt"></i>
                                ข้อมูล</a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>หน่อย</td>
                        <td><span class="badge bg-danger">รอ.. ราคา</span></td>
                        <td>
                            <span class="badge badge-secondary"><i class="fa fa-user"></i> AM Control</span>
                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Customer E</td>
                        <td>RQ0018</td>
                        <td>
                            <a class="btn btn-secondary" href="?rqld&rq0014"><i class="fas fa-file-alt"></i>
                                ข้อมูล</a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>ส้ม</td>
                        <td><span class="badge bg-secondary">รอ.. ราคา</span></td>
                        <td>
                            <span class="badge badge-secondary"><i class="fa fa-user"></i> AM Control</span>
                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>Customer F</td>
                        <td>RQ0019</td>
                        <td>
                            <a class="btn btn-secondary" href="?rqld&rq0014"><i class="fas fa-file-alt"></i>
                                ข้อมูล</a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>ส้ม</td>
                        <td><span class="badge bg-secondary">รอ.. ราคา</span></td>
                        <td>
                            <span class="badge badge-success"><i class="fa fa-user"></i> มงคล ฟิล์ม จำกัด</span>
                            <span class="badge badge-secondary"><i class="fa fa-user"></i> AM Control</span>
                        </td>
                        <td>
                            <a href="?rqc" class="btn btn-primary"><i class="fa fa-cog"></i> เปรียบเทียบราคา</a>
                        </td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>Customer G</td>
                        <td>RQ0010</td>
                        <td>
                            <a class="btn btn-secondary" href="?rqld&rq0014"><i class="fas fa-file-alt"></i>
                                ข้อมูล</a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>ส้ม</td>
                        <td><span class="badge bg-secondary">รอ.. เลือกซัพพลายเออร์</span></td>
                        <td>
                        </td>
                        <td>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>


</div>