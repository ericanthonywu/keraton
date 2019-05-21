<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->
@include('theme.head')

<!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

	<!-- BEGIN: Header -->
@include('theme.header')

<!-- END: Header -->

	<!-- begin::Body -->
	<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

		<!-- BEGIN: Left Aside -->
	@include('theme.leftaside')

	<!-- END: Left Aside -->
		<div class="m-grid__item m-grid__item--fluid m-wrapper">

			<!-- BEGIN: Subheader -->
			<div class="m-subheader ">
				<div class="d-flex align-items-center">
					<div class="mr-auto">
						<h3 class="m-subheader__title m-subheader__title--separator">Form Manage Rules</h3>
					</div>
				</div>
			</div>

			<!-- END: Subheader -->
			<div class="m-content">
				<div class="m-portlet m-portlet--mobile">
					<div class="m-portlet__head">
						<div class="m-portlet__head-caption">
							<div class="m-portlet__head-title">
								<h3 class="m-portlet__head-text">
									Manage Rules
								</h3>
							</div>
						</div>
					</div>
					<div class="m-portlet__body">
						<!--begin: Search Form -->
						<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
							<div class="row align-items-center">
								<div class="col-xl-8 order-2 order-xl-1">
									<div class="form-group m-form__group row align-items-center">
										<div class="col-md-6">
											<div class="m-input-icon m-input-icon--left">
												<input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="generalSearch">
												<span class="m-input-icon__icon m-input-icon__icon--left">
															<span><i class="la la-search"></i></span>
														</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 order-1 order-xl-2">
									<div class="m-separator m-separator--dashed d-xl-none"></div>
								</div>
							</div>
						</div>

						<!--end: Search Form -->

						<!--begin: Datatable -->
						<table class="m_datatable" id="tblrules"></table>
						<!--end: Datatable -->
						<div class="modal fade" id="fedit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Form Edit Rules</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form data-action="users">
											{{csrf_field()}}
											<input type="hidden" name="id">
											<div class="form-group">
												<label for="nama" class="form-control-label">Nama:</label>
												<input type="text" class="form-control" name="name" id="nama">
											</div>
											<div class="form-group">
												<label for="username" class="form-control-label">Username:</label>
												<input type="text" class="form-control" name="username" id="username">
											</div>
											<div class="form-group">
												<label for="password" class="form-control-label">Password:</label>
												<input type="text" class="form-control" name="password" id="password">
											</div>
											<div class="form-group">
												<label for="hakakses" class="form-control-label">Hak Akses:</label>
												<select type="text" class="form-control" name="level" id="hakakses">
													<option value=""></option>
													<option value="1">Manager</option>
													<option value="2">Admin</option>
												</select>
											</div>
										</form>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
										<input type="submit" class="btn btn-primary" value="Edit">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- end:: Body -->

<!-- begin::Footer -->


<!-- end::Footer -->

<!-- end:: Page -->

