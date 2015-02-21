<?php include("parts/doctype.php"); ?>
<body>
	
	<header>
		<?php include("parts/header.php"); ?>

		<?php include("parts/nav.php"); ?>
	</header>

	<div class="contact-box">
		<span>
			<?php
				$first_name = $_POST[ 'first_name' ];
				$last_name = $_POST[ 'last_name' ];
				$email = $_POST[ 'email' ];
				$film = $_POST[ 'film' ];
				$message = $_POST[ 'message' ];

				$to = 'j.c.searson@gmail.com';
				$subject = 'New Submission - Contact Form - MovieWake';;

				/* If e-mail is not valid show error message */
				if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
				    show_error("E-mail address not valid");
				}

				mail ($to, $subject, "Film Suggestion:  " . $film, "Message sent on " .  $day . " at " . $time, $message, "From: " . $first_name . ' ' . $last_name);
					
				$thanks = "Thank you for your message $first_name, I will be sure to get back to you as soon as possible!";
				$thanks .= "<br><br>";			
				echo $thanks;
			?>
		</span>

		<span class="signature">
			<?php

				echo "~ the MovieWake Team";
			?>
		</span>
	</div>

<?php include("parts/footer.php"); ?>