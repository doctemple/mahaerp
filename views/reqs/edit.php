<section id="page_edit" class="page_edit">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Edit user informaton</h2>
                <hr>

                <?php if (isset($msg)){ ?>
                <div <?php echo $class_stat;?> role="alert"><?php echo $msg; ?><button type="button" class="close"
                        data-dismiss="alert"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button></div>
                <?php } ?>
                <form role="form" action="<?php LK($comm); ?>&edit=<?php echo $_GET['edit'];?>" method="POST">


                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" class="form-control" name="fld_company" id="company" placeholder="Company"
                            required value="<?php echo $user['fld_company'];?>">
                    </div>
                    <div class="form-group">
                        <label for="customer">Customer</label>
                        <input type="text" class="form-control" name="fld_customer" id="customer" placeholder="Customer"
                            required value="<?php echo $user['fld_customer'];?>">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="fld_phone" id="phone" placeholder="Phone" required
                            value="<?php echo $user['fld_phone'];?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" required class="form-control" name="fld_email" id="fld_email"
                            placeholder="Enter email" value="<?php echo $user['fld_email'];?>">
                    </div>
                    <div class="form-group">
                        <label for="type">Address</label>
                        <input type="text" class="form-control" name="fld_address" id="address" placeholder="Address"
                            value="<?php echo $user['fld_address'];?>">
                    </div>

                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                    <a href="<?php LK($comm); ?>"><button type="button" class="btn btn-success">Back</button></a>
                </form>
            </div>
        </div>
    </div>
</section>
<br />
