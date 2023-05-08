<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Css/form.css">
</head>
<body>
    <div class="container">
        <form action="form_create.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-25">
                    <label>Foto</label>
                </div>
                <div class="col-75">
                    <input type="file" id="foto" name="foto" />
                </div>
            </div>
                <div class="row">
                    <div class="col-25">
                        <label>Nama</label>
                    </div>
                    <div class="col-75">
                        <input type='text' name="nama" class="form-control" placeholder='Masukkan nama' required />
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Email</label>
                    </div>
                    <div class="col-75">
                        <input type='text' name="email" class="form-control" placeholder='Masukkan email' required />
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Password</label>
                    </div>
                    <div class="col-75">
                        <input type='text' name="password" class="form-control" placeholder='Masukkan Password' required />
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Alamat</label>
                    </div>
                    <div class="col-75">
                        <input type='text' name="alamat" class="form-control" placeholder='Masukkan alamat' required />
                    </div>
                </div>

            <button type="submit" name="submit" >Submit</button>
        </form>
    </div>
</body>
<style>
* {
  box-sizing: border-box;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=file] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

.col-25 {
  float: left;
  width: 10%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</html>