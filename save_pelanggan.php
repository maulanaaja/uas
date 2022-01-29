<?php
include "koneksi.php";

$nama_pelanggan = $_POST['nama_pelanggan'];
$no_tlp = $_POST['no_tlp'];
$status = $_POST['status'];

$simpan = mysqli_query($koneksi, "INSERT INTO pelanggan(nama_pelanggan,no_tlp,status)VALUES('$nama_pelanggan', '$no_tlp', '$status')");
if ($simpan) {
?>
    <script type="text/javascript">
        alert("data berhasil disimpan");
        location.replace('input_pelanggan.php');
    </script>
<?php
} else {
    echo "Gagal";
}

?>