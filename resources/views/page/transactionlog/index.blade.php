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
<style>
    div.paginatescroll
    {
        max-width: 300px;
        overflow-x:auto;
        overflow-y:hidden;
    }
</style>

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
                        <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                            <div class="row align-items-center">
                                <div class="col-xl-8 order-2 order-xl-1">
                                    <div class="form-group m-form__group row align-items-center">
                                        <div class="col-md-6">
                                            <div class="m-input-icon m-input-icon--left">
                                                <input type="text" class="form-control m-input m-input--solid"
                                                       placeholder="Search..." id="searchlog">
                                                <span class="m-input-icon__icon m-input-icon__icon--left">
															<span><i class="la la-search"></i></span>
														</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 order-1 order-xl-2">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary">Clear & Export</button>
                                        <button type="button"
                                                class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item">Clear Only</a>
                                            <a class="dropdown-item">Export Only</a>
                                        </div>
                                    </div>
                                    <div class="m-separator m-separator--dashed d-xl-none"></div>
                                </div>
                            </div>
                        </div>
                        <!--begin: Datatable -->
                        <div class="table-responsive">
                            <table class="table table-bordered m-table m-table--border-brand m-table--head-bg-brand"
                                   id="tbllog">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td colspan="3" style="text-align: center"><span
                                                class="btn m-btn btn-secondary m-loader m-loader--success m-loader--right">Load Data ... </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="tblstatus" >

                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 dataTables_pager">
                                <div class="dataTables_length">
                                    <div class="dropdown">
                                        <select class="select2 form-control-sm custom-select-sm" id="select_limit">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="5000">All</option>
                                        </select> <span>Data</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_paginate paging_simple_numbers">
                                    <ul class="pagination pull-right">
                                        <li class="paginate_button page-item " id="ujungkiri"><a class="page-link"><i class="la la-angle-double-left"></i></a></li>
                                        <li class="paginate_button page-item " id="kiri"><a class="page-link"><i class="la la-angle-left"></i></a></li>
                                        <div class="paginatescroll">
                                            <ul class="pagination" id="paginya">
                                                <li class="paginate_button page-item"><a class="page-link tbpag"><div class="m-loader m-loader--brand"></div></a></li>
                                            </ul>
                                        </div>
                                        <li class="paginate_button page-item " id="kanan"><a class="page-link"><i class="la la-angle-right"></i></a></li>
                                        <li class="paginate_button page-item " id="ujungkanan"><a class="page-link"><i class="la la-angle-double-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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
<script src="{{asset('js/tbllog.js')}}"></script>

<!--end::Global Theme Bundle -->
</body>

<!-- end::Body -->
</html>