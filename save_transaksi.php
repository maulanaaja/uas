<?php
include "koneksi.php";

$nama_transaksi = $_POST['nama_transaksi'];
$tgl_transaksi = $_POST['tgl_transaksi'];
$harga = $_POST['harga'];
$qty = $_POST['qty'];
$id_barang = $_POST['id_barang'];
$id_pelanggan = $_POST['id_pelanggan'];

$get_status_pelanggan = mysqli_query($koneksi, "select * from pelanggan where id_pelanggan='$id_pelanggan'");
$data = mysqli_fetch_array($get_status_pelanggan);

// var_dump($data['status']);
// die;

if ($data['status'] == "Member") {
    $diskon = 5;
} else {
    $diskon = 0;
}


$simpan = mysqli_query($koneksi, "INSERT INTO transaksi(nama_transaksi,tgl_transaksi,harga,qty,id_barang,diskon,id_pelanggan)VALUES('$nama_transaksi', '$tgl_transaksi', '$harga', '$qty', '$id_barang', '$diskon', '$id_pelanggan')");
if ($simpan) {
?>
    <script type="text/javascript">
        alert("data berhasil disimpan");
        location.replace('input_transaksi.php');
    </script>
<?php
} else {
    echo "Gagal";
}

?>