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
						<h3 class="m-subheader__title m-subheader__title--separator">Form Kategori barang</h3>
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
									Data Admin
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
									<button data-toggle="modal" data-target="#ftambah"
									   class="btn btn-focus m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
												<span>
													<i class="la la-plus"></i>
													<span>Tambah Admin</span>
												</span>
									</button>
									<div class="m-separator m-separator--dashed d-xl-none"></div>
								</div>
							</div>
						</div>

						<!--end: Search Form -->

						<!--begin: Datatable -->
						<table class="m_datatable" id="tbladmin"></table>
						<!--end: Datatable -->
						<div class="modal fade" id="fedit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Form Edit User</h5>
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
						<div class="modal fade" id="ftambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Form Tambah User</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form data-action="users">
											{{csrf_field()}}
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
										<input type="submit" class="btn btn-primary" value="Tambah">
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