<?php  

include './baglan.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$ok = array(
    'errorCode'=> '0',
    'errorContent' => 'Başarı ile Eklendi'
);

$no = array(
    'errorCode'=> '1',
    'errorContent' => 'Eklenemedi'
);


if ($_GET['addNewBarcode'] == "ok") {

	$kaydet = $db->prepare("INSERT INTO barcode SET
		barcode_content=:barcode_content
		

		");
	$insert = $kaydet->execute(array(
		'barcode_content' => $_GET['barcode_content']
		

	));

	if ($insert) {

		$prss = json_encode($ok);
        print_r($prss);
	} else {
        
        $prss = json_encode($no);
        print_r($prss);
	}

}





?>