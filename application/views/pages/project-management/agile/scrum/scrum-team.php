<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Scrum Team'); ?>
        <p>The <strong>Scrum Team</strong> consiste of the Development Team, Scrum Master and the Product Owner.</p>

        <?php $this->stencil->sub('project-management/agile/scrum/development-team', NULL, TRUE); ?>
        <?php $this->stencil->sub('project-management/agile/scrum/scrum-master', NULL, TRUE); ?>
        <?php $this->stencil->sub('project-management/agile/scrum/product-owner', NULL, TRUE); ?>

    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <?php echo $this->stencil->addBook('scrum', $how = 'type', $num = 3); ?>
        </div>
    </div>
<?php endif; ?>