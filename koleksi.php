<?php 
    if(!isset($_SESSION['login'])){
        header ("location : index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PUSDIGIF</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="koleksi.php">Koleksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="peminjaman.php">Peminjaman</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <a class="btn btn-outline-success" href="index.php">Keluar</a>
      </form>
    </div>
  </div>
</nav>

<main class="main-container">
    <div class="title-section">
        <h1>Koleksi Buku</h1>
    </div>
    <div class="button-section">
        <button type="button" class="add-btn" data-bs-toggle="modal" data-bs-target="#tambahkoleksi">+ Tambah Koleksi</button>
    </div>

    <section class="table-section">
        <div class="table-header">
            <P>Kode Buku</P>
            <P>Judul</P>
            <P>Penulis</P>
            <P>Kategori</P>
            <P>Stok</P>
            <P>Status</P>
            <P>Aksi</P>
        </div>

        <?php 
            while($data = mysqli_fetch_assoc(&query)) {
        ?>
        
        <div class="table-row">
            <p><?php echo $data['kode_buku'];?></p>
            <p><?php echo $data['judul'];?></p>
            <p><?php echo $data['penulis'];?></p>
            <p><?php echo $data['kategori'];?></p>
            <p><?php echo $data['stok'];?></p>
            <p><?php echo $data['status'];?></p>
            <p><?php echo $data['aksi'];?></p>

            <?php 
                if($data['stok'])
            ?>
        </div>
    </section>
</main>

</body>
</html>