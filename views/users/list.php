<?php echo breadcrumb("ผู้ใช้","ตั้งค่า","ผู้ใช้"); ?>

<div class="container-fluid">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <a class="btn btn-primary" href="?use&add"><i class="fa fa-plus"></i> เพิ่มผู้ใช้</a>
            </h3>
        </div>
        <div class="card-body p-0">

            <table class="table table-sm">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>ยูเซอร์</th>
                        <th>รหัสผ่าน</th>
                        <th>อีเมล</th>
                        <th>กลุ่ม</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user) { ?>
                    <tr>
                        <td><?php echo $user['fld_userid']; ?></td>
                        <td><?php echo $user['fld_username']; ?></td>
                        <td><?php echo $user['fld_password']; ?></td>
                        <td><?php echo $user['fld_email']; ?></td>
                        <td><?php echo $user['fld_type']; ?></td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="?use&edit=<?php echo $user['fld_userid']; ?>"><i
                                    class="fa fa-edit"></i></a>
                            <a class="btn btn-sm btn-danger" href="?use&del=<?php echo $user['fld_userid']; ?>"><i
                                    class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            &nbsp;
        </div>
    </div>
</div>
</div>