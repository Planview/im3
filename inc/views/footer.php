
          <footer>
            <p>&copy; <?php echo date('Y'); ?> Planview, Inc., All Rights Reserved.</p>
          </footer>
        </div> <!-- /container -->

        <script type="text/javascript" src="<?php echo IM3_ROOT_URI; ?>js/vendor/webshims/polyfiller.js"></script>
        <!--[if lt IE 9]><script type="text/javascript" src="<?php echo IM3_ROOT_URI; ?>js/vendor/jqplot/excanvas.js"></script><![endif]-->

		<script type="text/javascript" src="<?php echo IM3_ROOT_URI; ?>js/tactic-codes.js"></script>
        <script type="text/javascript" src="<?php echo IM3_ROOT_URI; ?>js/vendor/jquery-ui-1.10.3.custom.min.js"></script>
        <script type="text/javascript" src="<?php echo IM3_ROOT_URI; ?>js/vendor/underscore-min.js"></script>
        <script type="text/javascript" src="<?php echo IM3_ROOT_URI; ?>js/vendor/underscore.string.min.js"></script>
        <script type="text/javascript" src="<?php echo IM3_ROOT_URI; ?>js/vendor/jqplot/jquery.jqplot.min.js"></script>
        <script type="text/javascript" src="<?php echo IM3_ROOT_URI; ?>js/vendor/jqplot/plugins/jqplot.barRenderer.min.js"></script>
        <script type="text/javascript" src="<?php echo IM3_ROOT_URI; ?>js/vendor/jqplot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
        <script type="text/javascript" src="<?php echo IM3_ROOT_URI; ?>js/vendor/jqplot/plugins/jqplot.pointLabels.min.js"></script>
        <script type="text/javascript" src="<?php echo IM3_ROOT_URI; ?>js/vendor/jquery.qtip.js"></script>
        <script type="text/javascript" src="<?php echo IM3_ROOT_URI; ?>js/vendor/jquery.history.js"></script>
        <script type="text/javascript" src="<?php echo IM3_ROOT_URI; ?>js/vendor/jquery.fancybox.pack.js?v=2.1.5"></script>
        <script type="text/javascript" src="<?php echo IM3_ROOT_URI; ?>js/vendor/bootstrap.min.js"></script> 
        <!-- Google Analytics -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                e.src='//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-16646450-3');ga('send','pageview');
            // second tracking code
            ga('create', 'UA-16646450-1', 'auto', {'name': 'newTracker', 'allowLinker': true}); 
            ga('newTracker.require', 'linker'); 
            ga('newTracker.linker:autoLink', ['www.planview.com', 'www.planview.de', 'www.planview.fr'] ); 
            ga('newTracker.send', 'pageview');
        </script>
        <script type="text/javascript" src="//munchkin.marketo.net/munchkin.js"></script>
		<script>Munchkin.init("587-QLI-337");</script>
		<script type="text/javascript" src="<?php echo IM3_ROOT_URI; ?>js/main.js"></script>
    </body>
</html>
