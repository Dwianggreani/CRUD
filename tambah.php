<?php
require 'funcions.php';
//cek apakah tombol submit sudah bisa digunakan atau belom
if( isset($_POST["submit"]) ){

    //cek apakah data berhasil ditambahkan atau tidak
if( tambah($_POST)> 0) {
    echo "
        <script>
            alert('Data Berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
";
}else {
    echo "
    <script>
        alert('Data gagal ditambahkan');
        document.location.href = 'index.php'
    </script> 
";
}

}
?>
<!DOCTYPE html>
<html>
<head>

    <title>Tambah Data Mahasiswa</title>

</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">

        <ul>  
            <li>
                <label for="foto">FOTO        :</label>
                <input type="text" name="foto" id="foto">
            </li>
            <li>
                <label for="nama">NAMA         :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li> 
                <label for="npm">NPM           :</label>
                <input type="text" name="npm" id="npm"
                required>

            </li>
            <li>
                <label for="jurusan">JURUSAN    :</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <br>
                 <button type="submit" name="submit">TAMBAH DATA!</button>
            

            
        </ul>
    
    
    </form>

</body>


</html>