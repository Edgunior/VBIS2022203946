<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="/assets/images/head_icon.png">

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
  <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" aria-label="Discography navigation bar">
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
            <h1>Contact Us<span class="d-block"></span></h1>
            <p class="mb-4">Experience the joy of owning music in its most tangible form. Discover your next sonic adventure with our CDs and vinyls.</p>
            <p><a href="/shop" class="btn btn-secondary me-2">Shop Now</a><a href="home" class="btn btn-white-outline">Explore</a></p>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="hero-img-wrap">
            <img src="/assets/images/snoop.png" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Hero Section -->

  <!-- Start Contact Form -->
  <div class="untree_co-section">
    <div class="container">
      <div class="block">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-8 pb-4">
            <div class="row mb-5">
              <div class="col-lg-4">
                <div class="service no-shadow align-items-center link horizontal d-flex active">
                  <div class="service-icon color-1 mb-4">
                    <i class="bi bi-geo-alt-fill"></i>
                  </div>
                  <div class="service-contents">
                    <p>123 Vinyl Avenue<br>Melodyville, CA 90210<br>United States</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="service no-shadow align-items-center link horizontal d-flex active">
                  <div class="service-icon color-1 mb-4">
                    <i class="bi bi-envelope-fill"></i>
                  </div>
                  <div class="service-contents">
                    <p>contact@discography.com</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="service no-shadow align-items-center link horizontal d-flex active">
                  <div class="service-icon color-1 mb-4">
                    <i class="bi bi-telephone-fill"></i>
                  </div>
                  <div class="service-contents">
                    <p>+1 (555) 123-4567</p>
                  </div>
                </div>
              </div>
            </div>

            <form>
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label class="text-black" for="fname">First name</label>
                    <input type="text" class="form-control" id="fname">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label class="text-black" for="lname">Last name</label>
                    <input type="text" class="form-control" id="lname">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="text-black" for="email">Email address</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="form-group mb-5">
                <label class="text-black" for="message">Message</label>
                <textarea class="form-control" id="message" cols="30" rows="5"></textarea>
              </div>
              <button type="submit" class="btn btn-primary-hover-outline">Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Form -->

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
