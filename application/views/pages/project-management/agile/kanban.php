<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Kanban'); ?>
        <?php $this->stencil->setDescription('Kanban is a method for managing knowledge work with an emphasis on just-in-time delivery while not overloading the team members.'); ?>
        <?php $this->stencil->meta(array('keywords' => 'Kanban, Agile')); ?>
        <p><strong>Kanban</strong> is a method for managing knowledge work with an emphasis on just-in-time delivery while not overloading the team members. In this approach, the process, from definition of a task to its delivery to the customer, is displayed for participants to see and developers pull work from a queue.</p>
        <p>Kanban can be divided into two parts:</p>
        <ul>
            <li>Kanban - A visual process management system that tells what to produce, when to produce it, and how much to produce.</li>
            <li>The Kanban method - An approach to incremental, evolutionary process improvement for organizations.</li>
        </ul>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <p>The name 'Kanban' originates from Japanese, and translates roughly as "<em>signal card</em>".</p>
        <p>The Kanban method as formulated by <strong>David J. Anderson</strong> is an approach to incremental, evolutionary process and systems change for organizations.</p>
        <p>It uses a work-in-progress limited pull system as the core mechanism to expose system operation (or process) problems and stimulate collaboration to continuously improve the system.</p>

        <h2>Four basic principles</h2>

        <h3>Start with what you do now</h3>
        <p>The Kanban method does not prescribe a specific set of roles or process steps. The Kanban method starts with the roles and processes you have and stimulates continuous, incremental and evolutionary changes to your system. The Kanban method is a change management method and is distinct from the Kanban software development process and Kanban project management.</p>

        <h3>Agree to pursue incremental, evolutionary change</h3>
        <p>The organization (or team) must agree that continuous, incremental and evolutionary change is the way to make system improvements and make them stick. Sweeping changes may seem more effective but have a higher failure rate due to resistance and fear in the organization. The Kanban method encourages continuous small incremental and evolutionary changes to your current system.</p>

        <h3>Respect the current process, roles, responsibilities &amp; titles</h3>
        <p>It is likely that the organization currently has some elements that work acceptably and are worth preserving. We must also seek to drive out fear in order to facilitate future change. By agreeing to respect current roles, responsibilities and job titles we eliminate initial fears. This should enable us to gain broader support for our Kanban initiative. Perhaps presenting Kanban against an alternative more sweeping approach that would lead to changes in titles, roles, responsibilities and perhaps the wholesale removal of certain positions will help individuals to realize the benefits.</p>

        <h3>Leadership at all levels</h3>
        <p>Acts of leadership at all levels in the organization from individual contributors to senior management should be encouraged.</p>

        <h2>Six core practices</h2>
        <ol>
            <li>Visualise<br /> The workflow of knowledge work is inherently invisible. Visualising the flow of work and making it visible is core to understanding how work proceeds. Without understanding the workflow, making the right changes is harder. A common way to visualise the workflow is to use a card wall with cards and columns. The columns on the card wall representing the different states or steps in the workflow.</li>
            <li>Limit WIP<br /> Limiting work-in-process implies that a pull system is implemented on parts or all of the workflow. The pull system will act as one of the main stimuli for continuous, incremental and evolutionary changes to your system. The pull system can be implemented as a kanban system, a CONWIP system, a DBR system, or some other variant. The critical elements are that work-in-process at each state in the workflow is limited and that new work is “pulled” into the new information discovery activity when there is available capacity within the local WIP limit.</li>
            <li>Manage flow<br /> The flow of work through each state in the workflow should be monitored, measured and reported. By actively managing the flow the continuous, incremental and evolutionary changes to the system can be evaluated to have positive or negative effects on the system.</li>
            <li>Make policies explicit<br /> Until the mechanism of a process is made explicit it is often hard or impossible to hold a discussion about improving it. Without an explicit understanding of how things work and how work is actually done, any discussion of problems tends to be emotional, anecdotal and subjective. With an explicit understanding it is possible to move to a more rational, empirical, objective discussion of issues. This is more likely to facilitate consensus around improvement suggestions.</li>
            <li>Implement feedback loops<br /> Collaboration to review flow of work and demand versus capability measures, metrics and indicators coupled with anecdotal narrative explaining notable events is vital to enabling evolutionary change. Organizations that have not implemented the second level of feedback - the operations review - have generally not seen process improvements beyond a localized team level. As a result, they have not realized the full benefits of Kanban observed elsewhere.</li>
            <li>Improve collaboratively, evolve experimentally (using models and the scientific method)<br /> The Kanban method encourages small continuous, incremental and evolutionary changes that stick. When teams have a shared understanding of theories about work, workflow, process, and risk, they are more likely to be able to build a shared comprehension of a problem and suggest improvement actions which can be agreed by consensus.</li>
        </ol>
    </div>
</div>
<?php endif; ?>