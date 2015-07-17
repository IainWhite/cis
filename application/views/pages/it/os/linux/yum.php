<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Yum - Yellowdog Updater, Modified'); ?>
        <p>The <strong>Yellowdog Updater, Modified (yum)</strong> is an open-source command-line package-management utility for <?php echo $this->stencil->addLink('Linux', 'OS'); ?> operating systems using the <?php echo $this->stencil->addLink('RPM', 'LIN'); ?> Package Manager. Though yum has a command-line interface, several other tools provide graphical user interfaces to yum functionality.</p>
        <p>Yum allows automatic updates, package and dependency management, on RPM-based distributions. Like the <strong>Advanced Packaging Tool (APT)</strong> from <?php echo $this->stencil->addLink('Debian', 'LIN'); ?>, yum works with software repositories (collections of packages), which can be accessed locally or over a network connection.</p>
        <p>Under the hood, yum depends on RPM, which is a packaging standard for digital distribution of software, which automatically uses hashes and digisigs to verify the authorship and integrity of said software; unlike some app stores, which serve a similar function, neither yum nor RPM provide built-in support for proprietary restrictions on copying of packages by endusers. Yum is implemented as libraries in the Python programming language, with a small set of programs that provide a command-line interface. GUI-based wrappers such as <strong>Yum Extender (yumex)</strong> also exist. A rewrite of yum based on libsolv named DNF is currently being developed and expected to replace yum as the default package manager in <?php echo $this->stencil->addLink('Fedora', 'LIN'); ?> 22.</p>
    </div>
</div>