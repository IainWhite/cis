<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Scrumban'); ?>
        <p><strong>Scrumban</strong> is a software production model based on <?php echo $this->stencil->addLink('Scrum', 'PMA'); ?> and <?php echo $this->stencil->addLink('Kanban', 'PMA'); ?>.</p>
        <p>Scrumban is especially suited for maintenance projects or (system) projects with frequent and unexpected work items or programming errors.</p>
        <p>In such cases the time-limited sprints of the Scrum model are of no appreciable use, but Scrum's daily meetings and other practices can be applied, depending on the team and the situation at hand.</p>
        <p>Visualisation of the work stages and limitations for simultaneous unfinished work and defects are familiar from the Kanban model.</p>
        <p>Using these methods, the team's workflow is directed in a way that allows for minimum completion time for each work item or programming error, and on the other hand ensures each team member is constantly employed.</p>
     </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <p>In their simplest, the tasks are categorised into the work stages:</p>
        <ul>
            <li>Unstarted</li>
            <li>Ongoing</li>
            <li>Completed</li>
        </ul>
        <p>If desired, though, the teams can add more stages of work (such as "defined", "designed", "tested" or "delivered").</p>
        <p>These additional phases can be of assistance if a certain part of the work becomes a bottleneck and the limiting values of the unfinished work cannot be raised.</p>
        <p>There are no set limiting values for unfinished work. Instead, each team has to define them individually by trial and error; a value too small results in workers standing idle for lack of work, whereas values too high tend to accumulate large amounts of unfinished work, which in turn hinders completion times.</p>
        <p>A rule of thumb worth bearing in mind is that no team member should have more than two simultaneous selected tasks, and that on the other hand not all team members should have two tasks simultaneously.</p>
        <p>The major differences between Scrum and Kanban are derived from the fact that, in Scrum, work is divided into sprints that last a certain amount of time, whereas in Kanban the workflow is continuous.</p>
        <p>This is visible in work stage tables, which in Scrum are emptied after each sprint.</p>
        <p>In Kanban all tasks are marked on the same table.</p>
        <p>Scrum focuses on teams with multifaceted know-how, whereas Kanban makes specialised, functional teams possible.</p>
    </div>
</div>
<?php endif; ?>