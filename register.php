<?php
include "koneksi.php";
if(isset($_POST['username'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $nama = $_POST['nama'];
    $level = 'admin';

    $insert = mysqli_query($koneksi, "INSERT INTO user(nama,username,password,level) VALUE('$nama','$username','$password','$level')");

    if($insert)  {
        echo '<script>alert("PENDAFTARAN/REGISTER BERHASIL"); location.href="login.php";</SCRIPT>';
    }else{

        echo '<script>alert("REGISTER GAGAL");</SCRIPT>';
    }
     
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>REGISTRASI KASIR FZ PRO AUDIO MART</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">q
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">REGISTRASI KASIR FZ PRO AUDIO MART</h3></div>
                                    <div class="card-body">
                                        <form method="post">
                                            <label for="inputEmail">Nama Lengkap</label>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda"/>
                                                <label for="inputEmail">Masukkan Nama Lengkap</label>
                                            </div>
                                            <label for="inputEmail">Username</label>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" name="username" placeholder="Masukkan Username Anda"/>
                                                <label for="inputEmail">Masukkan Username</label>
                                            </div>
                                            <label for="inputEmail">Username</label>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Masukkan Password Anda" />
                                                <label for="inputPassword">Masukkan Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button type="submit" class="btn btn-primary w-100">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">BELUM PUNYA AKUN??? AYO SEGERA BUAT AKUN!!!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; WEBSITE PUNYA FARIZ</div>
                            <div>
                                <a href="#">FZ PRO AUDIO</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>