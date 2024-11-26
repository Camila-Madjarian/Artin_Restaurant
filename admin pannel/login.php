<?php

include '../components/connect.php';

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select_seller = $conn->prepare("SELECT * FROM `sellers` WHERE email = ? AND password = ? LIMIT 1");
   $select_seller->execute([$email, $pass]);
   $row = $select_seller->fetch(PDO::FETCH_ASSOC);
   
   if($select_seller->rowCount() > 0){
     setcookie('seller_id', $row['id'], time() + 60*60*24*30, '/');
     header('location:dashboard.php');
   }else{
      $warning_msg[] = 'Contraseña o email incorrecto';
   }

}

?>
<style type="text/css">
   <?php include '../css/admin_style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Iniciar Sesión</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>
<body style="padding-left: 0;">
<!-- register section starts  -->

<div class="form-container">
   <form action="" method="post" enctype="multipart/form-data" class="login">
      <h3>Iniciar Sesión</h3>
      <p>Email <span>*</span></p>
      <input type="email" name="email" placeholder="Ingresa tu email" maxlength="20" required class="box">
      <p>Contraseña <span>*</span></p>
      <input type="password" name="pass" placeholder="Ingresa tu contraseña" maxlength="20" required class="box">
      <p class="link">¿No tenés una cuenta? <a href="register.php">Registrate</a></p>
      <input type="submit" name="submit" value="Iniciar sesion" class="btn">
   </form>

</div>

<!-- registe section ends -->














<!-- sweetalert cdn link  -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

   <!-- custom js link  -->
   <script type="text/javascript" src="script.js"></script>

   <?php include '../components/alert.php'; ?>
   
</body>
</html>