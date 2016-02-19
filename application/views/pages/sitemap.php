<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('White Internet Sitemap', 'Sitemap for White Internet'); ?>
        <?php $this->stencil->setDescription('Sitemap page for White Internet website.'); ?>
        <?php $this->stencil->meta(array('keywords' => 'Iain White, Sitemap, Australia, PHP Developer, Web Developer, JavaScript Guru, Scrum Master, WhiteInternet')); ?>

    </div>
    <div class="row">
        <div class="col-md-4">
            <?php echo $this->stencil->addImage('Signpost', 'jpg', 'left'); ?>
        </div>
        <div class="col-md-4">
            <h3><a href="/iain-white"><i class="fa fa-user"></i> Iain White</a></h3>
            <ul class="list-unstyled">
                <li><a href="/iain-white/iain-white"><i class="fa fa-user"></i> About Iain White</a></li>
                <li><a href="/iain-white/resume"><i class="fa fa-file-text-o"></i> Iain's CV / R&eacute;sum&eacute;</a></li>
                <li><a href="/iain-white/work-examples"><i class="fa fa-desktop"></i> Examples of Work</a></li>
                <li><a href="/iain-white/qualifications"><i class="fa fa-graduation-cap"></i> Qualifications</a></li>
                <li><a href="/iain-white/press-and-reviews"><i class="fa fa-quote-right"></i> Press &amp; Reviews</a></li>
                <li><a href="/iain-white/recommendations"><i class="fa fa-comment"></i> Recommendations</a></li>
                <li><a href="/iain-white/scrum-master"><i class="fa fa-puzzle-piece"></i> Scrum Master</a></li>
                <li><a href="/iain-white/project-manager"><i class="fa fa-area-chart"></i> Project Manager</a></li>
                <li><a href="/iain-white/web-developer"><i class="fa fa-html5"></i> Web Developer</a></li>
                <li><a href="/iain-white/javascript-guru"><i class="fp fp-prog-js01"></i> JavaScript Guru</a></li>
                <li><a href="/iain-white/php-developer"><i class="fp fp-prog-php01"></i> PHP Developer</a></li>
                <li><a href="/iain-white/pragmatic-programmer"><i class="fa fa-star"></i> Pragmatic Programmer</a></li>
                <li><a href="/iain-white/development-duck"><i class="fa fa-bullhorn"></i> Development Duck</a></li>
                <?php
                if ($this->stencil->getIsLooking()) {
                    echo '<li><a href = "/iain-white/seeking-work"><i class="fa fa-bolt" ></i> Seeking Work </a ></li>';
                }
                ?>
            </ul>
        </div>
        <div class="col-md-4">
            <h3><a href="/"><i class="fa fa-user"></i> White Internet</a></h3>
            <ul class="list-unstyled">
                <li><a href="/books"><i class="fa fa-book"></i> Books</a></li>
                <li><a href="/sitemap"><i class="fa fa-sitemap"></i> Sitemap</a></li>
            </ul>
        </div>
    </div>
</div>