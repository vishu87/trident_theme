<?php /* Template Name: Course Page */ ?>

<?php get_header(); the_post(); ?>

<?php
	
	$posts = new WP_Query(array(
		"post_type" => "course",
		'order' => 'DESC',
	));
?>
<div class="main">
	<section class="banner">
		<div class="container">
			<h1 class="heading-primary">
				<?php the_title(); ?>
			</h1>
		</div>
	</section>
	<section class="about-course">
		<div class="container">
			<p>
				The gradual process of the ascent of a human being on the path towards a career begins right at the moment when they begin their education at the age of four. During this gradual process, all students come face to face with the choice that determines what career path they would walk on. They come face to face with the choice regarding what direction their career will take.<br>
 				This moment of choosing, for students in India, comes after the Class 10 examinations. This is the golden moment of reckoning when a student has to choose between the three streams in which they would further pursue a career – Science, Commerce or Arts. Hence, to build a good career and live a prosperous life, one must be well planned and prepared at this juncture.
			</p>
		</div>
	</section>
	<!-- <section class="courses">
		<div class="container">
			<?php while ($posts->have_posts()): $posts->the_post(); ?>
				<div class="row course">
					<div class="col-md-6">
						<h2 class="heading-secondary mb-3">
							<?php the_title(); ?>
						</h2>
						<div>
							<?php the_content(); ?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="image">
							<?php the_post_thumbnail(); ?>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</section> -->
	<section class="courses">
		<div class="container">
			<div class="course">
				<div class="row">
					<div class="col-md-6">
						<h2 class="heading-secondary mb-3">
							Higher Secondary-Science
						</h2>
						<div>
							<p>
								Science can be defined as a systematic study and investigation of natural phenomena and occurrences by way of observation, theoretical explanation as well as experimentation. Science is a vast field and concerns almost everything that our eyes can see or cannot see. Everything in the universe can be studied under the field of science. Talking at a basic educational level, science can be divided into three broad subjects – Physics, Chemistry and Biology. The Science stream, thereby, provides students with highly relevant skills that are applicable to almost any workplace. They offer a flexible foundation enabling students to attain highly respected professions and well paid jobs and guarantee them a secure future.
							</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="image">
							<img src="<?php echo get_template_directory_uri() ?>/front-end/images/course1.jpg" class="img-fluid">
						</div>
					</div>
				</div>
			</div>	
			<div class="course">
				<div class="row">
					
					<div class="col-md-6">
						<div class="image">
							<img src="<?php echo get_template_directory_uri() ?>/front-end/images/course2.jpg" class="img-fluid">
						</div>
					</div>
					<div class="col-md-6">
						<h2 class="heading-secondary mb-3">
							Higher Secondary-Commerce
						</h2>
						<div>
							<p>
								Commerce as a stream of education can be defined as a study of trade and business activities. The commerce stream after completion of Class 10th is quite a popular choice in India, as most students feel that the stream offers them a wide arena of career options to pursue after Class 12th, that would bring them both success as well as financial security easily. Commerce stream opens doors that lead to professional courses, which acts like foundations! The most respectable career options in this stream are Chartered Accountant and MBA position holders.
							</p>
						</div>
					</div>
				</div>	
			</div>
			<div class="course">
				<div class="row">	
					<div class="col-md-6">
						<h2 class="heading-secondary mb-3">
							Higher Secondary - Arts
						</h2>
						<div>
							<p>
								Humanities or Arts as the stream is popularly known, offers students a host of opportunities in various fields like mass communication, counseling, and teaching. Studying Arts after 10th might be the right choice for you if you’re passionate about communication, knowledge about people, and ideas, and creativity. Arts nurture open-mindedness and flexibility, and utilizes methodologies that are usually analytical, critical or speculative.
							</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="image">
							<img src="<?php echo get_template_directory_uri() ?>/front-end/images/course3.png" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="about-course">
		<div class="container">
			<p class="fs-20">
				As the world changes, so must Schools. The Management of Trident School is dedicated towards ensuring that the curriculum, teaching methods and the infrastructure are upgraded and are kept up to date, to keep pace with the rapid changes taking place in the education field.
			</p>
		</div>
	</section>
</div>
<?php get_footer(); ?>

