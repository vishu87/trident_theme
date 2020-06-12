<?php /* Template Name: Enroll Page */ ?>	
	
<?php get_header(); the_post(); ?>
<?php
	if(isset($_GET["success"])){
		$flag_error = true;
		$message_final = "Your message has been successfully received by us. We will contact you shortly";
	} else {
		$flag_error = false;
	}

	if (isset($_POST['submission_hidden'])) {
		
		if($_POST['submission_hidden'] == 1 ) {
		    $nonce = $_POST['_wpnonce'];
		    if(wp_verify_nonce( $nonce, 'submit-singup')){
				$name=isset($_POST["name"])?esc_attr($_POST["name"]):'';
				$address=isset($_POST["address"])?esc_attr($_POST["address"]):'';
				$mobile=isset($_POST["mobile"])?esc_attr($_POST["mobile"]):'';
				$school=isset($_POST["school"])?esc_attr($_POST["school"]):'';
				$stream=isset($_POST["stream"])?esc_attr($_POST["stream"]):'';
				$marks ="";
				if ($stream == 'science') {
					$science_marks=isset($_POST["science_marks"])?esc_attr($_POST["science_marks"]):'';
					$maths_marks=isset($_POST["maths_marks"])?esc_attr($_POST["maths_marks"]):'';
					$english_marks=isset($_POST["english_marks"])?esc_attr($_POST["english_marks"]):'';
					$marks = "Science :".$science_marks."<br>"."Maths :".$maths_marks."<br>"."English :".$english_marks."<br>";
				}

				$percentage=isset($_POST["percentage"])?esc_attr($_POST["percentage"]):'';

				$father_name=isset($_POST["father_name"])?esc_attr($_POST["father_name"]):'';
				$occupation=isset($_POST["occupation"])?esc_attr($_POST["occupation"]):'';

				$parent_mobile=isset($_POST["parent_mobile"])?esc_attr($_POST["parent_mobile"]):'';
				


				$message = "Name: ".$name."<br>"."Address: ".$address."<br>"."Mobile: ".$mobile."<br>"."School :".$school."<br>"."Stream: ".$stream."<br>"."Percentage: ".$percentage."<br>"."Father Name: ".$father_name."<br>"."Occupation: ".$occupation."<br>"."Parent Mobile: ".$parent_mobile."<br>"."Marks :".$marks;

				require 'mailer/PHPMailerAutoload.php';

				$mail = new PHPMailer;

				$mail->IsSMTP();
				$mail->SMTPAuth   = true;
				$mail->SMTPSecure = "tls";
				$mail->Port       = 587;
				$mail->Host       = "smtp.gmail.com";
				$mail->Username   = "contact@avyay.co.in";
				$mail->Password   = "Vishu_1987";
				$mail->SetFrom('contact@avyay.co.in', 'Trident Academy');
				$mail->IsHTML(true);
				$mail->addAddress("info@thetridentacademy.com");
				$mail->addAddress("vishu.iitd@gmail.com");
				$mail->Subject = "Trident Academy - Enroll Form";
				$mail->Body = $message;

	            $res = $mail->send();
	            if ($res) {
	            	wp_redirect(esc_url( home_url( '/enroll?success=#success_message') ));
	            }
			} else {
			    $message_final = "Invalid Request";
			}
		}
	}
?>
<div class="enroll">
	<div class="container">
		<div class="row justify-content-center">	
			<div class="col-md-10">
				<div class=""  id="success_message">
					<h1 class="heading-primary text-center t-pri mb-5">
						Enroll Now
					</h1>

					<?php if($flag_error): ?>
						<div class="alert alert-success alert-dismissible fade show">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							</button>
							<?php echo $message_final; ?>
						</div>
					<?php endif; ?>

					<form method="POST" action="" class="enroll-form">
						<div class="row">
							<div class="col-md-6 form-group">
								<label>Name</label>
								<input type="text" name="name" class="form-control" placeholder="Enter name" required>
							</div>
							<div class="col-md-6 form-group">
								<label>Mobile</label>
								<input type="text" name="mobile" class="form-control" placeholder="Enter mobile" required>
							</div>
						</div>
						
						<div class="form-group">
							<label>Address</label>
							<textarea name="address" placeholder="Address" class="form-control" required></textarea>
						</div>
						<div class="row">
							<div class="col-md-6 form-group">
								<label>School</label>
								<input type="text" name="school" class="form-control" placeholder="School" required>
							</div>
							<div class="col-md-6 form-group" >
								<label>Select Stream</label>
								<select class="form-control" name="stream" id="stream" required>
									<option value="">Select</option>
									<option value="arts">Arts</option>
									<option value="science">Science</option>
									<option value="commerce">Commerce </option>
								</select>
							</div>
						</div>
						
						<div id="subject" style="display: none;">
							<div class="form-group">
								<label>Subjectwise Marks</label>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4 form-group">
									<label class="min">Marks Scored in Science</label>
									<input type="text" name="science_marks" class="form-control" placeholder="Science Marks">
								</div>
								<div class="col-md-4 col-sm-4 form-group">
									<label class="min">Marks Scored in Maths</label>
									<input type="text" name="maths_marks" class="form-control" placeholder="Math Marks">
								</div>
								<div class="col-md-4 col-sm-4 form-group">
									<label class="min">Marks Scored in English</label>
									<input type="text" name="english_marks" class="form-control" placeholder="English Marks">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-group">
								<label>Percentage Scored</label>
								<input type="text" name="percentage" class="form-control" placeholder="Percentage Scored" required>
							</div>
							
							<div class="col-md-6 form-group">
								<label>Father's Name </label>
								<input type="text" name="father_name" class="form-control" placeholder="Enter father's name" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-group">
								<label>Occupation</label>
								<input type="text" name="occupation" class="form-control" placeholder="Occupation" required>
							</div>
							<div class="col-md-6 form-group">
								<label>Parent's Mobile Number</label>
								<input type="text" name="parent_mobile" class="form-control" placeholder="Enter Parent's Mobile Number" required>
							</div>
						</div>
						
						
						<?php wp_nonce_field( 'submit-singup','_wpnonce', true); ?>
						<input type="hidden" name="submission_hidden" value="1">

						<div class="mb-3" style="margin-bottom: 20px;">
							<button type="submit" class="btn-submit">Submit</button> 
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>
</div>
<?php get_footer(); ?>