<!-- Footer -->
<div class="footer">
    <div class="container">
                <div class="row">
                    <div class="col-md-4 md-margin-bottom-40">
                        <!-- Quick Links -->
                        <div class="headline"><h2>Quick Links</h2></div>
                        <ul class="list-unstyled">
                            <li><a href="/iain-white"><i class="fa fa-user"></i> Iain White's Portfolio</a></li>
                            <li><a href="/project-management"><i class="fa fa-puzzle-piece"></i> Project Management</a></li>
                            <li><a href="/web-development"><i class="fa fa-globe"></i> Web Development</a></li>
                            <li><a href="/it"><i class="fa fa-desktop"></i> Information Technology</a></li>
                            <li><a href="http://blog.whiteinternet.com"><i class="fa fa-comments-o"></i> Web Development Blog</a></li>
                            <li><a href="/privacy-policy"><i class="fa fa-file-text-o"></i> Privacy Policy</a></li>
                            <li><a href="/terms-and-conditions"><i class="fa fa-file-o"></i> Terms &amp; Conditions</a></li>
                            <li><a href="/sitemap"><i class="fa fa-sitemap"></i> Site Map</a></li>
                        </ul>
                        <!-- End Quick Links -->
                    </div>

                    <div class="col-md-4 md-margin-bottom-40">
                        <!-- Recent About -->
                        <div>
                            <div class="headline"><h2>About Iain White</h2></div>
                            <ul class="list-unstyled">
                                <li>I am currently looking for a new position.</li>
                                <li>I am a Certified Professional [Scrum Master].</li>
                                <li>I have developed award winning web sites.</li>
                                <li>I have experience with [Agile] Development.</li>
                                <li>I have a strong Web Development background.</li>
                                <li>I am a [Pragmatic Programmer]</li>
                                <li>I have performed [Technical Due Diligence].</li>
                                <li>Follow <a href="https://plus.google.com/109478264234924902395/about">Iain White</a> on Google+.</li>
                            </ul>
                        </div>
                        <!-- End Recent About -->
                    </div>

                    <div class="col-md-4">
                        <!-- Wisdom -->
                        <div class="headline"><h2>Wisdom</h2></div>
                        <!-- End Wisdom -->

                        <!-- Social Links -->
                        <div class="headline"><h2>Share This</h2></div>
                        <ul id="socialLinks" class="social-icons">
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u={$page->url}" data-original-title="Facebook" class="rounded-x share social_facebook" title="Share on Facebook"></a></li>
                            <li><a href="https://twitter.com/intent/tweet?url={$page->url}&text={$page->seo->desc}&hashtags={$page->seo->tags}" data-original-title="Twitter" class="rounded-x share social_twitter" title="Share on Twitte"></a></li>
                            <li><a href="https://plus.google.com/share?url={$page->url}" data-original-title="Goole Plus" class="rounded-x share social_googleplus" title="Share on Google Plus"></a></li>
                            <li><a href="http://www.linkedin.com/shareArticle?mini=true&url={$page->url}&title={$page->seo->title}" data-original-title="Linkedin" class="rounded-x share social_linkedin" title="Share on LinkedIn"></a></li>
                            <li><a href="http://pinterest.com/pin/create/button/?url={$page->url}&media={$page->seo->image}&description={$page->seo->desc}" data-original-title="Pinterest" class="rounded-x share social_pintrest" title="Share on Pinterest"></a></li>
                        </ul>
                        <!-- End Social Links -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer -->

        <!-- Copyright -->
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
        <!-- End Copyright -->
    </div>
    <!--/End Wrapepr-->
    <!-- JavaScript-->
    <?php echo addjQuery('1.11.2', FALSE); ?>
    <?php echo addjQueryMigrate(); ?>
    <?php echo addBootstrapJS('3.3.2', FALSE); ?>
    <?php echo addJs('back-to-top.js', 'assets/plugins/'); ?>
    <?php echo addJs('app.js'); ?>
    <?php echo $js; ?>
    <script>
        jQuery(document).ready(function() {
            App.init();
            // iPhone dropdown fix
            $('.row-toggle').each(function() {
                this.addEventListener('click', function() {}, false);
            });
        });

    </script>
    <?php echo addOldIEJS(); ?>
