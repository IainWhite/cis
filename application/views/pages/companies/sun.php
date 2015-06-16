<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Sun Microsystems'); ?>
        <p><strong>Sun Microsystems Inc.</strong> was a company that sold computers, computer components, computer software, and information technology services and that created the <?php echo $this->stencil->addLink('Java', 'L'); ?> programming language, and the Network File System (NFS).</p>
        <p>Sun significantly evolved several key computing technologies, among them <?php echo $this->stencil->addLink('Unix', 'OS'); ?>, <?php echo $this->stencil->addLink('RISC', 'ITH'); ?> Processors, Thin Client Computing, and virtualized computing.</p>
        <p>Sun was founded on 24 February 1982.</p>
    </div>
</div>

<?php if (!$this->stencil->getIsSub()): ?>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <p>On 27 January 2010, Sun was acquired by <?php echo $this->stencil->addLink('Oracle Corporation', 'C'); ?> for US $7.4 billion, based on an agreement signed on 20 April 2009.</p>
        <p>The following month, Sun Microsystems, Inc. was merged with Oracle USA, Inc. to become Oracle America, Inc.</p>
        <p>Sun products included computer servers and workstations built on its own RISC-based <?php echo $this->stencil->addLink('SPARC', 'ITH'); ?> processor architecture as well as on <?php echo $this->stencil->addLink('x86', 'ITC'); ?> based AMD's Opteron and Intel's Xeon processors; storage systems; and a suite of software products including the <?php echo $this->stencil->addLink('Solaris', 'OS'); ?> operating system, developer tools, Web infrastructure software, and identity management applications.</p>
        <p>Other technologies include the <?php echo $this->stencil->addLink('Java', 'L'); ?> platform, <?php echo $this->stencil->addLink('MySQL', 'DB'); ?>, and NFS.</p>
        <p>Sun was a proponent of open systems in general and Unix in particular, and a major contributor to open source software.</p>
    </div>
</div>
<?php endif; ?>