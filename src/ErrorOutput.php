<?php
	class ErrorOutput{
		public static function err_out($mes){
			$curdate=date('Y-m-d H:i:s');
			$errfile=file_put_contents('./err.json');
			$arr=[
				"date"=>$curdate,
				"error"=>$mes
			];
			$arr=json_encode($arr);
			file_put_contents('./err.json', $arr, FILE_APPEND);

		}
	}