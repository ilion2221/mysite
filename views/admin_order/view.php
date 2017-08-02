<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Admin panel</a></li>
                    <li><a href="/admin/order">Order management</a></li>
                    <li class="active">View order</li>
                </ol>
            </div>


            <h4>View order #<?php echo $order['id']; ?></h4>
            <br/>

        </div>

<div class="col-xs-12 col-sm-8  col-md-7  col-lg-6 ">
            <h5>Information about order</h5>
            <table class="table-admin-small table-bordered table-striped table" style="width: 100%">
                <tr>
                    <td><b>Order number</b></td>
                    <td><?php echo $order['id']; ?></td>
                </tr>
                <tr>
                    <td><b>Customer name</b></td>
                    <td><?php echo $order['user_name']; ?></td>
                </tr>
                <tr>
                    <td><b>Customer's phone</b></td>
                    <td><?php echo $order['user_phone']; ?></td>
                </tr>
                <tr>
                    <td><b>Customer's phone</b></td>
                    <td><?php echo $order['user_email']; ?></td>
                </tr>
                <tr>
                    <td><b>Massage</b></td>
                    <td><?php echo $order['user_comment']; ?></td>
                </tr>
                <tr>
                    <td><b>Status order</b></td>
                    <td><?php echo Order::getStatusText($order['status']); ?></td>
                </tr>
                <tr>
                    <td><b>Date order</b></td>
                    <td><?php echo $order['date_order']; ?></td>
                </tr>
            </table>


            <a href="/admin/order/" class="btn btn-default back"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
    </div>

</section>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>