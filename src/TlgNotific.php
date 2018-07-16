<?php 
	class TlgNotific{
		public static function sendNotif($email,$filename,$comment){
			$botToken="556914578:AAFR7JE9HBHa2fH4nSAsscQSGh7kiGhVsLs";
			$website="https://api.telegram.org/bot".$botToken;
			$chatId= "-220017608";  //Receiver Chat Id 
			$params=[
    		'chat_id'=>$chatID,
    		'text'=>'E-mail:'.$email.', comment:'.$comment.', file:'.$filename,
		];
		$ch = curl_init($website . '/sendMessage');
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$result = curl_exec($ch);
		curl_close($ch);
		}
	}