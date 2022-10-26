$(function() {
	$('#tombolTambahData').on('click', function() {
		$('#formModalLabel').html('Tambah Data Mahasiswa');
		$('.modal-footer button[type=submit').html('Tambah Data');
		$('.modal-body form').attr('action', 'http://localhost/myoop/public/mahasiswa/tambah');

		$('#nama').val('');
		$('#nim').val('');
		$('#email').val('');
		$('#jurusan').val('JURUSAN');
		$('#id').val('');
	});

	$('.tampilModalUbah').on('click', function() {
		$('#formModalLabel').html('Ubah Data Mahasiswa');
		$('.modal-footer button[type=submit').html('Ubah Data');
		$('.modal-body form').attr('action', 'http://localhost/myoop/public/mahasiswa/ubah');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/myoop/public/mahasiswa/getUbah',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data) {
				$('#nama').val(data.nama);
				$('#nim').val(data.nim);
				$('#email').val(data.email);
				$('#jurusan').val(data.jurusan);
				$('#id').val(data.id);
			}
		})
	});
});