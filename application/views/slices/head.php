    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <?php echo addChromeFrame(); ?>
    <?php echo addViewPort(); ?>
    <?php echo addDescription(); ?>
    <?php echo $meta; ?>

    <?php echo addAppleMobile(); ?>
    <?php echo addMobile(); ?>

    <?php echo addFavicons(); ?>

    <?php echo addSeo(); ?>
    <?php echo addWindowsTile(); ?>
    <?php echo addGeo(); ?>

    <?php echo addBootstrapCSS('3.3.2', FALSE); ?>
    <?php echo addCss(array('modules/home/index.css', 'app', 'plugins', 'plugins/animate', 'plugins/box-shadows', 'style', 'themes/blue')); ?>
    <?php echo addCss('line-icons/line-icons.css', 'assets/plugins/'); ?>
    <?php echo addFontAwesomeCSS('4.3.0', FALSE); ?>
    <?php echo $css; ?>
