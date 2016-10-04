<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link href="/css/styles.css" rel="stylesheet" type="text/css">



        <script src="https://use.fontawesome.com/95088d75b6.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
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
                z-index: 99;
            }

            .content {
                z-index: 99;
                text-align: center;
            }

            .title {
                font-size: 84px;
                color: #fff;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


            @media all and (max-width:768px){
                .container{
                    min-width: 320px;
                }
                .title{
                    font-size: 42px;
                }
                .btn-landing{
                    min-height: 80px;
                    margin-bottom: 20px;
                    font-size: 11px;
                    font-weight: 600;
                }
                .btn-landing h2{
                    font-size: 28px;
                    margin: 5px;
                    font-weight: 300;
                }

            }
        </style>
    </head>
    <body >
        <div class="overlay"></div>
        <div class="flex-center position-ref full-height bg-img ">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">{{ trans('app.Login') }}</a>
                    <a href="{{ url('/register') }}"> {{ trans('app.Register') }}</a>
                </div>
            @endif

            <div class="content container">
                <div class="title m-b-md">
                    Chécalo Aquí
                </div>
                    <div class="row">
                        <div class="col-md-5">
                            <a class="btn btn-lg btn-block btn-success btn-landing">
                                Quieres cazar las mejores ofertas?
                                <h2><i class="fa fa-shopping-cart" aria-hidden="true"></i> Click aquí</h2>
                            </a>
                        </div>
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-lg btn-block btn-info btn-landing">
                                Quieres anunciar tu negocio o servicios,<br> y llevarlo al siguiente nivel?
                                <h2><i class="fa fa-rocket" aria-hidden="true"></i> Click aquí</h2>
                            </a>
                        </div>
                    </div>
            </div>

        </div>
    </body>
</html>
