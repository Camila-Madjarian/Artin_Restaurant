<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ? LIMIT 1");
   $select_user->execute([$email, $pass]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);
   
   if($select_user->rowCount() > 0){
     setcookie('user_id', $row['id'], time() + 60*60*24*30, '/');
     header('location:home.php');
   }else{
      $message[] = 'Los datos ingresados son incorrectos';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Artin - Iniciar sesión</title>

   <!-- box icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/user_style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>
   <div class="banner">
        <div class="detail">
            <h1>Iniciar Sesión</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
            <span><a href="home.html">home</a><i class='bx bx-right-arrow-alt'></i>Iniciar Sesión</span>
        </div>
    </div>

<section class="form-container">
   <div class="heading">
      <h1>Bienvenido</h1>
     
   </div>
   <form action="" method="post" enctype="multipart/form-data" class="login">
      
      <p>Email <span>*</span></p>
      <input type="email" name="email" placeholder="Ingresa tu email" maxlength="50" required class="box">
      <p>Contraseña<span>*</span></p>
      <input type="password" name="pass" placeholder="Ingresa tu contraseña" maxlength="20" required class="box">
      <p class="link">¿No tenés una cuenta? <a href="register.php">Registrate</a></p>
      <input type="submit" name="submit" value="Inicia Sesión" class="btn">
   </form>

</section>












<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>