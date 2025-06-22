
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="assets/head_icon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>Discography | Your favorite vinyls</title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Discography navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.php">Discography</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsDiscography" aria-controls="navbarsDiscography" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsDiscography">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
          <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] === '/home') ? 'active' : '' ?>" href="/home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/shop">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
        </ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<br>
								<h1>Shop</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">

		      		<!-- Start Column 1 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="assets/images/vinyls/ok_computer.jpg" class="img-fluid product-thumbnail">
							<h3 class="product-title">OK Computer</h3>
							<strong class="product-price">$30.00</strong>

							<form method="post" action="/addToCart">
            				<input type="hidden" name="product_id" value="1"> <!-- <- OVDE unosiš pravi ID proizvoda -->
            				<button type="submit" class="btn btn-outline-dark btn-sm mt-2">Add to Cart</button>
        					</form>

							<span class="icon-cross">
								<img src="assets/images/svg/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 1 -->
						
					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="assets/images/vinyls/the_forever_story.jpg" class="img-fluid product-thumbnail">
							<h3 class="product-title">The Forever Story</h3>
							<strong class="product-price">$35.00</strong>
							<form method="post" action="/addToCart">
            				<input type="hidden" name="product_id" value="2"> <!-- <- OVDE unosiš pravi ID proizvoda -->
            				<button type="submit" class="btn btn-outline-dark btn-sm mt-2">Add to Cart</button>
        					</form>
							<span class="icon-cross">
								<img src="assets/images/svg/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="assets/images/vinyls/thank_you_next.jpg" class="img-fluid product-thumbnail">
							<h3 class="product-title">Thank U, Next</h3>
							<strong class="product-price">$40.00</strong>
							<form method="post" action="/addToCart">
            				<input type="hidden" name="product_id" value="3"> <!-- <- OVDE unosiš pravi ID proizvoda -->
            				<button type="submit" class="btn btn-outline-dark btn-sm mt-2">Add to Cart</button>
        					</form>
							<span class="icon-cross">
								<img src="assets/images/svg/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="assets/images/vinyls/doors.jpg" class="img-fluid product-thumbnail">
							<h3 class="product-title">Doors</h3>
							<strong class="product-price">$30.00</strong>
							<form method="post" action="/addToCart">
            				<input type="hidden" name="product_id" value="4"> <!-- <- OVDE unosiš pravi ID proizvoda -->
            				<button type="submit" class="btn btn-outline-dark btn-sm mt-2">Add to Cart</button>
        					</form>
							<span class="icon-cross">
								<img src="assets/images/svg/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 4 -->


					<!-- Start Column 1 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="assets/images/vinyls/enterthewutang.jpg" class="img-fluid product-thumbnail">
							<h3 class="product-title">Enter The Wu-Tang (36 Chambers)</h3>
							<strong class="product-price">$35.00</strong>
							<form method="post" action="/addToCart">
            				<input type="hidden" name="product_id" value="5"> <!-- <- OVDE unosiš pravi ID proizvoda -->
            				<button type="submit" class="btn btn-outline-dark btn-sm mt-2">Add to Cart</button>
        					</form>
							<span class="icon-cross">
								<img src="assets/images/svg/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 1 -->
						
					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="assets/images/vinyls/cowboys_from_hell.jpg" class="img-fluid product-thumbnail">
							<h3 class="product-title">Cowboys From Hell</h3>
							<strong class="product-price">$30.00</strong>
							<form method="post" action="/addToCart">
            				<input type="hidden" name="product_id" value="6"> <!-- <- OVDE unosiš pravi ID proizvoda -->
            				<button type="submit" class="btn btn-outline-dark btn-sm mt-2">Add to Cart</button>
        					</form>
							<span class="icon-cross">
								<img src="assets/images/svg/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="assets/images/vinyls/call_me_if_you_get_lost.jpg" class="img-fluid product-thumbnail">
							<h3 class="product-title">Call Me If You Get Lost</h3>
							<strong class="product-price">$40.00</strong>
							<form method="post" action="/addToCart">
            				<input type="hidden" name="product_id" value="7"> <!-- <- OVDE unosiš pravi ID proizvoda -->
            				<button type="submit" class="btn btn-outline-dark btn-sm mt-2">Add to Cart</button>
        					</form>
							<span class="icon-cross">
								<img src="assets/images/svg/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="assets/images/vinyls/channel_orange.jpg" class="img-fluid product-thumbnail">
							<h3 class="product-title">Channel Orange</h3>
							<strong class="product-price">$35.00</strong>
							<form method="post" action="/addToCart">
            				<input type="hidden" name="product_id" value="8"> <!-- <- OVDE unosiš pravi ID proizvoda -->
            				<button type="submit" class="btn btn-outline-dark btn-sm mt-2">Add to Cart</button>
        					</form>
							<span class="icon-cross">
								<img src="assets/images/svg/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 4 -->
					<!-- Start Column 1 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="assets/images/vinyls/good_kid_maad_city.jpg" class="img-fluid product-thumbnail">
							<h3 class="product-title">Good Kid m.A.A.d. City</h3>
							<strong class="product-price">$40.00</strong>
							<form method="post" action="/addToCart">
            				<input type="hidden" name="product_id" value="9"> <!-- <- OVDE unosiš pravi ID proizvoda -->
            				<button type="submit" class="btn btn-outline-dark btn-sm mt-2">Add to Cart</button>
        					</form>
							<span class="icon-cross">
								<img src="assets/images/svg/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="assets/images/vinyls/2093.jpg" class="img-fluid product-thumbnail">
							<h3 class="product-title">2093</h3>
							<strong class="product-price">$50.00</strong>
							<form method="post" action="/addToCart">
            				<input type="hidden" name="product_id" value="10"> <!-- <- OVDE unosiš pravi ID proizvoda -->
            				<button type="submit" class="btn btn-outline-dark btn-sm mt-2">Add to Cart</button>
        					</form>
							<span class="icon-cross">
								<img src="assets/images/svg/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="assets/images/vinyls/because_the_internet.jpg" class="img-fluid product-thumbnail">
							<h3 class="product-title">Because The Internet </h3>
							<strong class="product-price">$40.00</strong>
							<form method="post" action="/addToCart">
            				<input type="hidden" name="product_id" value="11"> <!-- <- OVDE unosiš pravi ID proizvoda -->
            				<button type="submit" class="btn btn-outline-dark btn-sm mt-2">Add to Cart</button>
        					</form>
							<span class="icon-cross">
								<img src="assets/images/svg/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 3 -->

		      	</div>
		    </div>
		</div>


		  <div class="row">
					<div class="col-lg-8">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center"><span class="me-1"><img src="/assets/images/svg/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>
							<form action="#" class="row g-3">
								<div class="col-auto">
									<input type="text" class="form-control" placeholder="Enter your name">
								</div>
								<div class="col-auto">
									<input type="email" class="form-control" placeholder="Enter your email">
								</div>
								<div class="col-auto">
									<button class="btn btn-primary">
										<span class="fa fa-paper-plane"></span>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
                <br>
                <br>
		<footer class="footer-section">
			<div class="container relative">

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Discography</a></div>
						<p class="mb-4">Welcome to Discography – your premier destination for vinyl enthusiasts. Explore our curated collection, enjoy fast and free shipping, hassle-free returns, and 24/7 support. Elevate your music experience with us today.</p>

					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">About us</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact us</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Support</a></li>
									<li><a href="#">Knowledge base</a></li>
									<li><a href="#">Live chat</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Our team</a></li>
									<li><a href="#">Leadership</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">The Forever Story</a></li>
									<li><a href="#">OK Computer</a></li>
									<li><a href="#">Thank U, Next</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. 
            </p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>

					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->	


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
