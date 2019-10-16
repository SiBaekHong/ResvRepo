<!DOCTYPE html>
<html lang='ko'>



    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> @yield('title')</title>
        <link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' rel="stylesheet">
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel="stylesheet">
        <script src='https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.7.3/p5.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.7.1/addons/p5.dom.min.js'></script>
        <script src="https://code.jquery.com/jquery-2.1.0.js"></script>
        <script src="{{ asset('/js/smil.check.js') }}"></script>    
        <script src="{{ asset('/js/smil.user.js') }}"></script>    
        
    </head>

    <body>

        <div class="container">
            @yield('content')
        </div>

    </body>

</html>