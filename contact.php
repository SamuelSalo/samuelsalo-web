<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$to = "apu@yritys.com";
$subject = "Yhteydenottopyyntö";
$txt = "Nimi: $name, Email: $email, Puh: $phone, Viesti: $message";
$headers = "From: webmaster@yritys.com";

mail($to,$subject,$txt,$headers);
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Yhteydenottopyyntö vastaanotettu</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body class="text-center" id="page-top">
    <h1 class="text-center">Kiitos!</h1>
    <h2 class="text-center">Yhteydenottopyyntösi on vastaanotettu!</h2>
    <h5 class="text-center">Sinut ohjataan takaisin edelliselle sivulle 5 sekunnin kuluttua...</h5>
    <a class="btn btn-primary btn-xl text-center" role="button" href="/samuelsalo/index.html">Ohjaa nyt</a>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
<script type="text/javascript">   
    function Redirect() 
    {  
        window.location="/samuelsalo/index.html"; 
    } 
    setTimeout('Redirect()', 5000);   
</script>
</html>