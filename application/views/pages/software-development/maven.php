<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Maven'); ?>
        <p><strong>Maven</strong> is a build automation tool used primarily for <?php echo $this->stencil->addLink('Java', 'L'); ?> projects.</p>
        <p>Maven addresses two aspects of building software: First, it describes how software is built, and second, it describes its dependencies.</p>
        <p>Contrary to preceding tools like <?php echo $this->stencil->addLink('Ant', 'SD'); ?> it uses conventions for the build procedure, and only exceptions need to be written down.</p>
        <p>A <?php echo $this->stencil->addLink('XML', 'WD'); ?> file describes the software project being built, its dependencies on other external modules and components, the build order, directories, and required plug-ins. It comes with pre-defined targets for performing certain well-defined tasks such as compilation of code and its packaging. Maven dynamically downloads Java libraries and Maven plug-ins from one or more repositories such as the Maven 2, and stores them in a local cache. This local cache of downloaded artefacts can also be updated with artefacts created by local projects. Public repositories can also be updated.</p>
        <p>Maven can also be used to build and manage projects written in <?php echo $this->stencil->addLink('C#', 'LC'); ?>, <?php echo $this->stencil->addLink('Ruby', 'L'); ?>, <?php echo $this->stencil->addLink('Scala', 'L'); ?>, and other languages. The Maven project is hosted by the <?php echo $this->stencil->addLink('Apache Software Foundation', 'C'); ?>, where it was formerly part of the Jakarta Project.</p>
    </div>
</div>
