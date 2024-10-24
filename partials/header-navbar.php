<noscript>
	<div class="alert alert-danger">
		<span><strong>For full functionality of this site it is necessary to enable JavaScript. </strong> Here are the
			<a href="http://www.enable-javascript.com/" class="alert-link" target="_blank"> instructions how to enable
				JavaScript in your web browser</a>.</span>
	</div>
</noscript>

<!-- function class active on mainmenu -->
<?php
function set_active_menu($parameter = '')
{
	$class_active = '';
	$class_name = 'active';
	if (!empty($_GET['pages'])) {
		if (is_array($parameter)) {
			if (in_array($_GET['pages'], $parameter)) {
				$class_active = $class_name;
			}
		} else {
			if ($_GET['pages'] == $parameter) {
				$class_active = $class_name;
			}
		}
	}
	return $class_active;
}
?>
<?php if (in_array($url, array('home')) ){ ?>

	<header id="headertop">
		<nav class="navbar navbar-expand-lg fixed-top shadow">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php?pages=home">
					<img src="./themes/default/images/content/logo.png" alt="" />
				</a>
			</div>
		</nav>
	</header>

<?php } else if (in_array($url, array( 'master-variant-accordion', 'master-variant-card', 'master-variant-slider', 'master-variant-tabs', 'master-variant-card-slider', 'master-variant-card-article', 'master-variant-show-more', 'master-variant-banner-cta'))) { ?>

<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button data-bs-button-init class="navbar-toggler px-0" type="button" data-bs-collapse-init
      data-bs-target="#navbarExample1" aria-controls="navbarExample1" aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarExample1">
      <!-- Left links -->
      <ul class="navbar-nav me-auto ps-lg-0" style="padding-left: 0.15rem">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <!-- Navbar dropdown -->
        <li class="nav-item dropdown position-static">
          <a data-bs-dropdown-init class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Mega menu
          </a>
          <!-- Dropdown menu -->
          <div class="dropdown-menu w-100 mt-0" aria-labelledby="navbarDropdown" style="
                          border-top-left-radius: 0;
                          border-top-right-radius: 0;
                        ">
            <div class="container" id="list-variant">
              <div class="row my-4">
                <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                  <div class="list-group list-group-flush">
                    <a href="#variant-1" class="list-group-item list-group-item-action">Variant 1 (card)</a>
                    <a href="#variant-2" class="list-group-item list-group-item-action">Variant 2 (card)</a>
                    <a href="#variant-3" class="list-group-item list-group-item-action">Variant 3 (card)</a>
                    <a href="#variant-4" class="list-group-item list-group-item-action">Variant 4 (card)</a>
                    <a href="#variant-5" class="list-group-item list-group-item-action">Variant 5 (card)</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                  <div class="list-group list-group-flush">
				  	<a href="#variant-6" class="list-group-item list-group-item-action">Variant 6 (card)</a>
                    <a href="#variant-7" class="list-group-item list-group-item-action">Variant 7 (card)</a>
                    <a href="#variant-8" class="list-group-item list-group-item-action">Variant 8 (card)</a>
                    <a href="#variant-9" class="list-group-item list-group-item-action">Variant 9 (hero)</a>
                    <a href="#variant-10" class="list-group-item list-group-item-action">Variant 10 (hero)</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                  <div class="list-group list-group-flush">
				  	<a href="#variant-11" class="list-group-item list-group-item-action">Variant 11 (banner)</a>
				  	<a href="#variant-12" class="list-group-item list-group-item-action">Variant 12 (banner)</a>
				  	<a href="#variant-13" class="list-group-item list-group-item-action">Variant 13 (banner)</a>
				  	<a href="#variant-14" class="list-group-item list-group-item-action">Variant 14 (banner)</a>
				  	<a href="#variant-15" class="list-group-item list-group-item-action">Variant 15 (galeri)</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3">
                  <div class="list-group list-group-flush">
					<a href="#variant-16" class="list-group-item list-group-item-action">Variant 16 (galeri)</a>
					<a href="#variant-17" class="list-group-item list-group-item-action">Variant 17 (galeri)</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>

	  <!-- Right elements -->
	  <marquee direction="left" scrollamount="10">
		CAPE YA SURUH SIAPA IKUT MSIB :]
	  </marquee>

      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>

