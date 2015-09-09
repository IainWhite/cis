<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('RAD - Rapid Application Development'); ?>
        <p><strong>Rapid application development</strong> (<strong>RAD</strong>) is a software development methodology that uses minimal planning in favour of rapid prototyping.</p>
        <p>The "planning" of software developed using RAD is interleaved with writing the software itself. The lack of extensive pre-planning generally allows software to be written much faster, and makes it easier to change requirements.</p>
        <p>Rapid Application Development (RAD) is a term originally used for describing a software development process first developed and successfully deployed during the mid 1970s by D.Dinadasa at New York Telephone Co's Systems Development Center under the direction of Dan Gielan. Following a series of remarkably successful implementations of this process, Gielan lectured extensively in various forums on the methodology, practice, and benefits of this process.</p>
        <p>RAD involves iterative development and the construction of prototypes.</p>
        <p>In 1990, in his book <strong><em>'RAD, Rapid Application Development</em></strong>', <strong>James Martin</strong> documented his interpretation of the methodology.</p>
        <p>More recently, the term and its acronym have come to be used in a broader, general sense that encompasses a variety of methods aimed at speeding application development, such as the use of software frameworks of varied types, such as web application frameworks.</p>
        <p>Rapid application development is a response to processes developed in the 1970s and 1980s, such as the <strong><?php echo $this->stencil->addLink('Structured Systems Analysis and Design Method', 'PMM'); ?> (SSADM)</strong> and other <strong><?php echo $this->stencil->addLink('Waterfall', 'PMM'); ?></strong> models.</p>
        <p>One problem with previous methodologies was that applications took so long to build that requirements had changed before the system was complete, resulting in inadequate or even unusable systems.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <?php echo $this->stencil->addImage('RAD', 'gif', 'center'); ?>
            <h2>Four phases of RAD</h2>
            <ol>
                <li><strong>Requirements Planning phase</strong> - combines elements of the system planning and systems analysis phases of the <strong><?php echo $this->stencil->addLink('Systems Development Life Cycle', 'PMM'); ?> (SDLC)</strong>. Users, managers, and IT staff members discuss and agree on business needs, project scope, constraints, and system requirements. It ends when the team agrees on the key issues and obtains management authorization to continue.</li>
                <li><strong>User design phase</strong> - during this phase, users interact with systems analysts and develop models and prototypes that represent all system processes, inputs, and outputs. The RAD groups or subgroups typically use a combination of Joint Application Development (JAD) techniques and CASE tools to translate user needs into working models. User Design is a continuous interactive process that allows users to understand, modify, and eventually approve a working model of the system that meets their needs.</li>
                <li><strong>Construction phase</strong> - focuses on program and application development task similar to the SDLC. In RAD, however, users continue to participate and can still suggest changes or improvements as actual screens or reports are developed. Its tasks are programming and application development, coding, unit integration and system testing.
                <li><strong>Cutover phase</strong> - resembles the final tasks in the SDLC implementation phase, including data conversion, testing, changeover to the new system, and user training. Compared with traditional methods, the entire process is compressed. As a result, the new system is built, delivered, and placed in operation much sooner.</li>
            </ol>
    </div>
<?php endif; ?>