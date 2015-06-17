<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Hammock Activity'); ?>
        <p>A <strong>hammock activity</strong> (also <strong>hammock task</strong>) is a schedule or project planning term for a grouping of tasks that "hang" between two end dates it is tied to.</p>
        <p>A hammock activity can group tasks which are not related in the hierarchical sense of a <?php echo $this->stencil->addLink('Work Breakdown Structure', 'PM'); ?>, or are not related in a logical sense of a task dependency where one task must wait for another.</p>

        <h2>Usages include:</h2>
        <ul>
            <li>Group dissimilar activities that lead to an overall capability, such as preparations under a summary label, e.g. "vacation preparation";</li>
            <li>Group unrelated items for the purpose of a summary such as a calendar-based reporting period, e.g. "First quarter plans";</li>
            <li>Group ongoing or overhead activities that run the length of an effort, e.g. "project management"</li>
        </ul>

        <p>The duration of the hammock activity (the size of the hammock) may also be set by the subtasks within it, so that the abstract grouping has a start date of the earliest of any of the subtasks and the finish date is the latest of any of the contents.</p>
        <p>A hammock activity is regarded as a form of Summary activity that is similar to but different from a <?php echo $this->stencil->addLink('Level of Effort', 'PM'); ?> (LOE) activity. Use of hammock activities is also a way to simplify the difficulties of performing Work Breakdown Structure decomposition to low levels.</p>
    </div>
</div>