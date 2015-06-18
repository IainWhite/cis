<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Sprint'); ?>
        <?php $this->stencil->setDescription('A Sprint is the basic unit of development in Scrum an iterative and incremental Agile Software Development framework.'); ?>
        <?php $this->stencil->meta(array('keywords' => 'Sprint, Scrum, Agile, timebox')); ?>
        <p>A <strong>Sprint</strong> is the basic unit of development in <?php echo $this->stencil->addLink('Scrum', 'PMS'); ?>. The sprint is a "timeboxed" effort; that is, it is restricted to a specific duration. The duration is fixed in advance for each sprint and is normally between one week and one month, although two weeks is typical.</p>
        <p>Each sprint is preceded by a planning meeting, where the tasks for the sprint are identified and an estimated commitment for the sprint goal is made, and followed by a review or retrospective meeting, where the progress is reviewed and lessons for the next sprint are identified.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <?php echo $this->stencil->addBook('scrum', $how = 'type', $num = 5); ?>
        </div>
    </div>
<?php endif; ?>