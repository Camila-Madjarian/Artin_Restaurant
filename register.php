<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_POST['submit'])){

   $id = unique_id();
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cpass = sha1($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

   $image = $_FILES['image']['name'];
   $image = filter_var($image, FILTER_SANITIZE_STRING);
   $ext = pathinfo($image, PATHINFO_EXTENSION);
   $rename = unique_id().'.'.$ext;
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_files/'.$rename;

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
   $select_user->execute([$email]);
   
   if($select_user->rowCount() > 0){
      $message[] = 'Email ya está en uso!';
   }else{
      if($pass != $cpass){
         $message[] = 'La contraseña no  coincide!';
      }else{
         $insert_user = $conn->prepare("INSERT INTO `users`(id, name, email, password, image) VALUES(?,?,?,?,?)");
         $insert_user->execute([$id, $name, $email, $cpass, $rename]);
         move_uploaded_file($image_tmp_name, $image_folder);
         
         $verify_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ? LIMIT 1");
         $verify_user->execute([$email, $pass]);
         $row = $verify_user->fetch(PDO::FETCH_ASSOC);
         
         if($verify_user->rowCount() > 0){
            setcookie('user_id', $row['id'], time() + 60*60*24*30, '/');
            header('location:home.php');
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Artin - Registrarse</title>

   <!-- box icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/user_style.css">

</head>
<body>
<?php include 'components/user_header.php'; ?>
   <div class="banner">
        <div class="detail">
            <h1>Sobre nosotros</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
            <span><a href="home.html">Home</a><i class='bx bx-right-arrow-alt'></i>Sobre nosotros</span>
        </div>
    </div>
    
<section class="form-container">
   <div class="heading">
      <h1>Crea tu cuenta</h1>
      <img src="image/separator.png" alt=""> 
   </div>
   <form class="register" action="" method="post" enctype="multipart/form-data">
      
      <div class="flex">
         <div class="col">
            <p>Nombre <span>*</span></p>
            <input type="text" name="name" placeholder="Ingresa tu nombre" maxlength="50" required class="box">
            <p>Email <span>*</span></p>
            <input type="email" name="email" placeholder="Ingresa tu email" maxlength="20" required class="box">
         </div>
         <div class="col">
            <p>Contraseña <span>*</span></p>
            <input type="password" name="pass" placeholder="Ingresa tu contraseña" maxlength="20" required class="box">
            <p>Confirmar Contraseña <span>*</span></p>
            <input type="password" name="cpass" placeholder="Confirma tu contraseña" maxlength="20" required class="box">
         </div>
      </div>
      <p>Imagen <span>*</span></p>
      <input type="file" name="image" accept="image/*" required class="box">
      <p class="link">¿Ya tenés una cuenta? <a href="login.php">Inicia sesión</a></p>
      <input type="submit" name="submit" value="register now" class="btn">
   </form>

</section>












<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>