<?php /* Don't remove this line. */ require(ABSPATH . 'wp-blog-header.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/1">

<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />

<meta name="description" content="Whats on my site" /> <?php // describe your site ?>
<meta name="keywords" content="relevant, words" /> <?php // keywords for your site ?>


<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<!-- Mallow v1.58 -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

<!-- <link rel="stylesheet" type="text/css" media="print" href="<?php echo get_settings('siteurl'); ?>/print.css" /> -->
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>

<?php wp_head(); ?>

</head>