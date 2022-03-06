<?php

    session_start();

    if($_SESSION['email']){
        
        //setcookie should be set to let the user be logged even after closing the browser
        
    }



?>

<html>
    <head>
        <title>Your Diary</title>

        
        <meta charset="utf-8">
      
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    
        <style type="text/css">

            html { 
                background: url('open.jpg') no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            body{
                background: none;
            }

            #quit{
                position: relative;
                float: right;
                margin: 10px;
            }
            #floatingTextarea{
                width: 60%;
            }
            a{
                color: black;
            }
            a:hover{
                text-decoration: none;
            }
            #safe{
                margin: 5px;
            }

        </style>
    
    </head>

    <body>
        <button id="quit" type="submit" class="btn btn-danger" ><a href="https://stephansaguiertest-com.stackstaging.com/MyCode/sql/secretDiary/">Quit</a></button>
        
        <form method="post">
            <div class="form-floating">
                <textarea name="" class="form-control col-md-9 col-md-offset-2" placeholder="Leave your thoughts here..." id="floatingTextarea"></textarea>
            </div>
            <button id="safe" type="submit" class="btn btn-primary">Safe</button>
        </form>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
        
    </body>

</html>
