$(document).ready(function () {
    $("#lokasi_fix").select2({
        placeholder: 'Pilih Lokasi',
        language: {
            noResults: function () {
                return 'Tidak ada Lokasi yang tersedia'
            },
        },
        escapeMarkup: function (markup) {
            return markup
        },
    });
    $(".hakakses").select2({
        width: '100%',
        placeholder: 'Pilih Upline',
        language: {
            noResults: function () {
                return 'Tidak ada upline yang tersedia'
            },
        },
        escapeMarkup: function (markup) {
            return markup
        },
    });
})