<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Daily Scrum (Standup)'); ?>
        <p>Each day during the <?php echo $this->stencil->addLink('Sprint', 'PMS'); ?>, a project team communication meeting occurs. This is called a <strong>Daily Scrum</strong>, or the <strong>Daily Standup</strong>.</p>
        <p>This meeting has specific guidelines:</p>
        <ul>
            <li>All members of the Development Team come prepared with the updates for the meeting.</li>
            <li>The meeting starts precisely on time even if some Development Team members are missing.</li>
            <li>The meeting should happen at the same location and same time every day.</li>
            <li>The meeting length is set (timeboxed) to 15 minutes.</li>
            <li>All are welcome, but normally only the core roles speak.</li>
        </ul>
        <p>During the meeting, each team member answers three questions:</p>
        <ul>
            <li>What have you done since yesterday?</li>
            <li>What are you planning to do today?</li>
            <li> Any impediments / stumbling blocks? Any blocks identified in this meeting is documented by the <?php echo $this->stencil->addLink('Scrum Master', 'PMS'); ?> and worked towards resolution outside of this meeting. No detailed discussions shall happen in this meeting.</li>
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