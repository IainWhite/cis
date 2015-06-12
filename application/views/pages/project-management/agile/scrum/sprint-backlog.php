<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Sprint Backlog'); ?>
        <p>The <strong>Sprint Backlog</strong> is the list of work the <?php echo $this->stencil->addLink('Development Team', 'PMS'); ?> must address during the next <?php echo $this->stencil->addLink('Sprint', 'PMS'); ?>. The list is derived by selecting <?php echo $this->stencil->addLink('Product Backlog', 'PMS'); ?> items from the top of the Product Backlog until the Development Team feels it has enough work to fill the Sprint.</p>
        <p>This is done by the Development Team asking "Can we also do this?" and adding product backlog items to the sprint backlog. The Development Team should keep in mind its past performance assessing its capacity for the new sprint, and use this as a guide line of how much "effort" they can complete.</p>
        <p>The product Backlog items are broken down into Tasks by the Development Team. Tasks on the Sprint Backlog are never assigned; rather, tasks are signed up for by the team members as needed according to the set priority and the Development Team member skills. This promotes self-organization of the Development Team, and developer buy-in.</p>
        <p>The sprint backlog is the property of the Development Team, and all included estimates are provided by the Development Team. Often an accompanying task board is used to see and change the state of the tasks of the current sprint, like "to do", "in progress" and "done".</p>
        <p>Once a Sprint's Product Backlog is committed, no additional functionality can be added to the Sprint except by the Development Team.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <?php echo $this->stencil->addBook('scrum', $how = 'type', $num = 5); ?>
        </div>
    </div>
<?php endif; ?>