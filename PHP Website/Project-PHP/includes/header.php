<?php
	$websiteName = "Janusz Zalewski";
	include('includes/arrays.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Janusz Zalewski</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>


	<nav id="navigation" class="navbar navbar-expand-lg">
		<a class="navbar-brand" href="javascript:void(0)">Janusz Zalewski</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						PERSONAL
					</a>
					<div id="dropdown-items" class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a id="item" class="dropdown-item" href="biography.php">Biography</a>
						<a id="item" class="dropdown-item" href="family.php">Family</a>
						<a id="item" class="dropdown-item" href="education.php">Education</a>
						<a id="item" class="dropdown-item" href="hometown.php">Hometown</a>
					</div>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							PROFESSIONAL
						</a>
						<div id="dropdown-items" class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a id="item" class="dropdown-item" href="experience.php">Experience</a>
							<a id="item" class="dropdown-item" href="publications.php">Publications</a>
						</div>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								LITERATURE
							</a>
							<div id="dropdown-items" class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a id="item" class="dropdown-item" href="beatGeneration.php">The Beat Generation</a>
								<a id="item" class="dropdown-item" href="writers.php">Polish-American Writers</a>
							</div>

							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									CULTURAL
								</a>
								<div id="dropdown-items" class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a id="item" class="dropdown-item" href="music.php">Music</a>
									<a id="item" class="dropdown-item" href="theatre.php">Theater</a>
								</div>

								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										REVIEWS
									</a>
									<div id="dropdown-items" class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a id="item" class="dropdown-item" href="bookreviews.php">Books</a>
										<a id="item" class="dropdown-item" href="artreviews.php">Art</a>
									</div>

									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											GALLERY
										</a>
										<div id="dropdown-items" class="dropdown-menu" aria-labelledby="navbarDropdown">
											<a id="item" class="dropdown-item" href="gallerytravel.php">Travel</a>
											<a id="item" class="dropdown-item" href="gallerypeople.php">People</a>
											<a id="item" class="dropdown-item" href="gallerycars.php">Cars</a> 
											<a id="item" class="dropdown-item" href="gallerybikers.php">Bikers</a> 
										</div>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Language
											</a>
											<div id="dropdown-items" class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a id="item" class="dropdown-item" href="index.php">English</a>
												<a id="item" class="dropdown-item" href="https://pl.wikipedia.org/wiki/Janusz_Zalewski_(informatyk)">Polish</a>
											</div>
										</li>
									</ul>
								</div>
							</nav>