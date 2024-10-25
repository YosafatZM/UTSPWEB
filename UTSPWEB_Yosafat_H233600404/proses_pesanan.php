<?php 

$btn = $_POST['btn'];
$nama    = $_POST['nama'];
$film    = $_POST['film'];
$qty     = $_POST['qty'];
$jt      = $_POST['jt'];
$wp      = $_POST['wp'];
$tambahan = 0;

switch ($jt) {
    case 'Regular':
        $harga = 50000;
        break;
    
    case 'VIP':
        $harga = 100000;
        break;
}

switch ($wp) {
    case 'Jam Malam':
        $tambahan = 20000;
        break;
}

$ht= $harga + $tambahan;
$totalqty = $ht * $qty;

if ($qty > 5) {
    $disc = 0.1 * $totalqty;
    $total =  $totalqty - $disc;
} else {
    $total = $totalqty;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>
<body>

<pre><h2>    
    UTS PWEB    

    Nama  : Yosafat Zefa Mawuntu
    Kelas : 3-A 
    NIM   : H233600404 
</h2></pre>

    <pre><h2>--------UTS PWEB----------------------------------------------------------------------------------------------------------------------------------------------------------------- 

        <label>Nama Pelanggan        : </label> <?= $nama;?> <br>
        <label>Pilihan Film          : </label> <?= $film;?> <br>
        <label>Jumlah Tiket          : </label> <?= $qty;?> <br>
        <label>Jenis Tiket           : </label> <?= $jt;?> <br>
        <label>Waktu Pemutaran       : </label> <?= $wp;?> <br>
        <label>Harga Per Tiket       :  Rp.</label> <?= number_format($ht);?> <br>
        <label>Harga Setelah Diskon  :  Rp.</label> <?= number_format($total);?> <br>

    </h2></pre>
    
</body>
</html>