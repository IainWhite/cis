<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Pragmatic Tips'); ?>

        <h2>One Tip</h2>
        <?php echo $this->stencil->getPragmaticTips(1); ?>

        <h2>Five Tips</h2>
        <?php echo $this->stencil->getPragmaticTips(5); ?>

        <h2>Three Random Tips</h2>
        <?php echo $this->stencil->getPragmaticTips(3, TRUE); ?>

        <h2>All</h2>
        <?php echo $this->stencil->getPragmaticTips(); ?>

    </div>
</div>
