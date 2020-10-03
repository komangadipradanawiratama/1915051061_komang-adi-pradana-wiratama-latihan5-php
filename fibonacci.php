<!DOCTYPE html>
<html>
    <head>
<title></title></head>
<body>
<h3>Aplikasi Deret Fibonacci</h3>
<form action="" method="post">
<tr>
  <td>Suku Pertama</td>
  <td>:</td>
  <input type="text" name="deret1" ><br><br>
</tr>

<tr>
  <td>Suku Kedua</td>
  <td>:</td>
  <input type="text" name="deret2" ><br><br>
</tr>
<tr>
  <td>Jumlah Deret Yang Dicari</td>
  <td>:</td>
  <input type="text" name="jumlahderet"><br><br>
</tr>

<input type="submit" name="submit" value="Hasil">
</body>
</form>
</html>


<?php
if (isset($_POST['submit'])){
    $angka1 = $_POST['deret1'];
    $angka2 = $_POST['deret2'];
    $n = $_POST['jumlahderet'];  

    echo " <br> ";
    echo " Suku Deret Fibonaccinya yaitu  ";
    echo "$angka1 $angka2";
   
    for($i =0; $i < $n; $i++){
        $hasil = $angka1 + $angka2;
        echo " ";
        echo $hasil ;

        $angka1 = $angka2;
        $angka2 = $hasil;
    }
}
?>