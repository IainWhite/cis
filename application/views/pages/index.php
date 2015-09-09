<?php $this->stencil->setDescription('WhiteInternet information and tips on Project Management, Web Development and on-line portfolio for Iain White.'); ?>
<?php $this->stencil->meta(array('keywords' => 'Iain White, Brisbane, Australia, Project Manager, PHP Developer, Web Developer, JavaScript Guru, Scrum Master, WhiteInternet')); ?>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('WhiteInternet Home','WhiteInternet by Iain White Scrum Master / Project Manager'); ?>
        <div class="margin-top-10 margin-bottom-20">
            <img src="/assets/images/white-internet-logo.gif" alt="WhiteInternet" title="WhiteInternet" class="img-responsive center-block">
        </div>
        <p class="text-center"><em>Not everything is black and white</em></p>
        <p class="text-center">WhiteInternet is the on-line portfolio for Iain White a Scrum Master / Project Manager and Web Developer based in Brisbane Australia with over <?php echo $this->stencil->elapsedYears('01/09/1987', FALSE, FALSE); ?> experience.</p>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="thumbnails thumbnail-style thumbnail-kenburn">
            <div class="thumbnail-img">
                <div class="overflow-hidden">
                    <a href="/iain-white/php-developer" title="Iain White PHP Developer">
                        <img class="img-responsive" src="/assets/images/php-logos.gif" alt="Back-end" title="PHP Developer">
                    </a>
                </div>
                <a class="btn-more hover-effect" href="/iain-white/php-developer">PHP Developer</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="thumbnails thumbnail-style thumbnail-kenburn">
            <div class="thumbnail-img">
                <div class="overflow-hidden">
                    <a href="/iain-white/javascript-guru" title="Iain White JavaScript Guru">
                        <img class="img-responsive" src="/assets/images/web-logos.gif" alt="Front-end" title="JavaScript Guru">
                    </a>
                </div>
                <a class="btn-more hover-effect" href="/iain-white/javascript-guru">JavaScript Guru</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="thumbnails thumbnail-style thumbnail-kenburn">
            <div class="thumbnail-img">
                <div class="overflow-hidden">
                    <a href="/iain-white/scrum-master" title="Iain White Scrum Master">
                        <img  class="img-responsive" src="/assets/images/scrum-circle.jpg" alt="Scrum" title="Scrum Master">
                    </a>
                </div>
                <a class="btn-more hover-effect" href="/iain-white/scrum-master">Scrum Master</a>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <h3>Project Management</h3>
        <p>Project Management is a methodical approach to planning and guiding project processes from start to finish. According to the <strong><?php echo $this->stencil->addLink('Project Management Institute', 'C'); ?> (PMI)</strong>, the processes are guided through five stages: initiation, planning, executing, controlling, and closing. Project Management can be applied to almost any type of project and is widely used to control the complex processes of software development projects.</p>
        <p>The <strong><?php echo $this->stencil->addLink('Systems Development Life Cycle', 'PMM'); ?> (SDLC)</strong> is one example of a methodology for guiding the project management process from an initial feasibility study through maintenance of the completed application. Various SDLC approaches include the <strong><?php echo $this->stencil->addLink('waterfall model', 'PMM'); ?></strong>, which was the original SDLC method, <strong><?php echo $this->stencil->addLink('Rapid Application Development', 'PMM'); ?> (RAD)</strong>, <strong><?php echo $this->stencil->addLink('Joint Application Development', 'PMM'); ?> (JAD)</strong>, the <strong><?php echo $this->stencil->addLink('Fountain Model', 'PMM'); ?></strong>, the <strong><?php echo $this->stencil->addLink('Spiral model', 'PMM'); ?></strong>, build and fix; and synchronize and stabilize. A number of charting methods, such as the <strong><?php echo $this->stencil->addLink('Gantt chart', 'PM'); ?></strong> and <strong><?php echo $this->stencil->addLink('PERT chart', 'PM'); ?></strong> have been developed as tools to create a graphic representation of a <?php echo $this->stencil->addLink('project plan', 'PM'); ?> and its current status.</p>
        <?php if ($this->stencil->getIsLooking()): ?>
        <p><strong><?php echo $this->stencil->addLink('Iain White', 'I'); ?></strong> is a certified <?php echo $this->stencil->addLink('Scrum Master', 'IW'); ?> with practical experience in Project Management.</p>
        <?php endif; ?>
        <p>Popular Project Management methodologies include:</p>
        <ul>
            <li><?php echo $this->stencil->addLink('Scrum', 'PMA'); ?></li>
            <li><?php echo $this->stencil->addLink('PMBOK', 'PM'); ?></li>
            <li><?php echo $this->stencil->addLink('Prince2', 'PMM'); ?></li>
            <li><?php echo $this->stencil->addLink('Six Sigma', 'PM'); ?></li>
            <li><?php echo $this->stencil->addLink('ISO 21500', 'PM'); ?></li>
        </ul>
    </div>
</div>
