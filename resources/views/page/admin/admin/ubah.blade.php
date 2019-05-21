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
                        <h3 class="m-subheader__title m-subheader__title--separator">Form Kategori Barang</h3>
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
                                        Form Ubah Kategori Barang
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <!--begin::Form-->
                        <form class="m-form m-form--state m-form--fit m-form--label-align-right" data-action="kategori_barang" novalidate="novalidate">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$data['id']}}">
                            <div class="m-portlet__body">
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Kategori Barang</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <input type="text" class="form-control m-input" name="kategori_barang" placeholder="Masukkan Kategori Barang" value="{{$data['item_type']}}">
                                        <span class="m-form__help">Ubah Kategori Barang</span>
                                    </div>
                                </div>
                                {{--<div class="form-group m-form__group row">--}}
                                {{--<label class="col-form-label col-lg-3 col-sm-12" for="jenisobat">Jenis Obat</label>--}}
                                {{--<div class="col-lg-9 col-md-9 col-sm-12">--}}
                                {{--<select type="text" class="form-control m-input slcjenisobat" name="jenisobat" id="jenisobat">--}}
                                {{--<option value="">- Pilih Jenis Obat</option>--}}
                                {{--<option value="obat1">Obat 1</option>--}}
                                {{--<option value="obat2">Obat 2</option>--}}
                                {{--<option value="obat3">Obat 3</option>--}}
                                {{--<option value="obat4">Obat 4</option>--}}
                                {{--</select>--}}
                                {{--<span class="m-form__help">Harap Pilih Jenis Obat</span>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group m-form__group row">--}}
                                {{--<label class="col-form-label col-lg-3 col-sm-12" for="bpjs">BPJS</label>--}}
                                {{--<div class="col-lg-9 col-md-9 col-sm-12">--}}
                                {{--<select type="text" class="form-control m-input slcbpjs" name="bpjs" id="bpjs">--}}
                                {{--<option value="">- Pilih BPJS</option>--}}
                                {{--<option value="1">BPJS 1</option>--}}
                                {{--<option value="2">BPJS 2</option>--}}
                                {{--<option value="3">BPJS 3</option>--}}
                                {{--<option value="4">BPJS 4</option>--}}
                                {{--</select>--}}
                                {{--<span class="m-form__help">Harap Pilih BPJS</span>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group m-form__group row">--}}
                                {{--<label class="col-form-label col-lg-3 col-sm-12">Harga</label>--}}
                                {{--<div class="col-lg-9 col-md-9 col-sm-12">--}}
                                {{--<div class="input-group">--}}
                                {{--<div class="input-group-append"><span class="input-group-text">Rp.</span></div>--}}
                                {{--<input type="text" class="form-control m-input number ribuan" data-id-selector="harga" placeholder="Masukkan Harga Obat">--}}
                                {{--<input type="hidden" name="harga" id="harga">--}}
                                {{--</div>--}}
                                {{--<span class="m-form__help">Mohon Masukkan Harga Obatnya</span>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions m-form__actions">
                                        <div class="row">
                                            <div class="col-lg-9 ml-lg-auto">
                                                <input type="submit" class="btn btn-accent" value="Edit">
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