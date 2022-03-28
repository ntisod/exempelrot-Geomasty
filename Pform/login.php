<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
body {background-color: #006610;}
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
            background-color: #006610;
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

        input[type='radio'] {
         width:15px;
         height:15px;
         border:10px solid darkgray;
         border-radius:50%;
         outline:10px black;
        }

        input[type='radio']:hover {
          box-shadow:0 0 5px 0px #e8eeef inset;
        }

        input[type='radio']:before {
          content:'';
          display:block;
          width:100%;
          height:100%;
          margin:auto;    
          border-radius:50%;    
          background: #dcdcdc 15px;
        }

        input[type='radio']:checked:before {
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
define('BASEPATH', true); //access connection script if you omit this line file will be blank
require 'db.php'; //require connection script

if(isset($_POST['submit'])){  
        // try {
            $dsn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //ensure fields are not empty
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;
    
    //Retrieve the user account information for the given username.
    $sql = "SELECT id, username, password FROM admin WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    
    //Bind value.
    $stmt->bindValue(':username', $username);
    
    //Execute.
    $stmt->execute();
    
    //Fetches information.
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //If $row is false statement.
    if($user === false){
       echo '<script>alert("invalid username or password")</script>';
    } else{
         
        //Compare and decrypt passwords.
        $validPassword = password_verify($passwordAttempt, $user['password']);
        
        //If validPassword is true.
        if($validPassword){
            
            //Re-directs user.
             
            $_SESSION['admin'] = $username;
           echo '<script>window.location.replace("http://localhost:8080/phpmyadmin/index.php?route=/sql&server=1&db=vsp1ex&table=admin&pos=0");</script>';
            exit;
            
        } else{
            //If password false, then print this message..
            echo '<script>alert("invalid username or password")</script>';
        }
    }
    }
?>

<form action="login.php" method="post">
<div class="img-box">
<img src="https://icones.pro/wp-content/uploads/2021/02/icone-utilisateur-vert.png" alt="Avatar" style="width:200px">
</div>
<form action="login.php" method="post">                          
 <input type="text" name="username" placeholder="Username">
 <br>
 <input type="password" name="password" placeholder="Password">   
 <br><br> 
 <button name="submit" type="submit">sign in</button>
 </form>
 </html>