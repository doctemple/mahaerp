<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><i class="fas fa-file-invoice-dollar"></i> ขอราคาซัพพลายเออร์</h1>
                <h5>อ้างอิง : ใบขอเสนอราคาลูกค้า [RQ00014]</h5>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="?"><i class="nav-icon fas fa-home"></i> </a></li>
                    <li class="breadcrumb-item active">จัดซื้อ</li>
                    <li class="breadcrumb-item active"> ขอราคาซัพพลายเออร์</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="container-fluid">

<?php 
include_once("plugins/wizard/wizard.php");
$wizard = array(
  array("ลูกค้าขอใบเสนอราคา",true),
  array("รายการสถานะการขอราคา",true),
  array("สร้างใบขอราคา",true),
  array("ขอราคาซัพพลายเออร์",true)
);
wizard($wizard);
?>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                    <div class="btn btn-primary" data-toggle="modal" data-target="#modal-xl"><i class="fa fa-plus"></i>
                    </div>
                    <div class="btn btn-secondary"><i class="fa fa-user"></i> มงคล ฟิล์ม จำกัด</div>
                          <div class="btn btn-secondary"><i class="fa fa-user"></i> AM Control</div>
            </h3>
        </div>
        <!-- /.card-header -->
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
                        <th></th>
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
        <a class="btn btn-danger" href="rqs-print.php"><i class="fa fa-print"></i> พิมพ์</a>
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
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->