$(document).ready(function () {
    function getlog(offset, search = null, limit,pagi = null) {
        let limitnya = Number(limit) || Number($('#select_limit').val())
        let offsetnya = Number(offset) == 0 || (Number($('.pagination').find('.active').text()) * limitnya) - limitnya;
        let searchnya = search || $('#searchlog').val()
        let angkaawal = (Number(offsetnya) * Number(limitnya)) - Number(limitnya);
        $.ajax({
            type: 'POST',
            url: `${base_url}table/log`,
            data: {
                offset: offsetnya,
                limit: limitnya,
                search: searchnya,
            },
            beforeSend: () => {
                $('#tbllog tbody').html(`
                    <tr>
                        <td colspan="3" style="text-align: center"><span class="btn m-btn btn-secondary m-loader m-loader--success m-loader--right">Load Data ... </span></td>
                    </tr>
                `);
            },
            success: res => {
                let jumlahdata = res.length;
                let no = 0;
                if (jumlahdata) {
                    $('#tbllog tbody').html("")
                    no = Number(offsetnya) === 1 ? Number(offsetnya) : Number(offsetnya) + 1 ;
                    res.forEach(data => {
                        $('#tbllog tbody').append(`
                            <tr>
                                <td>${no}</td>
                                <td>${data.activity}</td>
                                <td>${data.date_created}</td>
                            </tr>
                
                            `)
                        no++
                        // $('#tbllog tbody').html(html)
                    })

                } else {
                    $('#tbllog tbody').html('<tr><td colspan="3" style="text-align: center">Tidak ada log yang tersedia</td></tr>')
                }

                $.ajax({
                    type:'GET',
                    url: `${base_url}table/totallog`,
                    success: total =>{
                        $('#tblstatus').html(`Menampilkan ${Number(limitnya) > total ? total : jumlahdata} dari total ${Number(total)} data `);

                        let totalpaginaton = Math.ceil(Number(searchnya ? jumlahdata : total) / Number(limitnya))
                        let html = '';
                        let active = pagi || Math.ceil(offsetnya / limitnya) + 1
                        for(let x = 1;x <= totalpaginaton;x++){
                            html += `<li class="paginate_button page-item tbpag ${x === active ?"active":""}"><a class="page-link">${x}</a></li>`
                        }
                        $('#paginya').html(html)

                    }
                })

            },
            error: xhr => {
                console.log(xhr.responseJSON.message)
                toastr.error(xhr.responseJSON.message, "Error")
            }
        })
    }

    getlog(0,null,null,1);
    if($('.tbpag:last-child').hasClass('active')){

    }
    $('#searchlog').keypress(function (e) {
        const data = $(this).val();
        if (e.keyCode === 13) {
            const data = $(this).val();
            getlog(1, data,null,1);
        }
        setTimeout(()=>{
            getlog(1, data,null,1);
        },2000)
    })
    $('#select_limit').change(function () {
        getlog(null,null,$(this).val(),1);
    })
    $(document).on('click','.tbpag',function (){
        $('.tbpag').removeClass('active')
        $(this).addClass('active')
        getlog()
    })
    $('#ujungkiri').click(function () {
        const element = $('.tbpag').first();
        if(!element.hasClass('active')) {
            element.trigger('click')
        }
    })
    $('#ujungkanan').click(function () {
        const element = $('.tbpag').last();
        if(!element.hasClass('active')) {
            element.trigger('click')
        }
    })
})