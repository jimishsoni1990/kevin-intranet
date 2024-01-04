<header class="entry-header alignwide">
	<!-- page title bar -->
	<div class="row gy-3 mb-6 justify-content-between">
		<div class="col-md-9 col-auto">
			<?php intranet_page_title(); ?>
			<?php intranet_page_description(); ?>
		</div>
		<div class="col-md-3 col-auto">
			<?php if( is_front_page() ){ ?>
				<div class="flatpickr-input-container">
	                <input class="form-control ps-6 datetimepicker" id="datepicker" type="text" 
	                data-options='{"dateFormat":"M j, Y","disableMobile":true,"defaultDate":"<?php echo date_i18n('M j, Y', current_time('timestamp')); ?>"}' />
	                <span class="uil uil-calendar-alt flatpickr-icon text-700"></span>
	            </div>
	        <?php } ?>
		</div>
	</div>
</header><!-- .entry-header -->