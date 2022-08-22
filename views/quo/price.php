
<script src="dist/js/vue.min.js"></script>
<div  class="container-fluid">
<?php 
    $wizard = array(
        array("เพิ่มข้อมูล<br>ลูกค้าขอใบเสนอราคา",true,"ขั้นตอนที่ 1"),
        array("เพิ่มรายการสินค้า<br>เพื่อเสนอราคา",true,"ขั้นตอนที่ 2"),
        array("ติดตาม<br>รายการสถานะการขอราคา",true,"ขั้นตอนที่ 3"),
        array("เปรียบเทียบราคา<br>เลือกซัพพลายเออร์",true,"ขั้นตอนที่ 4"),
        array("กำหนดราคาขาย<br>ประเมินกำไร",true,"ขั้นตอนที่ 5"),
        array("ยืนยัน<br>ส่งใบเสนอราคา",false,"ขั้นตอนที่ 6")
    );
    ECHO content(wizard($wizard,"ผังกระบวนการเสนอราคา"));
?>

    <div class="card">
        <div class="card-body">
            <h5>อ้างอิง : ใบขอเสนอราคาลูกค้า [<?php print($reqid); ?>] </h5>
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

    <div id="saleprice-table" class="card">
        <div class="card-header text-right">
            <h3 class="card-title">
                รายการ {{ message }}
            </h3>
            <a class="btn btn-secondary" href="#"><i class="fa fa-save"></i> บันทึก</a>
        </div>
        <!-- /.card-header -->
        <div  class="card-body p-0">

        <div class="input-group mb-3" style="padding:6px;">
            <div class="input-group-prepend">
            <span class="input-group-text">ค้นหา</span>
            </div>
            <input type="text" v-model="search" class="form-control" >
        </div>

            <table class="table table-sm">
                <thead>
                    <!--
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>สินค้า</th>
                        <th>รายละเอียด</th>
                        <th>ราคาต้นทุนต่อหน่วย</th>
                        <th>ซัพพลายเออร์</th>
                        <th>ราคาขายต่อหน่วย</th>
                        <th>กำไรต่อหน่วย</th>
                        <th>จำนวน</th>                        
                        <th>หน่วยนับ</th>                        
                        <th>ราคาขาย</th>
                        <th>กำไร</th>
                    </tr>
                    //-->
                    <tr>
          <th v-repeat="column: columns" >
            <a href="#" 
               v-on="click: sortBy(column.param)"
               v-class="active: sortKey == column.param"
               >
              {{ column.name | capitalize }}
            </a>
          </th>
        </tr>
                </thead>
                <tbody>

                    <tr v-repeat="items
                      | filterBy search
                      | orderBy sortKey reverse">
                        <td>{{$index+1}}</td>
                        <td>{{product}}</td>
                        <td>{{detail}}</td>
                        <td class="text-right">{{ formatPrice(unitprice) }} ฿</td>
                        <td>{{vendor}}</td>
                        <td><input type="number" v-model="saleprice" min="{{unitprice}}.00" step="1.00" class="form-control form-control-sm w-50 text-right"  value="{{ saleprice }}"></td>
                        <td class="text-right">{{ formatPrice(saleprice-unitprice) }} ฿</td>
                        <td><input type="number" v-model="qty" min="1" class="form-control form-control-sm w-50"  value="{{qty}}"></td>                        
                        <td>{{unit}}</td>
                        <td class="text-right">{{ formatPrice(saleprice*qty) }} ฿</td>
                        <td class="text-right">{{ formatPrice((saleprice-unitprice)*qty) }} ฿</td>
                    </tr>
                                                            
                </tbody>
                <tfoot>
                <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>                        
                        <td></td>
                        <td class="text-right"><strong>{{ formatPrice(totalprice(items)) }} ฿</strong></td>
                        <td class="text-right"><strong>{{ formatPrice(totalprofit(items)) }} ฿</strong></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer text-right">
            <a class="btn btn-success" href="?quo&qu&confirm=quo001"><i class="fa fa-send"></i> ยืนยันราคาเสนอขาย</a>
        </div>
    </div>


</div>

<script>

  var frank = new Vue({
  el: '#saleprice-table',
  
  data: {
    sortKey: '',
    
    search: '',
    
    reverse: false,
    message: 'กำหนดราคาเสนอขาย',
    columns: [ 
        {param:'no', name: 'ลำดับ'}, 
        {param: 'product', name: 'สินค้า'},
        {param: 'detail', name: 'รายละเอียด'},
        {param: 'unitprice', name: 'ราคาทุนต่อหน่วย'},
        {param: 'vendor', name: 'ซัพพลายเออร์'},
        {param: 'saleprice', name: 'ราคาขาย'},
        {param: 'gain', name: 'กำไร'},
        {param: 'qty', name: 'จำนวน'},
        {param: 'unit', name: 'หน่วยนับ'},
        {param: 'countprice', name: 'ราคารวม'},
        {param: 'countgain', name: 'กำไรรวม'},
         ],
    items: [
      {product: 'Product A', detail: 'Valve Semen M21 3 x 2 cm', unitprice: '850', vendor: 'AM Control', saleprice: '1300',  qty: '18', unit: 'ตัว'},
      {product: 'Product B', detail: 'Valve Semen M24 4 x 2 cm', unitprice: '653', vendor: 'AM Control', saleprice: '920',  qty: '14', unit: 'ตัว'},
      {product: 'Product C', detail: 'Butterfly Valve Kize 2" inc', unitprice: '1120', vendor: 'AM Control', saleprice: '2020',  qty: '6', unit: 'ตัว'},
      {product: 'Product D', detail: 'Temp 2.3" inc', unitprice: '1710', vendor: 'AM Control', saleprice: '2714',  qty: '4', unit: 'ตัว'},
      {product: 'Product E', detail: 'Pressure gauge 2.1/2 inc0-160 Bar', unitprice: '2', vendor: 'AM Control', saleprice: '960',  qty: '2', unit: 'ตัว'}
    ]
  },
  
  methods: {
    sortBy: function(sortKey) {
      this.reverse = (this.sortKey == sortKey) ? ! this.reverse : false;
      this.sortKey = sortKey;
      Vue.set(frank.marcado, 'background-color', '#e6e6e6!important');
    },
    totalprice: function (items) {
  	  return items.reduce((sum, val) => {
	  		return sum + parseInt((val.saleprice*val.qty));
			}, 0);    
    },
    totalprofit: function (items) {
  	  return items.reduce((acc, val) => {
	  		return acc + parseInt((val.saleprice-val.unitprice)*val.qty);
			}, 0);
    },
    formatPrice(value) {
        let val = (value/1).toFixed(2).replace(',', '.')
        return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    }
  }
})

</script>