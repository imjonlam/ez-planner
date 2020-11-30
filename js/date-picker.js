$(document).ready(function() {
    var date_input = $('#start_date,#end_date');
    var today = new Date();
    var options = {
        format: 'mm/dd/yyyy',
        todayHighlight: true,
        startDate: today,
        autoclose: true,
        orientation: "top"
    };
    date_input.datepicker(options);
});