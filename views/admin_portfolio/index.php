<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Admin panel</a></li>
                    <li class="active">Portfolio Managementи</li>
                </ol>
            </div>

            <a href="/admin/portfolio/create" class="btn btn-default back"><i class="fa fa-plus"></i> Add item</a>

            <h4>Portfolio list</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID item</th>
                    <th>Name category</th>
                    <th>Name item</th>
                    <th>Link</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php foreach ($portfolioList as $portfolio): ?>
                    <tr>
                        <td><?php echo $portfolio['id']; ?></td>
                        <td><?php echo $portfolio['name_category']; ?></td>
                        <td><?php echo $portfolio['name_item']; ?></td>
                        <td><?php echo $portfolio['link_portfolio']; ?></td>
                        <td><a href="/admin/portfolio/update/<?php echo $portfolio['id']; ?>" title="Edit"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/portfolio/delete/<?php echo $portfolio['id']; ?>" title="Delete"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

