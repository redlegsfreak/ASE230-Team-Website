<!-- http://localhost/ASE230-Team-Website/index.php -->

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Our amazing team</title>

	<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your name's resume">
<meta name="author" content="Your name">
<link rel="shortcut icon" href="favicon.ico">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

<!-- FontAwesome JS-->
<script defer src="assets/fontawesome/js/all.min.js"></script>

<!-- Theme CSS -->
<link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head>

<body>
	<article class="resume-wrapper text-center position-relative">
		<div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<h1 class="py-4 text-center">OUR AMAZING TEAM</h1>
			<?php
			// Sample member data
			$members = [
				["name" => "Josh Lohner", "age" => 22, "email" => "lohnerjosh@gmail.com"],
				["name" => "Amrutha Rao", "age" => 22, "email" => "roaa1@nku.edu"],
				["name" => "Doug Broughton", "age" => 22, "email" => "boughtond1@nku.edu"],
			];

			// Function to display member information as a card
			function displayMemberCard($member, $index)
			{
				// HTML template for the member card
				echo '<div class="member-card">';
				echo '<h2>Member #' . ($index + 1) . '</h2>';
				echo '<p>Name: ' . $member["name"] . '</p>';
				echo '<p>Age: ' . $member["age"] . '</p>';
				echo '<p>Email: ' . $member["email"] . '</p>';
				echo '<a href="detail.php?id=' . $index . '">Link to page</a>';
				echo '</div>';
			}

			// Loop through the members and display their cards
			foreach ($members as $index => $member) {
				displayMemberCard($member, $index);
			}
			?>

		</div>
	</article>


	<footer class="footer text-center pt-2 pb-5">
		<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
		<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Your names</small>
	</footer>



</body>

</html>