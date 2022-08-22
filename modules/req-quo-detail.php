<div class="container-fluid">
    <?php 
        $wizard = array(
        array("ลูกค้าขอใบเสนอราคา",true,"1"),
        array("สร้างใบขอราคา",true,"2"),
        array("รายการสถานะการขอราคา",true,"3"),
        array("ขอราคาซัพพลายเออร์",false,"4")
        );

        ECHO wizard($wizard,"ผังกระบวนการขอราคา");

        $reqid = $_PARAM[1];
    ?>

    <div class="card">

        <div class="card-body">
            <h5>อ้างอิง : ใบขอเสนอราคาลูกค้า [<?php print($reqid); ?>]</h5>
            <div class="row">

                <div class="col-sm align-self-start">
                    <div class="text-muted">
                        <p class="text-sm">ลูกค้า
                            <b class="d-block">บริษัท เกษมชัยเจริญ Co.,ltd.</b>
                        </p>
                        <p class="text-sm">ที่อยู่
                            <b class="d-block">13/322 ซอยพัฒนา2 บางที่ ท่าพระ กรุงเทพมหนคร 18765</b>
                        </p>
                        <p class="text-sm">โครงการ
                            <b class="d-block">เกษม2 ท่าพระ</b>
                        </p>
                    </div>
                </div>
                <div class="col-sm align-self-start">
                    <div class="text-muted">
                        <p class="text-sm">ผู้ติดต่อ
                            <b class="d-block">คุณ ดอกรัก</b>
                        </p>
                        <p class="text-sm">โทร
                            <b class="d-block">098-232-6373</b>
                        </p>
                        <p class="text-sm">อีเมล
                            <b class="d-block">absjs@gmail.com</b>
                        </p>
                    </div>
                </div>
                <div class="col-sm align-self-start">

                    <h5 class="mt-5 text-muted">files</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i>
                                requirements.docx</a>
                        </li>
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i>
                                auauasus.pdf</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="accordion">
        <div class="card">
            <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                    รายละเอียดสินค้า
                </a>
            </div>
            <div id="collapseOne" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    Butterfly Valve Kize 2.5 4 ea
                    Glob Vaklve Kize 11" 2 ea
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <div class="btn btn-primary" data-toggle="modal" data-target="#modal-xl"><i class="fa fa-plus"></i>
                    เพิ่มสินค้า</div>
            </h3>
        </div>
        <!-- /.card-header -->
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
                        <th></th>
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
                        <td>
                            <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <a class="btn btn-success" href="?rql"><i class="fa fa-send"></i> ยืนยันขอราคา</a>
        </div>
    </div>

    <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>ราคาสินค้า</strong> จะใช้ราคาตามระบบอัตโนมัติถ้ามี ตามเงื่อนไขอายุราคาล่าสุด ของสินค้านั้นๆ
    </div>

</div>


<div class="modal fade" id="modal-xl">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title">เพิ่มสินค้า</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label>สินค้า</label>
                    <div class="row">
                        <div class="col-1"><button type="button" class="btn btn-secondary">เพิ่ม</button></div>
                        <div class="col">
                            <select class="form-control">
                                <option>product 1</option>
                                <option>product 2</option>
                                <option>product 3</option>
                                <option>product 4</option>
                                <option>product 5</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>ยีห้อ</label>
                    <select class="form-control">
                        <option>Brand 1</option>
                        <option>Brand 2</option>
                        <option>Brand 3</option>
                        <option>Brand 4</option>
                        <option>Brand 5</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="model">รุ่น</label>
                    <input type="text" class="form-control" id="model" placeholder="Model">
                </div>
                <div class="form-group">
                    <label for="spec">สเปค</label>
                    <textarea rows="5" class="form-control" id="spec" placeholder="Spec"></textarea>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-primary">เพิ่ม</button>
            </div>
        </div>
    </div>

</div>