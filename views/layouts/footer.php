<footer class=" ">
    <div class="row">
        <ul style="list-style-type: none;" class="twit text-center">
            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-official fa-2x"></i></a></li>
            <li><a href="https://vk.com"><i class="fa fa-google-plus fa-2x"></i></a></li>
            <li><a href="https://plus.google.com"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a></li>
        </ul>
        <ul class="menu-second text-center">
            <li><a href="/">Main</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/portfolio">Portfolio</a></li>
            <li><a href="/contacts">Contact</a></li>
        </ul>

        <p class="copy">©ILION.Michael Levitsky. Email me: <a href="mailto:mailto:mr.ilion.developer@gmail.com">mr.ilion.developer@gmail.com</a>
        </p>

        <a class="made"><span>Made by</span> <img src="/template/images/logo.png" alt="logo">
            <span>Michael Levitsky </span> </a>

    </div>
</footer>
<script src="/template/js/javascript.js"></script>
<script type="text/javascript" src="/template/js/controls.js"></script>
<script type="text/javascript" src="/template/js/classie.js"></script>
<script type="text/javascript" src="/template/js/cbpAnimatedHeader.min.js"></script>
<?php if (isset($script) && $script) {
    echo '<script type="text/javascript" src="/template/js/jquery.mixitup.min.js"></script>';
    echo <<<EOF
<script type="text/javascript">
	$(function () {
		var filterList = {
			init: function () {
				$('#portfoliolist').mixItUp({
  				selectors: {
    			  target: '.portfolio',
    			  filter: '.filter'	
    		  },
    		  load: {
      		  filter: '.lend, .shop, .catalog, .uniq, .corpor'  
      		}     
				});								
			}
		};
		filterList.init();	
	});	
	</script>
EOF;
} ?>
<script>
    $(document).ready(function () {
        $(".cs-text-cut").lettering('words');
    });
</script>
<script>
    new CBPFWTabs(document.getElementById('tabs'));
</script>

<script src="/template/js/controls.js"></script>

<!-- Kick off Filterizr -->

<script> $(document).ready(function () {
        $(".button-block").on("click", "a", function (event) {
            event.preventDefault();
            var id = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 2000);
        });
    });</script>
<script src="/template/js/eskju.jquery.scrollflow.min.js"></script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-103566805-1', 'auto');
    ga('send', 'pageview');

</script>

</body>
</html>