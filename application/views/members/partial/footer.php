<!--Footer-->
<footer class="page-footer pt-0 mt-5 mdb-color lighten-4">

<!--Copyright-->
<div class="footer-copyright py-3 text-center">
	  <div class="container-fluid">
		 © 2018 Copyright: <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> Shareku Team </a>

	</div>
</div>
<!--/.Copyright-->

</footer>
<!--/.Footer-->


<!-- SCRIPTS -->
<!-- JQuery -->
<script src="<?= base_url('assets/members/js/jquery-3.3.1.min.js') ?>"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?= base_url('assets/members/js/popper.min.js') ?>"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?= base_url('assets/members/js/bootstrap.js') ?>"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?= base_url('assets/members/js/mdb.min.js') ?>"></script>
<!-- DataTables.net -->
<script type="text/javascript" src="<?= base_url('assets/members/js/vendor/datatables/js/jquery.dataTables.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/members/js/vendor/datatables/js/dataTables.bootstrap4.min.js') ?>"></script>
<!--Initializations-->
<script>
// SideNav Initialization
$(".button-collapse").sideNav();

var container = document.querySelector('.custom-scrollbar');
Ps.initialize(container, {
	wheelSpeed: 2,
	wheelPropagation: true,
	minScrollbarLength: 20
});

// Material Select Initialization
$(document).ready(function () {
	$('.mdb-select').material_select();

	if (typeof $('#myfiletable') != 'undefined') {
		$('#myfiletable').DataTable();
	}

});

// Tooltips Initialization
$(function () {
	$('[data-toggle="tooltip"]').tooltip()
})
</script>

</body>
</html>
