<?php
/**
 * Template name: Home
 */

get_header();
?>

	<section class="block_section">
		<ul class="slider block_section">
			<li class="slider_item" style="background-image: url(<?php echo get_template_directory_uri()?>/dist/images/banner-1.jpg)">
				<div class="container">
    				<div class="slider_item__content">
    					<span class="label_bg">landing page template</span>
    					<h3>PERFECT Fitness SOLUTION</h3>
    					<h4>best choise for your site</h4>
    				</div>
				</div>
			</li>
			<li class="slider_item" style="background-image: url(<?php echo get_template_directory_uri()?>/dist/images/banner-2.jpg)">
				<div class="container">
    				<div class="slider_item__content">
    					<span class="label_bg">landing page template</span>
    					<h3>PERFECT Fitness SOLUTION</h3>
    					<h4>best choise for your site</h4>
    				</div>
				</div>
			</li>
			<li class="slider_item" style="background-image: url(<?php echo get_template_directory_uri()?>/dist/images/banner-3.jpg)">
				<div class="container">
    				<div class="slider_item__content">
    					<span class="label_bg">landing page template</span>
    					<h3>PERFECT Fitness SOLUTION</h3>
    					<h4>best choise for your site</h4>
    				</div>
				</div>
			</li>
		</ul>
		<div class="slider_nav">
			<div class="container">
    			<button class="prev" id="prev"></button>
    			<button class="next" id="next"></button>
			</div>
		</div>
	</section>
	<section class="block_section trainers_section">
		<div class="container">
			<div class="main_title">
				<h4>SUPERB TRAINERS</h4>
			</div>
			<div class="trainers_wrapper block_section">
				<div class="row">
					<?php 
						$args = array(
							'post_type' => 'post',
							'post_per_page' => 4,
							'cat' => 3
						);
						$trainer_query = new WP_Query($args);
						while ( $trainer_query->have_posts()): $trainer_query->the_post(); ?>
						<div class="column-3 column-mob-12">
							<div class="box">
								<a href="<?php the_permalink() ?>">
									<div class="box__thumb">
										<?php the_post_thumbnail() ?>
									</div>
									<div class="box__content">
										<h4><?php the_title(); ?></h4>
										<span><?php echo get_the_excerpt() ?></span>
										<p><?php echo limit(wp_strip_all_tags(get_the_content()),208) ?></p>
									</div>
								</a>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
