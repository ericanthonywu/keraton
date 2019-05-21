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
                        <h3 class="m-subheader__title m-subheader__title--separator">Form Manage Banner</h3>
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
                                    Data Banner
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 order-1 order-xl-2">
                                    <a href="{{url('banner/tambah')}}"
                                       class="btn btn-focus m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
												<span>
													<i class="la la-plus"></i>
													<span>Tambah Banner</span>
												</span>
                                    </a>
                                    <div class="m-separator m-separator--dashed d-xl-none"></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="detailuserbanner" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">List User Konfirmasi Banner</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <table id="tbldetailuserbanner"
                                               class="table table-sm m-table m-table--head-bg-brand m_datatable ui-sortable dataTable no-footer dtr-inline"></table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end: Search Form -->

                        <!--begin: Datatable -->
                        <table class="m_datatable" id="tblbanner"></table>
                    {{--                        <div class="row" id="m_sortable_portlets">--}}
                    {{--                            <div class="col-lg-12">--}}
                    {{--                                <!--begin::Portlet-->--}}
                    {{--                                @if(array_key_exists("data",$data))--}}
                    {{--                                    <div class="m-portlet m-portlet--mobile">--}}
                    {{--                                        <div class="m-portlet__head">--}}
                    {{--                                            <div class="m-portlet__head-caption">--}}
                    {{--                                                <div class="m-portlet__head-title">--}}
                    {{--												<span class="m-portlet__head-icon">--}}
                    {{--													<i class="la la-thumb-tack m--font-success"></i>--}}
                    {{--												</span>--}}
                    {{--                                                    <h3 class="m-portlet__head-text m--font-success">--}}
                    {{--                                                        Kosong--}}
                    {{--                                                    </h3>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="m-portlet__body">--}}
                    {{--                                            <div class="row">--}}
                    {{--                                                <div class="col-lg-12">--}}
                    {{--                                                    <h1 style="text-align: center">Data Banner Tidak Tersedia</h1>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                @else--}}
                    {{--                                @foreach($data as $data_banner)--}}
                    {{--                                    <div class="m-portlet m-portlet--mobile m-portlet--sortable portlet_banner" data-id="{{$data_banner['id']}}">--}}
                    {{--                                        <div class="m-portlet__head">--}}
                    {{--                                            <div class="m-portlet__head-caption">--}}
                    {{--                                                <div class="m-portlet__head-title">--}}
                    {{--												<span class="m-portlet__head-icon">--}}
                    {{--													<i class="la la-thumb-tack m--font-success"></i>--}}
                    {{--												</span>--}}
                    {{--                                                    <h3 class="m-portlet__head-text m--font-success">--}}
                    {{--                                                    {{$x.". "}}{{$data_banner['nama']}}--}}
                    {{--                                                    </h3>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                            <div class="m-portlet__head-tools">--}}
                    {{--                                                <ul class="m-portlet__nav">--}}
                    {{--                                                    <li class="m-portlet__nav-item">--}}
                    {{--                                                        <a href="{{url("banner/edit/$data_banner[id]")}}"--}}
                    {{--                                                           class="m-portlet__nav-link btn btn-secondary m-btn m-btn--icon m-btn--icon-only m-btn--pill btn-warning">--}}
                    {{--                                                            <i class="flaticon-notes"></i>--}}
                    {{--                                                        </a>--}}
                    {{--                                                    </li>--}}
                    {{--                                                    <li class="m-portlet__nav-item">--}}
                    {{--                                                        <button class="m-portlet__nav-link btn btn-secondary m-btn m-btn--icon m-btn--icon-only m-btn--pill btn-danger btn-del"--}}
                    {{--                                                                data-id="{{$data_banner['id']}}" data-table="banner">--}}
                    {{--                                                            <i class="flaticon-delete-1"></i>--}}
                    {{--                                                        </button>--}}
                    {{--                                                    </li>--}}
                    {{--                                                </ul>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="m-portlet__body">--}}
                    {{--                                            <div class="row">--}}
                    {{--                                                <div class="col-lg-2">--}}
                    {{--                                                    <a target="_blank" href="{{url("uploads/banner/$data_banner[file]")}}">--}}
                    {{--                                                        <img src="{{url("uploads/banner/$data_banner[file]")}}"--}}
                    {{--                                                             alt="{{$data_banner['nama_file']}}" width="100%">--}}
                    {{--                                                    </a>--}}
                    {{--                                                    <p>{{$data_banner['nama_file']}}</p>--}}
                    {{--                                                </div>--}}
                    {{--                                                <div class="col-lg-8">--}}
                    {{--                                                    <p style="font-size: 10px"><i class="flaticon-whatsapp" style="font-size: 10px"></i> Phone : {{!empty($data_banner['phone']) ? $data_banner['phone'] : "-" }}</p>--}}
                    {{--                                                    <p style="font-size: 10px"><i class="flaticon-placeholder-3" style="font-size: 10px"></i> Coordinate : {{!empty($data_banner['lat']) ? $data_banner['lat'] : "-"}},{{!empty($data_banner['long']) ? $data_banner['long'] : "-"}}</p>--}}
                    {{--                                                    <p style="font-size: 10px"><i class="flaticon-web"  style="font-size: 10px"></i> Url : {!!!empty($data_banner['url']) ? "<a href='$data_banner[url]' target='_blank'>$data_banner[url]</a>" : "-"!!}</p>--}}
                    {{--													<p style="font-size: 10px"><i class="flaticon-like" style="font-size: 10px"></i> Confirmation : {{!empty($data_banner['confirmation']) ? $data_banner['confirmation'] : "-"}} </p>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                            @endforeach--}}
                    {{--                            @endif--}}
                    {{--                            <!--end::Portlet-->--}}

                    {{--                                <!-- begin:Empty Portlet: sortable porlet required for each columns! -->--}}
                    {{--                                <div class="m-portlet m-portlet--sortable-empty">--}}
                    {{--                                </div>--}}

                    {{--                                <!--end::Empty Portlet-->--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    <!--end: Datatable -->
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