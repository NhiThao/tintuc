<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title', 'HOME') - {{ config('app.name') }}</title>
        @include('giaodien.header')
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>

                <ul class="nav navbar-nav">

                    <li ><a href="../user/index.php">Trang chu</a></li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Gioi thieu
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Page 1-1</a></li>
                            <li><a href="#">Page 1-2</a></li>
                            <li><a href="#">Page 1-3</a></li>
                        </ul>
                    </li>

                    <li><a href="../user/tintuc.php">Tin tuc</a></li>
                    <li><a href="#">Page 2</a></li>

                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Gop y</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Login
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../user/hocsinh.php">Hoc sinh</a></li>
                            <li><a href="#">Giao vien</a></li>
                            <li><a href="../admin/index.php">Admin</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>        
        @include('giaodien.footer')
    </body>
</html>

