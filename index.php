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
										<div class="col-xl-12">
											<!--begin::Row-->
											<div class="row g-2 g-xl-10">
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Chart Widget 47-->
													<div class="card card-flush shadow-xs">
														<!--begin::Card body-->
														<div class="d-flex align-items-center">
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
																	<svg width="101" height="46" viewBox="0 0 101 46" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect x="92.4414" y="45.5704" width="45.5705" height="8.48315" rx="4.24158" transform="rotate(-90 92.4414 45.5704)" fill="#E9EDF7"/>
																		<rect x="92.4414" y="45.5704" width="10.8668" height="8.48316" rx="4.24158" transform="rotate(-90 92.4414 45.5704)" fill="url(#paint0_linear_1091_6397)"/>
																		<rect x="69.3457" y="45.5704" width="45.5705" height="8.48308" rx="4.24154" transform="rotate(-90 69.3457 45.5704)" fill="#E9EDF7"/>
																		<rect x="69.3457" y="45.5704" width="41.364" height="8.48319" rx="4.24159" transform="rotate(-90 69.3457 45.5704)" fill="url(#paint1_linear_1091_6397)"/>
																		<rect x="46.252" y="45.5704" width="45.5705" height="8.48315" rx="4.24158" transform="rotate(-90 46.252 45.5704)" fill="#E9EDF7"/>
																		<rect x="46.252" y="45.5704" width="31.5488" height="8.48315" rx="4.24158" transform="rotate(-90 46.252 45.5704)" fill="url(#paint2_linear_1091_6397)"/>
																		<rect x="23.1582" y="45.5704" width="45.5705" height="8.48317" rx="4.24158" transform="rotate(-90 23.1582 45.5704)" fill="#E9EDF7"/>
																		<rect x="23.1582" y="45.5704" width="23.4863" height="8.48317" rx="4.24159" transform="rotate(-90 23.1582 45.5704)" fill="url(#paint3_linear_1091_6397)"/>
																		<rect x="0.0625" y="45.5704" width="45.5705" height="8.48318" rx="4.24159" transform="rotate(-90 0.0625 45.5704)" fill="#E9EDF7"/>
																		<rect x="0.0625" y="45.5704" width="37.508" height="8.4832" rx="4.2416" transform="rotate(-90 0.0625 45.5704)" fill="url(#paint4_linear_1091_6397)"/>
																		<defs>
																		<linearGradient id="paint0_linear_1091_6397" x1="97.8748" y1="45.5704" x2="97.8748" y2="54.0536" gradientUnits="userSpaceOnUse">
																		<stop stop-color="#0E41C1" stop-opacity="0.870588"/>
																		<stop offset="1" stop-color="#0047FF" stop-opacity="0.870588"/>
																		</linearGradient>
																		<linearGradient id="paint1_linear_1091_6397" x1="90.0277" y1="45.5704" x2="90.0277" y2="54.0536" gradientUnits="userSpaceOnUse">
																		<stop stop-color="#0E41C1" stop-opacity="0.870588"/>
																		<stop offset="1" stop-color="#0047FF" stop-opacity="0.870588"/>
																		</linearGradient>
																		<linearGradient id="paint2_linear_1091_6397" x1="62.0263" y1="45.5704" x2="62.0263" y2="54.0536" gradientUnits="userSpaceOnUse">
																		<stop stop-color="#0E41C1" stop-opacity="0.870588"/>
																		<stop offset="1" stop-color="#0047FF" stop-opacity="0.870588"/>
																		</linearGradient>
																		<linearGradient id="paint3_linear_1091_6397" x1="34.9014" y1="45.5704" x2="34.9014" y2="54.0536" gradientUnits="userSpaceOnUse">
																		<stop stop-color="#0E41C1" stop-opacity="0.870588"/>
																		<stop offset="1" stop-color="#0047FF" stop-opacity="0.870588"/>
																		</linearGradient>
																		<linearGradient id="paint4_linear_1091_6397" x1="18.8165" y1="45.5704" x2="18.8165" y2="54.0536" gradientUnits="userSpaceOnUse">
																		<stop stop-color="#0E41C1" stop-opacity="0.870588"/>
																		<stop offset="1" stop-color="#0047FF" stop-opacity="0.870588"/>
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
													<!--end::Chart Widget 47-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4 mb-xl-10">
													<!--begin::Chart Widget 47-->
													<!--begin::Chart Widget 48-->
													<div class="card card-flush shadow-xs">
														<div class="d-flex align-items-start">
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
													<div class="card card-flush shadow-xs bg-blue">
														<div class="d-flex align-items-start">
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
											<div class="row g-2 gx-xl-10">
												<!--begin::Col-->
												<div class="col-xl-8 mb-5 mb-xl-10">
													<!--begin::Table widget 9-->
													<div class="card card-flush shadow-xs h-xl-100">
														<!--begin::Header-->
														<div class="card-header pt-5">
															<!--begin::Title-->
															<h3 class="card-title align-items-start flex-column">
																<span class="card-label fw-bold text-gray-800">SMS Balance</span>
															</h3>
															<!--end::Title-->
															<!--begin::Toolbar-->
															<div class="card-toolbar">
																<a href="#" class="btn soft-blue">Monthly
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M17 10L12 15L7 10L17 10Z" fill="#A3AED0"/>
																	</svg>
																</a>
															</div>
															<!--end::Toolbar-->
														</div>
														<!--end::Header-->
														<div class="row d-flex justify-content-center mb-5">
															<div class="col-lg-4 d-flex justify-content-start shadow-xs rounded-2 p-3 me-4">
																	<!--begin::Block-->
																<div class="d-flex flex-column px-3">
																	<!--begin::Total-->
																	<span class="fw-semibold fs-12 gray">Spending</span>
																	<!--end::Total-->
																	<!--begin::Stats-->
																	<div class="d-flex align-items-center mb-1">
																		<!--begin::Amount-->
																		<span class="fs-18 fw-bold me-2">43.50%</span>	
																		<span class="badge badge-light-success fs-12 p-2">+2.45%</span>		
																    </div>
																	<!--end::Stats-->
																</div>
																<!--end::Wrapper-->
															</div>
															<div class="col-lg-4 d-flex justify-content-start shadow-xs rounded-2 p-3 ms-4">
																	<!--begin::Block-->
																<div class="d-flex flex-column px-3">
																	<!--begin::Total-->
																	<span class="fw-semibold fs-12 gray">Remaining</span>
																	<!--end::Total-->
																	<!--begin::Stats-->
																	<div class="d-flex align-items-center mb-1">
																		<!--begin::Amount-->
																		<span class="fs-18 fw-bold me-2">$52,422</span>		
																		<span class="badge badge-light-danger fs-12 p-2">-4.75%</span>	
																    </div>
																	<!--end::Stats-->
																</div>
																<!--end::Wrapper-->
															</div>

													    </div>
														<div class="row mt-5 pt-5">
															<svg width="771" height="141" viewBox="0 0 771 141" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M31.6097 81.6394C20.1441 73.6174 5.98578 74.0185 0.339844 75.2218V140.599H770.359V26.2871C754.724 27.7578 730.872 32.641 690.882 26.2871C650.492 19.8697 647.886 29.095 638.765 41.93C630.487 53.58 610.101 43.5345 569.711 56.7706C537.239 67.4119 522.285 23.8807 514.989 12.6497C509.777 4.62776 490.234 2.62245 485.022 12.6497C479.81 26.2871 476.423 52.9201 473.296 56.7706C468.41 62.7873 458.105 63.5145 449.844 61.1829C434.209 56.7706 436.814 41.2093 436.814 30.2983C436.814 19.8697 416.671 19.8697 413.362 26.2871C400.333 51.5565 399.03 90.0369 376.881 90.4631C360.203 90.784 354.731 80.8367 345.611 71.2111C342.19 67.6005 329.976 65.1144 314.341 71.2111C294.797 78.832 288.283 72.0133 286.98 69.2047C285.677 66.396 279.303 51.5982 277.86 22.2775C276.557 -4.19502 244.95 -2.99198 242.681 7.83749C234.864 45.1399 244.077 95.6772 207.502 95.6772C186.656 95.6772 186.656 82.4109 186.656 71.6113C186.656 62.7871 169.718 61.9849 164.506 69.2047C159.295 76.4245 155.386 84.8484 138.448 84.8484C118.732 84.8484 112.39 74.419 112.39 66.397C112.39 58.375 109.771 48.7748 99.3609 48.3475C79.8173 47.5453 82.4231 76.0234 75.9086 84.8484C70.7437 91.8451 45.9417 91.6668 31.6097 81.6394Z" fill="url(#paint0_linear_1097_1478)" fill-opacity="0.3"/>
																<defs>
																<linearGradient id="paint0_linear_1097_1478" x1="385.35" y1="-193.809" x2="385.35" y2="140.599" gradientUnits="userSpaceOnUse">
																<stop stop-color="#0E41C1" stop-opacity="0.870588"/>
																<stop offset="1" stop-color="#0E41C1" stop-opacity="0.870588"/>
																</linearGradient>
																</defs>
															</svg>
														</div>
												    </div>
													<!--end::Table Widget 9-->
													
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-xl-4 mb-5 mb-xl-10">
													<!--begin::Table widget 10-->
													<div class="card card-flush shadow-xs h-xl-100">
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
									<div class="row g-2 gx-xl-10">
										<!--begin::Col-->
										<div class="col-xl-4 mb-5 mb-xl-10">
											<!--begin::Table widget 9-->
											<div class="card card-flush shadow-xs">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">SMS Summary</span>
														<p class="gray fs-12 pt-1">From 1-6 Dec, 2020</p>
													</h3>
													
													<!--end::Title-->
													<!--begin::button-->
													<div class="card-toolbar">
														<a href="#" class="btn btn-primary btn-grad">View Report</a>
													</div>
													<!--end::button-->
												</div>
												<!--end::Header-->
												<div class="d-flex justify-content-center pt-5 mt-5">
														<svg width="153" height="148" viewBox="0 0 153 148" fill="none" xmlns="http://www.w3.org/2000/svg">
															<ellipse cx="76.4999" cy="74" rx="64.332" ry="62" stroke="#FFC700" stroke-width="24"/>
															<path d="M76.4991 12C112.029 12 140.831 39.7583 140.831 74C140.831 108.242 112.029 136 76.4991 136C47.8464 136 23.5688 117.947 15.2441 93" stroke="#DFDFDF" stroke-width="24"/>
															<path d="M76.5 12C112.03 12 140.832 39.7583 140.832 74C140.832 94.2841 130.725 112.293 115.099 123.605" stroke="url(#paint0_linear_943_46554)" stroke-width="24"/>
															<defs>
															<linearGradient id="paint0_linear_943_46554" x1="108.666" y1="12" x2="108.666" y2="123.605" gradientUnits="userSpaceOnUse">
															<stop stop-color="#0E41C1" stop-opacity="0.870588"/>
															<stop offset="1" stop-color="#0047FF" stop-opacity="0.870588"/>
															</linearGradient>
															</defs>
														</svg>
												</div>
												<div class="row justify-content-center p-3 mt-5 pb-5">
															<div class="col-lg-4 d-flex justify-content-center pt-5">
																<h6 class=" align-items-start flex-column">
																	<span class=" fw-bold text-gray-800">
																		<svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<ellipse cx="5.5" cy="4.5" rx="5" ry="4.5" fill="#DFDFDF"/>
																			<defs>
																			<linearGradient id="paint0_linear_943_46551" x1="5.5" y1="0" x2="5.5" y2="9" gradientUnits="userSpaceOnUse">
																			<stop stop-color="#0E41C1" stop-opacity="0.870588"/>
																			<stop offset="1" stop-color="#0047FF" stop-opacity="0.870588"/>
																			</linearGradient>
																			</defs>
																		</svg>
																		Undelivered
																	</span>
																	<span class="gray ps-5 pt-2">40%</span>
																</h6>
															</div>
															<div class="col-lg-4 d-flex justify-content-center pt-5">
																<h6 class=" align-items-start flex-column d-flex">
																	<span class=" fw-bold text-gray-800">
																	<svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<ellipse cx="5.5" cy="4.5" rx="5" ry="4.5" fill="#FFC700"/>
																		<defs>
																		<linearGradient id="paint0_linear_943_46551" x1="5.5" y1="0" x2="5.5" y2="9" gradientUnits="userSpaceOnUse">
																		<stop stop-color="#0E41C1" stop-opacity="0.870588"/>
																		<stop offset="1" stop-color="#0047FF" stop-opacity="0.870588"/>
																		</linearGradient>
																		</defs>
																	</svg>
																		Pending
																	</span>
																	<span class="gray ps-5">32%</span>
																</h6>
															</div>
															<div class="col-lg-4 d-flex justify-content-center pt-5">
																<h6 class="align-items-start flex-column">
																	<span class=" fw-bold text-gray-800">
																	    <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<ellipse cx="5.5" cy="4.5" rx="5" ry="4.5" fill="url(#paint0_linear_943_46551)"/>
																				<defs>
																				<linearGradient id="paint0_linear_943_46551" x1="5.5" y1="0" x2="5.5" y2="9" gradientUnits="userSpaceOnUse">
																				<stop stop-color="#0E41C1" stop-opacity="0.870588"/>
																				<stop offset="1" stop-color="#0047FF" stop-opacity="0.870588"/>
																				</linearGradient>
																				</defs>
																		</svg>
																		Delivered
																	</span>
																	<span class="gray ps-5">28%</span>
																</h6>
															</div>
												</div>
											</div>
											<!--end::Table Widget 9-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-8 mb-5 mb-xl-10">
											<!--begin::Table widget 10-->
											<div class="card card-flush shadow-xs">
												<div class="row gx-xl-10 p-5">
													<div class="col-xl-4 mb-5 ">
														<!--begin::Header-->
														<div class="p-5">
															<!--begin::Title-->
															<h2 class=" fw-bold text-gray-800">
																Upgrade your plan now!
															</h2>
															<!--end::Title-->
															<p class="fs-14 mt-5 gray pt-2">
																You don’t have to take our word for anything. Here, Try it now.
															</p>
														</div>
															<!--begin::button-->
															<div class="">
																<a href="#" class="btn btn-primary btn-grad ">Upgrade now</a>
															</div>
															<!--end::button-->
													</div>
													<div class="col-xl-7 mb-5 offset-1">
														<div class="text-center text-xl-center d-flex justify-content-end">
															<img src="assets/img/home/Image.webp" height="250" alt="" />
														</div>
													</div>
												</div>
											</div>
											<!--end::Table Widget 10-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
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