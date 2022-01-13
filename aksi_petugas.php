<?php
include("koneksi.php");

$act=$_GET['act'];

if ($act=='delete'){
	$id_pembeli=$_GET['id_petugas'];
	$sql="DELETE FROM petugas WHERE id_petugas='$id_pembeli'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);
	header('location:petugas.php');
}

elseif ($act=='input'){
	$nama = $_POST["nama_petugas"];

   $sql="insert INTO PETUGAS (ID_PETUGAS, NAMA_PETUGAS) VALUES ('$id_pembeli','$nama') ";
   $prepare = ociparse($koneksi, $sql);
   ociexecute($prepare);
   oci_commit($koneksi);
   

	if($prepare)
	{
	header('location:petugas.php');
	}
	else {echo "gagal";}

}


elseif ($act=='update'){
	$id_pembeli = $_POST["id_petugas"];
	$nama = $_POST["nama_petugas"];

	$sql = "UPDATE petugas SET NAMA_PETUGAS='$nama' WHERE ID_PETUGAS='$id_pembeli'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);

	if($prepare)
	{
	header('location:petugas.php');
	}
	else {echo "gagal";}

}
?>
