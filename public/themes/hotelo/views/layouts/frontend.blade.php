@include('layouts.header_front')

<body>
<header role="banner">
    <div  id="cd-logo"><a style="color: #fff;" href="/">Hotelo</a></div>

    <nav class="main-nav">



            <ul>

            @if(!Auth::user())
                <!-- inser more links here -->
                <li><a class="cd-signin" href="#0">ورود</a></li>
                <li><a class="cd-signup" href="#0">ثبت نام</a></li>
                    <li><a class="cd-signup" href="/user/hire">استخدام</a></li>

                @else

                <li><a class="cd-signup" href="/">مشاهده پروفایل</a></li>
                    <li><a class="cd-signup" href="/user/logout">خروج</a></li>

                @endif
            </ul>







    </nav>
</header>





<main class="cd-main-content">

@yield('content')

</main> <!-- cd-main-content -->

@include('layouts.footer_front')