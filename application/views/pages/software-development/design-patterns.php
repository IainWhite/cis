<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Design Patterns'); ?>
        <p>A <strong>design pattern</strong> is a general reusable solution to a commonly occurring problem within a given context in software design.</p>
        <p>A design pattern is not a finished design that can be transformed directly into source or machine code. It is a description or template for how to solve a problem that can be used in many different situations. Patterns are formalised best practices that the programmer can use to solve common problems when designing an application or system. Object-oriented design patterns typically show relationships and interactions between classes or objects, without specifying the final application classes or objects that are involved. Patterns that imply object-orientation or, more generally, mutable state, are not as applicable in functional programming languages.</p>
        <p>Patterns originated as an architectural concept by <strong>Christopher Alexander</strong> (1977 / 79). In 1987, <strong>Kent Beck</strong> and <strong>Ward Cunningham</strong> began experimenting with the idea of applying patterns to programming - specifically pattern languages - and presented their results at the OOPSLA conference that year. In the following years, Beck, Cunningham and others followed up on this work.</p>
        <p>Design patterns gained popularity in computer science after the book <?php echo $this->stencil->addLink('Design Patterns: Elements of Reusable Object-Oriented Software', 'B'); ?> was published in 1994 by the so-called "<?php echo $this->stencil->addLink('Gang of Four', 'P'); ?>", which is frequently abbreviated as "GoF". That same year, the first Pattern Languages of Programming Conference was held and the following year, the <strong>Portland Pattern Repository</strong> was set up for documentation of design patterns.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">

            <h2>Patterns By Type</h2>

            <h3><?php echo $this->stencil->addLink('Creational patterens', 'SDD'); ?></h3>
            <p>Creational patterns are ones that create objects for you, rather than having you instantiate objects directly. This gives your program more flexibility in deciding which objects need to be created for a given case.</p>

            <ul>
                <li><?php echo $this->stencil->addLink('Abstract factory', 'SDD'); ?> pattern groups object factories that have a common theme.</li>
                <li><?php echo $this->stencil->addLink('Builder', 'SDD'); ?> pattern constructs complex objects by separating construction and representation.</li>
                <li><?php echo $this->stencil->addLink('Factory method', 'SDD'); ?> pattern creates objects without specifying the exact class to create.</li>
                <li><?php echo $this->stencil->addLink('Prototype', 'SDD'); ?> pattern creates objects by cloning an existing object.</li>
                <li><?php echo $this->stencil->addLink('Singleton', 'SDD'); ?> pattern restricts object creation for a class to only one instance.</li>
                <li><?php echo $this->stencil->addLink('Lazy initialisation', 'SDD'); ?> tactic of delaying the creation of an object, the calculation of a value, or some other expensive process until the first time it is needed. This pattern appears in the GoF catalog as "virtual proxy", an implementation strategy for the Proxy pattern.</li>
                <li><?php echo $this->stencil->addLink('Multition', 'SDD'); ?> ensure a class has only named instances, and provide a global point of access to them.</li>
                <li><?php echo $this->stencil->addLink('Object pool', 'SDD'); ?> avoid expensive acquisition and release of resources by recycling objects that are no longer in use. Can be considered a generalisation of connection pool and thread pool patterns.</li>
                <li><?php echo $this->stencil->addLink('Resource acquisition is initialisation', 'SDD'); ?>ensure that resources are properly released by tying them to the lifespan of suitable objects.</li>
            </ul>

            <h3><?php echo $this->stencil->addLink('Structural patterens', 'SDD'); ?></h3>
            <p>These concern class and object composition. They use inheritance to compose interfaces and define ways to compose objects to obtain new functionality.</p>

            <ul>
                <li><?php echo $this->stencil->addLink('Adapter', 'SDD'); ?> allows classes with incompatible interfaces to work together by wrapping its own interface around that of an already existing class.</li>
                <li><?php echo $this->stencil->addLink('Bridge', 'SDD'); ?> decouples an abstraction from its implementation so that the two can vary independently.</li>
                <li><?php echo $this->stencil->addLink('Composite', 'SDD'); ?> composes zero-or-more similar objects so that they can be manipulated as one object.</li>
                <li><?php echo $this->stencil->addLink('Decorator', 'SDD'); ?> dynamically adds / overrides behaviour in an existing method of an object.</li>
                <li><?php echo $this->stencil->addLink('Facade', 'SDD'); ?> provides a simplified interface to a large body of code.</li>
                <li><?php echo $this->stencil->addLink('Flyweight', 'SDD'); ?> reduces the cost of creating and manipulating a large number of similar objects.</li>
                <li><?php echo $this->stencil->addLink('Proxy', 'SDD'); ?> provides a placeholder for another object to control access, reduce cost, and reduce complexity.</li>
                <li><?php echo $this->stencil->addLink('Front Controller', 'SDD'); ?> pattern relates to the design of Web applications. It provides a centralised entry point for handling requests.</li>
                <li><?php echo $this->stencil->addLink('Module', 'SDD'); ?> group several related elements, such as classes, singletons, methods, globally used, into a single conceptual entity.</li>
            </ul>

            <h3><?php echo $this->stencil->addLink('Behavioural patterens', 'SDD'); ?></h3>
            <p>Most of these design patterns are specifically concerned with communication between objects.</p>

            <ul>
                <li><?php echo $this->stencil->addLink('Chain of responsibility', 'SDD'); ?> delegates commands to a chain of processing objects.</li>
                <li><?php echo $this->stencil->addLink('Command', 'SDD'); ?> creates objects which encapsulate actions and parameters.</li>
                <li><?php echo $this->stencil->addLink('Interpreter', 'SDD'); ?> implements a specialised language.</li>
                <li><?php echo $this->stencil->addLink('Iterator', 'SDD'); ?> accesses the elements of an object sequentially without exposing its underlying representation.</li>
                <li><?php echo $this->stencil->addLink('Mediator', 'SDD'); ?> allows loose coupling between classes by being the only class that has detailed knowledge of their methods.</li>
                <li><?php echo $this->stencil->addLink('Memento', 'SDD'); ?> provides the ability to restore an object to its previous state (undo).</li>
                <li><?php echo $this->stencil->addLink('Observer', 'SDD'); ?> is a publish/subscribe pattern which allows a number of observer objects to see an event.</li>
                <li><?php echo $this->stencil->addLink('State', 'SDD'); ?> allows an object to alter its behavior when its internal state changes.</li>
                <li><?php echo $this->stencil->addLink('Strategy', 'SDD'); ?> allows one of a family of algorithms to be selected on-the-fly at runtime.</li>
                <li><?php echo $this->stencil->addLink('Template', 'SDD'); ?> method defines the skeleton of an algorithm as an abstract class, allowing its subclasses to provide concrete behavior.</li>
                <li><?php echo $this->stencil->addLink('Visitor', 'SDD'); ?> separates an algorithm from an object structure by moving the hierarchy of methods into one object.</li>
                <li><?php echo $this->stencil->addLink('Null object', 'SDD'); ?> avoid null references by providing a default object.</li>
                <li><?php echo $this->stencil->addLink('Servent', 'SDD'); ?> define common functionality for a group of classes.</li>
                <li><?php echo $this->stencil->addLink('Specification', 'SDD'); ?> recombinable business logic in a Boolean fashion.</li>
            </ul>

            <h3><?php echo $this->stencil->addLink('Concurrency patterens', 'SDD'); ?></h3>
            <ul>
                <li><?php echo $this->stencil->addLink('Active Object', 'SDD'); ?> decouples method execution from method invocation that reside in their own thread of control. The goal is to introduce concurrency, by using asynchronous method invocation and a scheduler for handling requests.</li>
                <li><?php echo $this->stencil->addLink('Balking', 'SDD'); ?> only execute an action on an object when the object is in a particular state.</li>
                <li><?php echo $this->stencil->addLink('Double-checked locking', 'SDD'); ?> reduce the overhead of acquiring a lock by first testing the locking criterion (the 'lock hint') in an unsafe manner; only if that succeeds does the actual locking logic proceed.</li>
                <li><?php echo $this->stencil->addLink('Event-based asynchronous', 'SDD'); ?> addresses problems with the asynchronous pattern that occur in multithreaded programs.</li>
                <li><?php echo $this->stencil->addLink('Guarded suspension', 'SDD'); ?> manages operations that require both a lock to be acquired and a precondition to be satisfied before the operation can be executed.</li>
                <li><?php echo $this->stencil->addLink('Join', 'SDD'); ?> provides a way to write concurrent, parallel and distributed programs by message passing. Compared to the use of threads and locks, this is a high level programming model.</li>
                <li><?php echo $this->stencil->addLink('Lock', 'SDD'); ?> one thread puts a "lock" on a resource, preventing other threads from accessing or modifying it.</li>
                <li><?php echo $this->stencil->addLink('Messaging design pattern', 'SDD'); ?> (MDP) allows the interchange of information (i.e. messages) between components and applications.</li>
                <li><?php echo $this->stencil->addLink('Monitor object', 'SDD'); ?> an object whose methods are subject to mutual exclusion, thus preventing multiple objects from erroneously trying to use it at the same time.</li>
                <li><?php echo $this->stencil->addLink('Reactor', 'SDD'); ?> provides an asynchronous interface to resources that must be handled synchronously.</li>
                <li><?php echo $this->stencil->addLink('Read-write lock', 'SDD'); ?> allows concurrent read access to an object, but requires exclusive access for write operations.</li>
                <li><?php echo $this->stencil->addLink('Scheduler', 'SDD'); ?> explicitly control when threads may execute single-threaded code.</li>
                <li><?php echo $this->stencil->addLink('Thread Pool', 'SDD'); ?> a number of threads are created to perform a number of tasks, which are usually organized in a queue. Typically, there are many more tasks than threads.
                <li><?php echo $this->stencil->addLink('Thread-specific storage', 'SDD'); ?> static or "global" memory local to a thread.
            <ul>
        </div>
    </div>
<?php endif; ?>