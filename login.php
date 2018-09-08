<?php
$conn = mysqli_connect("localhost", 'root', '', 'login_page');


if(isset($_POST)){

    $email = $_POST['em'];
    $passs = $_POST['pas'];


$check = mysqli_query($conn, "SELECT * FROM users WHERE email_address = '$email' AND password = '$passs' ");

$row = mysqli_fetch_array($check);


$num = mysqli_num_rows($check);

echo $num.'rows<p>';

if($num == 1){
    echo 'ÝOU are a USER';
}else{
    echo 'not a user';
}

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
</head>
<body>
	<div class="uk-section uk-container">
	<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
	<form method="post" >
EMAIL:
<input type='text' name='em'>
<p></p>
    
    PASSWORD:
<input type='text' name='pas'>
<p></p>


<input type='submit'>
</form>
</div>
</div>

</body>
</html>