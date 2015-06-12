<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Sprint Planning'); ?>
        <p>At the beginning of each <?php echo $this->stencil->addLink('Sprint', 'PMS'); ?> a <strong>Sprint Planning Meeting</strong> is held inorder to:</p>
        <ul>
            <li>Select what work is to be done.</li>
            <li>Prepare the <?php echo $this->stencil->addLink('Sprint Backlog', 'PMS'); ?> that details the time it will take to do that work, with the entire team.</li>
            <li>Identify and communicate how much of the work is likely to be done during the current sprint.</li>
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