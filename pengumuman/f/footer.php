<script src="../../../assets/datepicker/libraries/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="../../../assets/datepicker/js/custom.js"></script>

<script>
$(document).ready(function(){
    setDatePicker()
    setDateRangePicker(".startdate", ".enddate")
    setMonthPicker()
    setYearPicker()
    setYearRangePicker(".startyear", ".endyear")
})

window.setTimeout(function() {
  $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove();
  });
}, 5000);

</script>

</body>
</html>
