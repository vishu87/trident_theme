<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<div class="main">
	<section class="page-content work-banner">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="text-center">
						<h3 class="page-heading-text"><?php the_title(); ?></h3>
					</div>
				</div>
			</div>
		</div>
		<div class="container description">
			<p>
				<?php the_content(); ?>
			</p>
		</div>
	</section>
	
</div>
<?php endwhile; ?>
<?php get_footer(); ?>