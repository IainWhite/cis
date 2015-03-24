<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8"> <![endif]-->
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<?php echo $head; ?>
</head>
<body class="<?php echo $body_class; ?>">
    <div class="wrapper">
		<?php echo $header; ?>
        <div class="container content">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <?php echo $sidemenu_ip_layer; ?>
                </div>
                <div class="col-lg-10 col-md-10">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
        <!-- Container Part -->
        <?php echo $footer; ?>
</body>
</html>
