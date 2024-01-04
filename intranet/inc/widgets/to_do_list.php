<?php

    if( have_rows('data') ):
        $i = 0;
        while( have_rows('data') ) : the_row();
    
            $heading    = get_sub_field('heading');
            $badge      = get_sub_field('badge');
            $complete   = get_sub_field('complete');
            ?>
                <div class="d-flex hover-actions-trigger py-3 border-top">
                    <input <?php echo $complete ? 'checked="checked"' : ''; ?> class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-<?php echo $i; ?>" data-event-propagation-prevent="data-event-propagation-prevent" />
                    <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-200 gx-0 flex-1">
                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                            <div class="mb-1 mb-md-0 d-flex align-items-center lh-1">
                                <label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-0 me-2 line-clamp-1 text-900">
                                    <?php echo $heading; ?>
                                </label>
                                <?php if( $badge != '' ){ ?>
                                    <div class="badge badge-phoenix ms-auto fs--2 badge-phoenix-secondary"><span class="fw-bold badge-label"><?php echo $badge; ?></span></div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                            <div class="d-flex lh-1 align-items-center">
                                <button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>2</button>
                                <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">June 1, 2023</p>
                                <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                                    <p class="text-700 fs--2 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl border-300">12:00 AM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                        <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                            <button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button>
                            <button class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button>
                        </div>
                    </div>
                </div>
            <?php
            $i++;
        endwhile;
    
    else :
        echo '<h5 class="mb-0 text-700">No record found.</h5>';
    endif;
?>
