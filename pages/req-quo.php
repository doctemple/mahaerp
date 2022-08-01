<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><i class="fas fa-file-import"></i> ลูกค้าขอให้เสนอราคา</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="?"><i class="nav-icon fas fa-home"></i> </a></li>
                    <li class="breadcrumb-item active">ฝ่ายขาย</li>
                    <li class="breadcrumb-item active">ลูกค้าขอให้เสนอราคา</li>
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
        array("รายการสถานะการขอราคา",false),
        array("สร้างใบขอราคา",false),
        array("ขอราคาซัพพลายเออร์",false)
        );
        wizard($wizard);
        ?>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Require Quotation</h3>
        </div>
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="company">บริษัท</label>
                    <input type="text" class="form-control" id="company" placeholder="Company">
                </div>
                <div class="form-group">
                    <label for="customer">ชื่อลูกค้า</label>
                    <input type="text" class="form-control" id="customer" placeholder="Customer Name">
                </div>
                <div class="form-group">
                    <label for="phone">โทร</label>
                    <input type="text" class="form-control" id="phone" placeholder="Phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">อีเมล</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="address">ที่อยู่</label>
                    <textarea class="form-control" id="address" placeholder="Address" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="project">โครงการ</label>
                    <input type="text" class="form-control" id="project" placeholder="Project">
                </div>
                <div class="form-group">
                    <label for="address">รายละเอียดสินค้า</label>
                    <textarea class="form-control" id="detail" placeholder="Products" rows="12"></textarea>
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
            <div class="card-footer">
                <a href="?rql" class="btn btn-primary">บันทึก</a>
            </div>
        </form>
    </div>
</div>
</div>