
<?= $this->extend('Layout/wreaper'); ?>
<?= $this->section('content') ?>
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Referensi /</span> Alamat</h4>
<div class="row">
  <div class="col"><h5>Daftar Alamat Wilayah Indonesia</h5></div>
  <div class="col d-flex justify-content-end">
    <button class="btn btn-primary btn-md" style="margin-right:5px;" data-bs-toggle="modal" data-bs-target="#addPro"><i class="bx bx-plus bx-xs me-1"></i> Provinsi</button>
    <button class="btn btn-success btn-md" style="margin-right:5px;" data-bs-toggle="modal" data-bs-target="#addKota"><i class="bx bx-plus bx-xs me-1"></i> Kota/Kabupaten</button>
    <button class="btn btn-warning btn-md" style="margin-right:5px;" data-bs-toggle="modal" data-bs-target="#addKec"><i class="bx bx-plus bx-xs me-1"></i> Kecamatan</button>
    <button class="btn btn-danger btn-md" data-bs-toggle="modal" data-bs-target="#addDesa"><i class="bx bx-plus bx-xs me-1"></i> Desa / Keluarahan</button>
  </div>
    
</div>
<div class="row">
  <!-- Accordion with Icon -->
  <div class="col-md mb-4 mb-md-2 ">
    <!-- <small class="text-light fw-semibold">Accordion With Icon (Always Open)</small> -->
    <div class="accordion mt-3" id="accordionWithIcon">
      <div class="accordion-item card">
        <h2 class="accordion-header d-flex align-items-center">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionWithIcon-1" aria-expanded="false">
            <i class="bx bx-bar-chart-alt-2 me-2"></i>
            Header Option 1
          </button>
        </h2>

        <div id="accordionWithIcon-1" class="accordion-collapse collapse">
          <div class="accordion-body">
              <div class="accordion-item card">
                <h2 class="accordion-header d-flex align-items-center">
                  <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionWithIcon-2" aria-expanded="false">
                    <i class="bx bx-briefcase me-2"></i>
                    Header Option 2
                  </button>
                </h2>
                <div id="accordionWithIcon-2" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake dragée ice
                    cream
                    halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies. Jelly beans candy canes carrot
                    cake.
                    Fruitcake chocolate chupa chups.
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Accordion with Icon -->
</div>
<?= $this->endSection() ?>
<?= $this->section('modal')?>
<div class="modal fade" id="addPro" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <form action="" method="POST" id="fmprov">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Tambah Data Provinsi</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                      <label for="kd_prov" class="form-label">Kode Provinsi</label>
                      <input type="text" id="kd_prov" name="id_prov" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="nmprov" class="form-label">Nama Provinsi</label>
                      <input type="text" id="nmprov" name="nama_prov" class="form-control">
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
  
          <div class="modal fade" id="addKota" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <form action="" method="POST" id="fmkota">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Tambah Data Kota/ Kabupaten</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-2">
                      <label for="prov" class="form-label">Provinsi</label>
                      <select id="prov" name="prov" class="select2 form-select form-select-lg" data-allow-clear="true">
                          <option value="AK">Alaska</option>
                          <option value="HI">Hawaii</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                      <label for="kd_kota" class="form-label">Kode Kota/ Kabupaten</label>
                      <input type="text" id="kd_kota" name="kd_kota" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="nama_kota" class="form-label">Nama Kota/ Kabupaten</label>
                      <input type="text" id="nama_kota" name="nama_kota" class="form-control">
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

          <div class="modal fade" id="addKec" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <form action="" method="POST" id="fmkec">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Tambah Data Kecamatan</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-2">
                      <label for="kota" class="form-label">Kota / Kaabupaten</label>
                      <select id="kota" name="kota" class="select2 form-select form-select-lg" data-allow-clear="true">
                          <option value="AK">Alaska</option>
                          <option value="HI">Hawaii</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                      <label for="kd_kec" class="form-label">Kecamatan</label>
                      <input type="text" id="kd_kec" name="kd_kec" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="nama_kec" class="form-label">Nama kecamatan</label>
                      <input type="text" id="nama_kec" name="nama_kec" class="form-control">
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

          <div class="modal fade" id="addDesa" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <form action="" method="POST" id="fmdesa">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Tambah Data Desa</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-2">
                      <label for="kec" class="form-label">Kecamatan</label>
                      <select id="kec" name="kec" class="select2 form-select form-select-lg" data-allow-clear="true">
                          <option value="AK">Alaska</option>
                          <option value="HI">Hawaii</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                      <label for="kd_desa" class="form-label">Kode Desa/ Kelurahan</label>
                      <input type="text" id="kd_desa" name="kd_desa" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="nama_desa" class="form-label">Nama Desa/ Kelurahan</label>
                      <input type="text" id="nama_desa" name="nama_desa" class="form-control">
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
<?= $this->endSection() ?>
<?= $this->section('css')?>
<?= $this->endSection() ?>
<?= $this->section('js') ?>
<?= $this->endSection() ?>


          