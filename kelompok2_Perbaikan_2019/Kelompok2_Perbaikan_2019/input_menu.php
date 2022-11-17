<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIA UNMUL</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <header>
        <h2>Bakery</h2>
    </header>
    
    <div class="form-class">
        <h3>Tambah Menu Baru</h3>
        <form action="tambah.php" method="post" enctype="multipart/form-data"> 
      
            <label for="">Nama Menu</label><br>
            <input type="text" name="nama_menu" class="form-text"><br>
            
            <label for="">Deskripsi Menu</label><br>
            <input type="text" name="deskripsi_menu" class="form-text"><br>
            
            <label for="">Harga Menu</label><br>
            <input type="number" name="harga_menu" class="form-text"><br>
            
            <label for="">Foto Menu : </label><br>
            <input type="file" name="foto_menu"><br><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>