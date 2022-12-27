
<?= $this->extend('Layout/wreaper'); ?>
<?= $this->section('content') ?>
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Referensi /</span> Alamat</h4>
<h5>Daftar Alamat Wilayah Indonesia</h5>
<div class="row">
  <!-- Accordion with Icon -->
  <div class="col-md mb-4 mb-md-2">
    <!-- <small class="text-light fw-semibold">Accordion With Icon (Always Open)</small> -->
    <div class="accordion mt-3" id="accordionWithIcon">
      <div class="card accordion-item active">
        <h2 class="accordion-header d-flex align-items-center">
          <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionWithIcon-1" aria-expanded="true">
            <i class="bx bx-bar-chart-alt-2 me-2"></i>
            Header Option 1
          </button>
        </h2>

        <div id="accordionWithIcon-1" class="accordion-collapse collapse show">
          <div class="accordion-body">
            Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing marzipan gummi
            bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping soufflé. Wafer gummi bears
            marshmallow pastry pie.
          </div>
        </div>
      </div>

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

      <div class="accordion-item card">
        <h2 class="accordion-header d-flex align-items-center">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionWithIcon-3" aria-expanded="false">
            <i class="bx bx-gift me-2"></i>
            Header Option 3
          </button>
        </h2>
        <div id="accordionWithIcon-3" class="accordion-collapse collapse">
          <div class="accordion-body">
            Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon gingerbread
            marshmallow
            sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake dragée caramels. Ice cream wafer danish
            cookie caramels muffin.
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Accordion with Icon -->
</div>
<?= $this->endSection() ?>
<?= $this->section('modal')?>
<?= $this->endSection() ?>
<?= $this->section('css')?>
<?= $this->endSection() ?>
<?= $this->section('js') ?>
<?= $this->endSection() ?>


          