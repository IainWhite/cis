<!-- Header -->
<div class="header">
    <!-- Navbar -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img id="logo-header" class="img-responsive" src="/assets/images/white-internet-head.png" alt="White Internet Logo" title="White Internet">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                    <!-- Iain -->
                    <li class="<?php echo $this->stencil->addActive('iain-white'); ?> dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="drop1" role="button">
                            Iain White
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                            <li><a href="/iain-white/iain-white"><i class="fa fa-user"></i> About Iain White</a></li>
                            <li><a href="/iain-white/resume"><i class="fa fa-file-text-o"></i> Iain's CV / R&eacute;sum&eacute;</a></li>
                            <!-- Work Information -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);"><i class="fa fa-info"></i> Work Information</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/iain-white/work-information"><i class="fa fa-info"></i> Work Information</a></li>
                                    <li><a href="/iain-white/skills-matrix"><i class="fa fa-list-ul"></i> Skills Matrix</a></li>
                                    <li><a href="/iain-white/programming-languages"><i class="fa fa-file-code-o"></i> Programming Languages</a></li>
                                    <li><a href="/iain-white/computer-skills"><i class="fa fa-folder-open"></i> Other Computer Skills</a></li>
                                </ul>
                            </li>
                            <!-- End Work Information -->
                            <li><a href="/iain-white/work-examples"><i class="fa fa-desktop"></i> Examples of Work</a></li>
                            <li><a href="/iain-white/case-studies"><i class="fa fa-lightbulb-o"></i> Case Studies</a></li>
                            <li><a href="/iain-white/pragmatic-programmer"><i class="fa fa-star"></i> Pragmatic Programmer</a></li>
                            <li><a href="/iain-white/qualifications"><i class="fa fa-graduation-cap"></i> Qualifications</a></li>
                            <li><a href="/iain-white/documents"><i class="fa fa-file-o"></i> Documents</a></li>
                            <li><a href="/iain-white/press-and-reviews"><i class="fa fa-quote-right"></i> Press &amp; Reviews</a></li>
                            <li><a href="/iain-white/recommendations"><i class="fa fa-comment"></i> Recommendations</a></li>
                            <li><a href="/iain-white/social-media"><i class="fa fa-twitter-square"></i> Social Media</a></li>
                        </ul>
                    </li>
                    <!-- End Iain -->

                    <!-- Project Management -->
                    <li class="<?php echo $this->stencil->addActive('project-management'); ?> dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Project Management
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Agile -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);"><i class="fa fa-puzzle-piece"></i> Agile</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/project-management/agile"><i class="fa fa-puzzle-piece"></i> Agile Development</a></li>
                                    <li><a href="/project-management/agile-manifesto"><i class="fa fa-puzzle-piece"></i> Agile Manifesto</a></li>
                                    <li><a href="/project-management/scrum"><i class="fa fa-puzzle-piece"></i> Scrum</a></li>
                                    <li><a href="/project-management/kanban"><i class="fa fa-puzzle-piece"></i> Kanban</a></li>
                                    <li><a href="/project-management/scrumban"><i class="fa fa-puzzle-piece"></i> Scrumbang</a></li>
                                    <li><a href="/project-management/extreme-programming"><i class="fa fa-puzzle-piece"></i> Extreme Programming</a></li>
                                    <li><a href="/project-management/lean"><i class="fa fa-puzzle-piece"></i> Lean Development</a></li>
                                </ul>
                            </li>
                            <!-- End Agile -->

                            <li><a href="/project-management/waterfall"><i class="fa fa-puzzle-piece"></i> Waterfall</a></li>
                            <li><a href="/project-management/prince2"><i class="fa fa-puzzle-piece"></i> Prince2</a></li>
                            <li><a href="/project-management/cmm"><i class="fa fa-puzzle-piece"></i> CMM</a></li>
                            <li><a href="/project-management"><i class="fa fa-plus pull-right"></i>More</a></li>
                        </ul>
                    </li>
                    <!-- End Project Management -->

                    <!-- Web Development -->
                    <li class="<?php echo $this->stencil->addActive('web-development'); ?> dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="drop2" role="button">
                            Web Development
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                            <!-- Languages -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);"><i class="fa fa-file-code-o"></i> Languages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/web-development/languages/javascript"><i class="fp fp-prog-js01"></i> JavaScript</a></li>
                                    <li><a href="/web-development/languages/php"><i class="fp fp-prog-php01"></i> PHP</a></li>
                                    <li><a href="/web-development/languages/java"><i class="fp fp-prog-java"></i> Java</a></li>
                                    <li><a href="/web-development/languages/asp"><i class="fp fp-prog-aspnet"></i> ASP</a></li>
                                    <li><a href="/web-development/languages/perl"><i class="fp fp-prog-perl"></i> Perl</a></li>
                                    <li><a href="/web-development/languages/python"><i class="fp fp-prog-python"></i> Python</a></li>
                                    <li><a href="/web-development/languages/bash"><i class="fp fp-prog-bash01"></i> Bash</a></li>
                                </ul>
                            </li>
                            <!-- End Languages -->

                            <!-- Databases -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);"><i class="fa fa-database"></i> Databases</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/web-development/mysql"><i class="fp fp-dbs-mysql"></i> MySQL</a></li>
                                    <li><a href="/web-development/postgresql"><i class="fp fp-dbs-postgresql"></i> PostgreSQL</a></li>
                                    <li><a href="/web-development/ms-sqlserver"><i class="fp fp-dbs-sqlserver"></i> MS SQLServer</a></li>
                                </ul>
                            </li>
                            <!-- End Databases -->

                            <!-- Front-end -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);"><i class="fa fa-html5"></i> Front-end</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/web-development/html"><i class="fa fa-html5"></i> HTML</a></li>
                                    <li><a href="/web-development/css"><i class="fa fa-css3"></i> CSS</a></li>
                                    <li><a href="/web-development/languages/javascript"><i class="fp fp-prog-js01"></i> JavaScript</a></li>
                                    <li><a href="/web-development/accessibility"><i class="fa fa-eye"></i> Accessibility</a></li>
                                    <li><a href="/web-development/seo"><i class="fa fa-search"></i> SEO</a></li>
                                </ul>
                            </li>
                            <!-- End Front-end -->

                            <li><a href="/web-development/web-browsers"><i class="fa fa-globe"></i>Browsers</a></li>
                            <li><a href="/web-development"><i class="fa fa-plus pull-right"></i>More</a></li>
                        </ul>
                    </li>
                    <!-- End Web Development -->

                    <!-- IT -->
                    <li class="<?php echo $this->stencil->addActive('it'); ?> dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            IT
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/it/software-engineering"><i class="fa fa-wrench"></i> Software Engineering</a></li>
                            <li><a href="/it/languages"><i class="fa fa-file-code-o"></i> Languages</a></li>
                            <li><a href="/it/os"><i class="fa fa-linux"></i> Operating Systems</a></li>
                            <li><a href="/it/hardware"><i class="fa fa-desktop"></i> Hardware</a></li>
                            <li><a href="/it/software"><i class="fa fa-dropbox"></i> Software</a></li>
                            <li><a href="/it/people"><i class="fa fa-users"></i> People</a></li>
                            <li><a href="/it/companies"><i class="fa fa-building"></i> Companies</a></li>
                            <li><a href="/it/books"><i class="fa fa-book"></i> Books</a></li>
                            <li><a href="/it/internet"><i class="fa fa-globe"></i> The Internet</a></li>
                            <li><a href="/it/definitions"><i class="fa fa-list"></i> Definitions</a></li>
                            <li><a href="/it"><i class="fa fa-plus pull-right"></i>More</a></li>
                        </ul>
                    </li>
                    <!-- End IT -->

                    <!-- White Internet -->
                    <li class="<?php echo $this->stencil->addActive('home'); ?> dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            White Internet
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/about"><i class="fa fa-info-circle"></i> About</a></li>
                            <li><a href="/contact"><i class="fa fa-envelope-o"></i> Contact</a></li>
                            <li><a href="/sitemap"><i class="fa fa-sitemap"></i> Site Map</a></li>
                            <?php
                            if ($this->isLoggedIn) {
                                if ($this->isAdmin) {
                                    echo '<li><a href="/admin"><i class="fa fa-cogs color-red"></i> Admin</a></li>';
                                }
                                echo '<li><a href="/members"><i class="fa fa-users"></i> Members</a></li>';
                                echo '<li><a href="/auth/logout"><i class="fa fa-sign-out pull-right color-red"></i> Logout</a></li>';
                            }
                            ?>
                            <li><a href="/privacy-policy"><i class="fa fa-file-text-o"></i> Privacy Policy</a></li>
                            <li><a href="/terms-and-conditions"><i class="fa fa-file-o"></i> Terms &amp; Conditions</a></li>
                        </ul>
                    </li>
                    <!-- White Internet -->

                    <!-- Search Block -->
                    <li>
                        <i class="search fa fa-search search-btn"></i>
                        <div class="search-open">
                            <div class="input-group animated fadeInDown">
                                <input type="text" class="form-control rounded-2x" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button class="btn-u rounded-x" type="button">Go</button>
                                    </span>
                            </div>
                        </div>
                    </li>
                    <!-- End Search Block -->
                </ul>
            </div><!--/navbar-collapse-->
        </div>
    </div>
    <!-- End Navbar -->
</div>
<!-- End Header -->

<div class="breadcrumbs">
    <div class="container">
        <?php echo $this->stencil->addH1(); ?>
        <?php echo $this->stencil->addBreadcrumb(); ?>
    </div>
</div>