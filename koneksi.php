 <?php


 $username ="DASHBOARD";
 $password ="123456";
 $database ="LOCALHOST/orcl";
 $koneksi=oci_connect ($username,$password,$database);
 if(!$koneksi) {
   $err=oci_error();
   echo "Gagal tersambung ke ORACLE", $err['text'];
 } else {
   echo "berhasil";
 }


// $koneksi = mysqli_connect("localhost","root","","koneksi_php");
// if (mysqli_connect_errno()){
//   echo "Koneksi database gagal : " . mysqli_connect_error();
// }else{
//   echo "Berhasil";
// }