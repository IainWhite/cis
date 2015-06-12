<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Scrum'); ?>
        <p><strong>Scrum</strong> is an iterative and incremental agile software development framework for managing software projects and product or application development.</p>
        <p>Its focus is on "a flexible, holistic product development strategy where a development team works as a unit to reach a common goal" as opposed to a "traditional, sequential approach".</p>
        <p>Scrum enables the creation of self-organizing teams by encouraging co-location of all team members, and verbal communication between all team members and disciplines in the project.</p>
        <p>A key principle of Scrum is its recognition that during a project the customers can change their minds about what they want and need (often called requirements churn), and that unpredicted challenges cannot be easily addressed in a traditional predictive or planned manner.</p>
        <p>As such, Scrum adopts an empirical approach—accepting that the problem cannot be fully understood or defined, focusing instead on maximizing the team's ability to deliver quickly and respond to emerging requirements.</p>

        <p><?php echo $this->stencil->addLink('Jeff Sutherland', 'P'); ?> and <?php echo $this->stencil->addLink('Ken Schwaber', 'P'); ?> created Scrum as a formal software development process at OOPSLA'95.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php $this->stencil->sub('project-management/agile/scrum/sprint', NULL, TRUE); ?>
        <h2>Roles</h2>
        <ul>
            <li><?php echo $this->stencil->addLink('Scrum Master', 'PMS'); ?><li>
            <li><?php echo $this->stencil->addLink('Development Team', 'PMS'); ?><li>
            <li><?php echo $this->stencil->addLink('Product Owner', 'PMS'); ?><li>
        </ul>
        <h2>Meetings</h2>
        <ul>
            <li><?php echo $this->stencil->addLink('Daily Scrum', 'PMS'); ?><li>
            <li><?php echo $this->stencil->addLink('Sprint Planning', 'PMS'); ?><li>
            <li><?php echo $this->stencil->addLink('Sprint Review', 'PMS'); ?><li>
            <li><?php echo $this->stencil->addLink('Sprint Retrospective', 'PMS'); ?><li>
        </ul>
        <h2>Artifacts</h2>
        <ul>
            <li><?php echo $this->stencil->addLink('Product Backlog', 'PMS'); ?><li>
            <li><?php echo $this->stencil->addLink('Sprint Backlog', 'PMS'); ?><li>
            <li><?php echo $this->stencil->addLink('Burn Down Chart', 'PMS'); ?><li>
        </ul>
    </div>
</div>
<?php endif; ?>