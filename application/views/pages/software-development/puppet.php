<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Puppet'); ?>
        <p><strong>Puppet</strong> is an open source configuration management utility.</p>
        <p>It runs on many <?php echo $this->stencil->addLink('Unix-like', 'OS'); ?> systems as well as on <?php echo $this->stencil->addLink('Microsoft Windows', 'OS'); ?>, and includes its own declarative language to describe system configuration.</p>
        <p>Puppet is produced by <strong>Puppet Labs</strong>, founded by <strong>Luke Kanies</strong> in 2005. It is written in <?php echo $this->stencil->addLink('Ruby', 'L'); ?> and released as free software under the GPL until version 2.7.0 and the Apache 2.0 license after that.</p>
        <p>The user describes system resources and their state, either using Puppet's declarative language or a Ruby DSL (domain-specific language). This information is stored in files called "<em>Puppet manifests</em>". Puppet discovers the system information via a utility called <strong>Facter</strong>, and compiles the Puppet manifests into a system-specific catalog containing resources and resource dependency, which are applied against the target systems. Any actions taken by Puppet are then reported.</p>
        <p>Puppet consists of a custom declarative language to describe system configuration, which can be either applied directly on the system, or compiled into a catalog and distributed to the target system via client–server paradigm (using a REST API), and the agent uses system specific providers to enforce the resource specified in the manifests. The resource abstraction layer enables administrators to describe the configuration in high-level terms, such as users, services and packages without the need to specify O/S specific commands (such as rpm, yum, apt).</p>
    </div>
</div>
