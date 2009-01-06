<?php
/*
Template Name: 404
*/
/* You can use this by defining it as a static page in WP admin then link to that page in your hosts control panel as the 404 page */

?>


<?php // get header ?>
<?php include "header.php"; ?>


<body id="e404">

<div id="shadow">

<div id="rap">


<?php // get the nav etc ?>
<?php include "topbanner.php"; ?>

<?php // get sidebar ?>
<?php  include("sidebar.php"); ?>


    <div id="content">

    <h3>Error 404 - Not Found</h3>

    <?php include("searchform.php"); ?>
    <br />

    </div>


<?php // line the sidebar/content up ?>

<div style="clear: both;">&nbsp;</div>


<?php // get footer ?>
<?php include('footer.php'); ?>


</div>

</div>

</body>

</html>