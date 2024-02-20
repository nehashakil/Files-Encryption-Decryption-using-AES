<?php
require 'lib/aes.php';
require 'lib/aesctr.php';

$key = $_POST['key'];
$namaFile = file_get_contents($_FILES['doc']['tmp_name']);
$encFile = AesCtr::encrypt($namaFile,$key,128);
$encrypt = file_put_contents("encrypt/".($_FILES['doc']['name']), $encFile);

if ($encrypt) {
	echo "File Has Been Encrypted";
}
?>