<?php

   include 'components/connect.php';

   if(isset($_COOKIE['user_id'])){
      $user_id = $_COOKIE['user_id'];
   }else{
      $user_id = '';
      
   }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/user_style.css">
    <title>Restaurant Artin</title>
</head>
<body>
    <?php include 'components/user_header.php'; ?>
    <!-- slider section -->
    <div class="slider-container" id="home">
        <div class="slider">
            <div class="slideBox active">
              
                <div class="imgBox">
                    <img src="image/banner-slider.jpg" alt="">
                </div>
            </div>
            <div class="slideBox">
             
                <div class="imgBox">
                    <img src="image/banner-slider2.jpg" alt="">
                </div>
            </div>
            
        </div>
        <ul class="controls">
            <li onclick="nextSlide();" class="next"><i class='bx bx-right-arrow-alt'></i></li>
            <li onclick="prevsSlide();" class="prev"><i class='bx bx-left-arrow-alt'></i></li>
        </ul>
    </div>
    <!-- service -->
    <div class="service">
        <div class="box-container">
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/services.png" alt="" class="img1">
                        <img src="image/services (1).png" alt="" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>Delivery</h4>
                    <span>Express</span>
                </div>
            </div>
            <!-- service item -->
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/services (2).png" alt="" class="img1">
                        <img src="image/services (3).png" alt="" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>Soporte</h4>
                    <span>En línea</span>
                </div>
            </div>
            <!-- service item -->
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/services (5).png" alt="" class="img1">
                        <img src="image/services (6).png" alt="" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>Métodos </h4>
                    <span>de Pago</span>
                </div>
            </div>
            <!-- service item -->
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/services (7).png" alt="" class="img1">
                        <img src="image/services (8).png" alt="" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>Descuentos</h4>
                    <span>para clientes</span>
                </div>
            </div>
            <!-- service item -->
        
            </div>
            <!-- service item -->
         
        </div>
    </div>
    <!-- categories -->
    <div class="categories">
        <div class="heading">
            <h1>Nuestros productos</h1>
            <img src="image/separator.png" alt="">
        </div>
        <div class="box-container">
            <div class="box">
                <img src="image/kefte.jpg" alt="">
                <a href="" class="btn">kefte</a>
            </div>
            <div class="box">
                <img src="image/lemenyuh.jpeg" alt="">
                <a href="" class="btn">lehmeyun</a>
            </div>
            <div class="box">
                <img src="image/mammul.jpg" alt="">
                <a href="" class="btn">Mamul</a>
            </div>
            <div class="box">
                <img src="image/sfijas.jpg" alt="">
                <a href="" class="btn">Sfijas</a>
            </div>
        </div>
    </div>
    <img src="image/banner-desc.png" alt="" class="menu-banner">
    <!-- taste -->
    <div class="taste">
        <div class="heading">
       
            <h1>Proba nuestros dulces</h1>
            <img src="image/separator.png" alt="">
        </div>
        <div class="box-container">
            <div class="box">
                <img src="image/taste.webp" alt="">
                <div class="detail">
                
                    <h1>Gurabié</h1>
                </div>
            </div>
            
            <div class="box">
                <img src="image/taste0.webp" alt="">
                <div class="detail">
             
                    <h1>Halvá</h1>
                </div>
            </div>
            <div class="box">
                <img src="image/taste1.webp" alt="">
                <div class="detail">
                    <h2> Anillitos</h2>
                    <h1> de Rhum </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- taste end-->
    <!-- container -->
  
    <!-- container -->
    <div class="taste2">
        <div class="t-banner">
            <div class="overlay"></div>
            <div class="detail">
                <h1>Find Your Taste of Desserts</h1>
                <p>Treat them to a delicious treat and send them some Luck 'o the Irish too!</p>
                <a href="menu.php" class="btn">shop now</a>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="box-overlay"></div>
                <img src="image/type4.jpg" alt="">
                <div class="box-details fadeIn-bottom">
                    <h1>strawberry</h1>
                    <p>Find Your Taste of Desserts</p>
                    <a href="menu.php" class="btn">explore more</a>
                </div>
            </div>
            <div class="box">
                <div class="box-overlay"></div>
                <img src="image/type.avif" alt="">
                <div class="box-details fadeIn-bottom">
                    <h1>strawberry</h1>
                    <p>Find Your Taste of Desserts</p>
                    <a href="shop.php" class="btn">explore more</a>
                </div>
            </div>
            <div class="box">
                <div class="box-overlay"></div>
                <img src="image/type0.jpg" alt="">
                <div class="box-details fadeIn-bottom">
                    <h1>strawberry</h1>
                    <p>Find Your Taste of Desserts</p>
                    <a href="shop.php" class="btn">explore more</a>
                </div>
            </div>
            <div class="box">
                <div class="box-overlay"></div>
                <img src="image/type1.png" alt="">
                <div class="box-details fadeIn-bottom">
                    <h1>strawberry</h1>
                    <p>Find Your Taste of Desserts</p>
                    <a href="shop.php" class="btn">explore more</a>
                </div>
            </div>
            <div class="box">
                <div class="box-overlay"></div>
                <img src="image/type2.png" alt="">
                <div class="box-details fadeIn-bottom">
                    <h1>strawberry</h1>
                    <p>Find Your Taste of Desserts</p>
                    <a href="shop.php" class="btn">explore more</a>
                </div>
            </div>
            <div class="box">
                <div class="box-overlay"></div>
                <img src="image/type0.avif" alt="">
                <div class="box-details fadeIn-bottom">
                    <h1>strawberry</h1>
                    <p>Find Your Taste of Desserts</p>
                    <a href="shop.php" class="btn">explore more</a>
                </div>
            </div>
        </div>
    </div>
    <!-- flavour -->
    <div class="flavour">
        <div class="box-container">
          
            <div class="detail">
                <h1>Hot Deal ! Sale Up To <span>20% Off</span></h1>
                <p>Expired</p>
                <a href="" class="btn">shop now</a>
            </div>
        </div>
    </div>
    
    <!-- features -->
    <section class="usage" id="features">
        <div class="heading">

            <img src="image/separator.png" alt="">
        </div>
        
        <div class="row">
            <div class="box-container">
                <div class="box">
                    <img src="image/icon.avif" alt="">
                    <div class="detail">
                        <h3>ice-cream</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem dolor nihil dicta eveniet quam nam explicabo, natus labore quia cupiditate.</p>
                    </div>
                </div>
                <div class="box">
                    <img src="image/icon0.avif" alt="">
                    <div class="detail">
                        <h3> ice-cream</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem dolor nihil dicta eveniet quam nam explicabo, natus labore quia cupiditate.</p>
                    </div>
                </div>
                <div class="box">
                    <img src="image/icon1.avif" alt="">
                    <div class="detail">
                        <h3>ice-cream</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem dolor nihil dicta eveniet quam nam explicabo, natus labore quia cupiditate.</p>
                    </div>
                </div>
            </div>
        
            <div class="box-container">
                <div class="box">
                    <img src="image/icon2.avif" alt="">
                    <div class="detail">
                        <h3>ice-cream</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem dolor nihil dicta eveniet quam nam explicabo, natus labore quia cupiditate.</p>
                    </div>
                </div>
                <div class="box">
                    <img src="image/icon3.avif" alt="">
                    <div class="detail">
                        <h3>ice-cream</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem dolor nihil dicta eveniet quam nam explicabo, natus labore quia cupiditate.</p>
                    </div>
                </div>
                <div class="box">
                    <img src="image/icon4.avif" alt="">
                    <div class="detail">
                        <h3>ice-cream</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem dolor nihil dicta eveniet quam nam explicabo, natus labore quia cupiditate.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="content">
   
            <div class="box">
         
                <p>Si querés formar parte de nuestro equipo, por favor contactanos.</p>
                <a href="contact.php" class="btn">Contáctanos</a>
            </div>
            <div class="box">
                <h3>Mi cuenta</h3>
                <a href=""><i class='bx bx-chevron-right'></i>Mi usuario</a>
                <a href=""><i class='bx bx-chevron-right'></i>Ordenes</a>
                <a href=""><i class='bx bx-chevron-right'></i>Wish-List</a>
                <a href=""><i class='bx bx-chevron-right'></i>Newsletter</a>
            </div>
            <div class="box">
                <h3>Información</h3>
                <a href="contact.php"><i class='bx bx-chevron-right'></i>Sobre nosotros</a>
                <a href=""><i class='bx bx-chevron-right'></i>Delivery</a>
                <a href=""><i class='bx bx-chevron-right'></i>Politica de privacida</a>
                <a href=""><i class='bx bx-chevron-right'></i>Terminos y condiciones</a>
            </div>
            <div class="box">
                <h3>Extras</h3>
                <a href="contact.php"><i class='bx bx-chevron-right'></i>Marcas</a>
                <a href=""><i class='bx bx-chevron-right'></i>Certificaciones</a>
                <a href=""><i class='bx bx-chevron-right'></i>Contactanos</a>
                <a href=""><i class='bx bx-chevron-right'></i>Especiales</a>
            </div>
            <div class="box">
                <h3>Contactanos</h3>
                <p><i class='bx bxs-phone'></i> 112356789</p>
                <p><i class='bx bxs-envelope' ></i>artin@gmail.com</p>
                <p><i class='bx bxs-location-plus' ></i>Calle Falsa 123, Argentina</p>
                <div class="icons">
                    <i class='bx bxl-facebook'></i>
                    <i class='bx bxl-twitter'></i>
                    <i class='bx bxl-instagram' ></i>
                    <i class='bx bxl-linkedin'></i>
                </div>
            </div>
            
        </div>
      
            <a href="admin pannel/login.php">A</a>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>