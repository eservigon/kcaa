<?php
/**
 * Template Name: Home
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ): ?>
<section>
	<div class="two-thirds column intro">
		<h1>Kansas City Allergy and Asthma is the leading provider of allergy and asthma care and treatment in Kansas City since 1979.</h1>
	</div>
	<div class="one-third column" style="background: #EEE;">
		<h1>Kansas City Allergy and Asthma is the leading provider of allergy and asthma care and treatment in Kansas City since 1979.</h1>
	</div>
</section>

<?php endif; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>