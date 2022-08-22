<div class="container-fluid">
<?php 
$wizard = array(
    array("ติดตาม<br>รายการขอราคาสินค้า",true,"ขั้นตอนที่ 1"),
    array("เพิ่มซัพพลายเออร์<br>ตรวจเช็คสินค้าที่มี",true,"ขั้นตอนที่ 2"),
    array("ส่งใบขอราคา<br>ซัพพลายเออร์",true,"ขั้นตอนที่ 3"),
    array("เพิ่มข้อมูลเสนอราคา<br>ตามใบเสนอราคา",false,"ขั้นตอนที่ 4"),
    array("สร้างใบสั่งซื้อ<br>ตามบิลขาย",false,"ขั้นตอนที่ 5"),
    array("ติดตาม<br>สถานะสั่งซื้อ",false,"ขั้นตอนที่ 6")
  );
            ECHO content(wizard($wizard,"ผังกระบวนการจัดซื้อ"));
?>


<div class="card">
        <div class="card-header no-print"><i class="far fa-file-powerpoint"></i> ตัวอย่างก่อนพิมพ์
        <button class="btn btn-primary float-right" onclick="window.print()"><i class="fas fa-print"></i> พิมพ์</button>
        <button class="btn btn-info float-right" style="margin-right:4px;" ><i class="far fa-envelope"></i> ส่งใบขอราคา</button>
        </div>
        <div class="card-body">

        <div class="a4">
            <div class="subpage">
                <!-- Main content -->

                    <!-- title row -->
                    <div class="row">
                        <div class="col-12"><small class="float-right">Date: 2/10/2022</small>
                            <h2 class="page-header">
                            <img src="dist/img/mini.png" alt="Maha Technology" width="80" > Request Quotation / ใบขอราคา
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
                                <strong>มงคล ฟิล์ม จำกัด</strong><br>
                                13/322 ซอยพัฒนา2 บางที่ ท่าพระ<br>
                                กรุงเทพมหนคร 18765<br>
                                Phone: (555) 539-1037<br>
                                Email: john.doe@example.com
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                        <br><b>Reg #RQS00014</b><br>
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
        
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div class="a4">
            <div class="subpage">
                <!-- Main content -->

                    <!-- title row -->
                    <div class="row">
                        <div class="col-12"><small class="float-right">Date: 2/10/2022</small>
                            <h2 class="page-header">
                            <img src="dist/img/mini.png" alt="Maha Technology" width="80" > Request Quotation / ใบขอราคา
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
                                <strong>AM Control</strong><br>
                                13/322 ซอยพัฒนา2 บางที่ ท่าพระ<br>
                                กรุงเทพมหนคร 18765<br>
                                Phone: (555) 539-1037<br>
                                Email: john.doe@example.com
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            <br><b>Reg #RQS00014</b><br>
                            
        
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