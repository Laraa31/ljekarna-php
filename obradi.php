<?php
$kolicinaAndol=$_POST['kolicinaAndol'];
$kolicinaAspirin=$_POST['kolicinaAspirin'];
$kolicinaVitamin=$_POST['kolicinaVitamin'];
$izvor=$_POST['izvor'];

$andolCijena=6;
$aspirinCijena=15;
$vitaminCijena=4;

$ukupnaCijena=($andolCijena*$kolicinaAndol)+($aspirinCijena*$kolicinaAspirin)+($vitaminCijena*$kolicinaVitamin);
$ukupnaCijenaPDV=$ukupnaCijena*0.25+$ukupnaCijena;


if($izvor=="Redovan sam kupac"){
	$ispis="Hvala!";
}
else{
	$ispis="Hvala! Dođite nam ponovno!";
}


?>

<html>
<head></head>

<body bgcolor="#c2ffe0">
<br><br>
<br><br>
<b><font size=5 ><p align="center">Račun</p></font>
<form align="center">
Vrijeme:  <?php echo date ("H:i:s"); ?>
<br>
Datum:  <?php echo  date("d.m.Y") ?>
<table align="center">
<tr> <td width=100px><p style="background-color:#bdbdbd"><b>Artikl</td><td width=80px><p style="background-color:#bdbdbd"><b> Kolicina</td> <td width=80px><p style="background-color:#bdbdbd"><b> Cijena</td></tr>
<tr> <td>Andol</td><td align="center"> <?php echo" $kolicinaAndol "; ?> </td> <td align="center"><?php echo" $andolCijena "?>€</td> </tr>
<tr> <td>Aspirin</td><td align="center"> <?php echo" $kolicinaAspirin "?> </td> <td align="center"><?php echo" $aspirinCijena "?>€</td> </tr>
<tr> <td>Vitamin C</td><td align="center"> <?php echo" $kolicinaVitamin "?> </td> <td align="center"><?php echo" $vitaminCijena "?>€</td> </tr>
<tr><td width=100px><p style="background-color:#bdbdbd"><b>Ukupno:</td> <td></td><td align="center"><?php echo" $ukupnaCijena "?>€</td></tr>
<tr></tr>
<tr><td width=100px><p style="background-color:#bdbdbd"><b>Cijena s PDV-om 25%:</td> <td></td><td align="center"> <?php echo" $ukupnaCijenaPDV "?>€</td></tr>
</table>
<br>

<?php

if($ukupnaCijenaPDV>30)
{
	echo"Zbog potrošenih više od 30€ u idućoj ćete narudžbi dobiti poklon: <br> <br>";
	echo "<img src='labelo.jpg' style='width:25%;height:25%; opacity:0.5;'>";
}
echo "<br> <br>";
echo" $ispis "?>

<st
<br><br>

</form>
</body>
</html>


//Ako je kupac potrosio vise od 30€ ima pravo na iznenađenje koje će dobiti prilikom nove narudžbe(ispisati) a koje se pojavljuje u obliku slike na dnu računa. 
Prelaskom mišem preko slike ona iz poluprozirnog stanja postaje jasno vidljiva(css img hover opacity) te se poveća na 120 posto(css size) i dobije sjenu (css shadow). 
Ispis na dvije decimale.


 