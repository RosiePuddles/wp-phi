<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Leopard
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('lprd--post-item'); ?>>

	<div class="lprd--post-content-area">

		<?php
			the_title( '<h2 class="lprd--post-title entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>
        <div>
            <p>Posted by <?php echo lprd_posted_by(); ?>, <?php echo lprd_posted_on()?></p>
        </div>

		<div class="entry-content">
            <?php if (has_post_thumbnail()): ?>
                <div class="col-6 float-end py-2 px-2">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('full');?>
                    </a>
                </div>
            <?php endif;?>
			<?php
			printf("<p>%s</p> <a href=\"%s\" class=\"lprd--post-meta-wrap text-end\">Read more ...</a>",
                // the excerpt should be the first 2 paras hopefully please
                get_the_excerpt(),
                get_the_permalink()
            );

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'leopard' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>

	</div>
</article><!-- #post-<?php the_ID(); ?> -->
