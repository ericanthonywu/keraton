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
{{--<style>--}}
{{--	.amcharts-amexport-item {--}}
{{--		border: 2px solid #777;--}}
{{--	}--}}

{{--	.amcharts-amexport-top .amcharts-amexport-item > .amcharts-amexport-menu {--}}
{{--		top: -3px!important;--}}
{{--		left: 2px--}}
{{--	}--}}
{{--</style>--}}
<!-- begin::Body -->
<style>
    @media print {
        header, .m-subheader, footer {
            display: none;
        }

        .m-content {
            padding: 0;
        }

        #totalgroupunit {
            margin-top: 170px;
        }

        #totaldp {
            margin-top: 200px;
        }
    }
</style>
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
                        <h3 class="m-subheader__title m-subheader__title--separator">
                            Welcome, {{\Session::get('users')}}</h3>
                        <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                            <li class="m-nav__item m-nav__item--home">
                                <a href="#" class="m-nav__link m-nav__link--icon">
                                    <i class="m-nav__link-icon la la-home"></i>
                                </a>
                            </li>
                            <li class="m-nav__separator">-</li>
                            <li class="m-nav__item">
                                <a href="" class="m-nav__link">
                                    <span class="m-nav__link-text">Resources</span>
                                </a>
                            </li>
                            <li class="m-nav__separator">-</li>
                            <li class="m-nav__item">
                                <a href="" class="m-nav__link">
                                    <span class="m-nav__link-text">Timesheet</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                             m-dropdown-toggle="hover" aria-expanded="true">
                            <button class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle btn-print">
                                <i class="fa fa-print"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">

                <!--End::Section-->

                <!--Begin::Section-->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="m-portlet m-portlet--mobile  m-portlet--unair">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Total Sales
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div id="chartsales" style="height: 500px;width: auto"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="m-portlet m-portlet--mobile  m-portlet--unair">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Total Stock Unit
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">

                                <!--begin: Datatable -->
                                <div id="chartstockunit" style="height: 500px;width: auto"></div>

                                <!--end: Datatable -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12" id="totalgroupunit">
                        <div class="m-portlet m-portlet--mobile  m-portlet--unair">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Total Group Unit
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div id="chartgroupunit" style="height: 500px;width: auto"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="m-portlet m-portlet--mobile  m-portlet--unair">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Total Kinerja Sales
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">

                                <!--begin: Datatable -->
                                <div id="chartkinerjasales" style="height: 500px;width: auto"></div>

                                <!--end: Datatable -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6" id="totaldp">
                        <div class="m-portlet m-portlet--mobile  m-portlet--unair">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Total DP
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div id="chartdp" style="height: 500px;width: auto"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="m-portlet m-portlet--mobile  m-portlet--unair">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Total Commission
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">

                                <!--begin: Datatable -->
                                <div id="chartcommission" style="height: 500px;width: auto"></div>

                                <!--end: Datatable -->
                            </div>
                        </div>
                    </div>
                </div>

                <!--End::Section-->
            </div>
        </div>
    </div>

    <!-- end:: Body -->

    <!-- begin::Footer -->
@include('theme.footer')

<!-- end::Footer -->
</div>

<!-- end:: Page -->


<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->

<!-- begin::Quick Nav -->

<!-- begin::Quick Nav -->

<!--begin::Global Theme Bundle -->
@include('theme.footer')
<script>
    const base_url = window.location.origin+"/"
</script>
<script src="http://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
<script src="{{asset('amcharts4/core.js')}}"></script>
<script src="{{asset('amcharts4/charts.js')}}"></script>
<script src="{{asset('amcharts4/themes/animated.js')}}"></script>
<script src="{{asset('amcharts4/deps/pdfmake.js')}}"></script>
<script src="{{asset('js/chart.js')}}"></script>
@include('theme.script')

{{--amchart metronic--}}
{{--<script src="//www.amcharts.com/lib/3/amcharts.js" type="text/javascript"></script>--}}
{{--<script src="//www.amcharts.com/lib/3/serial.js" type="text/javascript"></script>--}}
{{--<script src="//www.amcharts.com/lib/3/radar.js" type="text/javascript"></script>--}}
{{--<script src="//www.amcharts.com/lib/3/pie.js" type="text/javascript"></script>--}}
{{--<script src="//www.amcharts.com/lib/3/plugins/tools/polarScatter/polarScatter.min.js" type="text/javascript"></script>--}}
{{--<script src="//www.amcharts.com/lib/3/plugins/animate/animate.min.js" type="text/javascript"></script>--}}
{{--<script src="//www.amcharts.com/lib/3/plugins/export/export.min.js" type="text/javascript"></script>--}}
{{--<script src="//www.amcharts.com/lib/3/themes/light.js" type="text/javascript"></script>--}}

<!--end::Global Theme Bundle -->
</body>

<!-- end::Body -->
</html>