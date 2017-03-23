<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/app/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="/app/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/app/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="/app/bootstrap-theme.min.css">
        <script src="/app/bootstrap.min.css"></script>
        <script src="/app/jquery-3.1.1.min.js"></script>

        <title>E-Diary</title>

        <link rel="shortcut icon" href="unnamed.png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #003380;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #003380;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                font-size: 150px;
                
            }
            body {
                background-image: url("ezhednevnik-ruchka-tetrad.jpg");
                background-repeat: no-repeat;
                background-size: 100%;
            }
            .container {
                color:#202020;
                padding: 80px 120px;

            }
            footer {
               background-color: #555;
               color: white;
               padding: 15px;
            }



            </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    E-Diary
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                    <a href="about.com">About</a>
                </div>
            </div>
        </div>
       
       <center> <div class="container text-center">
  <h3>YOUR DIARY</h3>
  <p><em>express yourself out!</em></p>
  <p>We have created an online Diary just for you!You can write anything you want and express yourself. You can also write your own stories for fun!.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <br>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p><strong>Express your feelings!</strong></p><br>
      <img src="Dear-Diary-wide-i.jpg" alt="Random Name" width="1000" height="400">
    </div>
    <div class="col-sm-4">
      <p><strong>Be an Author!</strong></p><br>
      <img src="girl-writing.jpg" alt="Random Name" width="1000" height="400">
    </div>
    <div class="col-sm-4">
      <p><strong>Relax your mind by writing!</strong></p><br>
      <img src="okno-cvetok-rastenie-zapisnaya.jpg" alt="Random Name" width="1000" height="400">
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>@ E-Diary.com / LaravelProjects - Made by Angela requinto</p>
  <p> La Verdad Christian College Apalit Pampanga</p>
</footer>



  



    </body>
</html>
