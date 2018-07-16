<?php 
	class Db{
	static private $instance = null;
		private function __construct(){

		}
		public static function getInstance(){
			if(!self::$instance){
				try {
				$host = "localhost"; 
				$dbname="offers";
				$dbuser = "root"; 
				$dbpassword = ""; 
				$dsn='mysql:host='.$host.';dbname='.$dbname;
					self::$instance=new PDO($dsn, $dbuser,$dbpassword);	
				} catch (PDOException $e) {
					echo $e->getMessage();
					ErrorOutput::err_out($e->getMessage());
					$instance=null;	
				}
				
			}	
			return self::$instance;
		}
		public static function addOffer($em,$cm,$filename){

			$instance=self::getInstance();
			$s = $instance->prepare("INSERT INTO offers_table (email, comment, file) values (:em,:cm, :filename)");
			$s->bindParam(':em', $em);
			$s->bindParam(':cm', $cm);
			$s->bindParam(':filename', $filename);
			$s->execute();
			print_r($s);
			die();


			self::getInstance()->exec($sql);		
		}
	}