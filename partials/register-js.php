<!-- jquery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- popper js -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>

<!-- framework bootstrap -->
<script type="text/javascript" src="themes/default/js/bootstrap/bootstrap.bundle.min.js"></script>

<!-- preloader -->
<script type="text/javascript">
	$(document).ready(function() {
		$('.preload-mjk').fadeOut(1200, function() {
			$(this).addClass('loading');
		});
	});
</script>

<!-- jquery extra -->
<script type="text/javascript" src="https://code.jquery.com/ui/1.14.0/jquery-ui.min.js" integrity="sha256-Fb0zP4jE3JHqu+IBB9YktLcSjI1Zc6J2b6gTjB0LpoM=" crossorigin="anonymous"></script>

<!-- jquery extra cookie-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<!-- jquery extra Time library-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>

<!-- jquery validation -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

<!-- equal height -->
<script type="text/javascript" src="themes/default/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>

<!-- AOS Animation -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/aos/3.0.0-beta.6/aos.js"></script>

<!-- swiperjs -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- basic js in local -->
<script type="text/javascript" src="themes/default/js/main.js"></script>

<?php if (in_array($url, array('home', 'master-variant-accordion', 'master-variant-card', 'master-variant-slider', 'master-variant-tabs', 'master-variant-card-slider', 'master-variant-show-more', 'master-variant-banner-cta'))) { ?>

	<script type="text/javascript" src="themes/default/js/variant/card-slider/card-slider-variant-1.js"></script>
	<script type="text/javascript" src="themes/default/js/variant/card-slider/card-slider-variant-2.js"></script>
	<script type="text/javascript" src="/themes/default/js/variant/slider-tab/slider-tab-variant-2.js"></script>
	<script type="text/javascript" src="themes/default/js/variant/show-more/show-more-variant-1.js"></script>
	<script type="text/javascript" src="themes/default/js/variant/show-more/show-more-variant-2.js"></script>
<?php } elseif (in_array($url, array('property-sale'))) { ?>

	<script type="text/javascript" src="themes/property-sale/js/main.js"></script>

<?php } elseif (in_array($url, array('property-catalog'))) { ?>

	<script type="text/javascript" src="themes/property-catalog/js/main.js"></script>
	<script type="text/javascript" src="themes/property-catalog/js/swiper-hero.js"></script>

<?php } elseif (in_array($url, array('property-inquiry'))) { ?>

	<script type="text/javascript" src="themes/property-inquiry/js/main.js"></script>
	<script type="text/javascript" src="themes/default/js/variant/card-slider/card-slider-variant-2.js"></script>

<?php } elseif (in_array($url, array('textile-sale'))) { ?>

	<script type="text/javascript" src="themes/textile-sale/js/main.js"></script>

<?php } elseif (in_array($url, array('textile-catalog'))) { ?>

	<script type="text/javascript" src="themes/textile-catalog/js/main.js"></script>

<?php } elseif (in_array($url, array('textile-inquiry'))) { ?>

	<script type="text/javascript" src="themes/textile-inquiry/js/main.js"></script>

<?php } elseif (in_array($url, array('automotive-sale'))) { ?>

	<script type="text/javascript" src="themes/automotive-sale/js/main.js"></script>

<?php } elseif (in_array($url, array('automotive-catalog'))) { ?>

	<script type="text/javascript" src="themes/automotive-catalog/js/main.js"></script>

<?php } elseif (in_array($url, array('automotive-inquiry'))) { ?>

	<script type="text/javascript" src="themes/automotive-inquiry/js/main.js"></script>

<?php } else { ?>

<?php } ?>