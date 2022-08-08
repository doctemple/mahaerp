<div class="container">
    <div class="row">
        <div class="tab-pane active" id="list">
            <br />
            <p><a href="<?php LK($comm); ?>&add">+Add Data</a></p>
            <br />
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Req ID</th>
                            <th>Company</th>
                            <th>Customer</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Opt</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(${$comm} as $list) { ?>
                        <tr>
                            <td><?php echo $list['fld_reqid']; ?></td>
                            <td><?php echo $list['fld_company']; ?></td>
                            <td><?php echo $list['fld_customer']; ?></td>
                            <td><?php echo $list['fld_phone']; ?></td>
                            <td><?php echo $list['fld_email']; ?></td>
                            <td>
                                <a href="<?php LK($comm); ?>&edit=<?php echo $list[_ID_]; ?> "><span
                                        class="glyphicon glyphicon-edit"></span> edit</a>
                                <a href="<?php LK($comm); ?>&del=<?php echo $list[_ID_]; ?> "
                                    onclick="return confirm('Are you sure?')"><span
                                        class="glyphicon glyphicon-trash"></span>del</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <ul class="pagination">
                <?php for ($i=1; $i<=$numberOfPages; $i++) { ?>
                <?php $class_active = ($page==$i)?"class='active'":$class_active="";?>
                <li <?php echo $class_active; ?>><a
                        href="<?php LK($comm); ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php }; ?>
            </ul>
        </div>
    </div>
