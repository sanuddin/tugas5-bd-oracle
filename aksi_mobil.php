<?php
include("koneksi.php");

$act=$_GET['act'];

if ($act=='delete'){
	$id_beras=$_GET['id_mobil'];
	$sql="DELETE FROM mobil WHERE id_mobil = '$id_beras'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);
	header('location:mobil.php');
}

elseif ($act=='input'){
	$nama = $_POST["plat_nomor"];
	$merk = $_POST ["merk"];
 	$harga = $_POST["harga"];

   $sql="insert into mobil values ('','$nama','$merk','$harga') ";
   $prepare = ociparse($koneksi, $sql);
   ociexecute($prepare);
   oci_commit($koneksi);
   

	if($prepare)
	{
	header('location:mobil.php');
	}
	else {echo "gagal";}

}


elseif ($act=='update'){
	$id_beras = $_POST["id_mobil"];
	$nama = $_POST["plat_nomor"];
	$merk = $_POST ["merk"];
 	$harga = $_POST["harga"];
	

	$sql = "UPDATE MOBIL SET PLAT_NOMOR='$nama', MERK='$merk', HARGA='$harga' WHERE ID_MOBIL='$id_beras'";

	 $prepare = ociparse($koneksi, $sql);
   ociexecute($prepare);
   oci_commit($koneksi);
   if($prepare)
	{
	header('location:mobil.php');
	}
	else {echo "gagal";}
   



}
?>
