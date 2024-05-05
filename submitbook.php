<?php
	$link = mysqli_connect("localhost", "root", "", "travel");
	if($link === false){
    	die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
	$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
	$phone_number = mysqli_real_escape_string($link, $_REQUEST['phone_number']);
	$email_address = mysqli_real_escape_string($link, $_REQUEST['email_address']);
	$address = mysqli_real_escape_string($link, $_REQUEST['address']);
	$no_of_adults = mysqli_real_escape_string($link, $_REQUEST['no_of_adults']);
	$no_of_children = mysqli_real_escape_string($link, $_REQUEST['no_of_children']);
	$departure = mysqli_real_escape_string($link, $_REQUEST['departure']);
	$arrival = mysqli_real_escape_string($link, $_REQUEST['arrival']);
	$package_id= mysqli_real_escape_string($link, $_REQUEST['package_id']);
	$airlines= mysqli_real_escape_string($link, $_REQUEST['airlines']);
	$hotel= mysqli_real_escape_string($link, $_REQUEST['hotel']);
	
	
	$sql = "INSERT INTO book (f_name, l_name,phone_number,email_address,address, no_of_adults, no_of_children, departure, arrival, package_id , airlines, hotel) VALUES ('$first_name', '$last_name', '$phone_number','$email_address', '$address', '$no_of_adults', '$no_of_children','$departure', '$arrival','$package_id', '$airlines','$hotel')";
	if(mysqli_query($link, $sql)){
	    echo "Records added successfully.";
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}

?>