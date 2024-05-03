<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">
   <div class="header-1" >
       
    

       <div class="flex"><!--<img src="images/icon.gif" alt="nnnn"> -->
         <div class="share">
            <a href="www.facebook.com" class="fab fa-facebook-f"
            onMouseOver="this.style.padding='1em'"
         onMouseOut="this.style.padding=' 0em'"></a>
            <a href="www.twitter.com" class="fab fa-twitter"onMouseOver="this.style.padding='1em'"
         onMouseOut="this.style.padding=' 0em'"></a>
            <a href="www.instagram.com" class="fab fa-instagram"onMouseOver="this.style.padding='1em'"
         onMouseOut="this.style.padding=' 0em'"></a>
            <a href="www.linkedin.com" class="fab fa-linkedin"onMouseOver="this.style.padding='1em'"
         onMouseOut="this.style.padding=' 0em'"></a>
         </div>
         <p>  <a href="login.php"onMouseOver="this.style.padding='1em'"
         onMouseOut="this.style.padding=' 0em'">login</a> | <a href="register.php"onMouseOver="this.style.padding='1em'"
         onMouseOut="this.style.padding=' 0em'">Register</a> </p> <div class="loader-container" >
            </div>
         </div>
      </div>
      
      <div class="header-2">
         
         <div class="flex">
            <img src="images/loader.gif" alt="nnnn" style="width: 150px; height: 75px;">
            <a href="home.php" class="logo">FOODY</a>
            
            <nav class="navbar">
               <a href="home.php"onMouseOver="this.style.padding='1em'"
               onMouseOut="this.style.padding=' 0em'">Home</a>
               <a href="about.php"onMouseOver="this.style.padding='1em'"
               onMouseOut="this.style.padding=' 0em'">About</a>
               <a href="shop.php"onMouseOver="this.style.padding='1em'"
               onMouseOut="this.style.padding=' 0em'">FOOD</a>
               <a href="contact.php"onMouseOver="this.style.padding='1em'"
               onMouseOut="this.style.padding=' 0em'">Contact</a>
               <a href="orders.php"onMouseOver="this.style.padding='1em'"
               onMouseOut="this.style.padding=' 0em'">Orders</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"onMouseOver="this.style.padding='0.5em'"
         onMouseOut="this.style.padding=' 0em'"></a>
            <div id="user-btn" class="fas fa-user"onMouseOver="this.style.padding='0.5em'"
         onMouseOut="this.style.padding=' 0em'"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"onMouseOver="this.style.padding='0.5em'"
         onMouseOut="this.style.padding=' 0em'"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
         </div>
      </div>
   </div>

</header>