
    <?php
    ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <a href="?rqc&<?php echo $reqid; ?>" class="btn btn-success"><i class="fas fa-walking"></i> สั่งซื้อรายเดียว <i class="fas fa-check-circle"></i></a>
                <a href="?rqc&<?php echo $reqid; ?>&mode=2" class="btn btn-light "><i class="fas fa-people-arrows"></i> แยกสั่งซื้อหลายราย <span class="right badge badge-danger">14,103</span></a>
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
                                รายการ อ้างอิง : ใบขอราคา [<?php echo $reqid; ?>]
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
                                        <td>4</td>
                                        <td>ตัว</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td><a class="badge badge-light" href="#">Product B</a></td>
                                        <td>6</td>
                                        <td>ตัว</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td><a class="badge badge-light" href="#">Product C</a></td>
                                        <td>12</td>
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
                                        <td>21</td>
                                        <td>ตัว</td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td><a class="badge badge-light" href="#">Product E</a></td>
                                        <td>2</td>
                                        <td>ตัว</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                           &nbsp;
                        </div>
                    </div>
                </div>
                <div class="col">

                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title">
                                มงคล ฟิล์ม จำกัด
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
                                        <td>500</td>
                                        <td>2,000</td>

                                    </tr>
                                    <tr >
                                        <td>350</td>
                                        <td>2,100</td>
                                    </tr>
                                    <tr >
                                        <td>210</td>
                                        <td>2,520</td>
                                    </tr>
                                    <tr>
                                        <td>95</td>
                                        <td>1,045</td>
                                    </tr>
                                    <tr>
                                        <td>280</td>
                                        <td>5,580</td>
                                    </tr>
                                    <tr >
                                        <td>960</td>
                                        <td>1,920</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="card-footer text-right bg-success-light">
                        <a href="?quo&qu" class="btn btn-primary float-left">เลือก</a>
                        <h5>15,165 ฿</h5>
                        </div>
                    </div>
                </div>
                <div class="col">

                    <div class="card">
                        <div class="card-header bg-warning">
                            <h3 class="card-title">
                                AM Control
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

                                    <tr >
                                        <td>480</td>
                                        <td>1920</td>
                                    </tr>
                                    <tr>
                                        <td>420</td>
                                        <td>2,520</td>
                                    </tr>
                                    <tr>
                                        <td>260</td>
                                        <td>3,120</td>
                                    </tr>
                                    <tr >
                                        <td>93</td>
                                        <td>1,023</td>
                                    </tr>
                                    <tr >
                                        <td>250</td>
                                        <td>5,250</td>
                                    </tr>
                                    <tr>
                                        <td>1,100</td>
                                        <td>2,200</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-right ">
                        <a href="?quo&qu" class="btn btn-primary float-left">เลือก</a>
                        <h5>16,033 ฿</h5>
                        </div>
                    </div>
                </div>
                <div class="col">

                    <div class="card">
                        <div class="card-header bg-danger">
                            <h3 class="card-title">
                                PLM Tech
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
                                        <td>4,492</td>
                                    </tr>
                                    <tr>
                                        <td>570</td>
                                        <td>3,420</td>
                                    </tr>
                                    <tr>
                                        <td>430</td>
                                        <td>5,160</td>
                                    </tr>
                                    <tr>
                                        <td>114</td>
                                        <td>1,254</td>
                                    </tr>
                                    <tr >
                                        <td>220</td>
                                        <td>4,620</td>
                                    </tr>
                                    <tr>
                                        <td>1,123</td>
                                        <td>2,246</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-right">
                        <a href="?quo&qu" class="btn btn-primary float-left">เลือก</a>
                        <h5>21,192 ฿</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="card-footer">
        เปรียบเทียบราคา <?php echo $reqid; ?> 
        </div>
    </div>

