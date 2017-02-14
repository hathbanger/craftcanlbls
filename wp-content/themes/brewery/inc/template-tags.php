<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 */

/**
 * Template for comments and pingbacks.
 */
if ( ! function_exists( 'brewery_comments' ) ) :

    function brewery_comments( $comment, $args, $depth ) {

        $GLOBALS['comment'] = $comment;
        switch ( $comment->comment_type ) :
            case '' :
        ?>

        <hr>

        <li <?php comment_class('clearfix'); ?> id="li-comment-<?php comment_ID() ?>">

            <div id="comment-<?php comment_ID(); ?>" class=" clearfix">    

	            <?php echo get_avatar($comment,$size='32',$default='mm' ); ?>                                      
                <div class="comment-content">

                    <div class="comment-text">                      
                        
                        <p class='comment-meta-header'>

                            <cite class="fn"><?php echo get_comment_author_link() ?></cite>                     
                            <span class="comment-meta commentmetadata"><?php comment_date(get_option('date_format')); ?></span>

                        </p><!-- .comment-meta-header -->
                        
                        <?php if ($comment->comment_approved == '0') : ?><p class="moderated"><?php _e('Your comment is awaiting moderation.','brewery'); ?></p><?php endif; ?>

                        <div class="comment_content">

                        <?php comment_text() ?>

                        </div><!-- .comment_content -->

                        <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>

                    </div><!-- .comment-text-->    

                </div><!-- .comment-content -->

            </div><!-- .comment-<?php comment_ID(); ?> -->
            
        <?php
            break;
            case 'pingback'  :
            case 'trackback' :
        ?>
            <li <?php comment_class('clearfix'); ?> id="li-comment-<?php comment_ID() ?>">
            <div id="comment-<?php comment_ID(); ?>" class="clearfix">
                    <?php echo "<div class='author'><em>" . __('Trackback:','brewery') . "</em> ".get_comment_author_link()."</div>"; ?>
                    <?php echo strip_tags(substr(get_comment_text(),0, 110)) . "..."; ?>
                    <?php comment_author_url_link('', '<small>', '</small>'); ?>
             </div>
            <?php
            break;
        endswitch;
    }
    endif;

if ( ! function_exists( 'brewery_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 */
function brewery_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
<div class="row">

	<div class="large-12 columns">

	<nav class="navigation paging-navigation clearfix" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'brewery' ); ?></h1>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'brewery' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'brewery' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->

	</div><!-- .large-12 -->

</div><!-- .row -->
	<?php
}
endif;

