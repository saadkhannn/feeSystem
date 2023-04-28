@include('header')
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<div class="login-block">



    <button  style="margin: 5px" type="button" onclick="window.location='{{ url('/admindasboard') }}'">STUDENTS WITH FULL PAID FEE</button>
    <button  style="margin: 5px" type="button" onclick="window.location='{{ url('/searchpage') }}'">STUDENTS WITH PARTIAL PAID FEE</button>




</div>

<link rel="stylesheet" href="/css/login.css">