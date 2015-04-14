<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Seeking Work'); ?>
        <?php $this->stencil->setDescription('Iain White is a seasoned Web Developer / Scrum Master based in Brisbane who is currently seeking a new position.'); ?>
        <?php $this->stencil->meta(array('keywords' => 'Iain White, Brisbane, Australia, PHP Developer, Web Developer, JavaScript Guru, Scrum Master')); ?>

        <?php echo $this->stencil->addImage('Find Job Key', 'jpg', 'left'); ?>

        <p>I am currently seeking a new permanent position or contract in or near to the Brisbane CBD.<p>

        <p>I am a highly skilled <a href="/iain-white/web-developer">Web Developer</a> and <a href="/iain-white/scrum-master">Certified Scrum Master</a>.</p>

        <p>I have been developing software for over <?php echo $this->stencil->elapsedYears('01/09/1987'); ?> and have been a PHP Developer for over <?php echo $this->stencil->elapsedYears('01/01/1999'); ?>.</p>

        <p>See my on-line <a href="/iain-white/resume">r&eacute;sum&eacute;</a> for more details.</p>

        <p>Read my <a href="/iain-white/recommendations">recommendations</a> and see what other people say about my work.</p>

        <p>Websites that I have developed have been featured in national publications. Read my <a href="/iain-white/press-and-reviews">press reviews</a>.</p>

        <p class="text-center">View my <?php echo $this->stencil->addExternalLink('LinkedIn', 'http://au.linkedin.com/in/iwhite/en'); ?> page.</p>

        <p class="text-center"><?php echo $this->stencil->addPDFLink('iain-white-CV', 'Download Iain White\'s CV in PDF.', 'btn btn-info btn-large rounded-2x'); ?></p>

    </div>
</div>