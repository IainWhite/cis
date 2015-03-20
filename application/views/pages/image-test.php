<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Image Test'); ?>
        <h3>Centered</h3>
        <p>Basic Image<p>
    </div>
</div>
<div class="row">
    <?php echo $this->stencil->addImage('Windows Vista Desktop', 'png', 'centre'); ?>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <p>With title<p>
    </div>
</div>
<div class="row">
    <?php echo $this->stencil->addImage('Windows Vista Desktop', 'png', 'centre', 'p', FALSE, NULL, TRUE); ?>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <p>With zoom and title<p>
    </div>
</div>
<div class="row">
    <?php echo $this->stencil->addImage('Windows Vista Desktop', 'png', 'centre', 'p', TRUE, NULL, TRUE); ?>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <p>With zoom<p>
    </div>
</div>
<div class="row">
    <?php echo $this->stencil->addImage('Windows Vista Desktop', 'png', 'centre', 'p', TRUE, NULL, False); ?>
</div>
