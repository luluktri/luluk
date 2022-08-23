<?php 

    // Membuat session
    session_start();

    include 'koneksi.php';

    $username = $_POST['username'];
    $pass = $_POST['password'];

    $login = mysqli_query($conn, "SELECT * FROM user INNER JOIN user_role on user.id_role=user_role.id WHERE username='$username' AND password='$pass'");
    $check = mysqli_num_rows($login);
    
    // Membuat hak akses login

    // Cek apakah users ada di dalam database
    if($check > 0){

        $data = mysqli_fetch_assoc($login);
        print_r($data);

        // Cek ketika user login sebagai dosen
        if($data['role'] == "dosen"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "dosen";

            // Alihkan ke halaman dosen
            header("location:dashboard-dosen.php");

        } 
        // // Cek ketika user login sebagai mahasiswa
        // else if($data['level'] == "mahasiswa"){
        //     $_SESSION['username'] = $username;
        //     $_SESSION['level'] = "mahasiswa";

        //     // Alihkan ke halaman dosen
        //     header("location:dashboard-mhs.php");
        // }
        else{

            echo "
                <script>
                    alert ('Gagal login!')
                    document.location.href = 'login.php';
                </script>
        ";
        }
    } else{
        echo "
                <script>
                    alert ('Gagal login!')
                    document.location.href = 'login.php';
                </script>
        ";
    }


?>