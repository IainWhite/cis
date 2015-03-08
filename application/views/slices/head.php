  <meta charset="utf-8">
  <title><?php  echo $title ?></title>
  <?php echo chrome_frame(); ?>
  <?php echo view_port(); ?>
  <meta name="description" content="<?php echo $description; ?>">
  <?php echo $meta; ?>
  <?php echo apple_mobile('black-translucent'); ?>
  <?php echo windows_tile(array('name' => 'Stencil', 'image' => base_url() . '/assets/img/image/favicons/tile.png', 'color' => '#4eb4e5')); ?>
  <?php echo favicons(); ?>

  <?php //echo add_css(array('bootstrap', 'bootstrap-responsive', 'style')); ?>
  <?php echo '<link rel="stylesheet" href="' . base_url() . 'assets/plugins/bootstrap/css/bootstrap.min.css">'; ?>
  <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"> -->
  <?php echo add_css(array('app', 'plugins', 'plugins/animate', 'plugins/box-shadows', 'style', 'themes/blue')); ?>
  <?php '<link rel="stylesheet" href="' . base_url() . 'assets/plugins/line-icons/line-icons.css">'; ?>
  <!-- <link rel="stylesheet" href="'. base_url() . 'plugins/font-awesome/css/font-awesome.min.css"> -->
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" />
  <?php echo $css; ?>

  <?php //echo jquery('1.9.1'); ?>
  <?php //echo shiv(); ?>
  <?php //echo add_js(array('bootstrap.min', 'scripts')); ?>
  <?php //echo $js; ?>