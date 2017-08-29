<div class="container-fluid">
    <div class="text-center name-block" style="margin-top: 130px;">	<span class="link link--kukuri scrollflow -pop"  data-letters="Portfolio"> Portfolio </span></div>
 <div class="row text-center">  <ul id="filters" class="clearfix text-center">

        <li><span class="filter active" data-filter=".lend, .shop, .catalog, .uniq, .corpor">All</span></li>
        <?php foreach ($categoryList as $categoryItem):?>
        <li><span class="filter" data-filter=".<?php echo $categoryItem['psevdo'] ;?>"><?php echo $categoryItem['name_category'] ;?></span></li>

        <?php endforeach;?>
    </ul>
 </div>
    <div id="portfoliolist">
        <ul class="ch-grid">
            <?php foreach ($portfolioList as $portfolioItem):?>
            <li class="portfolio <?php echo $portfolioItem['psevdo'] ;?>" data-cat="<?php echo $portfolioItem['psevdo'] ;?>">
                <div class="ch-item">
                    <div class="ch-info">
                        <div class="ch-info-front ch-img-1" style="background-image:url('/upload/images/portfolio/<?php echo $portfolioItem['id'] ;?>.jpg')"></div>
                        <div class="ch-info-back">
                            <h3><?php echo $portfolioItem['name_item'] ;?></h3>
                            <p><?php echo $portfolioItem['name_category'] ;?> <a href="<?php echo $portfolioItem['link_portfolio'] ;?>" target="_blank">View</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach;?>

        </ul>
    </div>
<div class="text-center  button-block">
    <a href="#lets" class="draw meet target-but">Submit your application</a></div>
</div>