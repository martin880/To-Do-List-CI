<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<!-- Toastr -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
	<!-- DataTables -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.bootstrap4.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css"/>
	<title>TO-DO-LIST</title>
  </head>
  <body>
    <div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<h1 class="text-center">
					Projek CRUD TO-DO-LIST
				</h1>
				<hr style="background-color: black; color: black; height: 1px;">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 mt-2">
			<!-- Buat Modal disini -->
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
					Tambah To-Do
				</button>

					<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" role="dialog" aria-hidden="true">
					<div class="modal-dialog" role="document"> 
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Tambah To-Do</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							</button>
						</div>
						<div class="modal-body">
							<!-- Buat To-Do Form -->
							<form action="" method="post" id="form">
								<div class="form-group">
									<label for="">Nama Tugas</label>
									<input type="text" id="todo_name" class="form-control">
								</div>
							</form>
						</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary" id="add">Tambah To-Do</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 mt-4">
				<div class="table-responsive">
					<table class="table" id="records">
						<thead>
							<tr>
								<th>ID</th>
								<th>TO DO LIST</th>
								<th>AKSI</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>


	<!--Edit Modal -->
	<div class="modal fade" id="edit_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Edit data record</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
		<!-- Edit To-Do Form -->
		<form action="" method="post" id="edit_form">
		<input type="hidden" id="edit_record_id" name="edit_record_id" value="">
			<div class="form-group">
				<label for="">Nama Tugas</label>
				<input type="text" id="edit_todo_name" class="form-control">
			</div>
		</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary" id="update">Update</button>
		</div>
		</div>
	</div>
	</div>

    <!-- Optional JavaScript; choose one of the two! -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
	
	<!-- Toastr library -->
	<script src= "//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
	<!-- Font awesome -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script>
    
	<!-- DataTables -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.bootstrap4.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>

	<!-- Sweet Alert -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

   	<!-- Tambah To-Do -->
   	<script>
		$(document).on("click", "#add", function(e){
			e.preventDefault();
			
			var todo_name = $("#todo_name").val();
			
			if (todo_name == ""){
				alert("Kolom tidak boleh kosong !!!");
			}else{
				$.ajax({
					url: "<?php echo base_url(); ?>insert",
					type: "post",
					dataType: "json",
					data: {
						todo_name: todo_name
					},
					success: function(data){
						if (data.response == "success"){
							$('#records').DataTable().destroy();
							fetch();
							$('#exampleModal').modal('hide');
							toastr["success"](data.message);
						}else{
							toastr["error"](data.message);
						}
					}
				});

				$("#form")[0].reset();
			}
		});

		// Fetch data record

		function fetch(){
			$.ajax({
				url: "<?php echo base_url(); ?>fetch",
				type: "post",
				dataType: "json",
				success: function(data){

					if (data.response == "success"){
						
						var i = "1";
						$('#records').DataTable( {
							// Solving the problem of DataTables warning: table id=records - Requested unknown parameter '0' for row 0, column 0.
							columnDefs: [{
								"defaultContent": "-",
								"targets": "_all"
							}],
						"data": data.posts,
						"responsive": true,
						dom: 
						  "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                          "<'row'<'col-sm-12'tr>>" +
                          "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
						buttons: [
							'copy', 'excel', 'pdf'
						],
						"columns": [
								{ "render": function(){
									return a = i++;
								}},
								{ "data": "todo_name" },
								{ "render": function ( data, type, row, meta) {
									var a = `
										<a href="#" value="${row.id}" id="del" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
										<a href="#" value="${row.id}" id="edit" class="btn btn-sm btn-outline-success"><i class="fas fa-edit"></i></a>
									`;
									return a;
								}, 
							}]
					});

					}else{
						toastr["error"](data.message);
					}
				}
			});
		}
		fetch();

		// Hapus data record

		$(document).on("click", "#del", function(e){
			e.preventDefault();

			var del_id = $(this).attr("value");

			const swalWithBootstrapButtons = Swal.mixin({
				customClass: {
					confirmButton: 'btn btn-success',
					cancelButton: 'btn btn-danger mx-2'
				},
				buttonsStyling: false
				})

				swalWithBootstrapButtons.fire({
				title: 'Apa anda yakin?',
				text: "Data yang terhapus tidak akan bisa kembali!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonText: 'Ya, tetap hapus!',
				cancelButtonText: 'Tidak, batalkan!',
				reverseButtons: true
				}).then((result) => {
				if (result.isConfirmed) {

					$.ajax({
					url: "<?php echo base_url(); ?>delete",
					type: "post",
					dataType: "json",
					data: {
					del_id: del_id
					},
					success: function(data){
						
						if(data.response == "success") {
							$('#records').DataTable().destroy();
							fetch();
							swalWithBootstrapButtons.fire(
							'Terhapus!',
							'Data telah berhasil terhapus.',
							'success'
							);
						}else{
							swalWithBootstrapButtons.fire(
								'Batal',
								'Datamu aman :)',
								'error'
							)
						}
					}
				});				
					
				} else if (
					/* Read more about handling dismissals below */
					result.dismiss === Swal.DismissReason.cancel
				) {
					swalWithBootstrapButtons.fire(
					'Batal',
					'Datamu aman :)',
					'error'
					)
				}
			})
		});

		// Edit data record
		$(document).on("click", "#edit", function(e){
			e.preventDefault();

			var edit_id = $(this).attr("value");

			$.ajax({
					url: "<?php echo base_url(); ?>edit",
					type: "post",
					dataType: "json",
					data: {
					edit_id: edit_id
					},
					success: function(data){
						if (data.response == "success"){
							$('#edit_modal').modal('show');
							$("#edit_record_id").val(data.post.id);
							$("#edit_todo_name").val(data.post.todo_name);
						}else{
							toastr["error"](data.message);
						}
					}
			});
		});

		// Update data record
		$(document).on("click", "#update", function(e){
			e.preventDefault();

			var edit_record_id = $("#edit_record_id").val();
			var edit_todo_name = $("#edit_todo_name").val();

			if(edit_record_id == "" || edit_todo_name == "") {
				alert("Kolom tidak boleh kosong !!!");
			}else{
				$.ajax({
					url: "<?php echo base_url(); ?>update",
					type: "post",
					dataType: "json",
					data: {
						edit_record_id: edit_record_id,
						edit_todo_name: edit_todo_name
					},

					success: function(data){
						if (data.response == "success"){
							$('#records').DataTable().destroy();
							fetch();
							$('#edit_modal').modal('hide');
							toastr["success"](data.message);
						}else{
							toastr["error"](data.message);
						}
					}
				});
			}
		});

   	</script>
  </body>
</html>