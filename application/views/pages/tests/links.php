<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Links Tests'); ?>
        <?php echo $this->stencil->addLink('C++', 'L') . '<br />'; ?>
        <?php echo $this->stencil->addLink('PHP', 'L') . '<br />'; ?>
        <?php echo $this->stencil->addLink('Apache', 'web-development/web-servers', 'Apache Server') . '<br />'; ?>
        <?php echo $this->stencil->addLink('Test1', 'PM', '', TRUE) . '<br />'; ?>
        <?php echo $this->stencil->addLink('A Test With Spaces', 'B') . '<br />'; ?>
        <?php echo $this->stencil->addLink('BBC BASIC', 'L') . '<br />'; ?>
        <?php echo $this->stencil->addExternalLink('CodeIgniter', 'https://ellislab.com/codeigniter/') . '<br />'; ?>
        <?php echo $this->stencil->addWikiLink('CodeIgniter') . '<br />'; ?>
        <?php echo $this->stencil->addRFCLink('2468') . '<br />'; ?>
    </div>
</div>
