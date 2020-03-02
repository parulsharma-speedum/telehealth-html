
<!--CHARTS-->
<!--Apex Charts-->
<script src="../js/vendors/charts/apex-charts.js"></script>
<script src="../js/scripts-init/charts/apex-charts.js"></script>
<script src="../js/scripts-init/charts/apex-series.js"></script>
<!--Sparklines-->
<script src="../js/vendors/charts/charts-sparklines.js"></script>
<script src="../js/scripts-init/charts/charts-sparklines.js"></script>
<!--Chart.js-->
<script src="../js/chart.min.js"></script>
<script src="../js/scripts-init/charts/chartsjs-utils.js"></script>
<script src="../js/scripts-init/charts/chartjs.js"></script>
<!-- Custom JS -->
<script src="../js/custom.js"></script>   
<script>
$(document).ready(function() {
    $('#exampleFor').DataTable( {
        "deferRender": true,
        scrollY:        true,
        scrollX:        true,
        scrollCollapse: true,
        fixedColumns:   true
    } );
} );
</script>  
<script>       
  $(".multiselect-drop select").select2({
    placeholder: "Select an option",
    allowClear: true,
    formatResult: format,
    formatSelection: format
  });
</script>
<!-- <script type="text/javascript">
var html = localStorage.getItem("html");
document.write(html); 
$(document).ready(function() {
$('.table-datatable table').dataTable();
} );
</script> -->

</body>
</html>
