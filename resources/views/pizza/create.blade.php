<x-header/>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="/css/create.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akronim&display=swap" rel="stylesheet">
    <title>create pizza</title>
</head>

@extends('layouts/app')

@section('content')

<x-header>

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

    <section class="main">
        <header class="header">
            <h1 class="header__h1">Pizza factory</h1>
            <p class="header__p">Create your own pizza menu.</p>
        </header>
        <section class="form-part">
            <form action="#" class="new-pizza">
                <div>
                    <label for="new-pizza__name" class="label-content">Enter pizza name*:</label>
                    <input type="text" name="new-pizza__name" class="new-pizza__name" placeholder="Max 30 characters" maxlength="30">
                </div>
                <div>
                    <label for="new-pizza__price" class="label-content">Enter price*:</label>
                    <input type="number" name="new-pizza__price" class="new-pizza__price" placeholder="Positive number only" step="0.01" min="0">
                </div>
                <div>
                    <label for="new-pizza__toppings" class="label-content">Select pizza topping:</label>
                    <select name="new-pizza__toppings" class="new-pizza__toppings">
                        <option value="0">cow</option>
                        <option value="1">hen</option>
                        <option value="2">pig</option>
                        <option value="3">maize</option>
                        <option value="3">meat</option>
                    </select>
                </div>
                <div>
                    <label for="new-pizza__photo" class="label-content">Select pizza photo:</label>
                    <select name="new-pizza__photo" class="new-pizza__photo">
                        <option value="0">pig photo</option>
                        <option value="1">Salami thick</option>
                        <option value="2">Chicken cheesy</option>
                        <option value="3">cow photo</option>
                        <option value="4">Maize photo</option>
                    </select>
                </div>

            </form>
            <p>*Required</p>
            <div class="add-pizza-part">
                <button class="add-new-pizza">Add Pizza</button>
            </div>
        </section>
        <section class="display-part">
            <div class="main-heading">
                Pizza menu
            </div>
            <hr>
            <div class="sort-main">
                <p class="sort-option sort-name">Sort by name &#9660;</p>
                <p class="sort-option sort-price">Sort by price &#9660;</p>
                <p class="sort-option sort-heat">Sort by topping &#9660;</p>
                <p class="sort-option sort-heat">Sort by date &#9660;</p>
            </div>
            <div class="show">
            </div>
        </section>
    </section>

    <script type="text/javascript" src="js/create.js"></script>

@endsection

