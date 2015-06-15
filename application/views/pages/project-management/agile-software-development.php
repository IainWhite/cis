<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Agile'); ?>
        <p><strong>Agile</strong> software development is a group of software development methods based on iterative and incremental development, where requirements and solutions evolve through collaboration between self-organizing, cross-functional teams.</p>
        <p>It promotes adaptive planning, evolutionary development and delivery, a time-boxed iterative approach, and encourages rapid and flexible response to change.</p>
        <p>It is a conceptual framework that promotes foreseen interactions throughout the development cycle.</p>
        <p>The <?php echo $this->stencil->addLink('Agile Manifesto', 'PMA'); ?> introduced the term <em>Agile</em> in 2001.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <?php $this->stencil->sub('project-management/agile/scrum', NULL, TRUE); ?>
            <?php $this->stencil->sub('project-management/agile/kanban', NULL, TRUE); ?>
            <?php $this->stencil->sub('project-management/agile/extreme-programming', NULL, TRUE); ?>
        </div>
    </div>
<?php endif; ?>
