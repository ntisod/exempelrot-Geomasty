<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
body {background-color: #484848;}
*,
        *:before,
        *:after {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        /* This is a scrollbar design */
         ::-webkit-scrollbar {
            width: 13px;
            height: 13px;
        }
        
         ::-webkit-scrollbar-thumb {
            background: linear-gradient(13deg, #a9a9a9 14%, #808080 64%);
            border-radius: 10px;
        }
        
         ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(13deg, #808080 14%, #a9a9a9 64%);
        }
        
         ::-webkit-scrollbar-track {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: inset 7px 10px 12px #f0f0f0;
        }

        /* p1 style (design) */
        p1 {
            font-size: 14px;
            background: -webkit-linear-gradient(13deg, #a9a9a9 14%, #808080 62%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        /* h1 style (design) */
        h1 {
            font-size: 36px;
            background: -webkit-linear-gradient(13deg, #a9a9a9 14%, #808080 62%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* This code changes the appearance of the body (the page itself) */
        body {
            font-family: 'Nunito', sans-serif;
            color: #384047;
        }

        /* This code changes the appearance of the form */
        form {
            max-width: 300px;
            margin: 10px auto;
            padding: 10px 20px;
            background: #f4f7f8;
            border-radius: 8px;
        }

        /* This code changes the appearance of h1 */
        h1 {
            margin: 0 0 30px 0;
            text-align: center;
        }

        p3 {
          color: darkslategrey;
        }

        /* This code changes the appearance / placment of the area where everything is displayed */
        textarea,
        select {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            font-size: 16px;
            height: auto;
            margin: 0;
            outline: 0;
            padding: 15px;
            width: 100%;
            background-color: #e8eeef;
            color: #8a97a0;
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
            margin-bottom: 30px;
        }
        
        /* This code changes the appearance of the input command */
        input[type="text"] {
              width: 440px;
              display: block;
              border: 1px;
              padding: 6px;
              background-color: #e8eeef;
       }

               /* This code changes the appearance of the input command */
               input[type="password"] {
              width: 440px;
              display: block;
              border: 1px;
              padding: 6px;
              background-color: #e8eeef;
       }

               /* This code changes the appearance of the input command */
               input[type="email"] {
              width: 440px;
              display: block;
              border: 1px;
              padding: 6px;
              background-color: #e8eeef;
       }

       /* This code changes the position of the the follow three types of codes */
        input[type="radio"],
        input[type="checkbox"] {
            margin: 0 4px 8px 0;
          
        }

        img {
        margin: 100px right;
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;

        }

        /* This code changes the appearance of the button command */
        button {
            padding: 19px 39px 18px 39px;
            color: #FFF;
            background-color: #a9a9a9;
            font-size: 18px;
            text-align: center;
            font-style: normal;
            border-radius: 5px;
            width: 100%;
            border: none;
            border-width: 1px 1px 3px;
            box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.1) inset;
            margin-bottom: 10px;
        }

        /* This code changes the appearance of the numbers that are displayed*/        
        .number {
            background-color: #78f5ea;
            color: #fff;
            height: 30px;
            width: 30px;
            display: inline-block;
            font-size: 0.8em;
            margin-right: 4px;
            line-height: 30px;
            text-align: center;
            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
            border-radius: 100%;
        }

        input[type='checkbox'] {
         width:15px;
         height:15px;
         border:10px solid darkgray;
         border-radius:50%;
         outline:10px black;
        }

        input[type='checkbox']:hover {
          box-shadow:0 0 5px 0px #e8eeef inset;
        }

        input[type='checkbox']:before {
          content:'';
          display:block;
          width:100%;
          height:100%;
          margin:auto;    
          border-radius:50%;    
          background: #dcdcdc 15px;
        }

        input[type='checkbox']:checked:before {
          background:grey;
        }

        /* This code changes the placment of the application on screen */
        @media screen and (min-width: 480px) {
            form {
                max-width: 480px;
            }
            
        }
</style>
</head>
<body>  

<?php
define('BASEPATH', true);
require 'db.php'; 

 if(isset($_POST['submit'])){  
        try {
            $dsn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
         $user = $_POST['username'];
         $email = $_POST['email'];
         $pass = $_POST['password'];
         
         //encrypt password
         $pass = password_hash($pass, PASSWORD_BCRYPT, array("cost" => 12));
          
         //Check if username exists
         $sql = "SELECT COUNT(username) AS num FROM admin WHERE username =      :username";
         $stmt = $pdo->prepare($sql);

         $stmt->bindValue(':username', $user);
         $stmt->execute();
         $row = $stmt->fetch(PDO::FETCH_ASSOC);

         if($row['num'] > 0){
             echo '<script>alert("Username already exists")</script>';
        }
        
       else{

    $stmt = $dsn->prepare("INSERT INTO admin (username, email, password) 
    VALUES (:username,:email, :password)");
    $stmt->bindParam(':username', $user);    
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $pass);
    
    

   if($stmt->execute()){
    echo '<script>alert("New account created.")</script>';
    //redirect to another page
    echo '<script>window.location.replace("index.php")</script>';
     
   }else{
       echo '<script>alert("An error occurred")</script>';
   }
}
}catch(PDOException $e){
    $error = "Error: " . $e->getMessage();
    echo '<script type="text/javascript">alert("'.$error.'");</script>';
}
     }    
?>

<form action="register.php" method="post">
<div class="img-box">
<img src="https://register.pravasikerala.org/public/images/avatar5.png" alt="Avatar" style="width:200px">
</div>
<br>
  <input type="text" required="required" name="username" placeholder="Username">
  <br>
  <input required="required" type="email" name="email" placeholder="Email">
  <br>
  <input type="checkbox" onclick="myFunction()"><p1>Show password</p1>
  <input required="required" type="password" name="password" placeholder="Password" id="Pw">   
  <br> <br>               
  <button name="submit" type="submit">Register</button>
  </form>
  
  <script>
function myFunction() {
  var x = document.getElementById("Pw");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
  </html>