<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Elapsed Years'); ?>

        <p>All <?php echo $this->stencil->getQualificationsCount(); ?></p>

        <p>Pluralsight <?php echo $this->stencil->getQualificationsCount('Pluralsight'); ?></p>

        <p>Lynda <?php echo $this->stencil->getQualificationsCount('Lynda'); ?></p>

        <?php echo $this->stencil->getQualifications('ALL', 3); ?>

        <?php echo $this->stencil->getQualifications('Pluralsight', 3); ?>

        <?php echo $this->stencil->getQualifications(); ?>

    </div>
</div>
