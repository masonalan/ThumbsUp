<?php
$user = Sentry::getUser();
$user_name = $user->first_name.' '.$user->last_name;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title>Thumbs Up</title>

    
<style type="text/css">
body {
    font-family: Helvetica;
}
li > a:hover {
    text-decoration: none;
}
</style>





{{HTML::style('http://yui.yahooapis.com/pure/0.3.0/pure-min.css')}}
{{HTML::style('css/layouts/side-menu.css')}}
</head>
<body>






<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu pure-menu-open">
            <a class="pure-menu-heading" href="wall">Thumbs Up</a>

            <ul>
                @if(!Sentry::check())
                <li><a href="login">Login</a></li>
                <li><a href="register">Register</a></li>
                @else
                <li><a href="logout">Logout</a></li>
                <li><a href="{{action('HomeController@profile')}}">{{$user_name}}</a></li>
                <li><a href="wall">Wall</a></li>
                <li><a href="settings">Account Settings</a></li>
                @endif
            </ul>
        </div>
    </div>

    <div id="main">

        <div class="content">
        @yield('content')

         </div>
</div>





<script src="js/ui.js"></script>


</body>
</html>
