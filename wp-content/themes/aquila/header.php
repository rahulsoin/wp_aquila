
<!DOCTYPE html>
<html>
<head>
	<title>Aquila</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="<?php echo get_template_directory_uri();?>/assets/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

    <header>
    <?php get_template_part('template-parts/header/nav') ?>
    </header>
