<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Scrum Master'); ?>
        <?php $this->stencil->setDescription('Scrum is facilitated by a Scrum Master, who is accountable for removing impediments to the ability of the team to deliver the sprint goal / deliverables.'); ?>
        <?php $this->stencil->meta(array('keywords' => 'Scrum Master, Scrum, Agile, Project Manager')); ?>
        <p><?php echo $this->stencil->addLink('Scrum', 'PMS'); ?> is facilitated by a <strong>Scrum Master</strong>, who is accountable for removing impediments to the ability of the team to deliver the sprint goal / deliverables.</p>
        <p>The Scrum Master is not the team leader, but acts as a buffer between the team and any distracting influences. The Scrum Master ensures that the Scrum process is used as intended. The Scrum Master is the enforcer of the rules of Scrum, often chairs key meetings, and challenges the team to improve.</p>
        <p>The role has also been referred to as a <strong>servant leader</strong> to reinforce these dual perspectives.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <?php echo $this->stencil->addBook('scrum', $how = 'type', $num = 5); ?>
        </div>
    </div>
<?php endif; ?>