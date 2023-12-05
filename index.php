<!DOCTYPE HTML>
<!--
	Design by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Team1 - DevOps</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/assets/callum-and-root/css/main.css" />
		<noscript><link rel="stylesheet" href="/assets/callum-and-root/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Wrapper -->
					<div id="wrapper">

						<section class="panel banner">
							<div class="content color6">
								<h1 class="major">Welcome to Evolving Ltd!</h1>
								<p>Click on the buttons below to learn more about each member of Team1 at Evolving Ltd!</p>
								<ul class="actions">
									<a href="/callum/" class="button primary color2">Callum</a>
									<a href="/george/" class="button primary color2">George</a>
									<a href="/ed/" class="button primary color2">Ed</a>
									<a href="/olamide/" class="button primary color2">Olamide</a>
								</ul>
							</div>
						</section>
							


					</div>

			</div>

		<!-- Scripts -->
			<script src="/assets/callum-and-root/js/jquery.min.js"></script>
			<script src="/assets/callum-and-root/js/browser.min.js"></script>
			<script src="/assets/callum-and-root/js/breakpoints.min.js"></script>
			<script src="/assets/callum-and-root/js/main.js"></script>
			<?php
				// Your PHP variable
				$msgSent = $_GET["msgSent"]; // Replace this with your actual PHP variable

				// Output JavaScript code based on the PHP variable
				echo '<script>';
				echo 'document.addEventListener("DOMContentLoaded", function() {';
				echo '    var msgSent = "' . $msgSent . '";';
				echo '    if (msgSent === "yes") {';
				echo '        document.getElementById("form").classList.add("hidden");';
				echo '        document.getElementById("form-success").classList.remove("hidden");';
				echo '    }';
				echo '});';
				echo '</script>';
			?>

	</body>
</html>