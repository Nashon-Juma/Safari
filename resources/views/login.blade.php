<!DOCTYPE html>
<html>

<head>
    <x-header/>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Safari LogIn</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
	<link href="css/templatemo-style.css" rel="stylesheet" />
    <link href="css/login.css" rel="stylesheet" />

    <script>
        /* ------------------------------------ Click on login and Sign Up to  changue and view the effect
---------------------------------------
*/

const time_to_show_login = 400;
const time_to_hidden_login = 200;

function change_to_login() {
document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";
document.querySelector('.cont_form_login').style.display = "block";
document.querySelector('.cont_form_sign_up').style.opacity = "0";

setTimeout(function(){  document.querySelector('.cont_form_login').style.opacity = "1"; },time_to_show_login);

setTimeout(function(){
document.querySelector('.cont_form_sign_up').style.display = "none";
},time_to_hidden_login);
  }

  const time_to_show_sign_up = 100;
  const time_to_hidden_sign_up = 400;

function change_to_sign_up(at) {
  document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
  document.querySelector('.cont_form_sign_up').style.display = "block";
document.querySelector('.cont_form_login').style.opacity = "0";

setTimeout(function(){  document.querySelector('.cont_form_sign_up').style.opacity = "1";
},time_to_show_sign_up);

setTimeout(function(){   document.querySelector('.cont_form_login').style.display = "none";
},time_to_hidden_sign_up);


}

const time_to_hidden_all = 500;

function hidden_login_and_sign_up() {

document.querySelector('.cont_forms').className = "cont_forms";
document.querySelector('.cont_form_sign_up').style.opacity = "0";
document.querySelector('.cont_form_login').style.opacity = "0";

setTimeout(function(){
document.querySelector('.cont_form_sign_up').style.display = "none";
document.querySelector('.cont_form_login').style.display = "none";
},time_to_hidden_all);

  }

    </script>

</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
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

    <div class="cotn_principal"  >
        <div class="cont_centrar">

          <div class="cont_login">
        <div class="cont_info_log_sign_up">
              <div class="col_md_login">
        <div class="cont_ba_opcitiy">

                <h2>LOGIN</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <button class="btn_login" onclick="change_to_login()">LOGIN</button>
          </div>
          </div>
        <div class="col_md_sign_up">
        <div class="cont_ba_opcitiy">
          <h2>SIGN UP</h2>


          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

          <button class="btn_sign_up" onclick="change_to_sign_up()">SIGN UP</button>
        </div>
          </div>
               </div>


            <div class="cont_back_info">
               <div class="cont_img_back_grey">
               <img src="img/simple-house-01.jpg" alt="" />
               </div>

            </div>
        <div class="cont_forms" >
            <div class="cont_img_back_">
               <img src="https://plus.unsplash.com/premium_photo-1664361480105-33afc4559c40?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8c3BsYXNofGVufDB8fDB8fHww" alt="" />
               </div>
         <div class="cont_form_login">
        <a href="#" onclick="hidden_login_and_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
           <h2>LOGIN</h2>
         <input type="text" placeholder="Email" />
        <input type="password" placeholder="Password" />
        <button class="btn_login" onclick="change_to_login()">LOGIN</button>
          </div>

           <div class="cont_form_sign_up">
        <a href="#" onclick="hidden_login_and_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
             <h2>SIGN UP</h2>
        <input type="text" placeholder="Email" />
        <input type="text" placeholder="User" />
        <input type="password" placeholder="Password" />
        <input type="password" placeholder="Confirm Password" />
        <button class="btn_sign_up" onclick="change_to_sign_up()">SIGN UP</button>

          </div>

            </div>

          </div>
         </div>
        </div>

</body>
