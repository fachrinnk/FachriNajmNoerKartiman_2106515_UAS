<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<!-- Image Showcases-->
<section class="showcase">
  <div class="container-fluid p-0">

    <div class="row g-0" id="contactUs">
      <div class="col-lg-6 text-white showcase-img" style="background-image: url('./assets/img/bgr-showcase-2.jpg')">
      </div>
      <div class="col-lg-6 my-auto showcase-text">
        <h2>Kontak Kami</h2>
        <ul class="list-inline mb-0">
          <li class="d-block list-inline-item me-4">
            <a href="#!" class="text-decoration-none" style="color: black;">
              <i class="bi-whatsapp fs-2"></i>
              <span class="pl-5" style="font-size: 1.5em;">+62 839 2133 8764</span>
            </a>
          </li>
          <li class="d-block list-inline-item me-4">
            <a href="#!" class="text-decoration-none" style="color: black;">
              <i class="bi-mailbox fs-2"></i>
              <span style="font-size: 1.5em;">babangsuherman@gmail.com</span>
            </a>
          </li>
          <li class="d-block list-inline-item">
            <a href="#!" class="text-decoration-none" style="color: black;">
              <i class="bi-telephone fs-2"></i>
              <span style="font-size: 1.5em;">+022 839 2133 764</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="row g-0">
      <div class="col-lg-6 order-lg-2 text-white showcase-img"
        style="background-image: url('assets/img/bg-showcase-3.jpg')"></div>
      <div class="col-lg-6 order-lg-1 my-auto showcase-text">
        <h2>Bagaimana Jadinya</h2>
        <p class="lead mb-0">Jika tidak memilih untuk memilih pekerjaan disini</p>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>