
<?= $this->extend('Layout/wreaper'); ?>
<?= $this->section('content') ?>
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Referensi /</span> MGMP
</h4>
<div class="row m-1">
<!-- Complex Headers -->
              <div class="card card-action">
                <div class="card-header align-items-center">
                  <h5 class="card-action-title mb-0">Data MGMP  (Musyawarah Guru Mata Pelajaran)</h5>
                  <div class="card-action-element">
                    <button class="btn btn-primary btn-md" type="button" data-bs-toggle="modal" data-bs-target="#add"><i class="bx bx-plus bx-xs me-1"></i>Tambah Data</button>
                  </div>
                </div>
                <div class="card-datatable text-nowrap">
                  <table class="dt-complex-header table table-mgmp">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama MGMP</th>
                        <th>Status</th>
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
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <form action="" method="POST" id="fmmgmp">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Tambah MGMP</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                      <label for="nama_mgmp" class="form-label">Nama MGMP</label>
                      <input type="text" id="nama_mgmp" name="nama_mgmp" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                      <label for="status" class="form-label">Status</label>
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="status" name="status">
                            <!-- <label class="form-check-label" for="status">Checked switch checkbox input</label> -->
                        </div>
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
    var table;
    $(document).ready(function() {
      falidasi_jurusan()
      loadtable()
    });
    function loadtable() {
    tabel = $('.table-mgmp').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            autoWidth: true,
            info: true,
            paging: true,
            searching: true,
        order: [],
        ajax: {
                url: '<?= base_url() ?>/ref/datamgmp',
                method: 'POST',
            },
        columns: [{
                    data: 'no',
                    orderable: false,
                    className: 'text-center align-middle',
                    
                },
                {
                    data: 'nama_mgmp',
                    className: 'text-center align-middle',
                    
                },
                {
                    data: 'status',
                    className: 'text-center align-middle',
                    
                },
                {
                    data: 'action',
                    orderable: false,
                    className: 'text-center align-middle',
                    
                },
            ],
    });
}
    function falidasi_jurusan() {
    $.validator.setDefaults({
        submitHandler: function () {
            $.ajax({
                type:"POST",
                url:"<?= base_url() ?>/ref/sjurusan",
                data:$("#fmjurusan").serialize(),
                dataType:"JSON",
                success:function (response) {
                    if (response.status) {
                        console.log(response.status);
                        $('#add').modal('hide');
                        $('#fmjurusan')[0].reset();
                        notifsuccess("Data Berhasil Disimpan")
                        location.reload();
                    }else{
                        console.log(response.status);
                        $('#add').modal('hide');
                        $('#fmjurusan')[0].reset();
                        notifError("Data Gagak Disimpan")
                        location.reload();
                        
                    }
                }
            });
        },
      });
    $("#fmjurusan").validate({
          rules: {
            kd_jurusan: "required",
            nama_jurusan: "required",
          },
          messages: {
            kd_jurusan: "Kode Jurusan harus di isi !!!",
            nama_jurusan: "Nama Jurusan harus di isi !!!",
          },
        //   errorElement: "em",
          errorPlacement: function (error, element) {
            var $el = $(element);
            var $parent = $el.parents(".form-group");
            $el.addClass('is-invalid');

                // Do not duplicate errors
                if ($parent.find(".jquery-validation-error").length) {
                return;
                }

                $parent.append(
                error.addClass(
                    "jquery-validation-error small form-text invalid-feedback"
                )
                );
          },
          highlight: function (element, errorClass, validClass) {
            var $el = $(element);
            var $parent = $el.parents(".form-group");
            $el.addClass('mb-1 is-invalid');
            // $(element)
            //   .parents(".form-grup")
            //   .addClass("is-invalid")
            //   .removeClass("is-valid");
          },
          unhighlight: function (element, errorClass, validClass) {
            $(element)
              .parents(".form-grup")
              .addClass("is-valid")
              .removeClass("is-invalid");
          },
        });
    }
</script>
<?= $this->endSection() ?>


          