<?php $this->stencil->setDescription('WhiteInternet information and tips on Project Management, Web Development and on-line portfolio for Iain White.'); ?>
<?php $this->stencil->meta(array('keywords' => 'Iain White, Brisbane, Australia, Project Manager, PHP Developer, Web Developer, JavaScript Guru, Scrum Master, WhiteInternet')); ?>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('WhiteInternet Home','WhiteInternet by Iain White Scrum Master / Project Manager'); ?>
        <div class="margin-top-10 margin-bottom-20">
            <img src="/assets/images/white-internet-logo.gif" alt="White Internet" title="White Internet" class="img-responsive center-block">
        </div>
        <p class="text-center"><em>Not everything is black and white</em></p>
        <p class="text-center">White Internet is the on-line portfolio for Iain White a Scrum Master / Project Manager and Web Developer based in Brisbane Australia with over <?php echo $this->stencil->elapsedYears('01/09/1987', FALSE, FALSE); ?> experience.</p>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="thumbnails thumbnail-style thumbnail-kenburn">
            <div class="thumbnail-img">
                <div class="overflow-hidden">
                    <a href="/iain-white/project-manager" title="Iain White Project Manager">
                        <img class="img-responsive" src="/assets/images/project-manager.jpg" alt="Project Management" title="Project Manager">
                    </a>
                </div>
                <a class="btn-more hover-effect" href="/iain-white/project-manager">Project Manager</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="thumbnails thumbnail-style thumbnail-kenburn">
            <div class="thumbnail-img">
                <div class="overflow-hidden">
                    <a href="/iain-white/php-developer" title="Iain White PHP Developer">
                        <img class="img-responsive" src="/assets/images/php-logos.gif" alt="Back-end Web Development" title="PHP Developer">
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
                    <a href="/iain-white/scrum-master" title="Iain White Scrum Master">
                        <img  class="img-responsive" src="/assets/images/scrum-circle.jpg" alt="Scrum Workflow" title="Scrum Master">
                    </a>
                </div>
                <a class="btn-more hover-effect" href="/iain-white/scrum-master">Scrum Master</a>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <h3>Project Management</h3>
        <p>Project Management is a methodical approach to planning and guiding project processes from start to finish. According to the <strong>Project Management Institute (PMI)</strong>, the processes are guided through five stages: initiation, planning, executing, controlling, and closing. Project Management can be applied to almost any type of project and is widely used to control the complex processes of software development projects.</p>
        <p>The <strong>Systems Development Life Cycle (SDLC)</strong> is one example of a methodology for guiding the project management process from an initial feasibility study through maintenance of the completed application. Various SDLC approaches include the <strong>waterfall model</strong>, which was the original SDLC method, <strong>Rapid Application Development (RAD)</strong>, <strong>Joint Application Development (JAD)</strong>, the <strong>Fountain Model</strong>, the <strong>Spiral model</strong>, build and fix; and synchronize and stabilize. A number of charting methods, such as the <strong>Gantt chart</strong> and <strong>PERT chart</strong> have been developed as tools to create a graphic representation of a project plan and its current status.</p>
        <?php if ($this->stencil->getIsLooking()): ?>
        <p><strong><?php echo $this->stencil->addLink('Iain White', 'IW'); ?></strong> is a certified <?php echo $this->stencil->addLink('Scrum Master', 'IW'); ?> with practical experience in Project Management.</p>
        <?php endif; ?>
    </div>
</div>
