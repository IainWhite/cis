<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('PEAR - PHP Extension and Application Repository'); ?>
        <p><strrong>The PHP Extension and Application Repository</strrong>, or <strong>PEAR</strong>, is a repository of <?php echo $this->stencil->addLink('PHP', 'L'); ?> software code.</p>
        <p><strong>Stig S. Bakken</strong> founded the PEAR project in 1999 to promote the re-use of code that performs common functions.</p>
        <p>The project seeks to provide a structured library of code, maintain a system for distributing code and for managing code packages, and promote a standard coding style. Though community driven, the PEAR project has a PEAR Group which serves as the governing body and takes care of administrative tasks. Each PEAR code package comprises an independent project under the PEAR umbrella. It has its own development team, versioning control and documentation.</p>
        <br />
        <p><strong>The PEAR website:</strong> <?php echo $this->stencil->addExternalLink('pear.php.net', 'http://pear.php.net'); ?></p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>PEAR Packages</h2>
            <p>A PEAR package is distributed as a gzipped tar file. Each archive consists of source code written in PHP, usually in an object-oriented style. Many PEAR packages can readily be used by developers as ordinary third party code via simple include statements in PHP. More elegantly, the PEAR package manager which comes with PHP by default may be used to install PEAR packages so that the extra functionality provided by the package appears as an integrated part of the PHP installation. Unlike the <strong>Comprehensive Perl Archive Network</strong> (<?php echo $this->stencil->addLink('CPAN', 'languages/perl'); ?>) archives, which PEAR took as its model, PEAR packages do not have implicit dependencies so that a package's placement in the PEAR package tree does not relate to code dependencies. Rather, PEAR packages must explicitly declare all dependencies on other PEAR packages.</p>
            <p>The PEAR base classes contain code for simulating object-oriented destructors and consistent error-handling. Packages exist for many basic PHP functions including authentication, caching, database access, encryption, configuration, <?php echo $this->stencil->addLink('HTML', 'WD'); ?>, web services and <?php echo $this->stencil->addLink('XML', 'WD'); ?>.

            <h2>PEAR Package Manager</h2>
            <p>The PEAR package manager provides a standardised way to install, uninstall, or upgrade with new PEAR packages or <?php echo $this->stencil->addLink('PECL', 'PHP'); ?> extensions. Before installing a package it can also be instructed to take care of package dependencies so all the extra needed packages are installed too.</p>
            <p>The PEAR package manager is run from the command line using the pear command. Usually it is therefore only the server administrator who can alter the installed base of PEAR and PECL extensions. On PHP installations running on <?php echo $this->stencil->addLink('Linux', 'OS'); ?>, the PEAR package manager is ready for usage by default, but on <?php echo $this->stencil->addLink('Windows', 'OS'); ?> the PEAR package manager is only available after running a batch file called go-pear.bat.</p>
        </div>
    </div>
<?php endif; ?>
