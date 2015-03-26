<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Qualifications'); ?>

        <p><strong>All</strong> <?php echo $this->stencil->getQualificationsCount(); ?></p>

        <p><strong>Pluralsight</strong> <?php echo $this->stencil->getQualificationsCount('Pluralsight'); ?></p>

        <p><strong>Lynda</strong> <?php echo $this->stencil->getQualificationsCount('Lynda'); ?></p>

        <?php echo $this->stencil->getQualifications('ALL', 3); ?>

        <?php echo $this->stencil->getQualifications('Pluralsight', 3); ?>

        <?php echo $this->stencil->getQualifications(); ?>

    </div>
</div>
