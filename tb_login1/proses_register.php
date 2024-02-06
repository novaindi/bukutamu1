<?php

$usernam   =$_POST['username'];
$password  =$_POST['password'];


include 'koneksi2.php';
$sql = "INSERT INTO tb_login_wacan (username, password) values 
('$username', '$password')";

$query = mysqli_query ($koneksi,$sql);
if ($query){
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Disimpan');
        window.location= 'login.php';
    </script>
<?php
}
?>