<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Admin panel</a></li>
                    <li><a href="/admin/portfolio">Portfolio Management</a></li>
                    <li class="active">Add item</li>
                </ol>
            </div>


            <h4>Add new item</h4>

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

                        <p>Name item</p>
                        <input type="text" name="name_item" placeholder="" value="">
                        <br/><br/>
                        <p>Link</p>
                        <input type="text" name="link_portfolio" placeholder="" value="">


                        <p>Category</p>
                        <select name="id_category">
                            <?php if (is_array($categoryList)): ?>
                                <?php foreach ($categoryList as $category): ?>
                                    <option value="<?php echo $category['id_category']; ?>">
                                        <?php echo $category['name_category']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <br/><br/>

                        <p>Item Image</p>
                        <input type="file" name="image" placeholder="" value="">

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

