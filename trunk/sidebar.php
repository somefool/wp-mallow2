<!-- Sidebar menu div -->
<div id="menu">


<?php $post = $posts[0]; /* Hack. Set $post so that the_date() works. */ ?>


<?php /* If this is a category archive */ if (is_category()) { ?>
<div id="sidebarcurrent">You are currently browsing the <a href="<?php bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives for the '<?php echo single_cat_title(); ?>' category.</div>
			
			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<div id="sidebarcurrent">You are currently browsing the <a href="<?php bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives for the day <?php the_time('l, F jS, Y'); ?>.</div>
			
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<div id="sidebarcurrent">You are currently browsing the <a href="<?php bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives for <?php the_time('F, Y'); ?>.</div>

      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<div id="sidebarcurrent">You are currently browsing the <a href="<?php bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives for the year <?php the_time('Y'); ?>.</div>
			
		

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<div id="sidebarcurrent">You are currently browsing the <a href="<?php bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives.</div>

			<?php } ?>
			



<ul>

<li><?php _e('Author'); ?><ul>
<li>A little something about you, the author. Nothing lengthy, just an overview.</li></ul></li>

<li><?php wp_list_pages('title_li=' . __('Pages')); ?></li>

<li>
	<?php wp_list_categories('title_li=' . __('Categories')); ?>
</li>



<li><?php _e('Archives'); ?><ul> 
<?php wp_get_archives('type=monthly&show_post_count=true'); ?>
</ul></li>



 <li id="calendar">
	<?php get_calendar(); ?>
 </li>

<?php /* If this is the frontpage */ if (is_home()) { ?>		

<li>
	<?php wp_list_bookmarks('title_after=&title_before='); ?>
</li>

			<?php } ?>

</ul>

</div>
