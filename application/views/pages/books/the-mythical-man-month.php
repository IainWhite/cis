<div class="row">
    <div class="col-lg-6 col-md-6 margin-bottom-10">
        <span class="label label-aqua rounded"><strong>Author:</strong> <?php echo $this->stencil->addLink('Fred Brooks', 'P'); ?></span>
    </div>
    <div class="col-lg-6 col-md-6">
        <span class="pull-right">
            <?php echo $this->stencil->addBookRating(6); ?>
        </span>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('The Mythical Man-Month: Essays on Software Engineering'); ?>
        <?php echo $this->stencil->addBookCover('9780201835953','id'); ?>
        <p><strong>The Mythical Man-Month: Essays on Software Engineering</strong> is a book on software engineering and project management by <?php echo $this->stencil->addLink('Fred Brooks', 'P'); ?>, whose central theme is that "<em>adding manpower to a late software project makes it later</em>".
        <p>This idea is known as <?php echo $this->stencil->addLink("Fred Brooks's Law", 'W'); ?>, and is presented along with the <strong>second system effect</strong> and advocacy of prototyping.</p>
        <p>Brooks' observations are based on his experiences at <?php echo $this->stencil->addLink('IBM', 'C'); ?> while managing the development of OS/360. He had added more programmers to a project falling behind schedule, a decision that he would later conclude had, counter intuitively, delayed the project even further.</p>
        <p>The tendency for managers to repeat such errors in project development led Brooks to quip that his book is called "<em>The Bible of Software Engineering</em>", because "<em>everybody quotes it, some people read it, and a few people go by it.</em>"</p>
        <p>The book is widely regarded as a classic on the human elements of software engineering.</p>
        <p>The work was first published in 1975, reprinted with corrections in 1982, and republished in an anniversary edition with four extra chapters in 1995, including a reprint of the essay "<strong>No Silver Bullet</strong>" with commentary by the author.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>The Mythical Man-Month</h2>
            <p>Brooks discusses several causes of scheduling failures. The most enduring is his discussion of <strong>Brooks's law: Adding manpower to a late software project makes it later.</strong></p>
            <p>A man-month is a concept of a unit of work proportional to the number of people working multiplied by the time that they work; Brooks's law says that this relation is a myth, and is hence the centrepiece of the book.</P>
            <p>Complex programming projects cannot be perfectly partitioned into discrete tasks that can be worked on without communication between the workers and without establishing a set of complex interrelationships between tasks and the workers performing them.</p>
            <p>Therefore, assigning more programmers to a project running behind schedule will make it even later. This is because the time required for the new programmers to learn about the project and the increased communication overhead will consume an ever increasing quantity of the calendar time available.</p>
            <p>When <em>n</em> people have to communicate among themselves, as <em>n</em> increases, their output decreases and when it becomes negative the project is delayed further with every person added.</p>
            <p>Group intercommunication formula: <em><strong>n(n - 1) / 2</strong></em></p>

            <h2>No Silver Bullet</h2>
            <p>Brooks added "<em>No Silver Bullet — Essence and Accidents of Software Engineering</em>" -- and further reflections on it, "<em>No Silver Bullet Refired</em>" to the anniversary edition of The Mythical Man-Month.</p>
            <p>Brooks insists that there is no one silver bullet, "<em>there is no single development, in either technology or management technique, which by itself promises even one order of magnitude [tenfold] improvement within a decade in productivity, in reliability, in simplicity.</em>"</p>

            <h2>The Second-System Effect</h2>
            <p>The second-system effect proposes that, when an architect designs a second system, it is the most dangerous system he will ever design, because he will tend to incorporate all of the additions he originated but did not add to the first system due to inherent time constraints.</p>
            <p>Thus, when embarking upon a second system, an engineer should be mindful that he is susceptible to over-engineering it.</p>

            <h2>The Tendency Towards Irreducible Number of Errors</h2>
            <p>The author makes the observation that in a suitably complex system there is a certain irreducible number of errors. Any attempt to fix observed errors tends to result in the introduction of other errors.</p>

            <h2>Progress Tracking</h2>
            <p>Brooks wrote "<em>Question: How does a large software project get to be one year late? Answer: One day at a time!</em>"</p>
            <p>Incremental slippages on many fronts eventually accumulate to produce a large overall delay. Continued attention to meeting small individual milestones is required at each level of management.</p>

            <h2>Conceptual Integrity</h2>
            <p>To make a user-friendly system, the system must have conceptual integrity, which can only be achieved by separating architecture from implementation.</p>
            <p>A single chief architect (or a small number of architects), acting on the user's behalf, decides what goes in the system and what stays out.</p>
            <p>The architect or team of architects should develop an idea of what the system should do and make sure this vision is understood by the rest of the team. A novel idea by someone may not be included if it does not fit seamlessly with the overall system design.In fact, to ensure a user-friendly system, a system may deliberately provide fewer features than it is capable of. The point is that if a system is too complicated to use, then many of its features will go unused because no one has the time to learn how to use them.</p>

            <h2>The Manual</h2>
            <p>The chief architect produces a manual of system specifications.</p>
            <p>It should describe the external specifications of the system in detail, i.e., everything that the user sees. The manual should be altered as feedback comes in from the implementation teams and the users.</p>

            <h2>The Pilot System</h2>
            <p>When designing a new kind of system, a team will design a throw-away system (<em>whether it intends to or not</em>).</p>
            <p>This system acts as a "pilot plant" that reveals techniques that will subsequently cause a complete redesign of the system.</p>
            <p>This second, smarter system should be the one delivered to the customer, since delivery of the pilot system would cause nothing but agony to the customer, and possibly ruin the system's reputation and maybe even the company.</p>

            <h2>Formal Documents</h2>
            <p>Every project manager should create a small core set of formal documents defining the project objectives, how they are to be achieved, who is going to achieve them, when they are going to be achieved, and how much they are going to cost.</p>
            <p>These documents may also reveal inconsistencies that are otherwise hard to see.</p>

            <h2>Project Estimation</h2>
            <p>When estimating project times, it should be remembered that programming products (which can be sold to paying customers) and programming systems are both three times as hard to write as in-house programs.</p>
            <p>It should be kept in mind how much of the work week will actually be spent on technical issues, as opposed to administrative or other non-technical tasks, such as meetings.</p>

            <h2>Communication</h2>
            <p>To avoid disaster, all the teams working on a project should remain in contact with each other in as many ways as possible - email, phone, meetings, memos etc.</p>
            <p>Instead of assuming something, the implementer should ask the architects to clarify their intent on a feature he is implementing, before proceeding with an assumption that might very well be completely incorrect.</p>
            <p>The architects are responsible for formulating a group picture of the project and communicating it to others.</p>

            <h2>The Surgical Team</h2>
            <p>Much as a surgical team during surgery is led by one surgeon performing the most critical work, while directing the team to assist with less critical parts, it seems reasonable to have a "good" programmer develop critical system components while the rest of a team provides what is needed at the right time.</p>
            <p>Additionally, Brooks muses that "good" programmers are generally five to ten times as productive as mediocre ones.</p>

            <h2>Code Freeze and System Versioning</h2>
            <p>Software is invisible. Therefore, many things only become apparent once a certain amount of work has been done on a new system, allowing a user to experience it.</p>
            <p>This experience will yield insights, which will change a user's needs or the perception of the user's needs. The system should, therefore, be changed to fulfill the changed requirements of the user.</p>
            <p>This can only occur up to a certain point, otherwise the system may never be completed. At a certain date, no more changes should be allowed to the system and the code should be frozen. All requests for changes should be delayed until the next version of the system.</p>

            <h2>Specialized Tools</h2>
            <p>Instead of every programmer having his own special set of tools, each team should have a designated tool-maker who may create tools that are highly customized for the job that team is doing, e.g., a code generator tool that creates code based on a specification.</p>
            <p>In addition, system-wide tools should be built by a common tools team, overseen by the project manager.</p>

            <h2>Lowering Software Development Costs</h2>
            <p>There are two techniques for lowering software development costs that Brooks writes about:</p>
            <p>Implementers may be hired only after the architecture of the system has been completed (a step that may take several months, during which time prematurely hired implementers may have nothing to do).</p>
            <p>Another technique Brooks mentions is not to develop software at all, but simply to buy it 'off the shelf' when possible.</p>
        </div>
    </div>

    <div class="row">
        <div class="pull-rightcol-lg-12 col-md-12 margin-bottom-10">
            <?php echo $this->stencil->addBuyBook('9780201835953','id'); ?>
            <span class="pull-right label label-aqua rounded">
                <strong>ISBN:</strong> 0201835959
                <strong>EAN:</strong> 9780201835953
            </span>
        </div>
    </div>
<?php endif; ?>
