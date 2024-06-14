	<?php include './include/head.php'; ?>

	<title>Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes</title>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>
			var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }
		</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				 
				 <?php $parentPage = 'Home'; $childPage = 'Dashboard'; include 'include/header.php'?>
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Sidebar-->
					<?php include './include/sidebar.php'; ?>
					<!--end::Sidebar-->
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-fluid">
									<!--begin::Row-->
									<div class="row g-5 g-xl-10">
										<!--begin::Col-->
										<div class="col-xl-12 mb-xl-10">
											<!--begin::Row-->
											<div class="row g-2 g-xl-10">
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Chart Widget 47-->
													<div class="card card-flush" style="box-shadow: 0px 14px 40px 0px rgba(24, 85, 243, 0.20);">
														<!--begin::Header-->
														<!-- <div class="card-header align-items-center"> -->
															<!--begin::Symbol-->
															<!-- <div class="symbol symbol-50px me-4">
																<div class="symbol-label bg-transparent rounded-lg" style="border: 1px dashed rgba(255, 255, 255, 0.20)">
																	<i class="ki-outline ki-handcart text-white fs-1"></i>
																</div>
															</div> -->
															<!--end::Symbol-->
															<!--begin::Info-->
															<!-- <div class="card-title flex-column flex-grow-1">
																<span class="card-label fw-bold fs-3 text-white">New Orders</span>
																<span class="text-white opacity-50 fw-semibold fs-base">Recent customer purchase trends</span>
															</div> -->
															<!--end::Info-->
															<!--begin::Toolbar-->
															<!-- <div class="card-toolbar">
																<a href="#" class="btn btn-sm btn-text-white bg-white bg-opacity-10" style="border: 1px solid rgba(255, 255, 255, 0.20)">Today</a>
															</div> -->
															<!--end::Toolbar-->
														<!-- </div> -->
														<!--end::Header-->
														<!--begin::Card body-->
														<div class="card-body d-flex align-items-center">
															<!--begin::Wrapper-->
															<div class="d-flex flex-stack flex-row-fluid p-4">
																<!--begin::Block-->
																<div class="d-flex flex-column">
																	<!--begin::Total-->
																	<span class="fw-semibold text-gray-800 opacity-50 fs-16">SMS Sent Today</span>
																	<!--end::Total-->
																	<!--begin::Stats-->
																	<div class="d-flex align-items-center mb-1">
																		<!--begin::Amount-->
																		<span class="fs-20 fw-bold me-2 text-gray-800">$682.5</span>
																		<!--end::Amount-->
																	</div>
																	<!--end::Stats-->
																	
																</div>
																<!--end::Block-->
																<!--begin::Chart-->
																<div id="kt_charts_widget_47 ">
																	<i class="ki-duotone ki-graph-2">
 																		<span class="path1 fs-55"></span>
 																		<span class="path2 fs-55"></span>
 																		<span class="path3 fs-55"></span>
																	</i>
																</div>
																<!--end::Chart-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Chart Widget 47-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4 mb-xl-10">
													<!--begin::Chart Widget 47-->
													<!--begin::Chart Widget 48-->
													<div class="card card-flush">
														<div class="card-body d-flex align-items-start">
															<!--begin::Wrapper-->
															<div class="d-flex flex-row-fluid p-4 align-items-center">
																	<!--begin::Chart-->
																<div id="kt_charts_widget_48">
																	<i class="ki-duotone ki-graph">
 																		<span class="path1 fs-55"></span>
 																		<span class="path2 fs-55"></span>
 																		<span class="path3 fs-55"></span>
 																		<span class="path4 fs-55"></span>
																	</i>
																</div>
																		<!--end::Chart-->
																<!--begin::Block-->
																<div class="d-flex flex-column px-3">
																	<!--begin::Total-->
																	<span class="fw-semibold text-gray-800 opacity-50 fs-16">SMS Balance</span>
																	<!--end::Total-->
																	<!--begin::Stats-->
																	<div class="d-flex align-items-center mb-1">
																		<!--begin::Amount-->
																		<span class="fs-20 fw-bold text-gray-800 me-2">$350.40</span>
																		<!--end::Amount-->							
																	</div>
																	<!--end::Stats-->
																	
																</div>
																<!--end::Wrapper-->
																
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Chart Widget 48-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4 mb-xl-10">
													<!--begin::Chart Widget 47-->
													<!--begin::Chart Widget 48-->
													<div class="card card-flush bg-blue">
														<div class="card-body d-flex align-items-start">
															<!--begin::Wrapper-->
															<div class="d-flex flex-stack flex-row-fluid p-4">
																<!--begin::Block-->
																<div class="d-flex flex-column px-3">
																	<!--begin::Total-->
																	<span class="fw-semibold text-white fs-14">All-Time SMS Sent</span>
																	<!--end::Total-->
																	<!--begin::Stats-->
																	<div class="d-flex align-items-center mb-1">
																		<!--begin::Amount-->
																		<span class="fs-20 fw-bold text-white me-2">$540.50</span>			
																    </div>
																	<!--end::Stats-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Chart-->
																<div class="d-flex flex-column px-3">
																	<svg width="92" height="44" viewBox="0 0 92 44" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M2.5 41.5C2.5 41.5 8.77975 -6.00537 24.5 16C40.2203 38.0054 46.5 36.9946 52.5 20C59.9168 -1.0075 87.258 17.0806 90 2" stroke="url(#paint0_linear_943_46353)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
																		<defs>
																		<linearGradient id="paint0_linear_943_46353" x1="-1.00002" y1="46.5" x2="71.0778" y2="-16.9144" gradientUnits="userSpaceOnUse">
																		<stop stop-color="white"/>
																		<stop offset="1" stop-color="white" stop-opacity="0"/>
																		</linearGradient>
																		</defs>
																	</svg>
																</div>
																	<!--end::Chart-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Chart Widget 48-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
											<!--begin::Row-->
											<div class="row gx-5 gx-xl-10">
												<!--begin::Col-->
												<div class="col-xl-8 mb-5 mb-xl-10">
													<!--begin::Table widget 9-->
													<div class="card card-flush h-xl-100">
														<!--begin::Header-->
														<div class="card-header pt-5">
															<!--begin::Title-->
															<h3 class="card-title align-items-start flex-column">
																<span class="card-label fw-bold text-gray-800">SMS Balance</span>
															</h3>
															<!--end::Title-->
															<!--begin::Toolbar-->
															<div class="card-toolbar">
																<a href="#" class="btn btn-sm btn-light">monday</a>
															</div>
															<!--end::Toolbar-->
														</div>
														<!--end::Header-->
														<!--begin::Body-->
													<div class="card-body py-3">
														<div class="row">
															<div class="col-6">
																	<!--begin::Block-->
																<div class="d-flex flex-column px-3">
																	<!--begin::Total-->
																	<span class="fw-semibold text-white fs-14">All-Time SMS Sent</span>
																	<!--end::Total-->
																	<!--begin::Stats-->
																	<div class="d-flex align-items-center mb-1">
																		<!--begin::Amount-->
																		<span class="fs-20 fw-bold text-white me-2">$540.50</span>			
																    </div>
																	<!--end::Stats-->
																</div>
																<!--end::Wrapper-->
															</div>
															<div class="col-6">
																	<!--begin::Block-->
																<div class="d-flex flex-column px-3">
																	<!--begin::Total-->
																	<span class="fw-semibold text-white fs-14">All-Time SMS Sent</span>
																	<!--end::Total-->
																	<!--begin::Stats-->
																	<div class="d-flex align-items-center mb-1">
																		<!--begin::Amount-->
																		<span class="fs-20 fw-bold text-white me-2">$540.50</span>			
																    </div>
																	<!--end::Stats-->
																</div>
																<!--end::Wrapper-->
															</div>
														</div>
													</div>
														<!--end::Body-->
													</div>
													<!--end::Table Widget 9-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-xl-4 mb-5 mb-xl-10">
													<!--begin::Table widget 10-->
													<div class="card card-flush h-xl-100">
														<!--begin::Header-->
													<div class="card-header pt-5">
															<!--begin::Title-->
															<h3 class="card-title align-items-start flex-column">
																<span class="card-label fw-bold text-gray-800">Sent Messages</span>
															</h3>
															<!--end::Title-->
													</div>
														<!--end::Header-->
														<!--begin::Table container-->
													<div class="table-responsive px-5 align-items-center ">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
															<!--begin::Table body-->
															<tbody>
																<tr>
																	<td>
																		<div class="d-flex align-items-center ps-5">
																			<div class="symbol symbol-50px me-3">
																				<img src="assets/img/home/german.webp" class="" alt="" />
																			</div>
																			<div class="d-flex justify-content-start flex-column">
																				<a href="apps/projects/users.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Germany</a>
																				<span class="text-gray-500 fw-semibold d-block fs-7">Today, 16:36</span>
																			</div>
																		</div>
																	</td>
																	<td class="text-end pe-2">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base p-2">115K</span>
																		<!--end::Label-->
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="d-flex align-items-center ps-5">
																			<div class="symbol symbol-50px me-3">
																				<img src="assets/img/home/japan.webp" class="" alt="" />
																			</div>
																			<div class="d-flex justify-content-start flex-column">
																				<a href="apps/projects/users.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Japan</a>
																				<span class="text-gray-500 fw-semibold d-block fs-7">Today, 08:49</span>
																			</div>
																		</div>
																	</td>
																	<td class="text-end pe-2">
																		<!--begin::Label-->
																		<span class="badge badge-light-danger fs-base p-2">27k</span>
																		<!--end::Label-->
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="d-flex align-items-center ps-5">
																			<div class="symbol symbol-50px me-3">
																				<img src="assets/img/home/netherland.webp" class="" alt="" />
																			</div>
																			<div class="d-flex justify-content-start flex-column">
																				<a href="apps/projects/users.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Netherland</a>
																				<span class="text-gray-500 fw-semibold d-block fs-7">Yesterday, 14:36</span>
																			</div>
																		</div>
																	</td>
																	<td class="text-end pe-2">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base p-2">5k</span>
																		<!--end::Label-->
																	</td>
																</tr>
															</tbody>
															<!--end::Table body-->
														</table>
													</div>
													<!--end::Table-->
													<!--begin::footer-->
													<div class="card-footer pt-5 pe-4 d-flex justify-content-end">
															<!--begin::Title-->
															<h3 class="card-title align-items-start flex-column">
																<span class="card-label fw-bold d-flex align-items-center text-gray-800 fs-16 blue">View all
																  <i class="ki-duotone ki-arrow-right">
																	 <span class="path1 fs-25 blue"></span>
																	 <span class="path2 fs-25 blue"></span>
																  </i>
																</span>
															</h3>
															<!--end::Title-->
													</div>
														<!--end::footer-->
													</div>
													<!--end::Table Widget 10-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->

									<!--begin::Row-->
									<div class="row g-5 g-xl-10">
										<!--begin::Col-->
										<div class="col-xl-12 mb-xl-10">
											  <!--begin::Row-->
											<div class="row gx-5 gx-xl-10">
											   <!--begin::Col-->
												<div class="col-xl-4 mb-5 mb-xl-10">
													<!--begin::Table widget 9-->
													<div class="card card-flush h-xl-100">
														<!--begin::Header-->
														<div class="card-header pt-5">
															<!--begin::Title-->
															<h3 class="card-title align-items-start flex-column">
																<span class="card-label fw-bold text-gray-800">SMS Summary</span>
															</h3>
															<!--end::Title-->
															<!--begin::Toolbar-->
															<div class="card-toolbar">
																<a href="#" class="btn btn-sm btn-light">View Report</a>
															</div>
															<!--end::Toolbar-->
														</div>
														<!--end::Header-->
														<!--begin::Body-->
													<div class="card-body py-3">
														<div class="row">
															<div class="col-6">
																	<!--begin::Block-->
																<div class="d-flex flex-column px-3">
																	<!--begin::Total-->
																	<span class="fw-semibold text-white fs-14">All-Time SMS Sent</span>
																	<!--end::Total-->
																	<!--begin::Stats-->
																	<div class="d-flex align-items-center mb-1">
																		<!--begin::Amount-->
																		<span class="fs-20 fw-bold text-white me-2">$540.50</span>			
																    </div>
																	<!--end::Stats-->
																</div>
																<!--end::Wrapper-->
															</div>
															<div class="col-6">
																	<!--begin::Block-->
																<div class="d-flex flex-column px-3">
																	<!--begin::Total-->
																	<span class="fw-semibold text-white fs-14">All-Time SMS Sent</span>
																	<!--end::Total-->
																	<!--begin::Stats-->
																	<div class="d-flex align-items-center mb-1">
																		<!--begin::Amount-->
																		<span class="fs-20 fw-bold text-white me-2">$540.50</span>			
																    </div>
																	<!--end::Stats-->
																</div>
																<!--end::Wrapper-->
															</div>
														</div>
													</div>
														<!--end::Body-->
													</div>
													<!--end::Table Widget 9-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-xl-8 mb-5 mb-xl-10">
													<!--begin::Table widget 10-->
													<div class="row gx-xl-10 card-flush d-flex">
														<div class="col-xl-6 mb-5 mb-xl-10">
															
																<!--begin::Header-->
															    <div class="card-header pt-5">
																	<!--begin::Title-->
																	<h3 class="card-title align-items-start flex-column">
																		<span class="card-label fw-bold text-gray-800 fs-25">Upgrade your plan now!</span>
																	</h3>
																	<!--end::Title-->
																	<!--begin::Title-->
																	<p class="card-title align-items-center flex-column">
																		<span class="card-label fw-bold text-gray-800 fs-18">
																			You don’t have to take our word for anything. Here, Try it now.
																		</span>
                                                        		    </p>
																	<!--end::Title-->
															    </div>
														    
													    </div>
														<div class="col-xl-6 mb-5 mb-xl-10">		
														
															    <div class="img">
																	<img src="assets/img/home/Image.webp" height="250" alt="" />
																</div>
															
													    </div>
												    </div>
													<!--end::Table Widget 10-->
											    </div>
											   <!--end::Col-->
									           <!--end::Row-->
									        </div>
										   <!--end::Col-->
									    </div>
									    <!--end::Row-->
								    </div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->
						<?php include './include/footer.php'; ?>
						<!--end::Footer-->
					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
		
		<?php include './include/footer-links.php'; ?>
	</body>
	<!--end::Body-->
</html>