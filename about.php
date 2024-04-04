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
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>

<body>


   <?php include 'components/user_header.php'; ?>
   <section class="about">

      <div class="row">

         <div class="image">
            <img src="images/about-img.svg" alt="">
         </div>

         <div class="content">
            <h3>About Us</h3>
            <p>Welcome to Edusphere! Whether you're a student seeking knowledge or a tutor looking to share your expertise, our website offers a seamless learning experience. As a student, you can access a educational videos. Teachers have the privilege to create and manage playlists, add videos with descriptions and thumbnails. Our website also features a dark mode and is fully responsive for optimal viewing experience. <br> Join us today to embark on your educational journey!"</p>
            <a href="courses.html" class="inline-btn">Our Courses</a>
         </div>

      </div>

      <!-- <div class="box-container">

         <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <div>
               <h3>+1k</h3>
               <span>Online courses</span>
            </div>
         </div>

         <div class="box">
            <i class="fas fa-user-graduate"></i>
            <div>
               <h3>+25k</h3>
               <span>Brilliants students</span>
            </div>
         </div>

         <div class="box">
            <i class="fas fa-chalkboard-user"></i>
            <div>
               <h3>+5k</h3>
               <span>Expert teachers</span>
            </div>
         </div>

         <div class="box">
            <i class="fas fa-briefcase"></i>
            <div>
               <h3>100%</h3>
               <span>Job Placement</span>
            </div>
         </div>

      </div> -->

   </section>

   <section class="reviews">

      <h1 class="heading">Student's Reviews</h1>
      <div class="box-container">
         <div class="swiper mySwiper">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="box">
                     <p>"As a teacher, Edusphere's platform streamlined content sharing and engagement. It's been a pleasure being part of this educational journey!"</p>
                     <div class="user">
                        <img src="images/pic-2.jpg" alt="">
                        <div>
                           <h3>Maya Rodriguez</h3>
                           <div class="stars">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="box">
                     <p>"Edusphere's user-friendly interface and personalized features make learning enjoyable. The dark mode option is a lifesaver!"</p>
                     <div class="user">
                        <img src="images/pic-3.jpg" alt="">
                        <div>
                           <h3>Ethan Wilson</h3>
                           <div class="stars">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="box">
                     <p>"Edusphere made learning accessible anytime, anywhere. The ability to save videos for later viewing kept me organized and on track."</p>
                     <div class="user">
                        <img src="images/pic-4.jpg" alt="">
                        <div>
                           <h3>Connor Thompson</h3>
                           <div class="stars">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="box">
                     <p>Edusphere's intuitive platform helped me stay motivated and engaged in my studies. The progress tracking feature kept me accountable and focused."</p>
                     <div class="user">
                        <img src="images/pic-5.jpg" alt="">
                        <div>
                           <h3>Emily Johnson</h3>
                           <div class="stars">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="box">
                     <p>"Edusphere's commitment to education is unmatched. It's more than just a website; it's a catalyst for growth and development."</p>
                     <div class="user">
                        <img src="images/pic-6.jpg" alt="">
                        <div>
                           <h3>Marcus Wong</h3>
                           <div class="stars">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="box">
                     <p>"Thanks to Edusphere, I discovered new passions and interests through its diverse course offerings. It's a gateway to endless learning opportunities."</p>
                     <div class="user">
                        <img src="images/pic-7.jpg" alt="">
                        <div>
                           <h3>Natalie Carter</h3>
                           <div class="stars">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <br><br><br>
            <div class="swiper-pagination"></div>
         </div>
      </div>

   </section>

   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   <script src="js/swiper.js"></script>
   <script src="js/script.js"></script>

</body>

</html>