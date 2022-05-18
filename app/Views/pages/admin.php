<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./assets/styles/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
    <div class="container px-4 px-lg-5 ">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
          <li class="nav-item active"><a class="nav-link text-white" href="./">User Page</a></li>
        </ul>
      </div>
      <a class="navbar-brand pt-2 mt-1" href="./">
        <h2>AdminMariKerja</h2>
      </a>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="card my-5">
      <div class="card-header text-center">
        <h3 class="my-0">List of Data</h3>
      </div>
      <div class="card-body text-end">
        <a type="button" class="btn btn-dark mb-3 text-light" href="/daftar">Add New Data</a>
        <?php
        if (session()->getFlashdata('pesan')) :
        ?>
          <div class="alert alert-success text-start" role="alert">
            <?= session()->getFlashdata('pesan') ?>
          </div>
        <?php
        endif;
        ?>
        <div class="table-responsive">
          <table class="table table-hover table-stripped table-bordered text-center">
            <thead class="table-dark">
              <tr>
                <th scope="row">No.</th>
                <th scope="row">Nama Pelamar</th>
                <th scope="row">Alamat Email</th>
                <th scope="row">Pekerjaan Yang Dipilih</th>
                <th scope="row">Perusahaan Yang Dipilih</th>
                <th scope="row">Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- foreach data buku -->
              <?php
              $no = 1;
              foreach ($worker as $c) :
              ?>
                <tr>
                  <th scope="row">
                    <!-- tampilkan nomor -->
                    <?= $no; ?>
                  </th>
                  <td>
                    <?= $c['worker_name'] ?>
                  </td>
                  <td>
                    <?= $c['worker_email'] ?>
                  </td>
                  <td>
                    <?= $c['job_name'] ?>
                  </td>
                  <td>
                    <?= $c['company_name'] ?>
                  </td>
                  <td style="font-size: 22px;">

                    <!-- button edit -->
                    <a class="btn btn-warning" href="/Mari/edit/<?= $c['worker_id'] ?>">Edit</a>

                    <!-- button delete -->
                    <form action="/Mari/<?= $c['worker_id'] ?>" method="post" class="d-inline">
                      <?= csrf_field() ?>
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                    </form>

                  </td>
                </tr>
                <!-- ... -->
                <!-- tutup foreach -->
              <?php
                $no++;
              endforeach;

              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <footer class="mt-5 py-3 bg-dark text-white" id="footer">
    <div class="container-fluid">
      <div class="row justify-content-center text-center">
        <!-- Isi href dengan link yang mengarah ke profil instagram masing2 apabila NAMA di klik -->
        <p class="my-0">&copy; 2022 UTS Web &#9475; Powered by <a href="https://getbootstrap.com/">Bootstrap.com</a></p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <script src="assets/scripts/script.js"></script>
</body>

</html>