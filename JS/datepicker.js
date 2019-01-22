var dateToday = new Date();
$( function() {
  $( "#datepicker" ).datepicker({
    changeMonth: true,
    changeYear: true,
    minDate: dateToday
  });
} );