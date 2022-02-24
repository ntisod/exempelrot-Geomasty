<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
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
              width: 200px;
              display: block;
              border: 1px;
              padding: 6px;
              background-color: #e8eeef;
       }

       /* This code changes the position of the the follow three types of codes */
        input[type="radio"],
        input[type="text"],
        input[type="checkbox"] {
            margin: 0 4px 8px 0;
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
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) { $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }    
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>PHP Form Validation Form</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <br>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <button type="submit" name="submit" value="Submit">  
    <br>
</form>

<?php
echo "Press here to view your Inputs:";
echo "<br>";
echo "<br>";
echo "Name: ", $name;
echo "<br>";
echo "Email: ", $email;
echo "<br>";
echo "Website Url: ", $website;
echo "<br>";
echo "Your Comment: ", $comment;
echo "<br>";
echo "Gender: ", $gender;
?>

</body>
</html>