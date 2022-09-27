

<?php 
session_start();
include "dbconnect.php";
if ($_GET["sayfa"]>$_SESSION["sayfasayisi"]) {
 
 echo "hatalı sayfa";
 die();

}
$sorgu2=$conn->prepare("select * from bilgiler ");

$sorgu2->execute();

$say=$sorgu2->rowcount();
$son=$say-3;
if($_GET["sayfa"]=="son"){






$sorgu=$conn->prepare("select * from bilgiler LIMIT $son,3  ");
$sorgu->execute();


$kayit=$sorgu->fetchall(PDO::FETCH_ASSOC);
} else if(!empty($_GET["sayfa"])){
 $a=$_GET["sayfa"];
echo $b=($a*3)-3;

$sorgu=$conn->prepare("select * from bilgiler  LIMIT $b,3 ");

$sorgu->execute();



$kayit=$sorgu->fetchall(PDO::FETCH_ASSOC);

}

else
{


$sorgu=$conn->prepare("select * from bilgiler  LIMIT 3 ");

$sorgu->execute();



$kayit=$sorgu->fetchall(PDO::FETCH_ASSOC);
}





echo"<table border='1' align='center' > "; ?>
		<tr>
	<th>adsoyad</th>
	<th>kullanici adi</th>
	<th>resim</th>
	<th>sifresi</th>
	<th colspan="2">işlemler</th>
	</tr>
	<?php 
foreach ($kayit as  $value) {
	?>
	<tr>
	<td><?php echo $value["adsoyad"]; ?></td>
	<td><?php echo $value["kullaniciadi"]; ?></td>
	<td><img src="<?php echo $value["resimurl"]; ?>" width="100px">  </td><td><?php echo $value["sifre"]; ?>  </td>
	<td><a href='guncelle.php?id=<?php  echo $value['id'] ?>'>duzenle</a>
		<td><a href='sil2.php?silid=<?php  echo $value['id'] ?>'>SİL</a></td>
	</tr>

<?php  
}?>

 </table>
 <table align="center">
 	<?php echo $say; ?>
<tr> <td><a href="?sayfa=1"><<</a></td>




<?php  for ($i=0; $i <ceil($say/3) ; $i++) { 
	$a=$i+1;
	$_SESSION["sayfasayisi"]=ceil($say/3) ;
	echo "<td><a href='?sayfa=$a'>$a</a>";
	
}


?>




		<a href="?sayfa=son">>></a></td></tr>
</table>






