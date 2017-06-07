<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TESTE</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/form-elements.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/app.css" >  

        <link rel="shortcut icon" href="ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="icoo/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">

        <script src="js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/jquery.maskedinput.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            jQuery(function ($) {
                $("#telefoneCelular").mask("(99) 99999-9999");                
            });
        </script> 
        
    </head>
    <body>
        <div class="container">
            @yield('producao')
        </div>

        <!-- Javascript -->          
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/scripts.js"></script>   
        <script src="js/buscaCep.js"></script> 

    </body>
</html>


