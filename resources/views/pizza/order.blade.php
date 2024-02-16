@extends('layouts.app')

<html>
    <head>
        <x-header/>
@section('content')
    <link href="css/order.css" rel="stylesheet" />

    </head>
<body>

<div class="tm-site-text-box">
    <h1 class="tm-site-title">Simple Safari</h1>
		<h6 class="tm-site-description">Tour-Guides</h6>
    </div>
		<ul class="tm-nav-ul">
            <li class="tm-nav-li"><a href="/" class="tm-nav-link active">Home</a></li>
			<li class="tm-nav-li"><a href="contact" class="tm-nav-link">Contact</a></li>
			<li class="tm-nav-li"><a href="login" class="tm-nav-link ">LogIn</a></li>
            <li class="tm-nav-li"><a href="order" class="tm-nav-link ">Order</a></li>
		</ul>

  <div id="wrappaa">
  <div id="inputs">
  <div>
    <center>
        <form name="input" action="create_user" method="post">
  <h1>Order</h1>
        First name: <input type="text" name="firstname" placeholder="Nashon"><br/>
        Last name: <input type="text" name="lastname" placeholder="Juma"><br/>
        Address:<input type="email" name="email" placeholder="1234 Nairobi, 00100">
 <br/>
    <p>Pizza toppings (Check all that apply)</p>
    <input type='checkbox' >cow
    <input type='checkbox'>hen
    <input type='checkbox'>pig
    <input type='checkbox' >maize
    <input type='checkbox'>meat
 <center> <input  type="submit" value="Submit" >
</form>
</div>
</div>
<button class="add-new-pizza" id="myButton">Create pizza</button>

</body>
<script>
    document.getElementById("myButton").addEventListener("click", function() {
        // Specify the route URL you want to navigate to
        var routeUrl = "order/create";

        // Navigate to the specified route
        window.location.href = routeUrl;
    });
    </script>

@endsection

</html>
