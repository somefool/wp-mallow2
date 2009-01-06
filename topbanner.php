<div id="topimage">

<!--  uncomment to show tabs >
	<div id="supernavcontainer">
	<ul id="supernav">
	<li><a title="The Weblog" href="<?php bloginfo('url'); ?>/">Blog</a></li> <?php // home link ?>
		<li><a title="link1" href="<?php bloginfo('url'); ?>/1/">Link 1</a></li> <?php // static page 1 ?>
		<li><a title="link2" href="<?php bloginfo('url'); ?>/2/">Link 2</a></li> <?php // static page 2 ?>
		<?php //   Copy or edit these lines ?>
	</ul>
</div>
<!-->

</div>

<div id="blogtitle">

  <h1 style="float:left;"><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> <span><?php bloginfo('description'); ?></span></h1>


		
		<form  id="titlesearch" name="searchform" method="get" action="<?php bloginfo('url'); ?>" autocomplete="off">
					<input  type="search" results="5" autosave="<?php bloginfo('name'); ?>search" id="searchsubmit" name="s" value="Search..." placeholder="Search..." size="18"  onblur=" if (this.value == '') {this.value = 'Search...';}"  onfocus="if (this.value == 'Search...') {this.value = '';}" class="inputboxes" />
					<input type="submit" id="searchsubmit" value="Search" />

			</form>
		
		
</div>