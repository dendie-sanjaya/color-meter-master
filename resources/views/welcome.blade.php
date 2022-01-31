<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tokoaja</title>

        <!-- Fonts -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
				.server-action-menu {
					 background-color: transparent;
					 background-image: linear-gradient(to bottom, rgba(30, 87, 153, 0.2) 0%, rgba(125, 185, 232, 0) 100%);
					 background-repeat: repeat;
					 border-radius:10px;
					 padding: 5px;
				}
				.server-action-menu a:hover{
					 background-color: #ccc;
				}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">


            <div class="container">
					<div class="row">
						<div class="col-6 align-top" style="text-align:center;" >
							<div class="server-action-menu"> 
								<a href="/product/detail/nuface/4" >
									<img src="/assets/images/11022604_1433125910316344_9007544362694274058_o.jpg" class=" mx-auto d-block" style="width:80%" />
								</a>
							</div>
						</div>
						<div class="col-6 align-top" style="text-align:center;" >
							<div class="server-action-menu">	
								<a href="/product/detail/owl/1">
									<img src="/assets/images/owl_logo.webp" class=" mx-auto d-block"  style="width:60%"/>
								</a>
							</div>
						</div>
					</div>

                
            </div>
        </div>
    </body>
</html>
