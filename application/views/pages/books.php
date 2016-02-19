<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php echo $this->stencil->setHeadline('Books', 'Books on Software Development and Project Management'); ?>
        <?php $this->stencil->setDescription('Books about Information Technology, Software Development and Project Management.'); ?>
        <?php $this->stencil->meta(array('keywords' => 'Books, The Mythical Man-month, The Pragmatic Programmer')); ?>
        <p>Books about Information Technology, Software Development and Project Management.</p>

        <?php echo $this->stencil->addBook('agile', $how = 'cat', $num = 5); ?>

        <?php echo $this->stencil->addBook('development', $how = 'cat', $num = 5); ?>

    </div>
</div>

<hr class="devider devider-dotted">

<div class="row">
    <div class="col-lg-6 col-md-6">
        <a href="http://www.fishpond.com.au/index.php?ref=2802&affiliate_banner_id=4"><img src="http://www.fishpond.com.au/affiliate_show_banner.php?ref=2802&affiliate_banner_id=4" alt="Fishpond" title="Fishpond books"></a>
    </div>
    <div class="col-lg-6 col-md-6">
        <p class="pull-right">Buy books at <a href="http://www.fishpond.com.au/">www.fishpond.com.au</a>.</p>
    </div>
</div>
