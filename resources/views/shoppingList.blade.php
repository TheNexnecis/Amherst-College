<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Riccardo Panaia Laravel Shopping List Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref"><!-- full-height">-->
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
                <div class="m-b-md"><!-- title">-->
                    <h3>Holiday Gift Shopping List</h3>
                </div>

                <div class="container">
					<form name="shopList" id="shopList" action="" method="">
					<div class="row">
						<div class="col">
						Product Name:<br /><input type="text" name="productName" id="productName" value="">
						</div>
						<div class="col">
						Quantity:<br /><input type="number" name="productQty" id="productQty" value="">
						</div>
						<div class="col">
						Recipent:<br /><input type="text" name="productRecipent" id="productRecipent" value="">
						</div>
					</div>
					<div class="row" style="margin-top:10px;">
						<div class="col">
						<button name="btnSubmit" id="btnSubmit">Submit</button>
						<button name="btnReset" id="btnReset">Reset</button>						
					</div>
					</form>
					<div id="holiday_shopplist_list_display">
					<!-- call to shopping list template -->
					</div>
                </div>
            </div>
        </div>
    </body>
</html>
