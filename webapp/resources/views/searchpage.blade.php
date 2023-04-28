@include('header')
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<div class="logo"></div>
<div class="login-block">
    <h1>SEARCH</h1>
    <input type="text" value="" placeholder="Enter ID" id="search" />
    
   

    

   



    <button type="button" onclick="window.location='{{ url('/searchresults') }}'">Search</button>
</div>
<link rel="stylesheet" href="/css/login.css">