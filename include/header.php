<div id="kt_app_header" class="app-header d-flex">
	<!--begin::Header container-->
	<div class="app-container container-fluid d-flex align-items-center justify-content-between" id="kt_app_header_container">
		<!--begin::Logo-->
		<div class="app-header-logo d-flex flex-center">
			<!--begin::Logo image-->
			<div class="p-3 rounded-1 bg-blue">
			<a href="http://resellerusera.test/">
				<img alt="Logo" src="assets/img/LOGO.svg" class="mh-25px" />
			</a>
			<!--end::Logo image-->
			</div>
			<!--begin::Sidebar toggle-->
			<button class="btn btn-icon btn-sm btn-active-color-primary d-flex d-lg-none" id="kt_app_sidebar_mobile_toggle">
				<i class="ki-outline ki-abstract-14 fs-1"></i>
			</button>
			<!--end::Sidebar toggle-->
		</div>
		<!--end::Logo-->
		<div class="d-flex flex-lg-grow-1 flex-stack" id="kt_app_header_wrapper">
			<div class="app-header-wrapper d-flex align-items-center justify-content-around justify-content-lg-between flex-wrap gap-6 gap-lg-0 mb-6 mb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}">
				<!--begin::Page title-->
				<div class="d-none d-md-block h-40px border-start border-gray-200 me-10"></div>
				<div class="d-flex flex-column justify-content-center">
					<!--begin::Title-->
					<!-- <h1 class="text-gray-900 fw-bold fs-6 mb-2">Chartmix - Finance Team</h1> -->
					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-base">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
								<?php echo $parentPage; ?>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">/</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item black">
							<?php echo $childPage;?>
						</li>
						<!--end::Item-->
					</ul>
					<!--end::Breadcrumb-->
				</div>
				<!--end::Page title-->
				
				<div class="d-flex gap-3 gap-lg-8 flex-wrap">
					<div class="d-flex align-items-center gap-2">
						<!-- <div class="rounded d-flex flex-center w-40px h-40px flex-shrink-0 bg-warning">
							<i class="ki-outline ki-abstract-13 fs-2 text-inverse-warning"></i>
						</div> -->
						<!-- <div class="d-flex flex-column">
							<span class="fw-bold fs-base text-gray-900">Target A</span>
							<span class="fw-semibold fs-7 text-gray-500">Uplift: 64%</span>
						</div> -->
					</div>
					<div class="d-flex align-items-center gap-2">
						<!-- <div class="rounded d-flex flex-center w-40px h-40px flex-shrink-0 bg-danger">
							<i class="ki-outline ki-abstract-24 fs-2 text-inverse-danger"></i>
						</div> -->
						<!-- <div class="d-flex flex-column">
							<span class="fw-bold fs-base text-gray-900">Target A</span>
							<span class="fw-semibold fs-7 text-gray-500">Uplift: 64%</span>
						</div> -->
					</div>
					<div class="d-flex align-items-center gap-2">
						<!-- <div class="rounded d-flex flex-center w-40px h-40px flex-shrink-0 bg-primary">
							<i class="ki-outline ki-abstract-25 fs-2 text-inverse-primary"></i>
						</div>
						<div class="d-flex flex-column">
							<span class="fw-bold fs-base text-gray-900">Target A</span>
							<span class="fw-semibold fs-7 text-gray-500">Uplift: 64%</span>
						</div> -->
					</div>
					<!-- <a href="#" class="btn btn-icon border border-200 bg-gray-100 btn-color-gray-600 btn-active-primary ms-2 ms-lg-6">
						<i class="ki-outline ki-plus fs-3"></i>
					</a> -->
				</div>
			</div>
			<!--begin::Navbar-->
			<div class="app-navbar flex-shrink-0 gap-3 gap-lg-8 align-items-center">
				<!--begin::My apps links-->
				<button type="button" class="btn btn-sm btn-icon me-n3 px-3" data-kt-menu-trigger="{default: 'click'}" data-kt-menu-placement="bottom-end">
					<i class="ki-duotone ki-magnifier icon-header mt-3">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</button>
				<button type="button" class="btn btn-sm btn-icon me-n3 px-3" data-kt-menu-trigger="{default: 'click'}" data-kt-menu-placement="bottom-end">
					<i class="ki-duotone ki-notification-on icon-header mt-3">
						<span class="path1"></span>
						<span class="path2"></span>
						<span class="path3"></span>
						<span class="path4"></span>
						<span class="path5"></span>
					</i>
				</button>
				<button type="button" class="btn btn-sm btn-icon me-n3 px-3" data-kt-menu-trigger="{default: 'click'}" data-kt-menu-placement="bottom-end">
					
					<svg width="20" height="20" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M3.67537 4.80769C3.67537 5.95016 4.13106 7.04584 4.94219 7.85369C5.75332 8.66154 6.85346 9.11539 8.00057 9.11539C9.14769 9.11539 10.2478 8.66154 11.059 7.85369C11.8701 7.04584 12.3258 5.95016 12.3258 4.80769C12.3258 3.66522 11.8701 2.56954 11.059 1.76169C10.2478 0.953845 9.14769 0.5 8.00057 0.5C6.85346 0.5 5.75332 0.953845 4.94219 1.76169C4.13106 2.56954 3.67537 3.66522 3.67537 4.80769ZM14.1794 16.5H1.20382C1.03995 16.5 0.882788 16.4352 0.766912 16.3198C0.651036 16.2044 0.585938 16.0478 0.585938 15.8846V14.0385C0.585938 13.2224 0.91143 12.4398 1.49081 11.8627C2.07019 11.2857 2.856 10.9615 3.67537 10.9615H12.3258C13.1451 10.9615 13.931 11.2857 14.5103 11.8627C15.0897 12.4398 15.4152 13.2224 15.4152 14.0385V15.8846C15.4152 16.0478 15.3501 16.2044 15.2342 16.3198C15.1184 16.4352 14.9612 16.5 14.7973 16.5H14.1794Z" fill="url(#paint0_linear_1097_390)"/>
						<defs>
						<linearGradient id="paint0_linear_1097_390" x1="8.00057" y1="1.5" x2="8.00057" y2="20.5" gradientUnits="userSpaceOnUse">
						<stop stop-color="#0E41C1" stop-opacity="0.870588"/>
						<stop offset="1" stop-color="#0047FF" stop-opacity="0.870588"/>
						</linearGradient>
						</defs>
					</svg>

				</button>

				<a href="#" class="btn btn-primary btn-grad rotate-scale-hover">
					<svg class="pe-1 pb-1" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M18.15 18.1H3.85C3.5475 18.1 3.3 18.3475 3.3 18.65V19.75C3.3 20.0525 3.5475 20.3 3.85 20.3H18.15C18.4525 20.3 18.7 20.0525 18.7 19.75V18.65C18.7 18.3475 18.4525 18.1 18.15 18.1ZM20.35 7.1C19.4391 7.1 18.7 7.83906 18.7 8.75C18.7 8.99406 18.755 9.22094 18.8513 9.43063L16.3625 10.9225C15.8331 11.2388 15.1491 11.06 14.8431 10.5238L12.0416 5.62188C12.4094 5.31938 12.65 4.86563 12.65 4.35C12.65 3.43906 11.9109 2.7 11 2.7C10.0891 2.7 9.35 3.43906 9.35 4.35C9.35 4.86563 9.59063 5.31938 9.95844 5.62188L7.15688 10.5238C6.85094 11.06 6.16344 11.2388 5.6375 10.9225L3.15219 9.43063C3.245 9.22438 3.30344 8.99406 3.30344 8.75C3.30344 7.83906 2.56437 7.1 1.65344 7.1C0.7425 7.1 0 7.83906 0 8.75C0 9.66094 0.739062 10.4 1.65 10.4C1.73937 10.4 1.82875 10.3863 1.91469 10.3725L4.4 17H17.6L20.0853 10.3725C20.1712 10.3863 20.2606 10.4 20.35 10.4C21.2609 10.4 22 9.66094 22 8.75C22 7.83906 21.2609 7.1 20.35 7.1Z" fill="white"/>
					</svg>
					Try Premium
				</a>


				<!-- <div class="app-navbar-item"> -->
					<!--begin::Menu wrapper-->
												
					<!-- <div class="btn btn-icon border border-200 bg-gray-100 btn-color-gray-600 btn-active-color-primary w-40px h-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
						<i class="ki-outline ki-element-11 fs-4"></i>
					</div> -->
						
					<!--begin::My apps-->
					<!-- <div class="menu menu-sub menu-sub-dropdown menu-column w-100 w-sm-350px" data-kt-menu="true">										
					</div> -->
					<!--end::My apps-->
					<!--end::Menu wrapper-->
				<!-- </div> -->
				<!--end::My apps links-->
			
			</div>
			<!--end::Navbar-->
		</div>
	</div>
	<!--end::Header container-->
</div>