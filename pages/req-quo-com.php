<div class="container-fluid">
    <?php 
        $wizard = array(
            array("ปรับปรุงราคาสินค้า",true,"5"),
            array("เปรียบเทียบราคา",true,"6"),
            array("กำหนดราคาเสนอขาย",false,"7"),
            array("ส่งใบเสนอราคา",false,"8")
            );
            
            ECHO content(wizard($wizard,"ผังกระบวนการเสนอราคา"));
        ?>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                เปรียบเทียบราคา
            </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                    <i class="fas fa-expand"></i>
                </button>
            </div>
        </div>

        <div class="card-body">

            <div class="row">
                <div class="col">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                รายการ
                            </h3>
                        </div>

                        <div class="card-body p-0">

                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>สินค้า</th>
                                        <th>จำนวน</th>
                                        <th>หน่วยนับ</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1.</td>
                                        <td><a class="badge badge-light" href="#">Product A</a></td>
                                        <td>11</td>
                                        <td>ตัว</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td><a class="badge badge-light" href="#">Product B</a></td>
                                        <td>11</td>
                                        <td>ตัว</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td><a class="badge badge-light" href="#">Product C</a></td>
                                        <td>11</td>
                                        <td>ตัว</td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td><a class="badge badge-light" href="#">Product D</a></td>
                                        <td>11</td>
                                        <td>ตัว</td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td><a class="badge badge-light" href="#">Product E</a></td>
                                        <td>11</td>
                                        <td>ตัว</td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td><a class="badge badge-light" href="#">Product E</a></td>
                                        <td>11</td>
                                        <td>ตัว</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            อ้างอิง : ใบขอราคา [PQV0014]
                        </div>
                    </div>
                </div>
                <div class="col">

                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title">
                                ซัพพลายเออร์ 1
                            </h3>
                        </div>

                        <div class="card-body p-0">

                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>ราคาต่อหน่วย</th>
                                        <th>รวม</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1,123</td>
                                        <td>14,122</td>
                                    </tr>
                                    <tr>
                                        <td>1,123</td>
                                        <td>14,122</td>
                                    </tr>
                                    <tr>
                                        <td>1,123</td>
                                        <td>14,122</td>
                                    </tr>
                                    <tr>
                                        <td>1,123</td>
                                        <td>14,122</td>
                                    </tr>
                                    <tr>
                                        <td>1,123</td>
                                        <td>14,122</td>
                                    </tr>
                                    <tr>
                                        <td>1,123</td>
                                        <td>14,122</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="card-footer">
                            <div class="btn btn-primary">เลือกซัพพลายเออร์</div>
                        </div>
                    </div>
                </div>
                <div class="col">

                    <div class="card">
                        <div class="card-header bg-warning">
                            <h3 class="card-title">
                                ซัพพลายเออร์ 2
                            </h3>
                        </div>

                        <div class="card-body p-0">

                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>ราคาต่อหน่วย</th>
                                        <th>รวม</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1,123</td>
                                        <td>14,122</td>
                                    </tr>
                                    <tr>
                                        <td>1,123</td>
                                        <td>14,122</td>
                                    </tr>
                                    <tr>
                                        <td>1,123</td>
                                        <td>14,122</td>
                                    </tr>
                                    <tr>
                                        <td>1,123</td>
                                        <td>14,122</td>
                                    </tr>
                                    <tr>
                                        <td>1,123</td>
                                        <td>14,122</td>
                                    </tr>
                                    <tr>
                                        <td>1,123</td>
                                        <td>14,122</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <div class="btn btn-warning">เลือกซัพพลายเออร์</div>
                        </div>
                    </div>
                </div>
                <div class="col">

                    <div class="card">
                        <div class="card-header bg-danger">
                            <h3 class="card-title">
                                ซัพพลายเออร์ 3
                            </h3>
                        </div>

                        <div class="card-body p-0">

                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>ราคาต่อหน่วย</th>
                                        <th>รวม</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1,123</td>
                                        <td>14,122</td>
                                    </tr>
                                    <tr>
                                        <td>1,123</td>
                                        <td>14,122</td>
                                    </tr>
                                    <tr>
                                        <td>1,123</td>
                                        <td>14,122</td>
                                    </tr>
                                    <tr>
                                        <td>1,123</td>
                                        <td>14,122</td>
                                    </tr>
                                    <tr>
                                        <td>1,123</td>
                                        <td>14,122</td>
                                    </tr>
                                    <tr>
                                        <td>1,123</td>
                                        <td>14,122</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <div class="btn btn-danger">เลือกซัพพลายเออร์</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>ราคาสินค้า</strong> จะใช้ราคาตามระบบอัตโนมัติถ้ามี ตามเงื่อนไขอายุราคาล่าสุด ของสินค้านั้นๆ
    </div>

</div>