<!DOCTYPE html>
<html>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">

    <!-- Jquery CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Script Bootstrap CSS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <script src="js/script.js"></script>


    <!-- Style CSS -->
    <link rel="stylesheet" href="css/stylebis.css">

    
    <title>Formulaire de contact - Trustiful</title>
  </head>
    
    
    <body>
        <nav class="navbar navbar-expand-lg navbar-light">
       		<div class="container">
            	<div class="navbar-header mx-auto">
                	<a href="./"><img src="images/logo.png"></a>
            	</div>
        	</div>
    	</nav>
            
        <div class="card bg-light mx-auto">
        	<div class="heading">
                <h2 class="card-title mt-3 text-center">Formulaire de contact</h2>
            </div>
            <div class="card-body mx-auto" style="max-width: 700px !important;">
               <div class="col-lg-10 col-lg-offset-1">
                    <form class="container-form mx-auto" id="contact-form" method="post" action="" role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstname">Prénom <span class="asterix">*</span></label>
                                <input id="firstname" type="text" name="firstname" class="form-control" placeholder="">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email <span class="asterix">*</span></label>
                                <input id="email" type="text" name="email" class="form-control" placeholder="">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-12">
                                <label for="name">Message <span class="asterix">*</span></label>
                                <textarea id="name" type="text" name="name" class="form-control" placeholder=""></textarea>
                                <p class="comments"></p>
                            </div>
                            <p class="container-form mx-auto legal"><span class="asterix">*</span>Ces informations sont obligatoires.</p>
                            <div class="col-md-12 mx-auto">
                                <input type="submit" class="btn btn-primary btn-block" value="Envoyer">
                            </div> 
                        </div>
                    </form>
                </div>
           </div>
        </div>

        
    </body>

</html>