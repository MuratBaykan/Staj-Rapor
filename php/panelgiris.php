<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" />
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
<link href="css/styles.css" rel="stylesheet" />
<link rel="stylesheet" href="owl/owl.carousel.min.css">
<link rel="stylesheet" href="owl/owl.theme.default.min.css">

</head>
<body style="background-color: black;">

  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="index.html">Gebze Rehberi</a>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
         
        </div>
    </div>
</nav><br><br><br><br><br><br>
<form action="panelgiris.php" method="post" style="max-width:500px;margin:auto">
  <h2 style="text-align:center;color:white;padding-bottom: 15px;">Panel Giriş</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Kullanıcı Adı" name="usrnm">
  </div>

 
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Parola" name="psw">
  </div>

  <button type="submit" style="color:black;background-color:dodgerblue;" class="btn">Giriş Yap</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
<?php
session_start();

if(isset($_POST["usrnm"], $_POST["psw"]))
{
  if($_POST["usrnm"]=="admin"  && $_POST["psw"]=="12345")
  {
    $_SESSION["user"]=$_POST["usrnm"];
    header("location:admin/panel.php");
  }

  else
  {
    echo "<script>alert('Kullanıcı Adı Veya Şifre Yanlış !')</script>";
  }
}
?>