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
                        <h3 class="m-subheader__title m-subheader__title--separator">Form Unit</h3>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__body">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
                                    <h3 class="m-portlet__head-text">
                                        Form Tambah Unit
                                    </h3>
                                </div>
                            </div>
                        </div>


                        <!--begin::Form-->
                        <form class="m-form m-form--state m-form--fit m-form--label-align-right" data-action="unit" novalidate="novalidate">
                            {{csrf_field()}}
                            <input type="hidden" name="order">
                            <div class="m-portlet__body">
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Nama Unit</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <input type="text" class="form-control m-input" name="nama" placeholder="Masukkan Nama Unit" required>
                                        <span class="m-form__help">Mohon Masukkan Nama Unit</span>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Gambar Unit</label>
                                    <div class="col-lg-7 col-md-7 col-sm-7">
                                        <input type="file" class="" id="uploadImage" name="foto[]" placeholder="Masukkan Nama Unit" accept="image/x-png,image/jpeg">
{{--                                        <span class="m-form__help">Mohon Masukkan Gambar Unit</span>--}}
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <span style="cursor: pointer" class="btn btn-primary btn-outline-primary" id="tambah_gambar"><i class="flaticon-plus"></i></span>
                                    </div>
                                </div>
                                <div id="vertical_image">
                                    <div class="form-group m-form__group row new_image">
                                        <label class="col-form-label col-lg-3 col-sm-12"></label>
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <input type="file" class="" id="uploadImage" name="foto[]" placeholder="Masukkan Nama Unit" accept="image/x-png,image/jpeg">
{{--                                            <span class="m-form__help">Mohon Masukkan Gambar Unit</span>--}}
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                            <span style="cursor: pointer" class="btn btn-danger btn-outline-danger kurang_gambar"><i class="flaticon-cancel"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Lokasi Unit</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <div class="input-group-prepend">
                                            <select name="lokasi_fix" class="form-control" id="lokasi_fix">
                                                <option value="" selected></option>
                                                @foreach($lokasi as $datalokasi)
                                                    <option value="{{$datalokasi['id']}}">{{$datalokasi['lokasi']}}</option>
                                                @endforeach
                                            </select>
                                            <input type="text" name="lokasi_text" class="form-control" placeholder="Masukkan Lokasinya">
                                        </div>
                                        <span class="m-form__help">Mohon Masukkan Lokasi Unit</span>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Harga Unit</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <div class="input-group">
                                            <div class="input-group-text">Rp. </div>
                                            <input type="text" class="form-control m-input number ribuan" data-id="harga" placeholder="Masukkan Harga Unit">
                                        </div>
                                        <input type="hidden" id="harga" name="harga">
                                        <span class="m-form__help">Mohon Masukkan Harga Unit</span>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Description</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <textarea type="text" class="form-control autosizeme" id="deskripsi" name="description" placeholder="Masukkan Description Unit"></textarea>
                                        <span class="m-form__help">Mohon Masukkan Description Unit</span>
                                    </div>
                                </div>
                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions m-form__actions">
                                        <div class="row">
                                            <div class="col-lg-9 ml-lg-auto">
                                                <input type="submit" class="btn btn-accent" value="Submit">
                                                <button type="reset" class="btn btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Portlet-->
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
<script>
    const base_url = window.location.origin+"/";
    const host = window.location.host;
</script>
<!--begin::Global Theme Bundle -->
<script src="{{asset('assets/vendors/base/vendors.bundle.js')}}"></script>
<script src="{{asset('assets/demo/demo12/base/scripts.bundle.js')}}"></script>
<script src="{{asset('assets/vendors/custom/datatables/datatables.bundle.js')}}"></script>
<script src="{{asset('assets/demo/demo12/custom/crud/datatables/basic/paginations.js')}}"></script>
<!--end::Global Theme Bundle -->
<!--begin:: Global Mandatory Vendors -->
<script src="{{asset('assets/vendors/popper.js/dist/umd/popper.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/vendors/js-cookie/src/js.cookie.js')}}"></script>
<script src="{{asset('assets/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('assets/vendors/tooltip.js/dist/umd/tooltip.min.js')}}"></script>
<script src="{{asset('assets/vendors/perfect-scrollbar/dist/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/vendors/wnumb/wNumb.js')}}"></script>

<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
{{--<script src="{{asset('assets/vendors/jquery/dist/jquery.js')}}"></script>--}}
<script src="{{asset('assets/vendors/select2/dist/js/select2.full.js')}}"></script>
{{--<script src="{{asset('assets/vendors/jquery.repeater/src/lib.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/jquery.repeater/src/jquery.input.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/jquery.repeater/src/repeater.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/jquery-form/dist/jquery.form.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/block-ui/jquery.blockUI.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/bootstrap-maxlength/src/bootstrap-maxlength.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/bootstrap-switch/dist/js/bootstrap-switch.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js')}}"></script>--}}
<script src="{{asset('assets/vendors/bootstrap-select/dist/js/bootstrap-select.js')}}"></script>
{{--<script src="{{asset('assets/vendors/typeahead.js/dist/typeahead.bundle.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/handlebars/dist/handlebars.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/inputmask/dist/jquery.inputmask.bundle.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/inputmask/dist/inputmask/inputmask.date.extensions.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/nouislider/distribute/nouislider.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/owl.carousel/dist/owl.carousel.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/autosize/dist/autosize.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/clipboard/dist/clipboard.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/ion-rangeslider/js/ion.rangeSlider.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/dropzone/dist/dropzone.js')}}"></script>--}}
{{--<script src="{{asset('assets/summernote/dist/summernote.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/markdown/lib/markdown.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/bootstrap-markdown/js/bootstrap-markdown.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js')}}"></script>--}}
<script src="{{asset('assets/vendors/jquery-validation/dist/jquery.validate.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-validation/dist/additional-methods.js')}}"></script>
<script src="{{asset('assets/vendors/js/framework/components/plugins/forms/jquery-validation.init.js')}}"></script>
{{--<script src="{{asset('assets/vendors/bootstrap-notify/bootstrap-notify.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/js/framework/components/plugins/base/bootstrap-notify.init.js')}}"></script>--}}
<script src="{{asset('assets/vendors/toastr/build/toastr.min.js')}}"></script>
{{--<script src="{{asset('assets/vendors/jstree/dist/jstree.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/raphael/raphael.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/morris.js/morris.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/chartist/dist/chartist.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/chart.js/dist/Chart.bundle.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/js/framework/components/plugins/charts/chart.init.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/vendors/jquery-idletimer/idle-timer.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/waypoints/lib/jquery.waypoints.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/counterup/jquery.counterup.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/es6-promise-polyfill/promise.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/sweetalert2/dist/sweetalert2.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/js/framework/components/plugins/base/sweetalert2.init.js')}}"></script>--}}

<!--end:: Global Optional Vendors -->

<!--begin::Page Vendors -->
<script src="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts -->
<script src="{{asset('assets/app/js/dashboard.js')}}"></script>
<script src="{{asset('assets/vendors/custom/select2/select2.js')}}"></script>
<script src="{{asset('js/plugin.js')}}"></script>
<script src="{{asset('js/datatable.js')}}"></script>
<script src="{{asset('js/form_validate.js')}}"></script>
<script src="{{asset('js/select2.js')}}"></script>
<script src="{{asset('js/editdel.js')}}"></script>
<script src="{{asset('js/script-manual.js')}}"></script>
<!--end::Page Scripts -->

<!--end::Global Theme Bundle -->
</body>

<!-- end::Body -->
</html>