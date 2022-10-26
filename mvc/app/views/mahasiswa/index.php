<div class="container mt-5">
	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal" id="tombolTambahData">
			  + Tambah Data Mahasiswa
			</button>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<form action="<?= BASEURL; ?>/mahasiswa/cari" method="POST">
				<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="Cari Mahasiswa..." name="keyword" id="keyword" autocomplete="off">
				  <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
				</div>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<h1>Daftar Mahasiswa</h1>
			<ul class="list-group">
				<?php foreach( $data['mhs'] as $mhs) : ?>
					<li class="list-group-item">
						<?= $mhs['nama']; ?>
						<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge bg-danger float-end ms-1" onclick="return confirm('Yakin??');">Hapus</a>
						<a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge bg-success float-end ms-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>
						<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-end ms-1">Detail</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
        	<input type="hidden" id="id" name="id">
        	<div class="mb-3">
			  <input type="text" class="form-control" id="nama" name="nama" placeholder="NAMA">
			</div>
        	<div class="mb-3">
			  <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM">
			</div>
        	<div class="mb-3">
			  <input type="email" class="form-control" id="email" name="email" placeholder="E-MAIL">
			</div>
			<div class="form-group">
				<select class="form-select" aria-label="Default select example" name="jurusan" id="jurusan">
				  <option selected>JURUSAN</option>
				  <option value="Teknik Informatika">Teknik Informatika</option>
				  <option value="Teknik Mesin">Teknik Mesin</option>
				  <option value="Teknik Elektro">Teknik Elektro</option>
				  <option value="Manajemen Agribisnis">Manajemen Agribisnis</option>
				  <option value="Manajemen Industri">Manajemen Industri</option>
				</select>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>