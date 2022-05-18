<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<header class="masthead">
  <div class="container position-relative">
    <div class="row justify-content-center">
      <div class="col-xl-6">
        <div class="text-center text-white">
          <!-- Page heading-->
          <h1 class="mb-5">Cari Kerja Jadi Mudah Hanya Di <span style="color: aquamarine;">MariKerja</span></h1>
          <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN">
            <div class="col-auto">
              <a href="/daftar" style="text-decoration: none;color: black;" class="btn btn-info btn-lg">
                Daftarkan Diri Sekarang!
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Icons Grid-->
<section class="features-icons bg-light text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
          <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
          <h3>Hanya untuk anda</h3>
          <p class="lead mb-0">Pilihlah pekerjaan yang disediakan di platform ini!</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
          <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
          <h3>Hadir dengan style website simple</h3>
          <p class="lead mb-0">Classic website adalah yang terbaik!!</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
          <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
          <h3>Tinggal Klik dan isi formulir</h3>
          <p class="lead mb-0">Daftarkan diri anda untuk pekerjaan baru anda hanya dengan klik dan send</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Testimonials-->
<section class="testimonials text-center bg-light" style="margin-top: -100px;">
  <div class="container">
    <h2 class="mb-5">Apa Yang Dikatakan Orang - Orang?</h2>
    <div class="row">
      <div class="col-lg-4">
        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
          <img class="img-fluid rounded-circle mb-3" src="./assets/img/testimonial-1.jpg" alt="..." />
          <h5>Deddy Kobujeh</h5>
          <p class="font-weight-light mb-0">"Pengalaman yang sangat menyenangkan dapat memilih pekerjaan disini!"</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
          <img class="img-fluid rounded-circle mb-3" src="./assets/img/testimonial-2.jpg" alt="..." />
          <h5>Atta Halililili</h5>
          <p class="font-weight-light mb-0">"Kemungkinan saya akan memilih pekerjaan disini lagi di masa depan"</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
          <img class="img-fluid rounded-circle mb-3" src="./assets/img/testimonial-3.jpg" alt="..." />
          <h5>Pudidi Gunawan</h5>
          <p class="font-weight-light mb-0" id="scrollForm1">"Saya sangat berterima kasih diberi kesempatan untuk
            memilih pekerjaan disini"</p>
        </div>
      </div>
    </div>
  </div>
</section>


<?= $this->endSection() ?>