<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/group@2x.png" type="image/svg">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800,900&display=swap" rel="stylesheet">
		<!--<link rel="stylesheet" href="css/style.css">-->
	</head>

	<body <?php body_class(); ?>>

	<?php
	
	$logo = get_field('logo' , 7);
	$right_text = get_field('right_text' , 7);
	?>
		<ul class="list-unstyled list-inline pt-5">
			<li class="list-inline-item"><a class="navbar-brand" href="#">
				<img src="<?php echo $logo; ?>" height="70" width="70"></a>
			</li>
			<li class="list-inline-item mt-1 float-right join">
				<a class="nav-link py-4" href="#contactUs"><?php echo $right_text;?></a>
			</li>
		</ul>
	
		<?php
		// wp_body_open();
		?>

	
		<?php
		// Output the menu modal.
		// get_template_part( 'template-parts/modal-menu' );
