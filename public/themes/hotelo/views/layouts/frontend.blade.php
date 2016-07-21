@include('layouts.header_front')

<body>
<header role="banner">
    <div id="cd-logo"><a href="#0"><img src="img/cd-logo.svg" alt="Logo"></a></div>

    <nav class="main-nav">
        <ul>
            <!-- inser more links here -->
            <li><a class="cd-signin" href="#0">Sign in</a></li>
            <li><a class="cd-signup" href="#0">Sign up</a></li>
        </ul>
    </nav>
</header>





<main class="cd-main-content">

@yield('content')

</main> <!-- cd-main-content -->

@include('layouts.footer_front')