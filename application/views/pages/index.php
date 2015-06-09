<?php $this->stencil->setDescription('WhiteInternet information and tips on Project Management, Web Development and on-line portfolio for Iain White.'); ?>
<?php $this->stencil->meta(array('keywords' => 'Iain White, Brisbane, Australia, PHP Developer, Web Developer, JavaScript Guru, Scrum Master, WhiteInternet')); ?>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('WhiteInternet Home','WhiteInternet by Iain White Web Developer / Scrum Master'); ?>
        <div class="margin-top-10 margin-bottom-20">
            <img src="/assets/images/white-internet-logo.gif" alt="WhiteInternet" title="WhiteInternet" class="img-responsive center-block">
        </div>
        <p class="text-center"><em>Not everything is black and white</em></p>
        <p class="text-center">WhiteInternet, on-line portfolio for Iain White a Web Developer / Scrum Master based in Brisbane Australia with over <?php echo $this->stencil->elapsedYears('01/09/1987', FALSE, FALSE); ?> experience.</p>
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
        <?php if ($this->stencil->getWeekSwitch() == 1 || $this->stencil->getWeekSwitch() == 3): ?>
        <h3>Project Management</h3>
            <p>Project Management is a methodical approach to planning and guiding project processes from start to finish. According to the [Project Management Institute] (PMI), the processes are guided through five stages: initiation, planning, executing, controlling, and closing. Project Management can be applied to almost any type of project and is widely used to control the complex processes of software development projects.</p>
            <p>The [Systems Development Life Cycle] (SDLC) is one example of a methodology for guiding the project management process from an initial feasibility study through maintenance of the completed application. Various SDLC approaches include the [waterfall model], which was the original SDLC method, [Rapid Application Development] (RAD), [Joint Application Development] (JAD), the [Fountain Model], the [Spiral model], build and fix; and synchronize-and-stabilize. A number of charting methods, such as the [Gantt chart] and [PERT chart] have been developed as tools to create a graphic representation of a [project plan] and its current status.</p>
            <?php if ($this->stencil->getIsLooking()): ?>
            <p>[Iain White] is a certified [Scrum Master] with practical experience in Project Management.</p>
            <?php endif; ?>
        <?php else: ?>
        <h3>Web Development</h3>
        <?php endif; ?>
    </div>
</div>
