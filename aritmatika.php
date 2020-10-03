<!DOCTYPE html>
<html>
    <head>
<title></title></head>
<body>
<br ><h3 >Aplikasi Baris Aritmatika</h3></br>
<form action="" method="post"> 
<tr>
<td> Suku Pertama </td>
<td>:</td>
<input type="text" name="a"><br><br>

</tr>
<tr>
<td> Beda </td>
<td>:</td>
<input type="text" name="b"><br><br>

</tr>

<tr> 
<td> Suku Ke- </td>
<td>:</td>
 <input type="text" name="un"><br><br>
 
</tr>


<input type="submit" name="submit" value="Hasil">
</body>
</form>
</html>


<?php 
if (isset($_POST['submit'])){
    $suku1 = $_POST['a'];
    $suku2 = $_POST['b'];
    $suku_n = $_POST['un'];  

   $hasil1 = $suku_n - 1;
   $hasil2 = $hasil1 * $suku2;
   $hasil = $suku1 + $hasil2;
   echo '<br>';
   echo "Suku Ke- ".$_POST['un'] ;
   echo "  adalah  ";
   echo $hasil;
    
}
?>