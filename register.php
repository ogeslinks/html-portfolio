<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//store form data
    $full_name = $_POST["fname"];
    $email = $_POST["email"];
    $user_name = $_POST["uname"];
    $phone_number  = $_POST["phone"];
    $level	= $_POST["level"];
      $course_of_study = $_POST["study"];
    $department = $_POST["dept"];
    $faculty = $_POST["faculty"];
    $address= $_POST["address"];
    $pasword = $_POST["password"];
   
    

    $sql = "INSERT INTO `users` (`id`, `fname`, `email`, `username`, `phone`, `level`, `cstudy`, `dept`, `faculty`, `address`, `password`) VALUES (NULL, '$full_name', '$email', '$user_name', '$phone_number', '$level', '$course_of_study', '$department', '$faculty', '$address', '$pasword')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: registrationsuccessful.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
