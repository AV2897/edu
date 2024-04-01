<?php

include '../components/connect.php';
if (isset($_COOKIE['tutor_id'])) {
   $tutor_id = $_COOKIE['tutor_id'];
} else {
   $tutor_id = '';
}

if (isset($_POST['submit'])) {
   $id = unique_id();
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $profession = $_POST['profession'];
   $profession = filter_var($profession, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cpass = sha1($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

   $image = $_FILES['image']['name'];
   $image = filter_var($image, FILTER_SANITIZE_STRING);
   $ext = pathinfo($image, PATHINFO_EXTENSION);
   $rename = unique_id() . '.' . $ext;
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = '../uploaded_files/' . $rename;

   $select_tutor = $conn->prepare("SELECT * FROM `tutors` WHERE email = ?");
   $select_tutor->execute([$email]);


   if ($select_tutor->rowCount() > 0) {
      $message[] = 'Email already taken!';
   } else {
      if ($pass != $cpass) {
         $message[] = 'Confirm passowrd not matched!';
      } else {
         $insert_tutor = $conn->prepare("INSERT INTO `tutors`(id, name, profession, email, password, image) VALUES(?,?,?,?,?,?)");
         $insert_tutor->execute([$id, $name, $profession, $email, $cpass, $rename]);

         $verify_tutor = $conn-> prepare("SELECT * FROM `tutors` WHERE email = ? AND PASSWORD =? LIMIT 1");
         $verify_tutor-> execute([$email, $cpass]);

         $row = $verify_tutor-> fetch(PDO::FETCH_ASSOC);
         if($insert_tutor){
            if($verify_tutor->rowCount() > 0){
               setcookie('tutor_id', $row['id'], time()+60*60*24*30, '/');
               header('location: dashboard.php');
            }else{
               $message[] = 'Something Went Wrong';
            }
         }

         move_uploaded_file($image_tmp_name, $image_folder);
         $message[] = 'New Tutor Registered! Kindly Login Now';
      }
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   <link rel="stylesheet" href="../css/admin_style.css">
</head>

<body style="padding-left:0;">

   <?php
   if (isset($message)) {
      foreach ($message as $message) {
         echo '
      <div class="message form">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
      }
   }
   ?>
   <div class="form-container">
      <form action="" method="post" enctype="multipart/form-data">
         <h3>Register</h3>
         <div class="flex">
            <div class="col">
               <p>Name <span>*</span></p>
               <input type="text" name="name" maxlength="50" required placeholder="Enter Your Name" class="box">
               <p>Profession <span>*</span></p>
               <select name="profession" class="box">
                  <option value="" disabled selected>Select Your Profession</option>
                  <option value="Developer">Developer</option>
                  <option value="Developer">Teacher</option>
                  <option value="Developer">Engineer</option>
                  <option value="Developer">Designer</option>
                  <option value="Developer">Photographer</option>
                  <option value="Developer">Creator</option>
               </select>
               <p>Email <span>*</span></p>
               <input type="text" name="email" maxlength="50" required placeholder="Enter Your Email" class="box">
            </div>
            <div class="col">
               <p>Password<span>*</span></p>
               <input type="password" name="pass" maxlength="20" required placeholder="Enter Your Password" class="box">
               <p>Confirm Password<span>*</span></p>
               <input type="password" name="cpass" maxlength="20" required placeholder="Confirm Your Password" class="box">
               <p>Add Profile <span>*</span></p>
               <input type="file" name="image" required accept="image/*" class="box">
            </div>
         </div>
         <input type="submit" value="Register Now" name="submit" class="btn">
         <p class="link">alread have an account? <a href="login.php">Login now</a></p>
      </form>
   </div>

   <script src="../js/admin_script.js"></script>
</body>

</html>