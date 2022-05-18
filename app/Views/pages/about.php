<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<!-- Image Showcases-->
<section class="showcase">
  <div class="container-fluid p-0">
    <div class="row g-0" id="aboutUs">
      <div class="col-lg-6 order-lg-2 text-white showcase-img"
        style="background-image: url('./assets/img/bgr-showcase-1.jpg');background-position: -40px;"></div>
      <div class="col-lg-6 order-lg-1 my-auto showcase-text">
        <h2>About Us</h2>
        <p class="lead mb-0">Kami menyediakan pilihan pekerjaan yang cocok dengan anda. Anda dapat memilih
          dengan minat anda. Takperlu khawatir kami handal dan dapat dipercaya.</p>
      </div>
    </div>
    <div class="row g-0">
      <div class="col-lg-6  text-white showcase-img" style="background-image: url('assets/img/bg-showcase-3.jpg')">
      </div>
      <div class="col-lg-6  my-auto showcase-text">
        <h2>Dilakukan dengan hati</h2>
        <p class="lead mb-0">Kami menawarkan pekerjaan - pekerjaan yang tidak akang mengecewakanmu</p>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>