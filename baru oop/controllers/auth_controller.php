<?php
    include "../models/user_model.php";

    $user = new Login();

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        
        $aksi = $user->login($username, $password);

        if ($aksi) {
            $_SESSION['username'] = $username;

            // Successful login, redirect user to the main page
            ?>
            <script type="text/javascript">
                alert('Anda Berhasil Login');
                setTimeout("location.href='../views/tampil_data.php'", 1000);
            </script>
            <?php
        } else {
            ?>
            <script type="text/javascript">
                alert('Username dan Password salah');
                setTimeout("location.href='../v_login.php'", 1000);
            </script>
            <?php
        }
    }

    if (isset($_GET['aksi']) && $_GET['aksi'] == 'logout') {
        session_destroy();
        ?>
        <script type="text/javascript">
            alert('Anda telah keluar dari system');
            setTimeout("location.href='../Views/v_login.php'", 1000);
        </script>
        <?php
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tambah_akun'])) {
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        $aksi = $user->tambah_akun($username, $password);

        if ($aksi) {
            ?>
            <script type="text/javascript">
                alert('Akun berhasil ditambahkan');
                setTimeout("location.href='../Views/v_login.php'", 1000);
            </script>
            <?php    
        } else {
            ?>
            <script type="text/javascript">
                alert('Akun gagal ditambahkan');
                setTimeout("location.href='../Views/v_registrasi.php'", 1000);
            </script>
            <?php     
        }
    }
?>
