<div class="container-fluid">
 <?php 
        $wizard = array(
        array("ติดตามสถานะ<br>ใบเสนอราคา",true,"ขั้นตอนที่ 1"),
        array("เปิดบิลขาย",true,"ขั้นตอนที่ 2"),
        array("ติดตามสถานะ<br>การส่งสินค้า",false,"ขั้นตอนที่ 3"),
        array("การวางบิล<br>การชำระ",false,"ขั้นตอนที่ 4"),
        array("ปิดการขาย<br>เสร็จสิ้น",false,"ขั้นตอนที่ 5")
        );
        
        ECHO content(wizard($wizard,"ผังกระบวนการขาย"));
        ?>

    <div class="card">
        <div class="card-header no-print">
        <button class="btn btn-success" data-toggle="modal" data-target="#modal-xl" style="margin-right:4px;" ><i class="fas fa-file-invoice-dollar"></i> ยืนยัน เปิดบิลขาย</button>
        <div class="btn btn-primary" ><i class="fa fa-plus"></i>
                    เพิ่มสินค้า</div>
        </div>
        <div class="card-body">
        <div class="a4">

            <div class="subpage">
                <!-- Main content -->
        <div class="ribbon-wrapper ribbon-lg " >
                <div class="ribbon bg-danger">
                ติดตาม
                </div>
        </div>
                    <!-- title row -->
                    <div class="row">
                        <div class="col-12"><small class="float-right">Date: 2/10/2022</small>
                            <h2 class="page-header">
                            <img src="dist/img/mini.png" alt="Maha Technology" width="80" > Quotation / ใบเสนอราคา
                            </h2>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            From
                            <address>
                                <strong>Maha Technology Co., Ltd.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                Phone: (804) 123-5432<br>
                                Email: info@almasaeedstudio.com
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            To
                            <address>
                                <strong>บริษัท เกษมชัยเจริญ Co.,ltd.</strong><br>
                                13/322 ซอยพัฒนา2 บางที่ ท่าพระ<br>
                                กรุงเทพมหนคร 18765<br>
                                Phone: (555) 539-1037<br>
                                Email: john.doe@example.com
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            <b>Reg #RQS00014</b><br>
                            <br>
                            <b>Order ID:</b> 4F3S8J<br>
                            <b>Payment Due:</b> 2/22/2014<br>
                            <b>Account:</b> 968-34567
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Qty</th>
                                        <th>Product</th>
                                        <th>Serial #</th>
                                        <th>Description</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Call of Duty</td>
                                        <td>455-981-221</td>
                                        <td>El snort testosterone trophy driving gloves handsome</td>
                                        <td>$64.50</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Need for Speed IV</td>
                                        <td>247-925-726</td>
                                        <td>Wes Anderson umami biodiesel</td>
                                        <td>$50.00</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Monsters DVD</td>
                                        <td>735-845-642</td>
                                        <td>Terry Richardson helvetica tousled street art master</td>
                                        <td>$10.70</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Grown Ups Blue Ray</td>
                                        <td>422-568-642</td>
                                        <td>Tousled lomo letterpress</td>
                                        <td>$25.99</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>


                <!-- /.content -->
            </div>
        </div>
        </div>
        <div class="card-footer no-print">
            Page 1/1
        </div>
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