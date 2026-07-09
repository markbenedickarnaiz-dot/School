<?php
$username = $_POST['username'];
$password = $_POST['password']; 
// example username and paassword
if ($username === 'admin' && $password === '1234') {
    // redirect to home page
    header('Location: Home.HTMl');s
    exit();
} else {
    echo "Invalid username or password"; 
}

?>
   