<?php include ROOT .'/views/layouts/header.php';?>
<div class="container" style="margin-top: 70px;">

  <div class="row">

<div class="text-center service-items col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-8">
    <div class="text-center name-block" style="margin-top: 130px;">	<span class="link link--kukuri scrollflow -pop"  data-letters="<?php echo $serviceItem['name_service'];?>"><?php echo $serviceItem['name_service'];?> </span></div>
    <p class="service-p"> <?php echo $serviceItem['content_service'];?> </p>
</div>
  </div>
</div>
<?php include ROOT .'/views/contacts/view.php';?>
    <!-- end #content -->
<?php include ROOT .'/views/layouts/footer.php';?>

