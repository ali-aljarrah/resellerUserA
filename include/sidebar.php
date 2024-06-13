<div id="kt_app_sidebar" class="app-sidebar" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Primary menu-->
    <div id="kt_aside_menu_wrapper" class="app-sidebar-menu flex-grow-1 hover-scroll-y scroll-lg-ps my-5 pt-8" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
        <!--begin::Menu-->
        <div id="kt_aside_menu" class="menu menu-rounded menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold fs-6" data-kt-menu="true">
            <!--begin:Menu item-->
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item here show py-2">
                <!--begin:Menu link-->
                <span class="menu-link menu-center">
                    <a class="menu-link" href="/">
                        <i class="ki-duotone ki-home-2 icon-header">
                             <span class="path1"></span>
                             <span class="path2"></span>
                        </i>
                    </a>
                </span>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                <!--begin:Menu link-->
                <span class="menu-link menu-center">
                 <i class="ki-duotone ki-message-text-2 icon-header">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                 </i>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu content-->
                        <div class="menu-content">
                            <span class="menu-section fs-5 fw-bolder ps-1 py-1">Send SMS</span>
                        </div>
                        <!--end:Menu content-->
                    </div>
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="/send_sms">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Single SMS</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="/bulksms">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Bulk SMS</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                <!--begin:Menu link-->
                <span class="menu-link menu-center">
                    <i class="ki-duotone ki-eye icon-header">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                    </i>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu content-->
                        <div class="menu-content">
                            <span class="menu-section fs-5 fw-bolder ps-1 py-1">HLR</span>
                        </div>
                        <!--end:Menu content-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                   <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="/hlr_lookup">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">HLR Lookup</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="/hlr_statistic">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">HLR Statistics</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="/reload_hlr">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Reload HLR Account</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                <!--begin:Menu link-->
                <span class="menu-link menu-center">
                    <i class="ki-duotone ki-star icon-header">
                    </i>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu content-->
                        <div class="menu-content">
                            <span class="menu-section fs-5 fw-bolder ps-1 py-1">Management</span>
                        </div>
                        <!--end:Menu content-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="/sms_temp">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Templates Management</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                      <!--begin:Menu item-->
                      <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="/groups_manager">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Groups Manager</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                <!--begin:Menu link-->
                <span class="menu-link menu-center">
                    <i class="ki-duotone ki-chart-pie-4 icon-header">
                         <span class="path1"></span>
                         <span class="path2"></span>
                         <span class="path3"></span>
                    </i>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-dropdown px-2 py-4 w-200px w-lg-225px mh-75 overflow-auto">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu content-->
                        <div class="menu-content">
                            <span class="menu-section fs-5 fw-bolder ps-1 py-1">Report</span>
                        </div>
                        <!--end:Menu content-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                       <!--begin:Menu link-->
                       <a class="menu-link" href="/sms_report">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">SMS Report</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                       <!--begin:Menu link-->
                       <a class="menu-link" href="/sms_summary">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">SMS Summary</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="/job_process">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">In Progress Summary</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
              <!--begin:Menu item-->
              <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                <!--begin:Menu link-->
                <span class="menu-link menu-center">
                  <a class="menu-link" href="/reload_account_ec">
                    <i class="ki-duotone ki-wallet icon-header">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                    </i>
                  </a>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <!-- <div class="menu-sub menu-sub-dropdown px-2 py-4 w-200px w-lg-225px mh-75 overflow-auto"> -->
                    <!--begin:Menu item-->
                    <!-- <div class="menu-item"> -->
                        <!--begin:Menu content-->
                        <!-- <div class="menu-content"> -->
                            <!-- <span class="menu-section fs-5 fw-bolder ps-1 py-1">Reload</span> -->
                        <!-- </div> -->
                        <!--end:Menu content-->
                    <!-- </div> -->
                    <!--end:Menu item-->
                <!-- </div> -->
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
                  <!--begin:Menu item-->
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                <!--begin:Menu link-->
                <span class="menu-link menu-center">
                  <a class="menu-link" href="/api_references">
                     <i class="ki-duotone ki-pin icon-header">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                  </a>
                </span>
                <!--end:Menu link-->

            </div>
            <!--end:Menu item-->
              <!--begin:Menu item-->
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                <!--begin:Menu link-->
                <span class="menu-link menu-center">
                  <a class="menu-link" href="/cov">
                      <i class="ki-duotone ki-geolocation icon-header">
                        <span class="path1"></span>
                        <span class="path2"></span>
                      </i>
                   </a>
                </span>
                <!--end:Menu link-->

            </div>
            <!--end:Menu item-->
                 <!--begin:Menu item-->
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                <!--begin:Menu link-->
                <span class="menu-link menu-center">
                  <a class="menu-link" href="/settings">                 
                     <i class="ki-duotone ki-setting-2 icon-header">
                        <span class="path1"></span>
                        <span class="path2"></span>
                     </i>
                   </a>
                </span>
               
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Primary menu-->
    <!--begin::Footer-->
    <!-- <div class="d-flex flex-column flex-center pb-4 pb-lg-8" id="kt_app_sidebar_footer"> -->
        <!--begin::Menu toggle-->
        <!-- <a href="#" class="btn btn-icon btn-active-color-primary" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <i class="ki-outline ki-night-day theme-light-show fs-2x"></i>
            <i class="ki-outline ki-moon theme-dark-show fs-2x"></i>
        </a> -->
        <!--begin::Menu toggle-->
        <!--begin::Menu-->
        <!-- <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu"> -->
            <!--begin::Menu item-->
            <!-- <div class="menu-item px-3 my-0">
                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                    <span class="menu-icon" data-kt-element="icon">
                        <i class="ki-outline ki-night-day fs-2"></i>
                    </span>
                    <span class="menu-title">Light</span>
                </a>
            </div> -->
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <!-- <div class="menu-item px-3 my-0">
                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                    <span class="menu-icon" data-kt-element="icon">
                        <i class="ki-outline ki-moon fs-2"></i>
                    </span>
                    <span class="menu-title">Dark</span>
                </a>
            </div> -->
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <!-- <div class="menu-item px-3 my-0">
                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                    <span class="menu-icon" data-kt-element="icon">
                        <i class="ki-outline ki-screen fs-2"></i>
                    </span>
                    <span class="menu-title">System</span>
                </a>
            </div> -->
            <!--end::Menu item-->
        <!-- </div> -->
        <!--end::Menu-->
    <!-- </div> -->

    <!--end::Footer-->
</div>