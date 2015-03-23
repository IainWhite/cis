<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('SA Page'); ?>
        <p>Another Bla Bla Bla</p>
        <?php
        $this->stencil->meta(array('keywords' => 'A, B, C'));
        if (!$this->stencil->getIsSub()) {
            echo '<p>Not a Sub</p>';
        }
        ?>
        <hr>
        <p>[END PAGE]</p>
    </div>
</div>