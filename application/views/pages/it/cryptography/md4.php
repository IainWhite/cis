<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('MD4'); ?>
        <p>The <strong>MD4</strong> Message-Digest Algorithm is a cryptographic hash function developed by <strong>Ronald Rivest</strong> in 1990. The digest length is 128 bits. The algorithm has influenced later designs, such as the <?php echo $this->stencil->addLink('MD5', 'IT'); ?>, <?php echo $this->stencil->addLink('SHA-1', 'IT'); ?> and <?php echo $this->stencil->addLink('RIPEMD', 'IT'); ?> algorithms.</p>
        <p>The security of MD4 has been severely compromised. The first full collision attack against MD4 was published in 1995 and several newer attacks have been published since then. As of 2007, an attack can generate collisions in less than 2 MD4 hash operations.</p>
        <p>MD4 is used to compute NTLM password-derived key digests on <?php echo $this->stencil->addLink('Microsoft Windows NT', 'WIN'); ?>, <?php echo $this->stencil->addLink('XP', 'WIN'); ?>, <?php echo $this->stencil->addLink('Vista', 'WIN'); ?> and <?php echo $this->stencil->addLink('7', 'WIN'); ?>.</p>
    </div>
</div>