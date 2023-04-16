<html>
<body>
    <?php
if (empty($_POST['nama']) || empty($_POST['umur']) || empty($_POST['agama']) || empty($_POST['kelamin']) || empty($_POST['alamat']) ) {
    header("Location:ksng1.php");
} 

else {
    echo "Nama :".$_POST['nama']."<br>";
    echo "Umur :".$_POST['umur']."<br>";
    echo "Agama :".$_POST['agama']."<br>";
    echo "Jenis Kelamin :".$_POST['kelamin']."<br>";
    echo "Alamat :".$_POST['alamat']."<br>";
    echo "Tanggal :";
    echo date("m-F-Y, g:i:s a")."<br>"; 
}
?> 
<a  href="Biodata.php"><button style="margin-top: 30px;">Kembali</button></a>  
</body>
</html>

