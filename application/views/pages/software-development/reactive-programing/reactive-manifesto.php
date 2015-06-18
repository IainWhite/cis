<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Reactive Manifesto'); ?>
        <p>Application requirements have changed dramatically in recent years. Only a few years ago a large application had tens of servers, seconds of response time, hours of offline maintenance and gigabytes of data. Today applications are deployed on everything from mobile devices to cloud-based clusters running thousands of multicore processors. Users expect millisecond or even microsecond response times and 100% uptime. Data needs are expanding into the petabytes.</p>

        <p>Initially the domain of innovative internet-driven companies like Google or Twitter, these application characteristics are surfacing in most industries. Finance and telecommunication were the first to adopt new practices to satisfy the new requirements and others have followed.</p>

        <p>New requirements demand new technologies. Previous solutions have emphasized managed servers and containers. Scaling was achieved through buying larger servers and concurrent processing via multi-threading. Additional servers were added through complex, inefficient and expensive proprietary solutions.</p>
        <p>But now a new architecture has evolved to let developers conceptualize and build applications that satisfy today’s demands. We call these <em>Reactive Applications</em>. This architecture allows developers to build systems that are <strong>event-driven, scalable, resilient and responsive</strong>: delivering highly responsive user experiences with a real-time feel, backed by a scalable and resilient application stack, ready to be deployed on multicore and cloud computing architectures. The Reactive Manifesto describes these critical traits which are needed for <em>going reactive</em>.</p>
    </div>
</div>
<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p>Reactive Applications are:</p>
            <ul>
                <li>Event-driven</li>
                <li>Scalable</li>
                <li>Resilient</li>
                <li>Responsive</li>
            </ul>
            <p>The <strong>Reactive Manifesto</strong> <?php echo $this->stencil->addExternalLink('www.reactivemanifesto.org', 'www.reactivemanifesto.org/'); ?>.</p>
        </div>
    </div>
<?php endif; ?>