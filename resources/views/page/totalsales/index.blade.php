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
                        <h3 class="m-subheader__title m-subheader__title--separator">Form Total Sales</h3>
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
                                    Data Total Sales
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <!--begin: Datatable -->
                        <table class="m_datatable" id="tblsale"></table>
                        <!--end: Datatable -->
                        <div class="modal fade" id="detailtotalsales" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Detail Sale</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h4>Informasi Konsumen :</h4>
                                                <div class="form-group">
                                                    <label class="form-control-label" style="width: 150px">Nama
                                                        Konsumen </label><span id="namakonsumen">Lorem Ipsum</span>&nbsp;&nbsp;
                                                    <span>Dibuat Oleh <span id="dibuat_oleh"></span></span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" style="width: 150px">Nomor Hp
                                                        Konsumen </label><span id="nohpkonsumen">Lorem Ipsum</span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" style="width: 150px">Email
                                                        Konsumen </label><span id="emailkonsumen">Lorem Ipsum</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <h4>Informasi Unit :</h4>
                                                <div class="form-group">
                                                    <label class="form-control-label" style="width: 100px">Nama
                                                        Unit </label><span id="namaunit">Lorem Ipsum</span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" style="width: 100px">Lokasi
                                                        Unit </label><span id="lokasiunit">Lorem Ipsum</span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" style="width: 100px">Harga
                                                        Unit </label><span id="hargaunit">Lorem Ipsum</span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label">Foto Unit </label>
                                                    <div class="owl-carousel" id="fotounit">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="owl-carousel">
                                                        <div> Foto Ktp : <br> <a target="_blank" href="" class="m-link"><img
                                                                        src="" alt="fotoktp" id="foto-ktp"></a></div>
                                                        <div> Foto Ktp Pasangan : <br> <a target="_blank" href="" class="m-link"><img
                                                                        src="" alt="fotoktp-pasangan" id="foto-ktp-pasangan"></a></div>
                                                        <div> Foto Konsumen : <br> <a target="_blank" href=""
                                                                                      class="m-link"><img src=""
                                                                                                          alt="fotokonsumen"
                                                                                                          id="foto-konsumen"></a>
                                                        </div>
                                                        <div> Foto Pasangan : <br> <a target="_blank" href=""
                                                                                      class="m-link"><img src=""
                                                                                                          alt="fotopasangan"
                                                                                                          id="foto-pasangan"></a>
                                                        </div>
                                                        <div> Foto NPWP : <br> <a target="_blank" href=""
                                                                                  class="m-link"><img src=""
                                                                                                      alt="fotonpwp"
                                                                                                      id="foto-npwp"></a>
                                                        </div>
                                                        <div> Foto Slip Gaji : <br> <a target="_blank" href=""
                                                                                       class="m-link"><img src=""
                                                                                                           alt="fotogaji"
                                                                                                           id="foto-gaji"></a>
                                                        </div>
                                                        <div> Foto Kerja : <br> <a target="_blank" href=""
                                                                                   class="m-link"><img src=""
                                                                                                       alt="fotokerja"
                                                                                                       id="foto-kerja"></a>
                                                        </div>
                                                        <div> Foto Spt : <br> <a target="_blank" href="" class="m-link"><img
                                                                        src="" alt="fotospt" id="foto-spt"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <form id="wawancara">
                                                            <div class="form-group">
                                                                <input name="tanggal" id="tgl_wwc" placeholder="Tanggal Wawancara" class="form-control m-input datepick">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="waktu" id="waktu_wwc" placeholder="Waktu Wawancara" type="text" class="form-control m-input timepick">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="tempat" id="tempat_wwc" type="text" placeholder="Tempat Wawancara" class="form-control m-input">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="nohp" id="nohp_wwc" placeholder="No Hp yg di hub" type="text" class="form-control m-input number">
                                                            </div>
                                                            <button type="button" class="btn btn-accent aksisales"
                                                                    data-toggle="tooltip" title="Wawancara"
                                                                    data-status="1" id="wawancara" style="width: 100%">
                                                                Wawancara
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div class="col-lg-2 text-center">

                                                        <form id="akad">
                                                            <div class="form-group">
                                                                <input name="tanggal" id="tgl_akad" placeholder="Tanggal Akad" class="form-control m-input datepick">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="waktu" id="waktu_akad" placeholder="Waktu Akad" type="text" class="form-control m-input timepick">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="tempat" id="tempat_akad" type="text" placeholder="Tempat Akad" class="form-control m-input">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="nohp" id="nohp_akad" placeholder="No Hp yg di hub" type="text" class="form-control m-input number">
                                                            </div>
                                                            <button type="button" class="btn btn-brand aksisales"
                                                                    data-toggle="tooltip" title="Akad" data-status="2"
                                                                    id="akad" style="width: 100%">Akad
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <button type="button" class="btn btn-success aksisales"
                                                                data-toggle="tooltip" title="Selesai" data-status="3"
                                                                id="selesai" style="width: 100%">Selesai
                                                        </button>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <button type="button" class="btn btn-warning aksisales"
                                                                data-toggle="tooltip" title="Tunda" data-status="4"
                                                                id="tunda" style="width: 100%">Tunda
                                                        </button>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <button type="button" class="btn btn-danger aksisales"
                                                                data-toggle="tooltip" title="Batal" data-status="5"
                                                                id="batal" style="width: 100%">Batal
                                                        </button>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <button type="button" class="btn btn-secondary"
                                                                style="border: 1px solid black;width: 100%"
                                                                data-dismiss="modal">
                                                            Kembali
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--									<div class="modal-footer">--}}
                                    {{--										<button type="button" class="btn btn-secondary" data-dismiss="modal">--}}
                                    {{--											Kembali--}}
                                    {{--										</button>--}}
                                    {{--									</div>--}}
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