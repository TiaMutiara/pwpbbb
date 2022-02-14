<?php
require 'koneksi.php';

$user = mysqli_fetch_assoc($a);
$about = mysqli_fetch_assoc($b);

$project = data("SELECT * FROM project");
?>

<?php
  if(isset($_POST["submit"])){
    if(tambah($_POST) > 0){
    echo "
                <script> 
                  alert('data sudah terkirim')
                </script>
                ";
            }
        else{
          echo "gagal kirim :(";
        }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fortofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
    <!-- CSS Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  </head>
  <body>
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #3e5c9b">
      <div class="container">
        <a class="navbar-brand" href="#"><i class="bi bi-badge-tm-fill"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#project">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- Jumbotron-->
    <div class="jumbotron text-center">
      <img src="<?= $user["foto"];?>" alt="" width="400" class="rounded-circle img-thumbnail" />
      <h1 class="display-5"><?= $user["nama"];?> </h1>
      <p class="lead"><?= $user["jabatan"];?> | <?= $user["perusahaan"];?></p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#f3f4f5"
          fill-opacity="1"
          d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </div>
    <!-- Akhir Jumbotron-->
    <!-- About -->
    <section id="about">
      <div class="row text-center">
        <h2 z>About Me</h2>
      </div>
      <div class="row justify-content-center fs-5">
        <div class="col-sm-4">
          <p><?= $about ["column1"];?> </p>
        </div>
        <div class="col-sm-4">
        <p><?= $about ["column2"];?> </p>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#85A7EE"
          fill-opacity="1"
          d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About-->
    <!-- Project -->
    <section id="project">
      <div class="container">
        <div class="row text-center mb-3">
          <h2>Project Me</h2>
        </div>
        
        <div class="row justify-content-evenly">

          <?php foreach ($project as $pro) { ?>
          <div class="col-sm-4 mb-4">
            <div class="card">
              <img src="<?= $pro["foto"];?>"  class="card-img-top" alt="..." />
              <div class="card-body">
                <h2 class="display-16"><?= $pro["nama_p"];?></h2>
                <p class="card-text"><?= $pro["keterangan"];?></p>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>
      </div>

      <div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#f3f4f5"
            fill-opacity="1"
            d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
          ></path>
        </svg>
      </div>
    </section>
    <!-- Akhir Project -->
    <!-- Contact -->
    <section id="contact">
      <div class="container pt-5">
        <div class="row text-center">
          <h2>Contact</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-5">
          <form action="" method="POST">
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" placeholder="email harus di isi" name="email" class="form-control" id="email" aria-describedby="emailHelp" required/>
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" placeholder="isi nama anda" name="nama_k" id="nama" required/>
            </div>
            <div class="mb-3">
              <label for="pesan">Pesan</label>
              <textarea class="form-control" placeholder="isi pesan anda" name="pesan" id="pesan" style="height: 100px" required></textarea>
            </div>
            <button name="submit" type="submit" class="btn btn-primary mt-4">Kirim</button>
          </form>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#3e5c9b"
          fill-opacity="1"
          d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
        <!-- Akhir Contact-->

    <footer class="text-center text-white pb-5" style="background-color: #3e5c9b">
      <p>Created with <i class="bi bi-heart-fill"></i> by Tia Mutiara</a></p>
      <p><i class="bi bi-facebook"><a href="https://m.facebook.com/thia.diamond">Tia Mutiara</a></i> <i class="bi bi-instagram"><a href="https://www.instagram.com/tmutiara_/">tmutiara_</a></i></i></p>
    </footer>
  </body>
</html>
