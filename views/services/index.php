<?php include ROOT .'/views/layouts/header.php';?>

<div class="container service">
    <div class="text-center name-block" style="margin-top: 35px;">	<span class="link link--kukuri scrollflow -pop"  data-letters="my services"> my services </span></div>
    <ul class="cbp-ig-grid">
<?php foreach ($servicesList as $servicesItem):?>
        <li>
            <a href="services/<?php echo $servicesItem['id_service'] ;?>">
                <span class="cbp-ig-icon"><i class="fa <?php echo $servicesItem['class_service'] ;?> fa-5x icon-befores" aria-hidden="true"></i></span>
                <h3 class="cbp-ig-title"><?php echo $servicesItem['name_service'] ;?></h3>
                <span class="cbp-ig-category">View more</span>
            </a>
        </li>
<?php endforeach;?>
    </ul>
</div>
<?php include ROOT .'/views/contacts/view.php';?>
    <!-- end #content -->
<?php include ROOT .'/views/layouts/footer.php';?>