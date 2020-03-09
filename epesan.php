<html>
<head></head>
<body>
<center>
<h1>PHP emailer</h1>
<form method="post">
<label>Email kamu</label>
<input type="text" name="you"><br>
<label>Email Target </label>
<input type="email" name="email"><br>
<label>Subject </label>
<input type="text" name="sub"><br>
<label>Pesan</label>
<textarea name="psn" placeholder="Pesanmu"></textarea>
<br>
<label>Header</label>
<input type="text" name="hed">
<br><input type="submit" name="gas">
</center>
</body>
</html>
<?php
$your = $_POST['you'];
$email_lu = $_POST['email'];
$subject = $_POST['sub'];
$pesan = $_POST['psn'];
$headers = $_POST['hed'];
if(isset($_POST["gas"])){
mail($your,$email_lu,$subject,$pesan,$headers); 
echo $your."+".$email_lu."+".$subject."+".$pesan."+".$header."=> Successsssss";
}
?>