<?php } else if (in_array($url, array('property-sale'))) { ?>

		<header id="headertop">
			<nav class="navbar navbar-expand-lg fixed-top shadow">
				<div class="container-fluid">
					<a class="navbar-brand" href="index.php?pages=home">
						<img src="./themes/default/images/content/logo.png" alt="" />
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NSV2"
						aria-controls="NSV2" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-md-center" id="NSV2">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#">MENU</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>

<?php } else if (in_array($url, array('property-catalog'))) { ?>

			<header id="headertop">
				<nav class="navbar navbar-expand-lg fixed-top shadow">
					<div class="container-fluid">
						<a class="navbar-brand" href="index.php?pages=home">
							<img src="./themes/default/images/content/logo.png" alt="" />
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NSV3"
							aria-controls="NSV3" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-md-center" id="NSV3">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="#">MENU</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</header>

<?php } else if (in_array($url, array('property-inquiry'))) { ?>

				<header id="headertop">
					<nav class="navbar navbar-expand-lg fixed-top shadow">
						<div class="container-fluid">
							<a class="navbar-brand" href="index.php?pages=home">
								<img src="./themes/default/images/content/logo.png" alt="" />
							</a>
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NSV4"
								aria-controls="NSV4" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse justify-content-md-center" id="NSV4">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link active" aria-current="page" href="#">MENU</a>
									</li>
								</ul>
							</div>
						</div>
					</nav>
				</header>

<?php } else if (in_array($url, array('textile-sale'))) { ?>

					<header id="headertop">
						<nav class="navbar navbar-expand-lg fixed-top shadow">
							<div class="container-fluid">
								<a class="navbar-brand" href="index.php?pages=home">
									<img src="./themes/default/images/content/logo.png" alt="" />
								</a>
								<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NSV3"
									aria-controls="NSV3" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse justify-content-md-center" id="NSV3">
									<ul class="navbar-nav">
										<li class="nav-item">
											<a class="nav-link active" aria-current="page" href="#">MENU</a>
										</li>
									</ul>
								</div>
							</div>
						</nav>
					</header>

<?php } else if (in_array($url, array('textile-catalog'))) { ?>

						<header id="headertop">
							<nav class="navbar navbar-expand-lg fixed-top shadow">
								<div class="container-fluid">
									<a class="navbar-brand" href="index.php?pages=home">
										<img src="./themes/default/images/content/logo.png" alt="" />
									</a>
									<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NSV3"
										aria-controls="NSV3" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
									</button>
									<div class="collapse navbar-collapse justify-content-md-center" id="NSV3">
										<ul class="navbar-nav">
											<li class="nav-item">
												<a class="nav-link active" aria-current="page" href="#">MENU</a>
											</li>
										</ul>
									</div>
								</div>
							</nav>
						</header>

<?php } else if (in_array($url, array('textile-inquiry'))) { ?>

							<header id="headertop">
								<nav class="navbar navbar-expand-lg fixed-top shadow">
									<div class="container-fluid">
										<a class="navbar-brand" href="index.php?pages=home">
											<img src="./themes/default/images/content/logo.png" alt="" />
										</a>
										<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NSV3"
											aria-controls="NSV3" aria-expanded="false" aria-label="Toggle navigation">
											<span class="navbar-toggler-icon"></span>
										</button>
										<div class="collapse navbar-collapse justify-content-md-center" id="NSV3">
											<ul class="navbar-nav">
												<li class="nav-item">
													<a class="nav-link active" aria-current="page" href="#">MENU</a>
												</li>
											</ul>
										</div>
									</div>
								</nav>
							</header>

<?php } else if (in_array($url, array('automotive-sale'))) { ?>

								<header id="headertop">
									<nav class="navbar navbar-expand-lg fixed-top shadow">
										<div class="container-fluid">
											<a class="navbar-brand" href="index.php?pages=home">
												<img src="./themes/default/images/content/logo.png" alt="" />
											</a>
											<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NSV4"
												aria-controls="NSV4" aria-expanded="false" aria-label="Toggle navigation">
												<span class="navbar-toggler-icon"></span>
											</button>
											<div class="collapse navbar-collapse justify-content-md-center" id="NSV4">
												<ul class="navbar-nav">
													<li class="nav-item">
														<a class="nav-link active" aria-current="page" href="#">MENU</a>
													</li>
												</ul>
											</div>
										</div>
									</nav>
								</header>

<?php } else if (in_array($url, array('automotive-catalog'))) { ?>

									<header id="headertop">
										<nav class="navbar navbar-expand-lg fixed-top shadow">
											<div class="container-fluid">
												<a class="navbar-brand" href="index.php?pages=home">
													<img src="./themes/default/images/content/logo.png" alt="" />
												</a>
												<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NSV4"
													aria-controls="NSV4" aria-expanded="false" aria-label="Toggle navigation">
													<span class="navbar-toggler-icon"></span>
												</button>
												<div class="collapse navbar-collapse justify-content-md-center" id="NSV4">
													<ul class="navbar-nav">
														<li class="nav-item">
															<a class="nav-link active" aria-current="page" href="#">MENU</a>
														</li>
													</ul>
												</div>
											</div>
										</nav>
									</header>

<?php } else if (in_array($url, array('automotive-inquiry'))) { ?>

										<header id="headertop">
											<nav class="navbar navbar-expand-lg fixed-top shadow">
												<div class="container-fluid">
													<a class="navbar-brand" href="index.php?pages=home">
														<img src="./themes/default/images/content/logo.png" alt="" />
													</a>
													<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NSV4"
														aria-controls="NSV4" aria-expanded="false" aria-label="Toggle navigation">
														<span class="navbar-toggler-icon"></span>
													</button>
													<div class="collapse navbar-collapse justify-content-md-center" id="NSV4">
														<ul class="navbar-nav">
															<li class="nav-item">
																<a class="nav-link active" aria-current="page" href="#">MENU</a>
															</li>
														</ul>
													</div>
												</div>
											</nav>
										</header>

<?php } else { ?>

<?php } ?>