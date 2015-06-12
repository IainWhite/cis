<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Burn Down Chart'); ?>
        <p>The <strong>Sprint Burn Down Chart</strong> is a publicly displayed chart showing remaining work in the <?php echo $this->stencil->addLink('Sprint Backlog', 'PMS'); ?>. Updated every day, it gives a simple view of the Sprint progress.</p>
        <p>There are also other types of burndown, for example the Release Burndown Chart that shows the amount of work left to complete the target commitment for a Product Release (normally spanning through multiple iterations) and the Alternative Release Burndown Chart, which basically does the same, but clearly shows scope changes to Release Content, by resetting the baseline.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <?php echo $this->stencil->addBook('scrum', $how = 'type', $num = 5); ?>
        </div>
    </div>
<?php endif; ?>