<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Page Not Found (404)'); ?>
        <?php $this->stencil->setDescription('Page Not Found. Error 404. Could not find the requested page on White Internet.'); ?>
        <?php $this->stencil->meta(array('keywords' => 'Error, 404, Page Not Found, White Internet, Iain White, Brisbane, Australia, PHP Developer, Web Developer, JavaScript Guru, Scrum Master')); ?>
        <?php $this->stencil->overrideBreadcrumb('Page Not Found'); ?>
        <div class="margin-top-10 margin-bottom-20">
            <img src="/assets/images/oops.png" alt="Oops" title="404 Oops" class="img-responsive center-block">
        </div>
        <h2 class="text-center">Sorry! We couldn't find that page for you.</h2>
        <p class="text-center">You have requested a page or file that is outdated, renamed, moved, or does not exist.</p>
        <p class="text-center"><?php echo $subpage_text; ?></p>
    </div>
</div>

<div class="row">
    <div class="col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4">
        <div class="center-block">
            <p>Here are a few options to find what you are looking for.</p>
            <ol>
                <li>Double check the web address for typos.</li>
                <li>Head back to our <a href="/" title="WhiteInternet Home Page">Home</a> page.</li>
                <li>Visit <a href="/iain-white/iain-white" title="Iain White's On-line portfolio">about Iain White</a>.</li>
                <li>Visit <a href="/iain-white/php-developer" title="Iain White PHP Developer">PHP Developer</a>.</li>
                <li>Visit <a href="/iain-white/javascript-guru" title="Iain White JavaScript Guru">JavaScript Guru</a>.</li>
                <li>Visit <a href="/iain-white/scrum-master" title="Iain White Scrum Master">Scrum Master</a>.</li>
            </ol>
        </div>
    </div>
</div>
