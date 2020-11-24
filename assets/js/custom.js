$(document).ready(function() {
	var baseUrl = $("#baseUrl").data("url");
	$(".datatable").DataTable();
	$(".select2").select2();
	$(".datepicker").datepicker({
		format: "yyyy-mm-dd"
	});
	$(".datepicker").datepicker("setDate", new Date());


	$("button[type='reset']").click(function() {
		$(".select2")
			.val(null)
			.trigger("change");
	});
	$(".custom-file-input").on("change", function() {
		var fileName = $(this)
			.val()
			.split("\\")
			.pop();
		$(this)
			.siblings(".custom-file-label")
			.addClass("selected")
			.html(fileName);
	});
	$(".filterMhs").change(function() {
		var id_prodi = $("#id_prodi").val();
		var tahun = $("#tahun").val();

		console.log(id_prodi);
		console.log(tahun);
	});
	// $(".filterMhs").change(function() {
	// 	var thisVal = $(this).val();
	// 	var thisIid = $(this).attr("id");
	// 	var parentId = $(this).data("parent");
	// 	var parentVal = $("#" + parentId).val();

	// 	var data = {};
	// 	data[thisIid] = thisVal;
	// 	data[parentId] = parentVal;

	// 	$.ajax({
	// 		type: "get",
	// 		data: data,
	// 		url: "mahasiswa/filter",
	// 		success: function(data) {
	// 			var table = $(".datatable").DataTable();
	// 			table
	// 				.rows()
	// 				.remove()
	// 				.draw();
	// 			$.each(data, function(key, val) {
	// 				key++;
	// 				table.row
	// 					.add([
	// 						key,
	// 						val.NIM,
	// 						val.NAMA,
	// 						val.Alamat,
	// 						val.Tahun_masuk,
	// 						val.tanggallahir,
	// 						val.Nama_prodi,
	// 						`<div class="dropdown dropdown-link">
	// 						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	// 							Option
	// 						</button>
	// 						<div class="dropdown-menu">
	// 							<a href='Mahasiswa/edit/${val.NIM}' class='dropdown-item'>Edit</a>
	// 							<a href='Mahasiswa/delete/${val.NIM}' class='dropdown-item confirm'>Delete</a>
	// 						</div>
	// 					</div>
	// 					`
	// 					])
	// 					.draw();
	// 			});
	// 		}
	// 	});
	// });
	$(".table-responsive").on("click", ".open-desc", function(e) {
		e.preventDefault();
		var id = $(this).data("id");
		var get_url = $(this).data("url");
		$.ajax({
			type: "get",
			data: { id_ta: id },
			url: get_url,
			success: function(data) {
				// console.log(data);
				$("#modalDesc .modal-body").html(data.deskripsi);
				$("#modalDesc .modal-header h5").html(data.Judul_TA);
				$("#modalDesc").modal("show");
			}
		});
	});
	
	$(".table-responsive").on("click", ".open-abstract", function(e) {
		e.preventDefault();
		var id = $(this).data("id");
		var get_url = $(this).data("url");
		$.ajax({
			type: "get",
			data: { id_ta: id },
			url: get_url,
			success: function(data) {
				// console.log(data);
				$("#modalDesc .modal-body").html(data.abstract);
				$("#modalDesc .modal-header h5").html(data.Judul_TA);
				$("#modalDesc").modal("show");
			}
		});
	});

	$(".btn-status .btn").click(function(e) {
		e.preventDefault();
		var status = $(this).data("status");
		var id = $(this).data("id");
		swal(
			{
				title: "Perubahan status",
				text: "Apakah anda yakin untuk mengubah status tugas akhir ini?",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Perbarui",
				closeOnConfirm: false
			},
			function() {
				$.ajax({
					type: "get",
					url: baseUrl + "Tugas_akhir/update_status",
					data: { id_status: status, id_ta: id },
					success: function(data) {
						if (data == "success") {
							swal("Berhasil", "Status berhasil diperbarui", "success");
							$(".btn-status .btn").removeClass("btn-warning");
							$(".btn-status .btn").removeClass("btn-default");

							$(".btn-status .btn").addClass("btn-default");

							$(".btn-status .btn[data-status='" + status + "']").removeClass(
								"btn-default"
							);
							$(".btn-status .btn[data-status='" + status + "']").addClass(
								"btn-warning"
							);
						} else {
							swal("Gagal", "Status gagal diperbarui", "danger");
						}
					}
				});
			}
		);
	});
	$(".table-responsive").on("click", ".pengajuan-judul", function(e) {
		e.preventDefault();
		e.preventDefault();
		var id = $(this).data("id");
		var get_url = $(this).data("url");
		$.ajax({
			type: "get",
			url: get_url,
			data: { id_ta: id },
			success: function(response) {
				$("#modalEdit #dosen")
					.val(response.Dosen_NIP)
					.change();
				$("#modalEdit #status")
					.val(response.id_status)
					.change();
				$("#modalEdit #id").val(response.id);
				$("#modalEdit").modal("show");
			}
		});
	});

	$(".table-responsive").on("click", ".edit-ta", function(e) {
		e.preventDefault();
		var id = $(this).data("id");
		$.ajax({
			type: "get",
			url: baseUrl + "Tugas_akhir/getPembimbing",
			data: { id_ta: id },
			success: function(response) {
				$("#modalEdit #dosen")
					.val(response.Dosen_NIP)
					.change();
				$("#modalEdit #status")
					.val(response.id_status)
					.change();
				$("#modalEdit #id").val(response.id);
				$("#modalEdit").modal("show");
			}
		});
	});

	$(".edit-bimbingan").click(function(e) {
		e.preventDefault();
		var id = $(this).data("id");
		$.ajax({
			type: "get",
			url: baseUrl + "Bimbingan/edit",
			data: { id_bimbingan: id },
			success: function(response) {
				$("#modalEdit #Bimbingan_ID").val(response.id_bimbingan);
				$("#modalEdit #e_Tanggal_bimbingan")
					.val(response.Tanggal_bimbingan)
					.change();
				$("#modalEdit #e_deskripsi")
					.val(response.Deskripsi)
					.change();

				$("#modalEdit").modal("show");
			}
		});
	});
	
	$(".table-responsive").on("click", ".Revisi-bimbingan", function(e) {
		e.preventDefault();
		const id = $(this).data("id");

		$("#modalRevisi #Bimbingan_ID").val(id);
		$("#modalRevisi").modal("show");
	});

	$(".edit-seminar").click(function(e) {
		e.preventDefault();
		var id = $(this).data("id");
		$.ajax({
			type: "get",
			url: baseUrl + "Seminar/edit",
			data: { id_seminar: id },
			success: function(response) {
				$("#modalEdit #id_").val(response.id_seminar);
				$("#modalEdit #Tanggal").val(response.Tanggal);
				$("#modalEdit #jam").val(response.jam);
				$("#modalEdit #NIP_Panelis").val(response.NIP_Panelis);
				$("#modalEdit #idRuangan").val(response.idRuangan);
				$("#modalEdit #id_status").val(response.id_status);
				$("#modalEdit #Nilai").val(response.Nilai);
				$("#modalEdit").modal("show");
			}
		});
	});

	$(".edit-sidang").click(function(e) {
		e.preventDefault();
		var id = $(this).data("id");
		$.ajax({
			type: "get",
			url: baseUrl + "Sidang/edit",
			data: { id_sidang: id },
			success: function(response) {
				$("#modalEdit #id_").val(response.id_sidang);
				$("#modalEdit #Tanggal").val(response.Tanggal);
				$("#modalEdit #jam").val(response.jam);
				$("#modalEdit #NIP_Panelis").val(response.NIP_Panelis);
				$("#modalEdit #idRuangan").val(response.idRuangan);
				$("#modalEdit #id_status").val(response.id_status);
				$("#modalEdit #Nilai").val(response.Nilai);
				$("#modalEdit").modal("show");
			}
		});
	});

	$(".submitConfirm").submit(function(e) {
		var id = $(this).attr("id");
		e.preventDefault();
		swal(
			{
				title: "Validasi Judul",
				text: "Apakah anda yakin untuk memvalidasi tugas akhir ini?",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Perbarui",
				closeOnConfirm: false
			},
			function() {
				$("#" + id)
					.unbind("submit")
					.submit();
			}
		);
	});
	$(".confirm").click(function(e) {
		e.preventDefault();
		var url = $(this).attr("href");
		swal(
			{
				title: "Data Akan Dihapus",
				text: "Apakah anda yakin untuk menghapus data ini?",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Hapus",
				closeOnConfirm: false
			},
			function() {
				window.location = url;
			}
		);
	});

    $('#filter_angkatan').on('change', function() {
		const data = $('#filter_angkatan :selected').attr('data-angkatan');
		const table = $('#dataTable').DataTable();
        table.column(8).search(data).draw();
    });
});
