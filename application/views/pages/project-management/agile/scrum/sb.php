<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('SB Page'); ?>
        <p>Bla Bla Bla</p>
        <?php
        echo $this->stencil->meta(array('keywords' => 'cats, animals, dogs')) . '<br />';
        $this->stencil->slice('ss1');
        $this->stencil->sub('project-management/agile/scrum/sa', NULL, TRUE);
        ?>

        <hr>
        <p>[END PAGE]</p>
    </div>
</div>