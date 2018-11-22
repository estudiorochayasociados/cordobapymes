<!-- Core Scripts - Include with every page -->
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<!-- Core Scripts - Include with every page -->
<link rel="stylesheet" href="css/plugins/dataTables/dataTables.bootstrap.css"></style>
<script type="text/javascript" src="js/dataTables.js"></script>
<!-- Page-Level Plugin Scripts - Dashboard -->
<script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="js/plugins/morris/morris.js"></script>

<!-- SB Admin Scripts - Include with every page -->
<script src="js/sb-admin.js"></script>

<!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
<script src="js/demo/dashboard-demo.js"></script>

<script src="js/jquery.uploadPreview.min.js"></script>


<script>
$(function() {
	$('[data-toggle="tooltip"]').tooltip()
})
</script>

<script language="javascript">
$(document).ready(function() {
	$("#provincia").change(function() {
		$("#provincia option:selected").each(function() {
			elegido = $(this).val();
			$.post("../localidades.ajax.php", {
				elegido : elegido
			}, function(data) {
				$("#localidades").html(data);
			});
		});
	});

	$("#categoria").change(function() {
		$("#categoria option:selected").each(function() {
			elegido = $(this).val();
			$.post("../subcategorias.ajax.php", {
				elegido : elegido
			}, function(data) {
				$("#subcategoria").html(data);
			});
		});
	});
}); 
</script>

<script> 
$(document).ready(function() {
	$.uploadPreview({
			input_field : "#image-upload", // Default: .image-upload
			preview_box : ".image-preview", // Default: .image-preview
			label_field : "#image-label", // Default: .image-label
			label_default : "", // Default: Choose File
			label_selected : "", // Default: Change File
			no_label : false // Default: false
		});
});
</script>


<script>
$(document).ready(function(){
	$('.table').dataTable();
});
</script>

</body>

</html>

