<!-- Include Header From header.blade.php -->
@include('layouts.header_back')


<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
    {{--<div class="user-panel">--}}
    {{--<div class="pull-left image">--}}
    {{--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">--}}
    {{--</div>--}}
    {{--<div class="pull-left info">--}}
    {{--<p>Alexander Pierce</p>--}}
    {{--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    <!-- search form -->
    {{--<form action="#" method="get" class="sidebar-form">--}}
    {{--<div class="input-group">--}}
    {{--<input type="text" name="q" class="form-control" placeholder="Search...">--}}
    {{--<span class="input-group-btn">--}}
    {{--<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>--}}
    {{--</button>--}}
    {{--</span>--}}
    {{--</div>--}}
    {{--</form>--}}
    <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">منو اصلی</li>
            <li class="active treeview">
                <a href="/pay/admin">
                    <i class="fa fa-dashboard"></i> <span>داشبورد</span> <i class=" pull-right"></i>
                </a>

            </li>

            @foreach($menus as $id => $menu)

                @if(count($menu['submenu']) !=0)
                    <li class="treeview">
                        <a href="{{$menu['url']}}">
                            <i class="fa fa-pie-chart"></i>
                            <span>{{$menu['title']}}</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            @foreach($menu['submenu'] as $submenu)
                                <li><a href="{{$submenu['url']}}"><i class="fa fa-circle-o"></i>    {{$submenu['title']}}</a></li>
                            @endforeach

                        </ul>
                    </li>
                @else


                    <li>
                        <a href="pages/calendar.html">
                            <i class="fa fa-calendar"></i> <span>Calendar</span>
                            <small class="label pull-right bg-red">3</small>
                        </a>
                    </li>

                @endif

            @endforeach


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h4>
            {{$title}}

        </h4>
        <ol class="breadcrumb">
            <li class="active">{{$title}}</li>
            <li><a href="/pay/admin"> خانه <i class="fa fa-dashboard"></i></a></li>

        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        @yield('content')

    </section>
    <!-- /.content -->
</div>

<!-- Include Footer From footer.blade.php -->
@include('layouts.footer_back')
