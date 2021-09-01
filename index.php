<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php 

if(isset($_POST['hitung'])){
    $cm = $_POST['cm'];
    $kg = $_POST['kg'];
    $operasi = $_POST['operasi'];

    switch ($operasi) {
      case 'pria':
        $cm2 = floatval($cm*$cm);
        $m = floatval($cm2/10000);
        $imt = floatval($kg/$m);

        if($imt < 18){
          $hasil = "kurus";
        } elseif($imt >= 18 && $imt <= 25){
          $hasil = "normal";
        } elseif($imt >= 25 && $imt <= 27){
          $hasil = "gemuk";
        } else {
          $hasil = "obesitas";
        }

        break;

      case 'wanita':
        $cm2 = floatval($cm*$cm);
        $m = floatval($cm2/10000);
        $imt = floatval($kg/$m);

        if($imt < 17){
          $hasil = "kurus";
        } elseif($imt >= 17 && $imt <= 23){
          $hasil = "normal";
        } elseif($imt >= 23 && $imt <= 27){
          $hasil = "gemuk";
        } else {
          $hasil = "obesitas";
        }

}
}
?>

 <div class="form">
 <form method="post" action="index.php">
    <h1>Menghitung Berat Badan Ideal</h1>
    <h4>Tinggi Badan</h4><input type="number" name="cm" required>
    <h4>Berat Badan</h4><input type="number" name="kg" required>
  <select name="operasi">
		<option value="pria">Pria</option>
		<option value="wanita">Wanita</option>				
	</select>
    <input type="submit" name="hitung" value="Hitung">
    
      <?php 	
		    if(isset($_POST['hitung'])){
      ?>
    <h3>Nilai IMT kamu <?php echo (round($imt,1)); ?> Dan Berat Badan Kamu <?php echo $hasil; ?></h3>
      <?php } ?>
</div>
</body>
</html>







