<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="../c4/jquery-ui-1.13.1/jquery-ui-1.13.1/jquery-ui.js"></script>

    <link href="../c4/jquery-ui-1.13.1/jquery-ui-1.13.1/jquery-ui.css" rel="stylesheet">

    <title>Get in touch!</title>

    <style type="text/css">
        
        body{
            
            font: "Helvetica";
        }
        #success{
            display: none;
            border-radius: 10px;
        }
        #errorMessage{
            border-radius: 10px;
            display: none;
        }

    </style>

    </head>
    <body>

    <h1 class="container-fluid">Get in touch!</h1>
        
        <div id = "success" class="container-fluid alert alert-success" role="alert">
            <p>Your message was sent, we'll get back to you ASAP!</p>

        </div>

        <div id = "errorMessage" class="container-fluid alert alert-danger" role="alert">


        </div>

        <form method="post">
            <div class="mb-3 container-fluid">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input name="email" id="email" type="email" class="form-control" placeholder="name@example.com">
            </div>
            <div class="mb-3 container-fluid">
                <label for="subject" class="form-label">Subject</label>
                <textarea name="subject" class="form-control" id="subject" rows="2"></textarea>
            </div>
            <div class="mb-3 container-fluid">
                <label for="exampleFormControlTextarea1" class="form-label">What would you like to ask us?</label>
                <textarea name="text" class="form-control" id="text" rows="3"></textarea>
            </div>
            <div class="col-auto container-fluid">
            <button type="submit" id="submit" class="btn btn-primary mb-3">Submit</button>
            </div>
         </form>



  <script type="text/javascript">
    
                function isEmail(email) {
                    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    return regex.test(email);
                }

            $("#submit").click(function(){

                var errorMessage = "";
                var fieldsMissing = "";

                if($("#email").val() == ""){
                    fieldsMissing += "<br>Email";
                }
                if($("#text").val() == ""){
                    fieldsMissing += "<br>Your inquiry";
                }
                if($("#subject").val() == ""){
                    fieldsMissing += "<br>Subject";
                }

                if(fieldsMissing != ""){
                    errorMessage += "The following fields are missing " + fieldMissing;
                }

                if(isEmail($("#email").val()) == false){
                    
                    errorMessage +="Your e-mail adress is not valid!";

                };

                if(errorMessage!=""){
                    $("#errorMessage").html(errorMessage);
                    $("#errorMessage").show();
                } else{

                    $("#success").show();
                    $("#errorMessage").hide();

                }

            });
            




    </script>



    </body>





</html>
<?php

    $emailTo = "stephansaguier2000@gmail.com";

    $subject = $_POST['subject'];
    
    $body = $_POST['text'];

    $headers = "from: ".$_POST['email'];

    if(mail($emailTo, $subject, $body, $headers)){
        echo "Message sent";
    } else {
        echo "not sent";
    }


?>
