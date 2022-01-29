<?php
include "koneksi.php";

$nama = $_POST['nama'];
$kategori_id = $_POST['kategori_id'];
$satuan_id = $_POST['satuan_id'];

$simpan = mysqli_query($koneksi, "INSERT INTO barang(nama,kategori_id,satuan_id)VALUES('$nama', '$kategori_id', '$satuan_id')");
if ($simpan) {
?>
    <script type="text/javascript">
        alert("data berhasil disimpan");
        location.replace('input_barang.php');
    </script>
<?php
} else {
    echo "Gagal";
}

?>