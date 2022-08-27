<div class="container">
    <div class="card card-primary">
        <div class="card-header"><i class="fas fa-search"></i> ค้นหา</div>
        <div class="card-body">

            <form action="">
                <div class="input-group mb-3">
                    <input type="text" class="form-control">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                </div>
            </form>

<small>พิมพ์ค้นหา 3 พยางค์ ขึ้นไป</small>
        </div>
        <div class="card-footer">
        <div class="btn btn-success float-right" data-toggle="modal" data-target="#modal-xl"><i class="fa fa-plus"></i>
    เพิ่มลูกค้าใหม่</div>
        </div>
    </div>

    <div class="card ">
        <div class="card-header">ผลการค้นหา</div>
        <div class="card-body">


 <ul class="list-group list-group-flush">
    <li class="list-group-item"><a href="?cm&id=m2551">Customer 1</a></li>
    <li class="list-group-item"><a href="?cm&id=m2551">Customer 2</a></li>
    <li class="list-group-item"><a href="?cm&id=m2551">Customer 3</a></li>
    <li class="list-group-item"><a href="?cm&id=m2551">Customer 4</a></li>
    <li class="list-group-item"><a href="?cm&id=m2551">Customer 5</a></li>
  </ul>

        </div>
        <div class="card-footer"><small>พบ 5 รายการ</small></div>
    </div>



    <div class="modal fade" id="modal-xl" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title">เพิ่มลูกค้าใหม่</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">

            <div class="form-group">
                <label for="inputName">ชื่อลูกค้า</label>
                <input type="text" id="inputName" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputEmail">เบอร์โทร</label>
                <input type="tel" id="inputPhone" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputEmail">อีเมล</label>
                <input type="email" id="inputEmail" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputSubject">บริษัท</label>
                <input type="text" id="inputSubject" class="form-control">
            </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary float-right">เพิ่มลูกค้า</button>
            </div>
        </div>
    </div>

</div>


</div>


