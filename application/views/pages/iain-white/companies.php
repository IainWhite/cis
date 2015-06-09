<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Companies'); ?>
        <?php $this->stencil->setDescription('Iain White is a Web Developer who has worked for a number of prestigious companies in Europe and Australia.'); ?>
        <?php $this->stencil->meta(array('keywords' => 'Iain White, Brisbane, Australia, PHP Developer, Web Developer, JavaScript Guru, Scrum Master')); ?>

        <p>This page is a list of companies that Iain White has worked at.</p>

        <ul>
            <li><?php echo $this->stencil->addLink('Emu Design', 'iain-white/companies'); ?>, Brisbane AU, 2014 - 2015</li>
            <li><?php echo $this->stencil->addLink('OnTheHouse', 'iain-white/companies'); ?>, Brisbane AU, 2013 - 2014</li>
            <li><?php echo $this->stencil->addLink('Freenet', 'iain-white/companies'); ?>, Springfield AU, 2012 - 2012</li>
            <li><?php echo $this->stencil->addLink('Big Bridge', 'iain-white/companies'); ?>, Brisbane AU, 2001 - 2011</li>
            <li><?php echo $this->stencil->addLink('The AOT Group', 'iain-white/companies', NULL, FALSE, 'aot'); ?>, Brisbane AU, 2006 - 20011</li>
            <li><?php echo $this->stencil->addLink('JPC Infonet', 'iain-white/companies', NULL, FALSE, 'jpc'); ?>, Trowbridge UK, 2002 - 2006</li>
            <li><?php echo $this->stencil->addLink('TigerRedi', 'iain-white/companies'); ?>, Bristol UK, 200 - 2001</li>
            <li><?php echo $this->stencil->addLink('Anglian Network Systems', 'iain-white/companies', NULL, FALSE, 'ans'); ?>, Bristol UK , 1999 - 2000</li>
            <li><?php echo $this->stencil->addLink('Reuters', 'iain-white/companies'); ?>, ???, UK, 1997 - 1999</li>
        </ul>

    </div>
</div>