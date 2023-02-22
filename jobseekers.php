<?php
$insert = false;
if(isset($_POST['name'])){
  
   
    $server ="localhost:4433";
    $username ="root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
      die ("connection to this database failed due to" . mysqli_connect_error());
    }
   // echo "success connecting to the database";

   $name = $_POST['name'];
   $phone = $_POST['phone']; 
   $gender = $_POST['gender'];
   $email = $_POST['email'];
   $adress = $_POST['adress'];
   $qualification = $_POST['qualification'];
   $experience = $_POST['experience'];
   $about = $_POST["about"];

   $sql = " INSERT INTO `profile`.`jobseekers` ( `name`, `phone`, `gender`, `email`, `adress`, `qualification`, `experience`, `about`, `dt`) VALUES ( '$name', '$phone', '$gender', '$email', '$adress', '$qualification', '$experience', '$about', current_timestamp()); ";

   //echo $sql;

   if($con->query($sql) == true){
   // echo "successfully inserted";
   $insert = true;
   }
   else{
    echo "ERROR: $sql <br> $con->error";
   }

   $con->close();
  }

   
  
  



?>

















<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="stylle.css">

    <title>jobseekers</title>
  </head>
  <body>
    <div class="job">
        <strong><h1>Job Application Form for Jobseekers</h1></strong>
        <p>(Please Fill below Information and Submit the form)</p>
         <?php
         if($insert == true){
          echo "<p class='submitMsg'> Thank for submitting </p>";
         }
         ?>
      <form action="jobseekers.php" method="post">
      <strong> NAME:</strong> <input type="text" name="name" id="name" placeholder="Enter Your Name">
       <strong>PHONE:</strong> <input type="text" name="phone" id="phone" placeholder="Enter Your Phone"> <br>
       <strong>GENDER:</strong> <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
       <strong>E-MAIL:</strong> <input type="text" name="email" id="email" placeholder="Enter Your Mail ID"> <br>
       <strong>ADRESS:</strong> <input type="text" name="adress" id="adress" placeholder="Enter Your Adress"> <br>
       <strong>HIGHEST QUALIFICATION:</strong> <input type="text" name="qualification" id="qualification" placeholder="Enter Your Highest Qualification"> <br>
       <strong>RELEVANT WORKING EXPERIENCE:</strong> <input type="text" name="experience" id="experience" placeholder="Enter Your Working Experience in Years"> <br>
       <strong>TELL US SOMETHING ABOUT YOURSELF:</strong><br><textarea name="about" id="about" cols="30" rows="10" placeholder="Enter About Yourself"></textarea> <br>
       <button class="btn" id="gg">SUBMIT</button>
      </form>
    </div>
      <div class="bottom">
      
    </div>
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>