<script src="dist/js/vue.min.js"></script>
    <div class="card" id="multi">
        <div class="card-header">
            <h3 class="card-title">
                <a href="?rqc&<?php echo $reqid; ?>" class="btn btn-light "><i class="fas fa-walking"></i> สั่งซื้อรายเดียว</a>
                <a href="?rqc&<?php echo $reqid; ?>&mode=2" class="btn  btn-success"><i class="fas fa-people-arrows"></i> แยกสั่งซื้อหลายราย <i class="fas fa-check-circle"></i></a>
            </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                    <i class="fas fa-expand"></i>
                </button>
            </div>
        </div>

        <div class="card-body multi">

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
                                        <th width="20%">เลือก</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>500</td>
                                        <td>2,000</td>
                                        <td ><input type="radio" class="form-control-sm " name="p1" value="v1"></td>
                                    </tr>
                                    <tr class="bg-success-light">
                                        <td>350</td>
                                        <td>2,100</td>
                                        <td><input type="radio" class="form-control-sm " name="p2" value="v1" checked></td>
                                    </tr>
                                    <tr class="bg-success-light">
                                        <td>210</td>
                                        <td>2,520</td>
                                        <td><input type="radio" class="form-control-sm " name="p3" value="v1" checked></td>
                                    </tr>
                                    <tr>
                                        <td>95</td>
                                        <td>1,045</td>
                                        <td><input type="radio" class="form-control-sm " name="p4" value="v1"></td>
                                    </tr>
                                    <tr>
                                        <td>280</td>
                                        <td>5,580</td>
                                        <td><input type="radio" class="form-control-sm " name="p5" value="v1"></td>
                                    </tr>
                                    <tr class="bg-success-light">
                                        <td>960</td>
                                        <td>1,920</td>
                                        <td><input type="radio" class="form-control-sm " name="p6" value="v1" checked></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="card-footer text-right">
                            &nbsp;
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
                                        <th>เลือก</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr class="bg-success-light">
                                        <td>480</td>
                                        <td>1920</td>
                                        <td><input type="radio" class="form-control-sm " name="p1" value="v2" checked></td>
                                    </tr>
                                    <tr>
                                        <td>420</td>
                                        <td>2,520</td>
                                        <td><input type="radio" class="form-control-sm " name="p2" value="v2"></td>
                                    </tr>
                                    <tr>
                                        <td>260</td>
                                        <td>3,120</td>
                                        <td><input type="radio" class="form-control-sm " name="p3" value="v2"></td>
                                    </tr>
                                    <tr class="bg-success-light">
                                        <td>93</td>
                                        <td>1,023</td>
                                        <td><input type="radio" class="form-control-sm " name="p4" value="v2" checked></td>
                                    </tr>
                                    <tr >
                                        <td>250</td>
                                        <td>5,250</td>
                                        <td><input type="radio" class="form-control-sm " name="p5" value="v2" ></td>
                                    </tr>
                                    <tr>
                                        <td>1,100</td>
                                        <td>2,200</td>
                                        <td><input type="radio" class="form-control-sm " name="p6" value="v2"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-right">
                        &nbsp;
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
                                        <th>เลือก</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1,123</td>
                                        <td>4,492</td>
                                        <td><input type="radio" class="form-control-sm " name="p1" value="v3"></td>
                                    </tr>
                                    <tr>
                                        <td>570</td>
                                        <td>3,420</td>
                                        <td><input type="radio" class="form-control-sm " name="p2" value="v3"></td>
                                    </tr>
                                    <tr>
                                        <td>430</td>
                                        <td>5,160</td>
                                        <td><input type="radio" class="form-control-sm " name="p3" value="v3"></td>
                                    </tr>
                                    <tr>
                                        <td>114</td>
                                        <td>1,254</td>
                                        <td><input type="radio" class="form-control-sm " name="p4" value="v3"></td>
                                    </tr>
                                    <tr class="bg-success-light">
                                        <td>220</td>
                                        <td>4,620</td>
                                        <td><input type="radio" class="form-control-sm " name="p5" value="v3" checked></td>
                                    </tr>
                                    <tr>
                                        <td>1,123</td>
                                        <td>2,246</td>
                                        <td><input type="radio" class="form-control-sm " name="p6" value="v3"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-right">
                        &nbsp;
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="card-footer">
        เปรียบเทียบราคา <?php echo $reqid; ?> 

        <a href="?quo" class="btn btn-primary float-right">สร้างใบเสนอราคา</a>

        </div>
    </div>

    <script>

var frank = new Vue({
el: '#multi',

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