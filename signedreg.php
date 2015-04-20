<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "limboda";
$length = 30;

$appid = substr(str_shuffle("012345fdsfsfsf6789aaaaaabcdefghijklmasdadadnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
$appsecret = substr(str_shuffle("0123ssdaasdadasdad456789abcdefghasdada2342ijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);


$conn = mysqli_connect ($servername, $username, $password, "emotcha_db");
function NewUser()
{
  
  $userName = $_POST['uname'];
  $email = $_POST['email'];
  $password =  $_POST['pass'];
  $cpassword =  $_POST['cpass'];
  $query = "INSERT INTO user_cred(username,email,password,appid,appsecret) VALUES ('$userName','$email','$password','$appid','$appsecret')";
  $data = mysql_query ($query)or die(mysql_error());
  if($data)
  {
  echo "YOUR REGISTRATION IS COMPLETED...";
  }
}

?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <style>
        * { box-sizing:border-box; }

body {
    font-family: Helvetica;
    background: #eee;
  -webkit-font-smoothing: antialiased;
}
.header {
  position: fixed;
  left: 0;
  right: 0;
  height: 66px;
  top:0px;
  line-height: 66px;
  color: #fff;
  font-family: Helvetica;
  background-color: #4183D7;
}

a {
  text-decoration: none;
  color: inherit;
}

.header__logo {
  font-weight: 700;
  padding: 0 25px;
  float: left;
}

/* MENU */
.menu {
  float: right;
  }
  .menu a {
    padding: 0 15px;
    margin-right: 15px;
    font-size: 14.3px;
    font-weight: 550;
  }
  
  a:hover {
    color: #c5cae9;
  }



hgroup { 
    text-align:center;
    margin-top: 1em;
}

h1, h2 { font-weight: 300; }

h1 { color: #636363; }

h2 { color: #4a89dc; }

form {
    width: 480px;
    margin: 1em auto;
    padding: 3em 2em 2em 2em;
    background: #fafafa;
    border: 1px solid #ebebeb;
    box-shadow: rgba(0,0,0,0.14902) 0px 1px 1px 0px,rgba(0,0,0,0.09804) 0px 1px 2px 0px;
}

.group { 
    position: relative; 
    margin-bottom: 45px; 
}

input {
    font-size: 18px;
    padding: 10px 10px 10px 5px;
    -webkit-appearance: none;
    display: block;
    background: #fafafa;
    color: #636363;
    width: 100%;
    border: none;
    border-radius: 0;
    border-bottom: 1px solid #757575;
}

input:focus { outline: none; }


/* Label */

label {
    color: #999; 
    font-size: 18px;
    font-weight: normal;
    position: absolute;
    pointer-events: none;
    left: 5px;
    top: 10px;
    transition: all 0.2s ease;
}


/* active */

input:focus ~ label, input.used ~ label {
    top: -20px;
  transform: scale(.75); left: -2px;
    /* font-size: 14px; */
    color: #4a89dc;
}


/* Underline */

.bar {
    position: relative;
    display: block;
    width: 100%;
}

.bar:before, .bar:after {
    content: '';
    height: 2px; 
    width: 0;
    bottom: 1px; 
    position: absolute;
    background: #4a89dc; 
    transition: all 0.2s ease;
}

.bar:before { left: 50%; }

.bar:after { right: 50%; }


/* active */

input:focus ~ .bar:before, input:focus ~ .bar:after { width: 50%; }


/* Highlight */

.highlight {
    position: absolute;
    height: 60%; 
    width: 100px; 
    top: 25%; 
    left: 0;
    pointer-events: none;
    opacity: 0.5;
}


/* active */

input:focus ~ .highlight {
    animation: inputHighlighter 0.3s ease;
}


/* Animations */

@keyframes inputHighlighter {
    from { background: #4a89dc; }
    to  { width: 0; background: transparent; }
}


/* Button */

.button {
  position: relative;
  display: inline-block;
  padding: 12px 24px;
  margin: .3em 0 1em 0;
  width: 100%;
  vertical-align: middle;
  color: #fff;
  font-size: 16px;
  line-height: 20px;
  -webkit-font-smoothing: antialiased;
  text-align: center;
  letter-spacing: 1px;
  background: transparent;
  border: 0;
  border-bottom: 2px solid #3160B6;
  cursor: pointer;
  transition: all 0.15s ease;
}
.button:focus { outline: 0; }


/* Button modifiers */

.buttonBlue {
  background: #4a89dc;
  text-shadow: 2px 2px 0 rgba(39, 110, 204, .5);
}

.buttonBlue:hover { background: #357bd8; }


/* Ripples container */

.ripples {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  background: transparent;
}


/* Ripples circle */

.ripplesCircle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  width: 0;
  height: 0;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.25);
}

.ripples.is-active .ripplesCircle {
  animation: ripples .4s ease-in;
}


/* Ripples animation */

@keyframes ripples {
  0% { opacity: 0; }

  25% { opacity: 1; }

  100% {
    width: 200%;
    padding-bottom: 200%;
    opacity: 0;
  }
}

footer { text-align: center; }

footer p {
    color: #888;
    font-size: 13px;
    letter-spacing: .4px;
}

footer a {
    color: #4a89dc;
    text-decoration: none;
    transition: all .2s ease;
}

footer a:hover {
    color: #666;
    text-decoration: underline;
}

footer img {
    width: 80px;
    transition: all .2s ease;
}

footer img:hover { opacity: .83; }

footer img:focus , footer a:focus { outline: none; }

        </style>
    </head>
    <body>
      <header class="header">
      
      <a href="#" class="header__icon" id="header__icon"></a>
      <a href="#" class="header__logo">EMOTCHA</a>
      
       <nav class="menu">
        <a href="index.html ">HOME</a>
        <a href="docs.html">DOCS</a>
        <a href="sample.html">SAMPLE</a>
        <a href="signed.html"><b>DASHBOARD</b></a>
        <a href="#">LOGOUT</a>
      </nav>
      
    </header>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <hgroup>
  <h1>A</h1>
  <h2>Howdy #username?</h2>
</hgroup>
<form>
  <center><img src="super.png" style="border-radius: 100px;
    border: 4px solid #4183D7;width:150px; height:150px; background-color:#89C4F4"/></center><br><br>
  <div class="group">
    <input type="text" disabled value="username : rebel_io"><span class="highlight"></span><span class="bar"></span>
    
  </div>
  <div class="group">
    <input type="email" disabled value="email : arjunskmr@gmail.com"><span class="highlight"></span><span class="bar"></span>
   
  </div>
   <div class="group">
    <input type="text" disabled value="apikey : asd123edasd23dasd4rfdfgasdadasda"><span class="highlight"></span><span class="bar"></span>
    
  </div>
  <div class="group">
    <input type="text" disabled value="apisecret : asd23dansid9asmdad9adsnamd9a"><span class="highlight"></span><span class="bar"></span>
    
  </div>
  <div class="group">
    <input type="text" disabled value="number of calls remaining : 222"><span class="highlight"></span><span class="bar"></span>
    
  </div>
 
  
</form>
<footer><a href="http://www.polymer-project.org/" target="_blank"><img src="https://www.polymer-project.org/images/logos/p-logo.svg"></a>
  <p>Secure forms? Delivered.  <a href="http://www.tudlr.com/" target="_blank">EMOTCHA</a></p>
</footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript">
         $(window, document, undefined).ready(function() {

  $('input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });

  var $ripples = $('.ripples');

  $ripples.on('click.Ripples', function(e) {

    var $this = $(this);
    var $offset = $this.parent().offset();
    var $circle = $this.find('.ripplesCircle');

    var x = e.pageX - $offset.left;
    var y = e.pageY - $offset.top;

    $circle.css({
      top: y + 'px',
      left: x + 'px'
    });

    $this.addClass('is-active');

  });

  $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
    $(this).removeClass('is-active');
  });

});
        </script>

        
       
    </body>
</html>
