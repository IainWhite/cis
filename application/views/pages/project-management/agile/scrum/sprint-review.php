<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Sprint Review Meeting'); ?>
        <p>At the end of each <?php echo $this->stencil->addLink('Sprint', 'PMS'); ?>, two meetings are held, the <strong>Sprint Review Meeting</strong> and the <?php echo $this->stencil->addLink('Sprint Retrospective', 'PMS'); ?>.
        <p>The Sprint Review Meeting:</p>
        <ul>
            <li>Review the work that was completed and the planned work that was not completed.</li>
            <li>Present the completed work to the stakeholders.</li>
            <li>Review incomplete work that cannot be demonstrated.</li>
        </ul>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <?php echo $this->stencil->addBook('scrum', $how = 'type', $num = 5); ?>
        </div>
    </div>
<?php endif; ?>