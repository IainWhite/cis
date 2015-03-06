<meta charset="utf-8">
<title><?php  echo $title ?></title>
<?php echo chrome_frame(); ?>
<?php echo view_port(); ?>
<?php echo apple_mobile('black-translucent'); ?>
<?php echo $meta; ?>
<meta name="description" content="<?php echo $description; ?>">

<?php echo windows_tile(array('name' => 'Stencil', 'image' => base_url().'/assets/img/image/favicons/tile.png', 'color' => '#4eb4e5')); ?>
<?php echo favicons(); ?>

<?php echo add_css(array('bootstrap', 'bootstrap-responsive', 'style')); ?>
<?php echo $css; ?>

<?php echo jquery('1.9.1'); ?>
<?php echo shiv(); ?>
<?php echo add_js(array('bootstrap.min', 'scripts')); ?>
<?php echo $js; ?>