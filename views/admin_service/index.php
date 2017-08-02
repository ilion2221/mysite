<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Admin panel</a></li>
                    <li class="active">Services menagment</li>
                </ol>
            </div>

            <a href="/admin/services/create" class="btn btn-default back"><i class="fa fa-plus"></i> Add item</a>

            <h4>Services</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID</th>
                    <th>Name services</th>
                    <th>Class</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php foreach ($servicesList  as $service): ?>
                    <tr>
                        <td><?php echo $service['id_service']; ?></td>
                        <td><?php echo $service['name_service']; ?></td>
                        <td><?php echo $service['class_service']; ?></td>
                        <td><a href="/admin/services/update/<?php echo $service['id_service']; ?>" title="Edit"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/services/delete/<?php echo $service['id_service']; ?>" title="Delete"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

