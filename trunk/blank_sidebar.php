<?php
/*
Template Name: blank_sidebar
*/

?>

<?php // get header ?>
<?php include "header.php"; ?>

<body id="home">

<div id="shadow">

<div id="rap">


<?php // get the nav etc ?>
<?php include "topbanner.php"; ?>

<?php // get sidebar ?>
<?php include "sidebar.php"; ?>


<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post">
		<h3 class="storytitle"><?php the_title(); ?></h3>
			
			<div class="storycontent">
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
	        <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
	        </div>
	        
		 </div>
		 
	  <?php endwhile; endif; ?>
	  
<div style="clear: both;">&nbsp;</div>

</div>
	


<?php // get footer ?>
<?php include "footer.php"; ?>

</div>

</div>

</body>

</html>