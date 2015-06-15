<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Lean Software Development'); ?>
        <p>The term <strong>lean software development</strong> originated in the book <?php echo $this->stencil->addLink('Lean Software Development: An Agile Toolkit', 'B'); ?>, written by <?php echo $this->stencil->addLink('Mary and Tom Poppendieck', 'P'); ?>.</p>
        <p>The book presents the traditional lean principles in a modified form, as well as a set of 22 tools and compares the tools to agile practices.<p>
        <p>The Poppendiecks' involvement in the <?php echo $this->stencil->addLink('Agile', 'PM'); ?> software development community, including talks at several Agile conferences has resulted in such concepts being more widely accepted within the Agile community.
        <h2>Lean principles</h2>
        <p>Lean development can be summarized by seven principles, very close in concept to lean manufacturing principles:</p>
        <ol>
            <li>Eliminate waste</li>
            <li>Amplify learning</li>
            <li>Decide as late as possible</li>
            <li>Deliver as fast as possible</li>
            <li>Empower the team</li>
            <li>Build integrity in</li>
            <li>See the whole</li>
        </ol>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <h3>Eliminate waste</h3>
        <p>Lean philosophy regards everything not adding value to the customer as waste (muda).</p>
        <p>Such waste may include:</p>
        <ul>
            <li>Unnecessary code and functionality</li>
            <li>Delay in the software development process</li>
            <li>Unclear requirements</li>
            <li>Insufficient testing (leading to avoidable process repetition)</li>
            <li>Bureaucracy</li>
            <li>Slow internal communication</li>
        </ul>
        <p>In order to eliminate waste, one should be able to recognize it.</p>
        <p>If some activity could be bypassed or the result could be achieved without it, it is waste.</p>
        <p>Partially done coding eventually abandoned during the development process is waste.</p>
        <p>Extra processes and features not often used by customers are waste.</p>
        <p>Waiting for other activities, teams, processes is waste.</p>
        <p>Defects and lower quality are waste.</p>
        <p>Managerial overhead not producing real value is waste.</p>
        <p>A value stream mapping technique is used to identify waste.</p>
        <p>The second step is to point out sources of waste and to eliminate them.</p>
        <p>Waste-removal should take place iteratively until even essential-seeming processes and procedures are liquidated.</p>
    </div>
