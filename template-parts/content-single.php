<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<div class="pencilArtcile">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
		<?php endif; ?>
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	<p class="metastyle">
		Category : <?php the_category(', ') ?> | Posted : <?php the_time('l, F jS, Y') ?> at 
<?php the_time() ?></p>
	</header><!-- .entry-header -->

	<?php twentysixteen_excerpt(); ?>

	<?php twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(__( 'Read More', 'twentysixteen' ),get_the_title()));

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->
<hr class="PostLine">
	<footer class="entry-footer">

	<div class="row">
		<div class="col-sm-4">
	<p class="authorInfo"><?php echo get_avatar( get_the_author_meta( 'ID' ) , 32 ); ?> Posted By <?php the_author(); ?></p>	
		</div>
		<div class="col-sm-8" class="text-right">
			<ul class="socialIcons">
				<li>SHARE US</li>
				<li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" alt="Facebook"></a></li>
				<li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" alt="Twitter"></a></li>
				<li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/linkedin.png" alt="Linkedin"></a></li>
			</ul>
		</div>
	</div>

	
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
		</div>
