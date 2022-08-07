<div class="container-fluid">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                แก้ไขข้อมูล [<?php echo $user['fld_username'];?>]
            </h3>
        </div>
        <div class="card-body">


            <?php if (isset($msg)){ ?>
            <div <?php echo $class_stat;?> role="alert"><?php echo $msg; ?><button type="button" class="close"
                    data-dismiss="alert"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button></div>
            <?php } ?>
            <form role="form" action="?use&edit=<?php echo $_GET['edit'];?>" method="POST">


                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="fld_username" id="fld_username" placeholder="Username"
                        required value="<?php echo $user['fld_username'];?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="fld_password" id="fld_password"
                        placeholder="Password" required value="<?php echo $user['fld_password'];?>">
                </div>

                <div class="form-group">
                    <label for="password">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password"
                        placeholder="Confirm Password" required value="">
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" required class="form-control" name="fld_email" id="fld_email"
                        placeholder="Enter email" value="<?php echo $user['fld_email'];?>">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
					<select class="form-control custom-select"  name="fld_type" id="type"  >
								<?php 
									$sel = false;
								for($i=0;$i<sizeof($roles);$i++){ 

									if ($user['fld_type']===$roles[$i]){ 
										
										echo '<option value="'.$val.'" selected="selected" >'.$user['fld_type']."=".$roles[$i].'</option>'; 
										$sel = true;
										
									}else{

										echo '<option value="'.$val.'" >'.$user['fld_type']."=".$roles[$i].'</option>';   
									}
									
								} 

									if(!$sel){ echo '<option value="" selected >เลือก</option>';  }

									?>
							</select>
                </div>

                <button type="submit" class="btn btn-primary" id="submit">แก้ไข</button>
                <a href="?use"><button type="button" class="btn btn-success">ย้อนกลับ</button></a>
            </form>
        </div>

    </div>
</div>