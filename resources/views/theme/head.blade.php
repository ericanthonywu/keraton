<head>
    <meta charset="utf-8" />
    <title>Keraton</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="author" content="Eric Anthony">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--begin::Web font -->
    <script src="{{url('https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js')}}"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: () => {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->

    <!--begin::Global Theme Styles -->
    <link href="{{asset('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
    <link href="{{asset('assets/demo/demo12/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/vendors/custom/jquery-ui/jquery-ui.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/vendors/summernote/dist/summernote.css')}}" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="assets/demo/demo12/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->
{{--    <link href="{{url('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />--}}

    <!--RTL version:<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Page Vendors Styles -->
    <link rel="shortcut icon" href="{{asset('assets/logo/Keraton-logo.png')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/custom/datatables/datatables.bundle.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.5/css/rowReorder.dataTables.min.css" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/tableexport@5.2.0/dist/css/tableexport.min.css">
{{--    <link rel="stylesheet" href="{{url('assets/select2/css/select2.min.css')}}">--}}
    <link rel="stylesheet" href="{{asset('assets/select2/css/select2-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl.carousel/dist/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl.carousel/dist/assets/owl.theme.green.css')}}">
</head>