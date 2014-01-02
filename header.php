<!doctype html>
<html class="no-js" lang="en">
<!----------------------
   ____                
  / ___|__ _ _ __ ___  
 | |   / _` | '_ ` _ \ 
 | |__| (_| | | | | | |
  \____\__,_|_| |_| |_|
  
   http://camgould.com

----------------------->

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="generator" content="Anchor CMS" />
		
		<title><?php echo page_title(); ?> | <?php echo site_name(); ?></title>
		
		<link href="<?php echo theme_url('css/style.css'); ?>"  rel="stylesheet" media="screen" type="text/css" />
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.ico'); ?>" type="image/x-icon" />
		
		<!-- Add per-post CSS -->
		<?php if(article_css()): ?>
			<style><?php echo article_css(); ?></style>
		<?php endif; ?>
		
		<!-- Add per-post JS -->
		<?php if(article_js()): ?>
			<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>

	<body>
		<header>
			<a class="logo" href="<?php echo base_url(); ?>" title="<?php site_description(); ?>"><?php echo site_name(); ?></a>
			<?php if(has_menu_items()) : ?>
			    <nav role="main">
			        <?php while(menu_items()) : ?>
			            <a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a>
			        <?php endwhile; ?>
			    </nav>
			<?php endif; ?>
		</header>

