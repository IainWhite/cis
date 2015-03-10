    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <?php echo addChromeFrame(); ?>
    <?php echo addViewPort(); ?>
    <meta name="description" content="<?php echo $description; ?>">
    <?php echo $meta; ?>

    <?php echo addAppleMobile(get_domain(), 'black-translucent'); ?>
    <?php echo addMobile(); ?>

    <?php echo addFavicons(); ?>

    <?php echo addSeo(); ?>
    <?php echo addWindowsTile(array('name' => get_domain(), 'image' => base_url() . '/assets/img/image/favicons/tile-8.png', 'color' => '#27d7e7')); ?>
    <?php echo addGeo(); ?>

    <?php echo addBootstrapCSS('3.3.2', FALSE); ?>
    <?php echo addCss(array('modules/home/index.css', 'app', 'plugins', 'plugins/animate', 'plugins/box-shadows', 'style', 'themes/blue')); ?>
    <?php echo addCss('line-icons/line-icons.css', 'assets/plugins/'); ?>
    <?php echo addFontAwesomeCSS('4.3.0', FALSE); ?>
    <?php echo $css; ?>
