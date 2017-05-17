<?php 
$password=" ";
require_once 'View.php';
/**
* 
*/
class BerandaUI extends View
{
	
	public function tampilLengkap()
	{
		$nama="tara";
		include_once 'pages/beranda.php';
		echo $alamat;
		$this->end();
	}
}



 ?>