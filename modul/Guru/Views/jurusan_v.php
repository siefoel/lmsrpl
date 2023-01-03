
<?= $this->extend('Layout/wreaper'); ?>
<?= $this->section('content') ?>
<h4 class="fw-bold py-3 mb-2">
  <span class="text-muted fw-light">Referensi /</span> Jurusan
</h4>
<div class="row m-1">
<!-- Complex Headers -->
            <div class="card card-action">
                <div class="card-header align-items-center">
                  <h5 class="card-action-title mb-0">Daftar Jurusan</h5>
                  <div class="card-action-element">
                    <button class="btn btn-primary btn-md" type="button" data-bs-toggle="modal" data-bs-target="#add"><i class="bx bx-plus bx-xs me-1"></i>Tambah Data</button>
                  </div>
                </div>
                <div class="card-datatable text-nowrap">
                  <table class="dt-complex-header table table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama Jurusan</th>
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
                <form action="" method="POST" id="fmjurusan">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Tambah Data Jurusan</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                      <label for="kdjurusan" class="form-label">Kode Jurusan</label>
                      <input type="text" id="kdjurusan" name="kd_jurusan" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="nmjurusan" class="form-label">Nama Jurusan</label>
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
<script>
   var tabel;
    $(document).ready(function() {
      $.validator.setDefaults({
        submitHandler: function () {
          $.ajax({
                type:"POST",
                url:"<?= base_url() ?>/ref/sjurusan",
                data:$("#fmjurusan").serialize(),
                dataType:"JSON",
                success:function (response) {
                    if (response.status) {
                        $('#add').modal('hide');
                        notifsuccess("Data Berhasil di Simpan");
                        $('#fmjurusan')[0].reset();
                        // tabel.ajax.reload();
                    }else{
                        $('#add').modal('hide');
                        notifError("Data Gagal di Simpan");
                        $('#fmjurusan')[0].reset();
                        // tabel.ajax.reload();
                    }
                }
            });
        },
      });
      validasiForm();
    });

    function validasiForm() {
		var form = $("#fmjurusan");
        form.validate({
						rules: {
							kd_jurusan: "required",
							nama_jurusan: "required",

						},
						messages: {
							kd_jurusan: "Kode Jurusan Harus di isi !!!",
							nama_jurusan: "Nama Sekolah Harus di isi !!!",				

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


          