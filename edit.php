<?php 

require  'function.php';

//Ambil data dari url
$id = $_GET["id"];

// Query data pegawai bedasarkan id
$tab_pegawai = query("SELECT * FROM tab_pegawai WHERE id = $id")[0];




//Cek apakah tombol sudah ditekan atau belom
if (isset($_POST["submit"])) {

    // Cek apakah data sudah berhasil di ubah atau belum
    if (ubah($_POST) > 0) {
        echo
        "<script>
            alert('Data berhasil diubah');
            window.location.href = 'index.php';
        </script>";
    } else {
        echo
        "<script>
            alert('Data gagal diubah :( ');
        </script>";
    }
}


?>