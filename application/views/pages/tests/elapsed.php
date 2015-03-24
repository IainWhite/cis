<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Elapsed Years'); ?>

        <?php
        echo '<strong>elapsedYears("01/02/2000")</strong> ';
        echo $this->stencil->elapsedYears('01/02/2000') . '<br />';
        echo '<strong>elapsedYears("01/02/2000", TRUE)</strong> ';
        echo $this->stencil->elapsedYears('01/02/2000', TRUE) . '<br />';
        echo '<strong>elapsedYears("01/02/2000", FALSE, TRUE)</strong> ';
        echo $this->stencil->elapsedYears('01/02/2000', FALSE, TRUE) . '<br />';
        echo '<strong>elapsedYears("01/02/2000", TRUE, TRUE)</strong> ';
        echo $this->stencil->elapsedYears('01/02/2000', TRUE, TRUE) . '<br />';
        echo '<strong>elapsedYears("08/12/2014", FALSE, TRUE, "01/04/2015")</strong> ';
        echo $this->stencil->elapsedYears('08/12/2014', FALSE, TRUE, '01/04/2015') . '<br />';
        ?>

    </div>
</div>
