<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Individuell val</title>
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
    <script src="jquery-3.6.0.min.js"></script>

    <style>
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
            background: linear-gradient(13deg, #f9d4ff 14%, #c7ceff 64%);
            border-radius: 10px;
        }
        
         ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(13deg, #c7ceff 14%, #f9d4ff 64%);
        }
        
         ::-webkit-scrollbar-track {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: inset 7px 10px 12px #f0f0f0;
        }
        /* h1 style (design) */
        
        h1 {
            font-size: 36px;
            background: -webkit-linear-gradient(13deg, #c7ceff 14%, #78f5ea 62%);
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
        
        input[type="radio"],
        input[type="checkbox"] {
            margin: 0 4px 8px 0;
        }
        /* This code changes the appearance of the select command */
        
        select {
            padding: 6px;
            height: 32px;
            border-radius: 2px;
        }
        /* This code changes the appearance of the button command */
        
        button {
            padding: 19px 39px 18px 39px;
            color: #FFF;
            background-color: #78f5ea;
            font-size: 18px;
            text-align: center;
            font-style: normal;
            border-radius: 5px;
            width: 100%;
            border: 1px solid #78f5ea;
            border-width: 1px 1px 3px;
            box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.1) inset;
            margin-bottom: 10px;
        }
        /* This code changes the appearance of the fieldset command */
        
        fieldset {
            margin-bottom: 30px;
            border: none;
        }
        /* This code changes the appearance of the legend command */
        
        legend {
            font-size: 1.4em;
            margin-bottom: 10px;
        }
        /* This code changes the appearance of the label command */
        
        label {
            display: block;
            margin-bottom: 8px;
        }
        /* his code changes the appearance of the label choice command */
        
        label.CHOICE2 {
            font-weight: 300;
            display: inline;
        }
        /* This code changes the appearance of the numbers that are displayed in legends / span */
        
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
    <div class="row">
        <div class="col-md-12">
            <form action="index.html" method="post">
                <!--This code displays the words "Student cource choice on top of the application-->
                <h1> Login </h1>

                <fieldset>
                    <!--This is a code displaying the name of the 1st section of the application-->
                    <legend><span class="number">1</span> Information</legend>

                    <!--This is a code that asks you for your first name-->
                    <label for="name">First Name:</label>
                    <input type="text" id="name" name="user_name">

                    <!--This is a code that asks you for your surname-->
                    <label for="name">Last Name:</label>
                    <input type="text" id="name2" name="user_name">

                    <!--This is a code that asks you for your email-->
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="user_email">

                    <label for="birthday">Birthday:</label>
                    <input type="date" id="birthday" name="birthday"><br>


                </fieldset>

                <!--Just a submit button-->
                <button type="Login">Send</button>


            </form>
        </div>
    </div>

    <!--The functions below displays a block (section of the text that has the id div1 / div2) when the given section id is triggered from the radio choices above-->
    <script src="Indiv.js"></script>

    <php>
        
    </php>



</body>

</html>