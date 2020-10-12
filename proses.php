<?php

if(isset($_GET['fnama']))
{
	$fnama=$_GET['fnama'];
	$lalamat=$_GET['lalamat'];
	$no_hp=$_GET['no_hp'];
	$tgl_lahir=$_GET['tgl_lahir'];
echo "<span class='success'>Dengan<b>METODE GET</b></span></br>";
echo "nama	:".$fnama."<br/>Alamat :".$lalamat."<br/>No Hp :".$no_hp."<br/>tanggal Lahir".$tgl_lahir;
}
?>
