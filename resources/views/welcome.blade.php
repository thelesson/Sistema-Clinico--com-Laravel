<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Med</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #dcecdc;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;

                /***MEU CSS***/

    /*background-image: url('http://www.freeimageslive.com/galleries/medical/pics/doctors_instruments.jpg');*/
    background-image: url('/imagens/fundo00.jpg');
    background-size: cover;
    background-blend-mode: color-burn;

                /******/
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
                color:#302e4e;
            }

            .links > a {
                color: #10080d;
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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Entrar</a>
                    <a href="{{ url('/register') }}">Registrar</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Sistema Hospitalar
                </div>

                <div class="links">
                    <a href="#">Especialidades</a>
                    <a href="#">Consultas</a>
                    <a href="#">Exames</a>
                    <a href="#">Contato</a>
                    <a href="#">Sobre o Sistema</a>
                </div>
            </div>
        </div>
    </body>
</html>
