mApp.blockPage({
    overlayColor: '#000000',
    type: 'loader',
    state: 'success',
    message: 'Please wait...'
});
$(window).bind('beforeunload', () =>{
    mApp.blockPage({
        overlayColor: '#000000',
        type: 'loader',
        state: 'success',
        message: 'Please wait...'
    });
});
$(document).ready(function () {
    mApp.unblockPage();
    $('.btn-data').tooltip();
    toastr.options = {
        "closeButton": true,
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

    function numberWithCommas(n) {
        var parts = n.toString().split(".");
        return parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (parts[1] ? "." + parts[1] : "");
    }

    let monthNames = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

    let tblbanner = $('#tblbanner').DataTable({
        dom: "<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>\n\t\t\t<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>", // horizobtal scrollable datatable
        responsive: false,
        ajax: ` ${base_url}table/banner`,
        language: {
            loadingRecords: '&nbsp;',
            processing: '<div class="m-loader m-loader--brand"></div>',
        },
        columns: [
            {
                title: "No",
                data: "no",
                sClass: "text-center",
            },
            {
                title: "Nama",
                data: "nama",
                sClass: "text-center",
            },
            {
                title: "Gambar",
                data: "file",
                sClass: "text-center",
                render: (t, e, a) => {
                    return `<a class="m-link" target="_blank" href="${base_url}uploads/banner/${t}"> <img src="${base_url}uploads/banner/${t}" width="100px"></a>`
                }
            },
            {
                title: "No Telp",
                data: "phone",
                sClass: "text-center",
                render: (t, e, a) => {
                    return t ? t : "Data Kosong"
                }
            },
            {
                title: "Url",
                data: "url",
                sClass: "text-center",
                render: (t, e, a) => {
                    return t ? `<a class="m-link" target="_blank" href="${t}">${t}</a>` : "Data Kosong"
                }
            },
            {
                title: "Koordinat Map",
                data: "lat",
                sClass: "text-center",
                render: (t, e, a) => {
                    return `<a target="_blank" class="m-link" href="https://maps.google.com/maps?q=${t},${a.long}"><i class="flaticon-map-location"></i></a>`
                }
            },
            {
                title: "Konfirmasi",
                data: "confirmation",
                sClass: "text-center",
                render: (t,e,a)=>{
                    return t ? `<a href="#" class="m-link btndetailuserbanner" data-id="${a.id}" data-toggle="modal" data-target="#detailuserbanner">Judul : ${t} <br> User : ${numberWithCommas(a.userkonfirmasi)}</a>` : "Tidak ada Konfirmasi"
                }
            },
            {
                data: "id",
                sClass: "text-center",
                render: (t, e, a) => {
                    $('.btn-data').tooltip();
                    return `
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                    </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a href="${base_url}banner/edit/${t}" class="dropdown-item" title="Perbarui Data">
                                <i class="flaticon-notes"></i> Edit
                            </a>
                            ${a.delete ? `<button class="dropdown-item btn-del" data-id="${t}" data-table="banner"><i class="flaticon-delete-1"></i> Delete </button>` : ""}
                        </div>
                    `;
                }
            },
            {
                data: "id",
                sClass: "text-center",
                width: 100,
                render: (t, e, a) => {
                    return `<i class="flaticon-arrows"></i>`
                }
            }
        ],
        language: {
            aria: {
                sortAscending: ": activate to sort column ascending",
                sortDescending: ": activate to sort column descending"
            },
            emptyTable: "Data Banner tidak tersedia",
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            infoEmpty: "Data tidak ditemukan",
            infoFiltered: "(Terfilter _TOTAL_ data dari _MAX_ total data)",
            lengthMenu: "_MENU_ data",
            search: "Cari:",
            zeroRecords: "Tidak ada data yang cocok"
        },

        buttons: [
            {
                extend: 'print',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-primary m-btn--gradient-to-info'
            },
            {
                extend: 'copyHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-success m-btn--gradient-to-accent'
            },
            {
                extend: 'excelHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-danger m-btn--gradient-to-warning'
            },
            {
                extend: 'csvHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger'
            },
            {
                extend: 'pdfHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-info m-btn--gradient-to-accent'
            }
        ],
        order: [
            [0, 'asc']
        ],
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, "All"] // change per page values here
        ],
        // set the initial value
        pageLength: 10
    });
    let tblunit = $('#tblunit').DataTable({
        dom: "<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>\n\t\t\t<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>", // horizobtal scrollable datatable
        responsive: true,
        ajax: ` ${base_url}table/unit`,
        processing: true,
        language: {
            loadingRecords: '&nbsp;',
            processing: '<div class="m-loader m-loader--brand"></div>',
            processing: 'Tunggu lok',
        },
        columns: [
            {
                title: "No",
                data: "no",
                sClass: "text-center",
            },
            {
                title: "Nama",
                data: "nama",
                sClass: "text-center",
            },
            {
                title: "Lokasi",
                data: "lokasi",
                sClass: "text-center",
            },
            {
                title: "Foto",
                data: "id",
                sClass: "text-center",
                render: (t, e, a) => {
                    return `<button class="btn btn-circle btn-primary btn-outline-primary btn-show-photo btn-xs btn-data" data-original-title="Show Photo" data-toggle="modal" data-target="#showphoto" data-id="${t}"><i class="flaticon-photo-camera"></i> </button>`
                }
            },
            {
                title: "Harga",
                data: "harga",
                sClass: "text-center",
                render: (t, e, a) => {
                    return "Rp. " + numberWithCommas(t)
                }
            },
            {
                title: "Deskripsi",
                data: "description",
                sClass: "text-center",
                render: (t, e, a) => {
                    return `<button class="btn btn-primary showdeskripsi" data-toggle="modal" data-target="#divdeskripsi" data-id="${a.id}">Lihat Deskripsi</button>`
                }
            },
            {
                title: "Dibuat Oleh",
                data: "created_by",
                sClass: "text-center",
            },
            {
                title: "Tanggal Di Buat",
                data: "date_created",
                sClass: "text-center",
            },
            {
                data: "id",
                sClass: "text-center",
                render: (t, e, a) => {
                    $('.btn-data').tooltip();
                    return a.delete || a.edit ? `
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            ${a.edit ? `<a href="${base_url}unit/edit/${t}" class="dropdown-item" title="Perbarui Data">
                                <i class="flaticon-notes"></i> Edit
                            </a>`:""}
                            ${a.delete ? `<button class="dropdown-item btn-del" data-id="${t}" data-table="banner"><i class="flaticon-delete-1"></i> Delete </button>` : ""}
                                        </div>
                    `:'&nbsp;';
                }
            },
        ],
        language: {
            aria: {
                sortAscending: ": activate to sort column ascending",
                sortDescending: ": activate to sort column descending"
            },
            emptyTable: "Data Unit tidak tersedia",
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            infoEmpty: "Data tidak ditemukan",
            infoFiltered: "(Terfilter _TOTAL_ data dari _MAX_ total data)",
            lengthMenu: "_MENU_ data",
            search: "Cari:",
            zeroRecords: "Tidak ada data yang cocok"
        },
        colReorder: {
            realtime: true
        },
        buttons: [
            {
                extend: 'print',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-primary m-btn--gradient-to-info'
            },
            {
                extend: 'copyHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-success m-btn--gradient-to-accent'
            },
            {
                extend: 'excelHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-danger m-btn--gradient-to-warning'
            },
            {
                extend: 'csvHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger'
            },
            {
                extend: 'pdfHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-info m-btn--gradient-to-accent'
            }
        ],
        order: [
            [0, 'asc']
        ],
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, "All"] // change per page values here
        ],
        // set the initial value
        pageLength: 10
    });
    let tblunitfile = $('#tblunit_file').DataTable({
        // dom: "<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>\n\t\t\t<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>", // horizobtal scrollable datatable
        responsive: true,
        processing: true,
        ajax: `${base_url}table/unit_file/0`,
        language: {
            loadingRecords: '&nbsp;',
            processing: '<div class="m-loader m-loader--brand"></div>',
            processing: 'Tunggu lok',
        },
        columns: [
            {
                title: "No. Urut",
                data: "no",
                sClass: "text-center",
            },
            {
                title: "Gambar Unit",
                data: "image",
                sClass: "text-center",
                render: (t, e, a) => {
                    return `<a class="m-link" target="_blank" href="${base_url}uploads/unit/${t}"><img alt="${t}" src="${base_url}uploads/unit/${t}" draggable="false" width="100px">`
                }
            },
            {
                data: "id",
                sClass: "text-center",
                width: 100,
                render: (t, e, a) => {
                    $('.btn-data').tooltip();
                    return a.delete ? `
                        <button class="btn btn-danger btn-del" data-id="${t}" data-table="unit_file">
                            <i class="flaticon-delete-1"></i>
                        </button>
                    ` : null;
                }
            },
            {
                width: 100,
                sClass: "text-center",
                render: (t, e, a) => {
                    $('.btn-data').tooltip();
                    return `<i class="flaticon-arrows">`;
                }
            },
        ],
        language: {
            aria: {
                sortAscending: ": activate to sort column ascending",
                sortDescending: ": activate to sort column descending"
            },
            emptyTable: "Data Unit tidak tersedia",
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            infoEmpty: "Data tidak ditemukan",
            infoFiltered: "(Terfilter _TOTAL_ data dari _MAX_ total data)",
            lengthMenu: "_MENU_ data",
            search: "Cari:",
            zeroRecords: "Tidak ada data yang cocok"
        },
        colReorder: {
            realtime: true
        },
        buttons: [
            {
                extend: 'print',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-primary m-btn--gradient-to-info'
            },
            {
                extend: 'copyHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-success m-btn--gradient-to-accent'
            },
            {
                extend: 'excelHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-danger m-btn--gradient-to-warning'
            },
            {
                extend: 'csvHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger'
            },
            {
                extend: 'pdfHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-info m-btn--gradient-to-accent'
            }
        ],
        order: [
            [0, 'asc']
        ],
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, "All"] // change per page values here
        ],
        // set the initial value
        pageLength: 10
    });
    let tblsale = $('#tblsale').DataTable({
        dom: "<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>\n\t\t\t<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>", // horizobtal scrollable datatable
        responsive: false,
        ajax: ` ${base_url}table/sale`,
        language: {
            loadingRecords: '&nbsp;',
            processing: '<div class="m-loader m-loader--brand"></div>',
        },
        columns: [
            {
                title: "No",
                data: "no",
                sClass: "text-center",
            },
            {
                title: "Nama Unit",
                data: "nama_unit",
                sClass: "text-center",
            },
            {
                title: "Nama Peminat",
                data: "nama",
                sClass: "text-center",
            },
            {
                title: "Tanggal",
                data:"tanggal_dibuat",
                sClass: "text-center",
            },
            {
                title: "Status",
                data: "status",
                sClass: "text-center",
                render: (t, e, a) => {
                    switch (t) {
                        case 0:
                            return "<span class='m-badge m-badge--warning m-badge--wide'> On progress</span>"
                        case 1:
                            return "<span class='m-badge m-badge--accent m-badge--wide'>Wawancara</span>"
                        case 2:
                            return "<span class='m-badge m-badge--brand m-badge--wide'>Akad</span>"
                        case 3:
                            return "<span class='m-badge m-badge--success m-badge--wide'>Selesai</span>"
                        case 4:
                            return "<span class='m-badge m-badge--warning m-badge--wide'>Tunda</span>"
                        case 5:
                            return "<span class='m-badge m-badge--danger m-badge--wide'>Batal</span>"
                        default:
                            return t
                    }
                }
            },
        ],
        language: {
            aria: {
                sortAscending: ": activate to sort column ascending",
                sortDescending: ": activate to sort column descending"
            },
            emptyTable: "Data Sale tidak tersedia",
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            infoEmpty: "Data tidak ditemukan",
            infoFiltered: "(Terfilter _TOTAL_ data dari _MAX_ total data)",
            lengthMenu: "_MENU_ data",
            search: "Cari:",
            zeroRecords: "Tidak ada data yang cocok"
        },
        'createdRow': ( row, data, dataIndex ) => {
            $(row).attr('data-toggle', 'modal');
            $(row).attr('data-target', '#detailtotalsales');
            $(row).css('cursor','pointer')
            $(row).addClass('detsales')
        },

        buttons: [
            {
                extend: 'print',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-primary m-btn--gradient-to-info'
            },
            {
                extend: 'copyHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-success m-btn--gradient-to-accent'
            },
            {
                extend: 'excelHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-danger m-btn--gradient-to-warning'
            },
            {
                extend: 'csvHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger'
            },
            {
                extend: 'pdfHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-info m-btn--gradient-to-accent'
            }
        ],
        order: [
            [0, 'asc']
        ],
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, "All"] // change per page values here
        ],
        // set the initial value
        pageLength: 10
    });
    let tbldetailuserbanner = $('#tbldetailuserbanner').DataTable({
        // dom: "<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>\n\t\t\t<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>", // horizobtal scrollable datatable
        responsive: true,
        processing: true,
        ajax: `${base_url}table/detailuserbanner/0`,
        language: {
            loadingRecords: '&nbsp;',
            processing: '<div class="m-loader m-loader--brand"></div>',
            processing: 'Tunggu lok',
        },
        columns: [
            {
                title: "No. Urut",
                data: "no",
                sClass: "text-center",
            },
            {
                title: "Sales",
                data: "sales",
                sClass: "text-center",
            },
            {
                title: "Tanggal Konfirmasi",
                data: "date_created",
                sClass: "text-center",
            },
        ],
        language: {
            aria: {
                sortAscending: ": activate to sort column ascending",
                sortDescending: ": activate to sort column descending"
            },
            emptyTable: "Tidak ada User yang mendaftar",
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            infoEmpty: "Data tidak ditemukan",
            infoFiltered: "(Terfilter _TOTAL_ data dari _MAX_ total data)",
            lengthMenu: "_MENU_ data",
            search: "Cari:",
            zeroRecords: "Tidak ada data yang cocok"
        },
        colReorder: {
            realtime: true
        },
        buttons: [
            {
                extend: 'print',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-primary m-btn--gradient-to-info'
            },
            {
                extend: 'copyHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-success m-btn--gradient-to-accent'
            },
            {
                extend: 'excelHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-danger m-btn--gradient-to-warning'
            },
            {
                extend: 'csvHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger'
            },
            {
                extend: 'pdfHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-info m-btn--gradient-to-accent'
            }
        ],
        order: [
            [0, 'asc']
        ],
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, "All"] // change per page values here
        ],
        // set the initial value
        pageLength: 10
    });
    let tblmessage = $('#tblmessage').DataTable({
        // dom: "<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>\n\t\t\t<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>", // horizobtal scrollable datatable
        responsive: true,
        processing: true,
        ajax: `${base_url}table/message`,
        language: {
            loadingRecords: '&nbsp;',
            processing: '<div class="m-loader m-loader--brand"></div>',
            processing: 'Tunggu lok',
        },
        columns: [
            {
                title: "No. Urut",
                data: "no",
                sClass: "text-center",
            },
            {
                title: "Marketing",
                data: "nama_marketing",
                sClass: "text-center",
            },
            {
                title: "Judul",
                data: "judul",
                sClass: "text-center",
            },
            {
                title: "Tanggal Di buat",
                data: "date_created",
                sClass: "text-center",
            },
            {
                title:"Di buat oleh",
                data:"dibuat_oleh",
                sClass:"text-center",
            },
            {
                data: "id",
                sClass: "text-center",
                render: (t, e, a) => {
                    $('.btn-data').tooltip();
                    return a.delete || a.edit ? `
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            ${a.edit ? `<a href="${base_url}message/edit/${t}" class="dropdown-item" title="Perbarui Data">
                                <i class="flaticon-notes"></i> Edit
                            </a>`:""}
                            ${a.delete ? `<button class="dropdown-item btn-del" data-id="${t}" data-table="message"><i class="flaticon-delete-1"></i> Delete </button>` : ""}
                                        </div>
                    `:'&nbsp;';
                }
            },
        ],
        language: {
            aria: {
                sortAscending: ": activate to sort column ascending",
                sortDescending: ": activate to sort column descending"
            },
            emptyTable: "Tidak ada Notifikasi ke marketing yang tersedia",
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            infoEmpty: "Data tidak ditemukan",
            infoFiltered: "(Terfilter _TOTAL_ data dari _MAX_ total data)",
            lengthMenu: "_MENU_ data",
            search: "Cari:",
            zeroRecords: "Tidak ada data yang cocok"
        },
        colReorder: {
            realtime: true
        },
        buttons: [
            {
                extend: 'print',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-primary m-btn--gradient-to-info'
            },
            {
                extend: 'copyHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-success m-btn--gradient-to-accent'
            },
            {
                extend: 'excelHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-danger m-btn--gradient-to-warning'
            },
            {
                extend: 'csvHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger'
            },
            {
                extend: 'pdfHtml5',
                className: 'btn m-btn--square  m-btn m-btn--gradient-from-info m-btn--gradient-to-accent'
            }
        ],
        order: [
            [0, 'asc']
        ],
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, "All"] // change per page values here
        ],
        // set the initial value
        pageLength: 10
    });


    var tbladmin = $('#tbladmin').mDatatable({
        // datasource definition
        data: {
            type: 'remote',
            source: `${base_url}table/admin`,
            pageSize: 10,
            serverPaging: !1,
            serverFiltering: !1,
            serverSorting: !1
        },

        // layout definition
        layout: {
            theme: 'default', // datatable theme
            class: '', // custom wrapper class
            scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
            footer: false // display/hide footer
        },

        // column sorting
        sortable: true,

        pagination: true,

        search: {
            input: $('#generalSearch')
        },

        // columns definition
        columns: [
            {
                field: "username",
                title: "Username",
                textAlign: 'center'
            },
            {
                field: "id",
                width: 110,
                title: "Actions",
                sortable: false,
                overflow: 'visible',
                textAlign: 'center',
                template: (t, e, a) => {
                    $('.btn-data').tooltip();
                    return `
                            <button class="btn btn-circle btn-warning btn-xs btn-data btn-edit"
                             data-toggle="modal" data-table="admin" data-id="${t.id}" data-target="#fedit" title="Perbarui Data">
                                <i class="flaticon-notes"></i>
                            </button>
                              &nbsp;
                            ${t.delete ? `<button type="button" class="btn btn-circle btn-danger btn-xs btn-data btn-del"
                             data-id="${t.id}" data-table="admin" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                                <i class="flaticon-delete-1"></i>
                            </button>`: ""}
                    `;
                }
            }
        ]
    });
    var tblmanager = $('#tblmanager').mDatatable({
        // datasource definition
        data: {
            type: 'remote',
            source: `${base_url}table/manager`,
            pageSize: 10,
            serverPaging: !0,
            serverFiltering: !1,
            serverSorting: !0
        },

        // layout definition
        layout: {
            theme: 'default', // datatable theme
            class: '', // custom wrapper class
            scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
            footer: false // display/hide footer
        },

        // column sorting
        sortable: true,

        pagination: true,

        search: {
            input: $('#generalSearch')
        },

        // columns definition
        columns: [
            {
                field: "username",
                title: "Username",
                textAlign: 'center'
            },
            {
                field: "upline",
                title: "Upline",
                textAlign: 'center',
            },
            {
                field: "id",
                width: 110,
                title: "Actions",
                sortable: false,
                overflow: 'visible',
                textAlign: 'center',
                template: (t, e, a) => {
                    $('.btn-data').tooltip();
                    return `
                            <button class="btn btn-circle btn-warning btn-xs btn-data btn-edit"
                             data-toggle="modal" data-table="admin" data-id="${t.id}" data-target="#fedit" title="Perbarui Data">
                                <i class="flaticon-notes"></i>
                            </button>
                              &nbsp;
                            ${t.delete ? `<button type="button" class="btn btn-circle btn-danger btn-xs btn-data btn-del"
                             data-id="${t.id}" data-table="admin" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                                <i class="flaticon-delete-1"></i>
                            </button>`:""}
                    `;
                }
            }
        ]
    });
    var tblmarketing = $('#tblmarketing').mDatatable({
        // datasource definition
        data: {
            type: 'remote',
            source: `${base_url}table/marketing`,
            pageSize: 10,
            serverPaging: !0,
            serverFiltering: !1,
            serverSorting: !0
        },

        // layout definition
        layout: {
            theme: 'default', // datatable theme
            class: '', // custom wrapper class
            scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
            footer: false // display/hide footer
        },

        // column sorting
        sortable: true,

        pagination: true,

        search: {
            input: $('#generalSearch')
        },

        // columns definition
        columns: [
            {
                field: "name",
                title: "Username",
                textAlign: 'center'
            },
            {
                field: "email",
                title: "Email",
                textAlign: 'center',
            },
            {
                field: "upline",
                title: "Upline",
                textAlign: 'center',
            },
            {
                field: "id",
                width: 110,
                title: "Actions",
                sortable: false,
                overflow: 'visible',
                textAlign: 'center',
                template: (t, e, a) => {
                    $('.btn-data').tooltip();
                    return `
                            <button class="btn btn-circle btn-warning btn-xs btn-data btn-edit"
                             data-toggle="modal" data-table="users" data-id="${t.id}" data-target="#fedit" title="Perbarui Data">
                                <i class="flaticon-notes"></i>
                            </button>
                              &nbsp;
                            ${t.delete ? `<button type="button" class="btn btn-circle btn-danger btn-xs btn-data btn-del"
                             data-id="${t.id}" data-table="users" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                                <i class="flaticon-delete-1"></i>
                            </button>`:""}
                    `;
                }
            }
        ]
    });
    var tbllokasiunit = $('#tbllokasiunit').mDatatable({
        // datasource definition
        data: {
            type: 'remote',
            source: `${base_url}table/lokasiunit`,
            pageSize: 10,
        },

        // layout definition
        layout: {
            theme: 'default', // datatable theme
            class: '', // custom wrapper class
            scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
            footer: false // display/hide footer
        },

        // column sorting
        sortable: true,

        pagination: true,

        search: {
            input: $('#generalSearch')
        },

        // columns definition
        columns: [
            {
                field: "lokasi",
                title: "Lokasi",
                textAlign: 'center',
            },
            {
                field: "id",
                title: "Actions",
                sortable: false,
                overflow: 'visible',
                textAlign: 'center',
                width: 110,
                template: (t, e, a) => {
                    $('.btn-data').tooltip();
                    return `
                            <button type="button" class="btn btn-circle btn-warning btn-xs btn-data btn-edit-lokasi" data-lokasi="${t.lokasi}" data-id="${t.id}" title="Perbarui Data" data-toggle="tooltip">
                                <i class="flaticon-notes"></i>
                            </button>
                              &nbsp;
                            <button type="button" class="btn btn-circle btn-danger btn-xs btn-data btn-del"
                             data-toggle="modal" data-target="" data-id="${t.id}" data-table="lokasi_unit" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                                <i class="flaticon-delete-1"></i>
                            </button>
                    `;
                }
            }
        ]
    });


    //----------tambah edit delete----------------------------
    $(document).on('submit', 'form', function (e) {
        console.log('dapet')
        e.preventDefault();
        const data = new FormData(this);
        const action = $(this).data('action');
        const url = $(this).find('input[type="submit"]').val() === "Edit" || action === "unit_update" ?
            `${base_url}action/update/${action}` :
            `${base_url}action/${action}`;
        if (action === "cpassword") {
            if ($('#konfpassword').val() === $('#newpassword').val()) {
                $.ajax({
                    type: 'POST',
                    data: data,
                    url: url,
                    enctype: 'multipart/form-data',
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: res => {
                        if(res){
                            toastr.error(res, "Error");
                        }else {
                            $('button.close[data-dismiss="modal"]').click();
                        }
                    },
                    error: xhr => {
                        console.log(typeof xhr.responseJSON === "undefined" ? xhr : xhr.responseJSON.message);
                    }
                })
            }else{
                toastr.error("Password berbeda dengan konfirmasi", "Error");
            }
        }else{
            $.ajax({
                type: 'POST',
                data: data,
                url: url,
                enctype: 'multipart/form-data',
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: xhr =>{
                    mApp.blockPage({
                        overlayColor: '#000000',
                        type: 'loader',
                        state: 'success',
                        message: 'Please wait...'
                    });

                },
                success: res => {
                    mApp.unblockPage();
                    if(res){
                        toastr.error(res, "Error");
                    }else {
                        switch (action) {
                            case "users":
                                tbladmin ? tbladmin.reload() : tblmanager.reload();
                                $('button.close[data-dismiss="modal"]').click();
                                // location.reload();
                                break;
                            case "marketing":
                                $('button.close[data-dismiss="modal"]').click();
                                tblmarketing.reload();
                                break;
                            case "lokasiunit":
                                tbllokasiunit.reload()
                                $('#lokasi').val('');
                                $('#btn-action-lokasiunit').val('Tambah');
                                break;
                            case "unit_update":
                                $('#close_modal').click();
                                tblunit.reload()
                                break;
                            case "unit_file":
                                $('#tblunit_file').DataTable().ajax.reload()
                                break;
                            default:
                                location.href = base_url + action;
                                break;
                        }
                    }
                },
                error: xhr => {
                    mApp.unblockPage();
                    console.log(typeof xhr.responseJSON === "undefined" ? xhr : xhr.responseJSON.message);
                }
            })
        }

    });
    $(document).on('click', '.btn-edit', function () {
        const table = $(this).data('table'),
            id = $(this).data('id');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: '/table/generateedit',
            data: {
                id: id,
                table: table
            },
            success: res => {
                console.table(res)
                let keys = Object.keys(res[0]);
                for (let i = 0; i < keys.length; i++) {
                    let key = keys[i];
                    $(`#fedit input[name="${key}"]`).val(res[0][key]);
                    $(`#fedit select[name="${key}"] option[value="${res[0][key]}"]`).attr('selected', 'selected').trigger('change');
                    $(`#fedit input[name="password"]`).val("")
                }
            }
        })
    });
    $(document).on('click', '.btn-del', function (e) {
        e.preventDefault();
        const table = $(this).data('table'),
            id = $(this).data('id');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            data: {
                id: id
            },
            url: `${base_url}delete/${table}`,
            success: res => {
                if (res) {
                    toastr.error(res, "Error");
                } else {
                    switch (table) {
                        case "admin":
                            tbladmin ? tbladmin.reload() :
                                tblmanager.reload();
                            break;
                        case "users":
                            tblmarketing.reload();
                            break;
                        case "banner":
                            // tblbanner.reload();
                            location.reload()
                            break;
                        case "lokasi_unit":
                            tbllokasiunit.reload();
                            break;
                        default:
                            $('#tbl' + table).DataTable().ajax.reload();
                            break;
                    }
                }
            },
            error: xhr => {
                console.log(xhr.responseJSON.message)
            }
        })
    });
});
