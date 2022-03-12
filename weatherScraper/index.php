<?php

  if($_GET['city']){


    $city = $_GET['city'];

    $forecast =  file_get_contents('https://api.openweathermap.org/data/2.5/weather?q='.urlencode($city).'&appid=defc80530b996b05d2b9413f7d5d8d8f');

    $forecastArray = json_decode($forecast, true);

    if($forecastArray['cod']==200){

        $temp = intval($forecastArray['main']['temp']-273);

        $forecastMessage = "The weather in ".$city." is ".$forecastArray['weather'][0]['description']." and the temperature is ".$temp."&deg;C. The wind speed is ".$forecastArray['wind']['speed']."m/s.";
    } else {
        $errorMessage = "Could not find city. Please try again!";
    }
  }


?>


<!DOCTYPE html>
<html>

    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="../c4/jquery-ui-1.13.1/jquery-ui-1.13.1/jquery-ui.js"></script>

    <link href="../c4/jquery-ui-1.13.1/jquery-ui-1.13.1/jquery-ui.css" rel="stylesheet">
       
    <title>How's the weather?</title>

    <style type="text/css">

      body { 
        background: url(weather2.jpg) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
      #error{
        border-radius: 10px;
        display: none;
        position: relative;
        top: 15px;
      }
      #forecast{
        display: none;
        position: relative;
        top: 15px;
      }
      #bar{
          margin-bottom: 15px;
      }
      #search{
          margin-bottom: 15px;
      }
      

    </style>

    </head>

    <body>

      

        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
              <a href="#" class="d-flex align-items-center text-dark text-decoration-none">
                <span class="fs-4">SSC Weather Scraper</span>
              </a>
            </header>
        
            <div class="p-5 mb-4 rounded-3">
              <div class="container-fluid py-5 text-center">
                <h1 class="display-5 fw-bold">What's the weather?</h1>
                <p class="col-md-12 fs-4 text-center"><strong>Enter the name of a city.</strong></p>
                <fieldset class="form-group">
                <form class="d-flex">
                  <input name="city" id="bar" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </fieldset>
                  <button id="search" class="btn btn-primary btn-lg" type="submit">Search</button>
                </form>
                <div id="weather"><?php 
              
                 if ($forecastMessage) {
                  
                        echo '<div class="alert alert-success" role="alert">
                        '.$forecastMessage.'
                        </div>';
                                
                } else if ($errorMessage) {
                  
                  echo '<div class="alert alert-danger" role="alert">
                '.$errorMessage.'
                </div>';  
                }
              ?></div>
      </div>
                
              </div>
            </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
        

      <script type="text/javascript">
       
    
        </script> 
      

    </body>



</html>

