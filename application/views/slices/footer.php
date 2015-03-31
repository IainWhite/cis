
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
                        </ul>
                    </div>

                    <div class="col-md-4 md-margin-bottom-40">
                        <div class="headline"><h2>Wisdom</h2></div>
                        <?php echo $this->stencil->getWisdom(); ?>
                    </div>

                    <div class="col-md-4">
                        <div class="headline"><h2>Share This</h2></div>
                        <ul id="socialLinks" class="social-icons">
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u={$page->url}" data-original-title="Facebook" class="rounded-x share social_facebook" title="Share on Facebook"></a></li>
                            <li><a href="https://twitter.com/intent/tweet?url={$page->url}&text={$page->seo->desc}&hashtags={$page->seo->tags}" data-original-title="Twitter" class="rounded-x share social_twitter" title="Share on Twitte"></a></li>
                            <li><a href="https://plus.google.com/share?url={$page->url}" data-original-title="Goole Plus" class="rounded-x share social_googleplus" title="Share on Google Plus"></a></li>
                            <li><a href="http://www.linkedin.com/shareArticle?mini=true&url={$page->url}&title={$page->seo->title}" data-original-title="Linkedin" class="rounded-x share social_linkedin" title="Share on LinkedIn"></a></li>
                            <li><a href="http://pinterest.com/pin/create/button/?url={$page->url}&media={$page->seo->image}&description={$page->seo->desc}" data-original-title="Pinterest" class="rounded-x share social_pintrest" title="Share on Pinterest"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; 2015 <a href="/iain-white">Iain White</a>. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <a href="index.html">
                            <img class="pull-right img-responsive" id="logo-footer" src="/assets/images/white-internet-head.png" alt="White Internet Logo" title="White Internet">
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
    <?php echo addJs('app.js'); ?>
    <?php echo $js; ?>
    <?php echo addOldIEJS(); ?>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-12597187-2', 'auto');
    ga('send', 'pageview');

</script>