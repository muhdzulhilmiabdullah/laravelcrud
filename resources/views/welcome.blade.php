    <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Task.CO</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: ;
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
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
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

            .title{
                color: #fff;
                font-size: 90px;
            }

            .background {
                background-color: #ffffff;
            }

            .links > a{
                color: #7a7a7a;
            }

            .links >a:hover{
                color: #000;
            }

            .fontanimation{
                -webkit-animation:colorchange 5s infinite alternate;
            }

             @-webkit-keyframes colorchange {
      0% {
        
        color: red;
      }
      
      10% {
        
        color: yellow; 
      } 
      
      20% {
        
        color: red;
      }
      
      30% {
        
        color: yellow;
      }
      
      40% {
        
        color: red;
      }
      
      50% {
        
        color: yellow;
      }
      
      60% {
        
        color: red;
      }
      
      70% {
        
        color:  yellow;
      }
      80% {
     
        color: red;
      }
      
      90% {
     
        color: yellow;
      }
      
      100% {
        
        color: red;
      }
    }




        </style>
    </head>
    <body class="background">
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <p class="fontanimation">Create a Task with us</p>
                </div>
               <div class="links">
                    <a href="{{url('/about')}}">Learn about Task.co</a>
                    <!-- <a href="{{url('highchart')}}">Highcharts</a>-->
                    
                </div> 
            </div>
        </div>
    </body>
</html>
