<?php
$koneksi = mysqli_connect("localhost", "root", "", "tia_portofolio");
$a = mysqli_query($koneksi, "SELECT * FROM user");
$b = mysqli_query($koneksi, "SELECT * FROM about");


function data($isi){
    global $koneksi;
    $c = mysqli_query($koneksi, $isi);
    $box = [];
    while ($keluarkan = mysqli_fetch_assoc($c)) 
    {
      $box[] = $keluarkan;
    }
    return $box;
}

function tambah($data){
  global $koneksi;
  $email = $_POST["email"];
  $nama = $_POST["nama_k"];
  $pesan = $_POST["pesan"];

  $query = " INSERT INTO contact
            VALUES 
            ('', '$email', '$nama', '$pesan')
            ";
          mysqli_query ($koneksi, $query);
          if(mysqli_affected_rows($koneksi);

}
?>
