<html>
<body style="text-align: center;">
    <?php
if (empty($_POST['nama'])) {
    header("Location:ksng.php");
} 
elseif(empty($_POST['email'])){
    header("Location:ksng.php");
}
else {
    echo "<center>Nama :".$_POST['nama']."</center><br>";
    echo "<center>Email :".$_POST['email']."</center><br>";
    echo "<center>Tanggal :";
    echo date("m-F-Y, g:i:s a")."</center><br>"; 
}
?> 
<a  href="Login.php"><button>Kembali</button></a>  
</body>
</html>

