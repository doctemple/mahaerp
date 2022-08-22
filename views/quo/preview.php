<div class="container-fluid ">
    <?php 
    $wizard = array(
        array("เพิ่มข้อมูล<br>ลูกค้าขอใบเสนอราคา",true,"ขั้นตอนที่ 1"),
        array("เพิ่มรายการสินค้า<br>เพื่อเสนอราคา",true,"ขั้นตอนที่ 2"),
        array("ติดตาม<br>รายการสถานะการขอราคา",true,"ขั้นตอนที่ 3"),
        array("เปรียบเทียบราคา<br>เลือกซัพพลายเออร์",true,"ขั้นตอนที่ 4"),
        array("กำหนดราคาขาย<br>ประเมินกำไร",true,"ขั้นตอนที่ 5"),
        array("ยืนยัน<br>ส่งใบเสนอราคา",true,"ขั้นตอนที่ 6")
    );
    ECHO content(wizard($wizard,"ผังกระบวนการเสนอราคา"));
?>


    <div class="card">
        <div class="card-header no-print"><i class="far fa-file-powerpoint"></i> ตัวอย่างก่อนพิมพ์
        <button class="btn btn-primary float-right" onclick="window.print()"><i class="fas fa-print"></i> พิมพ์</button>
        <button class="btn btn-info float-right" style="margin-right:4px;" ><i class="far fa-envelope"></i> ส่งใบเสนอราคา</button>
        </div>
        <div class="card-body">
        <div class="a4">
            <div class="subpage">
                <!-- Main content -->

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