<!-- begin::Quick Sidebar -->
<div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
	<div class="m-quick-sidebar__content m--hide">
		<span id="m_quick_sidebar_close" class="m-quick-sidebar__close"><i class="la la-close"></i></span>
		<ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
			<li class="nav-item m-tabs__item">
				<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_quick_sidebar_tabs_messenger"
				   role="tab">Messages</a>
			</li>
			<li class="nav-item m-tabs__item">
				<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">Settings</a>
			</li>
			<li class="nav-item m-tabs__item">
				<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs"
				   role="tab">Logs</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="m_quick_sidebar_tabs_messenger" role="tabpanel">
				<div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
					<div class="m-messenger__messages m-scrollable">
						<div class="m-messenger__wrapper">
							<div class="m-messenger__message m-messenger__message--in">
								<div class="m-messenger__message-pic">
									<img src="{{url('assets/app/media/img//users/user3.jpg')}}" alt=""/>
								</div>
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-username">
											Megan wrote
										</div>
										<div class="m-messenger__message-text">
											Hi Bob. What time will be the meeting ?
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="m-messenger__wrapper">
							<div class="m-messenger__message m-messenger__message--out">
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-text">
											Hi Megan. It's at 2.30PM
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="m-messenger__wrapper">
							<div class="m-messenger__message m-messenger__message--in">
								<div class="m-messenger__message-pic">
									<img src="{{url('assets/app/media/img//users/user3.jpg')}}" alt=""/>
								</div>
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-username">
											Megan wrote
										</div>
										<div class="m-messenger__message-text">
											Will the development team be joining ?
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="m-messenger__wrapper">
							<div class="m-messenger__message m-messenger__message--out">
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-text">
											Yes sure. I invited them as well
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="m-messenger__datetime">2:30PM</div>
						<div class="m-messenger__wrapper">
							<div class="m-messenger__message m-messenger__message--in">
								<div class="m-messenger__message-pic">
									<img src="{{url('assets/app/media/img//users/user3.jpg')}}" alt=""/>
								</div>
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-username">
											Megan wrote
										</div>
										<div class="m-messenger__message-text">
											Noted. For the Coca-Cola Mobile App project as well ?
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="m-messenger__wrapper">
							<div class="m-messenger__message m-messenger__message--out">
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-text">
											Yes, sure.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="m-messenger__wrapper">
							<div class="m-messenger__message m-messenger__message--out">
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-text">
											Please also prepare the quotation for the Loop CRM project as well.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="m-messenger__datetime">3:15PM</div>
						<div class="m-messenger__wrapper">
							<div class="m-messenger__message m-messenger__message--in">
								<div class="m-messenger__message-no-pic m--bg-fill-danger">
									<span>M</span>
								</div>
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-username">
											Megan wrote
										</div>
										<div class="m-messenger__message-text">
											Noted. I will prepare it.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="m-messenger__wrapper">
							<div class="m-messenger__message m-messenger__message--out">
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-text">
											Thanks Megan. I will see you later.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="m-messenger__wrapper">
							<div class="m-messenger__message m-messenger__message--in">
								<div class="m-messenger__message-pic">
									<img src="{{url('assets/app/media/img//users/user3.jpg')}}" alt=""/>
								</div>
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-username">
											Megan wrote
										</div>
										<div class="m-messenger__message-text">
											Sure. See you in the meeting soon.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="m-messenger__seperator"></div>
					<div class="m-messenger__form">
						<div class="m-messenger__form-controls">
							<input type="text" name="" placeholder="Type here..." class="m-messenger__form-input">
						</div>
						<div class="m-messenger__form-tools">
							<a href="" class="m-messenger__form-attachment">
								<i class="la la-paperclip"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="m_quick_sidebar_tabs_settings" role="tabpanel">
				<div class="m-list-settings m-scrollable">
					<div class="m-list-settings__group">
						<div class="m-list-settings__heading">General Settings</div>
						<div class="m-list-settings__item">
							<span class="m-list-settings__item-label">Email Notifications</span>
							<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" checked="checked" name="">
												<span></span>
											</label>
										</span>
									</span>
						</div>
						<div class="m-list-settings__item">
							<span class="m-list-settings__item-label">Site Tracking</span>
							<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
						</div>
						<div class="m-list-settings__item">
							<span class="m-list-settings__item-label">SMS Alerts</span>
							<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
						</div>
						<div class="m-list-settings__item">
							<span class="m-list-settings__item-label">Backup Storage</span>
							<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
						</div>
						<div class="m-list-settings__item">
							<span class="m-list-settings__item-label">Audit Logs</span>
							<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" checked="checked" name="">
												<span></span>
											</label>
										</span>
									</span>
						</div>
					</div>
					<div class="m-list-settings__group">
						<div class="m-list-settings__heading">System Settings</div>
						<div class="m-list-settings__item">
							<span class="m-list-settings__item-label">System Logs</span>
							<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
						</div>
						<div class="m-list-settings__item">
							<span class="m-list-settings__item-label">Error Reporting</span>
							<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
						</div>
						<div class="m-list-settings__item">
							<span class="m-list-settings__item-label">Applications Logs</span>
							<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
						</div>
						<div class="m-list-settings__item">
							<span class="m-list-settings__item-label">Backup Servers</span>
							<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" checked="checked" name="">
												<span></span>
											</label>
										</span>
									</span>
						</div>
						<div class="m-list-settings__item">
							<span class="m-list-settings__item-label">Audit Logs</span>
							<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="m_quick_sidebar_tabs_logs" role="tabpanel">
				<div class="m-list-timeline m-scrollable">
					<div class="m-list-timeline__group">
						<div class="m-list-timeline__heading">
							System Logs
						</div>
						<div class="m-list-timeline__items">
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
								<a href="" class="m-list-timeline__text">12 new users registered <span
											class="m-badge m-badge--warning m-badge--wide">important</span></a>
								<span class="m-list-timeline__time">Just now</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
								<a href="" class="m-list-timeline__text">System shutdown</a>
								<span class="m-list-timeline__time">11 mins</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
								<a href="" class="m-list-timeline__text">New invoice received</a>
								<span class="m-list-timeline__time">20 mins</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
								<a href="" class="m-list-timeline__text">Database overloaded 89% <span
											class="m-badge m-badge--success m-badge--wide">resolved</span></a>
								<span class="m-list-timeline__time">1 hr</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
								<a href="" class="m-list-timeline__text">System error</a>
								<span class="m-list-timeline__time">2 hrs</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
								<a href="" class="m-list-timeline__text">Production server down <span
											class="m-badge m-badge--danger m-badge--wide">pending</span></a>
								<span class="m-list-timeline__time">3 hrs</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
								<a href="" class="m-list-timeline__text">Production server up</a>
								<span class="m-list-timeline__time">5 hrs</span>
							</div>
						</div>
					</div>
					<div class="m-list-timeline__group">
						<div class="m-list-timeline__heading">
							Applications Logs
						</div>
						<div class="m-list-timeline__items">
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
								<a href="" class="m-list-timeline__text">New order received <span
											class="m-badge m-badge--info m-badge--wide">urgent</span></a>
								<span class="m-list-timeline__time">7 hrs</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
								<a href="" class="m-list-timeline__text">12 new users registered</a>
								<span class="m-list-timeline__time">Just now</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
								<a href="" class="m-list-timeline__text">System shutdown</a>
								<span class="m-list-timeline__time">11 mins</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
								<a href="" class="m-list-timeline__text">New invoices received</a>
								<span class="m-list-timeline__time">20 mins</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
								<a href="" class="m-list-timeline__text">Database overloaded 89%</a>
								<span class="m-list-timeline__time">1 hr</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
								<a href="" class="m-list-timeline__text">System error <span
											class="m-badge m-badge--info m-badge--wide">pending</span></a>
								<span class="m-list-timeline__time">2 hrs</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
								<a href="" class="m-list-timeline__text">Production server down</a>
								<span class="m-list-timeline__time">3 hrs</span>
							</div>
						</div>
					</div>
					<div class="m-list-timeline__group">
						<div class="m-list-timeline__heading">
							Server Logs
						</div>
						<div class="m-list-timeline__items">
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
								<a href="" class="m-list-timeline__text">Production server up</a>
								<span class="m-list-timeline__time">5 hrs</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
								<a href="" class="m-list-timeline__text">New order received</a>
								<span class="m-list-timeline__time">7 hrs</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
								<a href="" class="m-list-timeline__text">12 new users registered</a>
								<span class="m-list-timeline__time">Just now</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
								<a href="" class="m-list-timeline__text">System shutdown</a>
								<span class="m-list-timeline__time">11 mins</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
								<a href="" class="m-list-timeline__text">New invoice received</a>
								<span class="m-list-timeline__time">20 mins</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
								<a href="" class="m-list-timeline__text">Database overloaded 89%</a>
								<span class="m-list-timeline__time">1 hr</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
								<a href="" class="m-list-timeline__text">System error</a>
								<span class="m-list-timeline__time">2 hrs</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
								<a href="" class="m-list-timeline__text">Production server down</a>
								<span class="m-list-timeline__time">3 hrs</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
								<a href="" class="m-list-timeline__text">Production server up</a>
								<span class="m-list-timeline__time">5 hrs</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
								<a href="" class="m-list-timeline__text">New order received</a>
								<span class="m-list-timeline__time">1117 hrs</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- end::Quick Sidebar -->

<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
	<i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->

<!-- begin::Quick Nav -->
<!-- begin::Quick Nav -->

<!--begin::Global Theme Bundle -->
@include('theme.script')

<!--end::Global Theme Bundle -->
</body>

<!-- end::Body -->
</html>