<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <br/>
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Admin portfolio</a></li>
                    <li><a href="/admin/services">Services management</a></li>
                    <li class="active">Delete services</li>
                </ol>
            </div>
            <h4>Delete service #<?php echo $id; ?></h4>
            <p>Are you want to delete this services?</p>
            <form method="post">
                <input type="submit" name="submit" value="Delete" />
            </form>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

