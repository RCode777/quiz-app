<?php
require "./../func/koneksi.php";

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
    <script>
       alert('quiz berhasil dihapus');
       document.location.href = 'index.php'
    </script>   
    ";
} else {
    echo "
    <script>
       alert('quiz gagal dihapus');
       document.location.href = 'index.php'
    </script>   
    ";
}

function hapus($id)
{
    global $kon;
    mysqli_query($kon, "DELETE FROM quiz WHERE id = $id");
    return mysqli_affected_rows($kon);
}
