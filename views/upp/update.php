<div class="container-fluid">
    <?php 
$wizard = array(
    array("ติดตาม<br>รายการขอราคาสินค้า",true,"ขั้นตอนที่ 1"),
    array("เพิ่มซัพพลายเออร์<br>ตรวจเช็คสินค้าที่มี",true,"ขั้นตอนที่ 2"),
    array("ส่งใบขอราคา<br>ซัพพลายเออร์",true,"ขั้นตอนที่ 3"),
    array("เพิ่มข้อมูลเสนอราคา<br>ตามใบเสนอราคา",true,"ขั้นตอนที่ 4"),
    array("สร้างใบสั่งซื้อ<br>ตามบิลขาย",false,"ขั้นตอนที่ 5"),
    array("ติดตาม<br>สถานะสั่งซื้อ",false,"ขั้นตอนที่ 6")
  );
            ECHO content(wizard($wizard,"ผังกระบวนการจัดซื้อ"));
?>

<div class="card">
    <div class="card-body">
        <h5>อ้างอิง : ใบขอเสนอราคาลูกค้า [RQ00014]</h5>
    </div>
</div>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-user"></i> มงคล ฟิล์ม จำกัด
        </h3>

    </div>
    <div class="card-body p-0">

        <table class="table table-sm">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>สินค้า</th>
                    <th>ประเภท</th>
                    <th>ยีห้อ</th>
                    <th>รุ่น</th>
                    <th>สเปค</th>
                    <th>จำนวน</th>
                    <th>หน่วยนับ</th>
                    <th>ราคา</th>
                    <th>รวม</th>
                    <th width="10%"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Product A</td>
                    <td>Valve</td>
                    <td>Semen</td>
                    <td>M21</td>
                    <td>3 x 2 cm</td>
                    <td>11</td>
                    <td>ตัว</td>
                    <td>รอ</td>
                    <td></td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Product A</td>
                    <td>Valve</td>
                    <td>Semen</td>
                    <td>M21</td>
                    <td>3 x 2 cm</td>
                    <td>11</td>
                    <td>ตัว</td>
                    <td>รอ</td>
                    <td></td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Product A</td>
                    <td>Valve</td>
                    <td>Semen</td>
                    <td>M21</td>
                    <td>3 x 2 cm</td>
                    <td>11</td>
                    <td>ตัว</td>
                    <td>1,345</td>
                    <td>14,795</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Product A</td>
                    <td>Valve</td>
                    <td>Semen</td>
                    <td>M21</td>
                    <td>3 x 2 cm</td>
                    <td>11</td>
                    <td>ตัว</td>
                    <td>1,345</td>
                    <td>14,795</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Product A</td>
                    <td>Valve</td>
                    <td>Semen</td>
                    <td>M21</td>
                    <td>3 x 2 cm</td>
                    <td>11</td>
                    <td>ตัว</td>
                    <td>1,345</td>
                    <td>14,795</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Product A</td>
                    <td>Valve</td>
                    <td>Semen</td>
                    <td>M21</td>
                    <td>3 x 2 cm</td>
                    <td>11</td>
                    <td>ตัว</td>
                    <td>1,345</td>
                    <td>14,795</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer text-right">
        <a class="btn btn-primary" href="?po" ><i class="fas fa-file-invoice-dollar"></i> สร้างใบสั่งซื้อ</a>
    </div>
</div>


