@extends('layouts.app')

<html>
    <head>
@section('content')
        <style>
            @import url(https://fonts.googleapis.com/css?family=Cabin+Sketch:700|Patrick+Hand+SC|Waiting+for+the+Sunrise);
        body{
        font-family:Patrick Hand SC;
        font-size:30px;
        }
        h1{
        font-family:Cabin Sketch;
        font-size:80px;
        }
        form{
        background-color:#211e1e;
        color:white;
        border-radius:5px;
        height:auto;
        width:450px;
        }
        #wrappaa{
        margin-top:30px;
        margin-bottom: 50px;
        float:center;
        }
        input{
        font-family:Waiting for the Sunrise;
        font-size:17px;
        font-weight:bold;
        }
        </style>

    </head>
<body>

    <div class="container">
            <div class="placeholder">
                <div class="parallax-window" data-parallax="scroll" data-image-src="img/simple-house-01.jpg">
                    <div class="tm-header">

                        <div class="row tm-header-inner">
                            <div class="col-md-6 col-12">
                                <img src="img/simple-house-logo.png" alt="Logo" class="tm-site-logo" />
                                <div class="tm-site-text-box">
                                    <h1 class="tm-site-title">Simple Safari</h1>
                                    <h6 class="tm-site-description">Tour-Guides</h6>
                                </div>
                            </div>

                            <nav class="col-md-6 col-12 tm-nav">
                                <ul class="tm-nav-ul">
                                <li class="tm-nav-li"><a href="/" class="tm-nav-link ">Home</a></li>
								<li class="tm-nav-li"><a href="contact" class="tm-nav-link">Contact</a></li>
								<li class="tm-nav-li"><a href="login" class="tm-nav-link ">LogIn</a></li>
                                <li class="tm-nav-li"><a href="order" class="tm-nav-link active">Order</a></li>
                                <li class="tm-nav-li"><a href="user" class="tm-nav-link ">blog</a></li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
            </div></div>
  <div id="wrappaa">
  <div id="inputs">
  <div>
    <center>
        <p> {{ $id }} </p>
</div>
</div>
</body>
@endsection

</html>


