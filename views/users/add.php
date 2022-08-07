<div class="container-fluid">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                เพิ่มผู้ใช้ใหม่
            </h3>
        </div>
        <div class="card-body">

		
		<?php if (isset($msg)){ ?>
		<div <?php echo $class_stat;?> role="alert"><?php echo $msg; ?>
		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	</div>
	<?php } ?>
		<form role="form" action="?use&add" autocomplete="off" method="POST">

  					
		<div class="form-group">
    		<label for="username">Username</label>
	    		<input type="text" class="form-control" name ="fld_username" id="fld_username" placeholder="Username" autocomplete="off" required value="">
  		</div>
  		<div class="form-group">
    		<label for="password">Password</label>
			<input type="password" class="form-control" name="fld_password" id="fld_password" placeholder="Password" autocomplete="off" required value="">
  		</div>

<div class="form-group">
    		<label for="password">Confirm Password</label>
			<input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" autocomplete="off" required value="">
  		</div>

  					<div class="form-group">
    						<label for="email">Email address</label>
    						<input type="email"  required 	class="form-control" name="fld_email" id="fld_email" placeholder="Enter email" value="">
  					</div>
  					<div class="form-group">
    						<label for="type">Type</label>
    						<select class="form-control custom-select"  name="fld_type" id="fld_type"  >
								<?php foreach($roles as $role){ echo '<option value="'.$role.'" >'.$role.'</option>'; } ?>
							</select>

  					</div>
  					
  					<button type="submit" class="btn btn-primary" id="submit">Submit</button>
  					<a href="?use"><button type="button" class="btn btn-success">Back</button></a>
				</form>


                </div>
            </div>
        </div>

