
<div class="footer">
    <div class="container">
                <div class="row">
                    <div class="col-md-4 md-margin-bottom-40">
                        <div class="headline"><h2>Quick Links</h2></div>
                        <ul class="list-unstyled">
                            <li><a href="/iain-white/iain-white"><i class="fa fa-user"></i> About Iain White</a></li>
                            <li><a href="/iain-white/resume"><i class="fa fa-file-text-o"></i> Iain's CV / R&eacute;sum&eacute;</a></li>
                            <li><a href="/iain-white/work-examples"><i class="fa fa-desktop"></i> Examples of Work</a></li>
                            <li><a href="/iain-white/qualifications"><i class="fa fa-graduation-cap"></i> Qualifications</a></li>
                            <li><a href="/iain-white/press-and-reviews"><i class="fa fa-quote-right"></i> Press &amp; Reviews</a></li>
                            <li><a href="/iain-white/recommendations"><i class="fa fa-comment"></i> Recommendations</a></li>
                            <li><a href="/books"><i class="fa fa-book"></i> Books</a></li>
                            <li><a href="/sitemap"><i class="fa fa-sitemap"></i> Sitemap</a></li>
                            <li><a href="https://plus.google.com/109478264234924902395/about" rel="me" title="Google Plus Profile for Iain White"><i class="fa fa-google-plus-square"></i> Iain White on Google+</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 md-margin-bottom-40">
                        <div class="headline"><h2>Wisdom</h2></div>
                        <?php echo $this->stencil->getWisdom(); ?>
                    </div>

                    <div class="col-md-4">
                        <div class="headline"><h2>Share This</h2></div>
                        <ul id="socialLinks" class="social-icons">
                            <?php echo $this->stencil->addShareThis(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; 2016 <a href="/iain-white">Iain White</a>. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <a href="/iain-white">
                            <img class="pull-right img-responsive" id="logo-footer" src="/assets/images/iain-white-logo.png" alt="Iain White Logo" title="Iain White">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo addjQuery('1.11.2', FALSE); ?>
    <?php echo addjQueryMigrate(); ?>
    <?php echo addBootstrapJS('3.3.2', FALSE); ?>
    <?php echo addJs('back-to-top.js', 'assets/plugins/'); ?>
    <?php echo addJs('app.min.js'); ?>
    <?php echo $js; ?>
    <?php echo addOldIEJS(); ?>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    <?php
    if (ENVIRONMENT != 'production') {
        echo "ga('create', 'UA-12597187-2', 'auto');";
    } else {
        echo "ga('create', 'UA-12597187-3', 'auto');";
    }
    ?>

    ga('send', 'pageview');

</script>