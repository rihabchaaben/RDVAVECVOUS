<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Metronic | Dashboard</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->
		<link href="../assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Page Vendors Styles -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="../assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="../assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/custom/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="../assets/demo/demo9/base/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="../assets/media/logos/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-page--loading-enabled kt-page--loading kt-page--fixed kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--left kt-aside--fixed kt-page--loading">

		<!-- begin::Page loader -->

		<!-- end::Page Loader -->

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="index.html">
					<img alt="Logo" src="../assets/media/logos/logo-9-sm.png" />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
			</div>
		</div>

		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header  kt-header--fixed " data-ktheader-minimize="on">
						<div class="kt-container kt-container--fluid">

							<!-- begin: Header Menu -->
							<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
							<div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_header_menu_wrapper">
								<button class="kt-aside-toggler kt-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
								<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
									<ul class="kt-menu__nav ">
										<li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Dashboard</span><i class="kt-menu__hor-arrow la la-angle-down"></i></a>
											<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
												<ul class="kt-menu__subnav">
													<li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="index.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Default Dashboard</span></a></li>
													<li class="kt-menu__item " aria-haspopup="true"><a href="dashboards_fluid.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Fluid Dashboard</span></a></li>
													<li class="kt-menu__item " aria-haspopup="true"><a href="dashboards_aside.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Aside Dashboard</span></a></li>
												</ul>
											</div>
										</li>
										<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Pages</span><i class="kt-menu__hor-arrow la la-angle-down"></i></a>
											<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
												<ul class="kt-menu__subnav">
													<li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Create New Post</span></a></li>
													<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Generate Reports</span><span class="kt-menu__link-badge"><span class="kt-badge kt-badge--success">2</span></span></a></li>
													<li class="kt-menu__item  kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="#" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Manage Orders</span><i class="kt-menu__hor-arrow la la-angle-right"></i></a>
														<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
															<ul class="kt-menu__subnav">
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Latest Orders</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Pending Orders</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Processed Orders</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Delivery Reports</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Payments</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Customers</span></a></li>
															</ul>
														</div>
													</li>
													<li class="kt-menu__item  kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="#" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Customer Feedbacks</span><i class="kt-menu__hor-arrow la la-angle-right"></i></a>
														<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
															<ul class="kt-menu__subnav">
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Customer Feedbacks</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Supplier Feedbacks</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Reviewed Feedbacks</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Resolved Feedbacks</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Feedback Reports</span></a></li>
															</ul>
														</div>
													</li>
													<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Register Member</span></a></li>
												</ul>
											</div>
										</li>
										<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Reports</span><i class="kt-menu__hor-arrow la la-angle-down"></i></a>
											<div class="kt-menu__submenu  kt-menu__submenu--fixed kt-menu__submenu--left" style="width:1000px">
												<div class="kt-menu__subnav">
													<ul class="kt-menu__content">
														<li class="kt-menu__item ">
															<h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Finance Reports</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3>
															<ul class="kt-menu__inner">
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-map"></i><span class="kt-menu__link-text">Annual Reports</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-user"></i><span class="kt-menu__link-text">HR Reports</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-clipboard"></i><span class="kt-menu__link-text">IPO Reports</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-graphic-1"></i><span class="kt-menu__link-text">Finance Margins</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-graphic-2"></i><span class="kt-menu__link-text">Revenue Reports</span></a></li>
															</ul>
														</li>
														<li class="kt-menu__item ">
															<h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Project Reports</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3>
															<ul class="kt-menu__inner">
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Coca Cola CRM</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Delta Airlines Booking Site</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Malibu Accounting</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Vineseed Website Rewamp</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Zircon Mobile App</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Mercury CMS</span></a></li>
															</ul>
														</li>
														<li class="kt-menu__item ">
															<h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">HR Reports</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3>
															<ul class="kt-menu__inner">
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Staff Directory</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Client Directory</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Salary Reports</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Staff Payslips</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Corporate Expenses</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Project Expenses</span></a></li>
															</ul>
														</li>
														<li class="kt-menu__item ">
															<h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Reporting Apps</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3>
															<ul class="kt-menu__inner">
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Report Adjusments</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Sources & Mediums</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Reporting Settings</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Conversions</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Report Flows</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Audit & Logs</span></a></li>
															</ul>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Apps</span><i class="kt-menu__hor-arrow la la-angle-down"></i></a>
											<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
												<ul class="kt-menu__subnav">
													<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">eCommerce</span></a></li>
													<li class="kt-menu__item  kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="#" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Audience</span><i class="kt-menu__hor-arrow la la-angle-right"></i></a>
														<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
															<ul class="kt-menu__subnav">
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-users"></i><span class="kt-menu__link-text">Active Users</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-interface-1"></i><span class="kt-menu__link-text">User Explorer</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-lifebuoy"></i><span class="kt-menu__link-text">Users Flows</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-graphic-1"></i><span class="kt-menu__link-text">Market Segments</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-graphic"></i><span class="kt-menu__link-text">User Reports</span></a></li>
															</ul>
														</div>
													</li>
													<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Marketing</span></a></li>
													<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Campaigns</span><span class="kt-menu__link-badge"><span class="kt-badge kt-badge--success">3</span></span></a></li>
													<li class="kt-menu__item  kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="#" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Cloud Manager</span><i class="kt-menu__hor-arrow la la-angle-right"></i></a>
														<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
															<ul class="kt-menu__subnav">
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-add"></i><span class="kt-menu__link-text">File Upload</span><span class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">3</span></span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-signs-1"></i><span class="kt-menu__link-text">File Attributes</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-folder"></i><span class="kt-menu__link-text">Folders</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-cogwheel-2"></i><span class="kt-menu__link-text">System Settings</span></a></li>
															</ul>
														</div>
													</li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<!-- end: Header Menu -->

							<!-- begin:: Brand -->
							<div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
								<a class="kt-header__brand-logo" href="index.html">
									<img alt="Logo" src="../assets/media/logos/logo-9.png" />
								</a>
							</div>

							<!-- end:: Brand -->

							<!-- begin:: Header Topbar -->
							<div class="kt-header__topbar kt-grid__item">

								<!--begin: Search -->
								<div class="kt-header__topbar-item kt-header__topbar-item--search dropdown" id="kt_quick_search_toggle">
									<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
										<span class="kt-header__topbar-icon"><i class="flaticon2-search-1"></i></span>
									</div>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
										<div class="kt-quick-search kt-quick-search--inline" id="kt_quick_search_inline">
											<form method="get" class="kt-quick-search__form">
												<div class="input-group">
													<div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
													<input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
													<div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
												</div>
											</form>
											<div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
											</div>
										</div>
									</div>
								</div>

								<!--end: Search -->

								<!--begin: Notifications -->
								<div class="kt-header__topbar-item dropdown">
									<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
										<span class="kt-header__topbar-icon"><i class="flaticon2-bell-alarm-symbol"></i></span>
										<span class="kt-badge kt-badge--danger"></span>
									</div>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
										<form>

											<!--begin: Head -->
											<div class="kt-head kt-head--skin-light kt-head--fit-x kt-head--fit-b">
												<h3 class="kt-head__title">
													User Notifications
													&nbsp;
													<span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 new</span>
												</h3>
												<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
													<li class="nav-item">
														<a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications" role="tab" aria-selected="true">Alerts</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#topbar_notifications_events" role="tab" aria-selected="false">Events</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs" role="tab" aria-selected="false">Logs</a>
													</li>
												</ul>
											</div>

											<!--end: Head -->
											<div class="tab-content">
												<div class="tab-pane active show" id="topbar_notifications_notifications" role="tabpanel">
													<div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-line-chart kt-font-success"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New order has been received
																</div>
																<div class="kt-notification__item-time">
																	2 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-box-1 kt-font-brand"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New customer is registered
																</div>
																<div class="kt-notification__item-time">
																	3 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-chart2 kt-font-danger"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Application has been approved
																</div>
																<div class="kt-notification__item-time">
																	3 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-image-file kt-font-warning"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New file has been uploaded
																</div>
																<div class="kt-notification__item-time">
																	5 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-bar-chart kt-font-info"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New user feedback received
																</div>
																<div class="kt-notification__item-time">
																	8 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-pie-chart-2 kt-font-success"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	System reboot has been successfully completed
																</div>
																<div class="kt-notification__item-time">
																	12 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-favourite kt-font-danger"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New order has been placed
																</div>
																<div class="kt-notification__item-time">
																	15 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item kt-notification__item--read">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-safe kt-font-primary"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Company meeting canceled
																</div>
																<div class="kt-notification__item-time">
																	19 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-psd kt-font-success"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New report has been received
																</div>
																<div class="kt-notification__item-time">
																	23 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon-download-1 kt-font-danger"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Finance report has been generated
																</div>
																<div class="kt-notification__item-time">
																	25 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon-security kt-font-warning"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New customer comment recieved
																</div>
																<div class="kt-notification__item-time">
																	2 days ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-pie-chart kt-font-success"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New customer is registered
																</div>
																<div class="kt-notification__item-time">
																	3 days ago
																</div>
															</div>
														</a>
													</div>
												</div>
												<div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
													<div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-psd kt-font-success"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New report has been received
																</div>
																<div class="kt-notification__item-time">
																	23 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon-download-1 kt-font-danger"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Finance report has been generated
																</div>
																<div class="kt-notification__item-time">
																	25 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-line-chart kt-font-success"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New order has been received
																</div>
																<div class="kt-notification__item-time">
																	2 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-box-1 kt-font-brand"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New customer is registered
																</div>
																<div class="kt-notification__item-time">
																	3 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-chart2 kt-font-danger"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Application has been approved
																</div>
																<div class="kt-notification__item-time">
																	3 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-image-file kt-font-warning"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New file has been uploaded
																</div>
																<div class="kt-notification__item-time">
																	5 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-bar-chart kt-font-info"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New user feedback received
																</div>
																<div class="kt-notification__item-time">
																	8 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-pie-chart-2 kt-font-success"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	System reboot has been successfully completed
																</div>
																<div class="kt-notification__item-time">
																	12 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-favourite kt-font-brand"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New order has been placed
																</div>
																<div class="kt-notification__item-time">
																	15 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item kt-notification__item--read">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-safe kt-font-primary"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Company meeting canceled
																</div>
																<div class="kt-notification__item-time">
																	19 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-psd kt-font-success"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New report has been received
																</div>
																<div class="kt-notification__item-time">
																	23 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon-download-1 kt-font-danger"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Finance report has been generated
																</div>
																<div class="kt-notification__item-time">
																	25 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon-security kt-font-warning"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New customer comment recieved
																</div>
																<div class="kt-notification__item-time">
																	2 days ago
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<i class="flaticon2-pie-chart kt-font-success"></i>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New customer is registered
																</div>
																<div class="kt-notification__item-time">
																	3 days ago
																</div>
															</div>
														</a>
													</div>
												</div>
												<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
													<div class="kt-grid kt-grid--ver" style="min-height: 200px;">
														<div class="kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle">
															<div class="kt-grid__item kt-grid__item--middle kt-align-center">
																All caught up!
																<br>No new notifications.
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>

								<!--end: Notifications -->

								<!--begin: Quick actions -->
								<div class="kt-header__topbar-item dropdown">
									<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
										<span class="kt-header__topbar-icon"><i class="flaticon2-gear"></i></span>
									</div>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
										<form>

											<!--begin: Head -->
											<div class="kt-head kt-head--skin-light">
												<h3 class="kt-head__title">
													User Quick Actions
													<span class="kt-space-15"></span>
													<span class="btn btn-success btn-sm btn-bold btn-font-md">23 tasks pending</span>
												</h3>
											</div>

											<!--end: Head -->

											<!--begin: Grid Nav -->
											<div class="kt-grid-nav kt-grid-nav--skin-light">
												<div class="kt-grid-nav__row">
													<a href="#" class="kt-grid-nav__item">
														<span class="kt-grid-nav__icon">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect id="bound" x="0" y="0" width="24" height="24" />
																	<path d="M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
																	<path d="M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z" id="C" fill="#000000" />
																</g>
															</svg> </span>
														<span class="kt-grid-nav__title">Accounting</span>
														<span class="kt-grid-nav__desc">eCommerce</span>
													</a>
													<a href="#" class="kt-grid-nav__item">
														<span class="kt-grid-nav__icon">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect id="bound" x="0" y="0" width="24" height="24" />
																	<path d="M14.8571499,13 C14.9499122,12.7223297 15,12.4263059 15,12.1190476 L15,6.88095238 C15,5.28984632 13.6568542,4 12,4 L11.7272727,4 C10.2210416,4 9,5.17258756 9,6.61904762 L10.0909091,6.61904762 C10.0909091,5.75117158 10.823534,5.04761905 11.7272727,5.04761905 L12,5.04761905 C13.0543618,5.04761905 13.9090909,5.86843034 13.9090909,6.88095238 L13.9090909,12.1190476 C13.9090909,12.4383379 13.8240964,12.7385644 13.6746497,13 L10.3253503,13 C10.1759036,12.7385644 10.0909091,12.4383379 10.0909091,12.1190476 L10.0909091,9.5 C10.0909091,9.06606198 10.4572216,8.71428571 10.9090909,8.71428571 C11.3609602,8.71428571 11.7272727,9.06606198 11.7272727,9.5 L11.7272727,11.3333333 L12.8181818,11.3333333 L12.8181818,9.5 C12.8181818,8.48747796 11.9634527,7.66666667 10.9090909,7.66666667 C9.85472911,7.66666667 9,8.48747796 9,9.5 L9,12.1190476 C9,12.4263059 9.0500878,12.7223297 9.14285008,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L14.8571499,13 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
																	<path d="M9,10.3333333 L9,12.1190476 C9,13.7101537 10.3431458,15 12,15 C13.6568542,15 15,13.7101537 15,12.1190476 L15,10.3333333 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9,10.3333333 Z M10.0909091,11.1212121 L12,12.5 L13.9090909,11.1212121 L13.9090909,12.1190476 C13.9090909,13.1315697 13.0543618,13.952381 12,13.952381 C10.9456382,13.952381 10.0909091,13.1315697 10.0909091,12.1190476 L10.0909091,11.1212121 Z" id="Combined-Shape" fill="#000000" />
																</g>
															</svg> </span>
														<span class="kt-grid-nav__title">Administration</span>
														<span class="kt-grid-nav__desc">Console</span>
													</a>
												</div>
												<div class="kt-grid-nav__row">
													<a href="#" class="kt-grid-nav__item">
														<span class="kt-grid-nav__icon">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect id="bound" x="0" y="0" width="24" height="24" />
																	<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" id="Combined-Shape" fill="#000000" />
																	<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" id="Path" fill="#000000" opacity="0.3" />
																</g>
															</svg> </span>
														<span class="kt-grid-nav__title">Projects</span>
														<span class="kt-grid-nav__desc">Pending Tasks</span>
													</a>
													<a href="#" class="kt-grid-nav__item">
														<span class="kt-grid-nav__icon">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon id="Shape" points="0 0 24 0 24 24 0 24" />
																	<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" />
																</g>
															</svg> </span>
														<span class="kt-grid-nav__title">Customers</span>
														<span class="kt-grid-nav__desc">Latest cases</span>
													</a>
												</div>
											</div>

											<!--end: Grid Nav -->
										</form>
									</div>
								</div>

								<!--end: Quick actions -->

								<!--begin: Cart -->
								<div class="kt-header__topbar-item dropdown">
									<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px" aria-expanded="true">
										<span class="kt-header__topbar-icon"><i class="flaticon2-shopping-cart-1"></i></span>
									</div>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
										<form>

											<!-- begin:: Mycart -->
											<div class="kt-mycart">
												<div class="kt-mycart__head kt-head" style="background-image: url(../assets/media/misc/bg-1.jpg);">
													<div class="kt-mycart__info">
														<span class="kt-mycart__icon"><i class="flaticon2-shopping-cart-1 kt-font-success"></i></span>
														<h3 class="kt-mycart__title">My Cart</h3>
													</div>
													<div class="kt-mycart__button">
														<button type="button" class="btn btn-success btn-sm" style=" ">2 Items</button>
													</div>
												</div>
												<div class="kt-mycart__body kt-scroll" data-scroll="true" data-height="245" data-mobile-height="200">
													<div class="kt-mycart__item">
														<div class="kt-mycart__container">
															<div class="kt-mycart__info">
																<a href="#" class="kt-mycart__title">
																	Samsung
																</a>
																<span class="kt-mycart__desc">
																	Profile info, Timeline etc
																</span>
																<div class="kt-mycart__action">
																	<span class="kt-mycart__price">$ 450</span>
																	<span class="kt-mycart__text">for</span>
																	<span class="kt-mycart__quantity">7</span>
																	<a href="#" class="btn btn-label-success btn-icon">&minus;</a>
																	<a href="#" class="btn btn-label-success btn-icon">&plus;</a>
																</div>
															</div>
															<a href="#" class="kt-mycart__pic">
																<img src="../assets/media/products/product9.jpg" title="">
															</a>
														</div>
													</div>
													<div class="kt-mycart__item">
														<div class="kt-mycart__container">
															<div class="kt-mycart__info">
																<a href="#" class="kt-mycart__title">
																	Panasonic
																</a>
																<span class="kt-mycart__desc">
																	For PHoto & Others
																</span>
																<div class="kt-mycart__action">
																	<span class="kt-mycart__price">$ 329</span>
																	<span class="kt-mycart__text">for</span>
																	<span class="kt-mycart__quantity">1</span>
																	<a href="#" class="btn btn-label-success btn-icon">&minus;</a>
																	<a href="#" class="btn btn-label-success btn-icon">&plus;</a>
																</div>
															</div>
															<a href="#" class="kt-mycart__pic">
																<img src="../assets/media/products/product13.jpg" title="">
															</a>
														</div>
													</div>
													<div class="kt-mycart__item">
														<div class="kt-mycart__container">
															<div class="kt-mycart__info">
																<a href="#" class="kt-mycart__title">
																	Fujifilm
																</a>
																<span class="kt-mycart__desc">
																	Profile info, Timeline etc
																</span>
																<div class="kt-mycart__action">
																	<span class="kt-mycart__price">$ 520</span>
																	<span class="kt-mycart__text">for</span>
																	<span class="kt-mycart__quantity">6</span>
																	<a href="#" class="btn btn-label-success btn-icon">&minus;</a>
																	<a href="#" class="btn btn-label-success btn-icon">&plus;</a>
																</div>
															</div>
															<a href="#" class="kt-mycart__pic">
																<img src="../assets/media/products/product16.jpg" title="">
															</a>
														</div>
													</div>
													<div class="kt-mycart__item">
														<div class="kt-mycart__container">
															<div class="kt-mycart__info">
																<a href="#" class="kt-mycart__title">
																	Candy Machine
																</a>
																<span class="kt-mycart__desc">
																	For PHoto & Others
																</span>
																<div class="kt-mycart__action">
																	<span class="kt-mycart__price">$ 784</span>
																	<span class="kt-mycart__text">for</span>
																	<span class="kt-mycart__quantity">4</span>
																	<a href="#" class="btn btn-label-success btn-icon">&minus;</a>
																	<a href="#" class="btn btn-label-success btn-icon">&plus;</a>
																</div>
															</div>
															<a href="#" class="kt-mycart__pic">
																<img src="../assets/media/products/product15.jpg" title="" alt="">
															</a>
														</div>
													</div>
												</div>
												<div class="kt-mycart__footer">
													<div class="kt-mycart__section">
														<div class="kt-mycart__subtitel">
															<span>Sub Total</span>
															<span>Taxes</span>
															<span>Total</span>
														</div>
														<div class="kt-mycart__prices">
															<span>$ 840.00</span>
															<span>$ 72.00</span>
															<span class="kt-font-brand">$ 912.00</span>
														</div>
													</div>
													<div class="kt-mycart__button kt-align-right">
														<button type="button" class="btn btn-primary btn-sm">Place Order</button>
													</div>
												</div>
											</div>

											<!-- end:: Mycart -->
										</form>
									</div>
								</div>

								<!--end: Cart -->

								<!--begin: Language bar -->
								<div class="kt-header__topbar-item kt-header__topbar-item--langs">
									<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
										<span class="kt-header__topbar-icon">
											<img class="" src="../assets/media/flags/020-flag.svg" alt="" />
										</span>
									</div>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim">
										<ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
											<li class="kt-nav__item kt-nav__item--active">
												<a href="#" class="kt-nav__link">
													<span class="kt-nav__link-icon"><img src="../assets/media/flags/020-flag.svg" alt="" /></span>
													<span class="kt-nav__link-text">English</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
													<span class="kt-nav__link-icon"><img src="../assets/media/flags/016-spain.svg" alt="" /></span>
													<span class="kt-nav__link-text">Spanish</span>
												</a>
											</li>
											<li class="kt-nav__item">
												<a href="#" class="kt-nav__link">
													<span class="kt-nav__link-icon"><img src="../assets/media/flags/017-germany.svg" alt="" /></span>
													<span class="kt-nav__link-text">German</span>
												</a>
											</li>
										</ul>
									</div>
								</div>

								<!--end: Language bar -->

								<!--begin: User bar -->
								<div class="kt-header__topbar-item kt-header__topbar-item--user">
									<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
										<span class="kt-header__topbar-welcome kt-visible-desktop">Hi,</span>
										<span class="kt-header__topbar-username kt-visible-desktop">Nick</span>
										<img alt="Pic" src="../assets/media/users/300_21.jpg" />

										<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
										<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
									</div>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

										<!--begin: Head -->
										<div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
											<div class="kt-user-card__avatar">
												<img class="kt-hidden-" alt="Pic" src="../assets/media/users/300_25.jpg" />

												<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
												<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
											</div>
											<div class="kt-user-card__name">
												Sean Stone
											</div>
											<div class="kt-user-card__badge">
												<span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 messages</span>
											</div>
										</div>

										<!--end: Head -->

										<!--begin: Navigation -->
										<div class="kt-notification">
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-calendar-3 kt-font-success"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title kt-font-bold">
														My Profile
													</div>
													<div class="kt-notification__item-time">
														Account settings and more
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-mail kt-font-warning"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title kt-font-bold">
														My Messages
													</div>
													<div class="kt-notification__item-time">
														Inbox and tasks
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-rocket-1 kt-font-danger"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title kt-font-bold">
														My Activities
													</div>
													<div class="kt-notification__item-time">
														Logs and notifications
													</div>
												</div>
											</a>
											<a href="#" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-hourglass kt-font-brand"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title kt-font-bold">
														My Tasks
													</div>
													<div class="kt-notification__item-time">
														latest tasks and projects
													</div>
												</div>
											</a>
											<div class="kt-notification__custom">
												<a href="custom_user_login-v2.html" target="_blank" class="btn btn-label-brand btn-sm btn-bold">Sign Out</a>
											</div>
										</div>

										<!--end: Navigation -->
									</div>
								</div>

								<!--end: User bar -->

								<!--begin: Quick panel toggler -->
								<div class="kt-header__topbar-item" data-toggle="kt-tooltip" title="Quick panel" data-placement="top">
									<div class="kt-header__topbar-wrapper">
										<span class="kt-header__topbar-icon" id="kt_quick_panel_toggler_btn"><i class="flaticon2-cube-1"></i></span>
									</div>
								</div>

								<!--end: Quick panel toggler -->
							</div>

							<!-- end:: Header Topbar -->
						</div>
					</div>

					<!-- end:: Header -->
					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch">
						<div class="kt-container kt-body  kt-grid kt-grid--ver" id="kt_body">

							<!-- begin:: Aside -->
							<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
							<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

								<!-- begin:: Aside Menu -->
								<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
									<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1">
										<ul class="kt-menu__nav ">
											<li class="kt-menu__item " aria-haspopup="true"><a target="_blank" href="https://keenthemes.com/metronic/preview/demo9/builder.html" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-cog"></i><span class="kt-menu__link-text">Layout Builder</span></a></li>
											<li class="kt-menu__section ">
												<h4 class="kt-menu__section-text">Components</h4>
												<i class="kt-menu__section-icon flaticon-more-v2"></i>
											</li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-database"></i><span class="kt-menu__link-text">Datatables</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-cube"></i><span class="kt-menu__link-text">Buttons</span></a></li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon fa fa-dolly"></i><span class="kt-menu__link-text">Portlets</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Portlets</span></span></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Block UI</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Perfect Scroll</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Toastr</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">SweetAlert2</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Session Timeout</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Idle Timer</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-fill"></i><span class="kt-menu__link-text">Timeline</span></a></li>
											<li class="kt-menu__section ">
												<h4 class="kt-menu__section-text">Page Elements</h4>
												<i class="kt-menu__section-icon flaticon-more-v2"></i>
											</li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-images"></i><span class="kt-menu__link-text">Widgets</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-layer-group"></i><span class="kt-menu__link-text">Calendars</span></a></li>
											<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon fa fa-table"></i><span class="kt-menu__link-text">Prising Tables</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
													<ul class="kt-menu__subnav">
														<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Prising Tables</span></span></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Base</span></a></li>
														<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Draggable</span></a></li>
													</ul>
												</div>
											</li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-poll"></i><span class="kt-menu__link-text">Invoice</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-coins"></i><span class="kt-menu__link-text">Custom Pages</span></a></li>
										</ul>
									</div>
								</div>

								<!-- end:: Aside Menu -->
							</div>

							<!-- end:: Aside -->
							<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

								<!-- begin:: Subheader -->
								<div class="kt-subheader   kt-grid__item" id="kt_subheader">
									<div class="kt-subheader__main">
										<h3 class="kt-subheader__title">
											Dashboard </h3>
										<span class="kt-subheader__separator kt-hidden"></span>
										<div class="kt-subheader__breadcrumbs">
											<a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
											<span class="kt-subheader__breadcrumbs-separator"></span>
											<a href="" class="kt-subheader__breadcrumbs-link">
												Dashboard </a>
											<span class="kt-subheader__breadcrumbs-separator"></span>
											<a href="" class="kt-subheader__breadcrumbs-link">
												Default Dashboard </a>

											<!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
										</div>
									</div>
									<div class="kt-subheader__toolbar">
										<div class="kt-subheader__wrapper">
											<a href="#" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker" data-toggle="kt-tooltip" title="Select dashboard daterange" data-placement="left">
												<span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Today</span>&nbsp;
												<span class="kt-subheader__btn-daterange-date" id="kt_dashboard_daterangepicker_date">Aug 16</span>

												<!--<i class="flaticon2-calendar-1"></i>-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--sm">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect id="bound" x="0" y="0" width="24" height="24" />
														<path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" id="check" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" id="Combined-Shape" fill="#000000" />
													</g>
												</svg> </a>
											<div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions" data-placement="left">
												<a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon id="Shape" points="0 0 24 0 24 24 0 24" />
															<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3" />
															<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" id="Combined-Shape" fill="#000000" />
														</g>
													</svg>

													<!--<i class="flaticon2-plus"></i>-->
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<ul class="kt-nav">
														<li class="kt-nav__section kt-nav__section--first">
															<span class="kt-nav__section-text">Add new:</span>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-graph-1"></i>
																<span class="kt-nav__link-text">Order</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-calendar-4"></i>
																<span class="kt-nav__link-text">Event</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-layers-1"></i>
																<span class="kt-nav__link-text">Report</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-calendar-4"></i>
																<span class="kt-nav__link-text">Post</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-file-1"></i>
																<span class="kt-nav__link-text">File</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- end:: Subheader -->

								<!-- begin:: Content -->
								<div class="kt-content kt-grid__item kt-grid__item--fluid">

									<!--Begin::Dashboard 1-->

									<!--Begin::Section-->
									<div class="row">
										<div class="col-xl-4">

											<!--begin:: Widgets/Activity-->
											<div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--skin-solid kt-portlet--height-fluid">
												<div class="kt-portlet__head kt-portlet__head--noborder kt-portlet__space-x">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Activity
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<a href="#" class="btn btn-label-light btn-sm btn-bold dropdown-toggle" data-toggle="dropdown">
															Export
														</a>
														<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
															<ul class="kt-nav">
																<li class="kt-nav__section kt-nav__section--first">
																	<span class="kt-nav__section-text">Finance</span>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-graph-1"></i>
																		<span class="kt-nav__link-text">Statistics</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-calendar-4"></i>
																		<span class="kt-nav__link-text">Events</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-layers-1"></i>
																		<span class="kt-nav__link-text">Reports</span>
																	</a>
																</li>
																<li class="kt-nav__section kt-nav__section--first">
																	<span class="kt-nav__section-text">HR</span>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-calendar-4"></i>
																		<span class="kt-nav__link-text">Notifications</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-file-1"></i>
																		<span class="kt-nav__link-text">Files</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="kt-portlet__body kt-portlet__body--fit">
													<div class="kt-widget17">
														<div class="kt-widget17__visual kt-widget17__visual--chart kt-portlet-fit--top kt-portlet-fit--sides" style="background-color: #fd397a">
															<div class="kt-widget17__chart" style="height:320px;">
																<canvas id="kt_chart_activities"></canvas>
															</div>
														</div>
														<div class="kt-widget17__stats">
															<div class="kt-widget17__items">
																<div class="kt-widget17__item">
																	<span class="kt-widget17__icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" id="Combined-Shape" fill="#000000" />
																				<rect id="Rectangle-Copy-2" fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																			</g>
																		</svg> </span>
																	<span class="kt-widget17__subtitle">
																		Delivered
																	</span>
																	<span class="kt-widget17__desc">
																		15 New Paskages
																	</span>
																</div>
																<div class="kt-widget17__item">
																	<span class="kt-widget17__icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon id="Bound" points="0 0 24 0 24 24 0 24" />
																				<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" id="Shape" fill="#000000" fill-rule="nonzero" />
																				<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" id="Path" fill="#000000" opacity="0.3" />
																			</g>
																		</svg> </span>
																	<span class="kt-widget17__subtitle">
																		Ordered
																	</span>
																	<span class="kt-widget17__desc">
																		72 New Items
																	</span>
																</div>
															</div>
															<div class="kt-widget17__items">
																<div class="kt-widget17__item">
																	<span class="kt-widget17__icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
																				<path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" id="Combined-Shape" fill="#000000" />
																			</g>
																		</svg> </span>
																	<span class="kt-widget17__subtitle">
																		Reported
																	</span>
																	<span class="kt-widget17__desc">
																		72 Support Cases
																	</span>
																</div>
																<div class="kt-widget17__item">
																	<span class="kt-widget17__icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
																				<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" id="Rectangle-102-Copy" fill="#000000" />
																			</g>
																		</svg> </span>
																	<span class="kt-widget17__subtitle">
																		Arrived
																	</span>
																	<span class="kt-widget17__desc">
																		34 Upgraded Boxes
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Activity-->
										</div>
										<div class="col-xl-4">

											<!--begin:: Widgets/Inbound Bandwidth-->
											<div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet--height-fluid-half">
												<div class="kt-portlet__head kt-portlet__space-x">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Inbound Bandwidth
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<a href="#" class="btn btn-label-success btn-sm btn-bold dropdown-toggle" data-toggle="dropdown">
															Export
														</a>
														<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
															<ul class="kt-nav">
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																		<span class="kt-nav__link-text">Reports</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-send"></i>
																		<span class="kt-nav__link-text">Messages</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																		<span class="kt-nav__link-text">Charts</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-avatar"></i>
																		<span class="kt-nav__link-text">Members</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-settings"></i>
																		<span class="kt-nav__link-text">Settings</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="kt-portlet__body kt-portlet__body--fluid">
													<div class="kt-widget20">
														<div class="kt-widget20__content kt-portlet__space-x">
															<span class="kt-widget20__number kt-font-brand">670+</span>
															<span class="kt-widget20__desc">Successful transactions</span>
														</div>
														<div class="kt-widget20__chart" style="height:130px;">
															<canvas id="kt_chart_bandwidth1"></canvas>
														</div>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Inbound Bandwidth-->
											<div class="kt-space-20"></div>

											<!--begin:: Widgets/Outbound Bandwidth-->
											<div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet--height-fluid-half">
												<div class="kt-portlet__head kt-portlet__space-x">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Outbound Bandwidth
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<a href="#" class="btn btn-label-warning btn-sm  btn-bold dropdown-toggle" data-toggle="dropdown">
															Download
														</a>
														<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
															<ul class="kt-nav">
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																		<span class="kt-nav__link-text">Reports</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-send"></i>
																		<span class="kt-nav__link-text">Messages</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																		<span class="kt-nav__link-text">Charts</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-avatar"></i>
																		<span class="kt-nav__link-text">Members</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-settings"></i>
																		<span class="kt-nav__link-text">Settings</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="kt-portlet__body kt-portlet__body--fluid">
													<div class="kt-widget20">
														<div class="kt-widget20__content kt-portlet__space-x">
															<span class="kt-widget20__number kt-font-danger">1340+</span>
															<span class="kt-widget20__desc">Completed orders</span>
														</div>
														<div class="kt-widget20__chart" style="height:130px;">
															<canvas id="kt_chart_bandwidth2"></canvas>
														</div>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Outbound Bandwidth-->
										</div>
										<div class="col-xl-4">

											<!--Begin::Portlet-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Recent Activities
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<div class="dropdown dropdown-inline">
															<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<i class="flaticon-more-1"></i>
															</button>
															<div class="dropdown-menu dropdown-menu-right">
																<ul class="kt-nav">
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																			<span class="kt-nav__link-text">Reports</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon flaticon2-send"></i>
																			<span class="kt-nav__link-text">Messages</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																			<span class="kt-nav__link-text">Charts</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon flaticon2-avatar"></i>
																			<span class="kt-nav__link-text">Members</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon flaticon2-settings"></i>
																			<span class="kt-nav__link-text">Settings</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<div class="kt-portlet__body">

													<!--Begin::Timeline 3 -->
													<div class="kt-timeline-v2">
														<div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
															<div class="kt-timeline-v2__item">
																<span class="kt-timeline-v2__item-time">10:00</span>
																<div class="kt-timeline-v2__item-cricle">
																	<i class="fa fa-genderless kt-font-danger"></i>
																</div>
																<div class="kt-timeline-v2__item-text  kt-padding-top-5">
																	Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
																	incididunt ut labore et dolore magna
																</div>
															</div>
															<div class="kt-timeline-v2__item">
																<span class="kt-timeline-v2__item-time">12:45</span>
																<div class="kt-timeline-v2__item-cricle">
																	<i class="fa fa-genderless kt-font-success"></i>
																</div>
																<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
																	AEOL Meeting With
																</div>
																<div class="kt-list-pics kt-list-pics--sm kt-padding-l-20">
																	<a href="#"><img src="../assets/media/users/100_4.jpg" title=""></a>
																	<a href="#"><img src="../assets/media/users/100_13.jpg" title=""></a>
																	<a href="#"><img src="../assets/media/users/100_11.jpg" title=""></a>
																	<a href="#"><img src="../assets/media/users/100_14.jpg" title=""></a>
																</div>
															</div>
															<div class="kt-timeline-v2__item">
																<span class="kt-timeline-v2__item-time">14:00</span>
																<div class="kt-timeline-v2__item-cricle">
																	<i class="fa fa-genderless kt-font-brand"></i>
																</div>
																<div class="kt-timeline-v2__item-text kt-padding-top-5">
																	Make Deposit <a href="#" class="kt-link kt-link--brand kt-font-bolder">USD 700</a> To ESL.
																</div>
															</div>
															<div class="kt-timeline-v2__item">
																<span class="kt-timeline-v2__item-time">16:00</span>
																<div class="kt-timeline-v2__item-cricle">
																	<i class="fa fa-genderless kt-font-warning"></i>
																</div>
																<div class="kt-timeline-v2__item-text kt-padding-top-5">
																	Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
																	incididunt ut labore et dolore magna elit enim at minim<br>
																	veniam quis nostrud
																</div>
															</div>
															<div class="kt-timeline-v2__item">
																<span class="kt-timeline-v2__item-time">17:00</span>
																<div class="kt-timeline-v2__item-cricle">
																	<i class="fa fa-genderless kt-font-info"></i>
																</div>
																<div class="kt-timeline-v2__item-text kt-padding-top-5">
																	Placed a new order in <a href="#" class="kt-link kt-link--brand kt-font-bolder">SIGNATURE MOBILE</a> marketplace.
																</div>
															</div>
															<div class="kt-timeline-v2__item">
																<span class="kt-timeline-v2__item-time">16:00</span>
																<div class="kt-timeline-v2__item-cricle">
																	<i class="fa fa-genderless kt-font-brand"></i>
																</div>
																<div class="kt-timeline-v2__item-text kt-padding-top-5">
																	Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
																	incididunt ut labore et dolore magna elit enim at minim<br>
																	veniam quis nostrud
																</div>
															</div>
															<div class="kt-timeline-v2__item">
																<span class="kt-timeline-v2__item-time">17:00</span>
																<div class="kt-timeline-v2__item-cricle">
																	<i class="fa fa-genderless kt-font-danger"></i>
																</div>
																<div class="kt-timeline-v2__item-text kt-padding-top-5">
																	Received a new feedback on <a href="#" class="kt-link kt-link--brand kt-font-bolder">FinancePro App</a> product.
																</div>
															</div>
															<div class="kt-timeline-v2__item">
																<span class="kt-timeline-v2__item-time">15:30</span>
																<div class="kt-timeline-v2__item-cricle">
																	<i class="fa fa-genderless kt-font-danger"></i>
																</div>
																<div class="kt-timeline-v2__item-text kt-padding-top-5">
																	New notification message has been received on <a href="#" class="kt-link kt-link--brand kt-font-bolder">LoopFin Pro</a> product.
																</div>
															</div>
														</div>
													</div>

													<!--End::Timeline 3 -->
												</div>
											</div>

											<!--End::Portlet-->
										</div>
									</div>

									<!--End::Section-->

									<!--Begin::Section-->
									<div class="row">
										<div class="col-xl-8">
											<div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">
												<div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Exclusive Datatable Plugin
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<div class="dropdown dropdown-inline">
															<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<i class="flaticon-more-1"></i>
															</button>
															<div class="dropdown-menu dropdown-menu-right">
																<ul class="kt-nav">
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																			<span class="kt-nav__link-text">Reports</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon flaticon2-send"></i>
																			<span class="kt-nav__link-text">Messages</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																			<span class="kt-nav__link-text">Charts</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon flaticon2-avatar"></i>
																			<span class="kt-nav__link-text">Members</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon flaticon2-settings"></i>
																			<span class="kt-nav__link-text">Settings</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<div class="kt-portlet__body kt-portlet__body--fit">

													<!--begin: Datatable -->
													<div class="kt-datatable" id="kt_datatable_latest_orders"></div>

													<!--end: Datatable -->
												</div>
											</div>
										</div>
										<div class="col-xl-4">

											<!--begin:: Widgets/Blog-->
											<div class="kt-portlet kt-portlet--height-fluid kt-widget19">
												<div class="kt-portlet__body kt-portlet__body--fit">
													<div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(../assets/media//products/product4.jpg)">
														<h3 class="kt-widget19__title kt-font-light">
															Introducing New Feature
														</h3>
														<div class="kt-widget19__shadow"></div>
														<div class="kt-widget19__labels">
															<a href="#" class="btn btn-label-light-o2 btn-bold btn-sm ">Recent</a>
														</div>
													</div>
												</div>
												<div class="kt-portlet__body">
													<div class="kt-widget19__wrapper">
														<div class="kt-widget19__content">
															<div class="kt-widget19__userpic">
																<img src="../assets/media//users/user1.jpg" alt="">
															</div>
															<div class="kt-widget19__info">
																<a href="#" class="kt-widget19__username">
																	Anna Krox
																</a>
																<span class="kt-widget19__time">
																	UX/UI Designer, Google
																</span>
															</div>
															<div class="kt-widget19__stats">
																<span class="kt-widget19__number kt-font-brand">
																	18
																</span>
																<a href="#" class="kt-widget19__comment">
																	Comments
																</a>
															</div>
														</div>
														<div class="kt-widget19__text">
															Lorem Ipsum is simply dummy text of the printing and typesetting scrambled a type specimen book text of the dummy text of the printing printing and typesetting industry scrambled dummy text of the printing.
														</div>
													</div>
													<div class="kt-widget19__action">
														<a href="#" class="btn btn-sm btn-label-brand btn-bold">Read More...</a>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Blog-->
										</div>
									</div>

									<!--End::Section-->

									<!--Begin::Section-->
									<div class="row">
										<div class="col-xl-8">

											<!--begin:: Widgets/Best Sellers-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Best Sellers
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
															<li class="nav-item">
																<a class="nav-link active" data-toggle="tab" href="#kt_widget5_tab1_content" role="tab">
																	Latest
																</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#kt_widget5_tab2_content" role="tab">
																	Month
																</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#kt_widget5_tab3_content" role="tab">
																	All time
																</a>
															</li>
														</ul>
													</div>
												</div>
												<div class="kt-portlet__body">
													<div class="tab-content">
														<div class="tab-pane active" id="kt_widget5_tab1_content" aria-expanded="true">
															<div class="kt-widget5">
																<div class="kt-widget5__item">
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__pic">
																			<img class="kt-widget7__img" src="../assets/media//products/product27.jpg" alt="">
																		</div>
																		<div class="kt-widget5__section">
																			<a href="#" class="kt-widget5__title">
																				Great Logo Designn
																			</a>
																			<p class="kt-widget5__desc">
																				Metronic admin themes.
																			</p>
																			<div class="kt-widget5__info">
																				<span>Author:</span>
																				<span class="kt-font-info">Keenthemes</span>
																				<span>Released:</span>
																				<span class="kt-font-info">23.08.17</span>
																			</div>
																		</div>
																	</div>
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">19,200</span>
																			<span class="kt-widget5__sales">sales</span>
																		</div>
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">1046</span>
																			<span class="kt-widget5__votes">votes</span>
																		</div>
																	</div>
																</div>
																<div class="kt-widget5__item">
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__pic">
																			<img class="kt-widget7__img" src="../assets/media//products/product22.jpg" alt="">
																		</div>
																		<div class="kt-widget5__section">
																			<a href="#" class="kt-widget5__title">
																				Branding Mockup
																			</a>
																			<p class="kt-widget5__desc">
																				Metronic bootstrap themes.
																			</p>
																			<div class="kt-widget5__info">
																				<span>Author:</span>
																				<span class="kt-font-info">Fly themes</span>
																				<span>Released:</span>
																				<span class="kt-font-info">23.08.17</span>
																			</div>
																		</div>
																	</div>
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">24,583</span>
																			<span class="kt-widget5__sales">sales</span>
																		</div>
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">3809</span>
																			<span class="kt-widget5__votes">votes</span>
																		</div>
																	</div>
																</div>
																<div class="kt-widget5__item">
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__pic">
																			<img class="kt-widget7__img" src="../assets/media//products/product15.jpg" alt="">
																		</div>
																		<div class="kt-widget5__section">
																			<a href="#" class="kt-widget5__title">
																				Awesome Mobile App
																			</a>
																			<p class="kt-widget5__desc">
																				Metronic admin themes.Lorem Ipsum Amet
																			</p>
																			<div class="kt-widget5__info">
																				<span>Author:</span>
																				<span class="kt-font-info">Fly themes</span>
																				<span>Released:</span>
																				<span class="kt-font-info">23.08.17</span>
																			</div>
																		</div>
																	</div>
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">210,054</span>
																			<span class="kt-widget5__sales">sales</span>
																		</div>
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">1103</span>
																			<span class="kt-widget5__votes">votes</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="tab-pane" id="kt_widget5_tab2_content">
															<div class="kt-widget5">
																<div class="kt-widget5__item">
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__pic">
																			<img class="kt-widget7__img" src="../assets/media//products/product10.jpg" alt="">
																		</div>
																		<div class="kt-widget5__section">
																			<a href="#" class="kt-widget5__title">
																				Branding Mockup
																			</a>
																			<p class="kt-widget5__desc">
																				Metronic bootstrap themes.
																			</p>
																			<div class="kt-widget5__info">
																				<span>Author:</span>
																				<span class="kt-font-info">Fly themes</span>
																				<span>Released:</span>
																				<span class="kt-font-info">23.08.17</span>
																			</div>
																		</div>
																	</div>
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">24,583</span>
																			<span class="kt-widget5__sales">sales</span>
																		</div>
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">3809</span>
																			<span class="kt-widget5__votes">votes</span>
																		</div>
																	</div>
																</div>
																<div class="kt-widget5__item">
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__pic">
																			<img class="kt-widget7__img" src="../assets/media//products/product11.jpg" alt="">
																		</div>
																		<div class="kt-widget5__section">
																			<a href="#" class="kt-widget5__title">
																				Awesome Mobile App
																			</a>
																			<p class="kt-widget5__desc">
																				Metronic admin themes.Lorem Ipsum Amet
																			</p>
																			<div class="kt-widget5__info">
																				<span>Author:</span>
																				<span class="kt-font-info">Fly themes</span>
																				<span>Released:</span>
																				<span class="kt-font-info">23.08.17</span>
																			</div>
																		</div>
																	</div>
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">210,054</span>
																			<span class="kt-widget5__sales">sales</span>
																		</div>
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">1103</span>
																			<span class="kt-widget5__votes">votes</span>
																		</div>
																	</div>
																</div>
																<div class="kt-widget5__item">
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__pic">
																			<img class="kt-widget7__img" src="../assets/media//products/product6.jpg" alt="">
																		</div>
																		<div class="kt-widget5__section">
																			<a href="#" class="kt-widget5__title">
																				Great Logo Designn
																			</a>
																			<p class="kt-widget5__desc">
																				Metronic admin themes.
																			</p>
																			<div class="kt-widget5__info">
																				<span>Author:</span>
																				<span class="kt-font-info">Keenthemes</span>
																				<span>Released:</span>
																				<span class="kt-font-info">23.08.17</span>
																			</div>
																		</div>
																	</div>
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">19,200</span>
																			<span class="kt-widget5__sales">sales</span>
																		</div>
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">1046</span>
																			<span class="kt-widget5__votes">votes</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="tab-pane" id="kt_widget5_tab3_content">
															<div class="kt-widget5">
																<div class="kt-widget5__item">
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__pic">
																			<img class="kt-widget7__img" src="../assets/media//products/product11.jpg" alt="">
																		</div>
																		<div class="kt-widget5__section">
																			<a href="#" class="kt-widget5__title">
																				Awesome Mobile App
																			</a>
																			<p class="kt-widget5__desc">
																				Metronic admin themes.Lorem Ipsum Amet
																			</p>
																			<div class="kt-widget5__info">
																				<span>Author:</span>
																				<span class="kt-font-info">Fly themes</span>
																				<span>Released:</span>
																				<span class="kt-font-info">23.08.17</span>
																			</div>
																		</div>
																	</div>
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">210,054</span>
																			<span class="kt-widget5__sales">sales</span>
																		</div>
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">1103</span>
																			<span class="kt-widget5__votes">votes</span>
																		</div>
																	</div>
																</div>
																<div class="kt-widget5__item">
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__pic">
																			<img class="kt-widget7__img" src="../assets/media//products/product6.jpg" alt="">
																		</div>
																		<div class="kt-widget5__section">
																			<a href="#" class="kt-widget5__title">
																				Great Logo Designn
																			</a>
																			<p class="kt-widget5__desc">
																				Metronic admin themes.
																			</p>
																			<div class="kt-widget5__info">
																				<span>Author:</span>
																				<span class="kt-font-info">Keenthemes</span>
																				<span>Released:</span>
																				<span class="kt-font-info">23.08.17</span>
																			</div>
																		</div>
																	</div>
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">19,200</span>
																			<span class="kt-widget5__sales">sales</span>
																		</div>
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">1046</span>
																			<span class="kt-widget5__votes">votes</span>
																		</div>
																	</div>
																</div>
																<div class="kt-widget5__item">
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__pic">
																			<img class="kt-widget7__img" src="../assets/media//products/product10.jpg" alt="">
																		</div>
																		<div class="kt-widget5__section">
																			<a href="#" class="kt-widget5__title">
																				Branding Mockup
																			</a>
																			<p class="kt-widget5__desc">
																				Metronic bootstrap themes.
																			</p>
																			<div class="kt-widget5__info">
																				<span>Author:</span>
																				<span class="kt-font-info">Fly themes</span>
																				<span>Released:</span>
																				<span class="kt-font-info">23.08.17</span>
																			</div>
																		</div>
																	</div>
																	<div class="kt-widget5__content">
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">24,583</span>
																			<span class="kt-widget5__sales">sales</span>
																		</div>
																		<div class="kt-widget5__stats">
																			<span class="kt-widget5__number">3809</span>
																			<span class="kt-widget5__votes">votes</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Best Sellers-->
										</div>
										<div class="col-xl-4">

											<!--begin:: Widgets/New Users-->
											<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															New Users
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
															<li class="nav-item">
																<a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab1_content" role="tab">
																	Today
																</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#kt_widget4_tab2_content" role="tab">
																	Month
																</a>
															</li>
														</ul>
													</div>
												</div>
												<div class="kt-portlet__body">
													<div class="tab-content">
														<div class="tab-pane active" id="kt_widget4_tab1_content">
															<div class="kt-widget4">
																<div class="kt-widget4__item">
																	<div class="kt-widget4__pic kt-widget4__pic--pic">
																		<img src="../assets/media/users/100_4.jpg" alt="">
																	</div>
																	<div class="kt-widget4__info">
																		<a href="#" class="kt-widget4__username">
																			Anna Strong
																		</a>
																		<p class="kt-widget4__text">
																			Visual Designer,Google Inc
																		</p>
																	</div>
																	<a href="#" class="btn btn-sm btn-label-brand btn-bold">Follow</a>
																</div>
																<div class="kt-widget4__item">
																	<div class="kt-widget4__pic kt-widget4__pic--pic">
																		<img src="../assets/media/users/100_14.jpg" alt="">
																	</div>
																	<div class="kt-widget4__info">
																		<a href="#" class="kt-widget4__username">
																			Milano Esco
																		</a>
																		<p class="kt-widget4__text">
																			Product Designer, Apple Inc
																		</p>
																	</div>
																	<a href="#" class="btn btn-sm btn-label-warning btn-bold">Follow</a>
																</div>
																<div class="kt-widget4__item">
																	<div class="kt-widget4__pic kt-widget4__pic--pic">
																		<img src="../assets/media/users/100_11.jpg" alt="">
																	</div>
																	<div class="kt-widget4__info">
																		<a href="#" class="kt-widget4__username">
																			Nick Bold
																		</a>
																		<p class="kt-widget4__text">
																			Web Developer, Facebook Inc
																		</p>
																	</div>
																	<a href="#" class="btn btn-sm btn-label-danger btn-bold">Follow</a>
																</div>
																<div class="kt-widget4__item">
																	<div class="kt-widget4__pic kt-widget4__pic--pic">
																		<img src="../assets/media/users/100_1.jpg" alt="">
																	</div>
																	<div class="kt-widget4__info">
																		<a href="#" class="kt-widget4__username">
																			Wiltor Delton
																		</a>
																		<p class="kt-widget4__text">
																			Project Manager, Amazon Inc
																		</p>
																	</div>
																	<a href="#" class="btn btn-sm btn-label-success btn-bold">Follow</a>
																</div>
																<div class="kt-widget4__item">
																	<div class="kt-widget4__pic kt-widget4__pic--pic">
																		<img src="../assets/media/users/100_5.jpg" alt="">
																	</div>
																	<div class="kt-widget4__info">
																		<a href="#" class="kt-widget4__username">
																			Nick Stone
																		</a>
																		<p class="kt-widget4__text">
																			Visual Designer, Github Inc
																		</p>
																	</div>
																	<a href="#" class="btn btn-sm btn-label-primary btn-bold">Follow</a>
																</div>
															</div>
														</div>
														<div class="tab-pane" id="kt_widget4_tab2_content">
															<div class="kt-widget4">
																<div class="kt-widget4__item">
																	<div class="kt-widget4__pic kt-widget4__pic--pic">
																		<img src="../assets/media/users/100_2.jpg" alt="">
																	</div>
																	<div class="kt-widget4__info">
																		<a href="#" class="kt-widget4__username">
																			Kristika Bold
																		</a>
																		<p class="kt-widget4__text">
																			Product Designer,Apple Inc
																		</p>
																	</div>
																	<a href="#" class="btn btn-sm btn-label-success">Follow</a>
																</div>
																<div class="kt-widget4__item">
																	<div class="kt-widget4__pic kt-widget4__pic--pic">
																		<img src="../assets/media/users/100_13.jpg" alt="">
																	</div>
																	<div class="kt-widget4__info">
																		<a href="#" class="kt-widget4__username">
																			Ron Silk
																		</a>
																		<p class="kt-widget4__text">
																			Release Manager, Loop Inc
																		</p>
																	</div>
																	<a href="#" class="btn btn-sm btn-label-brand">Follow</a>
																</div>
																<div class="kt-widget4__item">
																	<div class="kt-widget4__pic kt-widget4__pic--pic">
																		<img src="../assets/media/users/100_9.jpg" alt="">
																	</div>
																	<div class="kt-widget4__info">
																		<a href="#" class="kt-widget4__username">
																			Nick Bold
																		</a>
																		<p class="kt-widget4__text">
																			Web Developer, Facebook Inc
																		</p>
																	</div>
																	<a href="#" class="btn btn-sm btn-label-danger">Follow</a>
																</div>
																<div class="kt-widget4__item">
																	<div class="kt-widget4__pic kt-widget4__pic--pic">
																		<img src="../assets/media/users/100_2.jpg" alt="">
																	</div>
																	<div class="kt-widget4__info">
																		<a href="#" class="kt-widget4__username">
																			Wiltor Delton
																		</a>
																		<p class="kt-widget4__text">
																			Project Manager, Amazon Inc
																		</p>
																	</div>
																	<a href="#" class="btn btn-sm btn-label-success">Follow</a>
																</div>
																<div class="kt-widget4__item">
																	<div class="kt-widget4__pic kt-widget4__pic--pic">
																		<img src="../assets/media/users/100_8.jpg" alt="">
																	</div>
																	<div class="kt-widget4__info">
																		<a href="#" class="kt-widget4__username">
																			Nick Bold
																		</a>
																		<p class="kt-widget4__text">
																			Web Developer, Facebook Inc
																		</p>
																	</div>
																	<a href="#" class="btn btn-sm btn-label-info">Follow</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--end:: Widgets/New Users-->
										</div>
									</div>

									<!--End::Section-->

									<!--Begin::Section-->
									<div class="row">
										<div class="col-xl-4">

											<!--begin:: Widgets/Daily Sales-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-widget14">
													<div class="kt-widget14__header kt-margin-b-30">
														<h3 class="kt-widget14__title">
															Daily Sales
														</h3>
														<span class="kt-widget14__desc">
															Check out each collumn for more details
														</span>
													</div>
													<div class="kt-widget14__chart" style="height:120px;">
														<canvas id="kt_chart_daily_sales"></canvas>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Daily Sales-->
										</div>
										<div class="col-xl-4">

											<!--begin:: Widgets/Profit Share-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-widget14">
													<div class="kt-widget14__header">
														<h3 class="kt-widget14__title">
															Profit Share
														</h3>
														<span class="kt-widget14__desc">
															Profit Share between customers
														</span>
													</div>
													<div class="kt-widget14__content">
														<div class="kt-widget14__chart">
															<div class="kt-widget14__stat">45</div>
															<canvas id="kt_chart_profit_share" style="height: 140px; width: 140px;"></canvas>
														</div>
														<div class="kt-widget14__legends">
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-success"></span>
																<span class="kt-widget14__stats">37% Sport Tickets</span>
															</div>
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-warning"></span>
																<span class="kt-widget14__stats">47% Business Events</span>
															</div>
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-brand"></span>
																<span class="kt-widget14__stats">19% Others</span>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Profit Share-->
										</div>
										<div class="col-xl-4">

											<!--begin:: Widgets/Revenue Change-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-widget14">
													<div class="kt-widget14__header">
														<h3 class="kt-widget14__title">
															Revenue Change
														</h3>
														<span class="kt-widget14__desc">
															Revenue change breakdown by cities
														</span>
													</div>
													<div class="kt-widget14__content">
														<div class="kt-widget14__chart">
															<div id="kt_chart_revenue_change" style="height: 150px; width: 150px;"></div>
														</div>
														<div class="kt-widget14__legends">
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-success"></span>
																<span class="kt-widget14__stats">+10% New York</span>
															</div>
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-warning"></span>
																<span class="kt-widget14__stats">-7% London</span>
															</div>
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-brand"></span>
																<span class="kt-widget14__stats">+20% California</span>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Revenue Change-->
										</div>
									</div>

									<!--End::Section-->

									<!--Begin::Section-->
									<div class="row">
										<div class="col-xl-4">

											<!--begin:: Widgets/Tasks -->
											<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Tasks
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
															<li class="nav-item">
																<a class="nav-link active" data-toggle="tab" href="#kt_widget2_tab1_content" role="tab">
																	Today
																</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#kt_widget2_tab2_content" role="tab">
																	Week
																</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#kt_widget2_tab3_content" role="tab">
																	Month
																</a>
															</li>
														</ul>
													</div>
												</div>
												<div class="kt-portlet__body">
													<div class="tab-content">
														<div class="tab-pane active" id="kt_widget2_tab1_content">
															<div class="kt-widget2">
																<div class="kt-widget2__item kt-widget2__item--primary">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Make Metronic Great Again.Lorem Ipsum Amet
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Bob
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--warning">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Prepare Docs For Metting On Monday
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Sean
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--brand">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Make Widgets Great Again.Estudiat Communy Elit
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Aziko
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--success">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Make Metronic Great Again. Lorem Ipsum
																		</a>
																		<a class="kt-widget2__username">
																			By James
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--danger">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Completa Financial Report For Emirates Airlines
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Bob
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--info">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Completa Financial Report For Emirates Airlines
																			</p>
																			<a href="#" class="kt-widget2__username">
																				By Sean
																			</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="tab-pane" id="kt_widget2_tab2_content">
															<div class="kt-widget2">
																<div class="kt-widget2__item kt-widget2__item--success">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Make Metronic Great Again.Lorem Ipsum
																		</a>
																		<a class="kt-widget2__username">
																			By James
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--warning">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Prepare Docs For Metting On Monday
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Sean
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--danger">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Completa Financial Report For Emirates Airlines
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Bob
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--primary">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Make Metronic Great Again.Lorem Ipsum Amet
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Bob
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--info">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Completa Financial Report For Emirates Airlines
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Sean
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--brand">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Make Widgets Great Again.Estudiat Communy Elit
																			</p>
																			<a href="#" class="kt-widget2__username">
																				By Aziko
																			</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="tab-pane" id="kt_widget2_tab3_content">
															<div class="kt-widget2">
																<div class="kt-widget2__item kt-widget2__item--warning">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Make Metronic Great Again.Lorem Ipsum
																		</a>
																		<a class="kt-widget2__username">
																			By James
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--danger">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Completa Financial Report For Emirates Airlines
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Bob
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--brand">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Make Widgets Great Again.Estudiat Communy Elit
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Aziko
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--info">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Completa Financial Report For Emirates Airlines
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Sean
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--success">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Completa Financial Report For Emirates Airlines
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Bob
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="kt-widget2__item kt-widget2__item--primary">
																	<div class="kt-widget2__checkbox">
																		<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</div>
																	<div class="kt-widget2__info">
																		<a href="#" class="kt-widget2__title">
																			Make Metronic Great Again.Lorem Ipsum Amet
																		</a>
																		<a href="#" class="kt-widget2__username">
																			By Bob
																		</a>
																	</div>
																	<div class="kt-widget2__actions">
																		<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																			<i class="flaticon-more-1"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																			<ul class="kt-nav">
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																						<span class="kt-nav__link-text">Reports</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-send"></i>
																						<span class="kt-nav__link-text">Messages</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																						<span class="kt-nav__link-text">Charts</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-avatar"></i>
																						<span class="kt-nav__link-text">Members</span>
																					</a>
																				</li>
																				<li class="kt-nav__item">
																					<a href="#" class="kt-nav__link">
																						<i class="kt-nav__link-icon flaticon2-settings"></i>
																						<span class="kt-nav__link-text">Settings</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Tasks -->
										</div>
										<div class="col-xl-4">

											<!--begin:: Widgets/Notifications-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Notifications
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
															<li class="nav-item">
																<a class="nav-link active" data-toggle="tab" href="#kt_widget6_tab1_content" role="tab">
																	Latest
																</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#kt_widget6_tab2_content" role="tab">
																	Week
																</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#kt_widget6_tab3_content" role="tab">
																	Month
																</a>
															</li>
														</ul>
													</div>
												</div>
												<div class="kt-portlet__body">
													<div class="tab-content">
														<div class="tab-pane active" id="kt_widget6_tab1_content" aria-expanded="true">
															<div class="kt-notification">
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" id="Combined-Shape" fill="#000000" />
																				<rect id="Rectangle-Copy-2" fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New order has been received.
																		</div>
																		<div class="kt-notification__item-time">
																			2 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<path d="M12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.98630124,11 4.48466491,11.0516454 4,11.1500272 L4,7 C4,5.8954305 4.8954305,5 6,5 L20,5 C21.1045695,5 22,5.8954305 22,7 L22,16 C22,17.1045695 21.1045695,18 20,18 L12.9835977,18 Z M19.1444251,6.83964668 L13,10.1481833 L6.85557487,6.83964668 C6.4908718,6.6432681 6.03602525,6.77972206 5.83964668,7.14442513 C5.6432681,7.5091282 5.77972206,7.96397475 6.14442513,8.16035332 L12.6444251,11.6603533 C12.8664074,11.7798822 13.1335926,11.7798822 13.3555749,11.6603533 L19.8555749,8.16035332 C20.2202779,7.96397475 20.3567319,7.5091282 20.1603533,7.14442513 C19.9639747,6.77972206 19.5091282,6.6432681 19.1444251,6.83964668 Z" id="Combined-Shape" fill="#000000" />
																				<path d="M8.4472136,18.1055728 C8.94119209,18.3525621 9.14141644,18.9532351 8.89442719,19.4472136 C8.64743794,19.9411921 8.0467649,20.1414164 7.5527864,19.8944272 L5,18.618034 L5,14.5 C5,13.9477153 5.44771525,13.5 6,13.5 C6.55228475,13.5 7,13.9477153 7,14.5 L7,17.381966 L8.4472136,18.1055728 Z" id="Path-85" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New member is registered and pending for approval.
																		</div>
																		<div class="kt-notification__item-time">
																			3 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<path d="M12,10.9996338 C12.8356605,10.3719448 13.8743941,10 15,10 C17.7614237,10 20,12.2385763 20,15 C20,17.7614237 17.7614237,20 15,20 C13.8743941,20 12.8356605,19.6280552 12,19.0003662 C11.1643395,19.6280552 10.1256059,20 9,20 C6.23857625,20 4,17.7614237 4,15 C4,12.2385763 6.23857625,10 9,10 C10.1256059,10 11.1643395,10.3719448 12,10.9996338 Z M13.3336047,12.504354 C13.757474,13.2388026 14,14.0910788 14,15 C14,15.9088933 13.7574889,16.761145 13.3336438,17.4955783 C13.8188886,17.8206693 14.3938466,18 15,18 C16.6568542,18 18,16.6568542 18,15 C18,13.3431458 16.6568542,12 15,12 C14.3930587,12 13.8175971,12.18044 13.3336047,12.504354 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<circle id="Oval-14" fill="#000000" cx="12" cy="9" r="5" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			Membership application has been added.
																		</div>
																		<div class="kt-notification__item-time">
																			3 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon id="Bound" points="0 0 24 0 24 24 0 24" />
																				<path d="M18.5,8 C17.1192881,8 16,6.88071187 16,5.5 C16,4.11928813 17.1192881,3 18.5,3 C19.8807119,3 21,4.11928813 21,5.5 C21,6.88071187 19.8807119,8 18.5,8 Z M18.5,21 C17.1192881,21 16,19.8807119 16,18.5 C16,17.1192881 17.1192881,16 18.5,16 C19.8807119,16 21,17.1192881 21,18.5 C21,19.8807119 19.8807119,21 18.5,21 Z M5.5,21 C4.11928813,21 3,19.8807119 3,18.5 C3,17.1192881 4.11928813,16 5.5,16 C6.88071187,16 8,17.1192881 8,18.5 C8,19.8807119 6.88071187,21 5.5,21 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
																				<path d="M5.5,8 C4.11928813,8 3,6.88071187 3,5.5 C3,4.11928813 4.11928813,3 5.5,3 C6.88071187,3 8,4.11928813 8,5.5 C8,6.88071187 6.88071187,8 5.5,8 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 C14,5.55228475 13.5522847,6 13,6 L11,6 C10.4477153,6 10,5.55228475 10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,18 L13,18 C13.5522847,18 14,18.4477153 14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 C10,18.4477153 10.4477153,18 11,18 Z M5,10 C5.55228475,10 6,10.4477153 6,11 L6,13 C6,13.5522847 5.55228475,14 5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 C18.4477153,14 18,13.5522847 18,13 L18,11 C18,10.4477153 18.4477153,10 19,10 Z" id="Combined-Shape" fill="#000000" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New report file has been uploaded.
																		</div>
																		<div class="kt-notification__item-time">
																			5 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="Rectangle-10" x="0" y="0" width="24" height="24" />
																				<path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" id="Path-3" fill="#000000" />
																				<path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New user feedback received and pending for review.
																		</div>
																		<div class="kt-notification__item-time">
																			8 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" id="Combined-Shape" fill="#000000" />
																				<circle id="Oval" fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			Database sever #2 has been fully restarted.
																		</div>
																		<div class="kt-notification__item-time">
																			23 hrs ago
																		</div>
																	</div>
																</a>
															</div>
														</div>
														<div class="tab-pane" id="kt_widget6_tab2_content" aria-expanded="false">
															<div class="kt-notification">
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<path d="M9.35321926,16.3736278 L16.3544311,10.3706602 C16.5640654,10.1909158 16.5882961,9.87526197 16.4085517,9.66562759 C16.3922584,9.64662485 16.3745611,9.62887247 16.3556091,9.6125202 L9.35439731,3.57169798 C9.14532254,3.39130299 8.82959492,3.41455255 8.64919993,3.62362732 C8.5708616,3.71442013 8.52776329,3.83034375 8.52776329,3.95026134 L8.52776329,15.9940512 C8.52776329,16.2701936 8.75162092,16.4940512 9.02776329,16.4940512 C9.14714624,16.4940512 9.2625893,16.4513356 9.35321926,16.3736278 Z" id="Path-10-Copy" fill="#000000" transform="translate(12.398118, 9.870355) rotate(-450.000000) translate(-12.398118, -9.870355) " />
																				<rect id="Rectangle-Copy" fill="#000000" opacity="0.3" transform="translate(12.500000, 17.500000) scale(-1, 1) rotate(-270.000000) translate(-12.500000, -17.500000) " x="11" y="11" width="3" height="13" rx="0.5" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New company application has been approved.
																		</div>
																		<div class="kt-notification__item-time">
																			3 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<rect id="Rectangle-62-Copy" fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5" />
																				<rect id="Rectangle-62-Copy-2" fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5" />
																				<path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" id="Path-95" fill="#000000" fill-rule="nonzero" />
																				<rect id="Rectangle-62-Copy-4" fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New report has been received.
																		</div>
																		<div class="kt-notification__item-time">
																			23 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" id="Combined-Shape" fill="#000000" />
																				<rect id="Rectangle-Copy-2" fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New file has been uploaded and pending for review.
																		</div>
																		<div class="kt-notification__item-time">
																			5 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<path d="M12,10.9996338 C12.8356605,10.3719448 13.8743941,10 15,10 C17.7614237,10 20,12.2385763 20,15 C20,17.7614237 17.7614237,20 15,20 C13.8743941,20 12.8356605,19.6280552 12,19.0003662 C11.1643395,19.6280552 10.1256059,20 9,20 C6.23857625,20 4,17.7614237 4,15 C4,12.2385763 6.23857625,10 9,10 C10.1256059,10 11.1643395,10.3719448 12,10.9996338 Z M13.3336047,12.504354 C13.757474,13.2388026 14,14.0910788 14,15 C14,15.9088933 13.7574889,16.761145 13.3336438,17.4955783 C13.8188886,17.8206693 14.3938466,18 15,18 C16.6568542,18 18,16.6568542 18,15 C18,13.3431458 16.6568542,12 15,12 C14.3930587,12 13.8175971,12.18044 13.3336047,12.504354 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<circle id="Oval-14" fill="#000000" cx="12" cy="9" r="5" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			Membership application has been added.
																		</div>
																		<div class="kt-notification__item-time">
																			3 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--info">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon id="Shape" points="0 0 24 0 24 24 0 24" />
																				<path d="M12,4.25932872 C12.1488635,4.25921584 12.3000368,4.29247316 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 L12,4.25932872 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
																				<path d="M12,4.25932872 L12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.277344,4.464261 11.6315987,4.25960807 12,4.25932872 Z" id="Combined-Shape" fill="#000000" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New customer is registered.
																		</div>
																		<div class="kt-notification__item-time">
																			3 days ago
																		</div>
																	</div>
																</a>
															</div>
														</div>
														<div class="tab-pane" id="kt_widget6_tab3_content" aria-expanded="false">
															<div class="kt-notification">
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" id="Path-50" fill="#000000" opacity="0.3" />
																				<path d="M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z" id="Combined-Shape" fill="#000000" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New order has been received.
																		</div>
																		<div class="kt-notification__item-time">
																			2 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<path d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
																				<path d="M13,5.06189375 C12.6724058,5.02104333 12.3386603,5 12,5 C11.6613397,5 11.3275942,5.02104333 11,5.06189375 L11,4 L10,4 C9.44771525,4 9,3.55228475 9,3 C9,2.44771525 9.44771525,2 10,2 L14,2 C14.5522847,2 15,2.44771525 15,3 C15,3.55228475 14.5522847,4 14,4 L13,4 L13,5.06189375 Z" id="Combined-Shape" fill="#000000" />
																				<path d="M16.7099142,6.53272645 L17.5355339,5.70710678 C17.9260582,5.31658249 18.5592232,5.31658249 18.9497475,5.70710678 C19.3402718,6.09763107 19.3402718,6.73079605 18.9497475,7.12132034 L18.1671361,7.90393167 C17.7407802,7.38854954 17.251061,6.92750259 16.7099142,6.53272645 Z" id="Combined-Shape" fill="#000000" />
																				<path d="M11.9630156,7.5 L12.0369844,7.5 C12.2982526,7.5 12.5154733,7.70115317 12.5355117,7.96165175 L12.9585886,13.4616518 C12.9797677,13.7369807 12.7737386,13.9773481 12.4984096,13.9985272 C12.4856504,13.9995087 12.4728582,14 12.4600614,14 L11.5399386,14 C11.2637963,14 11.0399386,13.7761424 11.0399386,13.5 C11.0399386,13.4872031 11.0404299,13.4744109 11.0414114,13.4616518 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" id="Path-107" fill="#000000" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New customer is registered
																		</div>
																		<div class="kt-notification__item-time">
																			3 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<rect id="Combined-Shape" fill="#000000" opacity="0.3" x="2" y="9" width="20" height="13" rx="2" />
																				<rect id="Rectangle-116-Copy" fill="#000000" opacity="0.3" x="5" y="5" width="14" height="2" rx="0.5" />
																				<rect id="Rectangle-116-Copy-2" fill="#000000" opacity="0.3" x="7" y="1" width="10" height="2" rx="0.5" />
																				<path d="M10.8333333,20 C9.82081129,20 9,19.3159906 9,18.4722222 C9,17.6284539 9.82081129,16.9444444 10.8333333,16.9444444 C11.0476105,16.9444444 11.2533018,16.9750785 11.4444444,17.0313779 L11.4444444,12.7916011 C11.4444444,12.4782408 11.6398662,12.2012404 11.9268804,12.1077729 L15.4407693,11.0331119 C15.8834716,10.8889438 16.3333333,11.2336005 16.3333333,11.7169402 L16.3333333,12.7916011 C16.3333333,13.1498215 15.9979332,13.3786009 15.7222222,13.4444444 C15.3255297,13.53918 14.3070112,13.7428837 12.6666667,14.0555556 L12.6666667,18.5035214 C12.6666667,18.5583862 12.6622174,18.6091837 12.6535404,18.6559869 C12.5446237,19.4131089 11.771224,20 10.8333333,20 Z" id="Combined-Shape" fill="#000000" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			Application has been approved
																		</div>
																		<div class="kt-notification__item-time">
																			3 hrs ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="Bound" opacity="0.200000003" x="0" y="0" width="24" height="24" />
																				<path d="M4.5,7 L9.5,7 C10.3284271,7 11,7.67157288 11,8.5 C11,9.32842712 10.3284271,10 9.5,10 L4.5,10 C3.67157288,10 3,9.32842712 3,8.5 C3,7.67157288 3.67157288,7 4.5,7 Z M13.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L13.5,18 C12.6715729,18 12,17.3284271 12,16.5 C12,15.6715729 12.6715729,15 13.5,15 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
																				<path d="M17,11 C15.3431458,11 14,9.65685425 14,8 C14,6.34314575 15.3431458,5 17,5 C18.6568542,5 20,6.34314575 20,8 C20,9.65685425 18.6568542,11 17,11 Z M6,19 C4.34314575,19 3,17.6568542 3,16 C3,14.3431458 4.34314575,13 6,13 C7.65685425,13 9,14.3431458 9,16 C9,17.6568542 7.65685425,19 6,19 Z" id="Combined-Shape" fill="#000000" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New customer comment recieved
																		</div>
																		<div class="kt-notification__item-time">
																			2 days ago
																		</div>
																	</div>
																</a>
																<a href="#" class="kt-notification__item">
																	<div class="kt-notification__item-icon">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect id="bound" x="0" y="0" width="24" height="24" />
																				<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" id="Combined-Shape" fill="#000000" />
																				<rect id="Rectangle-Copy-2" fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																			</g>
																		</svg> </div>
																	<div class="kt-notification__item-details">
																		<div class="kt-notification__item-title">
																			New customer is registered
																		</div>
																		<div class="kt-notification__item-time">
																			3 days ago
																		</div>
																	</div>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Notifications-->
										</div>
										<div class="col-xl-4">

											<!--begin:: Widgets/Support Tickets -->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Support Tickets
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<div class="dropdown dropdown-inline">
															<button type="button" class="btn btn-clean btn-sm btn-icon-md btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<i class="flaticon-more-1"></i>
															</button>
															<div class="dropdown-menu dropdown-menu-right">
																<ul class="kt-nav">
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																			<span class="kt-nav__link-text">Reports</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon flaticon2-send"></i>
																			<span class="kt-nav__link-text">Messages</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																			<span class="kt-nav__link-text">Charts</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon flaticon2-avatar"></i>
																			<span class="kt-nav__link-text">Members</span>
																		</a>
																	</li>
																	<li class="kt-nav__item">
																		<a href="#" class="kt-nav__link">
																			<i class="kt-nav__link-icon flaticon2-settings"></i>
																			<span class="kt-nav__link-text">Settings</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<div class="kt-portlet__body">
													<div class="kt-widget3">
														<div class="kt-widget3__item">
															<div class="kt-widget3__header">
																<div class="kt-widget3__user-img">
																	<img class="kt-widget3__img" src="../assets/media/users/user1.jpg" alt="">
																</div>
																<div class="kt-widget3__info">
																	<a href="#" class="kt-widget3__username">
																		Melania Trump
																	</a><br>
																	<span class="kt-widget3__time">
																		2 day ago
																	</span>
																</div>
																<span class="kt-widget3__status kt-font-info">
																	Pending
																</span>
															</div>
															<div class="kt-widget3__body">
																<p class="kt-widget3__text">
																	Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
																</p>
															</div>
														</div>
														<div class="kt-widget3__item">
															<div class="kt-widget3__header">
																<div class="kt-widget3__user-img">
																	<img class="kt-widget3__img" src="../assets/media/users/user4.jpg" alt="">
																</div>
																<div class="kt-widget3__info">
																	<a href="#" class="kt-widget3__username">
																		Lebron King James
																	</a><br>
																	<span class="kt-widget3__time">
																		1 day ago
																	</span>
																</div>
																<span class="kt-widget3__status kt-font-brand">
																	Open
																</span>
															</div>
															<div class="kt-widget3__body">
																<p class="kt-widget3__text">
																	Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.
																</p>
															</div>
														</div>
														<div class="kt-widget3__item">
															<div class="kt-widget3__header">
																<div class="kt-widget3__user-img">
																	<img class="kt-widget3__img" src="../assets/media/users/user5.jpg" alt="">
																</div>
																<div class="kt-widget3__info">
																	<a href="#" class="kt-widget3__username">
																		Deb Gibson
																	</a><br>
																	<span class="kt-widget3__time">
																		3 weeks ago
																	</span>
																</div>
																<span class="kt-widget3__status kt-font-success">
																	Closed
																</span>
															</div>
															<div class="kt-widget3__body">
																<p class="kt-widget3__text">
																	Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Support Tickets -->
										</div>
									</div>

									<!--End::Section-->

									<!--End::Dashboard 1-->
								</div>

								<!-- end:: Content -->
							</div>
						</div>
					</div>

					<!-- begin:: Footer -->
					<div class="kt-footer kt-grid__item" id="kt_footer">
						<div class="kt-container">
							<div class="kt-footer__bottom">
								<div class="kt-footer__copyright">
									2019&nbsp;&copy;&nbsp;<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Keenthemes</a>
								</div>
								<div class="kt-footer__menu">
									<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">About</a>
									<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Team</a>
									<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Contact</a>
								</div>
							</div>
						</div>
					</div>

					<!-- end:: Footer -->
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Quick Panel -->
		<div id="kt_quick_panel" class="kt-quick-panel">
			<a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
			<div class="kt-quick-panel__nav">
				<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
					<li class="nav-item active">
						<a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">Notifications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_logs" role="tab">Audit Logs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings" role="tab">Settings</a>
					</li>
				</ul>
			</div>
			<div class="kt-quick-panel__content">
				<div class="tab-content">
					<div class="tab-pane fade show kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel">
						<div class="kt-notification">
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-line-chart kt-font-success"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New order has been received
									</div>
									<div class="kt-notification__item-time">
										2 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-box-1 kt-font-brand"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New customer is registered
									</div>
									<div class="kt-notification__item-time">
										3 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-chart2 kt-font-danger"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										Application has been approved
									</div>
									<div class="kt-notification__item-time">
										3 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-image-file kt-font-warning"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New file has been uploaded
									</div>
									<div class="kt-notification__item-time">
										5 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-bar-chart kt-font-info"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New user feedback received
									</div>
									<div class="kt-notification__item-time">
										8 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-pie-chart-2 kt-font-success"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										System reboot has been successfully completed
									</div>
									<div class="kt-notification__item-time">
										12 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-favourite kt-font-danger"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New order has been placed
									</div>
									<div class="kt-notification__item-time">
										15 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item kt-notification__item--read">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-safe kt-font-primary"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										Company meeting canceled
									</div>
									<div class="kt-notification__item-time">
										19 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-psd kt-font-success"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New report has been received
									</div>
									<div class="kt-notification__item-time">
										23 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon-download-1 kt-font-danger"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										Finance report has been generated
									</div>
									<div class="kt-notification__item-time">
										25 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon-security kt-font-warning"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New customer comment recieved
									</div>
									<div class="kt-notification__item-time">
										2 days ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-pie-chart kt-font-warning"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New customer is registered
									</div>
									<div class="kt-notification__item-time">
										3 days ago
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="tab-pane fade kt-scroll" id="kt_quick_panel_tab_logs" role="tabpanel">
						<div class="kt-notification-v2">
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon-bell kt-font-brand"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										5 new user generated report
									</div>
									<div class="kt-notification-v2__item-desc">
										Reports based on sales
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-box kt-font-danger"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										2 new items submited
									</div>
									<div class="kt-notification-v2__item-desc">
										by Grog John
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon-psd kt-font-brand"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										79 PSD files generated
									</div>
									<div class="kt-notification-v2__item-desc">
										Reports based on sales
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-supermarket kt-font-warning"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										$2900 worth producucts sold
									</div>
									<div class="kt-notification-v2__item-desc">
										Total 234 items
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon-paper-plane-1 kt-font-success"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										4.5h-avarage response time
									</div>
									<div class="kt-notification-v2__item-desc">
										Fostest is Barry
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-information kt-font-danger"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										Database server is down
									</div>
									<div class="kt-notification-v2__item-desc">
										10 mins ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-mail-1 kt-font-brand"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										System report has been generated
									</div>
									<div class="kt-notification-v2__item-desc">
										Fostest is Barry
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-hangouts-logo kt-font-warning"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										4.5h-avarage response time
									</div>
									<div class="kt-notification-v2__item-desc">
										Fostest is Barry
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="tab-pane kt-quick-panel__content-padding-x fade kt-scroll" id="kt_quick_panel_tab_settings" role="tabpanel">
						<form class="kt-form">
							<div class="kt-heading kt-heading--sm kt-heading--space-sm">Customer Care</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Notifications:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--success kt-switch--sm">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_1">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Case Tracking:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--success kt-switch--sm">
										<label>
											<input type="checkbox" name="quick_panel_notifications_2">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Support Portal:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--success kt-switch--sm">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_2">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
							<div class="kt-heading kt-heading--sm kt-heading--space-sm">Reports</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Generate Reports:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_3">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Report Export:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" name="quick_panel_notifications_3">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Allow Data Collection:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_4">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
							<div class="kt-heading kt-heading--sm kt-heading--space-sm">Memebers</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Member singup:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--brand">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_5">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Allow User Feedbacks:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--brand">
										<label>
											<input type="checkbox" name="quick_panel_notifications_5">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Enable Customer Portal:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--brand">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_6">
											<span></span>
										</label>
									</span>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- end::Quick Panel -->

		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>

		<!-- end::Scrolltop -->

		<!-- begin::Sticky Toolbar -->
		<ul class="kt-sticky-toolbar" style="margin-top: 30px;">
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--success" id="kt_demo_panel_toggle" data-toggle="kt-tooltip" title="Check out more demos" data-placement="right">
				<a href="#" class=""><i class="flaticon2-drop"></i></a>
			</li>
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--brand" data-toggle="kt-tooltip" title="Layout Builder" data-placement="left">
				<a href="https://keenthemes.com/metronic/preview/demo9/builder.html" target="_blank"><i class="flaticon2-gear"></i></a>
			</li>
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--warning" data-toggle="kt-tooltip" title="Documentation" data-placement="left">
				<a href="https://keenthemes.com/metronic/?page=docs" target="_blank"><i class="flaticon2-telegram-logo"></i></a>
			</li>
		</ul>

		<!-- end::Sticky Toolbar -->

		<!-- begin::Demo Panel -->
		<div id="kt_demo_panel" class="kt-demo-panel">
			<div class="kt-demo-panel__head">
				<h3 class="kt-demo-panel__title">
					Select A Demo

					<!--<small>5</small>-->
				</h3>
				<a href="#" class="kt-demo-panel__close" id="kt_demo_panel_close"><i class="flaticon2-delete"></i></a>
			</div>
			<div class="kt-demo-panel__body">
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Default
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="../assets/media/demos/Demo-_Default.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="../default/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 2
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="../assets/media/demos/Demo-2.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="../demo2/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 3
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="../assets/media/demos/Demo-3.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="../demo3/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 4
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="../assets/media/demos/Demo-4.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="../demo4/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 5
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="../assets/media/demos/Demo-5.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="../demo5/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 6
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="../assets/media/demos/Demo-6.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="../demo6/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 7
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="../assets/media/demos/Demo-7.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="../demo7/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 8
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="../assets/media/demos/Demo-8.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="../demo8/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item kt-demo-panel__item--active">
					<div class="kt-demo-panel__item-title">
						Demo 9
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="../assets/media/demos/Demo-9.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="../demo9/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 10
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="../assets/media/demos/Demo-10.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="../demo10/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 11
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="../assets/media/demos/Demo-11.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="../demo11/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 12
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="../assets/media/demos/Demo-12.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="../demo12/index.html" class="btn btn-brand btn-elevate " target="_blank">Preview</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 13
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="../assets/media/demos/Demo-13.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<div class="kt-demo-panel__item ">
					<div class="kt-demo-panel__item-title">
						Demo 14
					</div>
					<div class="kt-demo-panel__item-preview">
						<img src="../assets/media/demos/Demo-14.jpg" alt="" />
						<div class="kt-demo-panel__item-preview-overlay">
							<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<a href="" target="_blank" class="kt-demo-panel__purchase btn btn-brand btn-elevate btn-bold btn-upper">
					Buy Metronic Now!
				</a>
			</div>
		</div>

		<!-- end::Demo Panel -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#591df1",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="../assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="../assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/components/vendors/bootstrap-datepicker/init.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/components/vendors/bootstrap-timepicker/init.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/components/vendors/bootstrap-switch/init.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/components/vendors/bootstrap-markdown/init.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/components/vendors/bootstrap-notify/init.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/components/vendors/jquery-validation/init.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="../assets/vendors/custom/components/vendors/sweetalert2/init.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="../assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="../assets/demo/demo9/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
		<script src="../assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
		<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
		<script src="../assets/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="../assets/app/custom/general/dashboard.js" type="text/javascript"></script>

		<!--end::Page Scripts -->

		<!--begin::Global App Bundle(used by all pages) -->
		<script src="../assets/app/bundle/app.bundle.js" type="text/javascript"></script>

		<!--end::Global App Bundle -->
	</body>

	<!-- end::Body -->
</html>