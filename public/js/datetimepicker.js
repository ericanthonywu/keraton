$(function () {
    $('.datepick').datetimepicker({
        format: "dd MM yyyy",
        todayHighlight: true,
        autoclose: true,
        startView: 2,
        minView: 3,
        forceParse: 0,
        pickerPosition: 'bottom-left',
        minDate: moment()
    });

    $('.timepick').timepicker({
        showInputs: false,
        showMeridian: false
    });
})