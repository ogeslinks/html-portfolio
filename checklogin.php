<?php
session_start();
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["form.login"];
    $password = $_POST["form.password"];

    $sql = "SELECT * FROM users WHERE username = '$Username' AND pwd = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION["matno"] = $user["matno"];
        $_SESSION["password"] = $user["pwd"];
        $_SESSION["email"] = $user["email"];
        $_SESSION["surname"] = $user["sname"];
        $_SESSION["oname"] = $user["oname"];
        $_SESSION["dept"] = $user["dept"];
        $_SESSION["courseofstudy"] = $user["cstudy"];
        $_SESSION["coursesession"] = $user["csession"];
        $_SESSION["classsession"] = $user["clsession"];
        $_SESSION["modeofstudy"] = $user["mstudy"];
        $_SESSION["dateofbirth"] = $user["dob"];
        $_SESSION["sex"] = $user["sex"];
        $_SESSION["maritalstatus"] = $user["mstatus"];
        $_SESSION["maidenname"] = $user["mname"];
        $_SESSION["nationality"] = $user["nation"];
        $_SESSION["stateoforigin"] = $user["sorigin"];
        $_SESSION["localgovt"] = $user["lga"];
        $_SESSION["hostelrooom"] = $user["hroom"];
        $_SESSION["offcampus"] = $user["ocaddress"];
        $_SESSION["permaddress"] = $user["phaddress"];
        $_SESSION["parentaddress"] = $user["pgaddress"];
        $_SESSION["studentphone"] = $user["sphone"];
        $_SESSION["guardianphone"] = $user["gphone"];
        
		
        header("Location: dashboard.php");
    } else {
         header("Location:dashboard.php");
    }
}
?>
