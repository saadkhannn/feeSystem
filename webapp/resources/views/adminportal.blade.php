@include('header')
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<div class="logo"></div>
<div class="login-block">
    <h1>ADMIN PORTAL</h1>
    <input type="text" value="" placeholder="Enter ID" id="username" />
    <input type="password" value="" placeholder="Password" id="password" />
   

    

   



    <button type="button" onclick="window.location='{{ url('/admindashboard') }}'">LOG IN</button>
</div>
<link rel="stylesheet" href="/css/login.css">