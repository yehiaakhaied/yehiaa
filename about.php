<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="shortcut icon" type="image" href="https://github.githubassets.com/pinned-octocat.svg" >
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/dish-6.png" alt="">
      </div>

      <div class="content">
         <h3>Why choose us!!??</h3>
         <p>
         Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod reprehenderit corrupti velit vero ipsam quidem minus rem consequatur voluptatum ut natus officia dolores deleniti debitis perspiciatis omnis pariatur, provident hic laboriosam ex, quo facere esse obcaecati. Saepe ducimus alias nostrum omnis laboriosam possimus magnam doloremque, adipisci incidunt minima tempora error?</p>
         <a href="contact.php" class="btn"style="background-color:  #00a8e2;">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/alexander.jfif" alt="">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur sed odit ex iste molestiae, animi iure a possimus cumque perferendis nobis qui at ut? Autem.</p>

         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alexander Felming</h3>
      </div>

      <div class="box">
         <img src="images/ahmed.jfif" alt="">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur sed odit ex iste molestiae, animi iure a possimus cumque perferendis nobis qui at ut? Autem.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ahmed khaled tawfik</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur sed odit ex iste molestiae, animi iure a possimus cumque perferendis nobis qui at ut? Autem.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>El Da7i7</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur sed odit ex iste molestiae, animi iure a possimus cumque perferendis nobis qui at ut? Autem.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alexis</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur sed odit ex iste molestiae, animi iure a possimus cumque perferendis nobis qui at ut? Autem.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John dark</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>In recent days, however, the author behind bestsellers such as Misery, Carrie and The Stand heard a story he found truly shocking. Maine’s largest newspaper, the Portland Press Herald, would no longer be running reviews of works by local authors.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title"> Cheifs</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Peter parker</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Tomas shelpy</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Thor</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Black panther</h3>
      </div>

      <div class="box">
         <img src="images/alexander.jfif" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Alexander felming 1928</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Null</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>