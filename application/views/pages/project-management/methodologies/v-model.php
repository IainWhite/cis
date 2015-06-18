<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('V-model'); ?>
        <p>The <strong>V-model</strong> represents a software development process (also applicable to hardware development) which may be considered an extension of the <?php echo $this->stencil->addLink('waterfall model', 'PMM'); ?>. Instead of moving down in a linear way, the process steps are bent upwards after the coding phase, to form the typical V shape. The V-Model demonstrates the relationships between each phase of the development life cycle and its associated phase of testing. The horizontal and vertical axes represents time or project completeness (left-to-right) and level of abstraction (coarsest-grain abstraction uppermost), respectively.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Verification Phases</h2>

            <h3>Requirements Analysis</h3>
            <p>In the Requirements analysis phase, the first step in the verification process, the requirements of the system are collected by analyzing the needs of the user(s). This phase is concerned with establishing what the ideal system has to perform. However it does not determine how the software will be designed or built. Usually, the users are interviewed and a document called the user requirements document is generated.</p>
            <p>The user requirements document will typically describe the system’s functional, interface, performance, data, security, etc. requirements as expected by the user. It is used by business analysts to communicate their understanding of the system to the users. The users carefully review this document as this document would serve as the guideline for the system designers in the system design phase. The user acceptance tests are designed in this phase. See also Functional requirements.</p>
            <p>There are different methods for gathering requirements of both soft and hard methodologies including; interviews, questionnaires, document analysis, observation, throw-away prototypes, use cases and static and dynamic views with users.</p>

            <h3>System Design</h3>
            <p>Systems design is the phase where system engineers analyse and understand the business of the proposed system by studying the user requirements document. They figure out possibilities and techniques by which the user requirements can be implemented. If any of the requirements are not feasible, the user is informed of the issue. A resolution is found and the user requirement document is edited accordingly.</p>
            <p>The software specification document which serves as a blueprint for the development phase is generated. This document contains the general system organisation, menu structures, data structures etc. It may also hold example business scenarios, sample windows, reports for the better understanding. Other technical documentation like entity diagrams, data dictionary will also be produced in this phase. The documents for system testing are prepared.</p>

            <h3>Architecture Design</h3>
            <p>The phase of the design of computer architecture and software architecture can also be referred to as high-level design. The baseline in selecting the architecture is that it should realize all which typically consists of the list of modules, brief functionality of each module, their interface relationships, dependencies, database tables, architecture diagrams, technology details etc. The integration testing design is carried out in the particular phase.</p>

            <h3>Module Design</h3>
            <p>The module design phase can also be referred to as low-level design. The designed system is broken up into smaller units or modules and each of them is explained so that the programmer can start coding directly. The low level design document or program specifications will contain a detailed functional logic of the module, in pseudocode:</p>
            <ul>
                <li>database tables, with all elements, including their type and size</li>
                <li>all interface details with complete API references</li>
                <li>all dependency issues</li>
                <li>error message listings</li>
                <li>complete input and outputs for a module</li>
            </ul>
            <p>The unit test design is developed in this stage.</p>

            <h2>Validation Phases</h2>
            <p>In the V-model, each stage of verification phase has a corresponding stage in the validation phase. The following are the typical phases of validation in the V-Model, though they may be known by other names.</p>

            <h3>Unit Testing</h3>
            <p>In the V-Model, Unit Test Plans (UTPs) are developed during module design phase. These UTPs are executed to eliminate bugs at code level or unit level. A unit is the smallest entity which can independently exist, e.g. a program module. Unit testing verifies that the smallest entity can function correctly when isolated from the rest of the codes / units.</p>

            <h3>Integration Testing</h3>
            <p>Integration Test Plans are developed during the Architectural Design Phase. These tests verify that units created and tested independently can coexist and communicate among themselves. Test results are shared with customer's team.</p>

            <h3>System Testing</h3>
            <p>System Tests Plans are developed during System Design Phase. Unlike Unit and Integration Test Plans, System Test Plans are composed by client's business team. System Test ensures that expectations from application developed are met. The whole application is tested for its functionality, interdependency and communication. System Testing verifies that functional and non-functional requirements have been met. Load and performance testing, stress testing, regression testing, etc., are subsets of system testing.</p>

            <h3>User Acceptance Testing</h3>
            <p>User Acceptance Test (UAT) Plans are developed during the Requirements Analysis phase. Test Plans are composed by business users. UAT is performed in a user environment that resembles the production environment, using realistic data. UAT verifies that delivered system meets user's requirement and system is ready for use in real time.</p>

        </div>
    </div>
<?php endif; ?>