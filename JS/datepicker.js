var dateToday = new Date();
$( function() {
  $( "#datepicker" ).datepicker({
    dateFormat: 'yy-mm-dd',
    changeMonth: true,
    changeYear: true,
    minDate: dateToday
  });
} );