<?php

trait Logger{

	public function log($message){
		file_put_contents(
			date('Y-m-d').'.log',
			date('H:i:s ->').$message.PHP_EOL,
			FILE_APPEND);		
	}
}