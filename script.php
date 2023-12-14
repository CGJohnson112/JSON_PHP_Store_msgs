<?php 

	if(isset($_POST['submit'])){

		$dataFileName = "data.json";
		
		$new_message = array(
			"email" => $_POST['email'],
			"password" => $_POST['password'],
			"number" => $_POST['number']
		);
		
		
		if(filesize($dataFileName) == 0){
		
			$first_record = array($new_message);
			
			$data_to_save = $first_record; 
		}else{
			
			$old_records = json_decode(file_get_contents($dataFileName));

			
			array_push($old_records, $new_message);
			$data_to_save = $old_records;
		}

		if(!file_put_contents($dataFileName, json_encode($data_to_save, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), LOCK_EX)){
		
			$error = "Error storing message, please try again";
		}else{
	
			$success =  "Message is stored successfully";
		}
	}
