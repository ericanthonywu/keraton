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
                                content: `<span style="color:#000"><center> ${data.profile_picture ? `<a target="_blank" href="${base_url}uploads/marketing/${data.profile_picture}"><img src="${base_url}uploads/marketing/${data.profile_picture}" alt="" width="100"></a> ` : `tidak ada foto marketing ${data.name}`} </center><br><center> ${data.name}</center> <br> Last Updated : ${data.last_updated}</span>`
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