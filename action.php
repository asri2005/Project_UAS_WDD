<?php

include "koneksi.php";
$type = $_POST['simpan'];
if ($type == "simpan") {
   $member = $_POST['NAME'];
    $email = $_POST['EMAIL'];
    $password = $_POST['password'];
    $tgl_lahir = $_POST['DATE'];
   

    $input = "INSERT INTO tb_member (nm_member,email,password,tgl_lahir) VALUES ('$member','$email','$password','$tgl_lahir')";
    $query_input = mysqli_query($Open,$input);
    if ($query_input) {
        //Jika Sukses
        ?>
        <script language="JavaScript">
            alert('Input Data Berhasil');
            document.location = 'index.php';
        </script>
        <?php

    } else {
        //Jika Gagal
        echo "Input Data Gagal!, Silahkan diulangi!";
    }
}

?>

