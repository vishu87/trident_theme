<?php /* Template Name: Contact Page */ ?>
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
		<div class="container">

			<div class="row">
				<div class="col-md-4 mob-mb-20">
					<div class="features--block">
						<div class="icon">
							<i class="fa fa-map-marker"></i>
						</div>
						<div class="info">
							<h3 class="heading-tritary">School Location</h3>
							<p>
								Hridayalaya, Opposite Rampur PHC Rampur, Kamrup (R)
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 mob-mb-20">
					<div class="features--block">
						<div class="icon">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
						</div>
						<div class="info">
							<h3 class="heading-tritary">
								Contact E-Mail</h3>
							<p>
								info@thetridentacademy.com
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="features--block">
						<div class="icon">
							<i class="fa fa-phone"></i>
						</div>
						<div class="info">
							<h3 class="heading-tritary">Contact Number</h3>
							<p>
								+91 757-801-1234
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="map">
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d458680.1944445199!2d91.47897!3d26.084584!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa0e22092a05d4d71!2sTrident%20Academy%2C%20Rampur!5e0!3m2!1sen!2sus!4v1591596812810!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</section>
</div>

<?php get_footer(); ?>

