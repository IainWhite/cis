<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Qualifications for Iain White'); ?>
        <?php $this->stencil->setDescription('Iain White has a BSc in Computing and is a Certified Scrum Master with a passion for learning new skills.'); ?>
        <?php $this->stencil->meta(array('keywords' => 'Iain White, Brisbane, Australia, PHP Developer, Web Developer, JavaScript Guru, Scrum Master, Certified Scrum Master, BSc')); ?>

        <p>I have a <strong>Bachelor Of Science (BSc)</strong> degree and diplomas in computing.</p>
        <p>I am a <strong>Professional Scrum Master</strong> and a <strong>Competent Toastmaster (CTM)</strong>.</p>
        <p>I have completed <strong><?php echo $this->stencil->getQualificationscount();?></strong> training courses in management and software development skills.</p>
        <p><?php echo $this->stencil->addPDFLink('qualifications/professional-scrum-master', 'View Iain\'s Scrum Master certificate.', 'btn btn-info btn-large rounded-2x'); ?></p>

    </div>
</div>

<?php $this->stencil->sub('/iain-white/qualifications-summary'); ?>

<div class="row">
    <div class="col-sm-12 col-lg-12 col-md-12">
        <h2>Training Courses</h2>
        <?php echo $this->stencil->getQualifications(); ?>
    </div>
</div>
