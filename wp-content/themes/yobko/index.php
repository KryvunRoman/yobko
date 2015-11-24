<?php get_header(); ?>
<?php $pwd = pwd(); ?>

<section class="container-fluid">
	<div class="row">

		<div id="sliders-box">
		
			<div id="slider-left" class="fullscreen-slider">
				<i class="arrow-left-1 slider-arrow-left fa fa-arrow-up slick-arrow slick-disabled" aria-disabled="true" style="display: block;"></i>
				<i class="arrow-right-1 slider-arrow-right fa fa-arrow-down slick-arrow slick-disabled" aria-disabled="true" style="display: block;"></i>

				<div id="carousel-left" class="single-item">
				<?php
					$array = array(1,2,3,4,5);

					// echo '<pre>';
					// print_r($array);

					shuffle($array);
					$left = $array;
					// print_r($left);
					// echo '</pre>';

					foreach ($left as $key => $val) {
						get_template_part('templates/left', "slide-$val" );
					}
				?>
				</div>
			</div>

			<div id="slider-right" class="fullscreen-slider">
				<i class="arrow-left-2 slider-arrow-left fa fa-arrow-up slick-arrow slick-disabled" aria-disabled="true" style="display: block;"></i>
				<i class="arrow-right-2 slider-arrow-right fa fa-arrow-down slick-arrow slick-disabled" aria-disabled="true" style="display: block;"></i>

				<div id="carousel-right" class="single-item">
				<?php
					
					function resort_array($right, $left){
						
						if($right[0] == $left[0]) {

							$new_right = $right;
							shuffle($new_right);
							resort_array($new_right, $left);

						} else {

							foreach ($right as $key => $val) {
								get_template_part('templates/right', "slide-$val" );
							}
						}
					}

					shuffle($array);
					$right = $array;
					
					resort_array($right, $left);
				?>

				</div>
			</div>

		</div>

	</div>
</section>

<?php get_footer(); ?>