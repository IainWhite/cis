    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <?php echo addChromeFrame(); ?>
    <?php echo addViewPort(); ?>
    <meta name="description" content="<?php echo $description; ?>">
    <?php echo $meta; ?>
    <?php echo addAppleMobile('black-translucent'); ?>
    <?php echo addWindowsTile(array('name' => 'Stencil', 'image' => base_url() . '/assets/img/image/favicons/tile.png', 'color' => '#4eb4e5')); ?>
    <?php echo addFavicons(); ?>

    <?php echo addBootstrapCSS('3.3.2', FALSE); ?>
    <?php echo addCss(array('modules/home/index.css', 'app', 'plugins', 'plugins/animate', 'plugins/box-shadows', 'style', 'themes/blue')); ?>
    <?php echo addCss('line-icons/line-icons.css', 'assets/plugins/'); ?>
    <?php echo addFontAwesomeCSS('4.3.0', FALSE); ?>
    <?php echo $css; ?>
