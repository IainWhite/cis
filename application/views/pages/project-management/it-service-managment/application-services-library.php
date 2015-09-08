<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Application Services Library (ASL)'); ?>
        <p><strong>The Application Services Library (ASL)</strong> is a public domain standard, which describes a standard for processes within <?php echo $this->stencil->addLink('Application Lifecycle Management', 'PM'); ?> (the discipline of producing and maintaining information systems and applications). The term "library" is used because the ASL standard is based on the descriptions of best practices from the industry.</p>
        <p>This standard was developed in the late nineties in the Netherlands, originally as the proprietary R2C model, which evolved into ASL in 2000. In 2001 it was donated by the IT Service Provider PinkRoccade to the ASL Foundation, now the <strong>ASL BiSL Foundation</strong>.

        <p>ASL is closely related to <?php echo $this->stencil->addLink('ITIL', 'project-management/it-service-managment'); ?>, <?php echo $this->stencil->addLink('BiSL', 'project-management/it-service-managment'); ?> and <?php echo $this->stencil->addLink('CMM', 'project-management/it-service-managment'); ?>. It is described in several books and articles, as well as on the official website of the ASL BiSL Foundation <?php echo $this->stencil->addExternalLink('www.aslbislfoundation.org', 'www.aslbislfoundation.org'); ?>.</p>

        <p>The standard was developed because of the inability to structure the way of working within the Application Management departments by only using the <strong>ITIL</strong> framework, an older library embraced by the IT infrastructure departments for structuring their way of working.</p>
        <p>At the time of development, ITIL was very useful for infrastructure management but lacked specific guidance for application design, development, maintenance and support.</p>
        <p>Newer ITIL versions, particularly V3, have increasingly addressed the Application Development and Application Management domains.</p>
        <p>The <strong>ASL</strong> is intended to support <strong>Application Management</strong> by providing tools. Two main categories of aids are defined:</p>
        <ul>
            <li>
                <p>Descriptions of the processes for Application Management. Plus the use of best practises.</p>
            </li>
            <li>
                <p>Standard terminology, avoiding the pitfall of talking about different topics while using the same words.</p>
            </li>
        </ul>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>Structure of ASL</h2>
            <p>ASL contains six clusters of processes, three on the operational level, one on the tactical level and two on the strategic level.</p>

            <h3>Operational Level</h3>

            <h4>Service organisation</h4>
            <p>There are five processes within the cluster Service Organisation.</p>
            <p>The processes in the Service Organisation cluster support the daily use of the information systems.</p>
            <p>The processes in this cluster are:</p>
            <ul>
                <li>Incident management</li>
                <li>Continuity management</li>
                <li>Capacity management</li>
                <li>Availability management</li>
                <li>Configuration management</li>
            </ul>
            <p>These processes have as well been defined in the ITIL framework. The processes are similar, but are viewed from another point of view, therefore the activities in each of these processes may differ from the activities in an ITIL environment.</p>

            <h4>Development and Maintenance</h4>
            <p>Within this cluster the majority of the work of Application Development is done.</p>
            <p>A major part of the work of Application Management deals with designing, programming and testing applications and information systems.</p>
            <p>Processes are:</p>
            <ul>
                <li>Impact analysis</li>
                <li>Design</li>
                <li>Realization</li>
                <li>Testing</li>
                <li>Implementation</li>
            </ul>
            <p>These processes are not described at all in the ITIL V1 framework, but do have their counterparts in BiSL, the model for Information management / Functional Management.</p>

            <h4>Connecting processes</h4>
            <p>The connecting processes aim at the synchronisation of the activities between Service Organisation / operations (using the applications) and development and maintenance (changing the applications).</p>
            <p>The two processes included are:</p>
            <ul>
                <li>Change management</li>
                <li>Release management</li>
            </ul>

            <h3>Tactical Level</h3>

            <h4>Management processes</h4>
            <p>The processes in this cluster are used in the management of the activities within the clusters on the operational level.</p>
            <p>The processes are located on the tactical level, are used for steering the operational processes.</p>
            <p>The processes included are:</p>
            <ul>
                <li>Quality management</li>
                <li>Service level management</li>
                <li>Cost management</li>
                <li>Planning &amp; control</li>
            </ul>

            <h3>Strategic level</h3>

            <h4>Application Cycle Management</h4>
            <p>Applications live for longer than expected. Systems, functionality, concepts and structure of information systems remain stable over many years.</p>
            <p>It is important that, while maintaining and enhancing systems, there is a clear view needed what the demands are in the future, and based on that, what and how the future of these applications should look like.</p>
            <p>This view, the application management strategies, is created within the cluster application cycle management.</p>
            <p>The processes included are:</p>
            <ul>
                <li>Life cycle management</li>
                <li>Information portfolio management</li>
                <li>Customer organisation strategy</li>
                <li>Customer environment strategy</li>
                <li>ICT development strategy</li>
            </ul>

            <h4>Organisation Cycle Management</h4>
            <p>Also the future of the Application Management organisation, with aspects as skills and capabilities, markets and customers, is very important.</p>
            <p>Creating the organisation management strategies for this is the aim of Organization Cycle Management.</p>
            <p>Processes in this cluster include:</p>
            <ul>
                <li>Account definition</li>
                <li>Market definition</li>
                <li>Skills definition</li>
                <li>Technology definition</li>
                <li>Service delivery definition</li>
            </ul>
        </div>
    </div>
<?php endif; ?>