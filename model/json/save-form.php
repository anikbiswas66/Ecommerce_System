<?php 

 if($_POST['fullname'] != '' && $_POST['username'] != '' && $_POST['email'] != '' && $_POST['password'] != '' && $_POST['address'] != '' && $_POST['phoneno'] != '' && $_POST['nid'] != '' && $_POST['gender'] != ''&& $_POST['dob'] != '')
 {
    if(file_exists('data.json'))
        {
	        $current_data = file_get_contents('data.json');
	        $array_data = json_decode($current_data, true);
	        $new_data = array
			(
	                'fullname' => $_POST['fullname'],
					'username' => $_POST['username'],
					'email' => $_POST['email'],
					'password' => $_POST['password'],
					'address' => $_POST['address'],     
					'phoneno' => $_POST['phoneno'],
					'nid' => $_POST['nid'], 
					'gender' => $_POST['gender'], 
					'dob' => $_POST['dob']
		    );

	    $array_data[]=$new_data;
	    $json_data = json_encode( $array_data, JSON_PRETTY_PRINT);
	  
	        if(file_put_contents('data.json',$json_data))
	            {
		            echo "<h1>Yes, Data has been saved successfully in JSON file.</h1>";
                }
	        else
	            {
		            echo "<h1>Sorry, Didn't store your data!</h1>";
	            }
    }
	else
    {
		 echo "<h2>JSON file not found!</h2>";
    }
} 
  else
    {
		echo "<h2>All fields are required!</h2>";
    }	

?>	 