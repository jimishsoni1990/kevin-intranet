<?php
	$title    			= get_sub_field('title');
	$description    	= get_sub_field('description');
	$accordion_id		= wp_unique_id('accordion');
?>

<div class="accordion" id="accordionExample">

	<div class="accordion-item">
		<h2 class="accordion-header" id="headingThree">
			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $accordion_id; ?>" aria-expanded="false" aria-controls="<?php echo $accordion_id; ?>">
				<?php echo $title; ?>
			</button>
		</h2>
		<div class="accordion-collapse collapse" id="<?php echo $accordion_id; ?>" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
			<div class="accordion-body pt-0">
				<?php echo $description; ?>
			</div>
		</div>
	</div>

</div>
