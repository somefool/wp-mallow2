<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!'); ?>

       <?php if ( !empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
       				
				<p><?php _e('Enter your password to view comments.'); ?></p>
				
				<?php return; endif; ?>
				
				
<!-- You can start editing here. -->
<a name="comments"></a><h3 id="commenttitle"><?php comments_number('No responses','One response','% responses' );?> to '<?php the_title(); ?>'.</h3>

<div class="meta" style="padding-top:0px;">


<?php if (('open' == $post-> comment_status) && ('open' == $post-> ping_status)){ // comments are open pings are open ?> 
	<?php comments_rss_link(__("<abbr title=\"Really Simple Syndication\">RSS</abbr> feed")); ?> for comments and <a href="<?php trackback_url() ?>">Trackback <abbr title="Unique Resource Identifier">URI</abbr></a> for '<?php the_title(); ?>'.<?php } ?>

<?php if (('open' == $post-> comment_status) && ('closed' == $post-> ping_status)){ // comments are open pings are closed ?> 
	<?php comments_rss_link(__("<abbr title=\"Really Simple Syndication\">RSS</abbr> feed")); ?> for comments and pings are currently closed for '<?php the_title(); ?>'. <?php } ?>
	
<?php if (('closed' == $post-> comment_status) && ('open' == $post-> ping_status)){ // comments are closed pings are open ?> 
	Comments are currently closed and <a href="<?php trackback_url() ?>">Trackback <abbr title="Unique Resource Identifier">URI</abbr></a> for '<?php the_title(); ?>'.<?php } ?>
	
<?php if (('closed' == $post-> comment_status) && ('closed' == $post-> ping_status)){ // comments are closed pings are closed ?> 
	Comments and pings are currently closed for '<?php the_title(); ?>'.<?php } ?>	
    

	
	</div>
		
    <?php if ( $comments ) : ?>

<?php foreach ($comments as $comment) : ?>


<?php // track/pingbacks ?>
	
	<? if ($comment->comment_type == "trackback" || $comment->comment_type == "pingback" || ereg("<pingback />", $comment->comment_content) || ereg("<trackback />", $comment->comment_content)) { ?>
	
	<? if (!$runonce) { $runonce = true; ?>
	
	<ol id="commentlist">

<!-- <h4>Trackbacks and Pingbacks</h4> -->

<? } ?>

<li class="pings"	id="comment-<?php comment_ID() ?>">
<cite>
	<a href="<?php comment_author_url()?>" title="<?php comment_excerpt() ?>">
<?php comment_author(); ?></a></cite> - <small>Posted on <?php comment_date('F jS, Y') ?> at <?php comment_time() ?>.</small> <?php edit_comment_link(__(" e</small>"), '<small>'); ?>
	</li>

 <? } ?>

  

<?php endforeach; ?>

<? if ($runonce) { ?>

</ol>

<?php // end track/pingbacks ?>


<? } ?>

<?php // comments ?>


	<ol class="commentlist">

<!-- <h4>Comments</h4> -->

<?php $commentnumber = 0; ?>


	<?php foreach ($comments as $comment) : ?>
	 <? if ($comment->comment_type != "trackback" && $comment->comment_type != "pingback" && !ereg("<pingback />", $comment->comment_content) && !ereg("<trackback />", $comment->comment_content)) { ?>
	 
	 <? 
$commentnumber++;	
$normal = true;
$isNoted = false;
$isByAuthor = false;
$admin_email = get_settings("admin_email");
if($comment->comment_author_email == $admin_email) {
$isByAuthor = true;
$normal = false;
}
if($comment->comment_author_email == 'noted1@noted.com') {  // first noted email
$isNoted = true;
$normal = false;
}
if($comment->comment_author_email == 'noted2@noted.com') {  // second noted email
$isNoted = true;
$normal = false;
}
?>
<?php 
if($isByAuthor ) { echo '<li class="authorcomment"';}
if($isNoted ) { echo '<li class="notedcomment"';}
if($normal ) {echo '<li class="comments"';} ?>
	id="comment-<?php comment_ID() ?>">
	<a href="#comment-<?php comment_ID() ?>"><?php echo $commentnumber; ?></a> <cite><?php comment_author_link() ?> <?php edit_comment_link(__(" e</small>"), '<small>'); ?></cite><br />
	<small>Posted on <?php comment_date('F jS, Y') ?> at <?php comment_time() ?>. About '<?php the_title(); ?>'.</small><br />
	<?php comment_text() ?>
	</li>

		   <? } ?>
	<?php endforeach; /* end for each comment */ ?>

	</ol>

 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post-> comment_status) : ?> 
		<!-- If comments are open, but there are no comments. -->
		
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		
	<?php endif; ?>
<?php endif; ?>


<?php // end comments ?>


<?php if ('open' == $post-> comment_status) : ?>

<h3 id="postcomment">Leave a Comment</h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>">Logout &raquo;</a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<label for="author"><small>Name <?php if ($req) _e('(required)'); ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email"><small>Mail (will not be published) <?php if ($req) _e('(required)'); ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small>Website</small></label></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>-->

<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>