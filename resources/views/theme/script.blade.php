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
<script src="{{asset('assets/vendors/bootstrap-maxlength/src/bootstrap-maxlength.js')}}"></script>
{{--<script src="{{asset('assets/vendors/bootstrap-switch/dist/js/bootstrap-switch.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/bootstrap-select/dist/js/bootstrap-select.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/typeahead.js/dist/typeahead.bundle.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/handlebars/dist/handlebars.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/inputmask/dist/jquery.inputmask.bundle.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/inputmask/dist/inputmask/inputmask.date.extensions.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/nouislider/distribute/nouislider.js')}}"></script>--}}
<script src="{{asset('assets/vendors/owl.carousel/dist/owl.carousel.js')}}"></script>
<script src="{{asset('assets/vendors/autosize/dist/autosize.js')}}"></script>
{{--<script src="{{asset('assets/vendors/clipboard/dist/clipboard.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/ion-rangeslider/js/ion.rangeSlider.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/dropzone/dist/dropzone.js')}}"></script>--}}
<script src="{{asset('assets/vendors/summernote/dist/summernote.js')}}"></script>
{{--<script src="{{asset('assets/vendors/markdown/lib/markdown.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/bootstrap-markdown/js/bootstrap-markdown.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/jquery-validation/dist/jquery.validate.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/jquery-validation/dist/additional-methods.js')}}"></script>--}}
{{--<script src="{{asset('assets/vendors/js/framework/components/plugins/forms/jquery-validation.init.js')}}"></script>--}}
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
<script src="{{asset('assets/vendors/custom/jquery-ui/jquery-ui.bundle.js')}}"></script>

<!--end:: Global Optional Vendors -->

<!--begin::Page Vendors -->
<script src="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>

<!--end::Page Vendors -->
<script src="https://unpkg.com/tableexport@5.2.0/dist/js/tableexport.min.js"></script>
<!--begin::Page Scripts -->
<script src="{{asset('assets/app/js/dashboard.js')}}"></script>
<script src="{{asset('assets/vendors/custom/select2/select2.js')}}"></script>
<script src="{{asset('js/plugin.js')}}"></script>
<script src="{{asset('js/sortable.js')}}"></script>
<script src="{{asset('js/datatable.js')}}"></script>
<script src="{{asset('js/form_validate.js')}}"></script>
<script src="{{asset('js/select2.js')}}"></script>
<script src="{{asset('js/editdel.js')}}"></script>
<script src="{{asset('js/script-manual.js')}}"></script>
<!--end::Page Scripts -->