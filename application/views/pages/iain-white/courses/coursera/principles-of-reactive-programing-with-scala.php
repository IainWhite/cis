<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Principles Of Reactive Programing With Scala'); ?>

        <div class="courses rounded-2x box-shadow shadow-effect-1 pull-left col-md-12 col-lg-12 margin-bottom-10 margin-right-5">
            <p><strong><i class="fa fa-building"></i> Institution:</strong> &Eacute;cole Polytechnique F&eacute;d&eacute;rale de Lausanne (Courera)</p>
            <p><strong><i class="fa fa-user"></i> Leaturers:</strong> <?php echo $this->stencil->addLink('Erik Meijer', 'P'); ?>, <?php echo $this->stencil->addLink('Roland Kuhn', 'P'); ?> and <?php echo $this->stencil->addLink('Martin Odersky', 'P'); ?></p>
            <p><strong><i class="fa fa-calendar"></i> Date:</strong> November 2013 (7 weeks)</p>
            <p><strong><i class="fa fa-trophy"></i> Award:</strong> <?php echo $this->stencil->addPDFLink('qualifications/principles-of-reactive-programmingpwith-scala', 'Statement of Accomplishment with distinction', '', NULL, FALSE, FALSE, FALSE); ?>, Score: 100%</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <p>Seven weeks exploreing reactive programming in a sequence of lectures, quizzes, and homework assignments from <?php echo $this->stencil->addLink('Erik Meijer', 'P'); ?>, <?php echo $this->stencil->addLink('Roland Kuhn', 'P'); ?> and <?php echo $this->stencil->addLink('Martin Odersky', 'P'); ?>.</p>
        <p>The aim of the course is to teach the principles of reactive programming. Reactive programming is an emerging discipline which combines concurrency and event-based and asynchronous systems. It is essential for writing any kind of web-service or distributed system and is also at the core of many high-performance concurrent systems. Reactive programming can be seen as a natural extension of higher-order functional programming to concurrent systems that deal with distributed state by coordinating and orchestrating asynchronous data streams exchanged by actors.</p>
        <p>In this course you will discover key elements for writing reactive programs in a composable way. You will find out how to apply these building blocks in the construction of event-driven systems that are scalable and resilient.</p>

        <?php echo $this->stencil->addLogo('Scala', 'png', 'center'); ?>

        <h2>Course Syllabus</h2>
        <p>Week 1: Review of Principles of Functional Programming: substitution model, for-expressions and how they relate to monads. Introduces a new implementation of for-expressions: random value generators. Shows how this can be used in randomized testing and gives an overview of ScalaCheck, a tool which implements this idea.</p>
        <p>Week 2: Functional programming and mutable state. What makes an object mutable? How this impacts the substitution model. Extended example: Digital circuit simulation.</p>
        <p>Week 3: Futures. Introduces futures as another monad, with for-expressions as concrete syntax. Shows how futures can be composed to avoid thread blocking. Discusses cross-thread error handling.</p>
        <p>Week 4: Reactive stream processing.  Generalizing futures to reactive computations over streams. Stream operators.</p>
        <p>Week 5: Actors. Introduces the Actor Model, actors as encapsulated units of consistency, asynchronous message passing, discusses different message delivery semantics (at most once, at least once, exactly once) and eventual consistency.</p>
        <p>Week 6: Supervision. Introduces reification of failure, hierarchical failure handling, the Error Kernel pattern, lifecycle monitoring, discusses transient and persistent state.</p>
        <p>Week 7: Conversation Patterns. Discusses the management of conversational state between actors and patterns for flow control, routing of messages to pools of actors for resilience or load balancing, acknowledgement of reception to achieve reliable delivery.</p>

        <h2>Lectures</h2>
        <ul>
            <li>Lecture 1.1 - What is Reactive Programming?</li>
            <li>Lecture 1.2 - Recap: Functions and Pattern Matching</li>
            <li>Lecture 1.3 - Recap: Collections</li>
            <li>Lecture 1.4 - Functional Random Generators</li>
            <li>Lecture 1.5 - Monads</li>
            <li>Lecture 2.1 - Functions and State</li>
            <li>Lecture 2.2 - Identity and Change</li>
            <li>Lecture 2.3 - Loops</li>
            <li>Lecture 2.4 - Extended Example: Discrete Event Simulation</li>
            <li>Lecture 2.5 - Discrete Event Simulation: API and Usage</li>
            <li>Lecture 2.6 - Discrete Event Simulation: Implementation and Test</li>
            <li>Lecture 3.1 - Monads and Effects</li>
            <li>Lecture 3.2 - Latency as an Effect</li>
            <li>Lecture 3.3 - Composing Futures</li>
            <li>Lecture 3.4 - Promises, promises, promises</li>
            <li>Lecture 4.1 - From Futures to Observables</li>
            <li>Lecture 4.2 - Basic Combinators on Observable Collections</li>
            <li>Lecture 4.3 - Subscriptions</li>
            <li>Lecture 4.4 - Creating Rx Streams</li>
            <li>Lecture 4.5 - Schedulers I</li>
            <li>Lecture 4.6 - Schedulers II</li>
            <li>Lecture 5.1 - Introduction: Why Actors?</li>
            <li>Lecture 5.2 - The Actor Model</li>
            <li>Lecture 5.3 - Message Processing Semantics</li>
            <li>Lecture 5.4 - Designing Actor Systems</li>
            <li>Lecture 5.5 - Testing Actor Systems</li>
            <li>Lecture 6.1 - Failure Handling with Actors</li>
            <li>Lecture 6.2 - Life cycle Monitoring and the Error Kernel</li>
            <li>Lecture 6.3 - Persistent Actor State</li>
            <li>Lecture 7.1 - Actors are Distributed</li>
            <li>Lecture 7.2 - Actors are Distributed Part II</li>
            <li>Lecture 7.3 - Eventual Consistency</li>
            <li>Lecture 7.4 - Actor Composition</li>
            <li>Lecture 7.5 - Scalability</li>
            <li>Lecture 7.6 - Responsiveness</li>
        </ul>
    </div>
</div>