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
                        <h3 class="m-subheader__title m-subheader__title--separator">Form Banner</h3>
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
                                        Form Tambah Banner
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <!--begin::Form-->
                        <form class="m-form m-form--state m-form--fit m-form--label-align-right" data-action="banner"
                              novalidate="novalidate">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$data['id']}}">
                            <div class="m-portlet__body">
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Nama Banner</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <input type="text" class="form-control m-input" name="nama"
                                               placeholder="Masukkan Nama Banner" value="{{$data['nama']}}" required>
                                        <span class="m-form__help">Mohon Masukkan Nama Banner</span>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Preview Gambar Banner</label>
                                    <img src="{{url("uploads/banner/".$data['file'])}}" alt="{{$data['name_file']}}"
                                         id="uploadPreview" width="50%" height="50%">
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Gambar Banner</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <input type="file" class="custom-file-input" id="uploadImage" name="file"
                                               placeholder="Masukkan Nama Banner" accept="image/x-png,image/jpeg">
                                        <label for="file" class="custom-file-label selected"></label>
                                        <span class="m-form__help">Mohon Masukkan Gambar Banner</span>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">No Hp Banner</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <input type="text" class="form-control m-input number" name="phone"
                                               placeholder="Masukkan No HP Banner" value="{{$data['phone']}}">
                                        <span class="m-form__help">Mohon Masukkan No hp Banner</span>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-6">Lat Banner</label>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <input type="hidden" name="lat" value="{{$data['lat']}}" id="lat">
                                        <input type="hidden" name="long" value="{{$data['long']}}" id="long">
                                        <div class="input-group-append">
                                            <input type="text" class="form-control" id="search_map"
                                                   placeholder="address...">
                                            <button type="button" class="btn btn-primary" id="btn_search_map"><i
                                                        class="fa fa-search"></i></button>
                                        </div>
                                        <div id="gmaps" style="height: 500px;width: 500px"></div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Konfirmasi Banner</label>
                                    <div class="m-checkbox-list">
                                        <label class="m-checkbox m-checkbox--solid m-checkbox--success">
                                            <input type="checkbox" id="checkkonf"
                                                   @if($data['confirmation']) checked @endif> Konfirmasi (Ya / Tidak)
                                            <span></span>
                                        </label>
                                        <span class="m-form__help">Mohon Tentukan Konfirmasi Banner</span>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row" id="konf"
                                     @if(empty($data['confirmation'])) style="display: none;" @endif>
                                    <label class="col-form-label col-lg-3 col-sm-12">Isi Konfirmasi Banner</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <textarea class="form-control m-input" name="confirmation"
                                                  placeholder="Masukkan Isi Konfirmasi Banner">{{$data['confirmation']}}</textarea>
                                        <span class="m-form__help">Mohon Masukkan Isi Konfirmasi Banner</span>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Url Banner</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <input type="url" class="form-control m-input" name="url"
                                               value="{{$data['url']}}" placeholder="Masukkan Url Banner">
                                        <span class="m-form__help">Mohon Masukkan Url Banner</span>
                                    </div>
                                </div>
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
{{--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAA4hPyKk1JroIrhLwPiFyz0kX-w7ll8pU&libraries=places&callback=initAutocomplete"></script>--}}
<script src="{{asset('assets/vendors/custom/gmaps/gmaps.js')}}"></script>
<script>
    const maps = new GMaps({
        div: '#gmaps',
        lat: {{$data['lat']}},
        lng: {{$data['long']}},
    });
    maps.addMarker({
        lat: {{$data['lat']}},
        lng: {{$data['long']}},
        title: 'Tempat Banner',

        draggable: true,

        dragend: e => {
            $('#lat').val(e.latLng.lat())
            $('#long').val(e.latLng.lng())
        },

        infoWindow: {
            content: '<span style="color:#000">Tempat Banner Di Sini Nantinya!</span>'
        }
    });
    const handleAction = () => {
        const text = $.trim($('#search_map').val());
        GMaps.geocode({
            address: text,
            callback: (results, status) => {
                if (status == 'OK') {
                    const latlng = results[0].geometry.location;
                    $('#lat').val(latlng.lat())
                    $('#long').val(latlng.lng())
                    maps.setCenter(latlng.lat(), latlng.lng());
                    maps.removeMarkers();
                    maps.addMarker({
                        lat: latlng.lat(),
                        lng: latlng.lng(),
                        title: 'Tempat Banner',

                        draggable: true,

                        dragend: e => {
                            $('#lat').val(e.latLng.lat())
                            $('#long').val(e.latLng.lng())
                        },

                        infoWindow: {
                            content: '<span style="color:#000">Tempat Banner Di Sini Nantinya!</span>'
                        }
                    });
                    mUtil.scrollTo('gmaps');
                }else{
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
                    toastr.error('alamat tidak ditemukan','Error')
                }
            }
        });
    }

    $('#btn_search_map').click(function (e) {
        e.preventDefault();
        handleAction();
    });

    $("#search_map").keypress(function (e) {
        const keycode = (e.keyCode ? e.keyCode : e.which);
        if (keycode == '13') {
            e.preventDefault();
            handleAction();
        }
    });

    // maps.addMarker({
    //     lat: -6.1826977,
    //     lng: 106.7883846,

    // });
    // maps.setZoom(15);
</script>

<!--end::Global Theme Bundle -->
</body>

<!-- end::Body -->
</html>