if ( ! function_exists( 'brewery_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 */
function brewery_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
		<nav class="navigation post-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'brewery' ); ?></h1>
			<div class="nav-links">
				<?php
					previous_post_link( '<div class="nav-previous">%link</div>', _x( '<span class="meta-nav">Previous Post:</span>&nbsp;%title', 'Previous post link', 'brewery' ) );
					next_post_link(     '<div class="nav-next">%link</div>',     _x( '<span class="meta-nav">Next Post:</span>&nbsp;%title', 'Next post link', 'brewery' ) );
				?>
			</div><!-- .nav-links -->
		</nav><!-- .navigation -->
		
	<?php
}
endif;

if ( ! function_exists( 'brewery_post_meta' ) ) :
/**
 * Prints HTML with meta information for the current post cats and tags.
 */
function brewery_post_meta() { ?>

	<?php
		// Hide category and tag text for pages.
		if ( 'post' == get_post_type() ) {

			$categories_list = get_the_category_list( __( ', ', 'brewery' ) );
			if ( $categories_list && brewery_categorized_blog() ) {
				echo '<span class="entry-cats">';?>
				<?php _e( 'Categories: ', 'brewery' ); ?> <?php
				echo $categories_list;
				echo '</span>';
			}

			$tags_list = get_the_tag_list( '', __( ', ', 'brewery' ) );
			if ( $tags_list ) {
				echo '<span class="entry-tags">'; ?>
				<?php _e( 'Tagged: ', 'brewery' ); ?> <?php
				echo $tags_list;
				echo '</span>';
			}
		}
	?>

	<?php
		edit_post_link( __( 'Edit', 'brewery' ), '<span class="edit-link">', '</span>' );
	?>

<?php } // end brewery_post_meta
endif;

if ( ! function_exists( 'brewery_post_top_meta' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author
 */
function brewery_post_top_meta() { ?>

	<?php 

		echo get_avatar( get_the_author_meta( 'ID' ), 42 );
		_e('Written by ','brewery'); ?> 

		<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
			<?php the_author_meta( 'display_name' ); ?>
		</a>

		<?php _e('on ','brewery'); the_date(); ?>

<?php } // end brewery_post_top_meta
endif;

if ( ! function_exists( 'brewery_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function brewery_posted_on() {

	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		_x( 'Posted on %s', 'post date', 'brewery' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		_x( 'by %s', 'post author', 'brewery' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>';

}
endif;

if ( ! function_exists( 'brewery_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function brewery_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( __( ', ', 'brewery' ) );
		if ( $categories_list && brewery_categorized_blog() ) {
			printf( '<span class="cat-links">' . __( 'Posted in %1$s', 'brewery' ) . '</span>', $categories_list );
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', __( ', ', 'brewery' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . __( 'Tagged %1$s', 'brewery' ) . '</span>', $tags_list );
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( __( 'Leave a comment', 'brewery' ), __( '1 Comment', 'brewery' ), __( '% Comments', 'brewery' ) );
		echo '</span>';
	}

	edit_post_link( __( 'Edit', 'brewery' ), '<span class="edit-link">', '</span>' );
}
endif;

if ( ! function_exists( 'the_archive_title' ) ) :
/**
 * Shim for `the_archive_title()`.
 *
 * Display the archive title based on the queried object.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 *
 * @param string $before Optional. Content to prepend to the title. Default empty.
 * @param string $after  Optional. Content to append to the title. Default empty.
 */
function the_archive_title( $before = '', $after = '' ) {
	if ( is_category() ) {
		$title = sprintf( __( 'Category: %s', 'brewery' ), single_cat_title( '', false ) );
	} elseif ( is_tag() ) {
		$title = sprintf( __( 'Tag: %s', 'brewery' ), single_tag_title( '', false ) );
	} elseif ( is_author() ) {
		$title = sprintf( __( 'Author: %s', 'brewery' ), '<span class="vcard">' . get_the_author() . '</span>' );
	} elseif ( is_year() ) {
		$title = sprintf( __( 'Year: %s', 'brewery' ), get_the_date( _x( 'Y', 'yearly archives date format', 'brewery' ) ) );
	} elseif ( is_month() ) {
		$title = sprintf( __( 'Month: %s', 'brewery' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'brewery' ) ) );
	} elseif ( is_day() ) {
		$title = sprintf( __( 'Day: %s', 'brewery' ), get_the_date( _x( 'F j, Y', 'daily archives date format', 'brewery' ) ) );
	} elseif ( is_tax( 'post_format' ) ) {
		if ( is_tax( 'post_format', 'post-format-aside' ) ) {
			$title = _x( 'Asides', 'post format archive title', 'brewery' );
		} elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
			$title = _x( 'Galleries', 'post format archive title', 'brewery' );
		} elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
			$title = _x( 'Images', 'post format archive title', 'brewery' );
		} elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
			$title = _x( 'Videos', 'post format archive title', 'brewery' );
		} elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
			$title = _x( 'Quotes', 'post format archive title', 'brewery' );
		} elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
			$title = _x( 'Links', 'post format archive title', 'brewery' );
		} elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
			$title = _x( 'Statuses', 'post format archive title', 'brewery' );
		} elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
			$title = _x( 'Audio', 'post format archive title', 'brewery' );
		} elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
			$title = _x( 'Chats', 'post format archive title', 'brewery' );
		}
	} elseif ( is_post_type_archive() ) {
		$title = sprintf( __( 'Archives: %s', 'brewery' ), post_type_archive_title( '', false ) );
	} elseif ( is_tax() ) {
		$tax = get_taxonomy( get_queried_object()->taxonomy );
		/* translators: 1: Taxonomy singular name, 2: Current taxonomy term */
		$title = sprintf( __( '%1$s: %2$s', 'brewery' ), $tax->labels->singular_name, single_term_title( '', false ) );
	} else {
		$title = __( 'Archives', 'brewery' );
	}

	/**
	 * Filter the archive title.
	 *
	 * @param string $title Archive title to be displayed.
	 */
	$title = apply_filters( 'get_the_archive_title', $title );

	if ( ! empty( $title ) ) {
		echo $before . $title . $after;
	}
}
endif;

if ( ! function_exists( 'the_archive_description' ) ) :
/**
 * Shim for `the_archive_description()`.
 *
 * Display category, tag, or term description.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 *
 * @param string $before Optional. Content to prepend to the description. Default empty.
 * @param string $after  Optional. Content to append to the description. Default empty.
 */
function the_archive_description( $before = '', $after = '' ) {
	$description = apply_filters( 'get_the_archive_description', term_description() );

	if ( ! empty( $description ) ) {
		/**
		 * Filter the archive description.
		 *
		 * @see term_description()
		 *
		 * @param string $description Archive description to be displayed.
		 */
		echo $before . $description . $after;
	}
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function brewery_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'brewery_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'brewery_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so brewery_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so brewery_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in brewery_categorized_blog.
 */
function brewery_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'brewery_categories' );
}
add_action( 'edit_category', 'brewery_category_transient_flusher' );
add_action( 'save_post',     'brewery_category_transient_flusher' );
