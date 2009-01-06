<?php 

// custom functions

// surely theres a WP function for this! basically its to findout if im just showing one page, or more than one page for the nav.
function anymorepages () {
	global $request, $posts_per_page, $wpdb;

		if (get_query_var('what_to_show') == 'posts') {
			preg_match('#FROM (.*) GROUP BY#', $request, $matches);
			$fromwhere = $matches[1];
			$numposts = $wpdb->get_var("SELECT COUNT(ID) FROM $fromwhere");
			$max_page = ceil($numposts / $posts_per_page);
		} else {
			$max_page = 999999;
		}

        if ($max_page > 1) {
            return true;
        }
}




// altered 'comments_popup_link' to have a title tag. You can pass a title tag as the last variable.
function comments_popup_link_title($zero='No Comments', $one='1 Comment', $more='% Comments', $CSSclass='', $none='Comments Off', $titletag='View and write comments for this post') {
    global $id, $wpcommentspopupfile, $wpcommentsjavascript, $post, $wpdb;
    global $querystring_start, $querystring_equal, $querystring_separator;
    global $comment_count_cache;

	if (! is_single() && ! is_page()) {
    if ('' == $comment_count_cache["$id"]) {
        $number = $wpdb->get_var("SELECT COUNT(comment_ID) FROM $wpdb->comments WHERE comment_post_ID = $id AND comment_approved = '1';");
    } else {
        $number = $comment_count_cache["$id"];
    }
    if (0 == $number && 'closed' == $post->comment_status && 'closed' == $post->ping_status) {
        echo $none;
        return;
    } else {
        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_'.COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
                echo('Enter your password to view comments');
                return;
            }
        }
        echo '<a href="';
        if ($wpcommentsjavascript) {
            echo get_settings('siteurl') . '/' . $wpcommentspopupfile.$querystring_start.'p'.$querystring_equal.$id.$querystring_separator.'c'.$querystring_equal.'1';
            //echo get_permalink();
            echo '" onclick="wpopen(this.href); return false"';
        } else {
            // if comments_popup_script() is not in the template, display simple comment link
            comments_link();
            echo '"';
        }
        if (!empty($CSSclass)) {
            echo ' class="'.$CSSclass.'"';
        }
        echo ' title="'.$titletag.'">';
        comments_number($zero, $one, $more, $number);
        echo '</a>';
    }
	}
}
?>