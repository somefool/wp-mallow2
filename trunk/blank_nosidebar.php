<?php
/*
Template Name: blank_nosidebar
*/

?>

<?php // get header ?>
<?php include "header.php"; ?>


<body id="single" >

<div id="shadow">

<div id="rap">



<?php // get the nav etc ?>
<?php include "topbanner.php"; ?>

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
	  
</div>	
	
<?php // get footer ?>
<?php include "footer.php"; ?>

</div>

</div>

</body>
</html>