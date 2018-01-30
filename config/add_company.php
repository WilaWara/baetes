<?php
	require('conexion.php');
	session_start();

    $company_name = $_POST["company_name"];
	$company_url = $_POST["company_url"];
	$company_text = $_POST["company_text"];

	$filtered_company_name = mysqli_real_escape_string($Conexion, $company_name);
	$filtered_company_text = mysqli_real_escape_string($Conexion, $company_text);

	$img_path= "../img_companies/";
	if (isset($_FILES['company_logo']) && $_FILES['company_logo']['tmp_name'] != ''){
		$file=$_FILES['company_logo']['tmp_name'];
		$information_path = pathinfo($_FILES["company_logo"]["name"]);
		$extension = $information_path['extension'];
		$fileName = $_FILES['company_logo']['name'];
		move_uploaded_file($file, $img_path . $fileName);

		$query = "INSERT INTO companies (name, url, logo, description) VALUES ('$filtered_company_name', '$company_url', '$fileName', '$filtered_company_text')";
		$result = $Conexion->query($query);

		echo "Company data successfully stored";
	}else{
		echo "There was an error trying to upload the image";
	}
?>