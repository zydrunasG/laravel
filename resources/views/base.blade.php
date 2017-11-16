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

                @if(!Auth::check())
                    {!! Form::open(array('url' => 'aiksteles')) !!}
                    Miestas: {!! Form::select('city_id', \App\City::pluck('title', 'id')), Request::get('city_id') !!}
                    Aikštelės tipas: {!! Form::select('type_id', \App\Type::pluck('title','id')), Request::get('type_id') !!}
                    Pavadinimas: {!! Form::text('search'), Request::get('search') !!}
                    {!! Form::submit('Ieškoti') !!}
                    {!! Form::close() !!}
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