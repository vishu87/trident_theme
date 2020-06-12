<?php /* Template Name: Home Page */ ?>

<?php get_header(); the_post(); ?>
<div class="main">
	<section class="banner">
		<div class="container">
			<h1 class="heading-primary">Learning Today, Leading Tomorrow</h1>
		</div>
	</section>
	<section class="features">
		<div class="container">
			<div class="row">
				<div class="col-md-4 mob-mb-20">
					<div class="features--block">
						<div class="icon">
							<i class="fa fa-book"></i>
						</div>
						<div class="info">
							<h3 class="heading-tritary">AHSEC Curriculum</h3>
							<p>
								Trident Academy follows the Assam Higher Secondary Education Council Curriculum.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 mob-mb-20">
					<div class="features--block">
						<div class="icon">
							<i class="fa fa-building"></i>
						</div>
						<div class="info">
							<h3 class="heading-tritary">
								Integrated Coaching</h3>
							<p>
								Coaching Classes for Engineering, Medical, Banking, University entrances, SSC, etc.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 mob-mb-20">
					<div class="features--block">
						<div class="icon">
							<i class="fa fa-file-text"></i>
						</div>
						<div class="info">
							<h3 class="heading-tritary">Individual Care</h3>
							<p>
								Every student should be inspired and challenged to reach their full potential.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container features--about">
			<div class="row">
				<div class="col-md-6">
					<div class="heading-primary t-pri mb-3">
						Trident Academy
					</div>
					<div>
						<p class="mb-3">
							We are a private, co-educational, senior secondary school serving higher secondary students in Arts, Science and Commerce, located in Rampur, Kamrup(R).
						</p>
						<p>
							Trident Academy believes in nurturing young students to the highest level of global leadership in all fields. Our education system embraces the fact that every student comes to the Trident Academy with his or her own hopes and aspirations. To meet these needs, we believe, it is important to encourage the pursuit of academic endeavour within a caring environment that promotes each student’s ability and learning style. We strive to provide the best learning environment for our students and ensure the overall development.
						</p>
						<div class="mt-3">
							<a href="<?php echo esc_url(home_url('/about-us')) ?>" class="btn btn-grey">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 mob-mt-20">
					<div class="image">
						<img src="<?php echo get_template_directory_uri() ?>/front-end/images/about-img.jpeg" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="homecourse">
		<div class="container">
			<div class="text-center">
				<div class="heading-primary t-pri mb-3">
					Enroll With Us & Develop Your Career
				</div>
				<p class="fs-20">Take challenge, get enrolled, develop a better career and serve the humanity. </p>
			</div>
			<div class="row mt-5">
				<div class="col-md-4 mob-mb-20">
					<div class="course">
						<div class="image">
							<img src="<?php echo get_template_directory_uri() ?>/front-end/images/f-3.png" >
						</div>
						<div>
							<a href="<?php echo esc_url(home_url('/our-courses')) ?>">
								<h2 class="heading-secondary">Higher Secondary Science</h2>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 mob-mb-20">
					<div class="course">
						<div class="image">
							<img src="<?php echo get_template_directory_uri() ?>/front-end/images/f-4.png" >
						</div>
						<div>
							<a href="<?php echo esc_url(home_url('/our-courses')) ?>">
								<h2 class="heading-secondary">Higher Secondary Commerce</h2>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="course">
						<div class="image">
							<img src="<?php echo get_template_directory_uri() ?>/front-end/images/f-5.png" >
						</div>
						<div>
							<a href="<?php echo esc_url(home_url('/our-courses')) ?>">
								<h2 class="heading-secondary">Higher Secondary Arts/Humanities</h2>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="homeservice">
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					<div class="heading-primary mb-3">We work hard to prepare every student for their professional life</div>
					<p class="fs-20 text-white">
						Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.
					</p>	
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>

