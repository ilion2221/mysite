<?php include ROOT . '/views/layouts/header_admin.php'; ?>

    <section>
        <div class="container">
            <div class="row">

                <br/>

                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li><a href="/admin">Admin panel</a></li>
                        <li><a href="/admin/services">Services management</a></li>
                        <li class="active">Add item</li>
                    </ol>
                </div>


                <h4>Add new service</h4>

                <br/>

                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <div class="col-lg-4">
                    <div class="login-form">
                        <form action="#" method="post" enctype="multipart/form-data">

                            <p>Name service</p>
                            <input type="text" name="name_service" placeholder="" value="">
                            <br/><br/>
                            <p>Content</p>
                            <textarea rows="10" cols="45" name="content_service"></textarea>
                            <p>Class (fa-class) service</p>
                            <input type="text" name="class_service" placeholder="" value="">


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