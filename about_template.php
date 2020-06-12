<?php /* Template Name: About Page */ ?>

<?php get_header(); the_post(); ?>
<div class="main">
	<section class="banner">
		<div class="container">
			<h1 class="heading-primary">
				<?php the_title(); ?>
			</h1>
		</div>
	</section>
	<section class="features">
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
	<section class="philosophy-section" >
		<div class="container">
			<div class="heading-primary mb-3 text-center">
				Our Philosophy
			</div>
			<div class="info text-center">
				<p class="">
					Our region is in immense need of more educational institutes to cater to the diverse need of the student community. There are numerous talented students with immense scholarly potential who have to travel to nearby cities away from their homes to fulfill their academic ambitions. Unavailability of academic institutions in the area makes it difficult for them to achieve their academic goals. Driven with a philanthropic vision, and keeping in mind the needs of the student community, we believe in bringing the academic institutes closer to their homes in Rampur. The founders of Trident Academy strongly believe in harnessing the power of knowledge by providing support in both academics and co-curricular activities, while contributing to the holistic development of our student. We believe every student should be inspired and challenged to reach their full potential. In this vein, the Junior College will cater to the needs of the students in all the three streams of study, i.e., Arts, Science and Commerce.
				</p>
			</div>
		</div>
	</section>
	<section class="mission features">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 mob-mb-20">
					<div class="features--block">
						<div class="icon">
							<i class="fa fa-book"></i>
						</div>
						<div class="info">
							<h3 class="heading-tritary mb-2 ">Our Mission</h3>
							<p>
								Our mission is to develop young students with active and creative minds, with a sense of understanding and compassion for others, and the courage to act on their beliefs, and to make them prepared to be better professionals. We stress the total development of each student: spiritual, moral, intellectual, social, emotional, and physical. We will also lead in generating practical and theoretical knowledge that enables people to better understand our world and improve conditions for local and global communities.
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
							<h3 class="heading-tritary mb-2">
								Our Vision
							</h3>
							<p>
								At Trident Academy, we are committed to develop the intellect of the students, enhance their personality and hone their skills to empower them to become good leaders and top-notch professionals in the future. We understand that life demands different skills for different roles. Hence, here, we rely on vibrant modes of instruction that would help the new generation students to cope with the ever changing facade of pluralistic, and technology driven information in this global environment.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="features--block">
						<div class="icon">
							<i class="fa fa-file-text"></i>
						</div>
						<div class="info">
							<h3 class="heading-tritary mb-2">Our Values</h3>
							<p>
								People: Success, diversity Learning: Discovery, innovation, scholarship Partnerships: Regional, entrepreneurial, global Relationships: Collegial, professional, ethical Sustainability: Social justice, economic opportunity, environmental protection Stewardship: Fiscal, intellectual.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="philosophy-section" style="border-bottom:1px solid rgba(255,255,255,0.2);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="heading-primary mb-3 text-center">
						Learning Today, Leading Tomorrow
					</div>
					<div class="info text-center">
						<p class="">
							The Management of Trident School is dedicated towards ensuring that the curriculum, teaching methods and the infrastructure are upgraded and are kept up to date, to keep pace with the rapid changes taking place in the education field.
						</p>
						<div class="mt-5">
							<a href="<?php echo esc_url(home_url('/our-courses')) ?>" class="btn btn-white">
								Know more about our courses
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>
<?php get_footer(); ?>

