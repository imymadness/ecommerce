<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="container">
  <div class="row">
    <div class="span12">
      <div class="head">
        <div class="row-fluid">
            <div class="span12">
                <div class="span6">
                    <h1 class="muted" style="font-family: Bernard MT Condensed; color: cyan; font-size: 80px; ">Pasticcini</h1>
                </div>
            </div>
        </div>

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav" style="font-family: Bernard MT Condensed; font-size: 40px; color: yellow; ">
                        <li>
                            <a href="http://localhost/wordpress/home/">Home</a>
                        </li>

                        <li>
                            <a href="http://localhost/wordpress/shop/">Shop</a>
                        </li>

                        <li>
                            <a href="http://localhost/wordpress/cart/">Cart</a>
                        </li>

                        <li>
                            <a href="http://localhost/wordpress/my-account/">Check out</a>
                        </li>

                        <li>
                            <a href="http://localhost/wordpress/about/">About us</a>
                        </li>

                        <li>
                            <a href="http://localhost/wordpress/contact/">Contact us</a>
                        </li>

                        


                        
                    </ul>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>