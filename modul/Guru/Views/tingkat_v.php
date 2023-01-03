
<?= $this->extend('Layout/wreaper'); ?>
<?= $this->section('content') ?>
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Referensi /</span> Tingkat
</h4>
<div class="row m-1">
<!-- Complex Headers -->
              <div class="card card-action">
                <div class="card-header align-items-center">
                  <h5 class="card-action-title mb-0">Daftar Tingkat Kelas Sekolah</h5>
                  <div class="card-action-element">
                    <button class="btn btn-primary btn-md" type="button" data-bs-toggle="modal" data-bs-target="#add"><i class="bx bx-plus bx-xs me-1"></i>Tambah Data</button>
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
          <div class="modal fade" id="add" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <form action="" method="POST" id="fmtingkat">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Tambah Data Tingkat</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                      <label for="kdtingkat" class="form-label">Kode Tingkat</label>
                      <input type="text" id="kdtingkat" name="kd_tingkat" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="nmtingkat" class="form-label">Nama Tingkat</label>
                      <input type="text" id="nmtingkat" name="nama_tingkat" class="form-control">
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
      $.validator.setDefaults({
        submitHandler: function () {
          $.ajax({
                type:"POST",
                url:"<?= base_url() ?>/ref/stingkat",
                data:$("#fmtingkat").serialize(),
                dataType:"JSON",
                success:function (response) {
                    if (response.status) {
                        $('#add').modal('hide');
                        notifsuccess("Data Berhasil di Simpan");
                        $('#fmtingkat')[0].reset();
                      console.log(response.data)
                        // tabel.ajax.reload();
                    }else{
                        $('#add').modal('hide');
                        notifError("Data Gagal di Simpan");
                        $('#fmtingkat')[0].reset();
                        // tabel.ajax.reload();
                    }
                }
            });
        },
      });
      validasiForm();
    });

    function validasiForm() {
		var form = $("#fmtingkat");
        form.validate({
						rules: {
							kd_tingkat: "required",
							nama_tingkat: "required",

						},
						messages: {
							kd_tingkat: "Kode Tingkat Harus di isi !!!",
							nama_tingkat: "Nama Tingkat Harus di isi !!!",				

						},
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


          