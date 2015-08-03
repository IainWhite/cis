<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('FreeBSD'); ?>
        <p><strong>FreeBSD</strong> is a free <?php echo $this->stencil->addLink('Unix-like', 'OS'); ?> operating system descended from <strong>AT&amp;T UNIX</strong> via <strong>BSD UNIX</strong>.</p>
        <p>Although for legal reasons FreeBSD cannot be called "<em>UNIX</em>", as a direct descendant of BSD UNIX (many of whose original developers became FreeBSD developers), FreeBSD's internals and system APIs are UNIX compliant. Due to its permissive licensing terms, much of FreeBSD's code base has become an integral part of other operating systems such as <?php echo $this->stencil->addLink('Apple', 'C'); ?>'s <?php echo $this->stencil->addLink('OS X', 'OS'); ?> that have subsequently been certified as UNIX compliant and have formally received UNIX branding.</p>
        <p>With the exception of the proprietary OS X, FreeBSD is the most widely used BSD derived operating system in terms of number of installed computers, and is the most widely used freely licensed, open-source BSD distribution, accounting for more than three quarters of all installed systems running free, open-source BSD derivatives.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p>Characterised in 2005 as "<em>the unknown giant among free operating systems</em>", FreeBSD is a complete operating system. The kernel, device drivers, and all of the userland utilities, such as the shell, are held in the same source code revision tracking tree. (<?php echo $this->stencil->addLink('Linux', 'OS'); ?> distributions, for which the kernel, userland utilities, and applications are developed separately, and then packaged together in various ways by others).</p>
            <p>Third-party application software may be installed using various software installation systems, the two most common being source installation and package installation, both of which use the <strong>FreeBSD Ports</strong> system.</p>

            <h2>Logo</h2>
            <p>For many years FreeBSD's logo was the generic <strong>BSD daemon</strong>, also called <strong><em>Beastie</em></strong>, a distorted pronunciation of BSD. First appearing in 1976 on UNIX T-shirts purchased by <?php echo $this->stencil->addLink('Bell Labs', 'C'); ?>, the more popular versions of the BSD daemon were drawn by animation director John Lasseter beginning in 1984. Several FreeBSD specific versions were later drawn by Tatsumi Hosokawa.</p>
            <p>Through the years <em>Beastie</em> became both beloved and criticized as perhaps inappropriate for corporate and mass market exposure. Moreover it was not unique to FreeBSD. In lithographic terms, the Lasseter graphic is not line art and often requires a screened, four color photo offset printing process for faithful reproduction on physical surfaces such as paper. Moreover, the BSD daemon was thought to be too graphically detailed for smooth size scaling and aesthetically over dependent upon multiple color gradations, making it hard to reliably reproduce as a simple, standardized logo in only two or three colours, much less in monochrome.</p>
            <p>Because of these worries, a competition was held and a new logo designed by Anton K. Gural, still echoing the BSD daemon, was released on 8 October 2005. Meanwhile Lasseter's much known take on the BSD daemon carries forth as the official mascot of the FreeBSD Project.</p>
        </div>
    </div>
<?php endif; ?>