<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Sprint Retrospective Meeting'); ?>
        <p>At the end of each <?php echo $this->stencil->addLink('Sprint', 'PMS'); ?>, two meetings are held, the <?php echo $this->stencil->addLink('Sprint Review', 'PMS'); ?> and the <strong>Sprint Retrospective Meeting</strong>.
        <p>The Sprint Retrospective Meeting:</p>
        <ul>
            <li>All team members reflect on the past sprint.</li>
            <li>Make continuous process improvements.</li>
            <li>Two main questions are asked, What went well during the Sprint? What could be improved in the next Sprint?</li>
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