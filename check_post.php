<?php
$name = $_POST['username'];
$email = $_POST["useremail"];
$password = $_POST["userpassword"];

// if(trim($name) == '') 
//     echo "Add username!";
// elseif (strlen(trim($name)) <= 1) 
//     echo "Length is not enough!";
// elseif (trim($email) == '' || trim($password) == '' || trim($_POST['message']) == '') {
//     echo"Add everything!";
// } else {
//     $_POST['userpassword'] = password_hash($password,'shakh');
//     echo "<h1> Everything is perfect</h1>";

//     foreach($_POST as $key => $value) {
//        echo "<p> $value </p>";
//     }

//     header('Location:about.php');
//     exit;
// };


if(trim($name) == '')
    echo "Add Username!!";
elseif (strlen(trim($password)) <= 2) {
    echo "Length is not enough sorry";
}
elseif (trim($email) == '' || trim($password) == ''|| trim($email) == '') {
    echo"Add every fill!";
} else {
    $_POST['userpassword'] = password_hash($password,PASSWORD_DEFAULT);
    echo "<h1> Everything is perfect</h1>";
    foreach ($_POST as $key => $value) {
        echo "<p> $value </p>";
    }
}
