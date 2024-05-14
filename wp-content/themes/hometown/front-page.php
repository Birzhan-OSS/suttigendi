<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hometown
 */

get_header();
?>

	<main id="primary" class="site-main">

	<section class="container-fluid pb-5">
	<div id="carouselExampleDark" class="carousel carousel-dark slide overflow-hidden rounded ">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item active" data-bs-interval="10000">
			<img src="<?php echo get_template_directory_uri();?>/img/1.png" class="d-block w-100" alt="...">
			<!--<div class="carousel-caption d-none d-md-block">
			<h5>First slide label</h5>
			<p>Some representative placeholder content for the first slide.</p>
			</div>-->
		</div>
		<div class="carousel-item" data-bs-interval="2000">
			<img src="<?php echo get_template_directory_uri();?>/img/2.png" class="d-block w-100" alt="...">
			<!--<div class="carousel-caption d-none d-md-block">
			<h5>Second slide label</h5>
			<p>Some representative placeholder content for the second slide.</p>
			</div>-->
		</div>
		<div class="carousel-item">
			<img src="<?php echo get_template_directory_uri();?>/img/3.png" class="d-block w-100" alt="...">
			<!--<div class="carousel-caption d-none d-md-block">
			<h5>Third slide label</h5>
			<p>Some representative placeholder content for the third slide.</p>
			</div>-->
		</div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
	</div>
	</section>
	<!-- second section -->
	<section class="container-fluid pt-5">
		<h1>ҰОС ардагерлерін іздеу: undefined батырдың тағдыры туралы біліңіз</h1>
	</section>
	<!-- section three -->
	<section class="container-fluid pt-5 ">
	<h1>Соғыс ардагерлерінің галереясы</h1>
	</section>
	<!-- second section -->
	<section class="container-fluid pt-5">
		<h1>«Батырларға Тағзым» дерекқоры туралы</h1>
	</section>
	<!-- section three -->
	<section class="container-fluid pt-5 ">
	<h1>Кері байланыс</h1>
	</section>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
