<?php
	//Start session
	session_start();
 
	//Include database connection details
	require_once('../db/connection.php');
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$username = clean($_POST['usuario']);
	$password = clean($_POST['password']);
 
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'Nombre de usuario hace falta!';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Favor de ingresar el Password! ';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		//header("location: index.php");
                 echo "<script> window.location.replace('/auth/login_form.php') </script>";
		exit();
	}
 
	//Create query
	$qry="SELECT * FROM miembro WHERE usuario='$username' AND password='$password'";
	$result=mysql_query($qry);
 
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['miem_id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['usuario'];
			$_SESSION['SESS_LAST_NAME'] = $member['password'];
			session_write_close();
			//header("location: admin.php");
                        echo "<script> window.location.replace('/admin.php') </script>";
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'Usuario y password no encontrado';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				//header("location: /auth/login_form.php");
                                echo "<script> window.location.replace('/auth/login_form.php') </script>";
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>