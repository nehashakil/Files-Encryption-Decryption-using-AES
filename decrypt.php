<?php
require 'lib/aes.php';
require 'lib/aesctr.php';

$key = $_POST['key'];
$namaFile = file_get_contents($_FILES['doc']['tmp_name']);
$encFile = AesCtr::decrypt($namaFile,$key,128);
$encrypt = file_put_contents("decrypt/".($_FILES['doc']['name']), $encFile);

if ($encrypt) {
	echo "File Has Been Decrypted";
}
?>