<?php
function acf_builder(){
	$section_width = get_sub_field('style_width');
	$section_transparent_background = get_sub_field('style_transparent_background');
	$section_extend_to_edges = get_sub_field('style_extend_to_edges');
	?>

	<div class="mt-5">
		<div class="row g-3">
			<?php
				while( have_rows('builder') ): the_row();

					acf_builder_content();

				endwhile;
			?>
		</div>
	</div>

	<?php
}

function acf_builder_content(){
	$heading = get_sub_field('header_section_heading');
	$heading_link = get_sub_field('header_section_heading_link');
	$description = get_sub_field('header_section_description');
	$section_icon = get_sub_field('header_section_icon');

	$section_width = get_sub_field('style_width');
	$section_transparent_background = get_sub_field('style_transparent_background');
	$section_extend_to_edges = get_sub_field('style_extend_to_edges');

	$card_classes = '';
	$background = 'bg-white';

	if( $section_transparent_background ){
		$background = 'bg-transparent';
		$card_classes = 'bg-transparent border-0';
	}

	if( $section_extend_to_edges ){
		$card_classes = 'bg-transparent border-0';
	}
	?>
		<div class="col-12 col-xl-<?php echo $section_width; ?>">
			<?php if( $section_extend_to_edges ){ ?>
				<div class="mx-n4 px-4 mx-lg-n6 px-lg-3 py-3 border-top border-bottom border-300 <?php echo $background; ?>">
			<?php } ?>

			<div class="card h-100 <?php echo $card_classes; ?>">
				
				<?php if( $heading != '' ){ ?>
				<div class="card-header border-bottom-0 pb-0">
					<div class="row justify-content-between align-items-center mb-4">
						<div class="col-auto">
							<div id="<?php echo $heading_link; ?>"></div>
							<h3 class="text-1100 card-title"><?php echo $section_icon; ?><?php echo $heading; ?></h3>
							<p class="mb-0 text-700"><?php echo $description; ?></p>
						</div>
						<!-- <div class="col-auto w-100 w-md-auto">
							<div class="row align-items-center g-0 justify-content-between">
								<div class="col-12 col-sm-auto">
									<div class="search-box w-100 mb-2 mb-sm-0" style="max-width:30rem;">
										<form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search tasks" aria-label="Search">
											<span class="fas fa-search search-box-icon"></span>
										</form>
									</div>
								</div>
								<div class="col-auto d-flex">
									<button class="btn btn-link p-0 ms-3 fs--1 text-primary fw-bold text-decoration-none"><span class="fas fa-sort me-1 fw-extra-bold fs--2"></span>Sorting</button>
								</div>
							</div>
						</div> -->
					</div>
				</div><!-- .card-header -->
				<?php } ?>

				<div class="card-body py-0 scrollbar">
					<?php
						if( have_rows('section_data_content') ):
						
						    while( have_rows('section_data_content') ) : the_row();
						
						        $layout_name = get_row_layout();
								get_template_part( "inc/widgets/$layout_name");
						
						    endwhile;
						
						else :
						    // Do something...
						endif;
					?>
				</div>

			</div><!-- .card -->
			
			<?php if( $section_extend_to_edges ){ ?>
				</div>
			<?php } ?>
		</div><!-- card-wrapper -->
	<?php
}