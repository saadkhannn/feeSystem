@include('header')
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<div class="login-block">



    <button  style="margin: 5px" type="button" onclick="window.location='{{ url('/admindasboard') }}'">IT</button>
    <button  style="margin: 5px" type="button" onclick="window.location='{{ url('/computing') }}'">COMPUTING</button>
    <button  style="margin: 5px" type="button" onclick="window.location='{{ url('/admindashboard') }}'">ARTS</button>



</div>

<link rel="stylesheet" href="/css/login.css">