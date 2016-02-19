<div class="header">
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img id="logo-header" class="img-responsive" src="/assets/images/white-internet-head.png" alt="White Internet Logo" title="White Internet">
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                    <li class=" dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="drop1" role="button">
                            Iain White
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
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
                    </li>
                    <li><a href="/iain-white/project-manager">Project Management</a></li>
                    <li><a href="/iain-white/web-developer">Web Development</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="breadcrumbs">
    <div class="container">
        <?php echo $this->stencil->addH1(); ?>
        <?php echo $this->stencil->addBreadcrumb(); ?>
        <?php echo $this->stencil->addItemprop(); ?>
    </div>
</div>