</div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h3>Amplify learning</h3>
            <p>Software development is a continuous learning process with the additional challenge of development teams and end product sizes.</p>
            <p>The best approach for improving a software development environment is to amplify learning.</p>
            <p>The accumulation of defects should be prevented by running tests as soon as the code is written.</p>
            <p>Instead of adding more documentation or detailed planning, different ideas could be tried by writing code and building.</p>
            <p>The process of user requirements gathering could be simplified by presenting screens to the end-users and getting their input.</p>
            <p>The learning process is sped up by usage of short iteration cycles – each one coupled with refactoring and integration testing.</p>
            <p>Increasing feedback via short feedback sessions with customers helps when determining the current phase of development and adjusting efforts for future improvements.</p>
            <p>During those short sessions both customer representatives and the development team learn more about the domain problem and figure out possible solutions for further development.</p>
            <p>Thus the customers better understand their needs, based on the existing result of development efforts, and the developers learn how to better satisfy those needs.</p>
            <p>Another idea in the communication and learning process with a customer is set-based development – this concentrates on communicating the constraints of the future solution and not the possible solutions, thus promoting the birth of the solution via dialogue with the customer.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h3>Decide as late as possible</h3>
            <p>As software development is always associated with some uncertainty, better results should be achieved with an options-based approach, delaying decisions as much as possible until they can be made based on facts and not on uncertain assumptions and predictions.</p>
            <p>The more complex a system is, the more capacity for change should be built into it, thus enabling the delay of important and crucial commitments.</p>
            <p>The iterative approach promotes this principle – the ability to adapt to changes and correct mistakes, which might be very costly if discovered after the release of the system.</p>
            <p>An agile software development approach can move the building of options earlier for customers, thus delaying certain crucial decisions until customers have realized their needs better.</p>
            <p>This also allows later adaptation to changes and the prevention of costly earlier technology-bounded decisions.</p>
            <p>This does not mean that no planning should be involved – on the contrary, planning activities should be concentrated on the different options and adapting to the current situation, as well as clarifying confusing situations by establishing patterns for rapid action.</p>
            <p>Evaluating different options is effective as soon as it is realized that they are not free, but provide the needed flexibility for late decision making.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h3>Deliver as fast as possible</h3>
            <p>In the era of rapid technology evolution, it is not the biggest that survives, but the fastest.</p>
            <p>The sooner the end product is delivered without major defects, the sooner feedback can be received, and incorporated into the next iteration.</p>
            <p>The shorter the iterations, the better the learning and communication within the team.</p>
            <p>With speed, decisions can be delayed. Speed assures the fulfilling of the customer's present needs and not what they required yesterday.</p>
            <p>This gives them the opportunity to delay making up their minds about what they really require until they gain better knowledge.</p>
            <p>Customers value rapid delivery of a quality product.</p>
            <p>The just-in-time production ideology could be applied to software development, recognizing its specific requirements and environment.</p>
            <p>This is achieved by presenting the needed result and letting the team organize itself and divide the tasks for accomplishing the needed result for a specific iteration.</p>
            <p>At the beginning, the customer provides the needed input.</p>
            <p>This could be simply presented in small cards or stories – the developers estimate the time needed for the implementation of each card.</p>
            <p>Thus the work organization changes into self-pulling system – each morning during a stand-up meeting, each member of the team reviews what has been done yesterday, what is to be done today and tomorrow, and prompts for any inputs needed from colleagues or the customer.</p>
            <p>This requires transparency of the process, which is also beneficial for team communication.</p>
            <p>Another key idea in Toyota's Product Development System is set-based design.</p>
            <p>If a new brake system is needed for a car, for example, three teams may design solutions to the same problem.</p>
            <p>Each team learns about the problem space and designs a potential solution.</p>
            <p>As a solution is deemed unreasonable, it is cut.</p>
            <p>At the end of a period, the surviving designs are compared and one is chosen, perhaps with some modifications based on learning from the others - a great example of deferring commitment until the last possible moment.</p>
            <p>Software decisions could also benefit from this practice to minimize the risk brought on by big up-front design.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h3>Empower the team</h3>
            <p>There has been a traditional belief in most businesses about the decision-making in the organization – the managers tell the workers how to do their own job.</p>
            <p>In a "Work-Out technique", the roles are turned – the managers are taught how to listen to the developers, so they can explain better what actions might be taken, as well as provide suggestions for improvements.</p>
            <p>The lean approach favours the aphorism "<em>find good people and let them do their own job</em>", encouraging progress, catching errors, and removing impediments, but not micro-managing.</p>
            <p>Another mistaken belief has been the consideration of people as resources.</p>
            <p>People might be resources from the point of view of a statistical data sheet, but in software development, as well as any organizational business, people do need something more than just the list of tasks and the assurance that they will not be disturbed during the completion of the tasks.</p>
            <p>People need motivation and a higher purpose to work for – purpose within the reachable reality, with the assurance that the team might choose its own commitments.</p>
            <p>The developers should be given access to the customer; the team leader should provide support and help in difficult situations, as well as ensure that scepticism does not ruin the team’s spirit.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h3>Build integrity in</h3>
            <p>The customer needs to have an overall experience of the System – this is the so-called perceived integrity: how it is being advertised, delivered, deployed, accessed, how intuitive its use is, price and how well it solves problems.</p>
            <p>Conceptual integrity means that the system’s separate components work well together as a whole with balance between flexibility, maintainability, efficiency, and responsiveness.</p>
            <p>This could be achieved by understanding the problem domain and solving it at the same time, not sequentially.</p>
            <p>The needed information is received in small batch pieces – not in one vast chunk with preferable face-to-face communication and not any written documentation.</p>
            <p>The information flow should be constant in both directions – from customer to developers and back, thus avoiding the large stressful amount of information after long development in isolation.</p>
            <p>One of the healthy ways towards integral architecture is refactoring.</p>
            <p>As more features are added to the original code base, the harder it becomes to add further improvements.</p>
            <p>Refactoring is about keeping simplicity, clarity, minimum amount of features in the code.</p>
            <p>Repetitions in the code are signs for bad code designs and should be avoided.</p>
            <p>The complete and automated building process should be accompanied by a complete and automated suite of developer and customer tests, having the same versioning, synchronization and semantics as the current state of the System.</p>
            <p>At the end the integrity should be verified with thorough testing, thus ensuring the System does what the customer expects it to.</p>
            <p>Automated tests are also considered part of the production process, and therefore if they do not add value they should be considered waste.</p>
            <p>Automated testing should not be a goal, but rather a means to an end, specifically the reduction of defects.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h3>See the whole</h3>
            <p>Software systems nowadays are not simply the sum of their parts, but also the product of their interactions.</p>
            <p>Defects in software tend to accumulate during the development process – by decomposing the big tasks into smaller tasks, and by standardizing different stages of development, the root causes of defects should be found and eliminated.</p>
            <p>The larger the system, the more organizations that are involved in its development and the more parts are developed by different teams, the greater the importance of having well defined relationships between different vendors, in order to produce a system with smoothly interacting components.</p>
            <p>During a longer period of development, a stronger subcontractor network is far more beneficial than short-term profit optimizing, which does not enable win-win relationships.</p>
            <p>Lean thinking has to be understood well by all members of a project, before implementing in a concrete, real-life situation. "<em>Think big, act small, fail fast; learn rapidly</em>" – these slogans summarize the importance of understanding the field and the suitability of implementing lean principles along the whole software development process.</p>
            <p>Only when all of the lean principles are implemented together, combined with strong "common sense" with respect to the working environment, is there a basis for success in software development.</p>
        </div>
    </div>
<?php endif; ?>