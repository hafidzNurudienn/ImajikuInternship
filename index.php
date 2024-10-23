<!DOCTYPE html>
<html lang="en-US">

	<?php
	if (!empty($_GET['pages'])){
		$url = $_GET['pages'];
	}else{
		$url = 'home';
	}

	$pages_path 	= "pages/";
	$pages      	= '00-404.php';
	
	$page_current 	= $url.'.php';
	if (file_exists("{$pages_path}{$page_current}")) {
		$pages = $page_current;
	}
	?>

<head>
	<?php include 'partials/meta.php'; ?>
	<?php include 'partials/register-css.php'; ?>
</head>
<body>
	<?php if (in_array($url, array('00-404')) || $pages=='00-404.php' ) { ?>
		<div class="wrapper">
			<?php include 'partials/preload.php'; ?>
			<div class="layout-page-full">
				<?php
				include "{$pages_path}{$pages}";
				?>
			</div>
		</div>
	<?php } else { ?>
		<div class="wrapper">
			<?php include 'partials/preload.php'; ?>
			<?php include 'partials/header-navbar.php'; ?>
			<div class="layout-page">
				<?php
				include "{$pages_path}{$pages}";
				?>
			</div>
			<?php include 'partials/footer.php'; ?>
			<a class="navtotop" id="backtotop" title="Go to top"><i class="fas fa-chevron-up"></i></a>
		</div>
	<?php } ?>
	<?php include 'partials/register-js.php'; ?>
	<script>
		<?php $title = $title_current.' | '.$namesite; ?>
		document.title = '<?php echo (!empty($title)) ? $title : 'Unknown Page'; ?>';
	</script>
</body>
</html>