<?php
error_reporting(E_ALL);
require("./src/ErrorOutput.php");
require("./src/Db.php");
require("./src/TlgNotific.php");



$dbtbl=Db::getInstance();
if(isset($_POST['email'],$_POST['filename'])){
	if(preg_match("/^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i", $_POST['email'])){
		$em=$_POST['email'];
		if(preg_match("/\.(pdf|jpe?g)$/i", $_POST['filename'])){
			$filename=$_POST['filename'];
			$comment=$_POST['comment'];
			Db::addOffer($em,$comment,$filename);
			TlgNotific::sendNotif($em,$comment,$filename);
		}
		else{
				ErrorOutput::err_out("Invalid file");
		}
		}
	else{
		ErrorOutput::err_out("Invalid e-mail");
	}

}
else{
	ErrorOutput::err_out("Required data is not filled");
}			





