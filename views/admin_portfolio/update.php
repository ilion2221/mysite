<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Admin panel</a></li>
                    <li><a href="/admin/portfolio">Portfolio Management</a></li>
                    <li class="active">Edit item</li>
                </ol>
            </div>


            <h4>Edit item #<?php echo $id; ?></h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" placeholder="" value="<?php echo $id; ?>">
                        <p>Name item</p>
                        <input type="text" name="name_item" placeholder="" value="<?php echo $portfolio['name_item']; ?>">

                        <p>Link</p>
                        <input type="text" name="link_portfolio" placeholder="" value="<?php echo $portfolio['link_portfolio']; ?>">


                        <p>Category</p>
                        <select name="id_category">
                            <?php if (is_array($categoryList)): ?>
                                <?php foreach ($categoryList as $category): ?>
                                    <option value="<?php echo $category['id_category']; ?>"
                                        <?php if ($portfolio['id_category'] == $category['id_category']) echo ' selected="selected"'; ?>>
                                        <?php echo $category['name_category']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <br/><br/>


                        <p>Item image</p>
                        <img src = "/upload/images/portfolio/<?php echo $portfolio['id'] ;?>.jpg" width="200" alt="" />
                        <input type="file" name="image" placeholder="" value="<?php echo $portfolio['image']; ?>">

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

