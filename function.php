<?php 
    $connect = mysqli_connect("localhost", "root", "", "pegawai");

    function query($query) {
        global $connect;
        $result = mysqli_query($connect, $query);
        $row = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $row;
    }

    function tambah($data) {
        global $connect;

        $id = $data["id"];
        $nama = $data["nama"];
        $alamat = $data["alamat"];
        $umur = $data["umur"];
        $jabatan = $data["jabatan"];

        $query = "INSERT INTO tab_pegawai VALUES ('$id', '$nama' , '$alamat', '$umur','$jabatan')";
        mysqli_query($connect, $query);

        return mysqli_affected_rows($connect);
    }

    function ubah($data){
        global $connect;

        $id = $data["id"];
        $nama = $data["nama"];
        $alamat = $data["alamat"];
        $umur = $data["umur"];
        $jabatan = $data["jabatan"];
        
        $query = "UPDATE tab_pegawai SET
                    nama = '$nama',
                    alamat    = '$alamat',
                    umur       = '$umur'
                    jabatan    = '$jabatan',

                    WHERE id = $id ";

        mysqli_query($connect, $query);

        return mysqli_affected_rows($connect);
    }

    function hapus($id) {
        global $connect;
        mysqli_query($connect, "DELETE FROM tab_pegawai WHERE id = $id");
    
        return mysqli_affected_rows($connect);
    }

    function cari($keyword) {
        $query = "SELECT * FROM tab_pegawai 
                    WHERE 
                    nama LIKE '%$keyword%' OR
                    alamat LIKE '%$keyword%'
                ";
        return query($query);
    }
?>