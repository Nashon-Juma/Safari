@extends('layouts.app')

<html>
    <head>
        <x-header/>
@section('content')
    <link href="css/order.css" rel="stylesheet" />

    </head>
<body>
    <div class="container">
        <!-- Top box -->
            <!-- Logo & Site Name -->
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
                                <li class="tm-nav-li"><a href="create" class="tm-nav-link ">Create</a></li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
            </div></div>
            @foreach ($pizzas as $pizza)
            <div><center>
                {{ $pizza->name }}---{{ $pizza->type }}--{{ $pizza->base }}---{{ $pizza->year }}

            </div>
            @endforeach
  <div id="wrappaa">
  <div id="inputs">
  <div>
    <center>
        <form name="input" action="run" method="get">
  <h1>Order</h1>
        First name: <input type="text" name="firstname" placeholder="Nashon"><br/>
        Last name: <input type="text" name="lastname" placeholder="Juma"><br/>
        Address:<input type="email" name="email" placeholder="1234 Nairobi, 00100">
 <br/>
    <p>Pizza toppings (Check all that apply)</p>
    <input type='checkbox' checked>lion
    <input type='checkbox'>Leopard
    <input type='checkbox'>Tiger
    <p>Comments:</br></p>
	  <textarea></textarea>
	  <p></p>
  <input  type="submit" value="Submit" >
</form>
</div>
</div>
</body>
@endsection

</html>
