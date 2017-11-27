<html>
<head>
    <title>{{ $meta_title or 'Miestų aikštelės' }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jasny-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sticky.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<nav class="navbar navbar-default navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Miestų aikštelės</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">


            {!!  Form::open(array('url' => 'aiksteles', 'class' => 'navbar-form navbar-left'))  !!}

            <div class="form-group">

                {!! Form::text('search', old('search'), array('class' => 'form-control', 'placeholder' => 'Ieškoti aišktelių')) !!}
                {!! Form::submit('Ieškoti', array('class' => 'btn btn-default')) !!}
                {!! Form::close() !!}
            </div>

            <ul class="nav navbar-nav pull-right">
                <li class="active"><a href="{{ url('/') }}">Pagrindinis</a></li>
                <li><a href="{{ url('apie') }}">Apie projektą</a></li>
                @if(Auth::check())
                    <li><a href="{{ url('admin/aiksteles') }}">Aikštelės</a></li>
                    <li><a href="{{ url('admin/aiksteliu_tipai') }}">Aikštelių tipai</a></li>
                    <li><a href="{{ url('admin/miestai') }}">Miestai</a></li>
                    <li><a href="{{ url('logout') }}">Atsijungti</a></li>
                @else
                    <li><a href="{{ url('login') }}">Prisijungti</a></li>
                    <li><a href="{{ url('register') }}">Registruotis</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>




<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @yield('content')
        </div>
    </div>

</div>


<footer class="footer">
    <div class="container">
        <p class="text-muted"> © {{ date('Y') }} Visos teisės saugomos</p>
    </div>
</footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>
</body>
</html>