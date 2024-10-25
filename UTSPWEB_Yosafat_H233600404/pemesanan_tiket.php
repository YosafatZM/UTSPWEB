<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS PWEB Yosafat</title>
</head>
<body>
    
<pre><h2>    
    UTS PWEB    

    Nama  : Yosafat Zefa Mawuntu
    Kelas : 3-A 
    NIM   : H233600404 
</h2></pre>

<form action="proses_pesanan.php" method="post">
    <pre><h2>--------UTS PWEB----------------------------------------------------------------------------------------------------------------------------------------------------------------- 
        
        <label>Nama Pelanggan   : </label> <input type="text" name="nama">
        
        <label>Pilihan Film     : </label> <select name="film" id="film" style="width: 170px; height: 21px;">
                                                <option value="" selected disabled>--Select--</option>
                                                <option value="Film A">Film A</option>
                                                <option value="Film B">Film B</option>
                                                <option value="Film C">Film C</option>
                                                <option value="Film D">Film D</option>
                                                <option value="Film E">Film E</option>
                                            </select>

        <label>Jumlah Tiket     : </label> <input type="text" name="qty">

        <label>Jenis Tiket      : </label> 
        
        <input type="radio" name="jt" value="Regular"> Regular <input type="radio" name="jt" value="VIP"> VIP

        <label>Waktu Pemutaran  :  </label> 
        
        <input type="radio" name="wp" value="Jam Regular"> Jam Regular (10.00 - 17.00) 
        <input type="radio" name="wp" value="Jam Malam"> Jam Malam  ( > 17.00 )

        <input type="submit" name="btn" id="btn" style="width: 80px; height: 35px;" value="PESAN"/>
    </h2></pre>   
</form>
    
</body>
</html>