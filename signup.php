<?php


$conn = mysqli_connect("localhost", 'root', '', 'login_page');



if(isset($_POST)){

$email = $_POST['email'];

$password = $_POST['pass'];
$check = mysqli_query($conn, "SELECT * FROM users WHERE email_address = '$email' ");
$xyz = mysqli_fetch_array($check);

$abc = mysqli_num_rows($check);
if($abc != 0){
    echo "álready registered";
}
else
{
    $qery = mysqli_query($conn, "INSERT INTO users (email_address, password) VALUES('$email', '$password') ");
}
if($qery){
    echo "inserted";
}
else{
echo mysqli_error($conn);
}






}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
</head>
<body>
	<form method='post' action='signup.php'>

        Email Address:
<input type='text' name='email'>
<p></p>
Password: 
<input type='text' name='pass'>
<p></p>
<input type='submit'>

</form>

</body>
</html>