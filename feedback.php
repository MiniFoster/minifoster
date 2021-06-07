<!DOCTYPE HTML>
<html lang="en-US">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-178006205-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-178006205-1');
</script>   
<meta charset="utf-8"><meta name="description" content="MiniFoster - Give us Feedback" /><meta name="keywords" content="feedback, FeedBack, Feedback, feedBack" />
<meta name="author" content="miniFoster" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><meta http-equiv="content-language" content="en-US" />
<meta name="distribution" content="global" /><meta name="rating" content="general" /> <link rel="alternate" href="http://minifoster.com/feedback" hreflang="en-us" />
<meta property="og:title" content="Feedback"/><meta property="og:type" content="website"/><meta property="og:description" content="MiniFoster - Give us Feedback"/>
<meta property="og:image" content="http://minifoster.com/logo/edt1.jpg"/><meta property="og:url" content="http://minifoster.com/feedback"/>
<meta property="og:site_name" content="Mini Foster"/> <!-- <meta property="fb:admins" content="500013011"/> -->
<meta name="twitter:card" content="summary"><meta name="twitter:url" content="http://minifoster.com/feedback">  
<meta name="twitter:title" content="Feedback"><meta name="twitter:description" content="MiniFoster - Give us Feedback">
<meta name="twitter:image" content="http://minifoster.com/logo/edt1.jpg"> <meta name="twitter:site" content="@Minifoster1">
<meta name="theme-color" content="#4285F4"> <meta name="msapplication-navbutton-color" content="#4285F4"><meta name="apple-mobile-web-app-capable" content="yes"> <meta name="apple-mobile-web-app-status-bar-style" content="#4285F4">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="title" content="FeedBack">
<title>FeedBack</title><link rel="icon" href="../logo/icon.jpg" type="image/jpg" sizes="16x16"><link href"http://minifoster.com" rel="canonical">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" /><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
.container {margin: auto;width: 50%;padding: 10px;border: 3px solid black;background-color: #989898;opacity: 0.8;color: white;}
@media screen and (max-width: 600px) {.container{width:100%;}}
.bk {font-family: Baskerville Old Face;}
.bkgimg {background-image:url('/images/img1.jpg');}
.footers {border-style:solid;background:#C0C0C0;font-size: 11px;margin-top:60px;}
textarea {height:100%;width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;}
@media screen and (max-width: 600px) {input {height:100%;width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;}}
.navbar-toggler-icon {display:inline-block;width:0.7em;height:0.7em;vertical-align:middle;content:"";background:no-repeat center center;background-size:100% 100%}
</style>
</head>
<body oncontextmenu="return false;">
<div class="bkgimg">
<div class="bk">
<nav class="navbar navbar-expand-md navbar-light" style="background-color: #FFFFFF">
  <a class="navbar-brand" style="margin:auto;margin-left:120px;"><img height="30" src="..\logo\edt2.jpg" width="130" /></a>
  <button class="navbar-toggler" style="font-size:100" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="http://minifoster.com">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services">OUR SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="feedback">FEEDBACK</a>
      </li>    
    </ul>
  </div>
</nav>
</div>
<h1></h1>
<div class="container">
    <p style="text-align: center;"><b><u>Feedback Form</u></b></p>
    <p>We would love to hear your thoughts, concerns or problems with anything so we can improve!</p><hr>
    <form action="/post/feedbackPost" method="post">
       <label for="name">Name *</label><br>
       <input type="text" placeholder="First Name" id="name" name="fname" required>
       <input type="text" placeholder="Last Name" id="name" name="lname" required><br><br>
       <label for="e-mail">E-mail *</label><br>
       <input type="email" placeholder="myname@example.com" id="e-mail" name="email" required><br><br>
       <label for="comment">FeedBack *</label><br>
       <textarea id="comment" name="feedback" maxlength="254" required></textarea><br><br>
       <input style="border-color: green;" type="submit" value="Submit Feedback" id="btn-submit">
    </form>
</div>
<script>
    $(document).ready(function() { 
 
  $('#btn-submit').click(function() {  
 
    $(".error").hide();
    var hasError = false;
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var emailblockReg = /^([\w-\.]+@(?!minifoster.com)(?!Minifoster.com)(?!miniFoster.com)(?!MiniFoster.com)([\w-]+\.)+[\w-]{2,4})?$/;
 
    var emailaddressVal = $("#e-mail").val();
    if(emailaddressVal == '') {
      $("#e-maill").after('<span class="error">Please enter your email address.</span>');
      hasError = true;
    }
 
    else if(!emailReg.test(emailaddressVal)) {
      $("#e-mail").after('<span class="error">Enter a valid email address.</span>');
      hasError = true;
    }
 
    else if(!emailblockReg.test(emailaddressVal)) {
      $("#e-mail").after('<span class="error">Please not use minifoster email address.</span>');
      hasError = true
    } 
 
    if(hasError == true) { return false; }
 
    });
});
</script>
<footer class="footers">
<p>Copyright &#169; 2020 Mini Foster. All Rights Reserved.</p>
</footer>
</div>
</body>
</html>