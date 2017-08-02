<div class="container-fluid main-about" style="padding-top: 40px;">
    <div class="text-center name-block"><span id="devel-line" class="link link--kukuri scrollflow -pop "
                                              data-letters="ABOUT ME">ABOUT ME</span></div>
    <div class="row  ">
        <div class="col-xs-12 col-xs-push col-sm-4 col-md-4 col-lg-4  ">
            <div class="society-me scrollflow -slide-right  text-center">

                <a href="https://mail.google.com/mail/u/0/?tab=wm#inbox?compose=15d588045d1f7f54" class="demo-3"> <span
                            data-text="Gmail">Gmail</span></a><br>
                <a href="https://www.facebook.com/michael.levitsky.549" class="demo-3"><span data-text="Facebook">Facebook</span></a><br>
                <a href="https://www.linkedin.com/in/mihail-levitsky-767a25135/" class="demo-3"><span
                            data-text="LinkedIn">LinkedIn</span></a>


            </div>
        </div>
        <div class="col-xs-12   col-sm-8 col-md-8 col-lg-8 ">

            <div class="misha scrollflow -pop -opacity ">
                <? foreach ($aboutList as $aboutItem): ?>
                <div class="info ">
                    <h2><?php echo $aboutItem['name']; ?></h2>
                    <p class="price"><?php echo $aboutItem['profession']; ?></p>
                    <p class="description"><?php echo $aboutItem['about_me']; ?> </p>
                    <?php endforeach; ?>

                    <div class="main-scills">
                        <p class="price">My skills:</p>
                        <ul>
                            <li><i class="fa fa-cog fa-spin fa-1x fa-fw"></i>HTML</li>
                            <li><i class="fa fa-cog fa-spin fa-1x fa-fw"></i>CSS</li>

                        </ul>
                        <ul>
                            <li><i class="fa fa-cog fa-spin fa-1x fa-fw"></i>JAVA SCRIPT</li>
                            <li><i class="fa fa-cog fa-spin fa-1x fa-fw"></i>JQUERY</li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-cog fa-spin fa-1x fa-fw"></i>PHP</li>
                            <li><i class="fa fa-cog fa-spin fa-1x fa-fw"></i>SQL</li>
                        </ul>
                        <ul>

                            <li><i class="fa fa-cog fa-spin fa-1x fa-fw"></i>CMS(Wordpress,OpenCart</li>
                            <li><i class="fa fa-cog fa-spin fa-1x fa-fw"></i>Adobe Photoshop</li>
                        </ul>
                    </div>
                    <a href="/about" class="read-more">Read More</a>
                </div>

            </div>
        </div>

    </div>


</div>