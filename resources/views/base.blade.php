<html>
<head>
    <title>{{ $meta_title or 'Krepšinio aikštelės' }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <a id="logo" href="{{ url('/') }}">KREPŠINIO AIKŠTELĖS</a>
        </div>

        <div id="main_menu">
            <ul>
                <li><a href="{{ url('/') }}">Pagrindinis</a></li>
                <li><a href="{{ url('aiksteles') }}">Aikštelių paieška</a></li>
                <li><a href="{{ url('apie') }}">Apie projektą</a></li>
                <li><a href="{{ url('kontaktai') }}">Kontaktai</a></li>
                @if(Auth::check())
                <li><a href="{{ url('admin/aiksteles') }}">Aikštelės</a></li>
                <li><a href="{{ url('admin/aiksteliu_tipai') }}">Aikštelių tipai</a></li>
                <li><a href="{{ url('admin/miestai') }}">Miestai</a></li>
                <li><a href="{{ url('logout') }}">Atsijungti</a></li>
                @else
                <li><a href="{{ url('login') }}">Prisijungti</a></li>
                    @endif
            </ul>
            <div class="clear"></div>
        </div>

        <div id="content">
            @yield('content')
        </div>

        <div id="footer">
            © {{ date('Y') }} PHPpamokos.lt Visos teisės saugomos
        </div>
    </div><!-- end wrapper -->

</body>
</html>