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
        <button class="btn btn-success" data-toggle="modal" data-target="#modal-xl" style="margin-right:4px;" ><i class="fas fa-file-invoice-dollar"></i> เปิดบิลขาย</button>
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
                <h4 class="modal-title">ยืนยัน ออเดอร์</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">

            <form>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm form-group">
                        <label for="company">เลขใบสั่งซื้อ (P/O No)</label>
                        <input type="text" class="form-control" id="company" placeholder="Company">
                    </div>
                </div>
                    <div class="row">
                    <div class="col-sm form-group">
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

                <div class="form-group">
                    <label for="address">รายละเอียดสินค้า</label>
                    <textarea class="form-control" id="detail" placeholder="Products" rows="5"></textarea>
                </div>

            </div>

        </form>

            </div>
            <div class="modal-footer float-right">
                <a href="?quo&confirm=yes" class="btn btn-primary">ยืนยัน ออเดอร์</a>
            </div>
        </div>
    </div>

</div>