<?php // get header ?>
<?php include "header.php"; ?>


<body id="single" >

<div id="shadow">

<div id="rap">

<?php // get the nav etc ?>
<?php include "topbanner.php"; ?>


<div id="content">



				
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	

	<div class="navigation">
			<div class="alignleft"><?php previous_post('&laquo; %','','yes') ?></div>
			<div class="alignright"><?php next_post(' % &raquo;','','yes') ?></div>
		</div>

		

<!-- Post <?php the_ID(); ?> -->
<div class="post">


<div class="meta">
Posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>. 
						About <?php the_category(', ') ?>.
						 
						
</div>		
<!-- Post title -->
<h3 class="storytitle" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a><?php edit_post_link(" <small>e</small>"); ?></h3>


		
		<!-- Actual post -->
<div class="storycontent">
<?php the_content(); ?>
</div>
</div>

</div>

<div id="commentarea">
<div id="commentcontent">

	<?php comments_template(); ?>
	
	
	<div class="navigation">
			<div class="alignleft"><?php previous_post('&laquo; %','','yes') ?></div>
			<div class="alignright"><?php next_post(' % &raquo;','','yes') ?></div>
		</div>

		
		
	<?php endwhile; else: ?>
	
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php include "searchform.php"; ?>

	
<?php  endif; ?>
	
	</div>

		
		</div>
	
	

<?php // get footer ?>
<?php include "footer.php"; ?>

</div>
</div>

</body>
</html>