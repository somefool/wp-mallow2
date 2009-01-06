<?php // get header ?>
<?php include "header.php"; ?>

<?php // get get my custom functions ?>
<?php include "myfunctions.php"; ?>


<body id="home">


<div id="shadow">


<div id="rap">

<?php // get the nav etc ?>
<?php include "topbanner.php"; ?>

<?php // get sidebar ?>
<?php include "sidebar.php"; ?>


<div id="content">

<?php  
// if we have more than one page then show the nav at the top

if (anymorepages()) { ?>
	<div class="navigation">
			<div class="alignleft"><?php posts_nav_link('','','&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php posts_nav_link('','Next Entries &raquo;','') ?></div>
		</div>
		
		<?php  } ?>
		
	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
				
			<div class="post">
<!-- Post title -->
<h3 class="storytitle" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a>&nbsp;&nbsp;<span><?php comments_popup_link_title(__('No Comments'), __('1 Comment'), __('% Comments'), __(''), __(''), 'Comments: '.get_the_title()); ?></span><?php edit_post_link(" <small>e</small>"); ?></h3>
<!-- Post meta -->
<div class="meta">
Posted on <?php the_time('F jS, Y') ?>. <!-- By <?php the_author() ?>. --> About <?php the_category(', ') ?>.</div>

<!-- Actual post -->
<div class="storycontent">
<?php the_content(); ?>
</div>			
				<!--
				<?php trackback_rdf(); ?>
				-->
			</div>
	
		<?php endwhile; ?>

<?php  
// if we have more than one page then show the nav at the bottom

if (anymorepages()) { ?>
	<div class="navigation">
			<div class="alignleft"><?php posts_nav_link('','','&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php posts_nav_link('','Next Entries &raquo;','') ?></div>
		</div>
		
		<?php  } ?>
		
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center"><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
		<?php include "searchform.php"; ?>

	<?php endif; ?>
	
<div style="clear: both;"></div>

	</div>
	

<?php // get footer ?>

<?php include "footer.php"; ?>

</div>


</div>

</body>

</html>