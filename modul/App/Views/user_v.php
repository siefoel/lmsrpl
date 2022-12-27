
<?= $this->extend('Layout/wreaper'); ?>
<?= $this->section('content') ?>
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Referensi /</span> Management User
</h4>
<div class="row ">
<!-- Complex Headers -->
              <div class="card card-action">
              <div class="card-header align-items-center">
                <h5 class="card-action-title mb-0">Daftar User Login</h5>
                <div class="card-action-element">
                  <button class="btn btn-primary btn-md" type="button" data-bs-toggle="modal" data-bs-target="#addNewCCModal"><i class="bx bx-plus bx-xs me-1"></i>Tambah Data</button>
                </div>
              </div>
                <div class="card-datatable text-nowrap">
                  <table class="dt-complex-header table table-bordered">
                    <thead>
                      <tr>
                        <th rowspan="2">Name</th>
                        <th colspan="2">Contact</th>
                        <th colspan="3">HR Information</th>
                        <th rowspan="2">Action</th>
                      </tr>
                      <tr>
                        <th>E-mail</th>
                        <th>City</th>
                        <th>Position</th>
                        <th>Salary</th>
                        <th class="border-1">Status</th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
              <!--/ Complex Headers -->

</div>
<?= $this->endSection() ?>
<?= $this->section('modal')?>
<?= $this->endSection() ?>
<?= $this->section('css')?>
<?= $this->endSection() ?>
<?= $this->section('js') ?>
<script src="<?= base_url()?>/assets/js/tables-datatables-basic.js"></script>
<?= $this->endSection() ?>


          