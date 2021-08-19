<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fittnes
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('article__main'); ?>>
	<header class="entry-header">
		<h1><?php the_title() ?></h1>
		<div class="article-thumbnail">
			<?php the_post_thumbnail() ?>
		</div>
		<span class="date"><?php the_date('d F Y - G:i') ?></span>
		<?php the_excerpt() ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content() ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
