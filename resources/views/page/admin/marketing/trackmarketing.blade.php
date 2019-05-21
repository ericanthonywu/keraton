<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Manager Dashboard Template build with Twitter Bootstrap 4
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
                        <h3 class="m-subheader__title m-subheader__title--separator">Form Tracking Marketing</h3>
                    </div>
                    <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                         m-dropdown-toggle="hover" aria-expanded="true">
                        <a href="{{url('marketing')}}"
                           class="btn btn-focus m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                            <span>
                                <i class="flaticon-delete-2"></i>
                                <span>Back</span>
                            </span>
                        </a>
                        <div class="m-separator m-separator--dashed d-xl-none"></div>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <div class="m-scrollable m-scroller">
                                    <form data-except="maps">
                                        @foreach ($marketing as $data_marketing)
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-brand">
                                                <input type="checkbox" class="marketing"
                                                       value="{{$data_marketing['id']}}"
                                                       checked> {{$data_marketing['name']}}
                                                <span></span>
                                            </label>
                                        @endforeach
                                    </form>
                                </div>
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
                                                <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-brand">
                                                    <input type="checkbox" id="carisemua" checked> Find All
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="m-input-icon m-input-icon--right">
                                                <button id="reloadmap" class="btn btn-primary">Refresh Map</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end: Search Form -->

                        <!--begin: Datatable -->
                        <div id="gmaps" style="width: 100%; height: 500px"></div>
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
<script src="//maps.google.com/maps/api/js?key=AIzaSyAA4hPyKk1JroIrhLwPiFyz0kX-w7ll8pU" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/gmaps/gmaps.js')}}"></script>
<script>
    $(document).ready(function () {
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        const showmarketing = () => {
            let arr = [];
            $('.marketing:checked').each(function () {
                arr.push($(this).val())
            })
            const data = arr.join(',');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: `${base_url}maps/trackmarketing`,
                data: {
                    marketing: data
                },
                success: res => {
                    maps.removeMarkers();
                    res.forEach(data => {
                        if (data.lat && data.long) {
                            let marker = maps.addMarker({
                                lat: data.lat,
                                lng: data.long,
                                title: `${data.name} \n ${data.last_updated}`,
                                animation: google.maps.Animation.DROP,
                                infoWindow: {
                                    content: `<span style="color:#000"> <center>${data.name}</center> <br> Last Updated : ${data.last_updated}</span>`
                                },
                                click: () => {
                                    marker.setAnimation(google.maps.Animation.BOUNCE);
                                    setTimeout(() => {
                                        marker.setAnimation(null);
                                    }, 1000)
                                }
                            });
                        }
                    })
                },
                error: xhr => {
                    toastr.error(xhr.responseJSON.message)
                    console.error(xhr.responseJSON.message)
                }
            })
        }
        $('#reloadmap').click( e =>{
            showmarketing()
        })
        $('#carisemua').change(function () {
            $('.marketing').prop('checked', $(this).is(':checked'))
            // $('.marketing').last().trigger('change')
            showmarketing();
        })
        $('#carisemua').trigger('change')
        const maps = new GMaps({
            div: '#gmaps',
            lat: -6.1826977,
            lng: 106.7883846,
        });
        $('.marketing').change(function (e) {
            e.preventDefault();
            showmarketing();
        });
    })
</script>

<!--end::Global Theme Bundle -->
</body>

<!-- end::Body -->
</html>