<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
</head>
<body>
	<div>
        <a href='<?php echo site_url('admin')?>'>Admin</a> |
        <a href='<?php echo site_url('admin/books')?>'>Books</a> |
        <a href='<?php echo site_url('admin/courses')?>'>Courses</a> |
        <a href='<?php echo site_url('admin/about')?>'>About</a> |
        <a href='<?php echo site_url('admin/alias')?>'>Alias</a> |
        <a href='<?php echo site_url('admin/file_eng')?>'>File2Eng</a> |
        <a href='<?php echo site_url('admin/headers')?>'>Headers</a> |
        <a href='<?php echo site_url('admin/plugins')?>'>Plugins</a> |
        <a href='<?php echo site_url('admin/pragmatic_tips')?>'>Pragmetic Tips</a> |
        <a href='<?php echo site_url('admin/sound_bites')?>'>Sound Bites</a> |
        <a href='<?php echo site_url('admin/wisdom')?>'>Wisdom</a>

		
	</div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
