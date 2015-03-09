  <meta charset="utf-8">
  <title><?php  echo $title ?></title>
  <?php echo chrome_frame(); ?>
  <?php echo view_port(); ?>
  <meta name="description" content="<?php echo $description; ?>">
  <?php echo $meta; ?>
  <?php echo apple_mobile('black-translucent'); ?>
  <?php echo windows_tile(array('name' => 'Stencil', 'image' => base_url() . '/assets/img/image/favicons/tile.png', 'color' => '#4eb4e5')); ?>
  <?php echo favicons(); ?>

  <?php echo addBootstrapCSS('3.3.2', FALSE); ?>
  <?php echo addCss(array('app', 'plugins', 'plugins/animate', 'plugins/box-shadows', 'style', 'themes/blue')); ?>
  <?php echo addCss('line-icons/line-icons.css', 'assets/plugins/'); ?>
  <?php //echo '<link rel="stylesheet" href="' . base_url() . 'assets/plugins/line-icons/line-icons.css">'; ?>
  <?php echo addFontAwesomeCSS('4.3.0', FALSE); ?>
  <?php echo $css; ?>
