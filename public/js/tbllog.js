$(document).ready(function () {
    const getlog = (offset, search = null, limit, pagi = null) => {
        let limitnya = Number(limit) || Number($('#select_limit').val())
        let offsetnya = Number(offset) == 0 || (Number($('.pagination').find('.active').text()) * limitnya) - limitnya;
        let searchnya = search || $('#searchlog').val()
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
                    no = Number(pagi) || (Number(offsetnya) === 1 ? Number(offsetnya) : Number(offsetnya) + 1);
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
                    type: 'GET',
                    url: `${base_url}table/totallog`,
                    success: total => {
                        $('#tblstatus').html(`Menampilkan ${Number(limitnya) > total ? total : jumlahdata} dari total ${Number(total)} data `);

                        let totalpaginaton = Math.ceil(Number(searchnya ? jumlahdata : total) / Number(limitnya))
                        let html = '';
                        let active = pagi || Math.ceil(offsetnya / limitnya) + 1
                        for (let x = 1; x <= totalpaginaton; x++) {
                            html += `<li class="paginate_button page-item tbpag ${x === active ? "active" : ""}"><a class="page-link">${x}</a></li>`
                        }
                        $('#paginya').html(html)

                    }
                })

            },
            //TODO : Remove on production
            error: xhr => {
                console.log(xhr.responseJSON.message)
                toastr.error(xhr.responseJSON.message, "Error")
            }
        })
    }
    const jsontocsvconverter = (JSONData, ReportTitle, ShowLabel) => {
        //If JSONData is not an object then JSON.parse will parse the JSON string in an Object
        let arrData = typeof JSONData != 'object' ? JSON.parse(JSONData) : JSONData;

        let CSV = '';
        //Set Report title in first row or line

        CSV += ReportTitle + '\r\n\n';

        //This condition will generate the Label/Header
        if (ShowLabel) {
            let row = "";

            //This loop will extract the label from 1st index of on array
            for (let index in arrData[0]) {

                //Now convert each value to string and comma-seprated
                row += index + ',';
            }

            row = row.slice(0, -1);

            //append Label row with line break
            CSV += row + '\r\n';
        }

        //1st loop is to extract each row
        for (let i = 0; i < arrData.length; i++) {
            let row = "";

            //2nd loop will extract each column and convert it in string comma-seprated
            for (let index in arrData[i]) {
                row += '"' + arrData[i][index] + '",';
            }

            row.slice(0, row.length - 1);

            //add a line break after each row
            CSV += row + '\r\n';
        }

        if (CSV == '') {
            alert("Invalid data");
            return;
        }

        //Generate a file name
        const fileName = ReportTitle.replace(' ','_')

        //Initialize file format you want csv or xls
        let uri = 'data:text/csv;charset=utf-8,' + escape(CSV);

        // Now the little tricky part.
        // you can use either>> window.open(uri);
        // but this will not work in some browsers
        // or you will not get the correct file extension

        //this trick will generate a temp <a /> tag
        let link = document.createElement("a");
        link.href = uri;

        //set the visibility hidden so it will not effect on your web-layout
        link.style = "visibility:hidden";
        link.download = fileName + ".csv";

        //this part will append the anchor tag and remove it after automatic click
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }
    const exportlog = () => {
        $.get(`${base_url}table/alllog`, (data, status) => {
            if (status == "success") {
                jsontocsvconverter(data, 'Log Report', true)
            }
        })
    }
    const clearlog = () => {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: `${base_url}clearlog`,
            success: res => {
                getlog(0, null, null, 1);
            },
            error: xhr => {
                console.log(xhr.reponseJSON.message)
                toastr.error(xhr.reponseJSON.message)
            }
        })

    }
    const clearexportlog = () => {
        $.get(`${base_url}table/alllog`, (data, status) => {
            if (status == "success") {
                jsontocsvconverter(data, 'Log Report', true)
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: `${base_url}clearlog`,
                    success: res => {
                        getlog(0, null, null, 1);
                    },
                    //TODO : Remove on Production
                    error: xhr => {
                        console.log(xhr.reponseJSON.message)
                        toastr.error(xhr.reponseJSON.message)
                    }
                })
            }
        })
    }

    $('#export').click(function () {
        exportlog()
    })
    $('#clearexport').click(function () {
        clearexportlog()
    })
    $("#clear").click(function () {
        clearlog()
    })

    getlog(0, null, null, 1);

    $('#searchlog').keypress(function (e) {
        if (e.keyCode === 13) {
            const data = $(this).val();
            getlog(1, data, null, 1);
        }
    })
    $('#select_limit').change(function () {
        getlog(null, null, $(this).val(), 1);
    })
    $(document).on('click', '.tbpag', function () {
        $('.tbpag').removeClass('active')
        $(this).addClass('active')
        getlog()
    })
    $('#ujungkiri').click(function () {
        const element = $('.tbpag').first();
        if (!element.hasClass('active')) {
            element.trigger('click')
        }
    })
    $('#ujungkanan').click(function () {
        const element = $('.tbpag').last();
        if (!element.hasClass('active')) {
            element.trigger('click')
        }
    })
})