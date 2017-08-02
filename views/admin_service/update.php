<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Admin panel</a></li>
                    <li><a href="/admin/services">Services Management</a></li>
                    <li class="active">Edit service</li>
                </ol>
            </div>


            <h4>Edit item #<?php echo $id_service; ?></h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_service" placeholder="" value="<?php echo $id_service; ?>">
                        <p>Name service</p>
                        <input type="text" name="name_service" placeholder="" value="<?php echo $serviceItem['name_service']; ?>">
                        <p>Content</p>
                        <textarea rows="10" cols="45" name="content_service"><?php echo $serviceItem['content_service']; ?></textarea>
                        <p>Class (fa-class) service</p>
                        <input type="text" name="class_service" placeholder="" value="<?php echo $serviceItem['class_service']; ?>">


                        <br/><br/>
                        <input type="submit" name="submit" class="btn btn-default" value="Save">

                        <br/><br/>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

