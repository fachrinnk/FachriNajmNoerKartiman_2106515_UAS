<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<!-- Call to Action-->
<section class="call-to-action text-white text-center" id="signup">
  <div class="container position-relative" id="scrollForm1">
    <div class="row justify-content-center">
      <div class="col-xl-6">
        <h2 class="mb-4">Siap Untuk Memulai Pekerjaan Baru? Daftarkan Diri Sekarang!</h2>

        <form action="/Mari/save" method="POST" id="form-worker">
          <?= csrf_field() ?>
          <!-- Email address input-->
          <input type="hidden" name="id" id="id">
          <div class="mb-3">
            <label for="worker-name" class="form-label">Siapakah nama anda</label>
            <input type="text" class="form-control form-control-lg <?= $validation->hasError('worker-name') ? 'is-invalid' : ''; ?>" id="worker-name" name="worker-name" placeholder="Nama Anda" value="<?= old('worker-name') ?>">
            <div class="invalid-feedback" id="worker-name">
              <?= $validation->getError('worker-name'); ?>
            </div>
          </div>
          <div class="mb-3">
            <label for="worker-email" class="form-label">Email anda</label>
            <input class="form-control form-control-lg <?= $validation->hasError('worker-email') ? 'is-invalid' : ''; ?>" id="worker-email" type="text" placeholder="Alamat Email" name="worker-email" value="<?= old('worker-email') ?>" />
            <div class="invalid-feedback" id="worker-email">
              <?= $validation->getError('worker-email'); ?>
            </div>
          </div>

          <div class="mb-3">
            <label for="worker-job" class="form-label">Pilihlah pekerjaan anda</label>
            <select class="form-select-lg form-select <?= $validation->hasError('worker-job') ? 'is-invalid' : ''; ?>" aria-label="Job" id="worker-job" name="worker-job" placeholder="Pilih Job Yang Anda Mau">
              <!-- foreach data kategori -->
              <option selected disabled value="">Choose...</option>
              <?php
              foreach ($jobs as $job) :
              ?>
                <option value="<?= $job['job_id'] ?>" style="padding:2px;" <?= (old('worker-job') == $job['job_id']) ? 'selected' : ''; ?>>
                  <!-- tampilkan data nama kategori -->
                  <?= $job["job_name"] ?>
                </option>
              <?php
              endforeach;
              ?>
              <!-- tutup foreach -->
            </select>
            <div class="invalid-feedback" id="worker-job">
              <?= $validation->getError('worker-job'); ?>
            </div>
          </div>
          <div class="mb-3">
            <label for="worker-company" class="form-label">Pilihlah perusahaan anda</label>
            <select class="form-select-lg form-select <?= $validation->hasError('worker-company') ? 'is-invalid' : ''; ?>" aria-label="Company" id="worker-company" name="worker-company" placeholder="Pilih company Yang Anda Mau">
              <!-- foreach data kategori -->
              <option selected disabled value="">Choose...</option>
              <?php
              foreach ($companys as $company) :
              ?>
                <option value="<?= // tampilkan data id kategori 
                                $company["company_id"]
                                ?>" style="padding:2px;" <?= (old('worker-company') == $company['company_id']) ? 'selected' : ''; ?>>
                  <!-- tampilkan data nama kategori -->
                  <?= $company["company_name"] ?>
                </option>
              <?php
              endforeach;
              ?>
              <!-- tutup foreach -->
            </select>
            <div class="invalid-feedback" id="worker-company">
              <?= $validation->getError('worker-company'); ?>
            </div>
          </div>
          <div class="mb-3">
            <button class="btn btn-outline-light btn-lg" id="submitButton" name="btn-worker-submit" type="submit">Submit</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
<!-- Job Requirement -->
<section class="py-5" id="scrollForm2">
  <div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
      <div class="col mb-5">
        <div class="card h-100">
          <!-- Product image-->
          <img class="card-img-top" src="https://res.cloudinary.com/doikay5j4/image/upload/v1638529872/y7uyxnmslbwbmdlcryro.png" alt="..." />
          <!-- Product details-->
          <div class="card-body p-4 pt-0">
            <div class="text-center">
              <!-- Product name-->
              <h5 class="fw-bolder">Management Product</h5>
              <div class="d-flex justify-content-center small text-warning mb-2">
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
              </div>
              <!-- Product price-->
              PT. Karya Industri KW
            </div>
          </div>
          <!-- Product actions-->
          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#scrollForm1" onclick="setSelectedValue('worker-job','1');setSelectedValue('worker-company','1');">Piilih Ini!</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col mb-5">
        <div class="card h-100">
          <!-- Sale badge-->
          <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">HOT
          </div>
          <!-- Product image-->
          <img class="card-img-top mt-4" src="https://res.cloudinary.com/doikay5j4/image/upload/v1638529945/czdm88qkvm9plc62cv9a.png" alt="..." />
          <!-- Product details-->
          <div class="card-body p-4">
            <div class="text-center">
              <!-- Product name-->
              <h5 class="fw-bolder">Data Analyst</h5>
              <!-- Product reviews-->
              <div class="d-flex justify-content-center small text-warning mb-2">
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-half"></div>
              </div>
              <!-- Product price-->
              PT. Tidak Tau
            </div>
          </div>
          <!-- Product actions-->
          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#scrollForm1" onclick="setSelectedValue('worker-job','2');setSelectedValue('worker-company','2');">Pilih Ini!</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col mb-5">
        <div class="card h-100">
          <!-- Sale badge-->
          <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">RECOMENDED
          </div>
          <!-- Product image-->
          <img class="card-img-top" src="https://res.cloudinary.com/doikay5j4/image/upload/v1638529804/f5vp952oexhpr2svsy2w.png" alt="..." />
          <!-- Product details-->
          <div class="card-body p-4 pt-3">
            <div class="text-center">
              <!-- Product name-->
              <h5 class="fw-bolder">Web Designer</h5>
              <div class="d-flex justify-content-center small text-warning mb-2">
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
              </div>
              <!-- Product price-->
              PT. Bersyukur
            </div>
          </div>
          <!-- Product actions-->
          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#scrollForm1" onclick="setSelectedValue('worker-job','3');setSelectedValue('worker-company','3');">Pilih Ini!</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col mb-5">
        <div class="card h-100">
          <!-- Product image-->
          <img class="card-img-top mt-4 mb-4" src="https://res.cloudinary.com/doikay5j4/image/upload/v1638529780/k0yy0akcknacttiyqit6.png" alt="..." />
          <!-- Product details-->
          <div class="card-body p-4">
            <div class="text-center">
              <!-- Product name-->
              <h5 class="fw-bolder">Marketing</h5>
              <!-- Product reviews-->
              <div class="d-flex justify-content-center small text-warning mb-2">
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
                <div class="bi-star-fill"></div>
              </div>
              <!-- Product price-->
              PT. Berkah Ibu
            </div>
          </div>
          <!-- Product actions-->
          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#scrollForm1" onclick="setSelectedValue('worker-job','4');setSelectedValue('worker-company','4');">Pilih Ini!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?= $this->endSection() ?>