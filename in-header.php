<?php
$custom = get_post_custom();
?>
<?php if (strlen($custom['description'][0]) > 0){ ?>
	<meta name="description" content="<?php echo $custom['description'][0]; ?>" />
<?php } ?>
<?php if (strlen($custom['keyword'][0]) > 0){ ?>
	<meta name="keywords" content="<?php echo $custom['keyword'][0]; ?>" />
<?php } ?>