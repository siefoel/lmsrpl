
<?= $this->extend('Layout/wreaper'); ?>
<?= $this->section('content') ?>
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Admin /</span> Data Siswa
</h4>
<div class="row m-1">
<!-- Complex Headers -->
              <div class="card card-action">
                <div class="card-header align-items-center">
                  <h5 class="card-action-title mb-0">Daftar Siswa</h5>
                  <div class="card-action-element">
                    <button class="btn btn-primary btn-md" type="button" data-bs-toggle="modal" data-bs-target="#add"><i class="bx bx-plus bx-xs me-1"></i>Tambah Data</button>
                  </div>
                </div>
                <div class="card-datatable text-nowrap">
                  <table class="dt-complex-header table table-siswa">
                    <thead>
                      <tr>
                        <th>Nama Siswa</th>
                        <th>Tempat, Tgl Lahir</th>
                        <th>Jurusan</th>
                        <th>Kelas</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
              <!--/ Complex Headers -->

</div>
<?= $this->endSection() ?>
<?= $this->section('modal')?>
          <div class="modal fade" id="add" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <form action="" method="POST" id="fmsiswa">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Tambah Siswa</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <small class="text-light fw-semibold">Data Siswa</small>
                    <div class="row">
                      <div class="form-group col">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="text" id="nis" name="nis" class="form-control mb-2">
                      </div>
                      <div class="form-group col">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="text" id="nisn" name="nisn" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama_siswa" class="form-label">Nama Siswa</label>
                      <input type="text" id="nama_siswa" name="nama_siswa" class="form-control">
                    </div>
                    <div class="row">
                      <div class="form-group col">
                        <label for="tmp_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" id="tmp_lahir" name="tmp_lahir" class="form-control">
                      </div>
                      <div class="form-group col">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama_siswa" class="form-label">Jenis Kelamin</label>
                      <div class="row ms-1">
                          <div class="form-check col-2">
                            <input name="gender" class="form-check-input" type="radio" value="L" id="laki">
                            <label class="form-check-label" for="laki">
                              Laki - Laki
                            </label>
                          </div>
                          <div class="form-check col-2">
                              <input name="gender" class="form-check-input" type="radio" value="P" id="permpuan">
                              <label class="form-check-label" for="permpuan">
                                Perempuan
                              </label>
                          </div>
                      </div>
                    </div>
                    <hr>
                    <small class="text-light fw-semibold">Alamat</small>
                    <div class="row">
                      <div class="form-group col">
                        <label for="prov" class="form-label">Provinsi</label>
                        <select id="prov" name="prov" class="select2 form-select form-select-lg" data-allow-clear="true">
                          <option value="AK">Alaska</option>
                          <option value="HI">Hawaii</option>
                        </select>
                      </div>
                      <div class="form-group col">
                        <label for="kota" class="form-label">Kota/ Kabupaten</label>
                        <select id="kota" name="kota" class="select2 form-select form-select-lg" data-allow-clear="true">
                          <option value="AK">Alaska</option>
                          <option value="HI">Hawaii</option>
                        </select>
                      </div>
                      <div class="form-group col">
                        <label for="kec" class="form-label">Kecamatan</label>
                        <select id="kec" name="kec" class="select2 form-select form-select-lg" data-allow-clear="true">
                          <option value="AK">Alaska</option>
                          <option value="HI">Hawaii</option>
                        </select>
                      </div>
                      <div class="form-group col">
                        <label for="desa" class="form-label">Desa/ Kelurahan</label>
                        <select id="desa" name="desa" class="select2 form-select form-select-lg" data-allow-clear="true">
                          <option value="AK">Alaska</option>
                          <option value="HI">Hawaii</option>
                        </select>
                      </div>
                      <div class="form-group">
                      <label for="alamat" class="form-label">Alamat</label>
                      <input type="text" id="alamat" name="alamat" class="form-control">
                    </div>
                    </div>
                    <hr>
                    <small class="text-light fw-semibold">Data Jurusan</small>
                    <div class="form-group">
                      <label for="id_jurusan" class="form-label">PilihJurusan</label>
                      <select id="id_jurusan" name="id_jurusan" class="select2 form-select form-select-lg" data-allow-clear="true">
                          <option value="AK">Alaska</option>
                          <option value="HI">Hawaii</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-info">Simpan</button>
                </div>
                </form>
              </div>
            </div>
          </div>
<?= $this->endSection() ?>>
<?= $this->section('css')?>
<?= $this->endSection() ?>
<?= $this->section('js') ?>
<script>
   var tabel;
    $(document).ready(function() {
                table = $(".table-siswa").DataTable()
    });
</script>
<?= $this->endSection() ?>


          