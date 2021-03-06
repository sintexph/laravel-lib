<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $page_title }}</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    @if(isset($start_script))
        {{ $start_script }}
    @endif
    <link rel="stylesheet" href="https://cdn.sportscity.com.ph/AdminLTE-2.4.5/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.sportscity.com.ph/AdminLTE-2.4.5/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.sportscity.com.ph/AdminLTE-2.4.5/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdn.sportscity.com.ph/AdminLTE-2.4.5/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdn.sportscity.com.ph/AdminLTE-2.4.5/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://cdn.sportscity.com.ph/css/sintex-style.css">
    <link rel="stylesheet" href="https://cdn.sportscity.com.ph/css/logo.css">
    <link rel="stylesheet" href="https://cdn.sportscity.com.ph/fonts/google.css">
    
</head>
<body class="hold-transition fixed {{ $skin ?? 'skin-black' }} layout-top-nav {{ $body_options ?? '' }}">
    <div class="wrapper" id="{{ $body_id ?? '' }}">

        @if(isset($navigation) || isset($nav_brand))
        <header class="main-header">
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        @if(isset($nav_brand))
                        {!! $nav_brand !!}
                        @endif
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    @if(isset($navigation))
                    {{ $navigation }}
                    @endif
                </div>
            </nav>
        </header>
        @endif
        @if(isset($breadcrumbs))
        <div class="breadcrumb-container">
            <div class="container">
                <ol class="breadcrumb">
                    {{ $breadcrumbs }}
                </ol>
            </div>
        </div>
        @endif
        <div class="content-wrapper">
            <div class="container">
                @if(isset($header_title))
                <section class="content-header">
                    <h1>{{ $header_title }}
                        @if(isset($header_title_sm))
                        <small>{{ $header_title_sm }}</small>
                        @endif
                    </h1>
                    @if(isset($header_tools))
                    {{ $header_tools }}
                    @endif
                </section>
                @endif
                <section class="content">
                    {{ $content }}
                </section>
            </div>
        </div>
         @if(isset($footer))
            <footer class="main-footer">
                <div class="container">
                    {{$footer}}
                </div>
            </footer>
        @endif
    </div>
    <script src="https://cdn.sportscity.com.ph/AdminLTE-2.4.5/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.sportscity.com.ph/AdminLTE-2.4.5/bower_components/bootstrap/dist/js/bootstrap.min.js">
    </script>
    <script
        src="https://cdn.sportscity.com.ph/AdminLTE-2.4.5/bower_components/jquery-slimscroll/jquery.slimscroll.min.js">
    </script>
    <script src="https://cdn.sportscity.com.ph/AdminLTE-2.4.5/bower_components/fastclick/lib/fastclick.js"></script>
    <script src="https://cdn.sportscity.com.ph/AdminLTE-2.4.5/dist/js/adminlte.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>
    @if(isset($end_script))
        {{ $end_script }}
    @endif
</body>
</html>
