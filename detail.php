<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a947a4aa54.js" crossorigin="anonymous"></script>
    <title>Edit</title>
</head>
<body>
    <div class="container">
        <?php 
        include 'crud.php';
        
        $data = mysqli_query($kon, "SELECT * FROM user WHERE id='$_GET[id]'");
        $fetch = mysqli_fetch_array($data);
        ?>

            <div class='form-group'>
                <label>Foto</label>
                <img style="width: 150px;" src="foto/<?php echo $fetch['foto']; ?>"
                alt="<?php echo $fetch['foto'] ?>"">
            </div>
            <div class='form-group'>
                <label>Nama</label>
                <input type='text' name="nama" class="form-control" value="<?= $fetch['nama'] ?>" required />
            </div>
            <div class='form-group'>
                <label>Email</label>
                <input type='email' name="email" class="form-control" value="<?= $fetch['email'] ?>" required />
            </div>
            <div class='form-group'>
                <label>Alamat</label>
                <input type='alamat' name="alamat" class="form-control" value="<?= $fetch['alamat'] ?>" required />
            </div>

            <input type="hidden" name="id" value="<?= $fetch['id']; ?>">
    </div>
    <div class="tombol-kembali">
            <a href="index.php">
                <button>Kembali</button>
            </a>
        </div>

</body>
</html>