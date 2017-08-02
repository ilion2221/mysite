<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Admin panel</a></li>
                    <li><a href="/admin/order">Order management</a></li>
                    <li class="active">Edit</li>
                </ol>
            </div>


            <h4>Edit the order #<?php echo $id; ?></h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">
                        <input type="hidden" name="userName" placeholder="" value="<?php echo $order['id']; ?>">
                        <p>Name</p>
                        <input type="text" name="userName" placeholder="" value="<?php echo $order['user_name']; ?>">

                        <p>Phone number</p>
                        <input type="text" name="userPhone" placeholder="" value="<?php echo $order['user_phone']; ?>">

                        <p>Email</p>
                        <input type="text" name="userEmail" placeholder="" value="<?php echo $order['user_email']; ?>">

                        <p>Massage</p>
                        <textarea rows="10" cols="45" name="userComment"><?php echo $order['user_comment']; ?></textarea>

                        <p>Date</p>
                        <input type="text" name="date_order" placeholder="" value="<?php echo $order['date_order']; ?>">

                        <p>Status</p>
                        <select name="status">
                            <option value="1" <?php if ($order['status'] == 1) echo ' selected="selected"'; ?>>New order</option>
                            <option value="2" <?php if ($order['status'] == 2) echo ' selected="selected"'; ?>>In processing</option>
                            <option value="3" <?php if ($order['status'] == 3) echo ' selected="selected"'; ?>>Close</option>

                        </select>
                        <br>
                        <br>
                        <input type="submit" name="submit" class="btn btn-default" value="Save">
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>