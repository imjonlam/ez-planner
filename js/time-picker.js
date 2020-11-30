$(document).ready(function() {
    var time_input = $('#start_time, #end_time');
    time_input.timepicker({
        timeFormat: 'h:mm p',
        interval: 30,
        minTime: '0',
        maxTime: '11:59pm',
        defaultTime: '8',
        startTime: '0',
        dynamic: true,
        dropdown: true,
        scrollbar: true
    });
});