<?php
if( have_rows('table_data') ):
	$i = 0;
	?>
		<div id="<?php echo wp_unique_id('table-data-'); ?>" data-list='{"valueNames":["title","date"],"page":5,"pagination":true}'>
			<div class="table-responsive">
				<table class="table fs--1 mb-0 border-top border-200">
					<thead>
						<tr>
							<th class="sort white-space-nowrap align-middle ps-0 text-uppercase" data-sort="title">Title</th>
							<th class="sort align-middle ps-3 text-uppercase" data-sort="date">Date</th>
						</tr>
					</thead>
					<tbody class="list">

						<?php
							while( have_rows('table_data') ) : the_row();

								$heading 		= get_sub_field('heading');
								$date 			= get_sub_field('date');
								$attach_file 	= get_sub_field('attach_file');
								$link_url 		= get_sub_field('link');
								?>

											<tr>
												<td class="align-middle time white-space-nowrap ps-0 title">
													
    <?php if ($link_url != '') { ?>
        <a href="<?php echo $link_url; ?>" target='_blank' download>
    <?php } elseif ($attach_file != '') { ?>
        <a href="<?php echo $attach_file; ?>" target='_blank' download>
    <?php } ?>
    <p class="mb-0 fs-0"><?php echo $heading; ?></p>
    <?php if ($link_url != '' || $attach_file != '') { ?>
        </a>
    <?php } ?>
</td>

												<td class="align-middle white-space-nowrap start ps-3 date">
													<p class="mb-0 fs--1 text-900"><?php echo $date; ?></p>
												</td>
											</tr>

							<?php
								$i++;
							endwhile;
						?>

					</tbody>
				</table>
			</div><!-- table-responsive -->

	<?php
		if( $i > 5 ){
	?>
		<div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
			<div class="d-flex flex-between-center">
			    <div class="pagination d-none">
			        <li class="active"><button class="page" type="button" data-i="1" data-page="5">1</button></li>
			        <li><button class="page" type="button" data-i="2" data-page="5">2</button></li>
			        <li><button class="page" type="button" data-i="3" data-page="5">3</button></li>
			    </div>
			    <p class="mb-0 fs--1">
			        <span class="d-none d-sm-inline-block" data-list-info="data-list-info">1 to 5 <span class="text-600"> Items of </span>15</span>
			        <span class="d-none d-sm-inline-block"> - </span>
			        <a class="fw-semi-bold" href="#!" data-list-view="*">
			            View all
			            <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span>
			        </a>
			        <a class="fw-semi-bold d-none" href="#!" data-list-view="less">
			            View Less
			            <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span>
			        </a>
			    </p>
			    <div class="d-flex">
			        <button class="btn btn-sm btn-primary disabled" type="button" data-list-pagination="prev" disabled=""><span>Previous</span></button>
			        <button class="btn btn-sm btn-primary px-4 ms-2" type="button" data-list-pagination="next"><span>Next</span></button>
			    </div>
			</div>
		</div>
	<?php } ?>

	</div>

<?php
else :
	echo '<h5 class="mb-0 text-700">No record found.</h5>';
endif;