<html>
    <head> 
        <title>PostCode Finder SSC </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style type="text/css">

            #postcode{
                margin-top: 5px;
            }



        </style>
    </head>
    <body>

        <div class="container" align="center">
            <h1>Find your postal code!</h1>
            <p>Type in your address!</p>
        </div>
        <div class="container text-center col-md-4 col-md-offset-8">
            <fieldset class="form-group text-center ">
                <form class="d-flex">
                    <div class="container text-center">
                        
                        <label for="addredss" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="Your address...">
                    </div>
                </fieldset>
                <button class="btn btn-primary btn-lg" id="find">Find PostCode</button>
            </form>
        </div>
        <div id="postcode">

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script type="text/javascript">

            $("#find").click(function(e) {

                e.preventDefault();
            
                var address = encodeURIComponent($("#address").val());
                $.ajax({
                    url: 'https://maps.googleapis.com/maps/api/geocode/json?address='+address+'&key=AIzaSyCugb3xvnacclpQuexrpK1m237yfILo5vA',
                    type: 'GET',
                    success: function(data){

                        $.each(data['results'][0]['address_components'], function(key, value){
                            if(value['types'][0]=="postal_code"){

                                $("#postcode").html('<div class="container col-md-6 alert alert-success" role="alert"><strong>Your post code has been found!</strong> <p>The post code is: ' + value['long_name'] +'.</div>')
                            }
                        })

                    }

                })
            })



        </script>
    </body>


</html>
