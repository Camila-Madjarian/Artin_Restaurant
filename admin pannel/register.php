<?php

include '../components/connect.php';

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
   $image_folder = '../uploaded_files/'.$rename;

   $select_seller = $conn->prepare("SELECT * FROM `sellers` WHERE email = ?");
   $select_seller->execute([$email]);
   
   if($select_seller->rowCount() > 0){
      $warning_msg[] = 'Éste email ya existe';
   }else{
      if($pass != $cpass){
         $warning_msg[] = 'Las contraseñas no coiciden';
      }else{
         $insert_seller = $conn->prepare("INSERT INTO `sellers`(id, name, email, password, image) VALUES(?,?,?,?,?)");
         $insert_seller->execute([$id, $name, $email, $cpass, $rename]);
         move_uploaded_file($image_tmp_name, $image_folder);
         $success_msg[] = 'Registro exitoso!';
      }
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
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>
<body style="padding-left: 0;">



<!-- register section starts  -->

<div class="form-container">
   
   <form class="register" action="" method="post" enctype="multipart/form-data">
      <h3>Registrarse</h3>
      <div class="flex">
         <div class="col">
            <p>Nombre <span>*</span></p>
            <input type="text" name="name" placeholder="Ingresa tu nombre" maxlength="50" required class="box">
            <p>Email<span>*</span></p>
            <input type="email" name="email" placeholder="Ingresa tu email" maxlength="20" required class="box">
         </div>
         <div class="col">
            <div class="input-field">
               <p>Contraseña <span>*</span></p>

               <input type="password" name="pass" placeholder="Ingresa tu contraseña" maxlength="20" required class="box">
            </div>
            <div class="input-field">
               <p>Confirma tu contraseña<span>*</span></p>
               <input type="password" name="cpass" placeholder="Confirma tu contraseña" maxlength="20" required class="box">
            </div>
         </div>
      </div>
      <div class="input-field">
         <p>Foto <span>*</span></p>
         <input type="file" name="image" accept="image/*" required class="box">
      </div>
      
      <p class="link">¿Ya tenés una cuenta?<a href="login.php">Inicia Sesión</a></p>
      <input type="submit" name="submit" value="register now" class="btn">
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