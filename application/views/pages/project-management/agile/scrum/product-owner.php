<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Product Owner'); ?>
        <p>The <strong>Product Owner</strong> represents the stakeholders and is the voice of the customer. He or she is accountable for ensuring that the team delivers value to the business.</p>
        <p>The Product Owner writes (or has the team write) customer-centric items (typically user stories), ranks and prioritizes them, and adds them to the <?php echo $this->stencil->addLink('Product Backlog', 'PMS'); ?>.</p>
        <p>Scrum teams should have one Product Owner, and while they may also be a member of the development team, this role should not be combined with that of the <?php echo $this->stencil->addLink('Scrum Master', 'PMS'); ?>.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Chief Product Owner</h2>
            <p>The <strong>Chief Product Owner</strong> is an unofficial <?php echo $this->stencil->addLink('Scrum', 'PMS'); ?> role that can help with scaling Scrum.  In Scrum speak, this role is the Product Owner of the whole product.</p>
            <p>The Chief Product Owner is a person who is the single point of accountability for the success or failure of the complete project.</p>
        </div>
    </div>
<?php endif; ?>