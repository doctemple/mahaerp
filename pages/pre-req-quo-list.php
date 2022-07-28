<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">รายการขอราคาสินค้า</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="?"><i class="nav-icon fas fa-home"></i> </a></li>
                    <li class="breadcrumb-item active">จัดซื้อ</li>
                    <li class="breadcrumb-item active">รายการขอราคาสินค้า</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <a class="btn btn-primary" href="?rq"><i class="fa fa-plus"></i>
                    ขอใบเสนอราคา(จำหน่าย)</a>
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
                        <th>ชื่อลูกค้า</th>
                        <th>รหัสใบขอราคา</th>
                        <th>รายละเอียด</th>
                        <th>วันที่สร้าง</th>
                        <th>เจ้าหน้าที่</th>
                        <th style="width: 40px">สถานะ</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1.</td>
                        <td>Customer A</td>
                        <td>RQ0014</td>
                        <td>
                            <a class="btn btn-light" href="?rql&rq0014">ข้อมูล</a>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>ส้ม</td>
                        <td><span class="badge bg-danger">ล่าช้า</span></td>
                        <td>
                            <div class="btn btn-secondary"><i class="fa fa-user"></i> มงคล ฟิล์ม จำกัด</div>
                            <div class="btn btn-secondary"><i class="fa fa-user"></i> AM Control</div>
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Customer B</td>
                        <td>RQ0015</td>
                        <td>
                            <div class="btn btn-light">ข้อมูล</div>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>ส้ม</td>
                        <td><span class="badge bg-success">เสร็จ</span></td>
                        <td>
                            <div class="btn btn-secondary"><i class="fa fa-user"></i> มงคล ฟิล์ม จำกัด</div>
                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Customer C</td>
                        <td>RQ0016</td>
                        <td>
                            <div class="btn btn-light">ข้อมูล</div>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>ปอย</td>
                        <td><span class="badge bg-success">เสร็จ</span></td>
                        <td>
                            รอ
                        </td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Customer D</td>
                        <td>RQ0017</td>
                        <td>
                            <div class="btn btn-light">ข้อมูล</div>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>หน่อย</td>
                        <td><span class="badge bg-danger">ล่าช้า</span></td>
                        <td>
                            <div class="btn btn-secondary"><i class="fa fa-user"></i> AM Control</div>
                        </td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Customer E</td>
                        <td>RQ0018</td>
                        <td>
                            <div class="btn btn-light">ข้อมูล</div>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>ส้ม</td>
                        <td><span class="badge bg-secondary">รอ</span></td>
                        <td>
                            <div class="btn btn-secondary"><i class="fa fa-user"></i> AM Control</div>
                        </td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>Customer F</td>
                        <td>RQ0019</td>
                        <td>
                            <div class="btn btn-light">ข้อมูล</div>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>ส้ม</td>
                        <td><span class="badge bg-secondary">รอ</span></td>
                        <td>
                            <div class="btn btn-secondary"><i class="fa fa-user"></i> มงคล ฟิล์ม จำกัด</div>
                            <div class="btn btn-secondary"><i class="fa fa-user"></i> AM Control</div>
                        </td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>Customer G</td>
                        <td>RQ0010</td>
                        <td>
                            <div class="btn btn-light">ข้อมูล</div>
                        </td>
                        <td>14/5/65 15:00PM</td>
                        <td>ส้ม</td>
                        <td><span class="badge bg-secondary">รอ</span></td>
                        <td>
                            รอ
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
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
    <!-- /.modal -->