<?php
include "koneksi.php";

$nama = $_POST['nama'];

$simpan = mysqli_query($koneksi, "INSERT INTO satuan(nama)VALUES('$nama')");
if ($simpan) {
?>
    <script type="text/javascript">
        alert("data berhasil disimpan");
        location.replace('input_satuan.php');
    </script>
<?php
} else {
    echo "Gagal";
}

?>