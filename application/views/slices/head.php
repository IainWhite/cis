    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <?php echo addChromeFrame(); ?>
    <?php echo addViewPort(); ?>
    <?php echo $this->stencil->addDescription(); ?>
    <?php echo $meta; ?>

    <?php echo $this->stencil->addAppleMobile(); ?>
    <?php echo addMobile(); ?>

    <?php echo addFavicons(); ?>

    <?php echo $this->stencil->addSeo(); ?>
    <?php echo $this->stencil->addWindowsTile(); ?>
    <?php echo $this->stencil->addGeo(); ?>

    <?php echo addBootstrapCSS('3.3.2', FALSE); ?>
    <?php //echo addCss(array('modules/home/index.css', 'app', 'plugins', 'plugins/animate', 'plugins/box-shadows', 'style', 'themes/blue')); ?>
    <?php echo addCss(array('app.min', 'plugins-cleaned.min', 'ie8', 'animate-cleaned.min', 'box-shadows-cleaned.min', 'style.min', 'blue-cleaned.min')); ?>
    <?php echo addCss('http://fonts.googleapis.com/css?family=Open+Sans:300,400'); ?>
    <?php //echo addCss('line-icons/line-icons.css', 'assets/plugins/'); ?>
    <?php echo addFontAwesomeCSS('4.3.0', FALSE); ?>
    <?php echo addCss('pictonic/css/pictonic-custom.css', 'assets/plugins/'); ?>

    <?php echo $css; ?>