<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-user"></i> AM Control
        </h3>
    </div>
    <div class="card-body p-0">

        <table class="table table-sm">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>สินค้า</th>
                    <th>ประเภท</th>
                    <th>ยีห้อ</th>
                    <th>รุ่น</th>
                    <th>สเปค</th>
                    <th>จำนวน</th>
                    <th>หน่วยนับ</th>
                    <th>ราคา</th>
                    <th>รวม</th>
                    <th width="10%"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Product A</td>
                    <td>Valve</td>
                    <td>Semen</td>
                    <td>M21</td>
                    <td>3 x 2 cm</td>
                    <td>11</td>
                    <td>ตัว</td>
                    <td>รอ</td>
                    <td></td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Product A</td>
                    <td>Valve</td>
                    <td>Semen</td>
                    <td>M21</td>
                    <td>3 x 2 cm</td>
                    <td>11</td>
                    <td>ตัว</td>
                    <td>รอ</td>
                    <td></td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Product A</td>
                    <td>Valve</td>
                    <td>Semen</td>
                    <td>M21</td>
                    <td>3 x 2 cm</td>
                    <td>11</td>
                    <td>ตัว</td>
                    <td>1,345</td>
                    <td>14,795</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Product A</td>
                    <td>Valve</td>
                    <td>Semen</td>
                    <td>M21</td>
                    <td>3 x 2 cm</td>
                    <td>11</td>
                    <td>ตัว</td>
                    <td>1,345</td>
                    <td>14,795</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Product A</td>
                    <td>Valve</td>
                    <td>Semen</td>
                    <td>M21</td>
                    <td>3 x 2 cm</td>
                    <td>11</td>
                    <td>ตัว</td>
                    <td>1,345</td>
                    <td>14,795</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Product A</td>
                    <td>Valve</td>
                    <td>Semen</td>
                    <td>M21</td>
                    <td>3 x 2 cm</td>
                    <td>11</td>
                    <td>ตัว</td>
                    <td>1,345</td>
                    <td>14,795</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer text-right">
    <a class="btn btn-warning" href="?po" ><i class="fas fa-file-invoice-dollar"></i> สร้างใบสั่งซื้อ</a>
    </div>
</div>

<div class="card card-danger">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-user"></i> PLM Tech
        </h3>
    </div>
    <div class="card-body p-0">

        <table class="table table-sm">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>สินค้า</th>
                    <th>ประเภท</th>
                    <th>ยีห้อ</th>
                    <th>รุ่น</th>
                    <th>สเปค</th>
                    <th>จำนวน</th>
                    <th>หน่วยนับ</th>
                    <th>ราคา</th>
                    <th>รวม</th>
                    <th width="10%"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Product A</td>
                    <td>Valve</td>
                    <td>Semen</td>
                    <td>M21</td>
                    <td>3 x 2 cm</td>
                    <td>11</td>
                    <td>ตัว</td>
                    <td>รอ</td>
                    <td></td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Product A</td>
                    <td>Valve</td>
                    <td>Semen</td>
                    <td>M21</td>
                    <td>3 x 2 cm</td>
                    <td>11</td>
                    <td>ตัว</td>
                    <td>รอ</td>
                    <td></td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Product A</td>
                    <td>Valve</td>
                    <td>Semen</td>
                    <td>M21</td>
                    <td>3 x 2 cm</td>
                    <td>11</td>
                    <td>ตัว</td>
                    <td>1,345</td>
                    <td>14,795</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Product A</td>
                    <td>Valve</td>
                    <td>Semen</td>
                    <td>M21</td>
                    <td>3 x 2 cm</td>
                    <td>11</td>
                    <td>ตัว</td>
                    <td>1,345</td>
                    <td>14,795</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Product A</td>
                    <td>Valve</td>
                    <td>Semen</td>
                    <td>M21</td>
                    <td>3 x 2 cm</td>
                    <td>11</td>
                    <td>ตัว</td>
                    <td>1,345</td>
                    <td>14,795</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Product A</td>
                    <td>Valve</td>
                    <td>Semen</td>
                    <td>M21</td>
                    <td>3 x 2 cm</td>
                    <td>11</td>
                    <td>ตัว</td>
                    <td>1,345</td>
                    <td>14,795</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer text-right">
    <a class="btn btn-danger" href="?po" ><i class="fas fa-file-invoice-dollar"></i> สร้างใบสั่งซื้อ</a>
    </div>
</div>

</div>