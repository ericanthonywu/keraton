$(document).ready(function () {
    const base_url = window.location.origin + "/";
    const host = window.location.host;
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
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

    $('.maxlength').maxlength({
        threshold: 5,
        warningClass: "m-badge m-badge--primary m-badge--rounded m-badge--wide",
        limitReachedClass: "m-badge m-badge--brand m-badge--rounded m-badge--wide"
    });

    $('#deskripsi').summernote({
        height: 150
    });
    $('form').attr('autocomplete', 'off');
    $('#checkkonf').click(() => {
        $('#konf').toggle(500);
    })
    $(document).on('click', '.kurang_gambar', function (e) {
        e.preventDefault();
        $(this).closest('.new_image').hide('slow', () => {
            $(this).remove()
        });
        // console.log($(this).closest('.new_image').html())
    })
    $('#tambah_gambar').click(function (e) {
        e.preventDefault();
        const con = `<div class="form-group m-form__group row new_image" style="display: none"></div>`
        const isi = `<label class="col-form-label col-lg-3 col-sm-12"></label>
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <input type="file" class="" id="uploadImage" name="foto[]" placeholder="Masukkan Nama Unit" accept="image/x-png,image/jpeg">
<!--                    <label for="file" class="custom-file-label selected"></label>-->
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <span style="cursor:pointer" class="btn btn-danger btn-outline-danger kurang_gambar"><i class="flaticon-cancel"></i></span>
                </div>`;
        $(con).appendTo('#vertical_image').fadeIn(1000)
        $('.new_image').html(isi, 500)

    })
    
    $(document).on('click', '.btn-show-photo', function () {
        const id = $(this).data('id');
        $('#tblunit_file').DataTable().ajax.url(`${base_url}table/unit_file/${id}`).load()
        $('.modal-body input[name="unitID"]').val(id)
    })

    $(document).on('click', '.btn-edit-lokasi', function (e) {
        e.preventDefault();
        const lokasi = $(this).data('lokasi');
        const id = $(this).data('id');
        $('#lokasi').val(lokasi)
        $('#id').val(id)
        $('#btn-action-lokasiunit').val('Edit')
    })
    $('#reset_flokasi').click(e => {
        e.preventDefault();
        $('#btn-action-lokasiunit').val('Tambah')
    })

    const demo1 = $('.textarea');
    const demo2 = $('.update_textarea');

    autosize(demo1);

    autosize(demo2);
    autosize.update(demo2);

    $('.m-aside-menu .m-menu__nav>.m-menu__item>.m-menu__link').css('padding', '9px 10px')

    // $('#m_aside_left_minimize_toggle').click(function () {
    //     if ($(this).hasClass('m-brand__toggler--active')) {
    //         $('.m-brand, .m-aside-left').css('width', '')
    //     } else {
    //         $('.m-brand, .m-aside-left').css('width', '200px')
    //     }
    // });
    $('#m_aside_left .m-menu__link-text').css('color', '#fff').css('font-size', '11px')
    $(document).on('click', '.btndetailuserbanner', function (e) {
        const id = $(this).data('id')
        $('#tbldetailuserbanner').DataTable().ajax.url(`${base_url}table/detailuserbanner/${id}`).load()
    })
    $(document).on('click', '.showdeskripsi', function (e) {
        $.ajax({
            type: 'POST',
            url: `${base_url}table/showdeskripsi`,
            data: {
                id: $(this).data('id')
            },
            success: res => {
                $('#divdeskripsi .modal-body').html(res);
            },
            error: xhr => {
                console.log(xhr.responseJSON.message);
            }
        })
    })
    
    $(document).on('click', '.detsales', function (e) {
        const id = $(this).attr('id').replace('row-', '')
        $.ajax({
            type: 'POST',
            data: {
                id: id
            },
            url: `${base_url}table/detailtotalsales`,
            success: res => {

                const sale = res[0]
                const unit = res[1]
                const unit_file = res[2]
                console.log(sale)

                $('#detailtotalsales .modal-body #namakonsumen').html(": <b>" + sale.nama + "</b>")
                $('#detailtotalsales .modal-body #nohpkonsumen').html(": <b>" + sale.nohp + "</b>")
                $('#detailtotalsales .modal-body #emailkonsumen').html(": <b>" + sale.email + "</b>")


                $('#detailtotalsales .modal-body #namaunit').html(": <b>" + unit.nama + "</b>")
                $('#detailtotalsales .modal-body #lokasiunit').html(": <b>" + unit.lokasi + "</b>")
                $('#detailtotalsales .modal-body #dibuat_oleh').html(": <b>" + sale.dibuat_oleh + "</b>")
                $('#detailtotalsales .modal-body #hargaunit').html(": <b>Rp. " + numberWithCommas(unit.harga) + "</b>")
                $('#detailtotalsales .modal-body #foto-ktp').attr("src", base_url + "uploads/ktp/" + sale.fotoktp).closest('a').attr('href', sale.fotoktp ? base_url + "uploads/ktp/" + sale.fotoktp : "#")
                $('#detailtotalsales .modal-body #foto-konsumen').attr("src", base_url + "uploads/konsumen/" + sale.fotokonsumen).closest('a').attr('href', sale.fotokonsumen ? base_url + "uploads/konsumen/" + sale.fotokonsumen : "#")
                $('#detailtotalsales .modal-body #foto-pasangan').attr("src", base_url + "uploads/pasangan/" + sale.fotopasangan).closest('a').attr('href', sale.fotopasangan ? base_url + "uploads/pasangan/" + sale.fotopasangan : "#")
                $('#detailtotalsales .modal-body #foto-npwp').attr("src", base_url + "uploads/npwp/" + sale.fotonpwp).closest('a').attr('href', sale.fotonpwp ? base_url + "uploads/npwp/" + sale.fotonpwp : "#")
                $('#detailtotalsales .modal-body #foto-gaji').attr("src", base_url + "uploads/gaji/" + sale.fotogaji).closest('a').attr('href', sale.fotogaji ? base_url + "uploads/gaji/" + sale.fotogaji : "#")
                $('#detailtotalsales .modal-body #foto-kerja').attr("src", base_url + "uploads/kerja/" + sale.fotokerja).closest('a').attr('href', sale.fotokerja ? base_url + "uploads/kerja/" + sale.fotokerja : "#")
                $('#detailtotalsales .modal-body #foto-spt').attr("src", base_url + "uploads/spt/" + sale.fotospt).closest('a').attr('href', sale.fotospt ? base_url + "uploads/spt/" + sale.fotospt : "#")

                unit_file.forEach(o => {
                    $('#detailtotalsales .modal-body #fotounit')
                        .trigger('add.owl.carousel', [`<div><a target="_blank" href="${base_url}uploads/unit/${o.image}"><img src="${base_url}uploads/unit/${o.image}" alt></a></div>`])
                        .trigger('refresh.owl.carousel');
                })

                console.log(id)
                $('#detailtotalsales .modal-body .aksisales').attr('data-id',Number(id))
            },
            error: xhr => {
                console.log(xhr.responseJSON.message)
            }
        })
    })
    $('.aksisales').click(function () {
        console.log('dapet')
        const id = $(this).data('id')
        const status = $(this).data('status')
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'POST',
            data:{
                id:id,
                status:status,
            },
            url:`${base_url}action/proceedsales`,
            success: res =>{
                if(res){
                    toastr.error(res,'Error')
                }else{
                    $('button[data-dismiss="modal"]').click()
                    $('#tblsale').DataTable().ajax.reload()
                }
            },
            error: xhr =>{
                console.log(xhr.responseJSON.message)
                toastr.error(xhr.responseJSON.message,'Error')
            }
        })
    })
    $('.aksisales').tooltip();

});
