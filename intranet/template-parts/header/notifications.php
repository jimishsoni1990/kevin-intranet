<?php
/**
 * Displays notifications section on top horizontal menu bar
 *
 * @package WordPress
 * @subpackage intranet
 * @since Intranet 1.0
 */
?>
<li class="nav-item dropdown">
    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside">
        <span data-feather="bell" style="height: 20px; width: 20px;"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
        <div class="card position-relative border-0">
            <div class="card-header p-2">
                <div class="d-flex justify-content-between">
                    <h5 class="text-black mb-0">Notificatons</h5>
                    <button class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark all as read</button>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="scrollbar-overlay" style="height: 27rem;">
                    <div class="border-300">
                        <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read border-bottom">
                            <div class="d-flex align-items-center justify-content-between position-relative">
                                <div class="d-flex">
                                    <div class="flex-1 me-sm-3">
                                        <h4 class="fs--1 text-black">New Daily Sales Report</h4>
                                        <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>June 7,2023</p>
                                    </div>
                                </div>
                                <div class="font-sans-serif d-none d-sm-block">
                                    <button
                                        class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                        type="button"
                                        data-stop-propagation="data-stop-propagation"
                                        data-bs-toggle="dropdown"
                                        data-boundary="window"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        data-bs-reference="parent"
                                        >
                                        <span class="fas fa-ellipsis-h fs--2 text-900"></span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer p-0 border-top border-0">
                <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder" href="notifications.html">Notification history</a></div>
            </div>
        </div>
    </div>
</li>