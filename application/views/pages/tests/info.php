<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Info'); ?>

        <?php
        echo $this->stencil->dumpStencil();

        echo 'Templates v' . $this->stencil->getVersion() . '<br>';
        echo 'CodeIgniter v' .  $this->stencil->getVersion('CI') . '<br>';
        echo 'PHP v' .  $this->stencil->getVersion('PHP') . '<br>';
        echo 'Zend v' .  $this->stencil->getVersion('Zend') . '<br>';
        echo 'PostgreSQL v' .  $this->stencil->getVersion('PostgreSQL') . '<br>';
        echo 'MySQL v' .  $this->stencil->getVersion('MySQL') . '<br>';

        ?>

    </div>
</div>
