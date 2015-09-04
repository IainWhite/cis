<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Development Team'); ?>
        <p>The <strong>Development Team</strong> is responsible for delivering potentially shippable product increments at the end of each <?php echo $this->stencil->addLink('Sprint', 'PMS'); ?>. A Team is made up of 3 to 9 individuals with cross functional skills who do the actual work (analyse, design, develop, test, technical communication, document, etc.).</p>
        <p>The Development Team in Scrum is self-organizing.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <?php echo $this->stencil->addBook('scrum', $how = 'type', $num = 5); ?>
        </div>
    </div>
<?php endif; ?>