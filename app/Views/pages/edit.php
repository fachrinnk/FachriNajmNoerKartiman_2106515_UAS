<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<!-- Call to Action-->
<section class="call-to-action text-white text-center" id="signup">
  <div class="container position-relative" id="scrollForm1">
    <div class="row justify-content-center">
      <div class="col-xl-6">
        <h2 class="mb-4">Silahkan di Edit</h2>

        <form action="/Mari/update/<?= $worker['worker_id'] ?>" method="POST" id="form-worker">
          <?= csrf_field() ?>
          <!-- Email address input-->
          <!-- <input type="hidden" name="worker_id" id="worker_id"> awalnya buar slug nonton di wpu-->
          <div class="mb-3">
            <label for="worker-name" class="form-label">Siapakah nama anda</label>
            <input type="text"
              class="form-control form-control-lg <?= $validation->hasError('worker-name') ? 'is-invalid' : ''; ?>"
              id="worker-name" name="worker-name" placeholder="Nama Anda"
              value="<?= (old('worker-name')) ? old('worker-name') : $worker['worker_name'] ?>">
            <div class="invalid-feedback" id="worker-name">
              <?= $validation->getError('worker-name'); ?>
            </div>
          </div>
          <div class="mb-3">
            <label for="worker-email" class="form-label">Email anda</label>
            <input
              class="form-control form-control-lg <?= $validation->hasError('worker-email') ? 'is-invalid' : ''; ?>"
              id="worker-email" type="text" placeholder="Alamat Email" name="worker-email"
              value="<?= (old('worker-email')) ? old('worker-email') : $worker['worker_email'] ?>" />
            <div class="invalid-feedback" id="worker-email">
              <?= $validation->getError('worker-email'); ?>
            </div>
          </div>
          <div class="mb-3">
            <label for="worker-job" class="form-label">Pilihlah pekerjaan anda</label>
            <select class="form-select-lg form-select <?= $validation->hasError('worker-job') ? 'is-invalid' : ''; ?>"
              aria-label="Job" id="worker-job" name="worker-job" placeholder="Pilih Job Yang Anda Mau">
              <!-- foreach data kategori -->
              <option selected disabled value="">Choose...</option>
              <?php
              foreach ($jobs as $job) :
              ?>
              <option value="<?= $job['job_id'] ?>" style="padding:2px;" <?php if (!old('worker-job')) {
                                                                              echo ($worker['job_id'] == $job['job_id']) ? 'selected' : '';
                                                                            } else {
                                                                              echo (old('worker-job') == $job['job_id']) ? 'selected' : '';
                                                                            }
                                                                            ?>>
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
            <select
              class="form-select-lg form-select <?= $validation->hasError('worker-company') ? 'is-invalid' : ''; ?>"
              aria-label="Company" id="worker-company" name="worker-company" placeholder="Pilih company Yang Anda Mau">
              <!-- foreach data kategori -->
              <option selected disabled value="">Choose...</option>
              <?php
              foreach ($companys as $company) :
              ?>
              <option value="<?= // tampilkan data id kategori 
                                $company["company_id"]
                                ?>" style="padding:2px;" <?php if (!old('worker-company')) {
                                                            echo ($worker['company_id'] == $company['company_id']) ? 'selected' : '';
                                                          } else {
                                                            echo (old('worker-company') == $company['company_id']) ? 'selected' : '';
                                                          }
                                                          ?>>
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
            <button class="btn btn-outline-light btn-lg" id="submitButton" name="btn-worker-submit"
              type="submit">Edit!</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>


<?= $this->endSection() ?>