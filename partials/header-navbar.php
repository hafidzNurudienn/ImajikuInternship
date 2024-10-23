<noscript>
	<div class="alert alert-danger">
		<span><strong>For full functionality of this site it is necessary to enable JavaScript. </strong> Here are the <a href="http://www.enable-javascript.com/" class="alert-link" target="_blank"> instructions how to enable JavaScript in your web browser</a>.</span>
	</div>
</noscript>

<!-- function class active on mainmenu -->
<?php
function set_active_menu($parameter = '') {
	$class_active 	= '';
	$class_name 	= 'active';
	if(!empty($_GET['pages'])) {
		if(is_array($parameter)) {
			if(in_array($_GET['pages'], $parameter)) { 
				$class_active = $class_name;
			}	
		} else {
			if($_GET['pages'] == $parameter) { 
				$class_active = $class_name;
			}	
		}
	}
	return $class_active;
}
?>

<?php if (in_array($url, array('home','master-variant-accordion','master-variant-card','master-variant-slider','master-variant-tabs', 'master-variant-card-slider', 'master-variant-card-article', 'master-variant-show-more', 'master-variant-banner-cta'))) { ?>

	<header id="headertop">
		<nav class="navbar navbar-expand-lg fixed-top shadow">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php?pages=home">
					<img src="./themes/default/images/content/logo.png" alt="" />
				</a>
			</div>
		</nav>
	</header>

<?php } else if (in_array($url, array('property-sale','property-catalog','property-inquiry'))) { ?>

	<header id="headertop">
		<nav class="navbar navbar-expand-lg fixed-top shadow">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php?pages=home">
					<img src="./themes/default/images/content/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NSV2" aria-controls="NSV2" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-md-center" id="NSV2">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">MENU 1</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">MENU 2</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">MENU 3</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">MENU 4</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

<?php } else if (in_array($url, array('textile-sale','textile-catalog','textile-inquiry'))) { ?>

	<header id="headertop">
		<nav class="navbar navbar-expand-lg fixed-top shadow">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php?pages=home">
					<img src="./themes/default/images/content/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NSV3" aria-controls="NSV3" aria-expanded="false" aria-label="Toggle navigation">
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
	
<?php } else if (in_array($url, array('automotive-sale','automotive-catalog','automotive-inquiry'))) { ?>
	
	<header id="headertop">
		<nav class="navbar navbar-expand-lg fixed-top shadow">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php?pages=home">
					<img src="./themes/default/images/content/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NSV4" aria-controls="NSV4" aria-expanded="false" aria-label="Toggle navigation">
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