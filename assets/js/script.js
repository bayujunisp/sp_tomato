$(document).ready(function(){

	var data = "data_daftar.php";
	$('#data-pendaftar').load(data);

	function getAll()
	{
		$.ajax({
			url: 'data_daftar.php',
			data: 'action=show-all',
			cache: false,
			success: function(response){
				// jika berhasil 
				$("#pendaftar").html(response);
			}
		});			
}

		getAll();

	// ketika ada event change
	$("#getDaftar").change(function()
	{				
		var pil = $(this).find(":selected").val();
		var dataString = 'action='+ pil;
				
		$.ajax({
			url: 'data_daftar.php',
			data: dataString,
			cache: false,
			success: function(response){
				// jika berhasil 
				$("#pendaftar").html(response);
			} 
		});
})

	
	
	$(document).on('click','#edit_daftar',function(e){
		e.preventDefault();
		$("#modal-edit").modal('show');
		$.post('edit_daftar.php',
			{id:$(this).attr('data-id')},
			function(html){
				$("#data-edit").html(html);
			}   
		);
	});
	
	
	$("#form-edit").submit(function(e) {
		e.preventDefault();
		
		var dataform = $("#form-edit").serialize();
		$.ajax({
			url: "update_daftar.php",
			type: "post",
			data: dataform,
			success: function() {
					alert("Berhasil Edit Data Daftar");
					$('#modal-edit').modal('hide');
					$("#nik").val('');
					$("#password").val('');
					$("#nama_pendaftar").val('');
					$("#pilihan_pendaftar").val('');
					$('#data-pendaftar').load(data);
			}
		});
	});

	$(document).on('click','#edit_formulir',function(e){
		e.preventDefault();
		$("#modal-formulir").modal('show');
		$.post('edit_formulir.php',
			{id:$(this).attr('data-id')},
			function(html){
				$("#data-formulir").html(html);
			}   
		);
	});
	
	
	$("#form-formulir").submit(function(e) {
		e.preventDefault();

		var dataform = new FormData($("#form-formulir")[0]);
		$.ajax({
			url: "update_formulir.php",
			type: "post",
			processData: false,
			contentType: false,
			data: dataform,
			success: function() {
					alert("Berhasil Edit Data Formulir");
					$('#modal-formulir').modal('hide');
					$("#nama_lengkap").val('');
					$("#nama_panggilan").val('');
					$("#jenis_kelamin").val('');
					$("#ttp_tgl").val('');
					$("#agama").val('');
					$("#anak_ke").val('');
					$("#nama_ayah").val('');
					$("#tgl_lahir_ayah").val('');
					$("#pendidikan_ayah").val('');
					$("#pekerjaan_ayah").val('');
					$("#nama_ibu").val('');
					$("#tgl_lahir_ibu").val('');
					$("#pendidikan_ibu").val('');
					$("#pekerjaan_ibu").val('');
					$("#nama_jalan").val('');
					$("#kelurahan").val('');
					$("#kecamatan").val('');
					$("#kota").val('');
					$("#provinsi").val('');
					$("#telp").val('');
					$("#gambar2").val('');
					$("#gambar1").val('');
					$('#data-pendaftar').load(data);
				
			}
		});
	});

	

	


	});