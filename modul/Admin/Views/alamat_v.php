
<?= $this->extend('Layout/wreaper'); ?>
<?= $this->section('content') ?>
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Referensi /</span> Alamat</h4>
<div class="row">
  <div class="col"><h5>Daftar Alamat Wilayah Indonesia</h5></div>
  <div class="col d-flex justify-content-end">
    <button class="btn btn-primary btn=md" style="margin-right:5px;" data-bs-toggle="modal" data-bs-target="#addPro"><i class="bx bx-plus bx-xs me-1"></i> Provinsi</button>
    <button class="btn btn-success btn=md" data-bs-toggle="modal" data-bs-target="#addKota"><i class="bx bx-plus bx-xs me-1"></i> Kota/Kabupaten</button></div>
    
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
                <form action="" method="POST" id="fmjurusan">
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
                <form action="" method="POST" id="fmjurusan">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Tambah Data Kota/ Kabupaten</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-2">
                      <label for="prov" class="form-label">Provinsi</label>
                      <select id="select2Basic" class="select2 form-select form-select-lg" data-allow-clear="true">
                          <option value="AK">Alaska</option>
                          <option value="HI">Hawaii</option>
                          <option value="CA">California</option>
                          <option value="NV">Nevada</option>
                          <option value="OR">Oregon</option>
                          <option value="WA">Washington</option>
                          <option value="AZ">Arizona</option>
                          <option value="CO">Colorado</option>
                          <option value="ID">Idaho</option>
                          <option value="MT">Montana</option>
                          <option value="NE">Nebraska</option>
                          <option value="NM">New Mexico</option>
                          <option value="ND">North Dakota</option>
                          <option value="UT">Utah</option>
                          <option value="WY">Wyoming</option>
                          <option value="AL">Alabama</option>
                          <option value="AR">Arkansas</option>
                          <option value="IL">Illinois</option>
                          <option value="IA">Iowa</option>
                          <option value="KS">Kansas</option>
                          <option value="KY">Kentucky</option>
                          <option value="LA">Louisiana</option>
                          <option value="MN">Minnesota</option>
                          <option value="MS">Mississippi</option>
                          <option value="MO">Missouri</option>
                          <option value="OK">Oklahoma</option>
                          <option value="SD">South Dakota</option>
                          <option value="TX">Texas</option>
                          <option value="TN">Tennessee</option>
                          <option value="WI">Wisconsin</option>
                          <option value="CT">Connecticut</option>
                          <option value="DE">Delaware</option>
                          <option value="FL">Florida</option>
                          <option value="GA">Georgia</option>
                          <option value="IN">Indiana</option>
                          <option value="ME">Maine</option>
                          <option value="MD">Maryland</option>
                          <option value="MA">Massachusetts</option>
                          <option value="MI">Michigan</option>
                          <option value="NH">New Hampshire</option>
                          <option value="NJ">New Jersey</option>
                          <option value="NY">New York</option>
                          <option value="NC">North Carolina</option>
                          <option value="OH">Ohio</option>
                          <option value="PA">Pennsylvania</option>
                          <option value="RI">Rhode Island</option>
                          <option value="SC">South Carolina</option>
                          <option value="VT">Vermont</option>
                          <option value="VA">Virginia</option>
                          <option value="WV">West Virginia</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                      <label for="kdjurusan" class="form-label">Kode Kota/ Kabupaten</label>
                      <input type="text" id="kdjurusan" name="kd_jurusan" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="nmjurusan" class="form-label">Nama Kota/ Kabupaten</label>
                      <input type="text" id="nmjurusan" name="nama_jurusan" class="form-control">
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
<script src="<?= base_url() ?>/assets/js/forms-selects.js"></script>
<?= $this->endSection() ?>


          