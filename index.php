<?php
/**
 * The main template file for BlankLite.
 *
 * @package BlankLite
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<main id="primary" class="site-main">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
					endif;
					?>
				</header>

				<div class="entry-content">
					<?php
					the_content();
					wp_link_pages();
					?>
				</div>
			</article>
			<?php
			if ( is_singular() && ( comments_open() || get_comments_number() ) ) :
				comments_template();
			endif;
		endwhile;

		the_posts_navigation();
	else :
		?>
		<p><?php esc_html_e( 'Nothing found.', 'blanklite' ); ?></p>
		<?php
		get_search_form();
	endif;
	?>
</main>

<?php
get_footer();
