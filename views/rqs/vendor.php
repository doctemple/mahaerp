<div class="container-fluid">
<?php 
$wizard = array(
    array("ติดตาม<br>รายการขอราคาสินค้า",true,"ขั้นตอนที่ 1"),
    array("เพิ่มซัพพลายเออร์<br>ตรวจเช็คสินค้าที่มี",true,"ขั้นตอนที่ 2"),
    array("ส่งใบขอราคา<br>ซัพพลายเออร์",false,"ขั้นตอนที่ 3"),
    array("เพิ่มข้อมูลเสนอราคา<br>ตามใบเสนอราคา",false,"ขั้นตอนที่ 4"),
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

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <div class="btn btn-primary" data-toggle="modal" data-target="#modal-xl"><i class="fa fa-plus"></i>
                </div>
                <div class="btn btn-secondary"><i class="fa fa-user"></i> มงคล ฟิล์ม จำกัด</div>
                <div class="btn btn-secondary"><i class="fa fa-user"></i> AM Control</div>
            </h3>
        </div>
        <div class="card-body p-0">

            <table class="table table-sm">
                <thead>
                    <tr>
                        <th style="width: 40px" class="text-center"><input type="checkbox" class="form-control"></th>
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
                        <td class="text-center"><input type="checkbox" class="form-control"></td>
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
                        <td class="text-center"><input type="checkbox" class="form-control"></td>
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
                        <td class="text-center"><input type="checkbox" class="form-control"></td>
                        <td>3.</td>
                        <td>Product A</td>
                        <td>Valve</td>
                        <td>Semen</td>
                        <td>M21</td>
                        <td>3 x 2 cm</td>
                        <td>11</td>
                        <td>ตัว</td>
                        <td>1,345 <span class="badge badge-success">5 วัน</span></td>
                        <td>14,795</td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"><input type="checkbox" class="form-control"></td>
                        <td>4.</td>
                        <td>Product A</td>
                        <td>Valve</td>
                        <td>Semen</td>
                        <td>M21</td>
                        <td>3 x 2 cm</td>
                        <td>11</td>
                        <td>ตัว</td>
                        <td>1,345 <span class="badge badge-warning">เกิน 17 วัน</span></td>
                        <td>14,795</td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"><input type="checkbox" class="form-control"></td>
                        <td>5.</td>
                        <td>Product A</td>
                        <td>Valve</td>
                        <td>Semen</td>
                        <td>M21</td>
                        <td>3 x 2 cm</td>
                        <td>11</td>
                        <td>ตัว</td>
                        <td>1,345 <span class="badge badge-success">1 วัน</span></td>
                        <td>14,795</td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"><input type="checkbox" class="form-control"></td>
                        <td>6.</td>
                        <td>Product A</td>
                        <td>Valve</td>
                        <td>Semen</td>
                        <td>M21</td>
                        <td>3 x 2 cm</td>
                        <td>11</td>
                        <td>ตัว</td>
                        <td>1,345 <span class="badge badge-success">2 วัน</span></td>
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
            <a class="btn btn-success" href="?rqs&confirm=rq00014"><i class="fas fa-check"></i> ยืนยันข้อมูลขอราคา</a>
        </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-xl">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">เพิ่มซัพพลายเออร์</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label>ซัพพลายเออร์</label>
                    <div class="row">
                        <div class="col-1"><button type="button" class="btn btn-secondary">เพิ่ม</button></div>
                        <div class="col">
                            <select class="form-control">
                                <option>Supplier 1</option>
                                <option>Supplier 2</option>
                                <option>Supplier 3</option>
                                <option>Supplier 4</option>
                                <option>Supplier 5</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-primary">เพิ่ม</button>
                </div>
            </div>
        </div>
    </div>
</div>