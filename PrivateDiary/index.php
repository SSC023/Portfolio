<?php

session_start();

$link = mysqli_connect("sdb-q.hosting.stackcp.net", "users_db-32303562c6", "Choper018", "users_db-32303562c6");

$query = "SELECT * FROM diary";

$result = mysqli_query($link, $query);

$emailError = false;
$passwordError = false;

if($_POST['email']){

    while($row = mysqli_fetch_array($result)){
        if($_POST['email']==$row[1] && $_POST['password']==$row[2]){
            $_SESSION['email'] = $_POST['email'];
            header("Location: open.php");
        } else if($_POST['email']!=$row[1]){
            $emailError = true;
        } else {
            $passwordError = true;
        }
    }

} 


?>

<html>

    <head>
        <title>Secret Diary</title>

        <meta charset="utf-8">
      
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
        
        <style type="text/css">
            html { 
                background: url('diary.jpg') no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            body{
                background: none;
            }
            #header{
                text-align: center;
                position: relative;
                top: 100px;
            }
            #error{
                display: none;
                position: relative;
                top: 100px;
            }
            a{
                text-decoration: none;
            }
            a:hover{
                color: #0275d8;
            }

        </style>

    </head>

    <body>

        <div id = "header" class = "container">
            <h1>Secret Diary</h1>
            <h3>Store your thoughts permanently and securely.</h3>
            <h3>Log in!</h3>
            <form method="post">
                <div class="col-md-4 col-md-offset-4">
                    <br></br>
                    <input id="email" name="email" class="form-control" type="email" placeholder="Your e-mail">
                    <p></p>
                    <input id="password" type ="password" name="password" class="form-control">
                    <br></br>
                    <button id="signin" class="btn btn-primary">Sign in</button>
                    <p></p>
                    <p id="registration">Not registered? <a href="https://stephansaguiertest-com.stackstaging.com/MyCode/sql/secretDiary/registration.php">Registration</a></p>
                </div>
            </form>
          </div>

        <div id="error" class="alert alert-danger col-md-4 col-md-offset-4" align="center">

            <p><strong>The following errors have been detected:</strong></p>
            <p id = "list"></p>


        </div>

        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
        
        <script type="text/javascript">
        
            $("#signin").click(function(){
                var email = $("#email").val();
                var password = $("#password").val();
                if(email == ""){
                    $("#error").show();
                    $("#list").html("Invalid e-mail!");
                }
                if(password == ""){
                    $("#error").show();
                    document.getElementById("list").innerHTML += "<p>Invalid password!</p>";
                }
            });


        </script>

    </body>
</html>
